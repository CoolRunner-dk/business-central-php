<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Schema\EntityType;

class ClassMap
{
    protected static $map;

    public static function map(EntityType $type)
    {
        self::init();

        return static::$map[$type->schema_type] ?? Entity::class;
    }

    public static function extend(string $name, string $class)
    {
        self::init();

        if (!in_array(Entity::class, class_parents($class))) {
            throw new \RuntimeException(sprintf('Cannot use class %s as mapping for Business Central - Class must extend %s', $class, Entity::class));
        }
        static::$map[$name] = $class;
    }

    public static function extendMultiple(array $map)
    {
        static::init();

        static::$map = array_merge(static::$map, $map);
    }

    protected static function init()
    {
        if (isset(static::$map)) {
            return static::$map;
        }

        $map_path = __DIR__ . '/../class_map.json';

        if (file_exists($map_path)) {
            static::$map = json_decode(file_get_contents($map_path), true);
        }

        return static::$map;
    }
}