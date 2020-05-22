<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsJobs
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $description
 * @property string $billToCustomerNo
 * @property string $startingDate
 * @property string $endingDate
 * @property string $billToName
 *
 */
class CsJobs extends Entity
{
    protected static $schema_type = 'CS_Jobs';

    protected $fillable = [
        'no',
        'description',
        'billToCustomerNo',
        'startingDate',
        'endingDate',
        'billToName',
    ];

    protected $guarded  = [

    ];
}