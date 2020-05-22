<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIItemSalesList
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbiitemsaleslist
 *
 * @property string $itemNo
 * @property string $searchDescription
 * @property string $salesPostDate
 * @property float $soldQuantity
 * @property int $salesEntryNo
 *
 */
class PowerBIItemSalesList extends Entity
{
    protected static $schema_type = 'Power_BI_Item_Sales_List';

    protected $fillable = [
        'itemNo',
        'searchDescription',
        'salesPostDate',
        'soldQuantity',
        'salesEntryNo',
    ];

    protected $guarded  = [

    ];
}