<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query;


trait Expands
{
    protected $expands = [];

    public function buildExpandString()
    {
        if (empty($this->expands)) {
            return null;
        }

        return '$expand=' . implode(', ', $this->expands);
    }

    public function expand($relations, $_ = null)
    {
        foreach (func_get_args() as $arg) {
            if ( ! is_null($arg)) {
                if (is_array($arg)) {
                    $this->expands = array_merge($this->expands, array_values($arg));
                } elseif (is_string($arg)) {
                    $this->expands = array_merge($this->expands, explode(',', $arg));
                }
            }
        }

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