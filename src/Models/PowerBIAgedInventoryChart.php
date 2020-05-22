<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIAgedInventoryChart
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbiagedinventorychart
 *
 * @property int $iD
 * @property float $value
 * @property string $date
 * @property string $periodType
 * @property int $periodTypeSorting
 *
 */
class PowerBIAgedInventoryChart extends Entity
{
    protected static $schema_type = 'Power_BI_Aged_Inventory_Chart';

    protected $fillable = [
        'iD',
        'value',
        'date',
        'periodType',
        'periodTypeSorting',
    ];

    protected $guarded  = [

    ];
}