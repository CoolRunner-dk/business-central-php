<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Dimension
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\DimensionValue[]|\BusinessCentral\EntityCollection $dimensionValues
 *
 */
class Dimension extends Entity
{
    protected static $schema_type = 'dimension';
}