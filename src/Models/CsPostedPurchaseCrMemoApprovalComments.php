<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseCrMemoApprovalComments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspostedpurchasecrmemoapprovalcomments
 *
 * @property int $entryNo
 * @property string $userID
 * @property string $userName
 * @property string $dateAndTime
 * @property string $comment
 *
 */
class CsPostedPurchaseCrMemoApprovalComments extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseCrMemoApprovalComments';

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