<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GLEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#glentries
 *
 * @property int $entryNo
 * @property int $transactionNo
 * @property string $gLAccountNo
 * @property string $postingDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property string $sourceCode
 * @property string $jobNo
 * @property string $businessUnitCode
 * @property string $reasonCode
 * @property string $genPostingType
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $taxGroupCode
 * @property bool $useTax
 * @property string $vATBusPostingGroup
 * @property string $vATProdPostingGroup
 * @property string $iCPartnerCode
 * @property float $amount
 * @property float $debitAmount
 * @property float $creditAmount
 * @property float $vATAmount
 * @property float $additionalCurrencyAmount
 * @property float $addCurrencyDebitAmount
 * @property float $addCurrencyCreditAmount
 * @property int $dimensionSetID
 * @property string $gLAccountName
 *
 */
class GLEntries extends Entity
{
    protected static $schema_type = 'G_LEntries';

    protected $fillable = [
        'entryNo',
        'transactionNo',
        'gLAccountNo',
        'postingDate',
        'documentDate',
        'documentType',
        'documentNo',
        'sourceCode',
        'jobNo',
        'businessUnitCode',
        'reasonCode',
        'genPostingType',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'taxAreaCode',
        'taxLiable',
        'taxGroupCode',
        'useTax',
        'vATBusPostingGroup',
        'vATProdPostingGroup',
        'iCPartnerCode',
        'amount',
        'debitAmount',
        'creditAmount',
        'vATAmount',
        'additionalCurrencyAmount',
        'addCurrencyDebitAmount',
        'addCurrencyCreditAmount',
        'dimensionSetID',
        'gLAccountName',
    ];

    protected $guarded  = [

    ];
}