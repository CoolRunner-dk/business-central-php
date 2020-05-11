<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class RetainedEarningsStatement
 * Auto-generated on: 2020-05-11 13:54:04
 *
 * @property int $lineNumber
 * @property string $display
 * @property float $netChange
 * @property string $lineType
 * @property int $indentation
 * @property string $dateFilter
 *
 */
class RetainedEarningsStatement extends Entity
{
    protected static $schema_type = 'retainedEarningsStatement';

    protected $fillable = [
        'lineNumber',
        'display',
        'netChange',
        'lineType',
        'indentation',
        'dateFilter',
    ];

    protected $guarded  = [

    ];
}