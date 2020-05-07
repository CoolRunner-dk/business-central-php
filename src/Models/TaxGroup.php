<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TaxGroup
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $taxType
 * @property-read string $lastModifiedDateTime
 *
 */
class TaxGroup extends Entity
{
    protected static $schema_type = 'taxGroup';

    protected $fillable = [
        'id',
        'code',
        'displayName',
        'taxType',
        'lastModifiedDateTime',
    ];
}