<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Company
 * Auto-generated on: 2020-05-11 13:48:14
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
 * @method \BusinessCentral\Query\Builder items()
 * @method \BusinessCentral\Query\Builder picture()
 * @method \BusinessCentral\Query\Builder defaultDimensions()
 * @method \BusinessCentral\Query\Builder customers()
 * @method \BusinessCentral\Query\Builder customerFinancialDetails()
 * @method \BusinessCentral\Query\Builder vendors()
 * @method \BusinessCentral\Query\Builder companyInformation()
 * @method \BusinessCentral\Query\Builder salesInvoices()
 * @method \BusinessCentral\Query\Builder salesInvoiceLines()
 * @method \BusinessCentral\Query\Builder pdfDocument()
 * @method \BusinessCentral\Query\Builder customerPaymentJournals()
 * @method \BusinessCentral\Query\Builder customerPayments()
 * @method \BusinessCentral\Query\Builder accounts()
 * @method \BusinessCentral\Query\Builder taxGroups()
 * @method \BusinessCentral\Query\Builder journals()
 * @method \BusinessCentral\Query\Builder journalLines()
 * @method \BusinessCentral\Query\Builder attachments()
 * @method \BusinessCentral\Query\Builder employees()
 * @method \BusinessCentral\Query\Builder timeRegistrationEntries()
 * @method \BusinessCentral\Query\Builder generalLedgerEntries()
 * @method \BusinessCentral\Query\Builder currencies()
 * @method \BusinessCentral\Query\Builder paymentMethods()
 * @method \BusinessCentral\Query\Builder dimensions()
 * @method \BusinessCentral\Query\Builder dimensionValues()
 * @method \BusinessCentral\Query\Builder dimensionLines()
 * @method \BusinessCentral\Query\Builder paymentTerms()
 * @method \BusinessCentral\Query\Builder shipmentMethods()
 * @method \BusinessCentral\Query\Builder itemCategories()
 * @method \BusinessCentral\Query\Builder cashFlowStatement()
 * @method \BusinessCentral\Query\Builder countriesRegions()
 * @method \BusinessCentral\Query\Builder salesOrders()
 * @method \BusinessCentral\Query\Builder salesOrderLines()
 * @method \BusinessCentral\Query\Builder retainedEarningsStatement()
 * @method \BusinessCentral\Query\Builder unitsOfMeasure()
 * @method \BusinessCentral\Query\Builder agedAccountsReceivable()
 * @method \BusinessCentral\Query\Builder agedAccountsPayable()
 * @method \BusinessCentral\Query\Builder balanceSheet()
 * @method \BusinessCentral\Query\Builder trialBalance()
 * @method \BusinessCentral\Query\Builder incomeStatement()
 * @method \BusinessCentral\Query\Builder taxAreas()
 * @method \BusinessCentral\Query\Builder salesQuotes()
 * @method \BusinessCentral\Query\Builder salesQuoteLines()
 * @method \BusinessCentral\Query\Builder salesCreditMemos()
 * @method \BusinessCentral\Query\Builder salesCreditMemoLines()
 * @method \BusinessCentral\Query\Builder generalLedgerEntryAttachments()
 * @method \BusinessCentral\Query\Builder purchaseInvoices()
 * @method \BusinessCentral\Query\Builder purchaseInvoiceLines()
 * @method \BusinessCentral\Query\Builder projects()
 * @method \BusinessCentral\Query\Builder bankAccounts()
 * @method \BusinessCentral\Query\Builder customerSales()
 * @method \BusinessCentral\Query\Builder vendorPurchases()
 *
 */
class Company extends Entity
{
    protected static $schema_type = 'company';

    protected $fillable = [
        'systemVersion',
        'name',
        'displayName',
        'businessProfileId',
    ];

    protected $guarded  = [
        'id',
    ];
}