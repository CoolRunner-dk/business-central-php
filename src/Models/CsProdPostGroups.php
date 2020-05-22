<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsProdPostGroups
 * Auto-generated on: 2020-05-22 07:30:30
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