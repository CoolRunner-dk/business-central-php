<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AgedAccountsReceivable
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property string $customerId
 * @property string $customerNumber
 * @property string $name
 * @property string $currencyCode
 * @property float $balanceDue
 * @property float $currentAmount
 * @property float $period1Amount
 * @property float $period2Amount
 * @property float $period3Amount
 * @property string $agedAsOfDate
 * @property string $periodLengthFilter
 *
 */
class AgedAccountsReceivable extends Entity
{
    protected static $schema_type = 'agedAccountsReceivable';
}