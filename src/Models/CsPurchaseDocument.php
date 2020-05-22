<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPurchaseDocument
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $documentType
 * @property string $no
 * @property string $documentTypeInt
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
 * @property string $vendorOrderNo
 * @property string $vendorInvoiceNo
 * @property string $vendorCrMemoNo
 * @property string $payToPostCode
 * @property string $payToCounty
 * @property string $payToCountryRegionCode
 * @property string $payToCountryRegion
 * @property string $documentDate
 * @property string $paymentMethodCode
 * @property string $paymentMethod
 * @property string $nextApproverId
 * @property bool $allowEditLines
 * @property string $documentFilename
 * @property bool $pricesIncludingVAT
 * @property float $importedAmountExclVAT
 * @property float $importedAmountInclVAT
 * @property float $importedAmountExclVATLCY
 * @property float $importedAmountInclVATLCY
 * @property float $assignedAmountExclVAT
 * @property float $assignedAmountInclVAT
 * @property float $headerAmount
 * @property float $headerAmountLCY
 * @property bool $askRemoveOnHold
 * @property string $webDim1Code
 * @property string $webDim2Code
 * @property string $webDim3Code
 * @property string $webDim4Code
 * @property string $webDim5Code
 * @property string $webDim6Code
 * @property string $webDim7Code
 * @property string $webDim8Code
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentPurchLines[]|\BusinessCentral\EntityCollection $csPurchaseDocumentPurchLines
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentApprovalEntries[]|\BusinessCentral\EntityCollection $csPurchaseDocumentApprovalEntries
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentApprovalComments[]|\BusinessCentral\EntityCollection $csPurchaseDocumentApprovalComments
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentAttachedFiles[]|\BusinessCentral\EntityCollection $csPurchaseDocumentAttachedFiles
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentPurchLines()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentApprovalComments()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentAttachedFiles()
 *
 */
class CsPurchaseDocument extends Entity
{
    protected static $schema_type = 'CS_PurchaseDocument';

    protected $fillable = [
        'documentType',
        'no',
        'documentTypeInt',
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
        'vendorOrderNo',
        'vendorInvoiceNo',
        'vendorCrMemoNo',
        'payToPostCode',
        'payToCounty',
        'payToCountryRegionCode',
        'payToCountryRegion',
        'documentDate',
        'paymentMethodCode',
        'paymentMethod',
        'nextApproverId',
        'allowEditLines',
        'documentFilename',
        'pricesIncludingVAT',
        'importedAmountExclVAT',
        'importedAmountInclVAT',
        'importedAmountExclVATLCY',
        'importedAmountInclVATLCY',
        'assignedAmountExclVAT',
        'assignedAmountInclVAT',
        'headerAmount',
        'headerAmountLCY',
        'askRemoveOnHold',
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