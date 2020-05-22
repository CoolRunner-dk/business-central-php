<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class JobPlanningLines
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $jobNo
 * @property string $jobTaskNo
 * @property int $lineNo
 * @property string $lineType
 * @property bool $usageLink
 * @property string $planningDate
 * @property string $plannedDeliveryDate
 * @property string $currencyDate
 * @property string $documentNo
 * @property string $type
 * @property string $no
 * @property string $description
 * @property string $priceCalculationMethod
 * @property string $costCalculationMethod
 * @property string $genBusPostingGroup
 * @property string $genProdPostingGroup
 * @property string $variantCode
 * @property string $locationCode
 * @property string $workTypeCode
 * @property string $unitOfMeasureCode
 * @property string $reserveName
 * @property float $quantity
 * @property float $reservedQuantity
 * @property float $quantityBase
 * @property float $remainingQty
 * @property float $directUnitCostLCY
 * @property float $unitCost
 * @property float $unitCostLCY
 * @property float $totalCost
 * @property float $remainingTotalCost
 * @property float $totalCostLCY
 * @property float $remainingTotalCostLCY
 * @property float $unitPrice
 * @property float $unitPriceLCY
 * @property float $lineAmount
 * @property float $remainingLineAmount
 * @property float $lineAmountLCY
 * @property float $remainingLineAmountLCY
 * @property float $lineDiscountAmount
 * @property float $lineDiscountPercent
 * @property float $totalPrice
 * @property float $totalPriceLCY
 * @property float $qtyPosted
 * @property float $qtyToTransferToJournal
 * @property float $postedTotalCost
 * @property float $postedTotalCostLCY
 * @property float $postedLineAmount
 * @property float $postedLineAmountLCY
 * @property float $qtyTransferredToInvoice
 * @property float $qtyToTransferToInvoice
 * @property float $qtyInvoiced
 * @property float $qtyToInvoice
 * @property float $invoicedAmountLCY
 * @property float $invoicedCostAmountLCY
 * @property string $userID
 * @property string $serialNo
 * @property string $lotNo
 * @property int $jobContractEntryNo
 * @property string $ledgerEntryType
 * @property int $ledgerEntryNo
 * @property bool $systemCreatedEntry
 * @property bool $overdue
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobNoLinks
 * @property-read \BusinessCentral\Models\JobTaskLines[]|\BusinessCentral\EntityCollection $jobTaskNoLinks
 * @method \BusinessCentral\Query\Builder jobNoLinks()
 * @method \BusinessCentral\Query\Builder jobTaskNoLinks()
 *
 */
class JobPlanningLines extends Entity
{
    protected static $schema_type = 'Job_Planning_Lines';

    protected $fillable = [
        'jobNo',
        'jobTaskNo',
        'lineNo',
        'lineType',
        'usageLink',
        'planningDate',
        'plannedDeliveryDate',
        'currencyDate',
        'documentNo',
        'type',
        'no',
        'description',
        'priceCalculationMethod',
        'costCalculationMethod',
        'genBusPostingGroup',
        'genProdPostingGroup',
        'variantCode',
        'locationCode',
        'workTypeCode',
        'unitOfMeasureCode',
        'reserveName',
        'quantity',
        'reservedQuantity',
        'quantityBase',
        'remainingQty',
        'directUnitCostLCY',
        'unitCost',
        'unitCostLCY',
        'totalCost',
        'remainingTotalCost',
        'totalCostLCY',
        'remainingTotalCostLCY',
        'unitPrice',
        'unitPriceLCY',
        'lineAmount',
        'remainingLineAmount',
        'lineAmountLCY',
        'remainingLineAmountLCY',
        'lineDiscountAmount',
        'lineDiscountPercent',
        'totalPrice',
        'totalPriceLCY',
        'qtyPosted',
        'qtyToTransferToJournal',
        'postedTotalCost',
        'postedTotalCostLCY',
        'postedLineAmount',
        'postedLineAmountLCY',
        'qtyTransferredToInvoice',
        'qtyToTransferToInvoice',
        'qtyInvoiced',
        'qtyToInvoice',
        'invoicedAmountLCY',
        'invoicedCostAmountLCY',
        'userID',
        'serialNo',
        'lotNo',
        'jobContractEntryNo',
        'ledgerEntryType',
        'ledgerEntryNo',
        'systemCreatedEntry',
        'overdue',
    ];

    protected $guarded  = [

    ];
}