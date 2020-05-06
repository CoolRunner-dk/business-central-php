<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Picture
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property int $width
 * @property int $height
 * @property string $contentType
 * @property string $content
 *
 */
class Picture extends Entity
{
    protected static $schema_type = 'picture';
}