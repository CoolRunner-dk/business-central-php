<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIVendItemLedgEnt
 *
 * @property string $no
 * @property string $itemNo
 * @property float $quantity
 * @property int $auxiliaryIndex1
 *
 */
class PowerBIVendItemLedgEnt extends Entity
{
    protected static $schema_type = 'Power_BI_Vend_Item_Ledg_Ent';

    protected $fillable = [
        'no',
        'itemNo',
        'quantity',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}