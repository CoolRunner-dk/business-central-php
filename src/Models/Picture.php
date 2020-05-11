<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Picture
 * Auto-generated on: 2020-05-11 13:38:48
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
        'width',
        'height',
        'contentType',
        'content',
    ];

    protected $guarded  = [
        'id',
    ];
}