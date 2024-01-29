<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Schema\Action;
use BusinessCentral\Schema\ComplexType;
use BusinessCentral\Schema\EntitySet;
use BusinessCentral\Schema\EntityType;
use Illuminate\Support\Collection;

class Schema
{
    protected $version;

    const GUID_FORMAT = '/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}/i';

    /** @var Collection|EntityType[] */
    protected $entity_types;
    /** @var Collection|EntitySet[] */
    protected $entity_sets;
    /** @var Collection|ComplexType[] */
    protected $complex_types;
    /** @var Collection|Action[] */
    protected $actions;

    /** @var array */
    protected $raw = [], $overrides;

    public function __construct(array $json)
    {
        $this->version = $json['@attributes']['Version'];

        // check array keys are numeric, then we have multiple schemas
        if (array_keys($json['DataServices']['Schema']) === range(0, count($json['DataServices']['Schema']) - 1)) {
            $json['DataServices']['Schema'] = array_merge(...$json['DataServices']['Schema']);
        }

        $this->raw = $json['DataServices']['Schema'];

        $this->entity_types  = new Collection();
        $this->entity_sets   = new Collection();
        $this->complex_types = new Collection();
        $this->actions       = new Collection();

        $this->loadOverrides();

        $this->propagate();
    }

    protected function propagate()
    {
        if (isset($this->raw['ComplexType'])) {
            foreach ($this->raw['ComplexType'] as $type) {
                $this->complex_types[$type['@attributes']['Name']] = new ComplexType($type, $this);
            }
        }

        if (isset($this->raw['EntityType'])) {
            foreach ($this->raw['EntityType'] as $type) {
                $this->entity_types[$type['@attributes']['Name']] = new EntityType($type, $this);
            }
        }

        if (isset($this->raw['EntityContainer']['EntitySet'])) {
            foreach ($this->raw['EntityContainer']['EntitySet'] as $set) {
                $this->entity_sets[$set['@attributes']['Name']] = new EntitySet($set, $this);
            }
        }

        if (isset($this->raw['EntityContainer']['ActionImport'])) {
            foreach ($this->raw['EntityContainer']['ActionImport'] as $action) {
                $this->actions[$action['@attributes']['Name']] = new Action($action, $this);
            }
        }
    }

    public function rebuild()
    {
        $this->propagate();
    }

    // region EntityTypes

    public function getEntityTypes()
    {
        return $this->entity_types;
    }

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
        return $this->getEntitySet(static::getType($set))->getEntityType();
    }

    // endregion

    // region EntitySets

    public function getEntitySets()
    {
        return $this->entity_sets;
    }

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
        return $this->entity_sets->first(function (EntitySet $entity_set) use ($type) {
            return $entity_set->getEntityType()->schema_type === $type;
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

    public static function getType(string $type)
    {
        if (preg_match('/Collection\(.+\)/', $type)) {
            preg_match('/Collection\((.+)\)/', $type, $matches);
            $type = $matches[1] ?? $type;
        }

        $type = str_replace(['Microsoft.NAV.', 'NAV.', 'ComplexTypes.'], '', $type);

        return $type;
    }

    protected function loadOverrides()
    {
        $file = __DIR__ . '/../schema_overrides.json';

        return $this->overrides = json_decode(file_get_contents(realpath($file)), true);
    }

    public function hasOverrides(string $type, string $property)
    {
        return !empty($this->getOverrides($type, $property));
    }

    public function getOverrides(string $type, string $property)
    {
        return $this->overrides[$type][$property] ?? [];
    }

    public function getAllOverrides()
    {
        return $this->overrides;
    }

    public function setOverrides(array $overrides, bool $merge = false)
    {
        if ($merge) {
            $this->overrides = array_merge($this->overrides, $overrides);
        } else {
            $this->overrides = $overrides;
        }

        return $this;
    }

    public function getAliases()
    {
        return $this->getOverrides('__always', 'aliases');
    }

    public function propertyIs(string $model, string $property, string $attribute, $default = false)
    {
        return $this->overrides[$model]["properties"][$property][$attribute] ??
            $this->overrides['__always']["properties"][$property][$attribute] ?? $default;
    }

    public function propertyIsGuarded(string $model, string $property, $default = false)
    {
        return $this->propertyIs($model, $property, 'guarded', $default);
    }

    public function propertyIsReadOnly(string $model, string $property, $default = false)
    {
        return $this->propertyIs($model, $property, 'readOnly', $default);
    }

    public function propertyIsFillable(string $model, string $property, $default = false)
    {
        return !$this->propertyIs($model, $property, 'readOnly', $default);
    }

    public function propertyIsNullable(string $model, string $property, $default = false)
    {
        return $this->propertyIs($model, $property, 'nullable', $default);
    }
}