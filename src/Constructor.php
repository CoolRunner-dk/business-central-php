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
use BusinessCentral\Query\Builder;

class Constructor
{
    /** @var SDK */
    protected static SDK $sdk;
    protected static array $map  = [];
    protected static array $docs = [];

    /**
     * @throws \JsonException
     * @throws \ReflectionException
     */
    public static function buildModels(
        string $baseUri,
        string $tenant,
        string $client_id,
        string $client_secret,
        string $environment = 'production',
        string $namespace = 'BusinessCentral\\Models',
        string $targetDir = __DIR__,
        string $stubDir = __DIR__ . '/../stubs'
    ): void
    {
        static::$map  = [];
        static::$docs = [];
        static::$sdk = SDK::instance(
            $baseUri,
            $tenant,
            [
                'client_id'    => $client_id,
                'client_secret'=> $client_secret,
                'offline_map' => false,
                'environment' => $environment,
                'target_dir' => $targetDir,
            ]
        );

        static::line('+------------------------------');
        static::line('| Constructing Business Central');
        static::line("| Tenant:            \033[0;32m$tenant\033[0m");
        static::line("| Authentication     \033[0;32m$client_id\033[0m | \033[0;32m$client_secret\033[0m");

        static::line("| Building Classes:  ", false);
        static::buildClasses($namespace, $targetDir, $stubDir);

        static::line("| Building ClassMap: ", false);
        static::buildClassMap($targetDir);

        static::line("| Building Docs:     ", false);
        static::buildDocs($namespace, $targetDir);

        static::line("| Building Markdown: ", false);
        static::buildMarkdown($targetDir);
        static::line('+------------------------------');

    }

    protected static function buildClasses(
        string $namespace,
        string $targetDir,
        string $stubDir,
    ): void
    {
        array_map('unlink', glob($targetDir . '/Models/*.php'));

        $types   = static::$sdk->schema->getEntityTypes()->sortKeys();
        $aliases = static::$sdk->schema->getAliases();

        foreach ($types as $type) {
            $class_name = Str::studly($aliases[$type->name] ?? $type->name);
            $classKey   = '\\'.$namespace . '\\' . $class_name;

            $schema_type = $type->schema_type;
            $path        = $targetDir . "/Models/$class_name.php";

            foreach ($type->properties() as $property) {
                static::$docs[$classKey]['properties'][] = $property;
            }

            foreach ($type->relations() as $property) {
                static::$docs[$classKey]['relations'][] = $property;
            }

            foreach ($type->actions() as $action) {
                static::$docs[$classKey]['actions'][] = $action;
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
                '{CLASS_NAMESPACE}',
                '{CLASS_NAME}',
                '{SCHEMA_TYPE}',
                '{FILLABLE}',
                '{GUARDED}',
            ], [
                $namespace,
                $class_name,
                $schema_type,
                $fillable,
                $guarded,
            ], static::loadStub($stubDir, $class_name));

            file_put_contents($path, $contents);

            static::$map[$schema_type] = $classKey;
        }

        static::line("\033[0;32mDone\033[0m");
    }

    /**
     * @throws \JsonException
     */
    protected static function buildClassMap(string $targetDir): void
    {
        file_put_contents($targetDir . '/class_map.json',
            json_encode(static::$map, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT)
        );
        static::line("\033[0;32mDone\033[0m");
    }

    /**
     * @throws \ReflectionException
     */
    protected static function buildDocs(string $namespace, string $targetDir): void
    {
        static::loadFiles($targetDir . '/Models');

        $classes = array_filter(get_declared_classes(), static function ($class) use ($namespace) {
            return str_contains($class, $namespace );
        });

        foreach ($classes as $class) {
            $rfc         = new \ReflectionClass($class);
            $type        = $rfc->getStaticProperties()['schema_type'];
            $entity_type = static::$sdk->getSchema()->getEntityType($type);

            if (!$entity_type) {
                continue;
            }

            $map_class = static::$map[$entity_type->schema_type] ?? Entity::class;

            if ($map_class !== Entity::class) {
                static::generateDocs($targetDir, $map_class, $entity_type);
            }
        }

        static::line("\033[0;32mDone\033[0m");
    }

    protected static function buildMarkdown(string $targetDir): void
    {
        $classMap = new ClassMap($targetDir);

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
                    $class        = class_basename($classMap->map($item->getEntityType()));
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

        file_put_contents($targetDir . '/entities.md', $doc_contents);

        static::line("\033[0;32mDone\033[0m");
    }

    protected static function line(string $msg, $newline = true): void
    {
        if (PHP_SAPI === 'cli') {
            echo $msg . ($newline ? "\n" : null);
        }
    }

    protected static function loadStub($stubDir, $name): false|string
    {
        if (file_exists($stubDir . "/$name.stub")) {
            return file_get_contents($stubDir . "/$name.stub");
        }

        return file_get_contents($stubDir . '/model.stub');
    }

    protected static function loadFiles($dir): array
    {
        $results = [];

        foreach (glob("$dir/*") as $file) {
            if (is_dir($file)) {
                $results = array_merge($results, static::loadFiles($file));
            } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                require_once $file;
                $results[] = $file;
            }
        }

        return $results;
    }

    /**
     * @throws \ReflectionException
     */
    protected static function generateDocs(, string $targetDir, string $class, EntityType $type): void
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

        $classMap = new ClassMap($targetDir);
        foreach ($type->relations() as $property) {
            $base_type     = $classMap->map($property->getEntityType());
            $is_collection = $property->isCollection();

            $doc_prop = [
                'name'        => $property->name,
                'type'        => $base_type . ($is_collection ? '[]|\\' . EntityCollection::class : ''),
                'method_type' => Builder::class,
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