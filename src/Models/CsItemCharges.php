<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsItemCharges
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $description
 *
 */
class CsItemCharges extends Entity
{
    protected static $schema_type = 'CS_ItemCharges';

    protected $fillable = [
        'no',
        'description',
    ];

    protected $guarded  = [

    ];
}