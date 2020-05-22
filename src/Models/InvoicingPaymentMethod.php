<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingPaymentMethod
 * Auto-generated on: 2020-05-22 07:30:30
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