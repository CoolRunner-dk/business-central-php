<?php
/**
 * @package   CoolRunner-Core
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


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

    protected $tenant, $options;

    protected $client;

    protected function __construct($tenant, $options)
    {
        $this->tenant = $tenant;

        $this->options = $options;

        $this->client = new Client([
            'base_uri' => "https://api.businesscentral.dynamics.com/v1.0/$this->tenant/$this->environment/api/v1.0/",
            'headers'  => [
                'User-Agent'    => 'Business Central SDK',
                'Authorization' => "Basic " . base64_encode("{$this->options['username']}:{$this->options['token']}"),
            ],
        ]);

        $this->mapEntities();
    }

    public function query()
    {
        return new Builder($this);
    }

    public function mapEntities()
    {
        $response = $this->client->get('$metadata');
        $raw      = $response->getBody()->getContents();
        $raw      = str_replace(['<edmx:', '</edmx:'], ['<', '</'], $raw);

        $json = json_decode(json_encode(simplexml_load_string($raw)), true);

        $this->schema = new Schema($json);
    }

    public function __get($name)
    {
        switch ($name) {
            case 'tenant':
                return $this->tenant;
            case 'environment':
                return $this->options['environment'] ?? 'production';
            case 'client':
                return $this->client;
            case 'schema':
                return $this->schema;
        }
    }
}