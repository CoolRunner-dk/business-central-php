<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsItems
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