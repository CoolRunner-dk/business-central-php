<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxArea
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $taxType
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingTaxArea extends Entity
{
    protected static $schema_type = 'nativeInvoicingTaxAreas';

    protected $fillable = [
        'code',
        'displayName',
        'taxType',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}