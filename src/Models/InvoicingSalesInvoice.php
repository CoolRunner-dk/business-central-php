<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSalesInvoice
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property-read string $id
 * @property string $number
 * @property string $customerId
 * @property string $graphContactId
 * @property string $customerNumber
 * @property bool $taxLiable
 * @property string $taxAreaId
 * @property string $taxAreaDisplayName
 * @property string $taxRegistrationNumber
 * @property string $customerName
 * @property string $customerEmail
 * @property string $invoiceDate
 * @property string $dueDate
 * @property string $billingPostalAddress
 * @property bool $pricesIncludeTax
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
 * @property string $status
 * @property-read string $lastModifiedDateTime
 * @property string $attachments
 * @property string $invoiceDiscountCalculation
 * @property float $invoiceDiscountValue
 * @property float $remainingAmount
 * @property string $lastEmailSentStatus
 * @property string $lastEmailSentTime
 * @property bool $isTest
 * @property bool $isCustomerBlocked
 * @property-read \BusinessCentral\Models\InvoicingSalesInvoicesPayment[]|\BusinessCentral\EntityCollection $invoicingSalesInvoicesPayments
 * @method \BusinessCentral\Query\Builder invoicingSalesInvoicesPayments()
 * @method bool|true|false CancelAndSend()
 * @method bool|true|false Cancel()
 * @method bool|true|false PostAndSend()
 * @method bool|true|false Post()
 * @method bool|true|false Send()
 *
 */
class InvoicingSalesInvoice extends Entity
{
    protected static $schema_type = 'nativeInvoicingSalesInvoices';

    protected $fillable = [
        'number',
        'customerId',
        'graphContactId',
        'customerNumber',
        'taxLiable',
        'taxAreaId',
        'taxAreaDisplayName',
        'taxRegistrationNumber',
        'customerName',
        'customerEmail',
        'invoiceDate',
        'dueDate',
        'billingPostalAddress',
        'pricesIncludeTax',
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
        'status',
        'attachments',
        'invoiceDiscountCalculation',
        'invoiceDiscountValue',
        'remainingAmount',
        'lastEmailSentStatus',
        'lastEmailSentTime',
        'isTest',
        'isCustomerBlocked',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];

    /** @return InvoicingSalesInvoicesPayment */
    public function addPayment(array $attributes)
    {
        return $this->invoicingSalesInvoicesPayments->create($attributes);
    }
}