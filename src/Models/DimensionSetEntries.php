<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DimensionSetEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $dimensionSetID
 * @property string $dimensionCode
 * @property string $dimensionValueCode
 * @property int $dimensionValueID
 * @property string $dimensionName
 * @property string $dimensionValueName
 *
 */
class DimensionSetEntries extends Entity
{
    protected static $schema_type = 'DimensionSetEntries';

    protected $fillable = [
        'dimensionSetID',
        'dimensionCode',
        'dimensionValueCode',
        'dimensionValueID',
        'dimensionName',
        'dimensionValueName',
    ];

    protected $guarded  = [

    ];
}