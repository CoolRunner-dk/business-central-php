<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoiceReminder
 * Auto-generated on: 2020-05-22 07:30:30
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