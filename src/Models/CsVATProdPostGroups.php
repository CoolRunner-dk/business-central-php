<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsVATProdPostGroups
 *
 * @property string $code
 * @property string $description
 *
 */
class CsVATProdPostGroups extends Entity
{
    protected static $schema_type = 'CS_VATProdPostGroups';

    protected $fillable = [
        'code',
        'description',
    ];

    protected $guarded  = [

    ];
}