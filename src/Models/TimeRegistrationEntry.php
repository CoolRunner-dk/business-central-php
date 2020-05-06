<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class TimeRegistrationEntry
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $employeeId
 * @property string $employeeNumber
 * @property string $jobId
 * @property string $jobNumber
 * @property string $absence
 * @property int $lineNumber
 * @property string $date
 * @property float $quantity
 * @property string $status
 * @property string $unitOfMeasureId
 * @property array|string[] $unitOfMeasure
 * @property array|string[] $dimensions
 * @property string $lastModfiedDateTime
 * @property-read \BusinessCentral\Models\Project $project
 *
 */
class TimeRegistrationEntry extends Entity
{
    protected static $schema_type = 'timeRegistrationEntry';
}