<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSMTPMailSetup
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingsmtpmailsetup
 *
 * @property string $primaryKey
 * @property string $sMTPServer
 * @property string $authentication
 * @property string $userName
 * @property int $sMTPServerPort
 * @property bool $secureConnection
 * @property string $passWord
 *
 */
class InvoicingSMTPMailSetup extends Entity
{
    protected static $schema_type = 'nativeInvoicingSMTPMailSetup';

    protected $fillable = [
        'primaryKey',
        'sMTPServer',
        'authentication',
        'userName',
        'sMTPServerPort',
        'secureConnection',
        'passWord',
    ];

    protected $guarded  = [

    ];
}