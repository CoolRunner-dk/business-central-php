<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CustomerFinancialDetail
 * Auto-generated on: 2020-05-11 17:35:34
 *
 * @property-read string $id
 * @property string $number
 * @property float $balance
 * @property float $totalSalesExcludingTax
 * @property float $overdueAmount
 *
 */
class CustomerFinancialDetail extends Entity
{
    protected static $schema_type = 'customerFinancialDetail';

    protected $fillable = [
        'number',
        'balance',
        'totalSalesExcludingTax',
        'overdueAmount',
    ];

    protected $guarded  = [
        'id',
    ];
}