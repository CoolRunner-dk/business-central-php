<?php
/** @noinspection PhpComposerExtensionStubsInspection */

/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Query\Builder;
use BusinessCentral\Traits\HasSchema;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

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

    protected static array $instances = [];

    public static function instance(string $APIUri, string $tenant, array $options = [])
    {
        $key = hash('sha256', json_encode([$APIUri, $tenant, $options], JSON_THROW_ON_ERROR));

        return static::$instances[$key] ?? static::$instances[$key] = new static($APIUri, $tenant, $options);
    }

    protected string $tenant;
    protected Client $client;
    protected int $token_expired;
    protected string $token;

    protected array $request_log     = [];
    protected int $request_counter = 0;
    protected string $base_uri = "https://api.businesscentral.dynamics.com";
    protected string $APIUri = "https://api.businesscentral.dynamics.com/v2.0/{tenant}/{environment}/ODataV4/";

    protected ClassMap $classMap;

    protected array $options = [
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
        'target_dir'              => __DIR__,
    ];

    protected function __construct($APIUri, $tenant, $options)
    {
        $this->APIUri = $APIUri;

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

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function getNewToken(): void
    {
        if(! $scope = $this->option('scope')) {
            $scope = "$this->base_uri/.default";
        }

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

        $reponse = (json_decode($response->getBody()->getContents(), false, 512, JSON_THROW_ON_ERROR));

        $this->token = $reponse->access_token;
        $this->token_expired = time() + ($reponse->expires_in - 10);

        $uri = str_replace(
            [
                '{tenant}',
                '{environment}',
            ],
            [
                $this->tenant,
                $this->environment,
            ],
            $this->APIUri
        );


        $this->client = new Client([
            'base_uri' => $uri,
            'headers'  => [
                'User-Agent'    => 'Business Central SDK',
                'Authorization' => "Bearer $this->token",
            ],
        ]);
    }

    public function logRequest($method, $uri, $time, $request_options, $code, $response): void
    {
        if ($this->option('logs_requests')) {
            $this->request_log[] = new RequestLog($method, $code, $uri, $time, $request_options, $response);
        }

        $this->request_counter++;
    }

    public function query(): Builder
    {
        return new Builder($this);
    }

    /**
     * @param string $id
     *
     * @return Entity
     * @throws Exceptions\QueryException
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function company(string $id): Entity
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

    /**
     * @throws GuzzleException
     */
    public function fetchMetadata(): string
    {
        $response = $this->client->get('$metadata');
        $raw      = $response->getBody()->getContents();
        file_put_contents($this->option('target_dir') . '/bcmetadata.xml', $raw);

        return $raw;
    }

    /**
     * @throws \JsonException
     * @throws GuzzleException
     */
    public function mapEntities(): void
    {
        if ($this->option('offline_map') && file_exists($this->option('target_dir') . '/bcmetadata.xml')) {
            $raw = file_get_contents($this->option('target_dir') . '/bcmetadata.xml');
        } else {
            $raw = $this->fetchMetadata();
        }

        $raw = str_replace(['<edmx:', '</edmx:'], ['<', '</'], $raw);

        $json = json_decode(json_encode(simplexml_load_string($raw), JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR);

        $this->setSchema(new Schema($json));

        $this->classMap = new ClassMap($this->option('target_dir'));
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
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
        return null;
    }

    public function option(string $option, $default = null)
    {
        return $this->options[$option] ?? $default;
    }

    public function getClassMap(): ClassMap
    {
        return $this->classMap;
    }

}