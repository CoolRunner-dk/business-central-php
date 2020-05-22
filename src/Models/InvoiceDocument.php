<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoiceDocument
 * Auto-generated on: 2020-05-22 07:30:30
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