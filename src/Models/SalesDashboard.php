<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesDashboard
 *
 * @property int $entryNo
 * @property string $documentNo
 * @property string $postingDate
 * @property string $entryType
 * @property float $quantity
 * @property int $dimensionSetID
 * @property float $salesAmountActual
 * @property float $salesAmountExpected
 * @property float $costAmountActual
 * @property float $costAmountExpected
 * @property string $countryRegionName
 * @property string $customerName
 * @property string $customerPostingGroup
 * @property string $customerDiscGroup
 * @property string $city
 * @property string $description
 * @property string $salesPersonName
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 * @property string $auxiliaryIndex3
 * @property string $auxiliaryIndex4
 *
 */
class SalesDashboard extends Entity
{
    protected static $schema_type = 'SalesDashboard';

    protected $fillable = [
        'entryNo',
        'documentNo',
        'postingDate',
        'entryType',
        'quantity',
        'dimensionSetID',
        'salesAmountActual',
        'salesAmountExpected',
        'costAmountActual',
        'costAmountExpected',
        'countryRegionName',
        'customerName',
        'customerPostingGroup',
        'customerDiscGroup',
        'city',
        'description',
        'salesPersonName',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
        'auxiliaryIndex3',
        'auxiliaryIndex4',
    ];

    protected $guarded  = [

    ];
}