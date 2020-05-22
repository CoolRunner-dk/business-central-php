<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowGenJournalLines
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#workflowgenjournallines
 *
 * @property string $journalTemplateName
 * @property string $journalBatchName
 * @property int $lineNumber
 * @property string $accountType
 * @property string $accountNumber
 * @property string $postingDate
 * @property string $documentType
 * @property string $documentNumber
 * @property string $description
 * @property float $vatPercent
 * @property string $balAccountNumber
 * @property string $currencyCode
 * @property float $amount
 * @property float $debitAmount
 * @property float $creditAmount
 * @property float $amountLcy
 * @property float $balanceLcy
 * @property float $currencyFactor
 * @property float $salesPurchLcy
 * @property float $profitLcy
 * @property float $invDiscountLcy
 * @property string $billToPayToNumber
 * @property string $postingGroup
 * @property string $shortcutDimension1Code
 * @property string $shortcutDimension2Code
 * @property string $salespersPurchCode
 * @property string $sourceCode
 * @property bool $systemCreatedEntry
 * @property string $onHold
 * @property string $appliesToDocType
 * @property string $appliesToDocNumber
 * @property string $dueDate
 * @property string $pmtDiscountDate
 * @property float $paymentDiscountPercent
 * @property string $jobNumber
 * @property float $quantity
 * @property float $vatAmount
 * @property string $vatPosting
 * @property string $paymentTermsCode
 * @property string $appliesToId
 * @property string $businessUnitCode
 * @property string $reasonCode
 * @property string $recurringMethod
 * @property string $expirationDate
 * @property string $recurringFrequency
 * @property float $allocatedAmtLcy
 * @property string $genPostingType
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $vatCalculationType
 * @property bool $eu3PartyTrade
 * @property bool $allowApplication
 * @property string $balAccountType
 * @property string $balGenPostingType
 * @property string $balGenBusPostingGroup
 * @property string $balGenProdPostingGroup
 * @property string $balVatCalculationType
 * @property float $balVatPercent
 * @property float $balVatAmount
 * @property string $bankPaymentType
 * @property float $vatBaseAmount
 * @property float $balVatBaseAmount
 * @property bool $correction
 * @property bool $checkPrinted
 * @property string $documentDate
 * @property string $externalDocumentNumber
 * @property string $sourceType
 * @property string $sourceNumber
 * @property string $postingNumberSeries
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $taxGroupCode
 * @property bool $useTax
 * @property string $balTaxAreaCode
 * @property bool $balTaxLiable
 * @property string $balTaxGroupCode
 * @property bool $balUseTax
 * @property string $vatBusPostingGroup
 * @property string $vatProdPostingGroup
 * @property string $balVatBusPostingGroup
 * @property string $balVatProdPostingGroup
 * @property string $additionalCurrencyPosting
 * @property float $faAddCurrencyFactor
 * @property string $sourceCurrencyCode
 * @property float $sourceCurrencyAmount
 * @property float $sourceCurrVatBaseAmount
 * @property float $sourceCurrVatAmount
 * @property float $vatBaseDiscountPercent
 * @property float $vatAmountLcy
 * @property float $vatBaseAmountLcy
 * @property float $balVatAmountLcy
 * @property float $balVatBaseAmountLcy
 * @property bool $reversingEntry
 * @property bool $allowZeroAmountPosting
 * @property string $shipToOrderAddressCode
 * @property float $vatDifference
 * @property float $balVatDifference
 * @property string $icPartnerCode
 * @property string $icDirection
 * @property string $icPartnerGLAccNumber
 * @property int $icPartnerTransactionNumber
 * @property string $sellToBuyFromNumber
 * @property string $vatRegistrationNumber
 * @property string $countryRegionCode
 * @property bool $prepayment
 * @property bool $financialVoid
 * @property int $incomingDocumentEntryNumber
 * @property string $creditorNumber
 * @property string $paymentReference
 * @property string $paymentMethodCode
 * @property string $appliesToExtDocNumber
 * @property string $recipientBankAccount
 * @property string $messageToRecipient
 * @property bool $exportedToPaymentFile
 * @property bool $hasPaymentExportError
 * @property int $dimensionSetId
 * @property string $jobTaskNumber
 * @property float $jobUnitPriceLcy
 * @property float $jobTotalPriceLcy
 * @property float $jobQuantity
 * @property float $jobUnitCostLcy
 * @property float $jobLineDiscountPercent
 * @property float $jobLineDiscAmountLcy
 * @property string $jobUnitOfMeasureCode
 * @property string $jobLineType
 * @property float $jobUnitPrice
 * @property float $jobTotalPrice
 * @property float $jobUnitCost
 * @property float $jobTotalCost
 * @property float $jobLineDiscountAmount
 * @property float $jobLineAmount
 * @property float $jobTotalCostLcy
 * @property float $jobLineAmountLcy
 * @property float $jobCurrencyFactor
 * @property string $jobCurrencyCode
 * @property int $jobPlanningLineNumber
 * @property float $jobRemainingQty
 * @property string $directDebitMandateId
 * @property int $dataExchEntryNumber
 * @property string $payerInformation
 * @property string $transactionInformation
 * @property int $dataExchLineNumber
 * @property bool $appliedAutomatically
 * @property string $deferralCode
 * @property int $deferralLineNumber
 * @property string $campaignNumber
 * @property string $prodOrderNumber
 * @property string $faPostingDate
 * @property string $faPostingType
 * @property string $depreciationBookCode
 * @property float $salvageValue
 * @property int $numberOfDepreciationDays
 * @property bool $deprUntilFaPostingDate
 * @property bool $deprAcquisitionCost
 * @property string $maintenanceCode
 * @property string $insuranceNumber
 * @property string $budgetedFaNumber
 * @property string $duplicateInDepreciationBook
 * @property bool $useDuplicationList
 * @property bool $faReclassificationEntry
 * @property int $faErrorEntryNumber
 * @property bool $indexEntry
 * @property int $sourceLineNumber
 * @property string $comment
 * @property bool $checkExported
 * @property bool $checkTransmitted
 * @property-read string $id
 * @property string $accountId
 * @property string $customerId
 * @property string $appliesToInvoiceId
 * @property string $contactGraphId
 * @property string $lastModifiedDatetime
 * @property string $journalBatchId
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNumberLinks
 * @property-read \BusinessCentral\Models\JobTaskLines[]|\BusinessCentral\EntityCollection $jobTaskNumberLinks
 * @method \BusinessCentral\Query\Builder jobNumberLinks()
 * @method \BusinessCentral\Query\Builder jobTaskNumberLinks()
 *
 */
class WorkflowGenJournalLines extends Entity
{
    protected static $schema_type = 'workflowGenJournalLines';

    protected $fillable = [
        'journalTemplateName',
        'journalBatchName',
        'lineNumber',
        'accountType',
        'accountNumber',
        'postingDate',
        'documentType',
        'documentNumber',
        'description',
        'vatPercent',
        'balAccountNumber',
        'currencyCode',
        'amount',
        'debitAmount',
        'creditAmount',
        'amountLcy',
        'balanceLcy',
        'currencyFactor',
        'salesPurchLcy',
        'profitLcy',
        'invDiscountLcy',
        'billToPayToNumber',
        'postingGroup',
        'shortcutDimension1Code',
        'shortcutDimension2Code',
        'salespersPurchCode',
        'sourceCode',
        'systemCreatedEntry',
        'onHold',
        'appliesToDocType',
        'appliesToDocNumber',
        'dueDate',
        'pmtDiscountDate',
        'paymentDiscountPercent',
        'jobNumber',
        'quantity',
        'vatAmount',
        'vatPosting',
        'paymentTermsCode',
        'appliesToId',
        'businessUnitCode',
        'reasonCode',
        'recurringMethod',
        'expirationDate',
        'recurringFrequency',
        'allocatedAmtLcy',
        'genPostingType',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'vatCalculationType',
        'eu3PartyTrade',
        'allowApplication',
        'balAccountType',
        'balGenPostingType',
        'balGenBusPostingGroup',
        'balGenProdPostingGroup',
        'balVatCalculationType',
        'balVatPercent',
        'balVatAmount',
        'bankPaymentType',
        'vatBaseAmount',
        'balVatBaseAmount',
        'correction',
        'checkPrinted',
        'documentDate',
        'externalDocumentNumber',
        'sourceType',
        'sourceNumber',
        'postingNumberSeries',
        'taxAreaCode',
        'taxLiable',
        'taxGroupCode',
        'useTax',
        'balTaxAreaCode',
        'balTaxLiable',
        'balTaxGroupCode',
        'balUseTax',
        'vatBusPostingGroup',
        'vatProdPostingGroup',
        'balVatBusPostingGroup',
        'balVatProdPostingGroup',
        'additionalCurrencyPosting',
        'faAddCurrencyFactor',
        'sourceCurrencyCode',
        'sourceCurrencyAmount',
        'sourceCurrVatBaseAmount',
        'sourceCurrVatAmount',
        'vatBaseDiscountPercent',
        'vatAmountLcy',
        'vatBaseAmountLcy',
        'balVatAmountLcy',
        'balVatBaseAmountLcy',
        'reversingEntry',
        'allowZeroAmountPosting',
        'shipToOrderAddressCode',
        'vatDifference',
        'balVatDifference',
        'icPartnerCode',
        'icDirection',
        'icPartnerGLAccNumber',
        'icPartnerTransactionNumber',
        'sellToBuyFromNumber',
        'vatRegistrationNumber',
        'countryRegionCode',
        'prepayment',
        'financialVoid',
        'incomingDocumentEntryNumber',
        'creditorNumber',
        'paymentReference',
        'paymentMethodCode',
        'appliesToExtDocNumber',
        'recipientBankAccount',
        'messageToRecipient',
        'exportedToPaymentFile',
        'hasPaymentExportError',
        'dimensionSetId',
        'jobTaskNumber',
        'jobUnitPriceLcy',
        'jobTotalPriceLcy',
        'jobQuantity',
        'jobUnitCostLcy',
        'jobLineDiscountPercent',
        'jobLineDiscAmountLcy',
        'jobUnitOfMeasureCode',
        'jobLineType',
        'jobUnitPrice',
        'jobTotalPrice',
        'jobUnitCost',
        'jobTotalCost',
        'jobLineDiscountAmount',
        'jobLineAmount',
        'jobTotalCostLcy',
        'jobLineAmountLcy',
        'jobCurrencyFactor',
        'jobCurrencyCode',
        'jobPlanningLineNumber',
        'jobRemainingQty',
        'directDebitMandateId',
        'dataExchEntryNumber',
        'payerInformation',
        'transactionInformation',
        'dataExchLineNumber',
        'appliedAutomatically',
        'deferralCode',
        'deferralLineNumber',
        'campaignNumber',
        'prodOrderNumber',
        'faPostingDate',
        'faPostingType',
        'depreciationBookCode',
        'salvageValue',
        'numberOfDepreciationDays',
        'deprUntilFaPostingDate',
        'deprAcquisitionCost',
        'maintenanceCode',
        'insuranceNumber',
        'budgetedFaNumber',
        'duplicateInDepreciationBook',
        'useDuplicationList',
        'faReclassificationEntry',
        'faErrorEntryNumber',
        'indexEntry',
        'sourceLineNumber',
        'comment',
        'checkExported',
        'checkTransmitted',
        'accountId',
        'customerId',
        'appliesToInvoiceId',
        'contactGraphId',
        'lastModifiedDatetime',
        'journalBatchId',
    ];

    protected $guarded  = [
        'id',
    ];
}