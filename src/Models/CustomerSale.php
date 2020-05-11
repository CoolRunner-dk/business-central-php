<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CustomerSale
 * Auto-generated on: 2020-05-11 13:54:04
 *
 * @property string $customerId
 * @property string $customerNumber
 * @property string $name
 * @property float $totalSalesAmount
 * @property string $dateFilter_FilterOnly
 *
 */
class CustomerSale extends Entity
{
    protected static $schema_type = 'customerSale';

    protected $fillable = [
        'customerId',
        'customerNumber',
        'name',
        'totalSalesAmount',
        'dateFilter_FilterOnly',
    ];

    protected $guarded  = [

    ];
}