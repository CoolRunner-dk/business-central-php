<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Schema;


use BusinessCentral\Entity;
use BusinessCentral\EntityCollection;
use BusinessCentral\Query\Builder;
use BusinessCentral\Schema;
use BusinessCentral\Traits\HasSchema;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

/**
 * Class Property
 *
 * @property-read string $name
 * @property-read string $type
 * @property-read string $route
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class NavigationProperty
{
    use HasSchema;

    protected $name;
    protected $type;
    protected $route;

    protected $validation = [];

    public function __construct($property, Schema $schema)
    {
        $this->schema = $schema;
        $this->name   = $this->schema->getAliases()[$property['@attributes']['Name']] ?? $property['@attributes']['Name'];
        $this->route  = $property['@attributes']['Name'];
        $this->type   = $property['@attributes']['Type'];

        if ($this->isCollection()) {
            $this->name = Pluralizer::plural($this->name);
        }
    }

    public function isCollection()
    {
        return !!preg_match('/Collection\(.+\)/i', $this->type);
    }

    public function getEntityType()
    {
        return $this->schema->getEntityType($this->type);
    }

    public function convert($value, Builder $query)
    {
        if ($this->isCollection()) {
            $entity_set = $this->schema->getEntitySet($this->name);

            $expands = $query->getExpands()[$entity_set->name] ?? null;
            if ($expands instanceof Builder) {
                $expands = $expands->getExpands();
            }

            $query->navigateTo($this->name)
                  ->setExpands($expands ?? []);

            return new EntityCollection($query, $entity_set, $value);
        } else {
            $entity_type = $this->schema->getEntityType($this->name);

            $query->navigateTo($this->name, $value['id']);

            return new Entity($value, $query, $entity_type);
        }
    }

    public function __get($name)
    {
        switch ($name) {
            case 'name':
            case 'type':
            case 'route':
                return $this->{$name};
        }
    }
}