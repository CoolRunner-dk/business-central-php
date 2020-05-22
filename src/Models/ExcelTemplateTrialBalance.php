<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateTrialBalance
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#exceltemplatetrialbalance
 *
 * @property string $number
 * @property string $accountId
 * @property string $accountType
 * @property string $display
 * @property string $totalDebit
 * @property string $totalCredit
 * @property string $balanceAtDateDebit
 * @property string $balanceAtDateCredit
 * @property string $dateFilter
 *
 */
class ExcelTemplateTrialBalance extends Entity
{
    protected static $schema_type = 'ExcelTemplateTrialBalance';

    protected $fillable = [
        'number',
        'accountId',
        'accountType',
        'display',
        'totalDebit',
        'totalCredit',
        'balanceAtDateDebit',
        'balanceAtDateCredit',
        'dateFilter',
    ];

    protected $guarded  = [

    ];
}