<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingPaymentTerm
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $dueDateCalculation
 * @property string $discountDateCalculation
 * @property float $discountPercent
 * @property bool $calculateDiscountOnCreditMemos
 * @property-read string $lastModifiedDateTime
 * @property bool $default
 *
 */
class InvoicingPaymentTerm extends Entity
{
    protected static $schema_type = 'nativeInvoicingPaymentTerms';

    protected $fillable = [
        'code',
        'displayName',
        'dueDateCalculation',
        'discountDateCalculation',
        'discountPercent',
        'calculateDiscountOnCreditMemos',
        'default',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}