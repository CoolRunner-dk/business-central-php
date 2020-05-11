<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TrialBalance
 * Auto-generated on: 2020-05-11 13:51:49
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
 * @property-read \BusinessCentral\Models\Account $account
 * @method \BusinessCentral\Query\Builder account()
 *
 */
class TrialBalance extends Entity
{
    protected static $schema_type = 'trialBalance';

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