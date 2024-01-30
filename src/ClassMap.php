<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Schema\EntityType;
use JsonException;

class ClassMap
{
    protected ?array $map = null;

    public function __construct(
        protected readonly string $mapDir
    )
    { }

    /** @throws JsonException */
    public function map(EntityType $type)
    {
        $this->init();

        return $this->map[$type->schema_type] ?? Entity::class;
    }

    /** @throws JsonException */
    public function extend(string $name, string $class): void
    {
        $this->init();

        if (!in_array(Entity::class, class_parents($class), true)) {
            throw new \RuntimeException(sprintf('Cannot use class %s as mapping for Business Central - Class must extend %s', $class, Entity::class));
        }
        $this->map[$name] = $class;
    }

    /** @throws JsonException */
    public function extendMultiple(array $map): void
    {
        $this->init();

        $this->map = array_merge($this->map, $map);
    }

    /** @throws JsonException */
    protected function init(): array
    {
        if ( $this->map !== null ) {
            return $this->map;
        }

        $map_path = $this->mapDir . '/class_map.json';

        if (file_exists($map_path)) {
            $this->map = json_decode(file_get_contents($map_path), true, 512, JSON_THROW_ON_ERROR);
        }

        return $this->map;
    }
}