<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebMenu
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