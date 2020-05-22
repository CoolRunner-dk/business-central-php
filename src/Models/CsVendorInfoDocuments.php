<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsVendorInfoDocuments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csvendorinfodocuments
 *
 * @property string $type
 * @property string $documentType
 * @property string $documentNo
 * @property string $typeInt
 * @property string $documentTypeInt
 * @property string $currencyCode
 * @property float $amountExclVAT
 * @property float $amountInclVAT
 * @property string $date
 * @property bool $fullyApplied
 * @property string $onHold
 * @property string $latestComment
 *
 */
class CsVendorInfoDocuments extends Entity
{
    protected static $schema_type = 'CS_VendorInfoDocuments';

    protected $fillable = [
        'type',
        'documentType',
        'documentNo',
        'typeInt',
        'documentTypeInt',
        'currencyCode',
        'amountExclVAT',
        'amountInclVAT',
        'date',
        'fullyApplied',
        'onHold',
        'latestComment',
    ];

    protected $guarded  = [

    ];
}