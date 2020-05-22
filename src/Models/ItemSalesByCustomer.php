<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ItemSalesByCustomer
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#itemsalesbycustomer
 *
 * @property int $entryNo
 * @property string $documentNo
 * @property string $postingDate
 * @property string $itemNo
 * @property float $itemLedgerEntryQuantity
 * @property int $dimensionSetID
 * @property string $customerNo
 * @property string $name
 * @property string $description
 * @property string $genProdPostingGroup
 * @property string $auxiliaryIndex1
 *
 */
class ItemSalesByCustomer extends Entity
{
    protected static $schema_type = 'ItemSalesByCustomer';

    protected $fillable = [
        'entryNo',
        'documentNo',
        'postingDate',
        'itemNo',
        'itemLedgerEntryQuantity',
        'dimensionSetID',
        'customerNo',
        'name',
        'description',
        'genProdPostingGroup',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}