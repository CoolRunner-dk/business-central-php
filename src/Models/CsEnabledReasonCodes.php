<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsEnabledReasonCodes
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