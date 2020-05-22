<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoiceReminder
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicereminder
 *
 * @property string $invoiceId
 * @property string $message
 *
 */
class InvoiceReminder extends Entity
{
    protected static $schema_type = 'InvoiceReminder';

    protected $fillable = [
        'invoiceId',
        'message',
    ];

    protected $guarded  = [

    ];
}