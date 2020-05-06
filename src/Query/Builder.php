<?php
/**
 * @package   CoolRunner-Core
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query;


use BusinessCentral\ClassMap;
use BusinessCentral\Entity;
use BusinessCentral\EntityCollection;
use BusinessCentral\Exceptions\QueryException;
use BusinessCentral\SDK;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Collection;
use Illuminate\Support\Pluralizer;
use Psr\Http\Message\ResponseInterface;

class Builder
{
    use Filters;
    use Expands;

    /** @var Collection|array[]|string[][] */
    protected $components;
    protected $sdk;

    public function __construct(SDK $sdk)
    {
        $this->sdk        = $sdk;
        $this->components = new Collection();
    }

    public function sendRequest(string $method, array $data = null, array $headers = [])
    {
        try {
            $uri = $this->getUri();

            $expand = $this->buildExpandString();
            $filter = $this->buildFilterString();

            $query_string = implode('&', array_filter([$expand, $filter]));

            $uri .= $query_string ? "?$query_string" : null;

            $response = $this->sdk->client->request($method, $uri, array_filter([
                RequestOptions::JSON    => $data,
                RequestOptions::HEADERS => $headers,
            ]));

            return json_decode($response->getBody()->getContents(), true);

        } catch (RequestException $exception) {
            $response = $exception->getResponse();

            throw new QueryException($this, json_decode($response->getBody()->getContents(), true), $exception);
        }
    }


    public function fetch()
    {
        try {
            $response = $this->get();
        } catch (QueryException $exception) {
            if ( ! $exception->is('BadRequest_ResourceNotFound')) {
                throw $exception;
            }

            return null;
        }

        $singular = (bool)preg_match('/\$entity/', $response['@odata.context']);

        if ($singular) {
            return Entity::make($response, $this->clone(), $this->getEntityType($response['@odata.context']));
        }

        return new EntityCollection($this->clone(), $this->getEntitySet($response['@odata.context']), $response['value']);
    }

    public function find($id)
    {
        $component = $this->components->last();
        $query     = $this->clone();
        $query->component($component[0], $id);

        return $query->fetch();
    }

    public function exists()
    {
        $result = $this->fetch();
        if ($result instanceof EntityCollection) {
            return ! ! $result->count();
        }

        return ! ! $result;
    }

    public function get()
    {
        return $this->sendRequest('GET');
    }

    public function post(array $attributes)
    {
        return $this->sendRequest('POST', $attributes);
    }

    public function patch(array $attributes, string $etag)
    {
        return $this->sendRequest('PATCH', $attributes, [
            'If-Match' => $etag,
        ]);
    }

    public function delete(string $etag)
    {
        return $this->sendRequest('DELETE', null, [
            'If-Match' => $etag,
        ]);
    }

    protected function getContext(string $odata_context)
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

    protected function getEntityType(string $odata_context)
    {
        return $this->sdk->schema->getEntityTypeBySet($this->getContext($odata_context));
    }

    protected function getEntitySet(string $odata_context)
    {
        return $this->sdk->schema->getEntitySet($this->getContext($odata_context));
    }

    protected function getUri()
    {
        return $this->compileComponents();
    }

    protected function getExpandComponent()
    {
        return $this->expands->isNotEmpty() ? $this->expands->toArray() : '';
    }

    protected function getFilterComponent()
    {
        $filters = [];
        foreach ($this->filters as $filter) {
            $filters[] = implode(' ', array_map('urlencode', $filter));
        }

        return $filters;
    }

    public function component($component, $id = null)
    {
        $this->components[$component] = array_filter([$component, (string)$id]);

        return $this;
    }

    public function setComponents(array $components)
    {
        $this->components = collect($components);

        return $this;
    }

    public function getComponents()
    {
        return $this->components->toArray();
    }

    protected function compileComponents()
    {
        $components = [];
        foreach ($this->components as $entity => $item) {
            $components[$entity] = $item[0] . (isset($item[1]) ? "($item[1])" : '');
        }

        return implode('/', $components);
    }

    public function clone()
    {
        $clone = new static($this->sdk);
        $clone->setComponents($this->getComponents());
        $clone->setExpands($this->getExpands());
        $clone->setFilters($this->getFilters());

        return $clone;
    }
}