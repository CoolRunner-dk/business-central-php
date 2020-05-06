<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Company
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $systemVersion
 * @property string $name
 * @property string $displayName
 * @property string $businessProfileId
 * @property-read \BusinessCentral\Models\Item[]|\BusinessCentral\EntityCollection $items
 * @property-read \BusinessCentral\Models\Picture[]|\BusinessCentral\EntityCollection $picture
 * @property-read \BusinessCentral\Models\DefaultDimensions[]|\BusinessCentral\EntityCollection $defaultDimensions
 * @property-read \BusinessCentral\Models\Customer[]|\BusinessCentral\EntityCollection $customers
 * @property-read \BusinessCentral\Models\CustomerFinancialDetail[]|\BusinessCentral\EntityCollection $customerFinancialDetails
 * @property-read \BusinessCentral\Models\Vendor[]|\BusinessCentral\EntityCollection $vendors
 * @property-read \BusinessCentral\Models\CompanyInformation[]|\BusinessCentral\EntityCollection $companyInformation
 * @property-read \BusinessCentral\Models\SalesInvoice[]|\BusinessCentral\EntityCollection $salesInvoices
 * @property-read \BusinessCentral\Models\SalesInvoiceLine[]|\BusinessCentral\EntityCollection $salesInvoiceLines
 * @property-read \BusinessCentral\Models\PdfDocument[]|\BusinessCentral\EntityCollection $pdfDocument
 * @property-read \BusinessCentral\Models\CustomerPaymentJournal[]|\BusinessCentral\EntityCollection $customerPaymentJournals
 * @property-read \BusinessCentral\Models\CustomerPayment[]|\BusinessCentral\EntityCollection $customerPayments
 * @property-read \BusinessCentral\Models\Account[]|\BusinessCentral\EntityCollection $accounts
 * @property-read \BusinessCentral\Models\TaxGroup[]|\BusinessCentral\EntityCollection $taxGroups
 * @property-read \BusinessCentral\Models\Journal[]|\BusinessCentral\EntityCollection $journals
 * @property-read \BusinessCentral\Models\JournalLine[]|\BusinessCentral\EntityCollection $journalLines
 * @property-read \BusinessCentral\Models\Attachments[]|\BusinessCentral\EntityCollection $attachments
 * @property-read \BusinessCentral\Models\Employee[]|\BusinessCentral\EntityCollection $employees
 * @property-read \BusinessCentral\Models\TimeRegistrationEntry[]|\BusinessCentral\EntityCollection $timeRegistrationEntries
 * @property-read \BusinessCentral\Models\GeneralLedgerEntry[]|\BusinessCentral\EntityCollection $generalLedgerEntries
 * @property-read \BusinessCentral\Models\Currency[]|\BusinessCentral\EntityCollection $currencies
 * @property-read \BusinessCentral\Models\PaymentMethod[]|\BusinessCentral\EntityCollection $paymentMethods
 * @property-read \BusinessCentral\Models\Dimension[]|\BusinessCentral\EntityCollection $dimensions
 * @property-read \BusinessCentral\Models\DimensionValue[]|\BusinessCentral\EntityCollection $dimensionValues
 * @property-read \BusinessCentral\Models\DimensionLine[]|\BusinessCentral\EntityCollection $dimensionLines
 * @property-read \BusinessCentral\Models\PaymentTerm[]|\BusinessCentral\EntityCollection $paymentTerms
 * @property-read \BusinessCentral\Models\ShipmentMethod[]|\BusinessCentral\EntityCollection $shipmentMethods
 * @property-read \BusinessCentral\Models\ItemCategory[]|\BusinessCentral\EntityCollection $itemCategories
 * @property-read \BusinessCentral\Models\CashFlowStatement[]|\BusinessCentral\EntityCollection $cashFlowStatement
 * @property-read \BusinessCentral\Models\CountryRegion[]|\BusinessCentral\EntityCollection $countriesRegions
 * @property-read \BusinessCentral\Models\SalesOrder[]|\BusinessCentral\EntityCollection $salesOrders
 * @property-read \BusinessCentral\Models\SalesOrderLine[]|\BusinessCentral\EntityCollection $salesOrderLines
 * @property-read \BusinessCentral\Models\RetainedEarningsStatement[]|\BusinessCentral\EntityCollection $retainedEarningsStatement
 * @property-read \BusinessCentral\Models\UnitOfMeasure[]|\BusinessCentral\EntityCollection $unitsOfMeasure
 * @property-read \BusinessCentral\Models\AgedAccountsReceivable[]|\BusinessCentral\EntityCollection $agedAccountsReceivable
 * @property-read \BusinessCentral\Models\AgedAccountsPayable[]|\BusinessCentral\EntityCollection $agedAccountsPayable
 * @property-read \BusinessCentral\Models\BalanceSheet[]|\BusinessCentral\EntityCollection $balanceSheet
 * @property-read \BusinessCentral\Models\TrialBalance[]|\BusinessCentral\EntityCollection $trialBalance
 * @property-read \BusinessCentral\Models\IncomeStatement[]|\BusinessCentral\EntityCollection $incomeStatement
 * @property-read \BusinessCentral\Models\TaxArea[]|\BusinessCentral\EntityCollection $taxAreas
 * @property-read \BusinessCentral\Models\SalesQuote[]|\BusinessCentral\EntityCollection $salesQuotes
 * @property-read \BusinessCentral\Models\SalesQuoteLine[]|\BusinessCentral\EntityCollection $salesQuoteLines
 * @property-read \BusinessCentral\Models\SalesCreditMemo[]|\BusinessCentral\EntityCollection $salesCreditMemos
 * @property-read \BusinessCentral\Models\SalesCreditMemoLine[]|\BusinessCentral\EntityCollection $salesCreditMemoLines
 * @property-read \BusinessCentral\Models\GeneralLedgerEntryAttachments[]|\BusinessCentral\EntityCollection $generalLedgerEntryAttachments
 * @property-read \BusinessCentral\Models\PurchaseInvoice[]|\BusinessCentral\EntityCollection $purchaseInvoices
 * @property-read \BusinessCentral\Models\PurchaseInvoiceLine[]|\BusinessCentral\EntityCollection $purchaseInvoiceLines
 * @property-read \BusinessCentral\Models\Project[]|\BusinessCentral\EntityCollection $projects
 * @property-read \BusinessCentral\Models\BankAccount[]|\BusinessCentral\EntityCollection $bankAccounts
 * @property-read \BusinessCentral\Models\CustomerSale[]|\BusinessCentral\EntityCollection $customerSales
 * @property-read \BusinessCentral\Models\VendorPurchase[]|\BusinessCentral\EntityCollection $vendorPurchases
 *
 */
class Company extends Entity
{
    protected static $schema_type = 'company';
}