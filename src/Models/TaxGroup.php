<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TaxGroup
 * Auto-generated on: 2020-05-11 13:54:04
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
        'code',
        'displayName',
        'taxType',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}