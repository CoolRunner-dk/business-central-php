<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Project
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 *
 */
class Project extends Entity
{
    protected static $schema_type = 'project';

    protected $fillable = [
        'id',
        'number',
        'displayName',
    ];
}