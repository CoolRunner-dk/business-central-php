<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsDeferralTemplates
 * Auto-generated on: 2020-05-22 07:30:30
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