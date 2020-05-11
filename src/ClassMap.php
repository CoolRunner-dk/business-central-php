<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral;


use BusinessCentral\Schema\EntityType;

class ClassMap
{
    public static function map(EntityType $type)
    {
        return static::$map[$type->name] ?? Entity::class;
    }

    public static function extend(string $name, string $class)
    {
        if ( ! in_array(Entity::class, class_parents($class))) {
            throw new \RuntimeException(sprintf('Cannot use class %s as mapping for Business Central - Class must extend %s', $class, Entity::class));
        }
        static::$map[$name] = $class;
    }

    protected static $map = [
        // Generated on 2020-05-11 13:54:04
        'account'  => \BusinessCentral\Models\Account::class,
        'agedAccountsPayable'  => \BusinessCentral\Models\AgedAccountsPayable::class,
        'agedAccountsReceivable'  => \BusinessCentral\Models\AgedAccountsReceivable::class,
        'attachments'  => \BusinessCentral\Models\Attachments::class,
        'balanceSheet'  => \BusinessCentral\Models\BalanceSheet::class,
        'bankAccount'  => \BusinessCentral\Models\BankAccount::class,
        'cashFlowStatement'  => \BusinessCentral\Models\CashFlowStatement::class,
        'company'  => \BusinessCentral\Models\Company::class,
        'companyInformation'  => \BusinessCentral\Models\CompanyInformation::class,
        'countryRegion'  => \BusinessCentral\Models\CountryRegion::class,
        'currency'  => \BusinessCentral\Models\Currency::class,
        'customer'  => \BusinessCentral\Models\Customer::class,
        'customerFinancialDetail'  => \BusinessCentral\Models\CustomerFinancialDetail::class,
        'customerPayment'  => \BusinessCentral\Models\CustomerPayment::class,
        'customerPaymentJournal'  => \BusinessCentral\Models\CustomerPaymentJournal::class,
        'customerSale'  => \BusinessCentral\Models\CustomerSale::class,
        'defaultDimensions'  => \BusinessCentral\Models\DefaultDimensions::class,
        'dimension'  => \BusinessCentral\Models\Dimension::class,
        'dimensionLine'  => \BusinessCentral\Models\DimensionLine::class,
        'dimensionValue'  => \BusinessCentral\Models\DimensionValue::class,
        'employee'  => \BusinessCentral\Models\Employee::class,
        'generalLedgerEntry'  => \BusinessCentral\Models\GeneralLedgerEntry::class,
        'generalLedgerEntryAttachments'  => \BusinessCentral\Models\GeneralLedgerEntryAttachments::class,
        'incomeStatement'  => \BusinessCentral\Models\IncomeStatement::class,
        'item'  => \BusinessCentral\Models\Item::class,
        'itemCategory'  => \BusinessCentral\Models\ItemCategory::class,
        'journal'  => \BusinessCentral\Models\Journal::class,
        'journalLine'  => \BusinessCentral\Models\JournalLine::class,
        'paymentMethod'  => \BusinessCentral\Models\PaymentMethod::class,
        'paymentTerm'  => \BusinessCentral\Models\PaymentTerm::class,
        'pdfDocument'  => \BusinessCentral\Models\PdfDocument::class,
        'picture'  => \BusinessCentral\Models\Picture::class,
        'project'  => \BusinessCentral\Models\Project::class,
        'purchaseInvoice'  => \BusinessCentral\Models\PurchaseInvoice::class,
        'purchaseInvoiceLine'  => \BusinessCentral\Models\PurchaseInvoiceLine::class,
        'retainedEarningsStatement'  => \BusinessCentral\Models\RetainedEarningsStatement::class,
        'salesCreditMemo'  => \BusinessCentral\Models\SalesCreditMemo::class,
        'salesCreditMemoLine'  => \BusinessCentral\Models\SalesCreditMemoLine::class,
        'salesInvoice'  => \BusinessCentral\Models\SalesInvoice::class,
        'salesInvoiceLine'  => \BusinessCentral\Models\SalesInvoiceLine::class,
        'salesOrder'  => \BusinessCentral\Models\SalesOrder::class,
        'salesOrderLine'  => \BusinessCentral\Models\SalesOrderLine::class,
        'salesQuote'  => \BusinessCentral\Models\SalesQuote::class,
        'salesQuoteLine'  => \BusinessCentral\Models\SalesQuoteLine::class,
        'shipmentMethod'  => \BusinessCentral\Models\ShipmentMethod::class,
        'subscriptions'  => \BusinessCentral\Models\Subscriptions::class,
        'taxArea'  => \BusinessCentral\Models\TaxArea::class,
        'taxGroup'  => \BusinessCentral\Models\TaxGroup::class,
        'timeRegistrationEntry'  => \BusinessCentral\Models\TimeRegistrationEntry::class,
        'trialBalance'  => \BusinessCentral\Models\TrialBalance::class,
        'unitOfMeasure'  => \BusinessCentral\Models\UnitOfMeasure::class,
        'vendor'  => \BusinessCentral\Models\Vendor::class,
        'vendorPurchase'  => \BusinessCentral\Models\VendorPurchase::class,
    ];
}