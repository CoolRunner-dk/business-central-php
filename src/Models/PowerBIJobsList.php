<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIJobsList
 *
 * @property string $jobNo
 * @property string $searchDescription
 * @property bool $complete
 * @property string $status
 * @property string $postingDate
 * @property float $totalCost
 * @property int $entryNo
 * @property string $entryType
 *
 */
class PowerBIJobsList extends Entity
{
    protected static $schema_type = 'Power_BI_Jobs_List';

    protected $fillable = [
        'jobNo',
        'searchDescription',
        'complete',
        'status',
        'postingDate',
        'totalCost',
        'entryNo',
        'entryType',
    ];

    protected $guarded  = [

    ];
}