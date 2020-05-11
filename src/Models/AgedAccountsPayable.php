<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AgedAccountsPayable
 * Auto-generated on: 2020-05-11 13:54:04
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

    protected $fillable = [
        'vendorId',
        'vendorNumber',
        'name',
        'currencyCode',
        'balanceDue',
        'currentAmount',
        'period1Amount',
        'period2Amount',
        'period3Amount',
        'agedAsOfDate',
        'periodLengthFilter',
    ];

    protected $guarded  = [

    ];
}