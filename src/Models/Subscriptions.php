<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Subscriptions
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property string $subscriptionId
 * @property string $notificationUrl
 * @property string $resource
 * @property string $userId
 * @property-read string $lastModifiedDateTime
 * @property string $clientState
 * @property string $expirationDateTime
 *
 */
class Subscriptions extends Entity
{
    protected static $schema_type = 'subscriptions';
}