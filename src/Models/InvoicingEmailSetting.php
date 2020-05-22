<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingEmailSetting
 * Auto-generated on: 2020-05-22 07:30:30
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