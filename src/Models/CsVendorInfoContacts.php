<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsVendorInfoContacts
 *
 * @property string $no
 * @property string $name
 * @property string $phoneNo
 * @property string $eMail
 *
 */
class CsVendorInfoContacts extends Entity
{
    protected static $schema_type = 'CS_VendorInfoContacts';

    protected $fillable = [
        'no',
        'name',
        'phoneNo',
        'eMail',
    ];

    protected $guarded  = [

    ];
}