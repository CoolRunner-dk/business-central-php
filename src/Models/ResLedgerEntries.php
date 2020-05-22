<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ResLedgerEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#resledgerentries
 *
 * @property int $entryNo
 * @property string $entryType
 * @property string $resourceNo
 * @property string $resourceGroupNo
 * @property string $jobNo
 * @property string $workTypeCode
 * @property string $postingDate
 * @property string $documentDate
 * @property string $documentNo
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $sourceCode
 * @property string $reasonCode
 * @property string $unitOfMeasureCode
 * @property float $quantity
 * @property float $quantityBase
 * @property float $directUnitCost
 * @property float $unitCost
 * @property float $totalCost
 * @property float $unitPrice
 * @property float $totalPrice
 * @property int $dimensionSetID
 * @property string $resourceName
 * @property string $resourceGroupName
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 *
 */
class ResLedgerEntries extends Entity
{
    protected static $schema_type = 'Res_LedgerEntries';

    protected $fillable = [
        'entryNo',
        'entryType',
        'resourceNo',
        'resourceGroupNo',
        'jobNo',
        'workTypeCode',
        'postingDate',
        'documentDate',
        'documentNo',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'sourceCode',
        'reasonCode',
        'unitOfMeasureCode',
        'quantity',
        'quantityBase',
        'directUnitCost',
        'unitCost',
        'totalCost',
        'unitPrice',
        'totalPrice',
        'dimensionSetID',
        'resourceName',
        'resourceGroupName',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
    ];

    protected $guarded  = [

    ];
}