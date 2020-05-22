<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxGroup
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingtaxgroup
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $taxType
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingTaxGroup extends Entity
{
    protected static $schema_type = 'nativeInvoicingTaxGroups';

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