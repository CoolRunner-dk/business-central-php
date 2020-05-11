<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Item
 * Auto-generated on: 2020-05-11 13:51:49
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 * @property string $type
 * @property string $itemCategoryId
 * @property string $itemCategoryCode
 * @property bool $blocked
 * @property string $baseUnitOfMeasureId
 * @property array|string[] $baseUnitOfMeasure
 * @property string $gtin
 * @property float $inventory
 * @property float $unitPrice
 * @property bool $priceIncludesTax
 * @property float $unitCost
 * @property string $taxGroupId
 * @property string $taxGroupCode
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\Picture[]|\BusinessCentral\EntityCollection $picture
 * @property-read \BusinessCentral\Models\DefaultDimensions[]|\BusinessCentral\EntityCollection $defaultDimensions
 * @property-read \BusinessCentral\Models\ItemCategory $itemCategory
 * @method \BusinessCentral\Query\Builder picture()
 * @method \BusinessCentral\Query\Builder defaultDimensions()
 * @method \BusinessCentral\Query\Builder itemCategory()
 *
 */
class Item extends Entity
{
    protected static $schema_type = 'item';

    protected $fillable = [
        'number',
        'displayName',
        'type',
        'itemCategoryId',
        'itemCategoryCode',
        'blocked',
        'baseUnitOfMeasureId',
        'baseUnitOfMeasure',
        'gtin',
        'inventory',
        'unitPrice',
        'priceIncludesTax',
        'unitCost',
        'taxGroupId',
        'taxGroupCode',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}