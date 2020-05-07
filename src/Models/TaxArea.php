<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TaxArea
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $taxType
 * @property-read string $lastModifiedDateTime
 *
 */
class TaxArea extends Entity
{
    protected static $schema_type = 'taxArea';

    protected $fillable = [
        'id',
        'code',
        'displayName',
        'taxType',
        'lastModifiedDateTime',
    ];
}