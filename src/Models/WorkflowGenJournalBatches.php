<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowGenJournalBatches
 *
 * @property-read string $id
 * @property string $journalTemplateName
 * @property string $name
 * @property string $description
 * @property string $reasonCode
 * @property string $balAccountType
 * @property string $balAccountNumber
 * @property string $numberSeries
 * @property string $postingNumberSeries
 * @property bool $copyVatSetupToJnlLines
 * @property bool $allowVatDifference
 * @property bool $allowPaymentExport
 * @property string $bankStatementImportFormat
 * @property string $templateType
 * @property bool $recurring
 * @property bool $suggestBalancingAmount
 * @property string $lastModifiedDatetime
 *
 */
class WorkflowGenJournalBatches extends Entity
{
    protected static $schema_type = 'workflowGenJournalBatches';

    protected $fillable = [
        'journalTemplateName',
        'name',
        'description',
        'reasonCode',
        'balAccountType',
        'balAccountNumber',
        'numberSeries',
        'postingNumberSeries',
        'copyVatSetupToJnlLines',
        'allowVatDifference',
        'allowPaymentExport',
        'bankStatementImportFormat',
        'templateType',
        'recurring',
        'suggestBalancingAmount',
        'lastModifiedDatetime',
    ];

    protected $guarded  = [
        'id',
    ];
}