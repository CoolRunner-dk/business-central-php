<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsUnitOfMeasure
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