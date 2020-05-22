<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class VendorLedgerEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property int $transactionNo
 * @property string $vendorNo
 * @property string $postingDate
 * @property string $dueDate
 * @property string $pmtDiscountDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property string $purchaserCode
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
 * @property string $vendorName
 * @property string $auxiliaryIndex1
 *
 */
class VendorLedgerEntries extends Entity
{
    protected static $schema_type = 'VendorLedgerEntries';

    protected $fillable = [
        'entryNo',
        'transactionNo',
        'vendorNo',
        'postingDate',
        'dueDate',
        'pmtDiscountDate',
        'documentDate',
        'documentType',
        'documentNo',
        'purchaserCode',
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
        'vendorName',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}