<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Traits;


use BusinessCentral\Query\Builder;

trait HasQueryBuilder
{
    /** @var Builder */
    protected $query;

    public function query()
    {
        return $this->query->clone();
    }
}