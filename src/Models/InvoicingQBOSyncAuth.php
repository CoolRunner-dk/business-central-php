<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingQBOSyncAuth
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingqbosyncauth
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