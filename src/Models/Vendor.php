<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Vendor
 * Auto-generated on: 2020-05-11 13:50:37
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 * @property array|string[] $address
 * @property string $phoneNumber
 * @property string $email
 * @property string $website
 * @property string $taxRegistrationNumber
 * @property string $currencyId
 * @property string $currencyCode
 * @property string $irs1099Code
 * @property string $paymentTermsId
 * @property string $paymentMethodId
 * @property bool $taxLiable
 * @property string $blocked
 * @property float $balance
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\Picture[]|\BusinessCentral\EntityCollection $picture
 * @property-read \BusinessCentral\Models\DefaultDimensions[]|\BusinessCentral\EntityCollection $defaultDimensions
 * @property-read \BusinessCentral\Models\Currency $currency
 * @property-read \BusinessCentral\Models\PaymentTerm $paymentTerm
 * @property-read \BusinessCentral\Models\PaymentMethod $paymentMethod
 * @method \BusinessCentral\Query\Builder picture()
 * @method \BusinessCentral\Query\Builder defaultDimensions()
 * @method \BusinessCentral\Query\Builder currency()
 * @method \BusinessCentral\Query\Builder paymentTerm()
 * @method \BusinessCentral\Query\Builder paymentMethod()
 *
 */
class Vendor extends Entity
{
    protected static $schema_type = 'vendor';

    protected $fillable = [
        'number',
        'displayName',
        'address',
        'phoneNumber',
        'email',
        'website',
        'taxRegistrationNumber',
        'currencyId',
        'currencyCode',
        'irs1099Code',
        'paymentTermsId',
        'paymentMethodId',
        'taxLiable',
        'blocked',
        'balance',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}