<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SegmentLines
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#segmentlines
 *
 * @property string $segmentNo
 * @property int $lineNo
 * @property string $contactNo
 * @property string $campaignNo
 * @property string $salespersonCode
 * @property string $correspondenceType
 * @property string $interactionTemplateCode
 * @property float $costLCY
 * @property float $durationMin
 * @property int $attachmentNo
 * @property bool $campaignResponse
 * @property string $informationFlow
 * @property string $initiatedBy
 * @property string $contactAltAddressCode
 * @property string $evaluation
 * @property bool $campaignTarget
 * @property string $languageCode
 * @property string $description
 * @property string $date
 * @property string $timeOfInteraction
 * @property bool $attemptFailed
 * @property string $toDoNo
 * @property string $contactCompanyNo
 * @property int $campaignEntryNo
 * @property string $interactionGroupCode
 * @property string $documentType
 * @property string $documentNo
 * @property bool $sendWordDocAsAttmt
 * @property string $contactVia
 * @property int $versionNo
 * @property int $docNoOccurrence
 * @property string $subject
 * @property string $opportunityNo
 * @property string $wizardStep
 * @property string $wizardContactName
 * @property string $opportunityDescription
 * @property string $campaignDescription
 * @property bool $interactionSuccessful
 * @property bool $dialContact
 * @property bool $mailContact
 * @property string $contactName
 * @property string $contactCompanyName
 *
 */
class SegmentLines extends Entity
{
    protected static $schema_type = 'SegmentLines';

    protected $fillable = [
        'segmentNo',
        'lineNo',
        'contactNo',
        'campaignNo',
        'salespersonCode',
        'correspondenceType',
        'interactionTemplateCode',
        'costLCY',
        'durationMin',
        'attachmentNo',
        'campaignResponse',
        'informationFlow',
        'initiatedBy',
        'contactAltAddressCode',
        'evaluation',
        'campaignTarget',
        'languageCode',
        'description',
        'date',
        'timeOfInteraction',
        'attemptFailed',
        'toDoNo',
        'contactCompanyNo',
        'campaignEntryNo',
        'interactionGroupCode',
        'documentType',
        'documentNo',
        'sendWordDocAsAttmt',
        'contactVia',
        'versionNo',
        'docNoOccurrence',
        'subject',
        'opportunityNo',
        'wizardStep',
        'wizardContactName',
        'opportunityDescription',
        'campaignDescription',
        'interactionSuccessful',
        'dialContact',
        'mailContact',
        'contactName',
        'contactCompanyName',
    ];

    protected $guarded  = [

    ];
}