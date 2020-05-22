<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ItemLedgerEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property string $entryType
 * @property string $itemNo
 * @property string $crossReferenceNo
 * @property string $lotNo
 * @property string $itemCategoryCode
 * @property string $postingDate
 * @property string $expirationDate
 * @property string $warrantyDate
 * @property string $documentDate
 * @property string $documentNo
 * @property string $documentType
 * @property string $locationCode
 * @property string $jobNo
 * @property string $jobTaskNo
 * @property bool $open
 * @property float $quantity
 * @property string $unitOfMeasureCode
 * @property float $qtyPerUnitOfMeasure
 * @property float $remainingQuantity
 * @property float $invoicedQuantity
 * @property int $dimensionSetID
 * @property float $costAmountExpected
 * @property float $costAmountActual
 * @property float $costAmountNonInvtbl
 * @property float $purchaseAmountExpected
 * @property float $purchaseAmountActual
 * @property float $salesAmountExpected
 * @property float $salesAmountActual
 * @property string $itemDescription
 * @property string $auxiliaryIndex1
 *
 */
class ItemLedgerEntries extends Entity
{
    protected static $schema_type = 'ItemLedgerEntries';

    protected $fillable = [
        'entryNo',
        'entryType',
        'itemNo',
        'crossReferenceNo',
        'lotNo',
        'itemCategoryCode',
        'postingDate',
        'expirationDate',
        'warrantyDate',
        'documentDate',
        'documentNo',
        'documentType',
        'locationCode',
        'jobNo',
        'jobTaskNo',
        'open',
        'quantity',
        'unitOfMeasureCode',
        'qtyPerUnitOfMeasure',
        'remainingQuantity',
        'invoicedQuantity',
        'dimensionSetID',
        'costAmountExpected',
        'costAmountActual',
        'costAmountNonInvtbl',
        'purchaseAmountExpected',
        'purchaseAmountActual',
        'salesAmountExpected',
        'salesAmountActual',
        'itemDescription',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}