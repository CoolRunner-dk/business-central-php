<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsLocationCodes
 * Auto-generated on: 2020-05-22 07:30:30
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