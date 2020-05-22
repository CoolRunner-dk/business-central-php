<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesOpportunities
 *
 * @property string $no
 * @property string $description
 * @property string $creationDate
 * @property bool $closed
 * @property string $salesCycleCode
 * @property string $dateClosed
 * @property string $priority
 * @property string $status
 * @property float $calcdCurrentValueLCY
 * @property float $chancesOfSuccess
 * @property float $completed
 * @property string $contactName
 * @property string $estimatedClosingDate
 * @property string $salespersonName
 * @property float $estimatedValueLCY
 * @property string $contactCompanyName
 *
 */
class SalesOpportunities extends Entity
{
    protected static $schema_type = 'SalesOpportunities';

    protected $fillable = [
        'no',
        'description',
        'creationDate',
        'closed',
        'salesCycleCode',
        'dateClosed',
        'priority',
        'status',
        'calcdCurrentValueLCY',
        'chancesOfSuccess',
        'completed',
        'contactName',
        'estimatedClosingDate',
        'salespersonName',
        'estimatedValueLCY',
        'contactCompanyName',
    ];

    protected $guarded  = [

    ];
}