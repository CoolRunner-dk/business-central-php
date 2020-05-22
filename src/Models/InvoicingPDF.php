<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingPDF
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingpdf
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