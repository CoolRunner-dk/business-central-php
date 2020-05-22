<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBICustItemLedgEnt
 * Auto-generated on: 2020-05-22 07:30:30
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