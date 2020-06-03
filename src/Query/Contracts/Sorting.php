<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;

use BusinessCentral\Query\Builder;

/**
 * Trait Sorting
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Query\Contracts
 *
 * @mixin Builder
 */
trait Sorting
{
    protected $order_by = [];

    protected $sort_map = [
        'asc'  => [
            SORT_ASC,
        ],
        'desc' => [
            SORT_DESC,
        ],
    ];

    public function orderBy($property, string $direction = 'asc')
    {
        foreach ($this->sort_map as $dir => $aliases) {
            if (strtolower($direction) === $dir || in_array($direction, $aliases)) {
                $direction = $dir;
                break;
            }
        }

        if (is_array($property)) {
            foreach ($property as $key => $direction) {
                $this->orderBy($key, $direction);
            }
        } else {
            $this->order_by[$property] = $direction;
        }


        return $this;
    }

    public function orderByAsc(string $property)
    {
        return $this->orderBy($property, 'asc');
    }

    public function orderByDesc(string $property)
    {
        return $this->orderBy($property, 'desc');
    }

    public function getSorting()
    {
        return $this->order_by;
    }

    public function getSortingString($with_prefix = true)
    {
        if (empty($this->order_by)) {
            return null;
        }

        $sorting = [];
        foreach ($this->order_by as $field => $direction) {
            $sorting[] = "$field $direction";
        }

        return ($with_prefix ? '$orderby=' : '') . implode(', ', $sorting);
    }

    public function lastest(string $key = 'lastModifiedDateTime')
    {
        return $this->orderByDesc($key);
    }

    public function newest(string $key = 'lastModifiedDateTime')
    {
        return $this->orderByAsc($key);
    }
}