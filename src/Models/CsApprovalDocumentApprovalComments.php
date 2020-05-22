<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalDocumentApprovalComments
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $entryNo
 * @property string $userID
 * @property string $userName
 * @property string $dateAndTime
 * @property string $comment
 *
 */
class CsApprovalDocumentApprovalComments extends Entity
{
    protected static $schema_type = 'CS_ApprovalDocumentApprovalComments';

    protected $fillable = [
        'entryNo',
        'userID',
        'userName',
        'dateAndTime',
        'comment',
    ];

    protected $guarded  = [

    ];
}