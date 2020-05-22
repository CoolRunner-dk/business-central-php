<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingExportInvoice
 *
 * @property string $code
 * @property string $startDate
 * @property string $endDate
 * @property string $email
 *
 */
class InvoicingExportInvoice extends Entity
{
    protected static $schema_type = 'nativeInvoicingExportInvoices';

    protected $fillable = [
        'code',
        'startDate',
        'endDate',
        'email',
    ];

    protected $guarded  = [

    ];
}