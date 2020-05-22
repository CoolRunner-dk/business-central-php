<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ValueEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property string $itemNo
 * @property int $itemLedgerEntryNo
 * @property string $itemLedgerEntryType
 * @property float $itemLedgerEntryQuantity
 * @property string $postingDate
 * @property string $valuationDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $locationCode
 * @property string $sourceCode
 * @property string $reasonCode
 * @property string $jobNo
 * @property string $jobTaskNo
 * @property int $jobLedgerEntryNo
 * @property float $valuedQuantity
 * @property float $invoicedQuantity
 * @property float $costPerUnit
 * @property float $costPostedToGL
 * @property bool $expectedCost
 * @property float $costAmountActual
 * @property float $costAmountExpected
 * @property float $costAmountNonInvtbl
 * @property float $salesAmountActual
 * @property float $salesAmountExpected
 * @property float $purchaseAmountActual
 * @property float $purchaseAmountExpected
 * @property int $dimensionSetID
 * @property string $itemDescription
 * @property string $auxiliaryIndex1
 *
 */
class ValueEntries extends Entity
{
    protected static $schema_type = 'ValueEntries';

    protected $fillable = [
        'entryNo',
        'itemNo',
        'itemLedgerEntryNo',
        'itemLedgerEntryType',
        'itemLedgerEntryQuantity',
        'postingDate',
        'valuationDate',
        'documentDate',
        'documentType',
        'documentNo',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'locationCode',
        'sourceCode',
        'reasonCode',
        'jobNo',
        'jobTaskNo',
        'jobLedgerEntryNo',
        'valuedQuantity',
        'invoicedQuantity',
        'costPerUnit',
        'costPostedToGL',
        'expectedCost',
        'costAmountActual',
        'costAmountExpected',
        'costAmountNonInvtbl',
        'salesAmountActual',
        'salesAmountExpected',
        'purchaseAmountActual',
        'purchaseAmountExpected',
        'dimensionSetID',
        'itemDescription',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}