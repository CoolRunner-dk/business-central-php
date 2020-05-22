<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TopCustomerOverview
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#topcustomeroverview
 *
 * @property string $name
 * @property string $no
 * @property string $countryRegionCode
 * @property string $city
 * @property string $globalDimension1Code
 * @property string $globalDimension2Code
 * @property string $salespersonCode
 * @property float $salesLCY
 * @property float $profitLCY
 * @property string $salesPersonName
 * @property string $countryRegionName
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 *
 */
class TopCustomerOverview extends Entity
{
    protected static $schema_type = 'TopCustomerOverview';

    protected $fillable = [
        'name',
        'no',
        'countryRegionCode',
        'city',
        'globalDimension1Code',
        'globalDimension2Code',
        'salespersonCode',
        'salesLCY',
        'profitLCY',
        'salesPersonName',
        'countryRegionName',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
    ];

    protected $guarded  = [

    ];
}