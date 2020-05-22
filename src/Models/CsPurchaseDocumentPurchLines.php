<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPurchaseDocumentPurchLines
 *
 * @property string $documentType
 * @property string $documentNo
 * @property int $lineNo
 * @property string $currentUserId
 * @property string $documentTypeInt
 * @property string $type
 * @property string $typeInt
 * @property string $no
 * @property string $postingAccountDescription
 * @property string $variantCode
 * @property string $prodPostingGroup
 * @property string $prodPostingGroupDesc
 * @property string $vATProdPostingGroup
 * @property string $vATProdPostingGroupDesc
 * @property string $description
 * @property string $description2
 * @property string $locationCode
 * @property float $quantity
 * @property string $unitOfMeasureCode
 * @property string $unitOfMeasureDesc
 * @property float $directUnitCost
 * @property float $indirectCostPct
 * @property float $lineAmount
 * @property float $lineDiscountPct
 * @property float $lineDiscountAmount
 * @property string $lineStyle
 * @property string $jobNo
 * @property string $jobDesc
 * @property string $jobTaskNo
 * @property string $jobTaskDesc
 * @property string $deferralCode
 * @property string $fAPostingType
 * @property string $webDim1ValueCode
 * @property string $webDim2ValueCode
 * @property string $webDim3ValueCode
 * @property string $webDim4ValueCode
 * @property string $webDim5ValueCode
 * @property string $webDim6ValueCode
 * @property string $webDim7ValueCode
 * @property string $webDim8ValueCode
 * @property string $webDim1ValueName
 * @property string $webDim2ValueName
 * @property string $webDim3ValueName
 * @property string $webDim4ValueName
 * @property string $webDim5ValueName
 * @property string $webDim6ValueName
 * @property string $webDim7ValueName
 * @property string $webDim8ValueName
 * @property int $webDim1Rule
 * @property int $webDim2Rule
 * @property int $webDim3Rule
 * @property int $webDim4Rule
 * @property int $webDim5Rule
 * @property int $webDim6Rule
 * @property int $webDim7Rule
 * @property int $webDim8Rule
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNoLinks
 * @method \BusinessCentral\Query\Builder jobNoLinks()
 *
 */
class CsPurchaseDocumentPurchLines extends Entity
{
    protected static $schema_type = 'CS_PurchaseDocumentPurchLines';

    protected $fillable = [
        'documentType',
        'documentNo',
        'lineNo',
        'currentUserId',
        'documentTypeInt',
        'type',
        'typeInt',
        'no',
        'postingAccountDescription',
        'variantCode',
        'prodPostingGroup',
        'prodPostingGroupDesc',
        'vATProdPostingGroup',
        'vATProdPostingGroupDesc',
        'description',
        'description2',
        'locationCode',
        'quantity',
        'unitOfMeasureCode',
        'unitOfMeasureDesc',
        'directUnitCost',
        'indirectCostPct',
        'lineAmount',
        'lineDiscountPct',
        'lineDiscountAmount',
        'lineStyle',
        'jobNo',
        'jobDesc',
        'jobTaskNo',
        'jobTaskDesc',
        'deferralCode',
        'fAPostingType',
        'webDim1ValueCode',
        'webDim2ValueCode',
        'webDim3ValueCode',
        'webDim4ValueCode',
        'webDim5ValueCode',
        'webDim6ValueCode',
        'webDim7ValueCode',
        'webDim8ValueCode',
        'webDim1ValueName',
        'webDim2ValueName',
        'webDim3ValueName',
        'webDim4ValueName',
        'webDim5ValueName',
        'webDim6ValueName',
        'webDim7ValueName',
        'webDim8ValueName',
        'webDim1Rule',
        'webDim2Rule',
        'webDim3Rule',
        'webDim4Rule',
        'webDim5Rule',
        'webDim6Rule',
        'webDim7Rule',
        'webDim8Rule',
    ];

    protected $guarded  = [

    ];
}