<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DimensionValue
 * Auto-generated on: 2020-05-07 09:06:12
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
        'id',
        'code',
        'displayName',
        'lastModifiedDateTime',
    ];
}