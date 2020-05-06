<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Journal
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 * @property string $balancingAccountId
 * @property string $balancingAccountNumber
 * @property-read \BusinessCentral\Models\JournalLine[]|\BusinessCentral\EntityCollection $journalLines
 * @property-read \BusinessCentral\Models\Account $account
 *
 */
class Journal extends Entity
{
    protected static $schema_type = 'journal';
}