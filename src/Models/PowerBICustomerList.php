<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBICustomerList
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbicustomerlist
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