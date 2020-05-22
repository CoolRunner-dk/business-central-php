<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateBalanceSheet
 *
 * @property int $lineNumber
 * @property string $display
 * @property float $balance
 * @property string $lineType
 * @property int $indentation
 * @property string $dateFilter
 *
 */
class ExcelTemplateBalanceSheet extends Entity
{
    protected static $schema_type = 'ExcelTemplateBalanceSheet';

    protected $fillable = [
        'lineNumber',
        'display',
        'balance',
        'lineType',
        'indentation',
        'dateFilter',
    ];

    protected $guarded  = [

    ];
}