<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Exceptions;


use BusinessCentral\Validator;
use Throwable;

class ValidationException extends Exception
{
    protected $validator;

    public function __construct(Validator $validator, $code = 0, Throwable $previous = null)
    {
        $this->validator = $validator;

        parent::__construct("Validation failed", $code, $previous);
    }

    public function validator()
    {
        return $this->validator;
    }

    public function errors()
    {
        return $this->validator->getErrors();
    }
}