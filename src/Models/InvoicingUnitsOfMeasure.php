<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingUnitsOfMeasure
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $internationalStandardCode
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingUnitsOfMeasure extends Entity
{
    protected static $schema_type = 'nativeInvoicingUnitsOfMeasure';

    protected $fillable = [
        'code',
        'displayName',
        'internationalStandardCode',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}