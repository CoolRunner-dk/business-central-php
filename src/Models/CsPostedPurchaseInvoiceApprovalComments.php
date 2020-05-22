<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseInvoiceApprovalComments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspostedpurchaseinvoiceapprovalcomments
 *
 * @property int $entryNo
 * @property string $userID
 * @property string $userName
 * @property string $dateAndTime
 * @property string $comment
 *
 */
class CsPostedPurchaseInvoiceApprovalComments extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseInvoiceApprovalComments';

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