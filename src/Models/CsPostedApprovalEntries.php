<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedApprovalEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspostedapprovalentries
 *
 * @property int $entryNo
 * @property int $tableID
 * @property string $approvalCode
 * @property string $documentNo
 * @property int $sequenceNo
 * @property string $sourceNo
 * @property string $sourceName
 * @property string $purchaserCode
 * @property string $approverID
 * @property string $status
 * @property string $statusInt
 * @property bool $comment
 * @property string $dueDate
 * @property string $currencyCode
 * @property float $amountExclVAT
 * @property float $amountInclVAT
 * @property string $docDueDate
 * @property string $docOnHold
 * @property string $docDate
 * @property string $docLastComment
 * @property string $docFilename
 * @property bool $hasAttachments
 *
 */
class CsPostedApprovalEntries extends Entity
{
    protected static $schema_type = 'CS_PostedApprovalEntries';

    protected $fillable = [
        'entryNo',
        'tableID',
        'approvalCode',
        'documentNo',
        'sequenceNo',
        'sourceNo',
        'sourceName',
        'purchaserCode',
        'approverID',
        'status',
        'statusInt',
        'comment',
        'dueDate',
        'currencyCode',
        'amountExclVAT',
        'amountInclVAT',
        'docDueDate',
        'docOnHold',
        'docDate',
        'docLastComment',
        'docFilename',
        'hasAttachments',
    ];

    protected $guarded  = [

    ];
}