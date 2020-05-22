<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPurchaseDocumentApprovalComments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspurchasedocumentapprovalcomments
 *
 * @property int $entryNo
 * @property string $userID
 * @property string $userName
 * @property string $dateAndTime
 * @property string $comment
 *
 */
class CsPurchaseDocumentApprovalComments extends Entity
{
    protected static $schema_type = 'CS_PurchaseDocumentApprovalComments';

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