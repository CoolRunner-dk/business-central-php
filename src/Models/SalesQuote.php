<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesQuote
 * Auto-generated on: 2020-05-13 10:59:54
 *
 * @property-read string $id
 * @property string $number
 * @property string $externalDocumentNumber
 * @property string $documentDate
 * @property string $postingDate
 * @property string $dueDate
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
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $salesperson
 * @property float $discountAmount
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property string $status
 * @property string $sentDate
 * @property string $validUntilDate
 * @property string $acceptedDate
 * @property-read string $lastModifiedDateTime
 * @property string $phoneNumber
 * @property string $email
 * @property-read \BusinessCentral\Models\SalesQuoteLine[]|\BusinessCentral\EntityCollection $salesQuoteLines
 * @property-read \BusinessCentral\Models\PdfDocument[]|\BusinessCentral\EntityCollection $pdfDocument
 * @property-read \BusinessCentral\Models\Customer $customer
 * @property-read \BusinessCentral\Models\Currency $currency
 * @property-read \BusinessCentral\Models\PaymentTerm $paymentTerm
 * @property-read \BusinessCentral\Models\ShipmentMethod $shipmentMethod
 * @method \BusinessCentral\Query\Builder salesQuoteLines()
 * @method \BusinessCentral\Query\Builder pdfDocument()
 * @method \BusinessCentral\Query\Builder customer()
 * @method \BusinessCentral\Query\Builder currency()
 * @method \BusinessCentral\Query\Builder paymentTerm()
 * @method \BusinessCentral\Query\Builder shipmentMethod()
 * @method bool|true|false makeInvoice()
 * @method bool|true|false makeOrder()
 * @method bool|true|false send()
 *
 */
class SalesQuote extends Entity
{
    protected static $schema_type = 'salesQuote';

    protected $fillable = [
        'number',
        'externalDocumentNumber',
        'documentDate',
        'postingDate',
        'dueDate',
        'customerId',
        'contactId',
        'customerNumber',
        'customerName',
        'billToName',
        'billToCustomerId',
        'billToCustomerNumber',
        'shipToName',
        'shipToContact',
        'sellingPostalAddress',
        'billingPostalAddress',
        'shippingPostalAddress',
        'currencyId',
        'currencyCode',
        'paymentTermsId',
        'shipmentMethodId',
        'salesperson',
        'discountAmount',
        'totalAmountExcludingTax',
        'totalTaxAmount',
        'totalAmountIncludingTax',
        'status',
        'sentDate',
        'validUntilDate',
        'acceptedDate',
        'phoneNumber',
        'email',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}