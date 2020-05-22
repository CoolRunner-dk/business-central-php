<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateCashFlowStatement
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
class ExcelTemplateCashFlowStatement extends Entity
{
    protected static $schema_type = 'ExcelTemplateCashFlowStatement';

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