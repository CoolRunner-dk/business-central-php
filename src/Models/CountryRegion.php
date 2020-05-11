<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CountryRegion
 * Auto-generated on: 2020-05-11 14:08:26
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $addressFormat
 * @property-read string $lastModifiedDateTime
 *
 */
class CountryRegion extends Entity
{
    protected static $schema_type = 'countryRegion';

    protected $fillable = [
        'code',
        'displayName',
        'addressFormat',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}