<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIWorkDateCalc
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $number
 * @property string $workDateNAV
 *
 */
class PowerBIWorkDateCalc extends Entity
{
    protected static $schema_type = 'Power_BI_WorkDate_Calc';

    protected $fillable = [
        'number',
        'workDateNAV',
    ];

    protected $guarded  = [

    ];
}