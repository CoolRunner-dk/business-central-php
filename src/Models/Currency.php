<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Currency
 * Auto-generated on: 2020-05-06 09:08:24
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
}