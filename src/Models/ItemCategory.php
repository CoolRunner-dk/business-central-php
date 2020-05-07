<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ItemCategory
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 *
 */
class ItemCategory extends Entity
{
    protected static $schema_type = 'itemCategory';

    protected $fillable = [
        'id',
        'code',
        'displayName',
        'lastModifiedDateTime',
    ];
}