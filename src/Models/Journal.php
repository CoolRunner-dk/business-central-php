<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Journal
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 * @property string $balancingAccountId
 * @property string $balancingAccountNumber
 * @property-read \BusinessCentral\Models\JournalLine[]|\BusinessCentral\EntityCollection $journalLines
 * @property-read \BusinessCentral\Models\Account $account
 * @method \BusinessCentral\Query\Builder journalLines()
 * @method \BusinessCentral\Query\Builder account()
 *
 */
class Journal extends Entity
{
    protected static $schema_type = 'journal';

    protected $fillable = [
        'id',
        'code',
        'displayName',
        'lastModifiedDateTime',
        'balancingAccountId',
        'balancingAccountNumber',
    ];
}