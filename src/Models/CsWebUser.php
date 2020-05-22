<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebUser
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cswebuser
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