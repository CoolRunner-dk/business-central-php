<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingExportInvoice
 * Auto-generated on: 2020-05-22 07:30:30
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