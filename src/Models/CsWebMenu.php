<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebMenu
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cswebmenu
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