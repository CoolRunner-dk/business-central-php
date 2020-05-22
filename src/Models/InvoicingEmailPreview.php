<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingEmailPreview
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingemailpreview
 *
 * @property string $documentId
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $bodyText
 *
 */
class InvoicingEmailPreview extends Entity
{
    protected static $schema_type = 'nativeInvoicingEmailPreview';

    protected $fillable = [
        'documentId',
        'email',
        'subject',
        'body',
        'bodyText',
    ];

    protected $guarded  = [

    ];
}