<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsDeferralTemplates
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