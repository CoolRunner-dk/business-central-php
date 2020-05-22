<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowSalesDocuments
 *
 * @property-read string $id
 * @property string $documentType
 * @property string $sellToCustomerNumber
 * @property string $number
 * @property string $billToCustomerNumber
 * @property string $billToName
 * @property string $billToName2
 * @property string $billToAddress
 * @property string $billToAddress2
 * @property string $billToCity
 * @property string $billToContact
 * @property string $yourReference
 * @property string $shipToCode
 * @property string $shipToName
 * @property string $shipToName2
 * @property string $shipToAddress
 * @property string $shipToAddress2
 * @property string $shipToCity
 * @property string $shipToContact
 * @property string $orderDate
 * @property string $postingDate
 * @property string $shipmentDate
 * @property string $postingDescription
 * @property string $paymentTermsCode
 * @property string $dueDate
 * @property float $paymentDiscountPercent
 * @property string $pmtDiscountDate
 * @property string $shipmentMethodCode
 * @property string $locationCode
 * @property string $shortcutDimension1Code
 * @property string $shortcutDimension2Code
 * @property string $customerPostingGroup
 * @property string $currencyCode
 * @property float $currencyFactor
 * @property string $customerPriceGroup
 * @property bool $pricesIncludingVat
 * @property string $invoiceDiscCode
 * @property string $customerDiscGroup
 * @property string $languageCode
 * @property string $salespersonCode
 * @property string $orderClass
 * @property bool $comment
 * @property int $numberPrinted
 * @property string $onHold
 * @property string $appliesToDocType
 * @property string $appliesToDocNumber
 * @property string $balAccountNumber
 * @property bool $recalculateInvoiceDisc
 * @property bool $ship
 * @property bool $invoice
 * @property bool $printPostedDocuments
 * @property float $amount
 * @property float $amountIncludingVAT
 * @property string $shippingNumber
 * @property string $postingNumber
 * @property string $lastShippingNumber
 * @property string $lastPostingNumber
 * @property string $prepaymentNumber
 * @property string $lastPrepaymentNumber
 * @property string $premptCrMemoNumber
 * @property string $lastPremtCrMemoNumber
 * @property string $vatRegistrationNumber
 * @property bool $combineShipments
 * @property string $reasonCode
 * @property string $genBusPostingGroup
 * @property bool $eu3PartyTrade
 * @property string $transactionType
 * @property string $transportMethod
 * @property string $vatCountryRegionCode
 * @property string $sellToCustomerName
 * @property string $sellToCustomerName2
 * @property string $sellToAddress
 * @property string $sellToAddress2
 * @property string $sellToCity
 * @property string $sellToContact
 * @property string $billToPostCode
 * @property string $billToCounty
 * @property string $billToCountryRegionCode
 * @property string $sellToPostCode
 * @property string $sellToCounty
 * @property string $sellToCountryRegionCode
 * @property string $shipToPostCode
 * @property string $shipToCounty
 * @property string $shipToCountryRegionCode
 * @property string $balAccountType
 * @property string $exitPoint
 * @property bool $correction
 * @property string $documentDate
 * @property string $externalDocumentNumber
 * @property string $area
 * @property string $transactionSpecification
 * @property string $paymentMethodCode
 * @property string $shippingAgentCode
 * @property string $packageTrackingNumber
 * @property string $numberSeries
 * @property string $postingNumberSeries
 * @property string $shippingNumberSeries
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $vatBusPostingGroup
 * @property string $reserve
 * @property string $appliesToId
 * @property float $vatBaseDiscountPercent
 * @property string $status
 * @property string $invoiceDiscountCalculation
 * @property float $invoiceDiscountValue
 * @property bool $sendIcDocument
 * @property string $icStatus
 * @property string $sellToIcPartnerCode
 * @property string $billToIcPartnerCode
 * @property string $icDirection
 * @property float $prepaymentPercent
 * @property string $prepaymentNumberSeries
 * @property bool $compressPrepayment
 * @property string $prepaymentDueDate
 * @property string $prepmtCrMemoNumberSeries
 * @property string $prepmtPostingDescription
 * @property string $prepmtPmtDiscountDate
 * @property string $prepmtPaymentTermsCode
 * @property float $prepmtPaymentDiscountPercent
 * @property string $quoteNumber
 * @property string $quoteValidUntilDate
 * @property string $quoteSentToCustomer
 * @property bool $quoteAccepted
 * @property string $quoteAcceptedDate
 * @property string $jobQueueStatus
 * @property string $jobQueueEntryId
 * @property int $incomingDocumentEntryNumber
 * @property string $workDescription
 * @property float $amountShippedNotInvoicedInclVat
 * @property float $amountShippedNotInvoiced
 * @property int $dimensionSetId
 * @property int $paymentServiceSetId
 * @property string $directDebitMandateId
 * @property float $invoiceDiscountAmount
 * @property int $numberOfArchivedVersions
 * @property int $docNumberOccurrence
 * @property string $campaignNumber
 * @property string $sellToCustomerTemplateCode
 * @property string $sellToContactNumber
 * @property string $billToContactNumber
 * @property string $billToCustomerTemplateCode
 * @property string $opportunityNumber
 * @property string $responsibilityCenter
 * @property string $shippingAdvice
 * @property bool $shippedNotInvoiced
 * @property bool $completelyShipped
 * @property int $postingFromWhseRef
 * @property string $locationFilter
 * @property bool $shipped
 * @property string $requestedDeliveryDate
 * @property string $promisedDeliveryDate
 * @property string $shippingTime
 * @property string $outboundWhseHandlingTime
 * @property string $shippingAgentServiceCode
 * @property bool $lateOrderShipping
 * @property bool $receive
 * @property string $returnReceiptNumber
 * @property string $returnReceiptNumberSeries
 * @property string $lastReturnReceiptNumber
 * @property bool $allowLineDisc
 * @property bool $getShipmentUsed
 * @property string $assignedUserId
 * @property string $dateFilter
 * @property-read \BusinessCentral\Models\WorkflowSalesDocumentsworkflowSalesDocumentLines[]|\BusinessCentral\EntityCollection $workflowSalesDocumentsworkflowSalesDocumentLines
 * @method \BusinessCentral\Query\Builder workflowSalesDocumentsworkflowSalesDocumentLines()
 *
 */
class WorkflowSalesDocuments extends Entity
{
    protected static $schema_type = 'workflowSalesDocuments';

    protected $fillable = [
        'documentType',
        'sellToCustomerNumber',
        'number',
        'billToCustomerNumber',
        'billToName',
        'billToName2',
        'billToAddress',
        'billToAddress2',
        'billToCity',
        'billToContact',
        'yourReference',
        'shipToCode',
        'shipToName',
        'shipToName2',
        'shipToAddress',
        'shipToAddress2',
        'shipToCity',
        'shipToContact',
        'orderDate',
        'postingDate',
        'shipmentDate',
        'postingDescription',
        'paymentTermsCode',
        'dueDate',
        'paymentDiscountPercent',
        'pmtDiscountDate',
        'shipmentMethodCode',
        'locationCode',
        'shortcutDimension1Code',
        'shortcutDimension2Code',
        'customerPostingGroup',
        'currencyCode',
        'currencyFactor',
        'customerPriceGroup',
        'pricesIncludingVat',
        'invoiceDiscCode',
        'customerDiscGroup',
        'languageCode',
        'salespersonCode',
        'orderClass',
        'comment',
        'numberPrinted',
        'onHold',
        'appliesToDocType',
        'appliesToDocNumber',
        'balAccountNumber',
        'recalculateInvoiceDisc',
        'ship',
        'invoice',
        'printPostedDocuments',
        'amount',
        'amountIncludingVAT',
        'shippingNumber',
        'postingNumber',
        'lastShippingNumber',
        'lastPostingNumber',
        'prepaymentNumber',
        'lastPrepaymentNumber',
        'premptCrMemoNumber',
        'lastPremtCrMemoNumber',
        'vatRegistrationNumber',
        'combineShipments',
        'reasonCode',
        'genBusPostingGroup',
        'eu3PartyTrade',
        'transactionType',
        'transportMethod',
        'vatCountryRegionCode',
        'sellToCustomerName',
        'sellToCustomerName2',
        'sellToAddress',
        'sellToAddress2',
        'sellToCity',
        'sellToContact',
        'billToPostCode',
        'billToCounty',
        'billToCountryRegionCode',
        'sellToPostCode',
        'sellToCounty',
        'sellToCountryRegionCode',
        'shipToPostCode',
        'shipToCounty',
        'shipToCountryRegionCode',
        'balAccountType',
        'exitPoint',
        'correction',
        'documentDate',
        'externalDocumentNumber',
        'area',
        'transactionSpecification',
        'paymentMethodCode',
        'shippingAgentCode',
        'packageTrackingNumber',
        'numberSeries',
        'postingNumberSeries',
        'shippingNumberSeries',
        'taxAreaCode',
        'taxLiable',
        'vatBusPostingGroup',
        'reserve',
        'appliesToId',
        'vatBaseDiscountPercent',
        'status',
        'invoiceDiscountCalculation',
        'invoiceDiscountValue',
        'sendIcDocument',
        'icStatus',
        'sellToIcPartnerCode',
        'billToIcPartnerCode',
        'icDirection',
        'prepaymentPercent',
        'prepaymentNumberSeries',
        'compressPrepayment',
        'prepaymentDueDate',
        'prepmtCrMemoNumberSeries',
        'prepmtPostingDescription',
        'prepmtPmtDiscountDate',
        'prepmtPaymentTermsCode',
        'prepmtPaymentDiscountPercent',
        'quoteNumber',
        'quoteValidUntilDate',
        'quoteSentToCustomer',
        'quoteAccepted',
        'quoteAcceptedDate',
        'jobQueueStatus',
        'jobQueueEntryId',
        'incomingDocumentEntryNumber',
        'workDescription',
        'amountShippedNotInvoicedInclVat',
        'amountShippedNotInvoiced',
        'dimensionSetId',
        'paymentServiceSetId',
        'directDebitMandateId',
        'invoiceDiscountAmount',
        'numberOfArchivedVersions',
        'docNumberOccurrence',
        'campaignNumber',
        'sellToCustomerTemplateCode',
        'sellToContactNumber',
        'billToContactNumber',
        'billToCustomerTemplateCode',
        'opportunityNumber',
        'responsibilityCenter',
        'shippingAdvice',
        'shippedNotInvoiced',
        'completelyShipped',
        'postingFromWhseRef',
        'locationFilter',
        'shipped',
        'requestedDeliveryDate',
        'promisedDeliveryDate',
        'shippingTime',
        'outboundWhseHandlingTime',
        'shippingAgentServiceCode',
        'lateOrderShipping',
        'receive',
        'returnReceiptNumber',
        'returnReceiptNumberSeries',
        'lastReturnReceiptNumber',
        'allowLineDisc',
        'getShipmentUsed',
        'assignedUserId',
        'dateFilter',
    ];

    protected $guarded  = [
        'id',
    ];
}