<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsProdPostGroups
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