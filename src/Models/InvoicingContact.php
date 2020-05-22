<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingContact
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $number
 * @property string $xrmId
 * @property string $displayName
 * @property string $phoneNumber
 * @property string $email
 * @property string $customerId
 * @method bool|true|false MakeCustomer()
 *
 */
class InvoicingContact extends Entity
{
    protected static $schema_type = 'nativeInvoicingContacts';

    protected $fillable = [
        'number',
        'xrmId',
        'displayName',
        'phoneNumber',
        'email',
        'customerId',
    ];

    protected $guarded  = [

    ];
}