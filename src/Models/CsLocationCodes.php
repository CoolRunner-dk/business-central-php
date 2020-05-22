<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsLocationCodes
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cslocationcodes
 *
 * @property string $code
 * @property string $name
 *
 */
class CsLocationCodes extends Entity
{
    protected static $schema_type = 'CS_LocationCodes';

    protected $fillable = [
        'code',
        'name',
    ];

    protected $guarded  = [

    ];
}