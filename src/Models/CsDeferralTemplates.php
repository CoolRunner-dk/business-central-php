<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsDeferralTemplates
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csdeferraltemplates
 *
 * @property string $deferralCode
 * @property string $description
 * @property float $deferralPct
 * @property string $startDate
 * @property int $noOfPeriods
 * @property string $periodDescription
 *
 */
class CsDeferralTemplates extends Entity
{
    protected static $schema_type = 'CS_DeferralTemplates';

    protected $fillable = [
        'deferralCode',
        'description',
        'deferralPct',
        'startDate',
        'noOfPeriods',
        'periodDescription',
    ];

    protected $guarded  = [

    ];
}