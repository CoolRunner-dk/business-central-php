<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebUserPermissions
 *
 * @property string $continiaUserID
 * @property string $type
 * @property string $dimensionCode
 * @property string $approvalUserGroupCode
 * @property string $assigningPermission
 * @property string $approvalPermission
 * @property string $assigningFilter
 * @property string $approvalFilter
 * @property int $noOfRecords
 *
 */
class CsWebUserPermissions extends Entity
{
    protected static $schema_type = 'CS_WebUserPermissions';

    protected $fillable = [
        'continiaUserID',
        'type',
        'dimensionCode',
        'approvalUserGroupCode',
        'assigningPermission',
        'approvalPermission',
        'assigningFilter',
        'approvalFilter',
        'noOfRecords',
    ];

    protected $guarded  = [

    ];
}