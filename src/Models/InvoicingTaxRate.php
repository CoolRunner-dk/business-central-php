<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxRate
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $taxAreaId
 * @property string $taxGroupId
 * @property float $taxRate
 *
 */
class InvoicingTaxRate extends Entity
{
    protected static $schema_type = 'nativeInvoicingTaxRates';

    protected $fillable = [
        'taxAreaId',
        'taxGroupId',
        'taxRate',
    ];

    protected $guarded  = [

    ];
}