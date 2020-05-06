<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TrialBalance
 * Auto-generated on: 2020-05-06 09:08:24
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
 *
 */
class TrialBalance extends Entity
{
    protected static $schema_type = 'trialBalance';
}