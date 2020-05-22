<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateAgedAccountsReceivable
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#exceltemplateagedaccountsreceivable
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
class ExcelTemplateAgedAccountsReceivable extends Entity
{
    protected static $schema_type = 'ExcelTemplateAgedAccountsReceivable';

    protected $fillable = [
        'customerId',
        'customerNumber',
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