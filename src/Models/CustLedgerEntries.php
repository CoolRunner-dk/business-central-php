<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CustLedgerEntries
 *
 * @property int $entryNo
 * @property int $transactionNo
 * @property string $customerNo
 * @property string $postingDate
 * @property string $dueDate
 * @property string $pmtDiscountDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property string $salespersonCode
 * @property string $sourceCode
 * @property string $reasonCode
 * @property string $iCPartnerCode
 * @property bool $open
 * @property string $currencyCode
 * @property int $dimensionSetID
 * @property float $amount
 * @property float $debitAmount
 * @property float $creditAmount
 * @property float $remainingAmount
 * @property float $amountLCY
 * @property float $debitAmountLCY
 * @property float $creditAmountLCY
 * @property float $remainingAmtLCY
 * @property float $originalAmtLCY
 * @property string $customerName
 * @property string $auxiliaryIndex1
 *
 */
class CustLedgerEntries extends Entity
{
    protected static $schema_type = 'Cust_LedgerEntries';

    protected $fillable = [
        'entryNo',
        'transactionNo',
        'customerNo',
        'postingDate',
        'dueDate',
        'pmtDiscountDate',
        'documentDate',
        'documentType',
        'documentNo',
        'salespersonCode',
        'sourceCode',
        'reasonCode',
        'iCPartnerCode',
        'open',
        'currencyCode',
        'dimensionSetID',
        'amount',
        'debitAmount',
        'creditAmount',
        'remainingAmount',
        'amountLCY',
        'debitAmountLCY',
        'creditAmountLCY',
        'remainingAmtLCY',
        'originalAmtLCY',
        'customerName',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}