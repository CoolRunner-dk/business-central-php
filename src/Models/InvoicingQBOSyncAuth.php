<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingQBOSyncAuth
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $key
 * @property string $authorizationUrl
 *
 */
class InvoicingQBOSyncAuth extends Entity
{
    protected static $schema_type = 'nativeInvoicingQBOSyncAuth';

    protected $fillable = [
        'key',
        'authorizationUrl',
    ];

    protected $guarded  = [

    ];
}