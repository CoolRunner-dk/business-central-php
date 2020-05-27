<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Models\Company;
use BusinessCentral\Query\Builder;
use BusinessCentral\Traits\HasSchema;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Exception\HttpException;
use WsdlToPhp\PackageBase\Tests\SoapClient;

/**
 * Class SDK
 *
 * @property string $tenant
 * @property string $environment
 * @property Client $client
 * @property Schema $schema
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral
 */
class SDK
{
    use HasSchema;

    protected static $instances = [];

    public static function instance($tenant, array $options = [])
    {
        $key = hash('sha256', json_encode([$tenant, $options]));

        return static::$instances[$key] ?? static::$instances[$key] = new static($tenant, $options);
    }

    protected $tenant;
    protected $client;

    protected $request_log = [];

    protected $options = [
        // Credentials
        'username'                => null,
        'token'                   => null,
        'environment'             => 'production',

        // Defaults
        'default_collection_size' => 20,
        'auto_paginate'           => false,
        'offline_map'             => true,
    ];

    protected function __construct($tenant, $options)
    {

        $this->tenant = $tenant;

        $this->options = array_merge($this->options, $options);

        if ( ! $this->option('username') || ! $this->option('token')) {
            throw new \RuntimeException("Missing credentials for BusinessCentral SDK");
        }

        if ( ! $this->option('environment')) {
            throw new \RuntimeException("Missing environment for BusinessCentral SDK");
        }

        $this->client = new Client([
            'base_uri' => "https://api.businesscentral.dynamics.com/v2.0/$this->tenant/$this->environment/ODataV4/",
            'headers'  => [
                'User-Agent'    => 'Business Central SDK',
                'Authorization' => "Basic " . base64_encode("{$this->option('username')}:{$this->option('token')}"),
            ],
        ]);

        $this->mapEntities();
    }

    public function logRequest($method, $uri, $time, $request_options, $code)
    {
        $this->request_log[] = [
            'method'  => $method,
            'code'    => $code,
            'uri'     => $uri,
            'time'    => $time * 1000,
            'options' => $request_options,
        ];
    }

    public function query()
    {
        return new Builder($this);
    }

    /**
     * @param string $id
     *
     * @return Company|Entity
     * @throws Exceptions\QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function company(string $id)
    {
        return $this->query()->navigateTo('Company')->find($id);
    }

    /**
     * @return EntityCollection|array[]|Company[]|Entity[]
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function companies()
    {
        return $this->query()->navigateTo('Company')->fetch();
    }

    public function fetchMetadata()
    {
        $response = $this->client->get('$metadata');
        $raw      = $response->getBody()->getContents();
        file_put_contents(__DIR__ . '/../bcmetadata.xml', $raw);

        return $raw;
    }

    public function mapEntities()
    {
        if ($this->option('offline_map') && file_exists(__DIR__ . '/../bcmetadata.xml')) {
            $raw = file_get_contents(__DIR__ . '/../bcmetadata.xml');
        } else {
            $raw = $this->fetchMetadata();
        }

        $raw = str_replace(['<edmx:', '</edmx:'], ['<', '</'], $raw);

        $json = json_decode(json_encode(simplexml_load_string($raw)), true);

        $this->schema = new Schema($json);
    }

    public function __get($name)
    {
        switch ($name) {
            case 'tenant':
                return $this->tenant;
            case 'environment':
                return $this->option('environment');
            case 'client':
                return $this->client;
            case 'schema':
                return $this->schema;
        }
    }

    public function option(string $option, $default = null)
    {
        return $this->options[$option] ?? $default;
    }
}