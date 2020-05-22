<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoiceDocument
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