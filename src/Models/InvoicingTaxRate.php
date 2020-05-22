<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingTaxRate
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingtaxrate
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