<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Customer
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 * @property string $type
 * @property array|string[] $address
 * @property string $phoneNumber
 * @property string $email
 * @property string $website
 * @property bool $taxLiable
 * @property string $taxAreaId
 * @property string $taxAreaDisplayName
 * @property string $taxRegistrationNumber
 * @property string $currencyId
 * @property string $currencyCode
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $paymentMethodId
 * @property string $blocked
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\CustomerFinancialDetail[]|\BusinessCentral\EntityCollection $customerFinancialDetails
 * @property-read \BusinessCentral\Models\Picture[]|\BusinessCentral\EntityCollection $picture
 * @property-read \BusinessCentral\Models\DefaultDimensions[]|\BusinessCentral\EntityCollection $defaultDimensions
 * @property-read \BusinessCentral\Models\Currency $currency
 * @property-read \BusinessCentral\Models\PaymentTerm $paymentTerm
 * @property-read \BusinessCentral\Models\ShipmentMethod $shipmentMethod
 * @property-read \BusinessCentral\Models\PaymentMethod $paymentMethod
 *
 */
class Customer extends Entity
{
    protected static $schema_type = 'customer';
}