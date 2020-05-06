<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class IncomeStatement
 * Auto-generated on: 2020-05-06 09:08:24
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
}