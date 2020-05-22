<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSalesInvoiceOverview
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingsalesinvoiceoverview
 *
 * @property-read string $id
 * @property string $number
 * @property string $customerNumber
 * @property string $customerName
 * @property string $invoiceDate
 * @property string $dueDate
 * @property string $currencyCode
 * @property float $subtotalAmount
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property string $status
 * @property-read string $lastModifiedDateTime
 * @property bool $isTest
 * @property string $lastEmailSentStatus
 *
 */
class InvoicingSalesInvoiceOverview extends Entity
{
    protected static $schema_type = 'nativeInvoicingSalesInvoiceOverview';

    protected $fillable = [
        'number',
        'customerNumber',
        'customerName',
        'invoiceDate',
        'dueDate',
        'currencyCode',
        'subtotalAmount',
        'totalAmountExcludingTax',
        'totalTaxAmount',
        'totalAmountIncludingTax',
        'status',
        'isTest',
        'lastEmailSentStatus',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}