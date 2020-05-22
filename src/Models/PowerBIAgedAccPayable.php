<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIAgedAccPayable
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $iD
 * @property float $value
 * @property string $periodType
 * @property string $date
 * @property int $dateSorting
 * @property int $periodTypeSorting
 *
 */
class PowerBIAgedAccPayable extends Entity
{
    protected static $schema_type = 'Power_BI_Aged_Acc_Payable';

    protected $fillable = [
        'iD',
        'value',
        'periodType',
        'date',
        'dateSorting',
        'periodTypeSorting',
    ];

    protected $guarded  = [

    ];
}