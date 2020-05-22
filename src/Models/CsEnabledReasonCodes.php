<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsEnabledReasonCodes
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property int $tableID
 * @property string $docType
 * @property string $type
 * @property string $reasonCode
 * @property string $docTypeInt
 * @property string $typeInt
 * @property string $description
 *
 */
class CsEnabledReasonCodes extends Entity
{
    protected static $schema_type = 'CS_EnabledReasonCodes';

    protected $fillable = [
        'tableID',
        'docType',
        'type',
        'reasonCode',
        'docTypeInt',
        'typeInt',
        'description',
    ];

    protected $guarded  = [

    ];
}