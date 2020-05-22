<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AccountantPortalUserTasks
 * Auto-generated on: 2020-05-22 07:30:30
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