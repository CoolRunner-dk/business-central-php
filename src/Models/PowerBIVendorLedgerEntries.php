<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIVendorLedgerEntries
 *
 * @property int $entryNo
 * @property string $dueDate
 * @property bool $open
 * @property float $remainingAmtLCY
 *
 */
class PowerBIVendorLedgerEntries extends Entity
{
    protected static $schema_type = 'Power_BI_Vendor_Ledger_Entries';

    protected $fillable = [
        'entryNo',
        'dueDate',
        'open',
        'remainingAmtLCY',
    ];

    protected $guarded  = [

    ];
}