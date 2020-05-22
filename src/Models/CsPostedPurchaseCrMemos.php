<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseCrMemos
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspostedpurchasecrmemos
 *
 * @property string $no
 * @property string $vendorNo
 * @property string $name
 * @property string $postingDate
 * @property string $docDate
 * @property string $vendorCrMemoNo
 * @property float $amountExclVAT
 * @property float $amountInclVAT
 * @property string $currCode
 * @property string $respCenter
 * @property string $docLastComment
 * @property string $docFilename
 *
 */
class CsPostedPurchaseCrMemos extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseCrMemos';

    protected $fillable = [
        'no',
        'vendorNo',
        'name',
        'postingDate',
        'docDate',
        'vendorCrMemoNo',
        'amountExclVAT',
        'amountInclVAT',
        'currCode',
        'respCenter',
        'docLastComment',
        'docFilename',
    ];

    protected $guarded  = [

    ];
}