<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingCustomer
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingcustomer
 *
 * @property-read string $id
 * @property string $number
 * @property string $graphContactId
 * @property string $contactId
 * @property string $displayName
 * @property string $type
 * @property bool $isBlocked
 * @property string $address
 * @property string $phoneNumber
 * @property string $email
 * @property string $website
 * @property bool $pricesIncludeTax
 * @property bool $taxLiable
 * @property string $taxAreaId
 * @property string $taxAreaDisplayName
 * @property string $taxRegistrationNumber
 * @property string $paymentTermsId
 * @property string $shipmentMethodId
 * @property string $paymentMethodId
 * @property float $balance
 * @property float $overdueAmount
 * @property float $totalSalesExcludingTax
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\InvoicingCustomersCoupon[]|\BusinessCentral\EntityCollection $invoicingCustomersCoupons
 * @method \BusinessCentral\Query\Builder invoicingCustomersCoupons()
 *
 */
class InvoicingCustomer extends Entity
{
    protected static $schema_type = 'nativeInvoicingCustomers';

    protected $fillable = [
        'number',
        'graphContactId',
        'contactId',
        'displayName',
        'type',
        'isBlocked',
        'address',
        'phoneNumber',
        'email',
        'website',
        'pricesIncludeTax',
        'taxLiable',
        'taxAreaId',
        'taxAreaDisplayName',
        'taxRegistrationNumber',
        'paymentTermsId',
        'shipmentMethodId',
        'paymentMethodId',
        'balance',
        'overdueAmount',
        'totalSalesExcludingTax',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}