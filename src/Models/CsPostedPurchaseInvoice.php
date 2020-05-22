<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseInvoice
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspostedpurchaseinvoice
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
 * @property string $vendorOrderNo
 * @property string $vendorInvoiceNo
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
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoicePurchLines[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoicePurchLines
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoiceApprovalEntries[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoiceApprovalEntries
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoiceApprovalComments[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoiceApprovalComments
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoiceAttachedFiles[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoiceAttachedFiles
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoicePurchLines()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoiceApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoiceApprovalComments()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoiceAttachedFiles()
 *
 */
class CsPostedPurchaseInvoice extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseInvoice';

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
        'vendorOrderNo',
        'vendorInvoiceNo',
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