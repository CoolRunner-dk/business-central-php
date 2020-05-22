<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingEmailSetting
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingemailsetting
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