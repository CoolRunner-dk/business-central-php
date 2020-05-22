<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsStdAmountDistribCodesVendors
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csstdamountdistribcodesvendors
 *
 * @property string $vendorNo
 * @property string $amountDistributionCode
 *
 */
class CsStdAmountDistribCodesVendors extends Entity
{
    protected static $schema_type = 'CS_StdAmountDistribCodesVendors';

    protected $fillable = [
        'vendorNo',
        'amountDistributionCode',
    ];

    protected $guarded  = [

    ];
}