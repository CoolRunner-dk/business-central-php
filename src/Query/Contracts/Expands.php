<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;


use BusinessCentral\Query\Builder;

trait Expands
{
    protected $expands = [];

    public function getExpandsString($with_prefix = true)
    {
        if (empty($this->expands)) {
            return null;
        }

        $results = [];

        foreach ($this->expands as $relation => $query) {
            if (is_array($query)) {
                $query = $this->sdk->query()->expand($query);
                $query->limit(0);
                $query->page(0);
            }

            if ($query instanceof Builder) {
                $results[] = sprintf("$relation(%s)", implode(';', $query->getQueryOptions()));
            } else {
                $results[] = $relation;
            }
        }

        return ($with_prefix ? '$expand=' : '') . implode(', ', $results);
    }

    /**
     * @param string|array $relations
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function expand(array $relations)
    {
        foreach ($relations as $key => $relation) {
            if (is_string($key)) {
                $relation = ! is_array($relation) ? [$relation] : $relation;

                $this->expands[$key] = $relation;
            } else {
                $this->expands[$relation] = null;
            }
        }

        return $this;
    }

    public function filteredExpand(string $relation, callable $callback)
    {
        $query = $this->sdk->query();
        $query->limit(0);
        $query->page(0);
        $callback($query);
        $this->expands[$relation] = $query;

        return $this;
    }

    public function setExpands(array $expands)
    {
        $this->expands = $expands;

        return $this;
    }

    public function getExpands()
    {
        return $this->expands;
    }
}