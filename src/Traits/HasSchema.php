<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Traits;


use BusinessCentral\Schema;

trait HasSchema
{
    /** @var Schema */
    protected $schema;

    public function getSchema()
    {
        return $this->schema;
    }
}