<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Exceptions\OperationNotAllowedException;
use BusinessCentral\Exceptions\QueryException;
use BusinessCentral\Exceptions\ValidationException;
use BusinessCentral\Query\Builder;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\Traits\HasQueryBuilder;
use BusinessCentral\Validator\Rules\NotNull;
use BusinessCentral\Validator\Rules\TypeOf;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Pluralizer;
use Rakit\Validation\Validator;

/**
 * Class Entity
 *
 * @property $id
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral
 */
class Entity implements \ArrayAccess, \JsonSerializable, Jsonable, Arrayable
{
    use HasQueryBuilder;

    protected $guarded = [
        'id',
        'lastModifiedDateTime',
    ];

    protected $fillable = [];

    protected $attributes = [];
    protected $relations  = [];
    protected $original   = [];
    protected $dirty      = [];
    protected $type;

    protected $etag;

    protected static $schema_type = null;

    public function __construct(?array $attributes, Builder $query, EntityType $type)
    {
        $this->query = $query;
        $this->type  = $type;

        $this->setAttributes($attributes ?: []);
    }

    /** @return Entity */
    public static function make(array $attributes, Builder $query, EntityType $type)
    {
        $class = ClassMap::map($type);

        if (!class_exists($class)) {
            $class = Entity::class;
        }

        return new $class($attributes, $query, $type);
    }

    /**
     * Get Schema EntityType
     *
     * @return EntityType
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getEntityType()
    {
        return $this->type;
    }

    /**
     * Mass assign key/value pairs to attributes
     *
     * @param array $attributes
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $this->{$key} = $value;
            }
        }

        return $this;
    }

    protected function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $attribute) {
            if ($property = $this->getEntityType()->getProperty($key)) {
                $this->attributes[$property->name] = $this->original[$property->name] = $property->convert($attribute);
            } elseif ($property = $this->getEntityType()->getRelation($key)) {
                $this->relations[$property->name] = $property->convert($attribute, $this->query->clone());
            } elseif ($key === '@odata.etag') {
                $this->etag = $attribute;
            }
        }
    }

    /**
     * Check if the current entity instance exists on remote
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function exists()
    {
        return !!$this->etag;
    }

    /**
     * Reload the entity from remote
     * Discards all changes
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function reload()
    {
        if ($this->exists()) {
            $entity = $this->query->cloneWithoutExtensions()->find($this->identifiers());
            if ($entity) {
                $this->setAttributes($entity->attributes);
                $this->dirty = $entity->dirty;
                $this->etag  = $entity->etag;
            }
        }

        return $this;
    }

    /**
     * Create or update entity to remote
     *
     * @return $this
     * @throws OperationNotAllowedException If the operation isn't allowed on the Entity
     * @throws QueryException If the request fails
     * @throws ValidationException If entity validation fails
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function save()
    {
        $entity_set = $this->getEntityType()->getEntitySet();

        if ($entity_set) {
            if ($this->exists()) {
                if (!$entity_set->updatable()) {
                    throw new OperationNotAllowedException($this, 'update');
                }
            } else {
                if (!$entity_set->insertable()) {
                    throw new OperationNotAllowedException($this, 'insert');
                }
            }
        }

        if ($this->exists()) {
            if (!empty($this->dirty)) {
                $this->validate();

                $response = $this->query->patch($this->dirty, $this->etag);

                $this->setAttributes($response);
            }
        } else {
            $this->validate();

            $response = $this->query->post($this->attributes);

            $this->setAttributes($response);
            $this->query->navigateTo($entity_set->name ?? Pluralizer::plural($this->type->schema_type), $this->identifiers());

        }

        $this->dirty = [];

        return $this;
    }

    /**
     * Delete entity from remote
     *
     * @return bool
     * @throws OperationNotAllowedException If the operation isn't allowed on the Entity
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function delete()
    {
        if ($this->exists()) {
            $entity_set = $this->getEntityType()->getEntitySet();

            if ($entity_set) {
                if ($this->exists()) {
                    if (!$entity_set->deletable()) {
                        throw new OperationNotAllowedException($this, 'delete');
                    }
                }
            }

            $this->query->delete($this->etag);

            $this->attributes['id'] = $this->original['id'] = null;
            $this->query->navigateTo($this->getEntityType()->getEntitySet()->name, null);
        }

        return true;
    }

    /**
     * Validate the entity
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function validate()
    {
        $validator = new Validator();

        $validator->addValidator('typeof', new TypeOf());
        $validator->setValidator('not-null', new NotNull());

        $validation = $validator->validate($this->getAttributes(), $this->getEntityType()->getValidationRules());

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        return true;
    }

    /**
     * Get internal validator rules
     *
     * @return array
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getValidationRules()
    {
        return $this->getEntityType()->getValidationRules();
    }

    /**
     * Fetch value of a relation
     *
     * Loads the relation from remote if it isn't already loaded
     *
     * @param string $relation
     *
     * @return array|EntityCollection|mixed|null
     * @throws QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    protected function fetchRelation(string $relation)
    {
        if (isset($this->relations[$relation])) {
            return $this->relations[$relation];
        }

        if ($property = $this->getEntityType()->getRelation($relation)) {

            $query = $this->query->cloneWithoutExtensions();

            if ($property->isCollection()) {
                return $this->relations[$relation] = $query->navigateTo($property->route)->fetch();
            } else {
                try {
                    return $this->relations[$relation] = $query->navigateTo($property->route)->first();
                } catch (QueryException $exception) {
                    if ($exception->is('BadRequest_ResourceNotFound')) {
                        return null;
                    }

                    throw $exception;
                }
            }
        }

        return null;
    }

    public function doAction(string $name, array $properties = [])
    {
        $action = $this->getEntityType()->getAction($name);

        $result = $this->query->cloneWithoutExtensions()->to($action->fqn)->post($properties, ['no_ext' => true]);

        $this->reload();

        if ($result === null) {
            return true;
        }

        return $result;
    }

    // region Interfaces

    public function offsetGet($offset)
    {
        if ($this->getEntityType()->propertyExists($offset)) {
            return $this->attributes[$offset] ?? null;
        } elseif ($this->getEntityType()->relationExists($offset)) {
            return $this->fetchRelation($offset);
        }
    }

    public function offsetSet($offset, $value)
    {
        if (in_array($offset, $this->guarded)) {
            return;
        }

        if ($property = $this->getEntityType()->getProperty($offset)) {
            if ($property->type === 'Edm.Guid' && $value instanceof Entity && $value->exists()) {
                if ($relation = $this->getEntityType()->getRelation(substr($offset, 0, -2))) {
                    if ($value->getEntityType()->name !== $relation->getEntityType()->name) {
                        throw new Exception(sprintf("Cannot use type '%s' for property '%s' on type '%s'", $value->getEntityType()->name, $offset, $this->getEntityType()->name));
                    }
                }
            }

            if (!$property->read_only && (!isset($this->attributes[$offset]) || $value !== $this->attributes[$offset])) {
                $this->attributes[$offset] = $this->dirty[$offset] = $value;
            }
        }
    }

    public function offsetExists($offset)
    {
        if ($this->getEntityType()->propertyExists($offset)) {
            return isset($this->attributes[$offset]);
        } elseif ($this->getEntityType()->relationExists($offset)) {
            return isset($this->relations[$offset]);
        }
    }

    public function offsetUnset($offset)
    {
        // No unset
    }

    public function __get($name)
    {
        return $this->offsetGet($name);
    }

    public function __set($name, $value)
    {
        $this->offsetSet($name, $value);
    }

    public function __call($name, $arguments)
    {
        if ($relation = $this->getEntityType()->getRelation($name)) {
            return $this->query->cloneWithoutExtensions()->navigateTo($relation->route);
        } elseif ($this->getEntityType()->actionExists($name)) {
            return $this->doAction($name);
        }
    }

    public function toArray()
    {
        return array_merge([
            '$entity_type' => $this->getEntityType()->name,
        ], $this->attributes, $this->relations);
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    // endregion

    public function getSdk()
    {
        return $this->query->getSdk();
    }

    public function getDirty() : array
    {
        return $this->dirty;
    }

    public function getAttributes() : array
    {
        return $this->attributes;
    }

    public function identifiers()
    {
        $keys = [];
        foreach ($this->getEntityType()->keys as $key) {
            $keys = $this->{$key};
        }

        return $keys;
    }
}