<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class BalanceSheet
 * Auto-generated on: 2020-05-13 10:59:54
 *
 * @property int $lineNumber
 * @property string $display
 * @property float $balance
 * @property string $lineType
 * @property int $indentation
 * @property string $dateFilter
 *
 */
class BalanceSheet extends Entity
{
    protected static $schema_type = 'balanceSheet';

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