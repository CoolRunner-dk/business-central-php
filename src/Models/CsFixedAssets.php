<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsFixedAssets
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csfixedassets
 *
 * @property string $no
 * @property string $description
 *
 */
class CsFixedAssets extends Entity
{
    protected static $schema_type = 'CS_FixedAssets';

    protected $fillable = [
        'no',
        'description',
    ];

    protected $guarded  = [

    ];
}