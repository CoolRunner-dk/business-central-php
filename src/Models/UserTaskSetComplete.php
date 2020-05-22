<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class UserTaskSetComplete
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#usertasksetcomplete
 *
 * @property int $iD
 * @property string $title
 * @property string $dueDateTime
 * @property string $priority
 * @property int $percentComplete
 * @property string $assignedToUserName
 * @property string $userTaskGroupAssignedTo
 * @property string $createdDateTime
 * @property string $completedDateTime
 * @property string $startDateTime
 * @property string $createdByUserName
 * @property string $completedByUserName
 * @method bool|true|false SetComplete()
 *
 */
class UserTaskSetComplete extends Entity
{
    protected static $schema_type = 'UserTaskSetComplete';

    protected $fillable = [
        'iD',
        'title',
        'dueDateTime',
        'priority',
        'percentComplete',
        'assignedToUserName',
        'userTaskGroupAssignedTo',
        'createdDateTime',
        'completedDateTime',
        'startDateTime',
        'createdByUserName',
        'completedByUserName',
    ];

    protected $guarded  = [

    ];
}