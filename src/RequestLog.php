<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;

/**
 * Class RequestLog
 *
 * @property-read string $method   Request method
 * @property-read int $code     Response code
 * @property-read string $uri      Request URI
 * @property-read float $time     Respone time
 * @property-read array $options  Request options
 * @property-read mixed $response Response
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral
 */
class RequestLog
{
    protected $method;
    protected $code;
    protected $uri;
    protected $time;
    protected $options;
    protected $response;

    public function __construct(string $method, int $code, string $uri, float $time, array $request_options, $response)
    {
        $this->method   = $method;
        $this->code     = $code;
        $this->uri      = $uri;
        $this->time     = $time * 1000;
        $this->options  = $request_options;
        $this->response = $response;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        return null;
    }
}