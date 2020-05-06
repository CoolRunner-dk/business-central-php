<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GeneralLedgerEntryAttachments
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property int $generalLedgerEntryNumber
 * @property-read string $id
 * @property string $fileName
 * @property int $byteSize
 * @property string $content
 * @property string $createdDateTime
 * @property-read \BusinessCentral\Models\GeneralLedgerEntry $generalLedgerEntry
 *
 */
class GeneralLedgerEntryAttachments extends Entity
{
    protected static $schema_type = 'generalLedgerEntryAttachments';
}