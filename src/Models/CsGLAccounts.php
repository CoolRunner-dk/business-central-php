<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsGLAccounts
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csglaccounts
 *
 * @property string $no
 * @property string $name
 * @property bool $directPosting
 * @property string $accountType
 * @property string $accountTypeInt
 *
 */
class CsGLAccounts extends Entity
{
    protected static $schema_type = 'CS_GLAccounts';

    protected $fillable = [
        'no',
        'name',
        'directPosting',
        'accountType',
        'accountTypeInt',
    ];

    protected $guarded  = [

    ];
}