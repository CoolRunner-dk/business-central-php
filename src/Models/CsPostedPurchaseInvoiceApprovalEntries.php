<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseInvoiceApprovalEntries
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property int $sequenceNo
 * @property string $approverID
 * @property string $approverName
 * @property string $status
 * @property string $statusInt
 * @property string $dateTimeSentForApproval
 * @property string $lastDateTimeModified
 *
 */
class CsPostedPurchaseInvoiceApprovalEntries extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseInvoiceApprovalEntries';

    protected $fillable = [
        'entryNo',
        'sequenceNo',
        'approverID',
        'approverName',
        'status',
        'statusInt',
        'dateTimeSentForApproval',
        'lastDateTimeModified',
    ];

    protected $guarded  = [

    ];
}