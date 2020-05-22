<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DimensionSetEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#dimensionsetentries
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