<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIJobProfitability
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbijobprofitability
 *
 * @property int $iD
 * @property string $measureNo
 * @property string $measureName
 * @property float $value
 *
 */
class PowerBIJobProfitability extends Entity
{
    protected static $schema_type = 'Power_BI_Job_Profitability';

    protected $fillable = [
        'iD',
        'measureNo',
        'measureName',
        'value',
    ];

    protected $guarded  = [

    ];
}