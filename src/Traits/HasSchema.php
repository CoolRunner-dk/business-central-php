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
    protected Schema $schema;

    public function getSchema(): Schema
    {
        return $this->schema;
    }
    protected function setSchema(Schema $schema): void
    {
        $this->schema = $schema;
    }
}