<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsUnitOfMeasure
 * Auto-generated on: 2020-05-22 07:30:30
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