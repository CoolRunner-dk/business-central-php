<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBICustomerList
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $customerName
 * @property string $customerNo
 * @property float $creditLimit
 * @property float $balanceDue
 * @property string $postingDate
 * @property int $custLedgerEntryNo
 * @property float $amount
 * @property float $amountLCY
 * @property int $transactionNo
 * @property int $entryNo
 *
 */
class PowerBICustomerList extends Entity
{
    protected static $schema_type = 'Power_BI_Customer_List';

    protected $fillable = [
        'customerName',
        'customerNo',
        'creditLimit',
        'balanceDue',
        'postingDate',
        'custLedgerEntryNo',
        'amount',
        'amountLCY',
        'transactionNo',
        'entryNo',
    ];

    protected $guarded  = [

    ];
}