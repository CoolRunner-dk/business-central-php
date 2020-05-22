<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIAgedInventoryChart
 * Auto-generated on: 2020-05-22 07:30:30
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