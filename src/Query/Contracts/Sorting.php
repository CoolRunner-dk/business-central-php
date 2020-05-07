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

    public function orderBy($field, string $direction = 'asc')
    {
        if (is_array($field)) {
            $this->order_by = array_merge($this->order_by, $field);
        } else {
            $this->order_by[$field] = $direction;
        }


        return $this;
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