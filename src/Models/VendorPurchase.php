<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class VendorPurchase
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property string $vendorId
 * @property string $vendorNumber
 * @property string $name
 * @property float $totalPurchaseAmount
 * @property string $dateFilter_FilterOnly
 *
 */
class VendorPurchase extends Entity
{
    protected static $schema_type = 'vendorPurchase';

    protected $fillable = [
        'vendorId',
        'vendorNumber',
        'name',
        'totalPurchaseAmount',
        'dateFilter_FilterOnly',
    ];
}