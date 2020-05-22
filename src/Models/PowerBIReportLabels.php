<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIReportLabels
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbireportlabels
 *
 * @property string $labelID
 * @property string $textValue
 *
 */
class PowerBIReportLabels extends Entity
{
    protected static $schema_type = 'Power_BI_Report_Labels';

    protected $fillable = [
        'labelID',
        'textValue',
    ];

    protected $guarded  = [

    ];
}