<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingEmailPreview
 * Auto-generated on: 2020-05-22 07:30:30
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