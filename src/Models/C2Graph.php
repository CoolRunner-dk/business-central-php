<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class C2Graph
 *
 * @property string $component
 * @property string $type
 * @property string $schema
 *
 */
class C2Graph extends Entity
{
    protected static $schema_type = 'C2Graph';

    protected $fillable = [
        'component',
        'type',
        'schema',
    ];

    protected $guarded  = [

    ];
}