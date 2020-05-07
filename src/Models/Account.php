<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Account
 * Auto-generated on: 2020-05-07 09:06:12
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
        'id',
        'number',
        'displayName',
        'category',
        'subCategory',
        'blocked',
        'lastModifiedDateTime',
    ];
}