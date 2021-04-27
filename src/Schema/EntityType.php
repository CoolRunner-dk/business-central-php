<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Schema;


use BusinessCentral\Schema;
use BusinessCentral\Traits\HasAnnotations;
use BusinessCentral\Traits\HasSchema;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * Class EntityType
 *
 * @property-read string $name
 * @property-read string[] $keys
 * @property-read string $schema_type
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class EntityType
{
    use HasSchema, HasAnnotations;

    protected $name, $schema_type;

    /** @var array|Property[] */
    protected $properties = [];
    /** @var array|NavigationProperty[] */
    protected $navigation_properties = [];
    /** @var array|Action[] */
    protected $actions = [];

    protected $keys = [];

    public function __construct($entity_type, Schema $schema)
    {
        $this->schema      = $schema;
        $this->name        = $entity_type['@attributes']['Name'];
        $this->schema_type = $entity_type['@attributes']['Name'];

        if (isset($entity_type['Property'])) {
            if (Arr::isAssoc($entity_type['Property'])) {
                $this->parseProperties([$entity_type['Property']]);

            } else {
                $this->parseProperties($entity_type['Property']);
            }
        }

        if (isset($entity_type['NavigationProperty'])) {
            if (Arr::isAssoc($entity_type['NavigationProperty'])) {
                $this->parseNavigationProperties([$entity_type['NavigationProperty']]);

            } else {
                $this->parseNavigationProperties($entity_type['NavigationProperty']);
            }
        }

        if (isset($entity_type['Key'])) {
            if (!isset($entity_type['Key']['PropertyRef'][0]) && isset($entity_type['Key']['PropertyRef'])) {
                $entity_type['Key']['PropertyRef'] = [$entity_type['Key']['PropertyRef']];
            }

            foreach ($entity_type['Key']['PropertyRef'] as $item) {
                $this->keys[] = $item['@attributes']['Name'];
            }
        }

        if ($this->schema->hasOverrides($this->schema_type, 'key')) {
            $this->keys[] = $this->schema->getOverrides($this->schema_type, 'key');
        }

        $this->fillAnnotations($entity_type);
    }

    protected function parseProperties($properties)
    {
        foreach ($properties as $property) {
            $prop = new Property($property, $this->schema, $this);

            $this->properties[$prop->name] = $prop;
        }
    }

    protected function parseNavigationProperties($properties)
    {
        foreach ($properties as $property) {
            $prop = new NavigationProperty($property, $this->schema);

            $this->navigation_properties[$prop->name] = $prop;
        }
    }

    /**
     * @param string $property
     *
     * @return Property|NavigationProperty|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getProperty(string $property)
    {
        return $this->properties[$property] ?? null;
    }

    public function propertyExists(string $key)
    {
        return isset($this->properties[$key]);
    }

    public function getRelation(string $relation)
    {
        return $this->navigation_properties[$relation] ?? null;
    }

    public function relationExists(string $key)
    {
        return isset($this->navigation_properties[$key]);
    }

    public function getAction(string $name)
    {
        return $this->actions[$name] ?? null;
    }

    public function actionExists(string $name)
    {
        return isset($this->actions[$name]);
    }

    public function properties()
    {
        return $this->properties;
    }

    public function relations()
    {
        return $this->navigation_properties;
    }

    public function actions()
    {
        return $this->actions;
    }

    public function __get($name)
    {
        switch ($name) {
            case 'keys':
            case 'schema_type':
                return $this->{$name};
            case 'name':
                return $this->schema->getOverrides('__always', 'aliases')[$this->name] ?? $this->name;
        }
    }

    public function getValidationRules()
    {
        $rules = [];

        foreach ($this->properties as $property) {
            if ($property->name !== $this->keys) {
                $rules = array_merge($rules, $property->getValidation());
            }
        }

        return $rules;
    }

    /** @return EntitySet|null */
    public function getEntitySet()
    {
        return $this->schema->getEntitySetByType($this->schema_type);
    }

    public function addAction(Action $action)
    {
        $this->actions[$action->name] = $action;
    }
}