<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalEntries
 *
 * @property int $entryNo
 * @property int $tableID
 * @property string $approvalCode
 * @property string $documentType
 * @property string $documentTypeInt
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
 * @property float $amountExclVATLCY
 * @property float $amountInclVATLCY
 * @property string $docOnHold
 * @property string $docDate
 * @property string $docLastComment
 * @property string $docFilename
 * @property bool $hasAttachments
 * @property string $currentApprover
 * @property bool $askRemoveOnHold
 *
 */
class CsApprovalEntries extends Entity
{
    protected static $schema_type = 'CS_ApprovalEntries';

    protected $fillable = [
        'entryNo',
        'tableID',
        'approvalCode',
        'documentType',
        'documentTypeInt',
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
        'amountExclVATLCY',
        'amountInclVATLCY',
        'docOnHold',
        'docDate',
        'docLastComment',
        'docFilename',
        'hasAttachments',
        'currentApprover',
        'askRemoveOnHold',
    ];

    protected $guarded  = [

    ];
}