<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class FALedgerEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#faledgerentries
 *
 * @property int $entryNo
 * @property int $gLEntryNo
 * @property string $fANo
 * @property string $fAClassCode
 * @property string $fASubclassCode
 * @property string $fAPostingDate
 * @property string $fAPostingCategory
 * @property string $fAPostingType
 * @property string $fALocationCode
 * @property string $depreciationBookCode
 * @property string $postingDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $locationCode
 * @property string $sourceCode
 * @property string $reasonCode
 * @property float $amountLCY
 * @property int $dimensionSetID
 * @property string $fADescription
 * @property string $auxiliaryIndex1
 *
 */
class FALedgerEntries extends Entity
{
    protected static $schema_type = 'FALedgerEntries';

    protected $fillable = [
        'entryNo',
        'gLEntryNo',
        'fANo',
        'fAClassCode',
        'fASubclassCode',
        'fAPostingDate',
        'fAPostingCategory',
        'fAPostingType',
        'fALocationCode',
        'depreciationBookCode',
        'postingDate',
        'documentDate',
        'documentType',
        'documentNo',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'locationCode',
        'sourceCode',
        'reasonCode',
        'amountLCY',
        'dimensionSetID',
        'fADescription',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}