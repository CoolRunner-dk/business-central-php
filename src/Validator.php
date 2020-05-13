<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Exceptions\ValidationException;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\Validator\MessageBag;

class Validator
{
    protected $processed = false;

    protected $type;
    protected $entity;

    protected $errors = [];

    public function __construct(EntityType $type, Entity $entity)
    {
        $this->type   = $type;
        $this->entity = $entity;
    }

    public function getEntity()
    {
        return $this->entity;
    }

    public function getErrors()
    {
        return new MessageBag($this->errors);
    }

    public function validate()
    {
        if ($this->processed) {
            if (empty($this->errors)) {
                return $this->errors;
            }

            throw new ValidationException($this);
        }

        $this->processed = true;

        $rules = $this->type->getValidationRules();

        if($this->type->name === 'salesOrderLine') {
            dd($rules);
        }
        $errors = [];
        foreach ($rules as $key => $rule) {
            $steps = explode('.', $key);
            $value = $this->entity[array_shift($steps)] ?? null;
            foreach ($steps as $step) {
                if (is_null($value)) {
                    break;
                }

                $value = $value[$step] ?? null;
            }

            $result = $this->processRules($key, $rule, $value);

            if ( ! empty($result)) {
                $errors[$key] = $result;
            }

        }

        $this->errors = $errors;

        return $this->validate();
    }

    protected function processRules($key, array $rules, $value)
    {
        if (in_array('nullable', $rules) && is_null($value)) {
            return [];
        }

        $messages = static::validationMessages();

        $results = [];
        foreach ($rules as $rule) {
            $type   = explode(':', $rule)[0];
            $length = explode(':', $rule)[1] ?? null;

            $result = (function ($type, $value, $length) {
                switch ($type) {
                    case 'required':
                        return ! is_null($value);
                    case 'guid':
                        return preg_match(Schema::GUID_FORMAT, $value);
                    case 'string':
                        if ($length) {
                            return is_string($value) && strlen($value) <= $length;
                        }

                        return is_string($value);
                    case 'int':
                        return is_int($value);
                    case 'float':
                    case 'double':
                        return is_int($value) || is_double($value) || is_float($value);
                }

                return true;
            })($type, $value, $length);

            if ( ! $result) {
                $message = $messages[$type] ?? $rule;

                if ($message instanceof \Closure) {
                    $message = $message($key, $value, $length);
                }

                $replacements = [
                    ':attr'   => $key,
                    ':value'  => $value,
                    ':length' => $length,
                ];

                $message = str_replace(array_keys($replacements), array_values($replacements), $message);

                $results[$rule] = $message ?: $rule;
            }
        }

        return $results;
    }

    public static function validationMessages()
    {
        return [
            'required' => "':attr' is required",
            'string'   => function ($key, $value, $length) {
                if ($length) {
                    return "'$key' must be of type string and shorter than $length characters";
                }

                return "'$key' must be of type string";
            },
            'int'      => "':attr' must be of type integer",
            'float'    => "':attr' must be of type float",
            'guid'     => ":attr must be in a valid GUID format",
        ];
    }
}