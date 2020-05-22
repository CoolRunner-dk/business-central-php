<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIWorkDateCalc
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