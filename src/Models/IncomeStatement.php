<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class IncomeStatement
 * Auto-generated on: 2020-05-11 13:51:49
 *
 * @property int $lineNumber
 * @property string $display
 * @property float $netChange
 * @property string $lineType
 * @property int $indentation
 * @property string $dateFilter
 *
 */
class IncomeStatement extends Entity
{
    protected static $schema_type = 'incomeStatement';

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