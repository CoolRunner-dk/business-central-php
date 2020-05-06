<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DimensionLine
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property string $parentId
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $valueId
 * @property string $valueCode
 * @property string $valueDisplayName
 * @property-read \BusinessCentral\Models\Dimension $dimension
 *
 */
class DimensionLine extends Entity
{
    protected static $schema_type = 'dimensionLine';
}