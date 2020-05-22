<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalDocumentApprovalComments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csapprovaldocumentapprovalcomments
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