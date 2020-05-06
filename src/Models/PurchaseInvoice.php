<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PurchaseInvoice
 * Auto-generated on: 2020-05-06 09:08:24
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
 *
 */
class PurchaseInvoice extends Entity
{
    protected static $schema_type = 'purchaseInvoice';
}