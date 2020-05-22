<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsGLAccounts
 * Auto-generated on: 2020-05-22 07:30:30
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