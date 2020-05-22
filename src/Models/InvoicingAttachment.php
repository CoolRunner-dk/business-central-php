<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingAttachment
 *
 * @property-read string $id
 * @property string $documentId
 * @property string $fileName
 * @property int $byteSize
 * @property string $content
 * @property string $base64Content
 * @property-read string $lastModifiedDateTime
 * @method bool|true|false Copy()
 *
 */
class InvoicingAttachment extends Entity
{
    protected static $schema_type = 'nativeInvoicingAttachments';

    protected $fillable = [
        'documentId',
        'fileName',
        'byteSize',
        'content',
        'base64Content',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}