<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Exceptions\EntityCollection\MethodNotAllowedException;
use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Exceptions\OperationNotAllowedException;
use BusinessCentral\Exceptions\QueryException;
use BusinessCentral\Exceptions\ValidationException;
use BusinessCentral\Query\Builder;
use BusinessCentral\Schema\EntitySet;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\Traits\HasQueryBuilder;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Arr;

/**
 * Class EntityCollection
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral
 *
 * @mixin Builder
 */
class EntityCollection implements \ArrayAccess, \Iterator, \JsonSerializable, Jsonable, Arrayable, \Countable
{
    use HasQueryBuilder;

    protected $type;
    protected $total_count;
    protected $collection    = [];
    protected $auto_paginate = false;

    public function __construct(Builder $query, EntitySet $type = null, array $items = [])
    {
        $this->query         = $query;
        $this->type          = $type;
        $this->auto_paginate = $query->getSdk()->option('auto_paginate', false);

        if ($type) {
            foreach ($items as $item) {
                $this->insert($item);
            }
            $this->total_count = count($items);
        } else {
            $this->propagate();
        }
    }

    protected function insert($item)
    {
        $keys = $this->getEntitySet()->getEntityType()->keys;
        foreach ($keys as $i => $key) {
            $keys[$i] = $item[$key];
        }

        $entity_query = $this->query->clone()->navigateTo($this->getEntitySet()->name, $keys);
        $entity       = Entity::make($item, $entity_query, $this->getEntitySet()->getEntityType());

        $this->collection[] = $entity;

        return $entity;
    }

    protected function propagate()
    {
        $response = $this->query->get();

        if (isset($response['value']) && is_array($response['value'])) {
            $this->type        = $this->query->getEntitySet($response['@odata.context']);
            $this->total_count = $response['@odata.count'] ?? 1;

            foreach ($response['value'] as $item) {
                $this->insert($item);
            }
        } else {
            $this->type = $this->query->getEntitySetByType($response['@odata.context']) ??
                          $this->query->getEntitySet($response['@odata.context']);

            $this->total_count = 1;
            $this->insert($response);
        }
    }

    public function count()
    {
        return $this->total_count;
    }

    /**
     * Return the first index of the collection
     *
     * @param null $default
     *
     * @return Entity|null|mixed
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function first($default = null)
    {
        return Arr::first($this->collection) ?? $default;
    }

    /**
     * @param string|string[] $identifier
     * @param null $default
     *
     * @return Entity|mixed|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function find($identifier, $default = null)
    {
        return $this->query->clone()->navigateTo($this->getEntitySet()->name, $identifier)->first($default);
    }

    /**
     * Create and save a new entity to the current collection
     *
     * @param array $attributes Key/value pair of attributes
     *
     * @return Entity
     * @throws ValidationException If entity validation failed
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function create(array $attributes)
    {
        $entity_query = $this->query->clone()->withoutFilters()->navigateTo($this->getEntitySet()->name);
        $entity       = Entity::make([], $entity_query, $this->getEntitySet()->getEntityType())->fill($attributes)->save();

        $this->collection[] = $entity;
        $this->total_count++;

        return $entity;
    }

    public function update(string $id, array $attributes)
    {
        $entity = $this->find($id);
        if ($entity) {
            $entity->fill($attributes);

            $entity->save();

            return $entity;
        }

        return false;
    }

    public function delete(string $id)
    {
        $entity = $this->find($id);
        if ($entity) {
            $deleted = $entity->delete();

            if ($deleted) {
                $this->offsetUnset($id);
                $this->total_count--;

                return true;
            }
        }

        return false;
    }

    /** @return EntitySet */
    public function getEntitySet()
    {
        return $this->type;
    }

    // region Interfaces

    // region ArrayAccess / IteratorAggregate


    // endregion

    // region Contracts

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toArray()
    {
        return json_decode(json_encode(array_values($this->collection)), true);
    }

    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    // endregion

    // endregion

    public function current()
    {
        return current($this->collection);
    }

    public function next()
    {
        $exists = next($this->collection);
        if (!$exists && $this->auto_paginate) {
            $this->nextPage();
        }
    }

    public function key()
    {
        return key($this->collection);
    }

    public function valid()
    {
        return isset($this->collection[$this->key()]);
    }

    public function rewind()
    {
        reset($this->collection);
    }

    public function offsetExists($offset)
    {
        return !!$this->find($offset);
    }

    public function offsetGet($offset)
    {
        return $this->find($offset);
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function autoPaginate(bool $state)
    {
        $this->auto_paginate = $state;

        return $this;
    }

    public function nextPage()
    {
        $this->query->nextPage();
        $this->propagate();
    }

    public function all()
    {
        if (count($this->collection) !== $this->count()) {
            $this->collection = [];

            $this->query
                ->limit($this->count())
                ->page(0);

            $this->propagate();
        }

        return array_values($this->collection);
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->query, $name)) {
            return $this->query()->clone()->{$name}(...$arguments);
        }
    }
}