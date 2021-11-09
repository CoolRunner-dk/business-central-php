<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query;


use BusinessCentral\EntityCollection;
use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Exceptions\FatalException;
use BusinessCentral\Exceptions\QueryException;
use BusinessCentral\Query\Contracts\Expands;
use BusinessCentral\Query\Contracts\Filters;
use BusinessCentral\Query\Contracts\Pagination;
use BusinessCentral\Query\Contracts\Selects;
use BusinessCentral\Query\Contracts\Sorting;
use BusinessCentral\Schema;
use BusinessCentral\SDK;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;

/**
 * Class Builder
 *
 * @method $this to(string $component, string[]|string $id = null)
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Query
 *
 * @mixin EntityCollection
 */
class Builder
{
    use Filters;
    use Expands;
    use Pagination;
    use Sorting;
    use Selects;

    protected $components = [];
    protected $sdk;

    protected $with_count = true;

    public function __construct(SDK $sdk)
    {
        $this->sdk = $sdk;

        $this->limit = $sdk->option('default_collection_size', 20);
    }

    public function sendRequest(string $method, array $data = null, array $headers = [], array $options = [])
    {
        $uri  = $this->getUri($options['no_ext'] ?? false);
        $time = microtime(true);

        $request_options = array_filter([
            RequestOptions::JSON    => $data,
            RequestOptions::HEADERS => $headers,
        ]);

        $language = $options['lang'] ?? $this->sdk->option('language');

        if($language) {
            $request_options[RequestOptions::HEADERS]['Accept-Language'] = $language;
        }

        try {
            $response = $this->sdk->client->request($method, $uri, $request_options);

            $result = json_decode($response->getBody()->getContents(), true);
            $this->sdk->logRequest($method, $uri, microtime(true) - $time, $request_options, $response->getStatusCode(), $result);

            return $result;

        } catch (ClientException $exception) {
            $response = $exception->getResponse();

            $result = json_decode($response->getBody()->getContents(), true);
            $this->sdk->logRequest($method, $uri, microtime(true) - $time, $request_options, $response->getStatusCode(), $result);

            throw new QueryException($this, $result, $exception);
        } catch (ServerException $exception) {
            $response = $exception->getResponse();

            $message = "Business Central responded with [{$response->getStatusCode()} - {$response->getReasonPhrase()}] - {$response->getBody()->getContents()}";

            throw new FatalException($message, $response->getStatusCode(), $exception);
        } catch (ConnectException $exception) {
            throw new FatalException('Failed to connect to Business Centralk', 500, $exception);
        }
    }


    public function fetch()
    {
        return new EntityCollection($this);
    }

    public function exists()
    {
        return !!$this->count();
    }

    public function count()
    {
        return $this->clone()->limit(0)->fetch()->count();
    }

    public function all()
    {
        return $this->limit(0)->fetch()->all();
    }

    /**
     * @return mixed
     * @throws QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function get()
    {
        return $this->sendRequest('GET');
    }

    /**
     * @param array $attributes
     * @param array $options
     *
     * @return mixed
     * @throws QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function post(array $attributes, array $options = [])
    {
        return $this->sendRequest('POST', $attributes, [], $options);
    }

    /**
     * @param array $attributes
     * @param string $etag
     *
     * @return mixed
     * @throws QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function patch(array $attributes, string $etag)
    {
        return $this->sendRequest('PATCH', $attributes, [
            'If-Match' => $etag,
        ]);
    }

    /**
     * @return mixed
     * @throws QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function delete(string $etag)
    {
        return $this->sendRequest('DELETE', null, [
            'If-Match' => $etag,
        ]);
    }

    /**
     * @param string $odata_context
     *
     * @return mixed|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function getContext(string $odata_context)
    {
        $context = explode('#', $odata_context, 2)[1] ?? false;

        if (!$context) {
            return null;
        }

        $context = preg_replace(['/\(.+\)/', '/\$entity/'], '', $context);
        $context = trim($context, '/');

        $components = collect(explode('/', $context));

        return $components->last();
    }

    /**
     * @param string $odata_context
     *
     * @return \BusinessCentral\Schema\EntityType|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function getEntityTypeBySet(string $odata_context)
    {
        return $this->sdk->schema->getEntityTypeBySet($this->getContext($odata_context));
    }

    /**
     * @param string $odata_context
     *
     * @return \BusinessCentral\Schema\EntitySet|mixed|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function getEntitySet(string $odata_context)
    {
        return $this->sdk->schema->getEntitySet($this->getContext($odata_context));
    }

    /**
     * @param string $odata_context
     *
     * @return mixed
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function getEntitySetByType(string $odata_context)
    {
        return $this->sdk->schema->getEntitySetByType($this->getContext($odata_context));
    }

    /**
     * @param string $odata_context
     *
     * @return \BusinessCentral\Schema\EntityType|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     * @internal
     */
    public function getEntityType(string $odata_context)
    {
        return $this->sdk->schema->getEntityType($this->getContext($odata_context));
    }

    public function getUri(bool $without_extensions = false)
    {
        $uri = $this->compileComponents();

        if (!$without_extensions) {
            $query_string = implode('&', $this->getQueryOptions());

            $uri .= $query_string ? "?$query_string" : null;
        }


        return $uri;
    }

    public function getQueryOptions()
    {
        $query_string = [];


        $rfc = new \ReflectionClass($this);
        foreach ($rfc->getTraits() as $class) {
            $basename = $class->getShortName();
            if ($class->hasMethod("get{$basename}String")) {
                $result       = $this->{"get{$basename}String"}(true);
                $result       = !is_array($result) ? [$result] : $result;
                $query_string = array_merge($query_string, $result);
            }
        }

        if($this->with_count) {
            $query_string[] = '$count=true';
        }

        return array_filter($query_string);
    }

    /**
     * @param string $component
     * @param string[]|string|null $keys
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function navigateTo(string $component, $keys = null)
    {
        if (!is_array($keys)) {
            $keys = [$keys];
        }

        $this->components[$component] = array_filter(['component' => $component, 'key' => array_filter($keys)]);

        return $this;
    }

    public function setComponents(array $components)
    {
        $this->components = $components;

        return $this;
    }

    public function getComponents()
    {
        return $this->components;
    }

    protected function compileComponents()
    {
        $components = [];
        foreach ($this->components as $entity => $item) {
            $identifier = array_map(function ($key) {
                return $this->formatValue($key, false);
            }, $item['key'] ?? []);

            $identifier = implode(',', $identifier);

            $components[] = $item['component'] . ($identifier ? "($identifier)" : '');
        }

        return implode('/', $components);
    }

    public function clone()
    {
        $clone = new static($this->sdk);
        $clone->setComponents($this->getComponents());
        $clone->setExpands($this->expands);
        $clone->setFilters($this->filters);
        $clone->limit($this->limit);
        $clone->page($this->page);
        $clone->orderBy($this->order_by);
        $clone->with_count = $this->with_count;

        return $clone;
    }

    public function cloneWithoutExtensions()
    {
        $clone = new static($this->sdk);
        $clone->setComponents($this->getComponents());

        return $clone;
    }

    public function getSdk()
    {
        return $this->sdk;
    }

    public function __call($name, $arguments)
    {
        if ($name === 'to') {
            return $this->navigateTo(...$arguments);
        }

        if (method_exists(EntityCollection::class, $name)) {
            return $this->fetch()->{$name}(...$arguments);
        }

        trigger_error('Call to undefined method ' . static::class . '::' . "$name()", E_USER_ERROR);
    }

    public function withoutCount()
    {
        $this->with_count = false;

        return $this;
    }

    public function withCount()
    {
        $this->with_count = true;

        return $this;
    }
}