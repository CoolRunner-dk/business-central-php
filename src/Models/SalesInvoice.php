<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesInvoice
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $number
 * @property string $externalDocumentNumber
 * @property string $invoiceDate
 * @property string $postingDate
 * @property string $dueDate
 * @property string $customerPurchaseOrderReference
 * @property string $customerId
 * @property string $contactId
 * @property string $customerNumber
 * @property string $customerName
 * @property string $billToName
 * @property string $billToCustomerId
 * @property string $billToCustomerNumber
 * @property string $shipToName
 * @property string $shipToContact
 * @property array|string[] $sellingPostalAddress
 * @property array|string[] $billingPostalAddress
 * @property array|string[] $shippingPostalAddress
 * @property string $currencyId
 * @property string $currencyCode
 * @property string $orderId
 * @property string $orderNumber
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $salesperson
 * @property bool $pricesIncludeTax
 * @property float $remainingAmount
 * @property float $discountAmount
 * @property bool $discountAppliedBeforeTax
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property string $status
 * @property-read string $lastModifiedDateTime
 * @property string $phoneNumber
 * @property string $email
 * @property-read \BusinessCentral\Models\SalesInvoiceLine[]|\BusinessCentral\EntityCollection $salesInvoiceLines
 * @property-read \BusinessCentral\Models\PdfDocument[]|\BusinessCentral\EntityCollection $pdfDocument
 * @property-read \BusinessCentral\Models\Customer $customer
 * @property-read \BusinessCentral\Models\Currency $currency
 * @property-read \BusinessCentral\Models\PaymentTerm $paymentTerm
 * @property-read \BusinessCentral\Models\ShipmentMethod $shipmentMethod
 *
 */
class SalesInvoice extends Entity
{
    protected static $schema_type = 'salesInvoice';
}