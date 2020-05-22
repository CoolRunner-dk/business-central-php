<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovers
 * Auto-generated on: 2020-05-22 07:30:30
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