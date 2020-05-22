<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingEmailSetting
 *
 * @property string $code
 * @property string $recipientType
 * @property string $eMail
 *
 */
class InvoicingEmailSetting extends Entity
{
    protected static $schema_type = 'nativeInvoicingEmailSetting';

    protected $fillable = [
        'code',
        'recipientType',
        'eMail',
    ];

    protected $guarded  = [

    ];
}