<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsUnitOfMeasure
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csunitofmeasure
 *
 * @property string $code
 * @property string $description
 *
 */
class CsUnitOfMeasure extends Entity
{
    protected static $schema_type = 'CS_UnitOfMeasure';

    protected $fillable = [
        'code',
        'description',
    ];

    protected $guarded  = [

    ];
}