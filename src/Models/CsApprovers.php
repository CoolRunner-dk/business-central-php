<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovers
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csapprovers
 *
 * @property string $userID
 * @property string $salespersPurchCode
 * @property string $name
 *
 */
class CsApprovers extends Entity
{
    protected static $schema_type = 'CS_Approvers';

    protected $fillable = [
        'userID',
        'salespersPurchCode',
        'name',
    ];

    protected $guarded  = [

    ];
}