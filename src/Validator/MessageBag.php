<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Validator;


class MessageBag implements \JsonSerializable
{
    protected $messages;

    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    public function has(string $property)
    {
        return ! ! $this->get($property);
    }

    public function get(string $property, $default = null)
    {
        return $this->messages[$property] ?? $default;
    }

    public function empty()
    {
        return empty($this->messages);
    }

    public function jsonSerialize()
    {
        return $this->messages;
    }
}