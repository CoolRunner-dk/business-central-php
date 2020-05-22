<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSalesInvoicesPayment
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $appliesToInvoiceId
 * @property int $paymentNo
 * @property string $customerId
 * @property string $paymentDate
 * @property float $amount
 * @property string $paymentMethodId
 *
 */
class InvoicingSalesInvoicesPayment extends Entity
{
    protected static $schema_type = 'nativeInvoicingSalesInvoicesPayments';

    protected $fillable = [
        'appliesToInvoiceId',
        'paymentNo',
        'customerId',
        'paymentDate',
        'amount',
        'paymentMethodId',
    ];

    protected $guarded  = [

    ];
}