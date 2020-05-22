<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class GeneralJournals
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#generaljournals
 *
 * @property string $journalTemplateName
 * @property string $journalBatchName
 * @property int $lineNo
 * @property string $currentJnlBatchName
 * @property string $x003CDocumentNoSimplePageX003E
 * @property string $x003CCurrentPostingDateX003E
 * @property string $x003CCurrentCurrencyCodeX003E
 * @property string $postingDate
 * @property string $documentDate
 * @property string $documentType
 * @property string $documentNo
 * @property int $incomingDocumentEntryNo
 * @property string $externalDocumentNo
 * @property string $appliesToExtDocNo
 * @property string $accountType
 * @property string $accountNo
 * @property string $accountName
 * @property string $description
 * @property string $payerInformation
 * @property string $transactionInformation
 * @property string $businessUnitCode
 * @property string $salespersPurchCode
 * @property string $campaignNo
 * @property string $currencyCode
 * @property bool $eU3PartyTrade
 * @property string $genPostingType
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $vATBusPostingGroup
 * @property string $vATProdPostingGroup
 * @property float $quantity
 * @property float $amount
 * @property float $amountLCY
 * @property float $debitAmount
 * @property float $creditAmount
 * @property float $vATAmount
 * @property float $vATDifference
 * @property float $balVATAmount
 * @property float $balVATDifference
 * @property string $balAccountType
 * @property string $balAccountNo
 * @property string $balGenPostingType
 * @property string $balGenBusPostingGroup
 * @property string $balGenProdPostingGroup
 * @property string $deferralCode
 * @property string $jobQueueStatus
 * @property string $balVATBusPostingGroup
 * @property string $balVATProdPostingGroup
 * @property string $billToPayToNo
 * @property string $shipToOrderAddressCode
 * @property string $paymentTermsCode
 * @property bool $appliedAutomatically
 * @property bool $applied
 * @property string $appliesToDocType
 * @property string $appliesToDocNo
 * @property string $appliesToID
 * @property string $onHold
 * @property string $bankPaymentType
 * @property string $reasonCode
 * @property bool $correction
 * @property string $comment
 * @property string $directDebitMandateID
 * @property string $shortcutDimension1Code
 * @property string $shortcutDimension2Code
 * @property string $shortcutDimCode3
 * @property string $shortcutDimCode4
 * @property string $shortcutDimCode5
 * @property string $shortcutDimCode6
 * @property string $shortcutDimCode7
 * @property string $shortcutDimCode8
 * @property int $numberOfJournalRecords
 * @property string $balAccName
 * @property float $displayTotalDebit
 * @property float $displayTotalCredit
 * @property float $balance
 * @property float $totalBalance
 *
 */
class GeneralJournals extends Entity
{
    protected static $schema_type = 'General_Journals';

    protected $fillable = [
        'journalTemplateName',
        'journalBatchName',
        'lineNo',
        'currentJnlBatchName',
        'x003CDocumentNoSimplePageX003E',
        'x003CCurrentPostingDateX003E',
        'x003CCurrentCurrencyCodeX003E',
        'postingDate',
        'documentDate',
        'documentType',
        'documentNo',
        'incomingDocumentEntryNo',
        'externalDocumentNo',
        'appliesToExtDocNo',
        'accountType',
        'accountNo',
        'accountName',
        'description',
        'payerInformation',
        'transactionInformation',
        'businessUnitCode',
        'salespersPurchCode',
        'campaignNo',
        'currencyCode',
        'eU3PartyTrade',
        'genPostingType',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'vATBusPostingGroup',
        'vATProdPostingGroup',
        'quantity',
        'amount',
        'amountLCY',
        'debitAmount',
        'creditAmount',
        'vATAmount',
        'vATDifference',
        'balVATAmount',
        'balVATDifference',
        'balAccountType',
        'balAccountNo',
        'balGenPostingType',
        'balGenBusPostingGroup',
        'balGenProdPostingGroup',
        'deferralCode',
        'jobQueueStatus',
        'balVATBusPostingGroup',
        'balVATProdPostingGroup',
        'billToPayToNo',
        'shipToOrderAddressCode',
        'paymentTermsCode',
        'appliedAutomatically',
        'applied',
        'appliesToDocType',
        'appliesToDocNo',
        'appliesToID',
        'onHold',
        'bankPaymentType',
        'reasonCode',
        'correction',
        'comment',
        'directDebitMandateID',
        'shortcutDimension1Code',
        'shortcutDimension2Code',
        'shortcutDimCode3',
        'shortcutDimCode4',
        'shortcutDimCode5',
        'shortcutDimCode6',
        'shortcutDimCode7',
        'shortcutDimCode8',
        'numberOfJournalRecords',
        'balAccName',
        'displayTotalDebit',
        'displayTotalCredit',
        'balance',
        'totalBalance',
    ];

    protected $guarded  = [

    ];
}