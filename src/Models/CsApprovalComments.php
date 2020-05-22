<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalComments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csapprovalcomments
 *
 * @property int $entryNo
 * @property int $tableID
 * @property string $documentType
 * @property string $documentNo
 * @property string $userID
 * @property string $dateAndTime
 * @property string $comment
 *
 */
class CsApprovalComments extends Entity
{
    protected static $schema_type = 'CS_ApprovalComments';

    protected $fillable = [
        'entryNo',
        'tableID',
        'documentType',
        'documentNo',
        'userID',
        'dateAndTime',
        'comment',
    ];

    protected $guarded  = [

    ];
}