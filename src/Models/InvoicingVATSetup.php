<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingVATSetup
 * Auto-generated on: 2020-05-22 07:30:30
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