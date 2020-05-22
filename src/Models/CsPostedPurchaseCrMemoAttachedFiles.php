<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPostedPurchaseCrMemoAttachedFiles
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $currentUserId
 * @property int $tableID
 * @property int $documentType
 * @property string $documentNo
 * @property string $description
 * @property string $fileExtension
 * @property string $importedBy
 * @property string $importedDateTime
 * @property string $filename
 * @property bool $allowDelete
 *
 */
class CsPostedPurchaseCrMemoAttachedFiles extends Entity
{
    protected static $schema_type = 'CS_PostedPurchaseCrMemoAttachedFiles';

    protected $fillable = [
        'no',
        'currentUserId',
        'tableID',
        'documentType',
        'documentNo',
        'description',
        'fileExtension',
        'importedBy',
        'importedDateTime',
        'filename',
        'allowDelete',
    ];

    protected $guarded  = [

    ];
}