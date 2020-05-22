<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingPaymentMethod
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