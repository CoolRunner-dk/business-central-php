<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIPurchaseHdrVendor
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbipurchasehdrvendor
 *
 * @property string $no
 * @property string $itemNo
 * @property float $quantity
 * @property string $baseUnitOfMeasure
 * @property string $description
 * @property float $unitPrice
 * @property float $inventory
 * @property float $qtyOnPurchOrder
 * @property string $vendorNo
 * @property string $name
 * @property string $countryRegionCode
 * @property float $balance
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 * @property string $auxiliaryIndex3
 * @property int $auxiliaryIndex4
 * @property string $auxiliaryIndex5
 *
 */
class PowerBIPurchaseHdrVendor extends Entity
{
    protected static $schema_type = 'Power_BI_Purchase_Hdr_Vendor';

    protected $fillable = [
        'no',
        'itemNo',
        'quantity',
        'baseUnitOfMeasure',
        'description',
        'unitPrice',
        'inventory',
        'qtyOnPurchOrder',
        'vendorNo',
        'name',
        'countryRegionCode',
        'balance',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
        'auxiliaryIndex3',
        'auxiliaryIndex4',
        'auxiliaryIndex5',
    ];

    protected $guarded  = [

    ];
}