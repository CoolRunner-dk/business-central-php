<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebMenu
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $code
 * @property string $description
 * @property int $sorting
 *
 */
class CsWebMenu extends Entity
{
    protected static $schema_type = 'CS_WebMenu';

    protected $fillable = [
        'code',
        'description',
        'sorting',
    ];

    protected $guarded  = [

    ];
}