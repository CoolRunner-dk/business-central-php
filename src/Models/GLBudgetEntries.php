<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GLBudgetEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property string $budgetName
 * @property string $gLAccountNo
 * @property string $businessUnitCode
 * @property string $date
 * @property float $amount
 * @property int $dimensionSetID
 *
 */
class GLBudgetEntries extends Entity
{
    protected static $schema_type = 'G_LBudgetEntries';

    protected $fillable = [
        'entryNo',
        'budgetName',
        'gLAccountNo',
        'businessUnitCode',
        'date',
        'amount',
        'dimensionSetID',
    ];

    protected $guarded  = [

    ];
}