<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingCountryRegion
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingcountryregion
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