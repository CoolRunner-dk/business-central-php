<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingPDF
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $documentId
 * @property string $fileName
 * @property string $content
 *
 */
class InvoicingPDF extends Entity
{
    protected static $schema_type = 'nativeInvoicingPDFs';

    protected $fillable = [
        'documentId',
        'fileName',
        'content',
    ];

    protected $guarded  = [

    ];
}