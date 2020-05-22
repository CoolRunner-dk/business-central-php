<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSyncServicesSetting
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $key
 * @property string $qboSyncTitle
 * @property string $qboSyncDescription
 * @property bool $qboSyncEnabled
 * @property string $qbdSyncTitle
 * @property string $qbdSyncDescription
 * @property bool $qbdSyncEnabled
 * @property string $qbdSyncSendToEmail
 * @method bool|true|false SendInstructionsByEmail()
 *
 */
class InvoicingSyncServicesSetting extends Entity
{
    protected static $schema_type = 'nativeInvoicingSyncServicesSetting';

    protected $fillable = [
        'key',
        'qboSyncTitle',
        'qboSyncDescription',
        'qboSyncEnabled',
        'qbdSyncTitle',
        'qbdSyncDescription',
        'qbdSyncEnabled',
        'qbdSyncSendToEmail',
    ];

    protected $guarded  = [

    ];
}