<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIWorkDateCalc
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbiworkdatecalc
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