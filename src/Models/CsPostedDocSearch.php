<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedDocSearch
 *
 * @property string $type
 * @property string $no
 * @property string $userID
 * @property string $name
 * @property string $postingDate
 * @property string $documentDate
 * @property string $extDocNo
 * @property string $currCode
 * @property float $amountExclVAT
 * @property float $amountInclVAT
 * @property string $docLastComment
 * @property string $docFilename
 *
 */
class CsPostedDocSearch extends Entity
{
    protected static $schema_type = 'CS_PostedDocSearch';

    protected $fillable = [
        'type',
        'no',
        'userID',
        'name',
        'postingDate',
        'documentDate',
        'extDocNo',
        'currCode',
        'amountExclVAT',
        'amountInclVAT',
        'docLastComment',
        'docFilename',
    ];

    protected $guarded  = [

    ];
}