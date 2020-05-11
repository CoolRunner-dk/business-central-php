<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesOrderLine
 * Auto-generated on: 2020-05-11 13:56:11
 *
 * @property-read string $id
 * @property string $documentId
 * @property int $sequence
 * @property string $itemId
 * @property string $accountId
 * @property string $lineType
 * @property array|string[] $lineDetails
 * @property string $description
 * @property string $unitOfMeasureId
 * @property array|string[] $unitOfMeasure
 * @property float $quantity
 * @property float $unitPrice
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
 * @property string $shipmentDate
 * @property float $shippedQuantity
 * @property float $invoicedQuantity
 * @property float $invoiceQuantity
 * @property float $shipQuantity
 * @property-read \BusinessCentral\Models\Item $item
 * @property-read \BusinessCentral\Models\Account $account
 * @method \BusinessCentral\Query\Builder item()
 * @method \BusinessCentral\Query\Builder account()
 *
 */
class SalesOrderLine extends Entity
{
    protected static $schema_type = 'salesOrderLine';

    protected $fillable = [
        'documentId',
        'sequence',
        'itemId',
        'accountId',
        'lineType',
        'lineDetails',
        'description',
        'unitOfMeasureId',
        'unitOfMeasure',
        'quantity',
        'unitPrice',
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
        'shipmentDate',
        'shippedQuantity',
        'invoicedQuantity',
        'invoiceQuantity',
        'shipQuantity',
    ];

    protected $guarded  = [
        'id',
    ];
}