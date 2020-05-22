<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxGroup
 * Auto-generated on: 2020-05-22 07:30:30
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