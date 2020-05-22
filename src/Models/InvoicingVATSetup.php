<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingVATSetup
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingvatsetup
 *
 * @property-read string $id
 * @property bool $default
 * @property string $displayName
 * @property float $vatPercentage
 * @property string $vatRegulationDescription
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingVATSetup extends Entity
{
    protected static $schema_type = 'nativeInvoicingVATSetup';

    protected $fillable = [
        'default',
        'displayName',
        'vatPercentage',
        'vatRegulationDescription',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}