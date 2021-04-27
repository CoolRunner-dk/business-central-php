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
use Carbon\Carbon;
use Illuminate\Support\Str;

/**
 * Class Property
 *
 * @property string $name
 * @property string $type
 * @property bool $read_only
 * @property bool $required
 * @property bool $fillable
 * @property bool $nullable
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class Property
{
    use HasSchema, HasAnnotations;

    protected $name;
    protected $type;

    protected $validation = [];

    protected $read_only = false;
    protected $nullable  = false;

    public function __construct($property, Schema $schema, EntityType $entity_type)
    {
        $this->schema = $schema;


        $this->name = $property['@attributes']['Name'];
        $this->type = $property['@attributes']['Type'];

        $this->fillAnnotations($property);

        $edit_allowed = $this->getAnnotation('AllowEdit', true) === true;

        $this->read_only = $this->schema->propertyIsReadOnly($entity_type->schema_type, $this->name, !$edit_allowed);
        $this->nullable  = $this->schema->propertyIsNullable($entity_type->schema_type, $this->name, !$edit_allowed) ||
                           filter_var($property['@attributes']['Nullable'] ?? true, FILTER_VALIDATE_BOOLEAN);

        $this->validation = [
            'max_length' => $property['@attributes']['MaxLength'] ?? null,
        ];
    }

    public function getAnnotation(string $annotation, $default = null)
    {
        return $this->annotations[$annotation] ?? $default;
    }

    public function isCollection()
    {
        return !!preg_match('/Collection\(.+\)/i', $this->type);
    }

    public function convert($value)
    {
        switch ($this->type) {
            case 'Edm.DateTimeOffset':
            case 'Edm.String':
            case 'Edm.Stream':
                return (string)$value;
            case 'Edm.Guid':
                if ($value === '00000000-0000-0000-0000-000000000000') {
                    return null;
                }

                return (string)$value;
            case 'Edm.Boolean':
                return filter_var($value, FILTER_VALIDATE_BOOLEAN);
            case 'Edm.Decimal':
                return doubleval($value);
            case 'Edm.Int32':
                return intval($value);
            default:
                if (strpos($this->type, 'Microsoft.NAV.') !== false) {
                    if ($complex_type = $this->schema->getComplexType(Schema::getType($this->type))) {
                        $data = [
                            '$complex_type' => $complex_type->name,
                        ];

                        foreach ($value ?? [] as $key => $attribute) {
                            if ($property = $complex_type->getProperty($key)) {
                                $data[$key] = $property->convert($attribute);
                            }
                        }

                        return $data;
                    }
                }

                return $value;
        }
    }

    public function getValidationType()
    {
        switch ($this->type) {
            case 'Edm.String':
            case 'Edm.Stream':
                return 'string';
            case 'Edm.Guid':
                return 'guid';
            case 'Edm.Boolean':
                return 'bool';
            case 'Edm.Decimal':
                return 'float';
            case 'Edm.Int32':
            case 'Edm.Int64':
                return 'int';
            case 'Edm.DateTimeOffset':
            case 'Edm.Date':
                return 'date';
            default:
                if (strpos($this->type, 'ComplexTypes.') !== false) {
                    return $this->schema->getComplexType(Schema::getType($this->type));
                }
        }
    }

    public function getDocType()
    {
        switch ($this->type) {
            case 'Edm.String':
            case 'Edm.Guid':
            case 'Edm.DateTimeOffset':
            case 'Edm.Stream':
                return 'string';
            case 'Edm.Boolean':
                return 'bool';
            case 'Edm.Decimal':
                return 'float';
            case 'Edm.Int32':
            case 'Edm.Int64':
                return 'int';
            default:
                if (strpos($this->type, 'Microsoft.NAV.') !== false) {
                    return $this->schema->getComplexType(Schema::getType($this->type));
                }

                return 'string';
        }
    }

    public function getValidation()
    {
        $rules = [];
        if (strtolower($this->name) === 'id' || $this->read_only) {
            return $rules;
        }

        if (!$this->nullable) {
            $rules[$this->name][] = 'not-null';
        }

        $type = $this->getValidationType();

        if ($type instanceof ComplexType) {
            if ($this->isCollection()) {
                foreach ($type->getValidationRules() as $key => $value) {
                    $rules["$this->name.*.$key"] = $value;
                }
            } else {
                foreach ($type->getValidationRules() as $key => $value) {
                    $rules["$this->name.$key"] = $value;
                }
            }
        } else {
            $rules[$this->name][] = "typeof:$type";

            if ($max = $this->validation['max_length']) {
                $rules[$this->name][] = "max:$max";
            }
        }

        $rules = array_map(function ($rules) {
            return is_string($rules) ? $rules : implode('|', $rules);
        }, $rules);

        return $rules;
    }

    public function __get($name)
    {
        switch ($name) {
            case 'name':
            case 'type':
            case 'read_only':
            case 'guarded':
            case 'fillable':
                return $this->{$name};
            case 'required':
                return !$this->nullable;
        }
    }

    public function getEntityType()
    {
        return $this->schema->getEntityType($this->type);
    }
}