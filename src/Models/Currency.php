<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Currency
 * Auto-generated on: 2020-05-13 10:59:54
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $symbol
 * @property string $amountDecimalPlaces
 * @property float $amountRoundingPrecision
 * @property-read string $lastModifiedDateTime
 *
 */
class Currency extends Entity
{
    protected static $schema_type = 'currency';

    protected $fillable = [
        'code',
        'displayName',
        'symbol',
        'amountDecimalPlaces',
        'amountRoundingPrecision',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}