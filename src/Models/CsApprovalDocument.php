<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalDocument
 *
 * @property int $entryNo
 * @property string $documentType
 * @property string $documentTypeInt
 * @property string $no
 * @property string $sourceNo
 * @property string $sourceName
 * @property string $dueDate
 * @property string $currencyCode
 * @property string $docOnHold
 * @property string $docDueDate
 * @property string $nextApproverId
 * @property bool $allowEditLines
 * @property string $documentFilename
 * @property float $amountExclVAT
 * @property float $amountInclVAT
 * @property float $amountExclVATLCY
 * @property float $amountInclVATLCY
 * @property bool $askRemoveOnHold
 * @property-read \BusinessCentral\Models\CsApprovalDocumentApprovalEntries[]|\BusinessCentral\EntityCollection $csApprovalDocumentApprovalEntries
 * @property-read \BusinessCentral\Models\CsApprovalDocumentApprovalComments[]|\BusinessCentral\EntityCollection $csApprovalDocumentApprovalComments
 * @property-read \BusinessCentral\Models\CsApprovalDocumentAttachedFiles[]|\BusinessCentral\EntityCollection $csApprovalDocumentAttachedFiles
 * @method \BusinessCentral\Query\Builder csApprovalDocumentApprovalEntries()
 * @method \BusinessCentral\Query\Builder csApprovalDocumentApprovalComments()
 * @method \BusinessCentral\Query\Builder csApprovalDocumentAttachedFiles()
 *
 */
class CsApprovalDocument extends Entity
{
    protected static $schema_type = 'CS_ApprovalDocument';

    protected $fillable = [
        'entryNo',
        'documentType',
        'documentTypeInt',
        'no',
        'sourceNo',
        'sourceName',
        'dueDate',
        'currencyCode',
        'docOnHold',
        'docDueDate',
        'nextApproverId',
        'allowEditLines',
        'documentFilename',
        'amountExclVAT',
        'amountInclVAT',
        'amountExclVATLCY',
        'amountInclVATLCY',
        'askRemoveOnHold',
    ];

    protected $guarded  = [

    ];
}