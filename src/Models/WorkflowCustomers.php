<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowCustomers
 * Auto-generated on: 2020-05-22 07:30:30
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
 * @property string $documentSendingProfile
 * @property string $ourAccountNumber
 * @property string $territoryCode
 * @property string $globalDimension1Code
 * @property string $globalDimension2Code
 * @property string $chainName
 * @property float $budgetedAmount
 * @property float $creditLimitLcy
 * @property string $customerPostingGroup
 * @property string $currencyCode
 * @property string $customerPriceGroup
 * @property string $languageCode
 * @property int $statisticsGroup
 * @property string $paymentTermsCode
 * @property string $finChargeTermsCode
 * @property string $salespersonCode
 * @property string $shipmentMethodCode
 * @property string $shippingAgentCode
 * @property string $placeOfExport
 * @property string $invoiceDiscCode
 * @property string $customerDiscGroup
 * @property string $countryRegionCode
 * @property string $collectionMethod
 * @property float $amount
 * @property bool $comment
 * @property string $blocked
 * @property int $invoiceCopies
 * @property int $lastStatementNumber
 * @property bool $printStatements
 * @property string $billToCustomerNumber
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
 * @property float $salesLcy
 * @property float $profitLcy
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
 * @property float $shippedNotInvoiced
 * @property string $applicationMethod
 * @property bool $pricesIncludingVat
 * @property string $locationCode
 * @property string $faxNumber
 * @property string $telexAnswerBack
 * @property string $vatRegistrationNumber
 * @property bool $combineShipments
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
 * @property string $reminderTermsCode
 * @property float $reminderAmounts
 * @property float $reminderAmountsLcy
 * @property string $numberSeries
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $vatBusPostingGroup
 * @property string $currencyFilter
 * @property float $outstandingOrdersLcy
 * @property float $shippedNotInvoicedLcy
 * @property string $reserve
 * @property bool $blockPaymentTolerance
 * @property float $pmtDiscToleranceLcy
 * @property float $pmtToleranceLcy
 * @property string $icPartnerCode
 * @property float $refunds
 * @property float $refundsLcy
 * @property float $otherAmounts
 * @property float $otherAmountsLcy
 * @property float $prepaymentPercent
 * @property float $outstandingInvoicesLcy
 * @property float $outstandingInvoices
 * @property int $billToNumberOfArchivedDoc
 * @property int $sellToNumberOfArchivedDoc
 * @property string $partnerType
 * @property string $preferredBankAccountCode
 * @property string $cashFlowPaymentTermsCode
 * @property string $primaryContactNumber
 * @property string $contactType
 * @property string $responsibilityCenter
 * @property string $shippingAdvice
 * @property string $shippingTime
 * @property string $shippingAgentServiceCode
 * @property string $serviceZoneCode
 * @property float $contractGainLossAmount
 * @property string $shipToFilter
 * @property float $outstandingServOrdersLcy
 * @property float $servShippedNotInvoicedLcy
 * @property float $outstandingServInvoicesLcy
 * @property bool $allowLineDisc
 * @property int $numberOfQuotes
 * @property int $numberOfBlanketOrders
 * @property int $numberOfOrders
 * @property int $numberOfInvoices
 * @property int $numberOfReturnOrders
 * @property int $numberOfCreditMemos
 * @property int $numberOfPstdShipments
 * @property int $numberOfPstdInvoices
 * @property int $numberOfPstdReturnReceipts
 * @property int $numberOfPstdCreditMemos
 * @property int $numberOfShipToAddresses
 * @property int $billToNumberOfQuotes
 * @property int $billToNumberOfBlanketOrders
 * @property int $billToNumberOfOrders
 * @property int $billToNumberOfInvoices
 * @property int $billToNumberOfReturnOrders
 * @property int $billToNumberOfCreditMemos
 * @property int $billToNumberOfPstdShipments
 * @property int $billToNumberOfPstdInvoices
 * @property int $billToNumberOfPstdReturnR
 * @property int $billToNumberOfPstdCrMemos
 * @property string $baseCalendarCode
 * @property string $copySellToAddrToQteFrom
 * @property bool $validateEuVatRegNumber
 * @property string $currencyId
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $paymentMethodId
 * @property string $taxAreaId
 * @property string $contactId
 * @property-read \BusinessCentral\Models\Media $image
 * @method \BusinessCentral\Query\Builder image()
 *
 */
class WorkflowCustomers extends Entity
{
    protected static $schema_type = 'workflowCustomers';

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
        'documentSendingProfile',
        'ourAccountNumber',
        'territoryCode',
        'globalDimension1Code',
        'globalDimension2Code',
        'chainName',
        'budgetedAmount',
        'creditLimitLcy',
        'customerPostingGroup',
        'currencyCode',
        'customerPriceGroup',
        'languageCode',
        'statisticsGroup',
        'paymentTermsCode',
        'finChargeTermsCode',
        'salespersonCode',
        'shipmentMethodCode',
        'shippingAgentCode',
        'placeOfExport',
        'invoiceDiscCode',
        'customerDiscGroup',
        'countryRegionCode',
        'collectionMethod',
        'amount',
        'comment',
        'blocked',
        'invoiceCopies',
        'lastStatementNumber',
        'printStatements',
        'billToCustomerNumber',
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
        'salesLcy',
        'profitLcy',
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
        'shippedNotInvoiced',
        'applicationMethod',
        'pricesIncludingVat',
        'locationCode',
        'faxNumber',
        'telexAnswerBack',
        'vatRegistrationNumber',
        'combineShipments',
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
        'reminderTermsCode',
        'reminderAmounts',
        'reminderAmountsLcy',
        'numberSeries',
        'taxAreaCode',
        'taxLiable',
        'vatBusPostingGroup',
        'currencyFilter',
        'outstandingOrdersLcy',
        'shippedNotInvoicedLcy',
        'reserve',
        'blockPaymentTolerance',
        'pmtDiscToleranceLcy',
        'pmtToleranceLcy',
        'icPartnerCode',
        'refunds',
        'refundsLcy',
        'otherAmounts',
        'otherAmountsLcy',
        'prepaymentPercent',
        'outstandingInvoicesLcy',
        'outstandingInvoices',
        'billToNumberOfArchivedDoc',
        'sellToNumberOfArchivedDoc',
        'partnerType',
        'preferredBankAccountCode',
        'cashFlowPaymentTermsCode',
        'primaryContactNumber',
        'contactType',
        'responsibilityCenter',
        'shippingAdvice',
        'shippingTime',
        'shippingAgentServiceCode',
        'serviceZoneCode',
        'contractGainLossAmount',
        'shipToFilter',
        'outstandingServOrdersLcy',
        'servShippedNotInvoicedLcy',
        'outstandingServInvoicesLcy',
        'allowLineDisc',
        'numberOfQuotes',
        'numberOfBlanketOrders',
        'numberOfOrders',
        'numberOfInvoices',
        'numberOfReturnOrders',
        'numberOfCreditMemos',
        'numberOfPstdShipments',
        'numberOfPstdInvoices',
        'numberOfPstdReturnReceipts',
        'numberOfPstdCreditMemos',
        'numberOfShipToAddresses',
        'billToNumberOfQuotes',
        'billToNumberOfBlanketOrders',
        'billToNumberOfOrders',
        'billToNumberOfInvoices',
        'billToNumberOfReturnOrders',
        'billToNumberOfCreditMemos',
        'billToNumberOfPstdShipments',
        'billToNumberOfPstdInvoices',
        'billToNumberOfPstdReturnR',
        'billToNumberOfPstdCrMemos',
        'baseCalendarCode',
        'copySellToAddrToQteFrom',
        'validateEuVatRegNumber',
        'currencyId',
        'paymentTermsId',
        'shipmentMethodId',
        'paymentMethodId',
        'taxAreaId',
        'contactId',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}