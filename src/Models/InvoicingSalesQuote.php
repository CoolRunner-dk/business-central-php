<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSalesQuote
 *
 * @property-read string $id
 * @property string $number
 * @property string $quoteDate
 * @property string $dueDate
 * @property string $validUntilDate
 * @property string $status
 * @property bool $accepted
 * @property string $acceptedDate
 * @property string $customerId
 * @property string $graphContactId
 * @property string $customerNumber
 * @property string $customerName
 * @property string $customerEmail
 * @property bool $taxLiable
 * @property string $taxAreaId
 * @property string $taxAreaDisplayName
 * @property string $taxRegistrationNumber
 * @property string $billingPostalAddress
 * @property bool $pricesIncludeTax
 * @property string $shipmentMethod
 * @property string $salesperson
 * @property string $currencyCode
 * @property string $lines
 * @property float $subtotalAmount
 * @property float $discountAmount
 * @property bool $discountAppliedBeforeTax
 * @property string $coupons
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property string $noteForCustomer
 * @property-read string $lastModifiedDateTime
 * @property string $attachments
 * @property string $invoiceDiscountCalculation
 * @property float $invoiceDiscountValue
 * @property string $lastEmailSentStatus
 * @property string $lastEmailSentTime
 * @property bool $isCustomerBlocked
 * @method bool|true|false MakeInvoice()
 * @method bool|true|false Send()
 *
 */
class InvoicingSalesQuote extends Entity
{
    protected static $schema_type = 'nativeInvoicingSalesQuotes';

    protected $fillable = [
        'number',
        'quoteDate',
        'dueDate',
        'validUntilDate',
        'status',
        'accepted',
        'acceptedDate',
        'customerId',
        'graphContactId',
        'customerNumber',
        'customerName',
        'customerEmail',
        'taxLiable',
        'taxAreaId',
        'taxAreaDisplayName',
        'taxRegistrationNumber',
        'billingPostalAddress',
        'pricesIncludeTax',
        'shipmentMethod',
        'salesperson',
        'currencyCode',
        'lines',
        'subtotalAmount',
        'discountAmount',
        'discountAppliedBeforeTax',
        'coupons',
        'totalAmountExcludingTax',
        'totalTaxAmount',
        'totalAmountIncludingTax',
        'noteForCustomer',
        'attachments',
        'invoiceDiscountCalculation',
        'invoiceDiscountValue',
        'lastEmailSentStatus',
        'lastEmailSentTime',
        'isCustomerBlocked',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}