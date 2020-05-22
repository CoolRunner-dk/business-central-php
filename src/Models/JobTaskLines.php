<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class JobTaskLines
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#jobtasklines
 *
 * @property string $jobNo
 * @property string $jobTaskNo
 * @property string $description
 * @property string $jobTaskType
 * @property string $totaling
 * @property string $jobPostingGroup
 * @property string $wIPTotal
 * @property string $wIPMethod
 * @property string $startDate
 * @property string $endDate
 * @property float $scheduleTotalCost
 * @property float $scheduleTotalPrice
 * @property float $usageTotalCost
 * @property float $usageTotalPrice
 * @property float $contractTotalCost
 * @property float $contractTotalPrice
 * @property float $contractInvoicedCost
 * @property float $contractInvoicedPrice
 * @property float $remainingTotalCost
 * @property float $remainingTotalPrice
 * @property float $eACTotalCost
 * @property float $eACTotalPrice
 * @property string $globalDimension1Code
 * @property string $globalDimension2Code
 * @property float $outstandingOrders
 * @property float $amtRcdNotInvoiced
 * @property string $planningDateFilter
 * @property string $postingDateFilter
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNoLinks
 * @property-read \BusinessCentral\Models\JobTaskLines[]|\BusinessCentral\EntityCollection $totalingLinks
 * @method \BusinessCentral\Query\Builder jobNoLinks()
 * @method \BusinessCentral\Query\Builder totalingLinks()
 *
 */
class JobTaskLines extends Entity
{
    protected static $schema_type = 'Job_Task_Lines';

    protected $fillable = [
        'jobNo',
        'jobTaskNo',
        'description',
        'jobTaskType',
        'totaling',
        'jobPostingGroup',
        'wIPTotal',
        'wIPMethod',
        'startDate',
        'endDate',
        'scheduleTotalCost',
        'scheduleTotalPrice',
        'usageTotalCost',
        'usageTotalPrice',
        'contractTotalCost',
        'contractTotalPrice',
        'contractInvoicedCost',
        'contractInvoicedPrice',
        'remainingTotalCost',
        'remainingTotalPrice',
        'eACTotalCost',
        'eACTotalPrice',
        'globalDimension1Code',
        'globalDimension2Code',
        'outstandingOrders',
        'amtRcdNotInvoiced',
        'planningDateFilter',
        'postingDateFilter',
    ];

    protected $guarded  = [

    ];
}