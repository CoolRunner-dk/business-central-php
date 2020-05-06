<?php
/**
 * @package   CoolRunner-Core
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Exceptions\ValidationException;
use BusinessCentral\Query\Builder;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\Schema\NavigationProperty;
use BusinessCentral\Schema\Property;
use BusinessCentral\Traits\HasQueryBuilder;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Pluralizer;

class Entity implements \ArrayAccess, \JsonSerializable, Jsonable, Arrayable
{
    use HasQueryBuilder;

    protected $guarded = [
        'id',
        'lastModifiedDateTime',
    ];

    protected $attributes = [];
    protected $relations  = [];
    protected $original   = [];
    protected $dirty      = [];
    protected $type;

    protected $etag;

    protected static $schema_type = null;

    public function __construct(array $attributes, Builder $query, EntityType $type)
    {
        $this->query = $query;
        $this->type  = $type;

        $this->setAttributes($attributes);
    }

    public static function make(array $attributes, Builder $query, EntityType $type)
    {
        $class = ClassMap::map($type);

        return new $class($attributes, $query, $type);
    }

    protected function setAttributes(array $attributes)
    {
        foreach ($attributes as $key => $attribute) {
            if ($property = $this->type->getProperty($key)) {
                if ($property instanceof NavigationProperty) {
                    $this->relations[$key] = $property->convert($attribute, $this->query->clone());
                } elseif ($property instanceof Property) {
                    $this->attributes[$key] = $this->original[$key] = $property->convert($attribute);
                }
            } elseif ($key === '@odata.etag') {
                $this->etag = $attribute;
            }
        }
    }

    public function exists()
    {
        return isset($this->attributes['id']);
    }

    public function save()
    {
        $this->validate();

        if ($this->exists()) {
            if ( ! empty($this->dirty)) {
                $response = $this->query->patch($this->dirty, $this->etag);
                $this->setAttributes($response);
            }
        } else {
            $response = $this->query->post($this->attributes);
            $this->setAttributes($response);
            $this->query->component(Pluralizer::plural($this->type->name), $this->id);
        }

        return $this;
    }

    public function delete()
    {
        if ($this->exists()) {
            $this->query->delete($this->etag);
        }

        return true;
    }

    public function validate()
    {
        return (new Validator($this->type, $this))->validate();
    }

    public function getValidationRules()
    {
        return $this->type->getValidationRules();
    }

    protected function fetchRelation(string $relation)
    {
        if (isset($this->relations[$relation])) {
            return $this->relations[$relation];
        }

        $query = $this->query->clone();

        return $this->relations[$relation] = $query->component($relation)->fetch();
    }

    // region Interfaces

    public function offsetGet($offset)
    {
        if ($this->type->propertyExists($offset)) {
            return $this->attributes[$offset] ?? null;
        } elseif ($this->type->relationExists($offset)) {
            return $this->fetchRelation($offset);
        }
    }

    public function offsetSet($offset, $value)
    {
        if (in_array($offset, $this->guarded)) {
            return;
        }

        if ($this->type->propertyExists($offset)) {
            if ($value !== $this->attributes[$offset]) {
                $this->attributes[$offset] = $this->dirty[$offset] = $value;
            }
        }
    }

    public function offsetExists($offset)
    {
        if ($this->type->propertyExists($offset)) {
            return isset($this->attributes[$offset]);
        } elseif ($this->type->relationExists($offset)) {
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
        if ($this->type->relationExists($name)) {
            return $this->query->clone()->component($name);
        }
        // TODO: Implement __call() method.
    }

    public function toArray()
    {
        return array_merge([
            '$entity_type' => $this->type->name,
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
}