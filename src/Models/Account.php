<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Account
 * Auto-generated on: 2020-05-11 14:08:26
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 * @property string $category
 * @property string $subCategory
 * @property bool $blocked
 * @property-read string $lastModifiedDateTime
 *
 */
class Account extends Entity
{
    protected static $schema_type = 'account';

    protected $fillable = [
        'number',
        'displayName',
        'category',
        'subCategory',
        'blocked',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}