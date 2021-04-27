<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Validator\Rules;


use BusinessCentral\Schema;
use Rakit\Validation\Rule;

class TypeOf extends Rule
{
    protected $message = "The :attribute must be of type ':type'";

    public function fillParameters(array $params) : Rule
    {
        $this->params['type'] = array_shift($params);

        return $this;
    }

    public function check($value) : bool
    {
        $this->requireParameters(['type']);
        $type = $this->parameter('type');

        $this->key = "typeof:$type";

        switch ($type) {
            case 'required':
                return !is_null($value);
            case 'guid':
                return preg_match('/[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}/i', $value);
            case 'string':
                return is_string($value);
            case 'int':
                return is_int($value);
            case 'float':
            case 'double':
                return is_int($value) || is_double($value) || is_float($value);
            case 'bool':
            case 'boolean':
                return is_bool($value);
            case 'date':
                return !!\DateTime::createFromFormat('Y-m-d', $value);
            case 'null':
                return is_null($value);
            default:
                throw new \Exception("Unknown validation type $type in TypeOf rule");
        }
    }
}