<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GeneralLedgerEntry
 * Auto-generated on: 2020-05-11 13:51:49
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
 * @method \BusinessCentral\Query\Builder account()
 *
 */
class GeneralLedgerEntry extends Entity
{
    protected static $schema_type = 'generalLedgerEntry';

    protected $fillable = [
        'postingDate',
        'documentNumber',
        'documentType',
        'accountId',
        'accountNumber',
        'description',
        'debitAmount',
        'creditAmount',
        'dimensions',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}