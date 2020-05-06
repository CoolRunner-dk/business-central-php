<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ItemCategory
 * Auto-generated on: 2020-05-06 09:08:24
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
}