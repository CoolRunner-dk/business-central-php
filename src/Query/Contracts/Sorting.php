<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;


trait Sorting
{
    protected $order_by = [];

    public function orderBy($property, string $direction = 'asc')
    {
        if (is_array($property)) {
            $this->order_by = array_merge($this->order_by, $property);
        } else {
            $this->order_by[$property] = $direction;
        }


        return $this;
    }

    public function orderByAsc(string $property)
    {
        $this->order_by[$property] = 'asc';
    }

    public function orderByDesc(string $property)
    {
        $this->order_by[$property] = 'desc';
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
}