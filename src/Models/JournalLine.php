<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class JournalLine
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $journalDisplayName
 * @property int $lineNumber
 * @property string $accountType
 * @property string $accountId
 * @property string $accountNumber
 * @property string $postingDate
 * @property string $documentNumber
 * @property string $externalDocumentNumber
 * @property float $amount
 * @property string $description
 * @property string $comment
 * @property array|string[] $dimensions
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\Attachments[]|\BusinessCentral\EntityCollection $attachments
 * @property-read \BusinessCentral\Models\Account $account
 *
 */
class JournalLine extends Entity
{
    protected static $schema_type = 'journalLine';
}