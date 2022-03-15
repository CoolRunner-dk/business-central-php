<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Schema\Action;
use BusinessCentral\Schema\ComplexType;
use BusinessCentral\Schema\EntityType;
use BusinessCentral\Schema\NavigationProperty;
use BusinessCentral\Schema\Property;
use Illuminate\Support\Str;

class Constructor
{
    /** @var SDK */
    protected static $sdk;
    protected static $map  = [];
    protected static $docs = [];

    public static function buildModels($tenant, $client_id, $client_secret, $environment = 'production')
    {
        static::$sdk = SDK::instance($tenant, [
            'client_id'    => $client_id,
            'client_secret'=> $client_secret,
            'offline_map' => false,
            'environment' => $environment,
        ]);

        static::line('+------------------------------');
        static::line('| Constructing Business Central');
        static::line("| Tenant:            \033[0;32m$tenant\033[0m");
        static::line("| Authentication     \033[0;32m$client_id\033[0m | \033[0;32m$client_secret\033[0m");

        static::line("| Building Classes:  ", false);
        static::buildClasses();

        static::line("| Building ClassMap: ", false);
        static::buildClassMap();

        static::line("| Building Docs:     ", false);
        static::buildDocs();

        static::line("| Building Markdown: ", false);
        static::buildMarkdown();
        static::line('+------------------------------');

    }

    protected static function buildClasses()
    {
        array_map('unlink', glob(__DIR__ . '/Models/*.php'));

        $types   = static::$sdk->schema->getEntityTypes()->sortKeys();
        $aliases = static::$sdk->schema->getAliases();

        foreach ($types as $type) {
            $class_name = Str::studly($aliases[$type->name] ?? $type->name);

            $schema_type = $type->schema_type;
            $path        = __DIR__ . "/Models/$class_name.php";

            foreach ($type->properties() as $property) {
                static::$docs["\BusinessCentral\Models\\$class_name"]['properties'][] = $property;
            }

            foreach ($type->relations() as $property) {
                static::$docs["\BusinessCentral\Models\\$class_name"]['relations'][] = $property;
            }

            foreach ($type->actions() as $action) {
                static::$docs["\BusinessCentral\Models\\$class_name"]['actions'][] = $action;
            }

            $fillable = [];
            $guarded  = [];
            foreach ($type->properties() as $property) {
                if (!$property->read_only) {
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
            ], static::loadStub($class_name));

            file_put_contents($path, $contents);

            static::$map[$schema_type] = "\BusinessCentral\Models\\$class_name";
        }

        static::line("\033[0;32mDone\033[0m");
    }

    protected static function buildClassMap()
    {
        file_put_contents(__DIR__ . '/../class_map.json', json_encode(static::$map, JSON_PRETTY_PRINT));
        static::line("\033[0;32mDone\033[0m");
    }

    protected static function buildDocs()
    {
        static::loadFiles(__DIR__ . '/Models');

        $classes = array_filter(get_declared_classes(), function ($class) {
            return strpos($class, 'BusinessCentral\Models\\') !== false;
        });

        foreach ($classes as $class) {
            $rfc         = new \ReflectionClass($class);
            $type        = $rfc->getStaticProperties()['schema_type'];
            $entity_type = static::$sdk->schema->getEntityType($type);

            $map_class = static::$map[$entity_type->schema_type] ?? Entity::class;

            if ($map_class !== Entity::class) {
                static::generateDocs($map_class, $entity_type);
            }
        }

        static::line("\033[0;32mDone\033[0m");
    }

    protected static function buildMarkdown()
    {
        $doc_contents = '';
        foreach (static::$docs as $class => $doc) {
            $doc_contents .= sprintf("# %s\n", class_basename($class));
            $doc_contents .= "## Properties\n";
            $doc_contents .= "| Name | Type | Read Only | Required | Nullable |\n";
            $doc_contents .= "| --- | --- | :-: | :-: | :-: |\n";
            /** @var Property $item */
            foreach ($doc['properties'] as $item) {
                $complex  = false;
                $doc_type = $item->getValidationType();
                if ($doc_type instanceof ComplexType) {
                    $complex = $doc_type;

                    $doc_type = $doc_type->name;
                    if ($item->isCollection()) {
                        $doc_type = 'array';
                    }
                }
                $doc_contents .= sprintf("| %s | %s | %s | %s | %s |\n",
                    $item->name,
                    $doc_type,
                    $item->read_only ? 'X' : ' ',
                    $item->required ? 'X' : ' ',
                    !$item->read_only ? 'X' : ' ');

                if ($complex) {
                    foreach ($complex->properties() as $property) {
                        $doc_type = $property->getValidationType();

                        $name = $item->name . '.';
                        $name .= $item->isCollection() ? '*.' : '';
                        $name .= $property->name;

                        if ($doc_type instanceof ComplexType) {
                            $doc_type = $doc_type->name;
                        }

                        $doc_contents .= sprintf("| %s | %s | %s | %s | %s |\n",
                            $name,
                            $doc_type,
                            $item->read_only ? 'X' : ' ',
                            $item->required ? 'X' : ' ',
                            !$item->read_only ? 'X' : ' ');
                    }
                }
            }
            $doc_contents .= "\n";

            if (!empty($doc['relations'] ?? [])) {
                $doc_contents .= "## Relations\n";
                $doc_contents .= "| Name | Type | Collection |\n";
                $doc_contents .= "| --- | --- | :-: |\n";
                /** @var NavigationProperty $item */
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

            if (!empty($doc['actions'])) {
                $doc_contents .= "## Actions\n";
                $doc_contents .= "\n";
                /** @var Action $action */
                foreach ($doc['actions'] as $action) {
                    $doc_contents .= "### $action->name\n";

                    $parameters = [];
                    foreach ($action->parameters as $key => $parameter) {
                        if ($key !== 'bindingParameter') {
                            $parameters[$key] = $parameter['type'];
                        }
                    }

                    if (!empty($parameters)) {
                        $doc_contents .= "### Parameters\n";
                        $doc_contents .= "| Key | Type |\n";
                        $doc_contents .= "| --- | --- |\n";
                        foreach ($parameters as $key => $value) {
                            $doc_contents .= "| $key | $value |\n";
                        }
                    } else {
                        $doc_contents .= "No parameters\n";
                    }

                    if ($action->return_type) {
                        $doc_contents .= "Returns: $action->return_type\n";
                    }

                }
            }
        }

        file_put_contents(__DIR__ . '/../entities.md', $doc_contents);

        static::line("\033[0;32mDone\033[0m");
    }

    protected static function line($msg, $newline = true)
    {
        if (php_sapi_name() === 'cli') {
            echo "$msg" . ($newline ? "\n" : null);
        }
    }

    protected static function loadStub($name)
    {
        if (file_exists(__DIR__ . "/../stubs/$name.stub")) {
            return file_get_contents(__DIR__ . "/../stubs/$name.stub");
        }

        return file_get_contents(__DIR__ . '/../stubs/model.stub');
    }

    protected static function loadFiles($dir)
    {
        $results = [];

        foreach (glob("$dir/*") as $file) {
            if (is_dir($file)) {
                $results = array_merge($results, static::loadFiles($file));
            } else {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                    require_once $file;
                    $results[] = $file;
                }
            }
        }

        return $results;
    }

    protected static function generateDocs(string $class, EntityType $type)
    {
        $rfc = new \ReflectionClass($class);
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
                'type'        => $base_type . ($is_collection ? '[]|\\' . EntityCollection::class . '' : ''),
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
        if (!$replace) {
            $replace = "class {$rfc->getShortName()}";
            $new_doc .= "\n" . "class {$rfc->getShortName()}";
        }

        $contents = file_get_contents($filepath);
        $contents = str_replace($replace, $new_doc, $contents);

        file_put_contents($filepath, $contents);
    }
}