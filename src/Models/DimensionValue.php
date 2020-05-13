<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DimensionValue
 * Auto-generated on: 2020-05-13 10:59:54
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 *
 */
class DimensionValue extends Entity
{
    protected static $schema_type = 'dimensionValue';

    protected $fillable = [
        'code',
        'displayName',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}