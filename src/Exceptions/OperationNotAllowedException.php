<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Exceptions;


use BusinessCentral\Entity;
use Throwable;

class OperationNotAllowedException extends Exception
{
    protected $entity;
    protected $operation;

    public function __construct(Entity $entity, string $operation, Throwable $previous = null)
    {
        $this->entity    = $entity;
        $this->operation = $operation;

        $message = "Operation '$operation' not allowed on Entity of type '{$this->entity->getEntityType()->name}'";

        parent::__construct($message, $code = 0, $previous);
    }
}