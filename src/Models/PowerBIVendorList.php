<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIVendorList
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $vendorNo
 * @property string $vendorName
 * @property float $balanceDue
 * @property string $postingDate
 * @property int $appliedVendLedgerEntryNo
 * @property float $amount
 * @property float $amountLCY
 * @property int $transactionNo
 * @property int $entryNo
 * @property float $remainingPmtDiscPossible
 *
 */
class PowerBIVendorList extends Entity
{
    protected static $schema_type = 'Power_BI_Vendor_List';

    protected $fillable = [
        'vendorNo',
        'vendorName',
        'balanceDue',
        'postingDate',
        'appliedVendLedgerEntryNo',
        'amount',
        'amountLCY',
        'transactionNo',
        'entryNo',
        'remainingPmtDiscPossible',
    ];

    protected $guarded  = [

    ];
}