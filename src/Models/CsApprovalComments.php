<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalComments
 * Auto-generated on: 2020-05-22 07:30:30
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