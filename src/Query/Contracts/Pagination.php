<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;


use BusinessCentral\Query\Builder;

/**
 * Trait Pagination
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Query\Contracts
 *
 * @mixin Builder
 */
trait Pagination
{
    protected $limit = 20;
    protected $page  = 1;

    public function getPaginationString($with_prefix = true)
    {
        return [
            $this->getLimitString($with_prefix),
            $this->getPageString($with_prefix),
        ];
    }

    public function getLimitString($with_prefix = true)
    {
        return $this->limit > 0 ? (($with_prefix ? '$top=' : '') . $this->limit) : null;
    }

    public function getPageString($with_prefix = true)
    {
        return $this->page > 1 ? (($with_prefix ? '$skip=' : '') . ($this->limit * ($this->page - 1))) : null;
    }

    public function page(int $page = null)
    {
        if (is_null($page)) {
            return $this->page;
        }

        $this->page = $page >= 1 ? $page : 0;

        return $this;
    }

    public function nextPage()
    {
        $this->page++;

        return $this;
    }

    public function prevPage()
    {
        $this->page--;

        if ($this->page < 0) {
            $this->page = 0;
        }

        return $this;
    }

    public function limit(int $limit = null)
    {
        if (is_null($limit)) {
            return $this->limit;
        }

        $this->limit = $limit >= 0 ? $limit : $this->limit;

        return $this;
    }
}