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
use Illuminate\Support\Str;

/**
 * Class EntitySet
 *
 * @property EntityType $type
 * @property string $name
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class EntitySet
{
    use HasSchema, HasAnnotations;

    protected $name;
    protected $type;

    public function __construct($entity_set, Schema $schema)
    {
        $this->schema = $schema;
        $this->name   = $entity_set['@attributes']['Name'];
        $this->type   = Schema::getType($entity_set['@attributes']['EntityType']);

        $this->fillAnnotations($entity_set);
    }

    public function getEntityType()
    {
        return $this->schema->getEntityType($this->type);
    }

    public function __get($name)
    {
        switch ($name) {
            case 'name':
                return $this->name;
        }
    }

    public function is(string $capability)
    {
        return $this->annotations[$capability] ?? false;
    }


    public function changeTracked()
    {
        return $this->is('ChangeTracking');
    }

    public function deletable()
    {
        return $this->is('DeleteRestrictions');
    }

    public function updatable()
    {
        return $this->is('UpdateRestrictions');
    }

    public function insertable()
    {
        return $this->is('InsertRestrictions');
    }
}