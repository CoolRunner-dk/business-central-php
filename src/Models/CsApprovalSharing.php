<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalSharing
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $ownerUserID
 * @property string $sharedToUserID
 * @property string $sharingType
 * @property string $validFrom
 * @property string $validTo
 * @property string $ownerName
 * @property string $sharedToUserName
 * @property string $sharingTypeInt
 * @property int $displayOrder
 * @property bool $useOwnersPermissions
 *
 */
class CsApprovalSharing extends Entity
{
    protected static $schema_type = 'CS_ApprovalSharing';

    protected $fillable = [
        'ownerUserID',
        'sharedToUserID',
        'sharingType',
        'validFrom',
        'validTo',
        'ownerName',
        'sharedToUserName',
        'sharingTypeInt',
        'displayOrder',
        'useOwnersPermissions',
    ];

    protected $guarded  = [

    ];
}