<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxRate
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