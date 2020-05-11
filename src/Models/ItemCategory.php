<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ItemCategory
 * Auto-generated on: 2020-05-11 13:54:04
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
        'code',
        'displayName',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}