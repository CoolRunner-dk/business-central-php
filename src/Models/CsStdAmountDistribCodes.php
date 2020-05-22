<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsStdAmountDistribCodes
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csstdamountdistribcodes
 *
 * @property string $code
 * @property string $description
 * @property string $enabledForPurchase
 * @property-read \BusinessCentral\Models\CsStdAmountDistribCodesVendors[]|\BusinessCentral\EntityCollection $csStdAmountDistribCodesVendors
 * @method \BusinessCentral\Query\Builder csStdAmountDistribCodesVendors()
 *
 */
class CsStdAmountDistribCodes extends Entity
{
    protected static $schema_type = 'CS_StdAmountDistribCodes';

    protected $fillable = [
        'code',
        'description',
        'enabledForPurchase',
    ];

    protected $guarded  = [

    ];
}