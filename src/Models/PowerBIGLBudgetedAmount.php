<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIGLBudgetedAmount
 *
 * @property string $gLAccountNo
 * @property string $name
 * @property string $accountType
 * @property string $debitCredit
 * @property float $amount
 * @property string $date
 * @property int $auxiliaryIndex1
 *
 */
class PowerBIGLBudgetedAmount extends Entity
{
    protected static $schema_type = 'Power_BI_GL_BudgetedAmount';

    protected $fillable = [
        'gLAccountNo',
        'name',
        'accountType',
        'debitCredit',
        'amount',
        'date',
        'auxiliaryIndex1',
    ];

    protected $guarded  = [

    ];
}