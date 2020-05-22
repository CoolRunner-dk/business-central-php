<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsJobTasks
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csjobtasks
 *
 * @property string $jobNo
 * @property string $jobTaskNo
 * @property string $description
 * @property string $jobTaskType
 * @property int $indentation
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNoLinks
 * @method \BusinessCentral\Query\Builder jobNoLinks()
 *
 */
class CsJobTasks extends Entity
{
    protected static $schema_type = 'CS_JobTasks';

    protected $fillable = [
        'jobNo',
        'jobTaskNo',
        'description',
        'jobTaskType',
        'indentation',
    ];

    protected $guarded  = [

    ];
}