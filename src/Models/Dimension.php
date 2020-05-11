<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Dimension
 * Auto-generated on: 2020-05-11 17:35:34
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\DimensionValue[]|\BusinessCentral\EntityCollection $dimensionValues
 * @method \BusinessCentral\Query\Builder dimensionValues()
 *
 */
class Dimension extends Entity
{
    protected static $schema_type = 'dimension';

    protected $fillable = [
        'code',
        'displayName',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}