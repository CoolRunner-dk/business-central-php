<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesCreditMemo
 * Auto-generated on: 2020-05-11 14:08:26
 *
 * @property-read string $id
 * @property string $number
 * @property string $externalDocumentNumber
 * @property string $creditMemoDate
 * @property string $postingDate
 * @property string $dueDate
 * @property string $customerId
 * @property string $contactId
 * @property string $customerNumber
 * @property string $customerName
 * @property string $billToName
 * @property string $billToCustomerId
 * @property string $billToCustomerNumber
 * @property array|string[] $sellingPostalAddress
 * @property array|string[] $billingPostalAddress
 * @property string $currencyId
 * @property string $currencyCode
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $salesperson
 * @property bool $pricesIncludeTax
 * @property float $discountAmount
 * @property bool $discountAppliedBeforeTax
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property string $status
 * @property-read string $lastModifiedDateTime
 * @property string $invoiceId
 * @property string $invoiceNumber
 * @property string $phoneNumber
 * @property string $email
 * @property-read \BusinessCentral\Models\SalesCreditMemoLine[]|\BusinessCentral\EntityCollection $salesCreditMemoLines
 * @property-read \BusinessCentral\Models\PdfDocument[]|\BusinessCentral\EntityCollection $pdfDocument
 * @property-read \BusinessCentral\Models\Customer $customer
 * @property-read \BusinessCentral\Models\Currency $currency
 * @property-read \BusinessCentral\Models\PaymentTerm $paymentTerm
 * @property-read \BusinessCentral\Models\ShipmentMethod $shipmentMethod
 * @method \BusinessCentral\Query\Builder salesCreditMemoLines()
 * @method \BusinessCentral\Query\Builder pdfDocument()
 * @method \BusinessCentral\Query\Builder customer()
 * @method \BusinessCentral\Query\Builder currency()
 * @method \BusinessCentral\Query\Builder paymentTerm()
 * @method \BusinessCentral\Query\Builder shipmentMethod()
 *
 */
class SalesCreditMemo extends Entity
{
    protected static $schema_type = 'salesCreditMemo';

    protected $fillable = [
        'number',
        'externalDocumentNumber',
        'creditMemoDate',
        'postingDate',
        'dueDate',
        'customerId',
        'contactId',
        'customerNumber',
        'customerName',
        'billToName',
        'billToCustomerId',
        'billToCustomerNumber',
        'sellingPostalAddress',
        'billingPostalAddress',
        'currencyId',
        'currencyCode',
        'paymentTermsId',
        'shipmentMethodId',
        'salesperson',
        'pricesIncludeTax',
        'discountAmount',
        'discountAppliedBeforeTax',
        'totalAmountExcludingTax',
        'totalTaxAmount',
        'totalAmountIncludingTax',
        'status',
        'invoiceId',
        'invoiceNumber',
        'phoneNumber',
        'email',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}