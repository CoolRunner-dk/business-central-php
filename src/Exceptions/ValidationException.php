<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Exceptions;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Rakit\Validation\Validation;
use Throwable;

class ValidationException extends Exception implements Jsonable, \JsonSerializable, Arrayable
{
    protected $validator;

    public function __construct(Validation $validator, $code = 0, Throwable $previous = null)
    {
        $this->validator = $validator;

        $messages = '';
        foreach ($this->errors() as $property => $errors) {
            $prop_messages = [];
            foreach ($errors as $type => $error) {
                $prop_messages[] = "[ $type : $error ]";
            }
            $messages .= sprintf("[ %s : %s ]", $property, implode(' ', $prop_messages));
        }

        parent::__construct("Validation failed | $messages", $code, $previous);
    }

    public function validator()
    {
        return $this->validator;
    }

    public function errors()
    {
        return $this->validator->errors()->toArray();
    }

    public function toArray()
    {
        return [
            'message' => $this->getMessage(),
            'errors'  => $this->errors(),
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}