<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsItems
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $description
 *
 */
class CsItems extends Entity
{
    protected static $schema_type = 'CS_Items';

    protected $fillable = [
        'no',
        'description',
    ];

    protected $guarded  = [

    ];
}