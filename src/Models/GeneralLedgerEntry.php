<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GeneralLedgerEntry
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read int $id
 * @property string $postingDate
 * @property string $documentNumber
 * @property string $documentType
 * @property string $accountId
 * @property string $accountNumber
 * @property string $description
 * @property float $debitAmount
 * @property float $creditAmount
 * @property array|string[] $dimensions
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\Account $account
 *
 */
class GeneralLedgerEntry extends Entity
{
    protected static $schema_type = 'generalLedgerEntry';
}