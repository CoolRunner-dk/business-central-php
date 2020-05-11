<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class BankAccount
 * Auto-generated on: 2020-05-11 14:08:26
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 *
 */
class BankAccount extends Entity
{
    protected static $schema_type = 'bankAccount';

    protected $fillable = [
        'number',
        'displayName',
    ];

    protected $guarded  = [
        'id',
    ];
}