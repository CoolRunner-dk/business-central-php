<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBICustItemLedgEnt
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbicustitemledgent
 *
 * @property string $no
 * @property string $itemNo
 * @property float $quantity
 * @property int $auxiliaryIndex1
 *
 */
class PowerBICustItemLedgEnt extends Entity
{
    protected static $schema_type = 'Power_BI_Cust_Item_Ledg_Ent';

    protected $fillable = [
        'no',
        'itemNo',
        'quantity',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}