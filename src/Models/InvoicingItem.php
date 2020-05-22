<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingItem
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingitem
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 * @property string $type
 * @property bool $blocked
 * @property string $baseUnitOfMeasureId
 * @property string $baseUnitOfMeasureIntStdCode
 * @property string $baseUnitOfMeasureDescription
 * @property string $gtin
 * @property float $inventory
 * @property float $unitPrice
 * @property bool $priceIncludesTax
 * @property float $unitCost
 * @property string $taxGroupId
 * @property string $taxGroupCode
 * @property bool $taxable
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingItem extends Entity
{
    protected static $schema_type = 'nativeInvoicingItems';

    protected $fillable = [
        'number',
        'displayName',
        'type',
        'blocked',
        'baseUnitOfMeasureId',
        'baseUnitOfMeasureIntStdCode',
        'baseUnitOfMeasureDescription',
        'gtin',
        'inventory',
        'unitPrice',
        'priceIncludesTax',
        'unitCost',
        'taxGroupId',
        'taxGroupCode',
        'taxable',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}