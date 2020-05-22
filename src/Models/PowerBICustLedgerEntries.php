<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBICustLedgerEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property string $dueDate
 * @property bool $open
 * @property string $customerPostingGroup
 * @property float $salesLCY
 * @property string $postingDate
 * @property float $remainingAmtLCY
 *
 */
class PowerBICustLedgerEntries extends Entity
{
    protected static $schema_type = 'Power_BI_Cust_Ledger_Entries';

    protected $fillable = [
        'entryNo',
        'dueDate',
        'open',
        'customerPostingGroup',
        'salesLCY',
        'postingDate',
        'remainingAmtLCY',
    ];

    protected $guarded  = [

    ];
}