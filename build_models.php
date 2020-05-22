<?php
/**
 * Build script for BusinessCentral
 *
 * It ain't pretty but it gets the job done.
 *
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

use BusinessCentral\ClassMap;
use BusinessCentral\Entity;
use BusinessCentral\EntityCollection;
use BusinessCentral\Schema\ComplexType;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\SDK;
use Illuminate\Support\Str;

if ( ! file_exists('vendor/autoload.php')) {
    echo "This script is intended for build purposes only\n";
    die();
}

require_once 'vendor/autoload.php';

function __loadfiles($dir)
{
    $results = [];

    foreach (glob("$dir/*") as $file) {
        if (is_dir($file)) {
            $results = array_merge($results, __loadfiles($file));
        } else {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                require_once $file;
                $results[] = $file;
            }
        }
    }

    return $results;
}

function __loadstub($name)
{
    if (file_exists("stubs/$name.stub")) {
        return file_get_contents("stubs/$name.stub");
    }

    return file_get_contents('stubs/model.stub');
}

function __wl($msg)
{
    echo "$msg\n";
}

$credentials = json_decode(file_get_contents('build_credentials.json'), true);

__wl('Building models for Business Central using');
__wl(" - Tenant:   $credentials[tenant]");
__wl(" - Username: $credentials[tenant]");
__wl(" - Token:    $credentials[tenant]");

readline("Press enter to continue");

$sdk = SDK::instance($credentials['tenant'], $credentials);

$map  = [];
$docs = [];

$types   = $sdk->schema->getEntityTypes()->sortKeys();
$aliases = $sdk->schema->getAliases();

foreach ($types as $type) {
    $class_name = Str::studly($aliases[$type->name] ?? $type->name);

    $schema_type = $type->schema_type;
    $path        = "src/Models/$class_name.php";

    foreach ($type->properties() as $property) {
        $docs["\BusinessCentral\Models\\$class_name"]['properties'][] = $property;
    }

    foreach ($type->relations() as $property) {
        $docs["\BusinessCentral\Models\\$class_name"]['relations'][] = $property;
    }

    foreach ($type->actions() as $action) {
        $docs["\BusinessCentral\Models\\$class_name"]['actions'][] = $action;
    }

    $fillable = [];
    $guarded  = [];
    foreach ($type->properties() as $property) {
        if ($property->fillable) {
            $fillable[] = "        '$property->name',";
        } else {
            $guarded[] = "        '$property->name',";
        }
    }
    $fillable = implode("\n", $fillable);
    $guarded  = implode("\n", $guarded);

    $contents = str_replace([
        '{CLASS_NAME}',
        '{SCHEMA_TYPE}',
        '{FILLABLE}',
        '{GUARDED}',
    ], [
        $class_name,
        $schema_type,
        $fillable,
        $guarded,
    ], __loadstub($class_name));

    if ( ! file_exists($path) || in_array('--reset', $argv)) {
        file_put_contents($path, $contents);
        __wl("Created \BusinessCentral\Models\\$class_name");
    } else {
        __wl("Exists  \BusinessCentral\Models\\$class_name");
    }

    $map[$schema_type] = "\BusinessCentral\Models\\$class_name";
}

$map_contents = file_get_contents('src/ClassMap.php');

$map_lines = [];
foreach ($map as $type => $class) {
    $map_lines[] = "        '$type'  => $class::class,\n";
}
$map_lines[] = '    ';

preg_match('/protected static \$map \= \[[\r\n]+(.+)\]/s', $map_contents, $matches);
$map_contents = str_replace($matches[1], implode($map_lines), $map_contents);

file_put_contents('src/ClassMap.php', $map_contents);

$doc_contents = '';
foreach ($docs as $class => $doc) {
    $doc_contents .= sprintf("# %s\n", class_basename($class));
    $doc_contents .= "## Properties\n";
    $doc_contents .= "| Name | Type | Read Only | Required |\n";
    $doc_contents .= "| --- | --- | :-: |\n";
    /** @var \BusinessCentral\Schema\Property $item */
    foreach ($doc['properties'] as $item) {
        $doc_type = $item->getValidationType();
        if ($doc_type instanceof ComplexType) {
            $complex = $doc_type;

            $doc_type = $doc_type->name;
            if ($item->isCollection()) {
                $doc_type = 'array';
            }
        }
        $doc_contents .= sprintf("| %s | %s | %s | %s |\n", $item->name, $doc_type, $item->read_only ? 'X' : ' ', $property->required ? 'X' : ' ');

        if (isset($complex)) {
            if ($complex->name === 'nativeInvoicingSalesInvoiceLines') {
                foreach ($complex->properties() as $property) {
                    $doc_type = $property->getValidationType();

                    $name = $item->name . '.';
                    $name .= $item->isCollection() ? '*.' : '';
                    $name .= $property->name;

                    $doc_contents .= sprintf("| %s | %s | %s | %s |\n", $name, $doc_type, $property->read_only ? 'X' : ' ', $property->required ? 'X' : ' ');
                }
            }
        }
    }
    $doc_contents .= "\n";

    if ( ! empty($doc['relations'] ?? [])) {
        $doc_contents .= "## Relations\n";
        $doc_contents .= "| Name | Type | Collection |\n";
        $doc_contents .= "| --- | --- | :-: |\n";
        /** @var \BusinessCentral\Schema\NavigationProperty $item */
        foreach ($doc['relations'] ?? [] as $item) {
            $class        = class_basename(ClassMap::map($item->getEntityType()));
            $doc_contents .= sprintf(
                "| %s | [%s](#%s) | %s |\n",
                $item->name,
                $class . ($item->isCollection() ? '[]' : ''),
                strtolower($class),
                $item->isCollection() ? 'Yes' : 'No'
            );
        }
    }

    if ( ! empty($doc['actions'])) {
        $doc_contents .= "## Actions\n";
        $doc_contents .= "\n";
        $doc_contents .= "| Name |\n";
        $doc_contents .= "| --- | --- | :-: |\n";
        /** @var \BusinessCentral\Schema\Action $item */
        foreach ($doc['relations'] ?? [] as $item) {
            $doc_contents .= "| $item->name |\n";
        }
    }
}

file_put_contents('entities.md', $doc_contents);

function __generate_doc(string $class, EntityType $type)
{
    global $sdk;

    $rfc = new ReflectionClass($class);
    $rfp = $rfc->getProperty('guarded');
    $rfp->setAccessible(true);
    $guarded = $rfp->getValue($rfc->newInstanceWithoutConstructor());

    $properties = [];
    $methods    = [];
    foreach ($type->properties() as $property) {
        $base_type = $property->getDocType();
        $base_type = $base_type instanceof ComplexType ? 'array|string[]' : $base_type;

        $doc_prop = [
            'name'      => $property->name,
            'type'      => $base_type,
            'read_only' => in_array($property->name, $guarded) || $property->read_only,
        ];

        $properties[] = $doc_prop;
    }

    foreach ($type->relations() as $property) {
        $base_type     = ClassMap::map($property->getEntityType());
        $is_collection = $property->isCollection();

        $doc_prop = [
            'name'        => $property->name,
            'type'        => '\\' . $base_type . ($is_collection ? '[]|\\' . EntityCollection::class . '' : ''),
            'method_type' => "\BusinessCentral\Query\Builder",
            'read_only'   => true,
        ];

        $properties[] = $doc_prop;
        $methods[]    = $doc_prop;
    }

    foreach ($type->actions() as $action) {
        $doc_prop = [
            'name'        => $action->name,
            'method_type' => 'bool|true|false',
            'read_only'   => true,
        ];

        $methods[] = $doc_prop;
    }

    $lines = [
        "/**",
        ' *',
        ' * Class ' . class_basename($class),
        ' *',
    ];
    foreach ($properties as $property) {
        $prefix  = $property['read_only'] ? '@property-read' : '@property';
        $lines[] = " * $prefix $property[type] \$$property[name]";
    }

    foreach ($methods as $method) {
        $lines[] = " * @method $method[method_type] $method[name]()";
    }

    $lines[] = ' *';
    $lines[] = ' */';

    $new_doc = implode("\n", $lines);

    $filepath = $rfc->getFileName();
    $old_doc  = $rfc->getDocComment();

    $replace = $old_doc;
    if ( ! $replace) {
        $replace = "class {$rfc->getShortName()}";
        $new_doc .= "\n" . "class {$rfc->getShortName()}";
    }

    $contents = file_get_contents($filepath);
    $contents = str_replace($replace, $new_doc, $contents);

    file_put_contents($filepath, $contents);
}

__loadfiles('src');

$classes = array_filter(get_declared_classes(), function ($class) {
    return strpos($class, 'BusinessCentral\Models\\') !== false;
});

__wl('Generating docs for ' . count($classes) . ' models.');
foreach ($classes as $class) {
    $rfc         = new ReflectionClass($class);
    $type        = $rfc->getStaticProperties()['schema_type'];
    $entity_type = $sdk->schema->getEntityType($type);

    $map_class = ClassMap::map($entity_type);

    if ($map_class !== Entity::class) {
        __wl("Generating docs for:  $class");
        __generate_doc($map_class, $entity_type);
    } else {
        __wl("Class is missing map: $class");
    }

}