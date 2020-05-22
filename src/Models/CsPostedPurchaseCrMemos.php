<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseCrMemos
 * Auto-generated on: 2020-05-22 07:30:30
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