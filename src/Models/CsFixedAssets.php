<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsFixedAssets
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $description
 *
 */
class CsFixedAssets extends Entity
{
    protected static $schema_type = 'CS_FixedAssets';

    protected $fillable = [
        'no',
        'description',
    ];

    protected $guarded  = [

    ];
}