<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Exceptions\EntityCollection\MethodNotAllowedException;
use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Exceptions\QueryException;
use BusinessCentral\Query\Builder;
use BusinessCentral\Schema\EntitySet;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\Traits\HasQueryBuilder;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

/**
 * Class EntityCollection
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral
 */
class EntityCollection implements \ArrayAccess, \IteratorAggregate, \JsonSerializable, Jsonable, Arrayable
{
    use HasQueryBuilder;

    protected $type;
    protected $collection;

    public function __construct(Builder $query, EntitySet $type, array $items)
    {
        $this->query = $query;
        $this->type  = $type;

        $this->collection = new Collection();

        foreach ($items as $item) {
            $entity_query = $this->query->clone()->component($this->type->name, $item['id'] ?? null);
            $entity       = new Entity($item, $entity_query, $this->type->type);

            $this->collection[$entity['id']] = $entity;
        }
    }

    public function count()
    {
        return $this->collection->count();
    }

    public function find(string $id, $default = null)
    {
        if (isset($this->collection[$id])) {
            return $this->collection[$id];
        }

        try {
            $entity = $this->query->clone()->component($this->type->name, $id)->fetch();

            $this->collection[$entity->id] = $entity;
        } catch (QueryException $exception) {
            if ( ! $exception->is('BadRequest_ResourceNotFound')) {
                throw $exception;
            }
        }

        return $this->collection[$id] ?? $default;
    }

    public function create(array $attributes)
    {
        if ($this->type->insertable()) {
            $entity_query = $this->query->clone()->component($this->type->name);
            $entity       = new Entity($attributes, $entity_query, $this->type->type);

            $entity->save();

            $this->collection[$entity->id] = $entity;

            return ! ! $entity->id;
        }

        throw new MethodNotAllowedException($this, 'create', 'insertable');
    }

    public function update(string $id, array $attributes)
    {
        if ($this->type->updatable()) {
            $entity = $this->find($id);
            if ($entity) {
                foreach ($attributes as $key => $value) {
                    $entity->{$key} = $value;
                }

                $entity->save();

                return ! ! $entity->id;
            }

            return false;
        }

        throw new MethodNotAllowedException($this, 'update', 'updatable');
    }

    public function delete(string $id)
    {
        if ($this->type->deletable()) {
            $entity = $this->find($id);
            if ($entity) {
                $deleted = $entity->delete();

                if ($deleted) {
                    $this->offsetUnset($id);

                    return true;
                }
            }

            return false;
        }

        throw new MethodNotAllowedException($this, 'delete', 'deletable');
    }

    public function getType()
    {
        return $this->type;
    }

    // region Interfaces

    // region ArrayAccess / IteratorAggregate

    public function getIterator()
    {
        return $this->collection->getIterator();
    }

    public function offsetGet($offset)
    {
        return $this->collection->offsetGet($offset);
    }

    public function offsetExists($offset)
    {
        return $this->collection->offsetExists($offset);
    }

    public function offsetSet($offset, $value)
    {
        if ($this->type->insertable()) {
            if ( ! ($value instanceof Entity)) {
                $type = is_object($value) ? get_class($value) : gettype($value);
                throw new Exception("Only objects of type Entity allowed on EntitySets - Got '$type'");
            }

            $this->collection->offsetSet($offset, $value);
        }
    }

    public function offsetUnset($offset)
    {
        if ($this->type->deletable()) {
            $this->collection->offsetUnset($offset);
        }
    }

    // endregion

    // region Contracts

    public function jsonSerialize()
    {
        return $this->collection->jsonSerialize();
    }

    public function toArray()
    {
        return $this->collection->toArray();
    }

    public function toJson($options = 0)
    {
        return $this->collection->toJson($options);
    }

    // endregion

    // endregion
}