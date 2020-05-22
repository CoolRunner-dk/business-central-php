<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowWebhookSubscriptions
 *
 * @property-read string $id
 * @property string $notificationUrl
 * @property string $conditions
 * @property string $eventCode
 * @property string $clientType
 * @property string $clientId
 * @property bool $enabled
 *
 */
class WorkflowWebhookSubscriptions extends Entity
{
    protected static $schema_type = 'workflowWebhookSubscriptions';

    protected $fillable = [
        'notificationUrl',
        'conditions',
        'eventCode',
        'clientType',
        'clientId',
        'enabled',
    ];

    protected $guarded  = [
        'id',
    ];
}