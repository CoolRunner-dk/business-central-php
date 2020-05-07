<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Schema;


use BusinessCentral\Schema;
use BusinessCentral\Traits\HasSchema;
use Illuminate\Support\Arr;

/**
 * Class EntityType
 *
 * @property string $name
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class EntityType
{
    use HasSchema;

    protected $name;

    /** @var array|Property[] */
    protected $properties = [];
    /** @var array|NavigationProperty[] */
    protected $navigation_properties = [];

    public function __construct($entity_type, Schema $schema)
    {
        $this->schema = $schema;
        $this->name   = $entity_type['@attributes']['Name'];

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

    public function properties()
    {
        return $this->properties;
    }

    public function relations()
    {
        return $this->navigation_properties;
    }

    public function __get($name)
    {
        switch ($name) {
            case 'name':
                return $this->name;
        }
    }

    public function getValidationRules()
    {
        $rules = [];
        foreach ($this->properties as $property) {
            $rules = array_merge($rules, $property->getValidation());
        }

        return $rules;
    }

    /** @return EntitySet|null */
    public function getEntitySet()
    {
        return $this->schema->getEntitySetByType($this->name);
    }
}