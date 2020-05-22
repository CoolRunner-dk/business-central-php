<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSMTPMailSetup
 * Auto-generated on: 2020-05-22 07:30:30
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