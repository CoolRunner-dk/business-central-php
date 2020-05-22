<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBISalesHdrCust
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $itemNo
 * @property float $quantity
 * @property float $qtyInvoicedBase
 * @property float $qtyShippedBase
 * @property string $baseUnitOfMeasure
 * @property string $description
 * @property float $unitPrice
 * @property float $inventory
 * @property string $customerNo
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
class PowerBISalesHdrCust extends Entity
{
    protected static $schema_type = 'Power_BI_Sales_Hdr_Cust';

    protected $fillable = [
        'no',
        'itemNo',
        'quantity',
        'qtyInvoicedBase',
        'qtyShippedBase',
        'baseUnitOfMeasure',
        'description',
        'unitPrice',
        'inventory',
        'customerNo',
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