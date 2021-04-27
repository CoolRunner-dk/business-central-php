<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Schema;


use BusinessCentral\Schema;

/**
 * Class Action
 *
 * @property-read $name
 * @property-read $parameters
 * @property-read $return_type
 * @property-read $fqn
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Schema
 */
class Action
{
    protected $schema;
    protected $name;
    protected $entity_type;
    protected $parameters = [];
    protected $return_type;

    public function __construct($action, Schema $schema)
    {
        $this->schema = $schema;
        $this->name   = $action['@attributes']['Name'];

        if (!isset($action['Parameter'][0]) && isset($action['Parameter'])) {
            $action['Parameter'] = [$action['Parameter']];
        }

        foreach ($action['Parameter'] ?? [] as $parameter) {
            $this->parameters[$parameter['@attributes']['Name']] = [
                'type' => $parameter['@attributes']['Type'],
            ];
        }

        $this->entity_type = isset($this->parameters['bindingParameter']['type']) ? $this->schema->getEntityType($this->parameters['bindingParameter']['type']) : null;

        if ($this->entity_type) {
            $this->entity_type->addAction($this);
        }

        $this->return_type = $action['ReturnType']['@attributes']['Type'] ?? null;

    }

    public function __get($name)
    {
        switch ($name) {
            case 'name':
            case 'parameters':
            case 'return_type':
                return $this->{$name};
            case 'fqn':
                return "NAV.$this->name";
        }
    }
}