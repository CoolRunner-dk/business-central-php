<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowVendors
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#workflowvendors
 *
 * @property-read string $id
 * @property string $number
 * @property string $name
 * @property string $searchName
 * @property string $name2
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $contact
 * @property string $phoneNumber
 * @property string $telexNumber
 * @property string $ourAccountNumber
 * @property string $territoryCode
 * @property string $globalDimension1Code
 * @property string $globalDimension2Code
 * @property float $budgetedAmount
 * @property string $vendorPostingGroup
 * @property string $currencyCode
 * @property string $languageCode
 * @property int $statisticsGroup
 * @property string $paymentTermsCode
 * @property string $finChargeTermsCode
 * @property string $purchaserCode
 * @property string $shipmentMethodCode
 * @property string $shippingAgentCode
 * @property string $invoiceDiscCode
 * @property string $countryRegionCode
 * @property bool $comment
 * @property string $blocked
 * @property string $payToVendorNumber
 * @property int $priority
 * @property string $paymentMethodCode
 * @property-read string $lastModifiedDateTime
 * @property string $lastDateModified
 * @property string $dateFilter
 * @property string $globalDimension1Filter
 * @property string $globalDimension2Filter
 * @property float $balance
 * @property float $balanceLcy
 * @property float $netChange
 * @property float $netChangeLcy
 * @property float $purchasesLcy
 * @property float $invDiscountsLcy
 * @property float $pmtDiscountsLcy
 * @property float $balanceDue
 * @property float $balanceDueLcy
 * @property float $payments
 * @property float $invoiceAmounts
 * @property float $crMemoAmounts
 * @property float $financeChargeMemoAmounts
 * @property float $paymentsLcy
 * @property float $invAmountsLcy
 * @property float $crMemoAmountsLcy
 * @property float $finChargeMemoAmountsLcy
 * @property float $outstandingOrders
 * @property float $amtRcdNotInvoiced
 * @property string $applicationMethod
 * @property bool $pricesIncludingVat
 * @property string $faxNumber
 * @property string $telexAnswerBack
 * @property string $vatRegistrationNumber
 * @property string $genBusPostingGroup
 * @property string $gln
 * @property string $postCode
 * @property string $county
 * @property float $debitAmount
 * @property float $creditAmount
 * @property float $debitAmountLcy
 * @property float $creditAmountLcy
 * @property string $eMail
 * @property string $homePage
 * @property float $reminderAmounts
 * @property float $reminderAmountsLcy
 * @property string $numberSeries
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $vatBusPostingGroup
 * @property string $currencyFilter
 * @property float $outstandingOrdersLcy
 * @property float $amtRcdNotInvoicedLcy
 * @property bool $blockPaymentTolerance
 * @property float $pmtDiscToleranceLcy
 * @property float $pmtToleranceLcy
 * @property string $icPartnerCode
 * @property float $refunds
 * @property float $refundsLcy
 * @property float $otherAmounts
 * @property float $otherAmountsLcy
 * @property float $prepaymentPercent
 * @property float $outstandingInvoices
 * @property float $outstandingInvoicesLcy
 * @property int $payToNumberOfArchivedDoc
 * @property int $buyFromNumberOfArchivedDoc
 * @property string $partnerType
 * @property string $creditorNumber
 * @property string $preferredBankAccountCode
 * @property string $cashFlowPaymentTermsCode
 * @property string $primaryContactNumber
 * @property string $responsibilityCenter
 * @property string $locationCode
 * @property string $leadTimeCalculation
 * @property int $numberOfPstdReceipts
 * @property int $numberOfPstdInvoices
 * @property int $numberOfPstdReturnShipments
 * @property int $numberOfPstdCreditMemos
 * @property int $payToNumberOfOrders
 * @property int $payToNumberOfInvoices
 * @property int $payToNumberOfReturnOrders
 * @property int $payToNumberOfCreditMemos
 * @property int $payToNumberOfPstdReceipts
 * @property int $payToNumberOfPstdInvoices
 * @property int $payToNumberOfPstdReturnS
 * @property int $payToNumberOfPstdCrMemos
 * @property int $numberOfQuotes
 * @property int $numberOfBlanketOrders
 * @property int $numberOfOrders
 * @property int $numberOfInvoices
 * @property int $numberOfReturnOrders
 * @property int $numberOfCreditMemos
 * @property int $numberOfOrderAddresses
 * @property int $payToNumberOfQuotes
 * @property int $payToNumberOfBlanketOrders
 * @property int $numberOfIncomingDocuments
 * @property string $baseCalendarCode
 * @property string $documentSendingProfile
 * @property bool $validateEuVatRegNumber
 * @property string $currencyId
 * @property string $paymentTermsId
 * @property string $paymentMethodId
 * @property-read \BusinessCentral\Models\Media $image
 * @method \BusinessCentral\Query\Builder image()
 *
 */
class WorkflowVendors extends Entity
{
    protected static $schema_type = 'workflowVendors';

    protected $fillable = [
        'number',
        'name',
        'searchName',
        'name2',
        'address',
        'address2',
        'city',
        'contact',
        'phoneNumber',
        'telexNumber',
        'ourAccountNumber',
        'territoryCode',
        'globalDimension1Code',
        'globalDimension2Code',
        'budgetedAmount',
        'vendorPostingGroup',
        'currencyCode',
        'languageCode',
        'statisticsGroup',
        'paymentTermsCode',
        'finChargeTermsCode',
        'purchaserCode',
        'shipmentMethodCode',
        'shippingAgentCode',
        'invoiceDiscCode',
        'countryRegionCode',
        'comment',
        'blocked',
        'payToVendorNumber',
        'priority',
        'paymentMethodCode',
        'lastDateModified',
        'dateFilter',
        'globalDimension1Filter',
        'globalDimension2Filter',
        'balance',
        'balanceLcy',
        'netChange',
        'netChangeLcy',
        'purchasesLcy',
        'invDiscountsLcy',
        'pmtDiscountsLcy',
        'balanceDue',
        'balanceDueLcy',
        'payments',
        'invoiceAmounts',
        'crMemoAmounts',
        'financeChargeMemoAmounts',
        'paymentsLcy',
        'invAmountsLcy',
        'crMemoAmountsLcy',
        'finChargeMemoAmountsLcy',
        'outstandingOrders',
        'amtRcdNotInvoiced',
        'applicationMethod',
        'pricesIncludingVat',
        'faxNumber',
        'telexAnswerBack',
        'vatRegistrationNumber',
        'genBusPostingGroup',
        'gln',
        'postCode',
        'county',
        'debitAmount',
        'creditAmount',
        'debitAmountLcy',
        'creditAmountLcy',
        'eMail',
        'homePage',
        'reminderAmounts',
        'reminderAmountsLcy',
        'numberSeries',
        'taxAreaCode',
        'taxLiable',
        'vatBusPostingGroup',
        'currencyFilter',
        'outstandingOrdersLcy',
        'amtRcdNotInvoicedLcy',
        'blockPaymentTolerance',
        'pmtDiscToleranceLcy',
        'pmtToleranceLcy',
        'icPartnerCode',
        'refunds',
        'refundsLcy',
        'otherAmounts',
        'otherAmountsLcy',
        'prepaymentPercent',
        'outstandingInvoices',
        'outstandingInvoicesLcy',
        'payToNumberOfArchivedDoc',
        'buyFromNumberOfArchivedDoc',
        'partnerType',
        'creditorNumber',
        'preferredBankAccountCode',
        'cashFlowPaymentTermsCode',
        'primaryContactNumber',
        'responsibilityCenter',
        'locationCode',
        'leadTimeCalculation',
        'numberOfPstdReceipts',
        'numberOfPstdInvoices',
        'numberOfPstdReturnShipments',
        'numberOfPstdCreditMemos',
        'payToNumberOfOrders',
        'payToNumberOfInvoices',
        'payToNumberOfReturnOrders',
        'payToNumberOfCreditMemos',
        'payToNumberOfPstdReceipts',
        'payToNumberOfPstdInvoices',
        'payToNumberOfPstdReturnS',
        'payToNumberOfPstdCrMemos',
        'numberOfQuotes',
        'numberOfBlanketOrders',
        'numberOfOrders',
        'numberOfInvoices',
        'numberOfReturnOrders',
        'numberOfCreditMemos',
        'numberOfOrderAddresses',
        'payToNumberOfQuotes',
        'payToNumberOfBlanketOrders',
        'numberOfIncomingDocuments',
        'baseCalendarCode',
        'documentSendingProfile',
        'validateEuVatRegNumber',
        'currencyId',
        'paymentTermsId',
        'paymentMethodId',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}