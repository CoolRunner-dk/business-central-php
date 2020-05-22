<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsStdAmountDistribCodesVendors
 * Auto-generated on: 2020-05-22 07:30:30
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