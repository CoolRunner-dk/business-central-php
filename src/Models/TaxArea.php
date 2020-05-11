<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TaxArea
 * Auto-generated on: 2020-05-11 13:48:14
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
        'code',
        'displayName',
        'taxType',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}