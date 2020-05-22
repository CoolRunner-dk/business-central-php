<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsVATProdPostGroups
 * Auto-generated on: 2020-05-22 07:30:30
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