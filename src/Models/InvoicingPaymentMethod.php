<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingPaymentMethod
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingpaymentmethod
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property bool $default
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingPaymentMethod extends Entity
{
    protected static $schema_type = 'nativeInvoicingPaymentMethods';

    protected $fillable = [
        'code',
        'displayName',
        'default',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}