<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowSalesDocumentLines
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#workflowsalesdocumentlines
 *
 * @property string $documentType
 * @property string $documentNumber
 * @property int $lineNumber
 * @property string $sellToCustomerNumber
 * @property string $type
 * @property string $number
 * @property string $locationCode
 * @property string $postingGroup
 * @property string $shipmentDate
 * @property string $description
 * @property string $description2
 * @property string $unitOfMeasure
 * @property float $quantity
 * @property float $outstandingQuantity
 * @property float $qtyToInvoice
 * @property float $qtyToShip
 * @property float $unitPrice
 * @property float $unitCostLcy
 * @property float $vatPercent
 * @property float $lineDiscountPercent
 * @property float $lineDiscountAmount
 * @property float $amount
 * @property float $amountIncludingVat
 * @property bool $allowInvoiceDisc
 * @property float $grossWeight
 * @property float $netWeight
 * @property float $unitsPerParcel
 * @property float $unitVolume
 * @property int $applToItemEntry
 * @property string $shortcutDimension1Code
 * @property string $shortcutDimension2Code
 * @property string $customerPriceGroup
 * @property string $jobNumber
 * @property string $workTypeCode
 * @property bool $recalculateInvoiceDisc
 * @property float $outstandingAmount
 * @property float $qtyShippedNotInvoiced
 * @property float $shippedNotInvoiced
 * @property float $quantityShipped
 * @property float $quantityInvoiced
 * @property string $shipmentNumber
 * @property int $shipmentLineNumber
 * @property float $profitPercent
 * @property string $billToCustomerNumber
 * @property float $invDiscountAmount
 * @property string $purchaseOrderNumber
 * @property int $purchOrderLineNumber
 * @property bool $dropShipment
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $vatCalculationType
 * @property string $transactionType
 * @property string $transportMethod
 * @property int $attachedToLineNumber
 * @property string $exitPoint
 * @property string $area
 * @property string $transactionSpecification
 * @property string $taxCategory
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $taxGroupCode
 * @property string $vatClauseCode
 * @property string $vatBusPostingGroup
 * @property string $vatProdPostingGroup
 * @property string $currencyCode
 * @property float $outstandingAmountLcy
 * @property float $shippedNotInvoicedLcy
 * @property float $shippedNotInvLcyNoVat
 * @property float $reservedQuantity
 * @property string $reserve
 * @property string $blanketOrderNumber
 * @property int $blanketOrderLineNumber
 * @property float $vatBaseAmount
 * @property float $unitCost
 * @property bool $systemCreatedEntry
 * @property float $lineAmount
 * @property float $vatDifference
 * @property float $invDiscAmountToInvoice
 * @property string $vatIdentifier
 * @property string $icPartnerRefType
 * @property string $icPartnerReference
 * @property float $prepaymentPercent
 * @property float $prepmtLineAmount
 * @property float $prepmtAmtInv
 * @property float $prepmtAmtInclVat
 * @property float $prepaymentAmount
 * @property float $prepmtVatBaseAmt
 * @property float $prepaymentVatPercent
 * @property string $prepmtVatCalcType
 * @property string $prepaymentVatIdentifier
 * @property string $prepaymentTaxAreaCode
 * @property bool $prepaymentTaxLiable
 * @property string $prepaymentTaxGroupCode
 * @property float $prepmtAmtToDeduct
 * @property float $prepmtAmtDeducted
 * @property bool $prepaymentLine
 * @property float $prepmtAmountInvInclVat
 * @property float $prepmtAmountInvLcy
 * @property string $icPartnerCode
 * @property float $prepmtVatAmountInvLcy
 * @property float $prepaymentVatDifference
 * @property float $prepmtVatDiffToDeduct
 * @property float $prepmtVatDiffDeducted
 * @property int $dimensionSetId
 * @property float $qtyToAssembleToOrder
 * @property float $qtyToAsmToOrderBase
 * @property float $atoWhseOutstandingQty
 * @property float $atoWhseOutstdQtyBase
 * @property string $jobTaskNumber
 * @property int $jobContractEntryNumber
 * @property string $postingDate
 * @property string $deferralCode
 * @property string $returnsDeferralStartDate
 * @property string $variantCode
 * @property string $binCode
 * @property float $qtyPerUnitOfMeasure
 * @property bool $planned
 * @property string $unitOfMeasureCode
 * @property float $quantityBase
 * @property float $outstandingQtyBase
 * @property float $qtyToInvoiceBase
 * @property float $qtyToShipBase
 * @property float $qtyShippedNotInvdBase
 * @property float $qtyShippedBase
 * @property float $qtyInvoicedBase
 * @property float $reservedQtyBase
 * @property string $faPostingDate
 * @property string $depreciationBookCode
 * @property bool $deprUntilFaPostingDate
 * @property string $duplicateInDepreciationBook
 * @property bool $useDuplicationList
 * @property string $responsibilityCenter
 * @property bool $outOfStockSubstitution
 * @property bool $substitutionAvailable
 * @property string $originallyOrderedNumber
 * @property string $originallyOrderedVarCode
 * @property string $crossReferenceNumber
 * @property string $unitOfMeasureCrossRef
 * @property string $crossReferenceType
 * @property string $crossReferenceTypeNumber
 * @property string $itemCategoryCode
 * @property bool $nonstock
 * @property string $purchasingCode
 * @property bool $specialOrder
 * @property string $specialOrderPurchaseNumber
 * @property int $specialOrderPurchLineNumber
 * @property float $whseOutstandingQty
 * @property float $whseOutstandingQtyBase
 * @property bool $completelyShipped
 * @property string $requestedDeliveryDate
 * @property string $promisedDeliveryDate
 * @property string $shippingTime
 * @property string $outboundWhseHandlingTime
 * @property string $plannedDeliveryDate
 * @property string $plannedShipmentDate
 * @property string $shippingAgentCode
 * @property string $shippingAgentServiceCode
 * @property bool $allowItemChargeAssignment
 * @property float $qtyToAssign
 * @property float $qtyAssigned
 * @property float $returnQtyToReceive
 * @property float $returnQtyToReceiveBase
 * @property float $returnQtyRcdNotInvd
 * @property float $retQtyRcdNotInvdBase
 * @property float $returnRcdNotInvd
 * @property float $returnRcdNotInvdLcy
 * @property float $returnQtyReceived
 * @property float $returnQtyReceivedBase
 * @property int $applFromItemEntry
 * @property string $bomItemNumber
 * @property string $returnReceiptNumber
 * @property int $returnReceiptLineNumber
 * @property string $returnReasonCode
 * @property bool $allowLineDisc
 * @property string $customerDiscGroup
 * @property string $subtype
 * @property string $priceDescription
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNumberLinks
 * @property-read \BusinessCentral\Models\JobTaskLines[]|\BusinessCentral\EntityCollection $jobTaskNumberLinks
 * @method \BusinessCentral\Query\Builder jobNumberLinks()
 * @method \BusinessCentral\Query\Builder jobTaskNumberLinks()
 *
 */
class WorkflowSalesDocumentLines extends Entity
{
    protected static $schema_type = 'workflowSalesDocumentLines';

    protected $fillable = [
        'documentType',
        'documentNumber',
        'lineNumber',
        'sellToCustomerNumber',
        'type',
        'number',
        'locationCode',
        'postingGroup',
        'shipmentDate',
        'description',
        'description2',
        'unitOfMeasure',
        'quantity',
        'outstandingQuantity',
        'qtyToInvoice',
        'qtyToShip',
        'unitPrice',
        'unitCostLcy',
        'vatPercent',
        'lineDiscountPercent',
        'lineDiscountAmount',
        'amount',
        'amountIncludingVat',
        'allowInvoiceDisc',
        'grossWeight',
        'netWeight',
        'unitsPerParcel',
        'unitVolume',
        'applToItemEntry',
        'shortcutDimension1Code',
        'shortcutDimension2Code',
        'customerPriceGroup',
        'jobNumber',
        'workTypeCode',
        'recalculateInvoiceDisc',
        'outstandingAmount',
        'qtyShippedNotInvoiced',
        'shippedNotInvoiced',
        'quantityShipped',
        'quantityInvoiced',
        'shipmentNumber',
        'shipmentLineNumber',
        'profitPercent',
        'billToCustomerNumber',
        'invDiscountAmount',
        'purchaseOrderNumber',
        'purchOrderLineNumber',
        'dropShipment',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'vatCalculationType',
        'transactionType',
        'transportMethod',
        'attachedToLineNumber',
        'exitPoint',
        'area',
        'transactionSpecification',
        'taxCategory',
        'taxAreaCode',
        'taxLiable',
        'taxGroupCode',
        'vatClauseCode',
        'vatBusPostingGroup',
        'vatProdPostingGroup',
        'currencyCode',
        'outstandingAmountLcy',
        'shippedNotInvoicedLcy',
        'shippedNotInvLcyNoVat',
        'reservedQuantity',
        'reserve',
        'blanketOrderNumber',
        'blanketOrderLineNumber',
        'vatBaseAmount',
        'unitCost',
        'systemCreatedEntry',
        'lineAmount',
        'vatDifference',
        'invDiscAmountToInvoice',
        'vatIdentifier',
        'icPartnerRefType',
        'icPartnerReference',
        'prepaymentPercent',
        'prepmtLineAmount',
        'prepmtAmtInv',
        'prepmtAmtInclVat',
        'prepaymentAmount',
        'prepmtVatBaseAmt',
        'prepaymentVatPercent',
        'prepmtVatCalcType',
        'prepaymentVatIdentifier',
        'prepaymentTaxAreaCode',
        'prepaymentTaxLiable',
        'prepaymentTaxGroupCode',
        'prepmtAmtToDeduct',
        'prepmtAmtDeducted',
        'prepaymentLine',
        'prepmtAmountInvInclVat',
        'prepmtAmountInvLcy',
        'icPartnerCode',
        'prepmtVatAmountInvLcy',
        'prepaymentVatDifference',
        'prepmtVatDiffToDeduct',
        'prepmtVatDiffDeducted',
        'dimensionSetId',
        'qtyToAssembleToOrder',
        'qtyToAsmToOrderBase',
        'atoWhseOutstandingQty',
        'atoWhseOutstdQtyBase',
        'jobTaskNumber',
        'jobContractEntryNumber',
        'postingDate',
        'deferralCode',
        'returnsDeferralStartDate',
        'variantCode',
        'binCode',
        'qtyPerUnitOfMeasure',
        'planned',
        'unitOfMeasureCode',
        'quantityBase',
        'outstandingQtyBase',
        'qtyToInvoiceBase',
        'qtyToShipBase',
        'qtyShippedNotInvdBase',
        'qtyShippedBase',
        'qtyInvoicedBase',
        'reservedQtyBase',
        'faPostingDate',
        'depreciationBookCode',
        'deprUntilFaPostingDate',
        'duplicateInDepreciationBook',
        'useDuplicationList',
        'responsibilityCenter',
        'outOfStockSubstitution',
        'substitutionAvailable',
        'originallyOrderedNumber',
        'originallyOrderedVarCode',
        'crossReferenceNumber',
        'unitOfMeasureCrossRef',
        'crossReferenceType',
        'crossReferenceTypeNumber',
        'itemCategoryCode',
        'nonstock',
        'purchasingCode',
        'specialOrder',
        'specialOrderPurchaseNumber',
        'specialOrderPurchLineNumber',
        'whseOutstandingQty',
        'whseOutstandingQtyBase',
        'completelyShipped',
        'requestedDeliveryDate',
        'promisedDeliveryDate',
        'shippingTime',
        'outboundWhseHandlingTime',
        'plannedDeliveryDate',
        'plannedShipmentDate',
        'shippingAgentCode',
        'shippingAgentServiceCode',
        'allowItemChargeAssignment',
        'qtyToAssign',
        'qtyAssigned',
        'returnQtyToReceive',
        'returnQtyToReceiveBase',
        'returnQtyRcdNotInvd',
        'retQtyRcdNotInvdBase',
        'returnRcdNotInvd',
        'returnRcdNotInvdLcy',
        'returnQtyReceived',
        'returnQtyReceivedBase',
        'applFromItemEntry',
        'bomItemNumber',
        'returnReceiptNumber',
        'returnReceiptLineNumber',
        'returnReasonCode',
        'allowLineDisc',
        'customerDiscGroup',
        'subtype',
        'priceDescription',
    ];

    protected $guarded  = [

    ];
}