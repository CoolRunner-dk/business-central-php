<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingContact
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