<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingCountryRegion
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingCountryRegion extends Entity
{
    protected static $schema_type = 'nativeInvoicingCountryRegion';

    protected $fillable = [
        'code',
        'displayName',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}