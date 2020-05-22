<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsDimensionValues
 *
 * @property string $dimCode
 * @property string $code
 * @property string $name
 * @property string $dimValueType
 *
 */
class CsDimensionValues extends Entity
{
    protected static $schema_type = 'CS_DimensionValues';

    protected $fillable = [
        'dimCode',
        'code',
        'name',
        'dimValueType',
    ];

    protected $guarded  = [

    ];
}