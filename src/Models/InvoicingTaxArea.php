<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxArea
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingtaxarea
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