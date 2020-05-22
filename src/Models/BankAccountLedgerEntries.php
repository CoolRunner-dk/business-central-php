<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class BankAccountLedgerEntries
 *
 * @property int $entryNo
 * @property int $transactionNo
 * @property string $bankAccountNo
 * @property string $postingDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property string $sourceCode
 * @property string $reasonCode
 * @property bool $open
 * @property string $currencyCode
 * @property float $amount
 * @property float $debitAmount
 * @property float $creditAmount
 * @property float $remainingAmount
 * @property float $amountLCY
 * @property float $debitAmountLCY
 * @property float $creditAmountLCY
 * @property int $dimensionSetID
 * @property string $bankAccountName
 * @property string $auxiliaryIndex1
 *
 */
class BankAccountLedgerEntries extends Entity
{
    protected static $schema_type = 'BankAccountLedgerEntries';

    protected $fillable = [
        'entryNo',
        'transactionNo',
        'bankAccountNo',
        'postingDate',
        'documentDate',
        'documentType',
        'documentNo',
        'sourceCode',
        'reasonCode',
        'open',
        'currencyCode',
        'amount',
        'debitAmount',
        'creditAmount',
        'remainingAmount',
        'amountLCY',
        'debitAmountLCY',
        'creditAmountLCY',
        'dimensionSetID',
        'bankAccountName',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}