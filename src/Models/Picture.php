<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Picture
 * Auto-generated on: 2020-05-07 09:06:12
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

    protected $fillable = [
        'id',
        'width',
        'height',
        'contentType',
        'content',
    ];
}