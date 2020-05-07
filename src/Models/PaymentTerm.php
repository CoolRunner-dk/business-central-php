<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PaymentTerm
 * Auto-generated on: 2020-05-07 09:06:12
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $dueDateCalculation
 * @property string $discountDateCalculation
 * @property float $discountPercent
 * @property bool $calculateDiscountOnCreditMemos
 * @property-read string $lastModifiedDateTime
 *
 */
class PaymentTerm extends Entity
{
    protected static $schema_type = 'paymentTerm';

    protected $fillable = [
        'id',
        'code',
        'displayName',
        'dueDateCalculation',
        'discountDateCalculation',
        'discountPercent',
        'calculateDiscountOnCreditMemos',
        'lastModifiedDateTime',
    ];
}