<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Exceptions\EntityCollection;


use BusinessCentral\EntityCollection;
use BusinessCentral\Exceptions\Exception;
use Throwable;

class MethodNotAllowedException extends Exception
{
    protected $collection;

    public function __construct(EntityCollection $collection, string $method, string $capability, Throwable $previous = null)
    {
        $this->collection = $collection;

        $message = "Unsupported method call '$method' on EntityCollection of type '{$this->collection->getType()->name}' - Capability '$capability' missing";

        parent::__construct($message, 0, $previous);
    }
}