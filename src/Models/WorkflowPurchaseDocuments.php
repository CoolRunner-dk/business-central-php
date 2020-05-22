<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowPurchaseDocuments
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#workflowpurchasedocuments
 *
 * @property-read string $id
 * @property string $documentType
 * @property string $buyFromVendorNumber
 * @property string $number
 * @property string $payToVendorNumber
 * @property string $payToName
 * @property string $payToName2
 * @property string $payToAddress
 * @property string $payToAddress2
 * @property string $payToCity
 * @property string $payToContact
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
 * @property string $expectedReceiptDate
 * @property string $postingDescription
 * @property string $paymentTermsCode
 * @property string $dueDate
 * @property float $paymentDiscountPercent
 * @property string $pmtDiscountDate
 * @property string $shipmentMethodCode
 * @property string $locationCode
 * @property string $shortcutDimension1Code
 * @property string $shortcutDimension2Code
 * @property string $vendorPostingGroup
 * @property string $currencyCode
 * @property float $currencyFactor
 * @property bool $pricesIncludingVat
 * @property string $invoiceDiscCode
 * @property string $languageCode
 * @property string $purchaserCode
 * @property string $orderClass
 * @property bool $comment
 * @property int $numberPrinted
 * @property string $onHold
 * @property string $appliesToDocType
 * @property string $appliesToDocNumber
 * @property string $balAccountNumber
 * @property bool $recalculateInvoiceDisc
 * @property bool $receive
 * @property bool $invoice
 * @property bool $printPostedDocuments
 * @property float $amount
 * @property float $amountIncludingVat
 * @property string $receivingNumber
 * @property string $postingNumber
 * @property string $lastReceivingNumber
 * @property string $lastPostingNumber
 * @property string $vendorOrderNumber
 * @property string $vendorShipmentNumber
 * @property string $vendorInvoiceNumber
 * @property string $vendorCrMemoNumber
 * @property string $vatRegistrationNumber
 * @property string $sellToCustomerNumber
 * @property string $reasonCode
 * @property string $genBusPostingGroup
 * @property string $transactionType
 * @property string $transportMethod
 * @property string $vatCountryRegionCode
 * @property string $buyFromVendorName
 * @property string $buyFromVendorName2
 * @property string $buyFromAddress
 * @property string $buyFromAddress2
 * @property string $buyFromCity
 * @property string $buyFromContact
 * @property string $payToPostCode
 * @property string $payToCounty
 * @property string $payToCountryRegionCode
 * @property string $buyFromPostCode
 * @property string $buyFromCounty
 * @property string $buyFromCountryRegionCode
 * @property string $shipToPostCode
 * @property string $shipToCounty
 * @property string $shipToCountryRegionCode
 * @property string $balAccountType
 * @property string $orderAddressCode
 * @property string $entryPoint
 * @property bool $correction
 * @property string $documentDate
 * @property string $area
 * @property string $transactionSpecification
 * @property string $paymentMethodCode
 * @property string $numberSeries
 * @property string $postingNumberSeries
 * @property string $receivingNumberSeries
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $vatBusPostingGroup
 * @property string $appliesToId
 * @property float $vatBaseDiscountPercent
 * @property string $status
 * @property string $invoiceDiscountCalculation
 * @property float $invoiceDiscountValue
 * @property bool $sendIcDocument
 * @property string $icStatus
 * @property string $buyFromIcPartnerCode
 * @property string $payToIcPartnerCode
 * @property string $icDirection
 * @property string $prepaymentNumber
 * @property string $lastPrepaymentNumber
 * @property string $prepmtCrMemoNumber
 * @property string $lastPrepmtCrMemoNumber
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
 * @property string $jobQueueStatus
 * @property string $jobQueueEntryId
 * @property int $incomingDocumentEntryNumber
 * @property string $creditorNumber
 * @property string $paymentReference
 * @property float $aRcdNotInvExVatLcy
 * @property float $amtRcdNotInvoicedLcy
 * @property int $dimensionSetId
 * @property float $invoiceDiscountAmount
 * @property int $numberOfArchivedVersions
 * @property int $docNumberOccurrence
 * @property string $campaignNumber
 * @property string $buyFromContactNumber
 * @property string $payToContactNumber
 * @property string $responsibilityCenter
 * @property bool $completelyReceived
 * @property int $postingFromWhseRef
 * @property string $locationFilter
 * @property string $requestedReceiptDate
 * @property string $promisedReceiptDate
 * @property string $leadTimeCalculation
 * @property string $inboundWhseHandlingTime
 * @property string $vendorAuthorizationNumber
 * @property string $returnShipmentNumber
 * @property string $returnShipmentNumberSeries
 * @property bool $ship
 * @property string $lastReturnShipmentNumber
 * @property string $assignedUserId
 * @property int $pendingApprovals
 * @property-read \BusinessCentral\Models\WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]|\BusinessCentral\EntityCollection $workflowPurchaseDocumentsworkflowPurchaseDocumentLines
 * @method \BusinessCentral\Query\Builder workflowPurchaseDocumentsworkflowPurchaseDocumentLines()
 *
 */
class WorkflowPurchaseDocuments extends Entity
{
    protected static $schema_type = 'workflowPurchaseDocuments';

    protected $fillable = [
        'documentType',
        'buyFromVendorNumber',
        'number',
        'payToVendorNumber',
        'payToName',
        'payToName2',
        'payToAddress',
        'payToAddress2',
        'payToCity',
        'payToContact',
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
        'expectedReceiptDate',
        'postingDescription',
        'paymentTermsCode',
        'dueDate',
        'paymentDiscountPercent',
        'pmtDiscountDate',
        'shipmentMethodCode',
        'locationCode',
        'shortcutDimension1Code',
        'shortcutDimension2Code',
        'vendorPostingGroup',
        'currencyCode',
        'currencyFactor',
        'pricesIncludingVat',
        'invoiceDiscCode',
        'languageCode',
        'purchaserCode',
        'orderClass',
        'comment',
        'numberPrinted',
        'onHold',
        'appliesToDocType',
        'appliesToDocNumber',
        'balAccountNumber',
        'recalculateInvoiceDisc',
        'receive',
        'invoice',
        'printPostedDocuments',
        'amount',
        'amountIncludingVat',
        'receivingNumber',
        'postingNumber',
        'lastReceivingNumber',
        'lastPostingNumber',
        'vendorOrderNumber',
        'vendorShipmentNumber',
        'vendorInvoiceNumber',
        'vendorCrMemoNumber',
        'vatRegistrationNumber',
        'sellToCustomerNumber',
        'reasonCode',
        'genBusPostingGroup',
        'transactionType',
        'transportMethod',
        'vatCountryRegionCode',
        'buyFromVendorName',
        'buyFromVendorName2',
        'buyFromAddress',
        'buyFromAddress2',
        'buyFromCity',
        'buyFromContact',
        'payToPostCode',
        'payToCounty',
        'payToCountryRegionCode',
        'buyFromPostCode',
        'buyFromCounty',
        'buyFromCountryRegionCode',
        'shipToPostCode',
        'shipToCounty',
        'shipToCountryRegionCode',
        'balAccountType',
        'orderAddressCode',
        'entryPoint',
        'correction',
        'documentDate',
        'area',
        'transactionSpecification',
        'paymentMethodCode',
        'numberSeries',
        'postingNumberSeries',
        'receivingNumberSeries',
        'taxAreaCode',
        'taxLiable',
        'vatBusPostingGroup',
        'appliesToId',
        'vatBaseDiscountPercent',
        'status',
        'invoiceDiscountCalculation',
        'invoiceDiscountValue',
        'sendIcDocument',
        'icStatus',
        'buyFromIcPartnerCode',
        'payToIcPartnerCode',
        'icDirection',
        'prepaymentNumber',
        'lastPrepaymentNumber',
        'prepmtCrMemoNumber',
        'lastPrepmtCrMemoNumber',
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
        'jobQueueStatus',
        'jobQueueEntryId',
        'incomingDocumentEntryNumber',
        'creditorNumber',
        'paymentReference',
        'aRcdNotInvExVatLcy',
        'amtRcdNotInvoicedLcy',
        'dimensionSetId',
        'invoiceDiscountAmount',
        'numberOfArchivedVersions',
        'docNumberOccurrence',
        'campaignNumber',
        'buyFromContactNumber',
        'payToContactNumber',
        'responsibilityCenter',
        'completelyReceived',
        'postingFromWhseRef',
        'locationFilter',
        'requestedReceiptDate',
        'promisedReceiptDate',
        'leadTimeCalculation',
        'inboundWhseHandlingTime',
        'vendorAuthorizationNumber',
        'returnShipmentNumber',
        'returnShipmentNumberSeries',
        'ship',
        'lastReturnShipmentNumber',
        'assignedUserId',
        'pendingApprovals',
    ];

    protected $guarded  = [
        'id',
    ];
}