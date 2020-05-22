<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIItemPurchaseList
 *
 * @property string $itemNo
 * @property string $searchDescription
 * @property string $purchasePostDate
 * @property float $purchasedQuantity
 * @property int $purchaseEntryNo
 *
 */
class PowerBIItemPurchaseList extends Entity
{
    protected static $schema_type = 'Power_BI_Item_Purchase_List';

    protected $fillable = [
        'itemNo',
        'searchDescription',
        'purchasePostDate',
        'purchasedQuantity',
        'purchaseEntryNo',
    ];

    protected $guarded  = [

    ];
}