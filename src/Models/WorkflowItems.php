<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class WorkflowItems
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#workflowitems
 *
 * @property-read string $id
 * @property string $number
 * @property string $number2
 * @property string $description
 * @property string $searchDescription
 * @property string $description2
 * @property bool $assemblyBom
 * @property string $baseUnitOfMeasure
 * @property int $priceUnitConversion
 * @property string $type
 * @property string $inventoryPostingGroup
 * @property string $shelfNumber
 * @property string $itemDiscGroup
 * @property bool $allowInvoiceDisc
 * @property int $statisticsGroup
 * @property int $commissionGroup
 * @property float $unitPrice
 * @property string $priceProfitCalculation
 * @property float $profitPercent
 * @property string $costingMethod
 * @property float $unitCost
 * @property float $standardCost
 * @property float $lastDirectCost
 * @property float $indirectCostPercent
 * @property bool $costIsAdjusted
 * @property bool $allowOnlineAdjustment
 * @property string $vendorNumber
 * @property string $vendorItemNumber
 * @property string $leadTimeCalculation
 * @property float $reorderPoint
 * @property float $maximumInventory
 * @property float $reorderQuantity
 * @property string $alternativeItemNumber
 * @property float $unitListPrice
 * @property float $dutyDuePercent
 * @property string $dutyCode
 * @property float $grossWeight
 * @property float $netWeight
 * @property float $unitsPerParcel
 * @property float $unitVolume
 * @property string $durability
 * @property string $freightType
 * @property string $tariffNumber
 * @property float $dutyUnitConversion
 * @property string $countryRegionPurchasedCode
 * @property float $budgetQuantity
 * @property float $budgetedAmount
 * @property float $budgetProfit
 * @property bool $comment
 * @property bool $blocked
 * @property bool $costIsPostedToGL
 * @property string $blockReason
 * @property string $lastDatetimeModified
 * @property string $lastDateModified
 * @property string $lastTimeModified
 * @property string $dateFilter
 * @property string $globalDimension1Filter
 * @property string $globalDimension2Filter
 * @property string $locationFilter
 * @property float $inventory
 * @property float $netInvoicedQty
 * @property float $netChange
 * @property float $purchasesQty
 * @property float $salesQty
 * @property float $positiveAdjmtQty
 * @property float $negativeAdjmtQty
 * @property float $purchasesLcy
 * @property float $salesLcy
 * @property float $positiveAdjmtLcy
 * @property float $negativeAdjmtLcy
 * @property float $cogsLcy
 * @property float $qtyOnPurchOrder
 * @property float $qtyOnSalesOrder
 * @property bool $priceIncludesVat
 * @property string $dropShipmentFilter
 * @property string $vatBusPostingGrPrice
 * @property string $genProdPostingGroup
 * @property float $transferredQty
 * @property float $transferredLcy
 * @property string $countryRegionOfOriginCode
 * @property bool $automaticExtTexts
 * @property string $numberSeries
 * @property string $taxGroupCode
 * @property string $vatProdPostingGroup
 * @property string $reserve
 * @property float $reservedQtyOnInventory
 * @property float $reservedQtyOnPurchOrders
 * @property float $reservedQtyOnSalesOrders
 * @property string $globalDimension1Code
 * @property string $globalDimension2Code
 * @property float $resQtyOnOutboundTransfer
 * @property float $resQtyOnInboundTransfer
 * @property float $resQtyOnSalesReturns
 * @property float $resQtyOnPurchReturns
 * @property string $stockoutWarning
 * @property string $preventNegativeInventory
 * @property float $costOfOpenProductionOrders
 * @property string $applicationWkshUserId
 * @property string $assemblyPolicy
 * @property float $resQtyOnAssemblyOrder
 * @property float $resQtyOnAsmComp
 * @property float $qtyOnAssemblyOrder
 * @property float $qtyOnAsmComponent
 * @property float $qtyOnJobOrder
 * @property float $resQtyOnJobOrder
 * @property string $gtin
 * @property string $defaultDeferralTemplateCode
 * @property int $lowLevelCode
 * @property float $lotSize
 * @property string $serialNos
 * @property string $lastUnitCostCalcDate
 * @property float $rolledUpMaterialCost
 * @property float $rolledUpCapacityCost
 * @property float $scrapPercent
 * @property bool $inventoryValueZero
 * @property int $discreteOrderQuantity
 * @property float $minimumOrderQuantity
 * @property float $maximumOrderQuantity
 * @property float $safetyStockQuantity
 * @property float $orderMultiple
 * @property string $safetyLeadTime
 * @property string $flushingMethod
 * @property string $replenishmentSystem
 * @property float $scheduledReceiptQty
 * @property float $scheduledNeedQty
 * @property float $roundingPrecision
 * @property string $binFilter
 * @property string $variantFilter
 * @property string $salesUnitOfMeasure
 * @property string $purchUnitOfMeasure
 * @property string $timeBucket
 * @property float $reservedQtyOnProdOrder
 * @property float $resQtyOnProdOrderComp
 * @property float $resQtyOnReqLine
 * @property string $reorderingPolicy
 * @property bool $includeInventory
 * @property string $manufacturingPolicy
 * @property string $reschedulingPeriod
 * @property string $lotAccumulationPeriod
 * @property string $dampenerPeriod
 * @property float $dampenerQuantity
 * @property float $overflowLevel
 * @property float $planningTransferShipQty
 * @property float $planningWorksheetQty
 * @property bool $stockkeepingUnitExists
 * @property string $manufacturerCode
 * @property string $itemCategoryCode
 * @property bool $createdFromNonstockItem
 * @property bool $substitutesExist
 * @property float $qtyInTransit
 * @property float $transOrdReceiptQty
 * @property float $transOrdShipmentQty
 * @property float $qtyAssignedToShip
 * @property float $qtyPicked
 * @property string $serviceItemGroup
 * @property float $qtyOnServiceOrder
 * @property float $resQtyOnServiceOrders
 * @property string $itemTrackingCode
 * @property string $lotNos
 * @property string $expirationCalculation
 * @property string $lotNumberFilter
 * @property string $serialNumberFilter
 * @property float $qtyOnPurchReturn
 * @property float $qtyOnSalesReturn
 * @property int $numberOfSubstitutes
 * @property string $warehouseClassCode
 * @property string $specialEquipmentCode
 * @property string $putAwayTemplateCode
 * @property string $putAwayUnitOfMeasureCode
 * @property string $physInvtCountingPeriodCode
 * @property string $lastCountingPeriodUpdate
 * @property string $lastPhysInvtDate
 * @property bool $useCrossDocking
 * @property string $nextCountingStartDate
 * @property string $nextCountingEndDate
 * @property string $identifierCode
 * @property string $unitOfMeasureId
 * @property string $taxGroupId
 * @property string $routingNumber
 * @property string $productionBomNumber
 * @property float $singleLevelMaterialCost
 * @property float $singleLevelCapacityCost
 * @property float $singleLevelSubcontrdCost
 * @property float $singleLevelCapOvhdCost
 * @property float $singleLevelMfgOvhdCost
 * @property float $overheadRate
 * @property float $rolledUpSubcontractedCost
 * @property float $rolledUpMfgOvhdCost
 * @property float $rolledUpCapOverheadCost
 * @property float $planningIssuesQty
 * @property float $planningReceiptQty
 * @property float $plannedOrderReceiptQty
 * @property float $fpOrderReceiptQty
 * @property float $relOrderReceiptQty
 * @property float $planningReleaseQty
 * @property float $plannedOrderReleaseQty
 * @property float $purchReqReceiptQty
 * @property float $purchReqReleaseQty
 * @property string $orderTrackingPolicy
 * @property float $prodForecastQuantityBase
 * @property string $productionForecastName
 * @property string $componentForecast
 * @property float $qtyOnProdOrder
 * @property float $qtyOnComponentLines
 * @property bool $critical
 * @property string $commonItemNumber
 * @property string $unitOfMeasureFilter
 * @property-read \BusinessCentral\Models\Media[]|\BusinessCentral\EntityCollection $pictures
 * @method \BusinessCentral\Query\Builder pictures()
 *
 */
class WorkflowItems extends Entity
{
    protected static $schema_type = 'workflowItems';

    protected $fillable = [
        'number',
        'number2',
        'description',
        'searchDescription',
        'description2',
        'assemblyBom',
        'baseUnitOfMeasure',
        'priceUnitConversion',
        'type',
        'inventoryPostingGroup',
        'shelfNumber',
        'itemDiscGroup',
        'allowInvoiceDisc',
        'statisticsGroup',
        'commissionGroup',
        'unitPrice',
        'priceProfitCalculation',
        'profitPercent',
        'costingMethod',
        'unitCost',
        'standardCost',
        'lastDirectCost',
        'indirectCostPercent',
        'costIsAdjusted',
        'allowOnlineAdjustment',
        'vendorNumber',
        'vendorItemNumber',
        'leadTimeCalculation',
        'reorderPoint',
        'maximumInventory',
        'reorderQuantity',
        'alternativeItemNumber',
        'unitListPrice',
        'dutyDuePercent',
        'dutyCode',
        'grossWeight',
        'netWeight',
        'unitsPerParcel',
        'unitVolume',
        'durability',
        'freightType',
        'tariffNumber',
        'dutyUnitConversion',
        'countryRegionPurchasedCode',
        'budgetQuantity',
        'budgetedAmount',
        'budgetProfit',
        'comment',
        'blocked',
        'costIsPostedToGL',
        'blockReason',
        'lastDatetimeModified',
        'lastDateModified',
        'lastTimeModified',
        'dateFilter',
        'globalDimension1Filter',
        'globalDimension2Filter',
        'locationFilter',
        'inventory',
        'netInvoicedQty',
        'netChange',
        'purchasesQty',
        'salesQty',
        'positiveAdjmtQty',
        'negativeAdjmtQty',
        'purchasesLcy',
        'salesLcy',
        'positiveAdjmtLcy',
        'negativeAdjmtLcy',
        'cogsLcy',
        'qtyOnPurchOrder',
        'qtyOnSalesOrder',
        'priceIncludesVat',
        'dropShipmentFilter',
        'vatBusPostingGrPrice',
        'genProdPostingGroup',
        'transferredQty',
        'transferredLcy',
        'countryRegionOfOriginCode',
        'automaticExtTexts',
        'numberSeries',
        'taxGroupCode',
        'vatProdPostingGroup',
        'reserve',
        'reservedQtyOnInventory',
        'reservedQtyOnPurchOrders',
        'reservedQtyOnSalesOrders',
        'globalDimension1Code',
        'globalDimension2Code',
        'resQtyOnOutboundTransfer',
        'resQtyOnInboundTransfer',
        'resQtyOnSalesReturns',
        'resQtyOnPurchReturns',
        'stockoutWarning',
        'preventNegativeInventory',
        'costOfOpenProductionOrders',
        'applicationWkshUserId',
        'assemblyPolicy',
        'resQtyOnAssemblyOrder',
        'resQtyOnAsmComp',
        'qtyOnAssemblyOrder',
        'qtyOnAsmComponent',
        'qtyOnJobOrder',
        'resQtyOnJobOrder',
        'gtin',
        'defaultDeferralTemplateCode',
        'lowLevelCode',
        'lotSize',
        'serialNos',
        'lastUnitCostCalcDate',
        'rolledUpMaterialCost',
        'rolledUpCapacityCost',
        'scrapPercent',
        'inventoryValueZero',
        'discreteOrderQuantity',
        'minimumOrderQuantity',
        'maximumOrderQuantity',
        'safetyStockQuantity',
        'orderMultiple',
        'safetyLeadTime',
        'flushingMethod',
        'replenishmentSystem',
        'scheduledReceiptQty',
        'scheduledNeedQty',
        'roundingPrecision',
        'binFilter',
        'variantFilter',
        'salesUnitOfMeasure',
        'purchUnitOfMeasure',
        'timeBucket',
        'reservedQtyOnProdOrder',
        'resQtyOnProdOrderComp',
        'resQtyOnReqLine',
        'reorderingPolicy',
        'includeInventory',
        'manufacturingPolicy',
        'reschedulingPeriod',
        'lotAccumulationPeriod',
        'dampenerPeriod',
        'dampenerQuantity',
        'overflowLevel',
        'planningTransferShipQty',
        'planningWorksheetQty',
        'stockkeepingUnitExists',
        'manufacturerCode',
        'itemCategoryCode',
        'createdFromNonstockItem',
        'substitutesExist',
        'qtyInTransit',
        'transOrdReceiptQty',
        'transOrdShipmentQty',
        'qtyAssignedToShip',
        'qtyPicked',
        'serviceItemGroup',
        'qtyOnServiceOrder',
        'resQtyOnServiceOrders',
        'itemTrackingCode',
        'lotNos',
        'expirationCalculation',
        'lotNumberFilter',
        'serialNumberFilter',
        'qtyOnPurchReturn',
        'qtyOnSalesReturn',
        'numberOfSubstitutes',
        'warehouseClassCode',
        'specialEquipmentCode',
        'putAwayTemplateCode',
        'putAwayUnitOfMeasureCode',
        'physInvtCountingPeriodCode',
        'lastCountingPeriodUpdate',
        'lastPhysInvtDate',
        'useCrossDocking',
        'nextCountingStartDate',
        'nextCountingEndDate',
        'identifierCode',
        'unitOfMeasureId',
        'taxGroupId',
        'routingNumber',
        'productionBomNumber',
        'singleLevelMaterialCost',
        'singleLevelCapacityCost',
        'singleLevelSubcontrdCost',
        'singleLevelCapOvhdCost',
        'singleLevelMfgOvhdCost',
        'overheadRate',
        'rolledUpSubcontractedCost',
        'rolledUpMfgOvhdCost',
        'rolledUpCapOverheadCost',
        'planningIssuesQty',
        'planningReceiptQty',
        'plannedOrderReceiptQty',
        'fpOrderReceiptQty',
        'relOrderReceiptQty',
        'planningReleaseQty',
        'plannedOrderReleaseQty',
        'purchReqReceiptQty',
        'purchReqReleaseQty',
        'orderTrackingPolicy',
        'prodForecastQuantityBase',
        'productionForecastName',
        'componentForecast',
        'qtyOnProdOrder',
        'qtyOnComponentLines',
        'critical',
        'commonItemNumber',
        'unitOfMeasureFilter',
    ];

    protected $guarded  = [
        'id',
    ];
}