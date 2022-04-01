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
 * @property array|RequestLog[] $request_log
 * @property int $request_count
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
    protected $token_expired;
    protected $token;

    protected $request_log     = [];
    protected $request_counter = 0;
    protected  $base_uri = "https://api.businesscentral.dynamics.com";

    protected $options = [
        // Credentials
        'environment'             => 'production',
        'client_id' => null,
        'client_secret' => null,
        'scope' => null,

        // Defaults
        'default_collection_size' => 20,
        'auto_paginate'           => false,
        'offline_map'             => true,
        'logs_requests'           => false,
        'language'                => false,
    ];

    protected function __construct($tenant, $options)
    {

        $this->tenant = $tenant;

        $this->options = array_merge($this->options, $options);


        if (!$this->option('client_id') || !$this->option('client_secret')) {
            throw new \RuntimeException("Missing credentials for BusinessCentral SDK");
        }

        if (!$this->option('environment')) {
            throw new \RuntimeException("Missing environment for BusinessCentral SDK");
        }

        $this->getNewToken();

        $this->mapEntities();
    }
    public function getNewToken(){
        if(! $scope = $this->option('scope'))
            $scope = "$this->base_uri/.default";

        $test = new Client([
            'base_uri' => "https://login.microsoftonline.com/$this->tenant/oauth2/v2.0/token",
            'headers'  => [
                'Content-type' => 'application/x-www-form-urlencoded'
            ],
        ]);

        $response = $test->post('',[
            'form_params' => [
                'client_id' => $this->option('client_id'),
                'client_secret' => $this->option('client_secret'),
                'grant_type' => 'client_credentials',
                'scope' => $scope
            ]]);

        $reponse = (json_decode($response->getBody()->getContents()));

        $this->token = $reponse->access_token;
        $this->token_expired = time() + ($reponse->expires_in - 10);

        $this->client = new Client([
            'base_uri' => "https://api.businesscentral.dynamics.com/v2.0/$this->tenant/$this->environment/ODataV4/",
            'headers'  => [
                'User-Agent'    => 'Business Central SDK',
                'Authorization' => "Bearer $this->token",
            ],
        ]);
    }

    public function logRequest($method, $uri, $time, $request_options, $code, $response)
    {
        if ($this->option('logs_requests')) {
            $this->request_log[] = new RequestLog($method, $code, $uri, $time, $request_options, $response);
        }

        $this->request_counter++;
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
                if($this->token_expired < time()){
                    $this->getNewToken();
                }
                return $this->client;
            case 'schema':
                return $this->schema;
            case 'request_log':
                return $this->request_log;
            case 'request_count':
                return $this->request_counter;
        }
    }

    public function option(string $option, $default = null)
    {
        return $this->options[$option] ?? $default;
    }
}