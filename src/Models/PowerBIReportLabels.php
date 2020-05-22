<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIReportLabels
 * Auto-generated on: 2020-05-22 07:30:30
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