<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBISalesList
 *
 * @property string $documentNo
 * @property string $requestedDeliveryDate
 * @property string $shipmentDate
 * @property string $dueDate
 * @property float $quantity
 * @property float $amount
 * @property string $itemNo
 * @property string $description
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 * @property string $auxiliaryIndex3
 * @property int $auxiliaryIndex4
 *
 */
class PowerBISalesList extends Entity
{
    protected static $schema_type = 'Power_BI_Sales_List';

    protected $fillable = [
        'documentNo',
        'requestedDeliveryDate',
        'shipmentDate',
        'dueDate',
        'quantity',
        'amount',
        'itemNo',
        'description',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
        'auxiliaryIndex3',
        'auxiliaryIndex4',
    ];

    protected $guarded  = [

    ];
}