<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class JobList
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#joblist
 *
 * @property string $no
 * @property string $description
 * @property string $billToCustomerNo
 * @property string $status
 * @property string $personResponsible
 * @property string $nextInvoiceDate
 * @property string $jobPostingGroup
 * @property string $searchDescription
 * @property float $percentOfOverduePlanningLines
 * @property float $percentCompleted
 * @property float $percentInvoiced
 * @property string $projectManager
 *
 */
class JobList extends Entity
{
    protected static $schema_type = 'Job_List';

    protected $fillable = [
        'no',
        'description',
        'billToCustomerNo',
        'status',
        'personResponsible',
        'nextInvoiceDate',
        'jobPostingGroup',
        'searchDescription',
        'percentOfOverduePlanningLines',
        'percentCompleted',
        'percentInvoiced',
        'projectManager',
    ];

    protected $guarded  = [

    ];
}