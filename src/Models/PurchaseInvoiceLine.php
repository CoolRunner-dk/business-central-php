<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PurchaseInvoiceLine
 * Auto-generated on: 2020-05-13 10:59:54
 *
 * @property-read string $id
 * @property string $documentId
 * @property int $sequence
 * @property string $itemId
 * @property string $accountId
 * @property string $lineType
 * @property array|string[] $lineDetails
 * @property string $description
 * @property array|string[] $unitOfMeasure
 * @property float $unitCost
 * @property float $quantity
 * @property float $discountAmount
 * @property float $discountPercent
 * @property bool $discountAppliedBeforeTax
 * @property float $amountExcludingTax
 * @property string $taxCode
 * @property float $taxPercent
 * @property float $totalTaxAmount
 * @property float $amountIncludingTax
 * @property float $invoiceDiscountAllocation
 * @property float $netAmount
 * @property float $netTaxAmount
 * @property float $netAmountIncludingTax
 * @property string $expectedReceiptDate
 * @property-read \BusinessCentral\Models\Item $item
 * @property-read \BusinessCentral\Models\Account $account
 * @method \BusinessCentral\Query\Builder item()
 * @method \BusinessCentral\Query\Builder account()
 *
 */
class PurchaseInvoiceLine extends Entity
{
    protected static $schema_type = 'purchaseInvoiceLine';

    protected $fillable = [
        'documentId',
        'sequence',
        'itemId',
        'accountId',
        'lineType',
        'lineDetails',
        'description',
        'unitOfMeasure',
        'unitCost',
        'quantity',
        'discountAmount',
        'discountPercent',
        'discountAppliedBeforeTax',
        'amountExcludingTax',
        'taxCode',
        'taxPercent',
        'totalTaxAmount',
        'amountIncludingTax',
        'invoiceDiscountAllocation',
        'netAmount',
        'netTaxAmount',
        'netAmountIncludingTax',
        'expectedReceiptDate',
    ];

    protected $guarded  = [
        'id',
    ];
}