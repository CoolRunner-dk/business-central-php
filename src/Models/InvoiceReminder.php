<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoiceReminder
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