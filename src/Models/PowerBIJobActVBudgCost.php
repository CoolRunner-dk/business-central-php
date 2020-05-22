<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIJobActVBudgCost
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbijobactvbudgcost
 *
 * @property int $iD
 * @property string $measureNo
 * @property string $measureName
 * @property float $value
 *
 */
class PowerBIJobActVBudgCost extends Entity
{
    protected static $schema_type = 'Power_BI_Job_Act_v_Budg_Cost';

    protected $fillable = [
        'iD',
        'measureNo',
        'measureName',
        'value',
    ];

    protected $guarded  = [

    ];
}