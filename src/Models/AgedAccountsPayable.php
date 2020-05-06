<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AgedAccountsPayable
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property string $vendorId
 * @property string $vendorNumber
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
class AgedAccountsPayable extends Entity
{
    protected static $schema_type = 'agedAccountsPayable';
}