<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsProdPostGroups
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csprodpostgroups
 *
 * @property string $code
 * @property string $description
 *
 */
class CsProdPostGroups extends Entity
{
    protected static $schema_type = 'CS_ProdPostGroups';

    protected $fillable = [
        'code',
        'description',
    ];

    protected $guarded  = [

    ];
}