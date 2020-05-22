<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBITop5Opportunities
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $iD
 * @property string $measureNo
 * @property float $value
 * @property string $measureName
 *
 */
class PowerBITop5Opportunities extends Entity
{
    protected static $schema_type = 'Power_BI_Top_5_Opportunities';

    protected $fillable = [
        'iD',
        'measureNo',
        'value',
        'measureName',
    ];

    protected $guarded  = [

    ];
}