<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebUser
 *
 * @property string $userID
 * @property string $documentSearch
 * @property string $purchRespCenterFilter
 * @property-read \BusinessCentral\Models\CsWebUserPermissions[]|\BusinessCentral\EntityCollection $csWebUserPermissions
 * @method \BusinessCentral\Query\Builder csWebUserPermissions()
 *
 */
class CsWebUser extends Entity
{
    protected static $schema_type = 'CS_WebUser';

    protected $fillable = [
        'userID',
        'documentSearch',
        'purchRespCenterFilter',
    ];

    protected $guarded  = [

    ];
}