<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Account
 * Auto-generated on: 2020-05-06 09:08:24
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
}