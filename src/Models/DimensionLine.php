<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class DimensionLine
 * Auto-generated on: 2020-05-11 13:51:49
 *
 * @property string $parentId
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $valueId
 * @property string $valueCode
 * @property string $valueDisplayName
 * @property-read \BusinessCentral\Models\Dimension $dimension
 * @method \BusinessCentral\Query\Builder dimension()
 *
 */
class DimensionLine extends Entity
{
    protected static $schema_type = 'dimensionLine';

    protected $fillable = [
        'parentId',
        'code',
        'displayName',
        'valueId',
        'valueCode',
        'valueDisplayName',
    ];

    protected $guarded  = [
        'id',
    ];
}