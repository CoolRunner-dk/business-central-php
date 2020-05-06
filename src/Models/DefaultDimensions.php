<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DefaultDimensions
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property string $parentId
 * @property string $dimensionId
 * @property string $dimensionCode
 * @property string $dimensionValueId
 * @property string $dimensionValueCode
 * @property string $postingValidation
 * @property-read \BusinessCentral\Models\Account $account
 * @property-read \BusinessCentral\Models\Dimension $dimension
 * @property-read \BusinessCentral\Models\DimensionValue $dimensionValue
 *
 */
class DefaultDimensions extends Entity
{
    protected static $schema_type = 'defaultDimensions';
}