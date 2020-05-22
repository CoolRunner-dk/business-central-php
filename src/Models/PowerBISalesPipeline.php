<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBISalesPipeline
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $iD
 * @property string $rowNo
 * @property float $value
 * @property string $measureName
 * @property string $measureNo
 *
 */
class PowerBISalesPipeline extends Entity
{
    protected static $schema_type = 'Power_BI_Sales_Pipeline';

    protected $fillable = [
        'iD',
        'rowNo',
        'value',
        'measureName',
        'measureNo',
    ];

    protected $guarded  = [

    ];
}