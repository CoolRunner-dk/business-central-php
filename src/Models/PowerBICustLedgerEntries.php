<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBICustLedgerEntries
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