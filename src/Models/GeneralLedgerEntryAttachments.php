<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GeneralLedgerEntryAttachments
 * Auto-generated on: 2020-05-11 13:50:37
 *
 * @property int $generalLedgerEntryNumber
 * @property-read string $id
 * @property string $fileName
 * @property int $byteSize
 * @property string $content
 * @property string $createdDateTime
 * @property-read \BusinessCentral\Models\GeneralLedgerEntry $generalLedgerEntry
 * @method \BusinessCentral\Query\Builder generalLedgerEntry()
 *
 */
class GeneralLedgerEntryAttachments extends Entity
{
    protected static $schema_type = 'generalLedgerEntryAttachments';

    protected $fillable = [
        'generalLedgerEntryNumber',
        'fileName',
        'byteSize',
        'content',
        'createdDateTime',
    ];

    protected $guarded  = [
        'id',
    ];
}