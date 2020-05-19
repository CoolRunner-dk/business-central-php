<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query;


use BusinessCentral\EntityCollection;
use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Exceptions\QueryException;
use BusinessCentral\Query\Contracts\Expands;
use BusinessCentral\Query\Contracts\Filters;
use BusinessCentral\Query\Contracts\Pagination;
use BusinessCentral\Query\Contracts\Sorting;
use BusinessCentral\SDK;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;

/**
 * Class Builder
 *
 * @method $this to(string $component, string $id = null)
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

    protected $components = [];
    protected $sdk;

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

        try {
            $response = $this->sdk->client->request($method, $uri, $request_options);

            $this->sdk->logRequest($method, $uri, microtime(true) - $time, $request_options, $response->getStatusCode());

            return json_decode($response->getBody()->getContents(), true);

        } catch (ClientException $exception) {
            $response = $exception->getResponse();

            $this->sdk->logRequest($method, $uri, microtime(true) - $time, $request_options, $response->getStatusCode());

            $response_data = json_decode($response->getBody()->getContents(), true);
            throw new QueryException($this, $response_data, $exception);
        } catch (ServerException $exception) {
            $response = $exception->getResponse();

            $message = "Business Central responded with [{$response->getStatusCode()} - {$response->getReasonPhrase()}] - {$response->getBody()->getContents()}";

            throw new Exception($message, 0, $exception);
        }
    }


    public function fetch()
    {
        return new EntityCollection($this);
    }

    public function exists()
    {
        return ! ! $this->fetch()->first(false);
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
     * @param array  $attributes
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

        if ( ! $context) {
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

        if ( ! $without_extensions) {
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
                $result       = ! is_array($result) ? [$result] : $result;
                $query_string = array_merge($query_string, $result);
            }
        }

        $query_string[] = '$count=true';

        return array_filter($query_string);
    }

    public function navigateTo(string $component, string $id = null)
    {
        $this->components[$component] = array_filter(['component' => $component, 'id' => $id]);

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
            $components[] = $item['component'] . (isset($item['id']) ? "($item[id])" : '');
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

        return $clone;
    }

    public function cloneWithoutExtensions()
    {
        $clone = new static($this->sdk);
        $clone->setComponents($this->getComponents());

        return $clone;
    }

    public function getSDK()
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
}