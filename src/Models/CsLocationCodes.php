<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsLocationCodes
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