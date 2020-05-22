<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTestMail
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingtestmail
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