<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PurchaseInvoice
 * Auto-generated on: 2020-05-11 13:56:11
 *
 * @property-read string $id
 * @property string $number
 * @property string $invoiceDate
 * @property string $postingDate
 * @property string $dueDate
 * @property string $vendorInvoiceNumber
 * @property string $vendorId
 * @property string $vendorNumber
 * @property string $vendorName
 * @property string $payToName
 * @property string $payToContact
 * @property string $payToVendorId
 * @property string $payToVendorNumber
 * @property string $shipToName
 * @property string $shipToContact
 * @property array|string[] $buyFromAddress
 * @property array|string[] $payToAddress
 * @property array|string[] $shipToAddress
 * @property string $currencyId
 * @property string $currencyCode
 * @property bool $pricesIncludeTax
 * @property float $discountAmount
 * @property bool $discountAppliedBeforeTax
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property string $status
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\PurchaseInvoiceLine[]|\BusinessCentral\EntityCollection $purchaseInvoiceLines
 * @property-read \BusinessCentral\Models\PdfDocument[]|\BusinessCentral\EntityCollection $pdfDocument
 * @property-read \BusinessCentral\Models\Vendor $vendor
 * @property-read \BusinessCentral\Models\Currency $currency
 * @method \BusinessCentral\Query\Builder purchaseInvoiceLines()
 * @method \BusinessCentral\Query\Builder pdfDocument()
 * @method \BusinessCentral\Query\Builder vendor()
 * @method \BusinessCentral\Query\Builder currency()
 *
 */
class PurchaseInvoice extends Entity
{
    protected static $schema_type = 'purchaseInvoice';

    protected $fillable = [
        'number',
        'invoiceDate',
        'postingDate',
        'dueDate',
        'vendorInvoiceNumber',
        'vendorId',
        'vendorNumber',
        'vendorName',
        'payToName',
        'payToContact',
        'payToVendorId',
        'payToVendorNumber',
        'shipToName',
        'shipToContact',
        'buyFromAddress',
        'payToAddress',
        'shipToAddress',
        'currencyId',
        'currencyCode',
        'pricesIncludeTax',
        'discountAmount',
        'discountAppliedBeforeTax',
        'totalAmountExcludingTax',
        'totalTaxAmount',
        'totalAmountIncludingTax',
        'status',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}