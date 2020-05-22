<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PurchaseDocumentsworkflowPurchaseDocumentLines
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#purchasedocumentsworkflowpurchasedocumentlines
 *
 * @property string $documentType
 * @property string $documentNumber
 * @property int $lineNumber
 * @property string $buyFromVendorNumber
 * @property string $type
 * @property string $number
 * @property string $locationCode
 * @property string $postingGroup
 * @property string $expectedReceiptDate
 * @property string $description
 * @property string $description2
 * @property string $unitOfMeasure
 * @property float $quantity
 * @property float $outstandingQuantity
 * @property float $qtyToInvoice
 * @property float $qtyToReceive
 * @property float $directUnitCost
 * @property float $unitCostLcy
 * @property float $vatPercent
 * @property float $lineDiscountPercent
 * @property float $lineDiscountAmount
 * @property float $amount
 * @property float $amountIncludingVat
 * @property float $unitPriceLcy
 * @property bool $allowInvoiceDisc
 * @property float $grossWeight
 * @property float $netWeight
 * @property float $unitsPerParcel
 * @property float $unitVolume
 * @property int $applToItemEntry
 * @property string $shortcutDimension1Code
 * @property string $shortcutDimension2Code
 * @property string $jobNumber
 * @property float $indirectCostPercent
 * @property bool $recalculateInvoiceDisc
 * @property float $outstandingAmount
 * @property float $qtyRcdNotInvoiced
 * @property float $amtRcdNotInvoiced
 * @property float $quantityReceived
 * @property float $quantityInvoiced
 * @property string $receiptNumber
 * @property int $receiptLineNumber
 * @property float $profitPercent
 * @property string $payToVendorNumber
 * @property float $invDiscountAmount
 * @property string $vendorItemNumber
 * @property string $salesOrderNumber
 * @property int $salesOrderLineNumber
 * @property bool $dropShipment
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $vatCalculationType
 * @property string $transactionType
 * @property string $transportMethod
 * @property int $attachedToLineNumber
 * @property string $entryPoint
 * @property string $area
 * @property string $transactionSpecification
 * @property string $taxAreaCode
 * @property bool $taxLiable
 * @property string $taxGroupCode
 * @property bool $useTax
 * @property string $vatBusPostingGroup
 * @property string $vatProdPostingGroup
 * @property string $currencyCode
 * @property float $outstandingAmountLcy
 * @property float $amtRcdNotInvoicedLcy
 * @property float $reservedQuantity
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
 * @property float $outstandingAmtExVatLcy
 * @property float $aRcdNotInvExVatLcy
 * @property int $dimensionSetId
 * @property string $jobTaskNumber
 * @property string $jobLineType
 * @property float $jobUnitPrice
 * @property float $jobTotalPrice
 * @property float $jobLineAmount
 * @property float $jobLineDiscountAmount
 * @property float $jobLineDiscountPercent
 * @property float $jobUnitPriceLcy
 * @property float $jobTotalPriceLcy
 * @property float $jobLineAmountLcy
 * @property float $jobLineDiscAmountLcy
 * @property float $jobCurrencyFactor
 * @property string $jobCurrencyCode
 * @property int $jobPlanningLineNumber
 * @property float $jobRemainingQty
 * @property float $jobRemainingQtyBase
 * @property string $deferralCode
 * @property string $returnsDeferralStartDate
 * @property string $prodOrderNumber
 * @property string $variantCode
 * @property string $binCode
 * @property float $qtyPerUnitOfMeasure
 * @property string $unitOfMeasureCode
 * @property float $quantityBase
 * @property float $outstandingQtyBase
 * @property float $qtyToInvoiceBase
 * @property float $qtyToReceiveBase
 * @property float $qtyRcdNotInvoicedBase
 * @property float $qtyReceivedBase
 * @property float $qtyInvoicedBase
 * @property float $reservedQtyBase
 * @property string $faPostingDate
 * @property string $faPostingType
 * @property string $depreciationBookCode
 * @property float $salvageValue
 * @property bool $deprUntilFaPostingDate
 * @property bool $deprAcquisitionCost
 * @property string $maintenanceCode
 * @property string $insuranceNumber
 * @property string $budgetedFaNumber
 * @property string $duplicateInDepreciationBook
 * @property bool $useDuplicationList
 * @property string $responsibilityCenter
 * @property string $crossReferenceNumber
 * @property string $unitOfMeasureCrossRef
 * @property string $crossReferenceType
 * @property string $crossReferenceTypeNumber
 * @property string $itemCategoryCode
 * @property bool $nonstock
 * @property string $purchasingCode
 * @property bool $specialOrder
 * @property string $specialOrderSalesNumber
 * @property int $specialOrderSalesLineNumber
 * @property float $whseOutstandingQtyBase
 * @property bool $completelyReceived
 * @property string $requestedReceiptDate
 * @property string $promisedReceiptDate
 * @property string $leadTimeCalculation
 * @property string $inboundWhseHandlingTime
 * @property string $plannedReceiptDate
 * @property string $orderDate
 * @property bool $allowItemChargeAssignment
 * @property float $qtyToAssign
 * @property float $qtyAssigned
 * @property float $returnQtyToShip
 * @property float $returnQtyToShipBase
 * @property float $returnQtyShippedNotInvd
 * @property float $retQtyShpdNotInvdBase
 * @property float $returnShpdNotInvd
 * @property float $returnShpdNotInvdLcy
 * @property float $returnQtyShipped
 * @property float $returnQtyShippedBase
 * @property string $returnShipmentNumber
 * @property int $returnShipmentLineNumber
 * @property string $returnReasonCode
 * @property string $subtype
 * @property string $routingNumber
 * @property string $operationNumber
 * @property string $workCenterNumber
 * @property bool $finished
 * @property int $prodOrderLineNumber
 * @property float $overheadRate
 * @property bool $mpsOrder
 * @property string $planningFlexibility
 * @property string $safetyLeadTime
 * @property int $routingReferenceNumber
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNumberLinks
 * @property-read \BusinessCentral\Models\JobTaskLines[]|\BusinessCentral\EntityCollection $jobTaskNumberLinks
 * @method \BusinessCentral\Query\Builder jobNumberLinks()
 * @method \BusinessCentral\Query\Builder jobTaskNumberLinks()
 *
 */
class PurchaseDocumentsworkflowPurchaseDocumentLines extends Entity
{
    protected static $schema_type = 'purchaseDocumentsworkflowPurchaseDocumentLines';

    protected $fillable = [
        'documentType',
        'documentNumber',
        'lineNumber',
        'buyFromVendorNumber',
        'type',
        'number',
        'locationCode',
        'postingGroup',
        'expectedReceiptDate',
        'description',
        'description2',
        'unitOfMeasure',
        'quantity',
        'outstandingQuantity',
        'qtyToInvoice',
        'qtyToReceive',
        'directUnitCost',
        'unitCostLcy',
        'vatPercent',
        'lineDiscountPercent',
        'lineDiscountAmount',
        'amount',
        'amountIncludingVat',
        'unitPriceLcy',
        'allowInvoiceDisc',
        'grossWeight',
        'netWeight',
        'unitsPerParcel',
        'unitVolume',
        'applToItemEntry',
        'shortcutDimension1Code',
        'shortcutDimension2Code',
        'jobNumber',
        'indirectCostPercent',
        'recalculateInvoiceDisc',
        'outstandingAmount',
        'qtyRcdNotInvoiced',
        'amtRcdNotInvoiced',
        'quantityReceived',
        'quantityInvoiced',
        'receiptNumber',
        'receiptLineNumber',
        'profitPercent',
        'payToVendorNumber',
        'invDiscountAmount',
        'vendorItemNumber',
        'salesOrderNumber',
        'salesOrderLineNumber',
        'dropShipment',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'vatCalculationType',
        'transactionType',
        'transportMethod',
        'attachedToLineNumber',
        'entryPoint',
        'area',
        'transactionSpecification',
        'taxAreaCode',
        'taxLiable',
        'taxGroupCode',
        'useTax',
        'vatBusPostingGroup',
        'vatProdPostingGroup',
        'currencyCode',
        'outstandingAmountLcy',
        'amtRcdNotInvoicedLcy',
        'reservedQuantity',
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
        'outstandingAmtExVatLcy',
        'aRcdNotInvExVatLcy',
        'dimensionSetId',
        'jobTaskNumber',
        'jobLineType',
        'jobUnitPrice',
        'jobTotalPrice',
        'jobLineAmount',
        'jobLineDiscountAmount',
        'jobLineDiscountPercent',
        'jobUnitPriceLcy',
        'jobTotalPriceLcy',
        'jobLineAmountLcy',
        'jobLineDiscAmountLcy',
        'jobCurrencyFactor',
        'jobCurrencyCode',
        'jobPlanningLineNumber',
        'jobRemainingQty',
        'jobRemainingQtyBase',
        'deferralCode',
        'returnsDeferralStartDate',
        'prodOrderNumber',
        'variantCode',
        'binCode',
        'qtyPerUnitOfMeasure',
        'unitOfMeasureCode',
        'quantityBase',
        'outstandingQtyBase',
        'qtyToInvoiceBase',
        'qtyToReceiveBase',
        'qtyRcdNotInvoicedBase',
        'qtyReceivedBase',
        'qtyInvoicedBase',
        'reservedQtyBase',
        'faPostingDate',
        'faPostingType',
        'depreciationBookCode',
        'salvageValue',
        'deprUntilFaPostingDate',
        'deprAcquisitionCost',
        'maintenanceCode',
        'insuranceNumber',
        'budgetedFaNumber',
        'duplicateInDepreciationBook',
        'useDuplicationList',
        'responsibilityCenter',
        'crossReferenceNumber',
        'unitOfMeasureCrossRef',
        'crossReferenceType',
        'crossReferenceTypeNumber',
        'itemCategoryCode',
        'nonstock',
        'purchasingCode',
        'specialOrder',
        'specialOrderSalesNumber',
        'specialOrderSalesLineNumber',
        'whseOutstandingQtyBase',
        'completelyReceived',
        'requestedReceiptDate',
        'promisedReceiptDate',
        'leadTimeCalculation',
        'inboundWhseHandlingTime',
        'plannedReceiptDate',
        'orderDate',
        'allowItemChargeAssignment',
        'qtyToAssign',
        'qtyAssigned',
        'returnQtyToShip',
        'returnQtyToShipBase',
        'returnQtyShippedNotInvd',
        'retQtyShpdNotInvdBase',
        'returnShpdNotInvd',
        'returnShpdNotInvdLcy',
        'returnQtyShipped',
        'returnQtyShippedBase',
        'returnShipmentNumber',
        'returnShipmentLineNumber',
        'returnReasonCode',
        'subtype',
        'routingNumber',
        'operationNumber',
        'workCenterNumber',
        'finished',
        'prodOrderLineNumber',
        'overheadRate',
        'mpsOrder',
        'planningFlexibility',
        'safetyLeadTime',
        'routingReferenceNumber',
    ];

    protected $guarded  = [

    ];
}