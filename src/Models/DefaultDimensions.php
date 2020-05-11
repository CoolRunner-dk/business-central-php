<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DefaultDimensions
 * Auto-generated on: 2020-05-11 13:54:04
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
 * @method \BusinessCentral\Query\Builder account()
 * @method \BusinessCentral\Query\Builder dimension()
 * @method \BusinessCentral\Query\Builder dimensionValue()
 *
 */
class DefaultDimensions extends Entity
{
    protected static $schema_type = 'defaultDimensions';

    protected $fillable = [
        'parentId',
        'dimensionId',
        'dimensionCode',
        'dimensionValueId',
        'dimensionValueCode',
        'postingValidation',
    ];

    protected $guarded  = [

    ];
}