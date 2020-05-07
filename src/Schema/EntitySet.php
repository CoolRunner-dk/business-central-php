<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Schema;


use BusinessCentral\Schema;
use BusinessCentral\Traits\HasSchema;
use Illuminate\Support\Str;

/**
 * Class EntitySet
 *
 * @property EntityType $type
 * @property string     $name
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class EntitySet
{
    use HasSchema;

    protected $name;
    protected $type;

    protected $capabilities = [
        'change_tracking'     => false,
        'delete_restrictions' => false,
        'insert_restrictions' => false,
        'update_restrictions' => false,
    ];

    public function __construct($entity_set, Schema $schema)
    {
        $this->schema = $schema;
        $this->name   = $entity_set['@attributes']['Name'];
        $this->type   = Schema::getType($entity_set['@attributes']['EntityType']);

        foreach ($entity_set['Annotation'] as $capability) {
            $term                      = Str::snake(collect(explode('.', $capability['@attributes']['Term']))->last());
            $this->capabilities[$term] = filter_var($capability['Record']['PropertyValue']['@attributes']['Bool'], FILTER_VALIDATE_BOOLEAN);
        }
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
        return $this->capabilities[$capability] ?? false;
    }


    public function changeTracked()
    {
        return $this->is('change_tracking');
    }

    public function deletable()
    {
        return $this->is('delete_restrictions');
    }

    public function updatable()
    {
        return $this->is('update_restrictions');
    }

    public function insertable()
    {
        return $this->is('insert_restrictions');
    }
}