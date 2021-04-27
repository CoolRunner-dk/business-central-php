<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Validator\Rules;


use Rakit\Validation\Rule;

class NotNull extends Rule
{
    protected $message = "The :attribute cannot be null";

    public function check($value) : bool
    {
        $valid = !is_null($value);

        if (!$valid) {
            $this->attribute->setRequired(true);
        }

        return $valid;
    }
}