<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Attachments
 * Auto-generated on: 2020-05-11 13:38:48
 *
 * @property string $parentId
 * @property-read string $id
 * @property string $fileName
 * @property int $byteSize
 * @property string $content
 * @property-read string $lastModifiedDateTime
 *
 */
class Attachments extends Entity
{
    protected static $schema_type = 'attachments';

    protected $fillable = [
        'parentId',
        'fileName',
        'byteSize',
        'content',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}