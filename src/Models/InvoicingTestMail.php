<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTestMail
 * Auto-generated on: 2020-05-22 07:30:30
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