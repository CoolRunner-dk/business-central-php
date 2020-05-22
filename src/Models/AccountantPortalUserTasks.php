<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AccountantPortalUserTasks
 *
 * @property int $iD
 * @property string $title
 * @property string $dueDateTime
 * @property int $percentComplete
 * @property string $priority
 * @property string $description
 * @property string $createdByName
 * @property string $createdDateTime
 * @property string $startDateTime
 * @property string $assignedTo
 * @property string $link
 * @property string $userTaskGroupAssignedTo
 *
 */
class AccountantPortalUserTasks extends Entity
{
    protected static $schema_type = 'AccountantPortalUserTasks';

    protected $fillable = [
        'iD',
        'title',
        'dueDateTime',
        'percentComplete',
        'priority',
        'description',
        'createdByName',
        'createdDateTime',
        'startDateTime',
        'assignedTo',
        'link',
        'userTaskGroupAssignedTo',
    ];

    protected $guarded  = [

    ];
}