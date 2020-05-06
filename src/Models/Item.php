<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Item
 * Auto-generated on: 2020-05-06 09:08:24
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
 *
 */
class Item extends Entity
{
    protected static $schema_type = 'item';
}