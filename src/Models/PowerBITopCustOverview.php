<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBITopCustOverview
 *
 * @property int $entryNo
 * @property string $postingDate
 * @property string $customerNo
 * @property float $salesLCY
 * @property string $name
 * @property string $auxiliaryIndex1
 *
 */
class PowerBITopCustOverview extends Entity
{
    protected static $schema_type = 'Power_BI_Top_Cust_Overview';

    protected $fillable = [
        'entryNo',
        'postingDate',
        'customerNo',
        'salesLCY',
        'name',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}