<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ItemSalesAndProfit
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $description
 * @property string $genProdPostingGroup
 * @property string $itemDiscGroup
 * @property string $itemTrackingCode
 * @property float $profit
 * @property float $scrap
 * @property string $salesUnitOfMeasure
 * @property float $standardCost
 * @property float $unitCost
 * @property float $unitPrice
 * @property float $unitVolume
 * @property string $vendorNo
 * @property string $purchUnitOfMeasure
 * @property float $cOGSLCY
 * @property float $inventory
 * @property float $netChange
 * @property float $netInvoicedQty
 * @property float $purchasesLCY
 * @property float $purchasesQty
 * @property float $salesLCY
 * @property float $salesQty
 * @property string $vendorName
 * @property string $auxiliaryIndex1
 *
 */
class ItemSalesAndProfit extends Entity
{
    protected static $schema_type = 'ItemSalesAndProfit';

    protected $fillable = [
        'no',
        'description',
        'genProdPostingGroup',
        'itemDiscGroup',
        'itemTrackingCode',
        'profit',
        'scrap',
        'salesUnitOfMeasure',
        'standardCost',
        'unitCost',
        'unitPrice',
        'unitVolume',
        'vendorNo',
        'purchUnitOfMeasure',
        'cOGSLCY',
        'inventory',
        'netChange',
        'netInvoicedQty',
        'purchasesLCY',
        'purchasesQty',
        'salesLCY',
        'salesQty',
        'vendorName',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}