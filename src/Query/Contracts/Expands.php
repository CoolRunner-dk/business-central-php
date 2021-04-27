<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;


use BusinessCentral\Query\Builder;

/**
 * Trait Expands
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Query\Contracts
 *
 * @mixin Builder
 */
trait Expands
{
    protected $expands = [];

    public function getExpandsString($with_prefix = true)
    {
        if (empty($this->expands)) {
            return null;
        }

        $results = [];

        foreach ($this->expands as $relation => $expansion) {
            if (is_array($expansion)) {
                $query = $this->sdk->query()->expand($expansion);
                $query->limit(0);
                $query->page(0);
            }

            if ($expansion instanceof \Closure) {
                $query = $this->sdk->query();
                $query->limit(0);
                $query->page(0);
                $expansion($query);
                $expansion = $query;
            }

            if ($expansion instanceof Builder) {
                $results[] = sprintf("$relation(%s)", implode(';', $expansion->getQueryOptions()));
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
            if (is_string($key) && !is_string($relation)) {
                if ($relation instanceof \Closure) {
                    $this->expands[$key] = $relation;
                } elseif (!is_array($relation)) {
                    $relation = [$relation];
                }

                $this->expands[$key] = $relation;
            } else {
                $this->expands[$relation] = null;
            }
        }

        return $this;
    }

    /**
     * Set expansions for query
     *
     * @param array $expands
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function setExpands(array $expands)
    {
        $this->expands = $expands;

        return $this;
    }

    /**
     * Get all expansions
     *
     * @return array
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getExpands()
    {
        return $this->expands;
    }

    /**
     * Remove expansions from the query
     *
     * @return Expands
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function withoutExpands()
    {
        return $this->setExpands([]);
    }
}