<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseCrMemo
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $payToVendorNo
 * @property string $payToName
 * @property string $payToName2
 * @property string $payToAddress
 * @property string $payToAddress2
 * @property string $payToCity
 * @property string $payToContact
 * @property string $yourReference
 * @property string $dueDate
 * @property string $currencyCode
 * @property string $purchaserCode
 * @property string $onHold
 * @property string $vendorCrMemoNo
 * @property string $payToPostCode
 * @property string $payToCounty
 * @property string $payToCountryRegionCode
 * @property string $payToCountryRegion
 * @property string $documentDate
 * @property string $paymentMethodCode
 * @property string $paymentMethod
 * @property string $documentFilename
 * @property bool $pricesIncludingVAT
 * @property float $lineAmountExclVAT
 * @property float $lineAmountInclVAT
 * @property float $amountExclVATLCY
 * @property float $amountInclVATLCY
 * @property string $webDim1Code
 * @property string $webDim2Code
 * @property string $webDim3Code
 * @property string $webDim4Code
 * @property string $webDim5Code
 * @property string $webDim6Code
 * @property string $webDim7Code
 * @property string $webDim8Code
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoPurchLines[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoPurchLines
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoApprovalEntries[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoApprovalEntries
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoApprovalComments[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoApprovalComments
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoAttachedFiles[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoAttachedFiles
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoPurchLines()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoApprovalComments()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoAttachedFiles()
 *
 */
class CsPostedPurchaseCrMemo extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseCrMemo';

    protected $fillable = [
        'no',
        'payToVendorNo',
        'payToName',
        'payToName2',
        'payToAddress',
        'payToAddress2',
        'payToCity',
        'payToContact',
        'yourReference',
        'dueDate',
        'currencyCode',
        'purchaserCode',
        'onHold',
        'vendorCrMemoNo',
        'payToPostCode',
        'payToCounty',
        'payToCountryRegionCode',
        'payToCountryRegion',
        'documentDate',
        'paymentMethodCode',
        'paymentMethod',
        'documentFilename',
        'pricesIncludingVAT',
        'lineAmountExclVAT',
        'lineAmountInclVAT',
        'amountExclVATLCY',
        'amountInclVATLCY',
        'webDim1Code',
        'webDim2Code',
        'webDim3Code',
        'webDim4Code',
        'webDim5Code',
        'webDim6Code',
        'webDim7Code',
        'webDim8Code',
    ];

    protected $guarded  = [

    ];
}