<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query;


use BusinessCentral\Exceptions\Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

trait Filters
{
    protected $filters = [];

    protected function buildFilterString()
    {
        if (empty($this->filters)) {
            return null;
        }

        $filters = '';
        foreach ($this->filters as $i => $filter) {
            $filters .= "$filter[0] $filter[1] $filter[2]";

            if ($i < count($this->filters) - 1) {
                $filters .= $filter[3];
            }
        }

        return '$filter=' . $filters;
    }


    public function filterString(string $property, $operator, $value = null, $after = 'and')
    {
        if ($value === null) {
            $value    = $operator;
            $operator = '=';
        }

        return $this->filterRaw($property, $operator, "'$value'", $after);
    }

    public function filterDate(string $property, $operator, \DateTime $date = null, $after = 'and')
    {
        if ($date === null) {
            $date     = $operator;
            $operator = '=';
        }

        if ( ! ($date instanceof \DateTime)) {
            throw new Exception("whereDate on Builder must be an instance of DateTime");
        }

        return $this->filterRaw($property, $operator, $date->format('Y-m-d\TH:i:s.v\Z'), $after);
    }

    public function filterId(string $property, $operator, $value = null, $after = 'and')
    {
        return $this->filterRaw($property, $operator, $value, $after);
    }

    /**
     * @param string $property
     * @param        $operator
     * @param null   $value
     * @param string $after
     *
     * @return Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function filterRaw(string $property, $operator, $value = null, $after = 'and')
    {
        if ($value === null) {
            $value    = $operator;
            $operator = '=';
        }

        $operator = $this->parseOperator($operator);

        $this->filters[] = [$property, $operator, $value, $after];

        return $this;
    }

    public function orFilterString(string $property, $operator, $value = null)
    {
        return $this->filterString($property, $operator, $value, 'or');
    }

    public function orFilterDate(string $property, $operator, \DateTime $value = null)
    {
        return $this->filterDate($property, $operator, $value, 'or');
    }

    public function orFilterRaw(string $property, $operator, $value = null)
    {
        return $this->filterRaw($property, $operator, $value, 'or');
    }

    protected function parseOperator($operator)
    {
        return [
                   '='  => 'eq',
                   '>'  => 'gt',
                   '>=' => 'ge',
                   '<'  => 'lt',
                   '<=' => 'le',
               ][$operator] ?? $operator;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;
    }
}