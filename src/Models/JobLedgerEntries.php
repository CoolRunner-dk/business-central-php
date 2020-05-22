<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class JobLedgerEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#jobledgerentries
 *
 * @property int $entryNo
 * @property string $jobNo
 * @property string $jobTaskNo
 * @property string $postingDate
 * @property string $documentDate
 * @property string $documentNo
 * @property string $jobPostingGroup
 * @property string $resourceGroupNo
 * @property string $workTypeCode
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $locationCode
 * @property string $sourceCode
 * @property string $reasonCode
 * @property float $quantityBase
 * @property float $directUnitCostLCY
 * @property float $unitCostLCY
 * @property float $totalCostLCY
 * @property float $unitPriceLCY
 * @property float $totalPriceLCY
 * @property float $lineAmountLCY
 * @property int $dimensionSetID
 * @property string $jobDescription
 * @property string $auxiliaryIndex1
 *
 */
class JobLedgerEntries extends Entity
{
    protected static $schema_type = 'JobLedgerEntries';

    protected $fillable = [
        'entryNo',
        'jobNo',
        'jobTaskNo',
        'postingDate',
        'documentDate',
        'documentNo',
        'jobPostingGroup',
        'resourceGroupNo',
        'workTypeCode',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'locationCode',
        'sourceCode',
        'reasonCode',
        'quantityBase',
        'directUnitCostLCY',
        'unitCostLCY',
        'totalCostLCY',
        'unitPriceLCY',
        'totalPriceLCY',
        'lineAmountLCY',
        'dimensionSetID',
        'jobDescription',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}