<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateViewCompanyInformation
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $primaryKey
 * @property string $displayName
 * @property string $currency
 *
 */
class ExcelTemplateViewCompanyInformation extends Entity
{
    protected static $schema_type = 'ExcelTemplateViewCompanyInformation';

    protected $fillable = [
        'primaryKey',
        'displayName',
        'currency',
    ];

    protected $guarded  = [

    ];
}