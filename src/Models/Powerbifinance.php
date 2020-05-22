<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Powerbifinance
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbifinance
 *
 * @property int $no
 * @property string $date
 * @property bool $closedPeriod
 * @property string $accountScheduleName
 * @property string $kPICode
 * @property string $kPIName
 * @property float $netChangeActual
 * @property float $balanceAtDateActual
 * @property float $netChangeBudget
 * @property float $balanceAtDateBudget
 * @property float $netChangeActualLastYear
 * @property float $balanceAtDateActualLastYear
 * @property float $netChangeBudgetLastYear
 * @property float $balanceAtDateBudgetLastYear
 * @property float $netChangeForecast
 * @property float $balanceAtDateForecast
 *
 */
class Powerbifinance extends Entity
{
    protected static $schema_type = 'powerbifinance';

    protected $fillable = [
        'no',
        'date',
        'closedPeriod',
        'accountScheduleName',
        'kPICode',
        'kPIName',
        'netChangeActual',
        'balanceAtDateActual',
        'netChangeBudget',
        'balanceAtDateBudget',
        'netChangeActualLastYear',
        'balanceAtDateActualLastYear',
        'netChangeBudgetLastYear',
        'balanceAtDateBudgetLastYear',
        'netChangeForecast',
        'balanceAtDateForecast',
    ];

    protected $guarded  = [

    ];
}