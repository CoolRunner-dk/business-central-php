<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingKPI
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $primaryKey
 * @property float $invoicedYearToDate
 * @property int $numberOfInvoicesYearToDate
 * @property float $invoicedCurrentMonth
 * @property float $salesInvoicesOutsdanding
 * @property float $salesInvoicesOverdue
 * @property int $numberOfQuotes
 * @property int $numberOfDraftInvoices
 * @property string $requestedDateTime
 * @property string $yTDDateFilter
 *
 */
class InvoicingKPI extends Entity
{
    protected static $schema_type = 'nativeInvoicingKPIs';

    protected $fillable = [
        'primaryKey',
        'invoicedYearToDate',
        'numberOfInvoicesYearToDate',
        'invoicedCurrentMonth',
        'salesInvoicesOutsdanding',
        'salesInvoicesOverdue',
        'numberOfQuotes',
        'numberOfDraftInvoices',
        'requestedDateTime',
        'yTDDateFilter',
    ];

    protected $guarded  = [

    ];
}