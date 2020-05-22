<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTestMail
 *
 * @property string $code
 * @property string $email
 *
 */
class InvoicingTestMail extends Entity
{
    protected static $schema_type = 'nativeInvoicingTestMail';

    protected $fillable = [
        'code',
        'email',
    ];

    protected $guarded  = [

    ];
}