<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateAgedAccountsPayable
 * Auto-generated on: 2020-05-22 07:30:30
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
class ExcelTemplateAgedAccountsPayable extends Entity
{
    protected static $schema_type = 'ExcelTemplateAgedAccountsPayable';

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