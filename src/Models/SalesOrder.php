<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class SalesOrder
 * Auto-generated on: 2020-05-11 17:35:34
 *
 * @property-read string $id
 * @property string $number
 * @property string $externalDocumentNumber
 * @property string $orderDate
 * @property string $postingDate
 * @property string $customerId
 * @property string $contactId
 * @property string $customerNumber
 * @property string $customerName
 * @property string $billToName
 * @property string $billToCustomerId
 * @property string $billToCustomerNumber
 * @property string $shipToName
 * @property string $shipToContact
 * @property array|string[] $sellingPostalAddress
 * @property array|string[] $billingPostalAddress
 * @property array|string[] $shippingPostalAddress
 * @property string $currencyId
 * @property string $currencyCode
 * @property bool $pricesIncludeTax
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $salesperson
 * @property bool $partialShipping
 * @property string $requestedDeliveryDate
 * @property float $discountAmount
 * @property bool $discountAppliedBeforeTax
 * @property float $totalAmountExcludingTax
 * @property float $totalTaxAmount
 * @property float $totalAmountIncludingTax
 * @property bool $fullyShipped
 * @property string $status
 * @property-read string $lastModifiedDateTime
 * @property string $phoneNumber
 * @property string $email
 * @property-read \BusinessCentral\Models\SalesOrderLine[]|\BusinessCentral\EntityCollection $salesOrderLines
 * @property-read \BusinessCentral\Models\Customer $customer
 * @property-read \BusinessCentral\Models\Currency $currency
 * @property-read \BusinessCentral\Models\PaymentTerm $paymentTerm
 * @property-read \BusinessCentral\Models\ShipmentMethod $shipmentMethod
 * @method \BusinessCentral\Query\Builder salesOrderLines()
 * @method \BusinessCentral\Query\Builder customer()
 * @method \BusinessCentral\Query\Builder currency()
 * @method \BusinessCentral\Query\Builder paymentTerm()
 * @method \BusinessCentral\Query\Builder shipmentMethod()
 *
 */
class SalesOrder extends Entity
{
    protected static $schema_type = 'salesOrder';

    protected $fillable = [
        'number',
        'externalDocumentNumber',
        'orderDate',
        'postingDate',
        'customerId',
        'contactId',
        'customerNumber',
        'customerName',
        'billToName',
        'billToCustomerId',
        'billToCustomerNumber',
        'shipToName',
        'shipToContact',
        'sellingPostalAddress',
        'billingPostalAddress',
        'shippingPostalAddress',
        'currencyId',
        'currencyCode',
        'pricesIncludeTax',
        'paymentTermsId',
        'shipmentMethodId',
        'salesperson',
        'partialShipping',
        'requestedDeliveryDate',
        'discountAmount',
        'discountAppliedBeforeTax',
        'totalAmountExcludingTax',
        'totalTaxAmount',
        'totalAmountIncludingTax',
        'fullyShipped',
        'status',
        'phoneNumber',
        'email',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}