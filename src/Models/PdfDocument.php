<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PdfDocument
 * Auto-generated on: 2020-05-11 14:08:26
 *
 * @property-read string $id
 * @property string $content
 *
 */
class PdfDocument extends Entity
{
    protected static $schema_type = 'pdfDocument';

    protected $fillable = [
        'content',
    ];

    protected $guarded  = [
        'id',
    ];
}