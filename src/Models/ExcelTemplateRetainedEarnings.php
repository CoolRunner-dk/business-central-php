<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateRetainedEarnings
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $lineNumber
 * @property string $display
 * @property float $netChange
 * @property string $lineType
 * @property int $indentation
 * @property string $dateFilter
 *
 */
class ExcelTemplateRetainedEarnings extends Entity
{
    protected static $schema_type = 'ExcelTemplateRetainedEarnings';

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