<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class ExcelTemplateViewCompanyInformation
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#exceltemplateviewcompanyinformation
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