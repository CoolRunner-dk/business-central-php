<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsDimensionValues
 * Auto-generated on: 2020-05-22 07:30:30
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