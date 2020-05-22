<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsItemCharges
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csitemcharges
 *
 * @property string $no
 * @property string $description
 *
 */
class CsItemCharges extends Entity
{
    protected static $schema_type = 'CS_ItemCharges';

    protected $fillable = [
        'no',
        'description',
    ];

    protected $guarded  = [

    ];
}