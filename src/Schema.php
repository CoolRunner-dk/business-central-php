<?php
/**
 * @package   CoolRunner-Core
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Schema\ComplexType;
use BusinessCentral\Schema\EntitySet;
use BusinessCentral\Schema\EntityType;
use Illuminate\Support\Collection;

class Schema
{
    protected $version;

    /** @var Collection|EntityType[] */
    protected $entity_types;
    /** @var Collection|EntitySet[] */
    protected $entity_sets;
    /** @var Collection|ComplexType */
    protected $complex_types;
//    protected $entity_types;
//    protected $entity_types;
//    protected $entity_types;

    protected $raw;

    public function __construct(array $json)
    {
        $this->version = $json['@attributes']['Version'];
        $this->raw     = $json;

        $this->entity_types  = new Collection();
        $this->entity_sets   = new Collection();
        $this->complex_types = new Collection();

        $this->parse();
    }

    // region EntityTypes

    public function hasEntityType(string $type)
    {
        return isset($this->entity_types[$type]);
    }

    /**
     * @param string $type
     *
     * @return EntityType|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getEntityType(string $type)
    {
        return $this->entity_types[static::getType($type)] ?? null;
    }

    public function getEntityTypeBySet(string $set)
    {
        return $this->getEntitySet($set)->type ?? null;
    }

    // endregion

    // region EntitySets

    public function hasEntitySet(string $set)
    {
        return isset($this->entity_sets[$set]);
    }

    public function getEntitySet(string $set)
    {
        return $this->entity_sets[$set] ?? null;
    }

    public function getEntitySetByType(string $type)
    {
        return $this->entity_sets->first(function(EntitySet $entity_set) use($type) {
            return $entity_set->type;
        });
    }

    // endregion

    // region ComplexTypes

    public function hasComplexType(string $type)
    {
        return isset($this->complex_types[$type]);
    }

    public function getComplexType(string $type)
    {
        return $this->complex_types[$type] ?? null;
    }

    // endregion

    protected function parse()
    {
        foreach ($this->raw['DataServices']['Schema']['ComplexType'] as $type) {
            $this->complex_types[$type['@attributes']['Name']] = new ComplexType($type, $this);
        }

        foreach ($this->raw['DataServices']['Schema']['EntityType'] as $type) {
            $this->entity_types[$type['@attributes']['Name']] = new EntityType($type, $this);
        }

        foreach ($this->raw['DataServices']['Schema']['EntityContainer']['EntitySet'] as $set) {
            $this->entity_sets[$set['@attributes']['Name']] = new EntitySet($set, $this);
        }
    }

    public static function getType(string $type)
    {
        if (preg_match('/Collection\(.+\)/', $type)) {
            preg_match('/Collection\((.+)\)/', $type, $matches);
            $type = $matches[1] ?? $type;
        }

        $type = str_replace('Microsoft.NAV.', '', $type);

        return $type;
    }
}