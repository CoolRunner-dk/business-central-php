<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;


trait Selects
{
    protected $selects = [];

    public function getSelectsString($with_prefix = true)
    {
        if (!empty($this->selects)) {
            return ($with_prefix ? '$select=' : '') . implode(',', $this->selects);
        }

        return '';
    }

    public function select($field, $_ = null)
    {
        foreach (func_get_args() as $arg) {
            $fields = !is_array($arg) ? [$arg] : $arg;

            $this->selects = array_unique(array_merge($this->selects, $fields));
        }

        return $this;
    }

    public function clearSelect()
    {
        $this->selects = [];

        return $this;
    }

}