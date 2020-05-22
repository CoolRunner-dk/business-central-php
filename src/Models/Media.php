<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Media
 *
 * @property string $iD
 * @property string $description
 * @property string $content
 * @property string $mimeType
 * @property int $height
 * @property int $width
 * @property string $companyName
 * @property string $expirationDate
 * @property bool $prohibitCache
 * @property string $fileName
 * @property string $securityToken
 * @property string $creatingUser
 *
 */
class Media extends Entity
{
    protected static $schema_type = 'Media';

    protected $fillable = [
        'iD',
        'description',
        'content',
        'mimeType',
        'height',
        'width',
        'companyName',
        'expirationDate',
        'prohibitCache',
        'fileName',
        'securityToken',
        'creatingUser',
    ];

    protected $guarded  = [

    ];
}