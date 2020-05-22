<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoiceDocument
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicedocument
 *
 * @property string $invoiceId
 * @property string $base64
 * @property string $binary
 *
 */
class InvoiceDocument extends Entity
{
    protected static $schema_type = 'InvoiceDocument';

    protected $fillable = [
        'invoiceId',
        'base64',
        'binary',
    ];

    protected $guarded  = [

    ];
}