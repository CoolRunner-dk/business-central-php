<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CustomerFinancialDetail
 * Auto-generated on: 2020-05-06 09:08:24
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
}