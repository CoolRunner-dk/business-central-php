# Account
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |
| category | string | No |
| subCategory | string | No |
| blocked | bool | No |
| lastModifiedDateTime | date | Yes |

# AgedAccountsPayable
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| vendorId | guid | No |
| vendorNumber | string | No |
| name | string | No |
| currencyCode | string | No |
| balanceDue | float | No |
| currentAmount | float | No |
| period1Amount | float | No |
| period2Amount | float | No |
| period3Amount | float | No |
| agedAsOfDate | date | No |
| periodLengthFilter | string | No |

# AgedAccountsReceivable
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| customerId | guid | No |
| customerNumber | string | No |
| name | string | No |
| currencyCode | string | No |
| balanceDue | float | No |
| currentAmount | float | No |
| period1Amount | float | No |
| period2Amount | float | No |
| period3Amount | float | No |
| agedAsOfDate | date | No |
| periodLengthFilter | string | No |

# Attachments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| parentId | guid | No |
| id | guid | Yes |
| fileName | string | No |
| byteSize | int | No |
| content | string | No |
| lastModifiedDateTime | date | Yes |

# BalanceSheet
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| balance | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# BankAccount
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |

# CashFlowStatement
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# Company
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| systemVersion | string | No |
| name | string | No |
| displayName | string | No |
| businessProfileId | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| items | [Item[]](#item) | Yes |
| picture | [Picture[]](#picture) | Yes |
| defaultDimensions | [DefaultDimensions[]](#defaultdimensions) | Yes |
| customers | [Customer[]](#customer) | Yes |
| customerFinancialDetails | [CustomerFinancialDetail[]](#customerfinancialdetail) | Yes |
| vendors | [Vendor[]](#vendor) | Yes |
| companyInformation | [CompanyInformation[]](#companyinformation) | Yes |
| salesInvoices | [SalesInvoice[]](#salesinvoice) | Yes |
| salesInvoiceLines | [SalesInvoiceLine[]](#salesinvoiceline) | Yes |
| pdfDocument | [PdfDocument[]](#pdfdocument) | Yes |
| customerPaymentJournals | [CustomerPaymentJournal[]](#customerpaymentjournal) | Yes |
| customerPayments | [CustomerPayment[]](#customerpayment) | Yes |
| accounts | [Account[]](#account) | Yes |
| taxGroups | [TaxGroup[]](#taxgroup) | Yes |
| journals | [Journal[]](#journal) | Yes |
| journalLines | [JournalLine[]](#journalline) | Yes |
| attachments | [Attachments[]](#attachments) | Yes |
| employees | [Employee[]](#employee) | Yes |
| timeRegistrationEntries | [TimeRegistrationEntry[]](#timeregistrationentry) | Yes |
| generalLedgerEntries | [GeneralLedgerEntry[]](#generalledgerentry) | Yes |
| currencies | [Currency[]](#currency) | Yes |
| paymentMethods | [PaymentMethod[]](#paymentmethod) | Yes |
| dimensions | [Dimension[]](#dimension) | Yes |
| dimensionValues | [DimensionValue[]](#dimensionvalue) | Yes |
| dimensionLines | [DimensionLine[]](#dimensionline) | Yes |
| paymentTerms | [PaymentTerm[]](#paymentterm) | Yes |
| shipmentMethods | [ShipmentMethod[]](#shipmentmethod) | Yes |
| itemCategories | [ItemCategory[]](#itemcategory) | Yes |
| cashFlowStatement | [CashFlowStatement[]](#cashflowstatement) | Yes |
| countriesRegions | [CountryRegion[]](#countryregion) | Yes |
| salesOrders | [SalesOrder[]](#salesorder) | Yes |
| salesOrderLines | [SalesOrderLine[]](#salesorderline) | Yes |
| retainedEarningsStatement | [RetainedEarningsStatement[]](#retainedearningsstatement) | Yes |
| unitsOfMeasure | [UnitOfMeasure[]](#unitofmeasure) | Yes |
| agedAccountsReceivable | [AgedAccountsReceivable[]](#agedaccountsreceivable) | Yes |
| agedAccountsPayable | [AgedAccountsPayable[]](#agedaccountspayable) | Yes |
| balanceSheet | [BalanceSheet[]](#balancesheet) | Yes |
| trialBalance | [TrialBalance[]](#trialbalance) | Yes |
| incomeStatement | [IncomeStatement[]](#incomestatement) | Yes |
| taxAreas | [TaxArea[]](#taxarea) | Yes |
| salesQuotes | [SalesQuote[]](#salesquote) | Yes |
| salesQuoteLines | [SalesQuoteLine[]](#salesquoteline) | Yes |
| salesCreditMemos | [SalesCreditMemo[]](#salescreditmemo) | Yes |
| salesCreditMemoLines | [SalesCreditMemoLine[]](#salescreditmemoline) | Yes |
| generalLedgerEntryAttachments | [GeneralLedgerEntryAttachments[]](#generalledgerentryattachments) | Yes |
| purchaseInvoices | [PurchaseInvoice[]](#purchaseinvoice) | Yes |
| purchaseInvoiceLines | [PurchaseInvoiceLine[]](#purchaseinvoiceline) | Yes |
| projects | [Project[]](#project) | Yes |
| bankAccounts | [BankAccount[]](#bankaccount) | Yes |
| customerSales | [CustomerSale[]](#customersale) | Yes |
| vendorPurchases | [VendorPurchase[]](#vendorpurchase) | Yes |

# CompanyInformation
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| displayName | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| faxNumber | string | No |
| email | string | No |
| website | string | No |
| taxRegistrationNumber | string | No |
| currencyCode | string | No |
| currentFiscalYearStartDate | date | No |
| industry | string | No |
| picture | string | No |
| lastModifiedDateTime | date | Yes |

# CountryRegion
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| addressFormat | string | No |
| lastModifiedDateTime | date | Yes |

# Currency
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| symbol | string | No |
| amountDecimalPlaces | string | No |
| amountRoundingPrecision | float | No |
| lastModifiedDateTime | date | Yes |

# Customer
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |
| type | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| email | string | No |
| website | string | No |
| taxLiable | bool | No |
| taxAreaId | guid | No |
| taxAreaDisplayName | string | Yes |
| taxRegistrationNumber | string | No |
| currencyId | guid | No |
| currencyCode | string | Yes |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| paymentMethodId | guid | No |
| blocked | string | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| customerFinancialDetails | [CustomerFinancialDetail[]](#customerfinancialdetail) | Yes |
| picture | [Picture[]](#picture) | Yes |
| defaultDimensions | [DefaultDimensions[]](#defaultdimensions) | Yes |
| currency | [Currency](#currency) | No |
| paymentTerm | [PaymentTerm](#paymentterm) | No |
| shipmentMethod | [ShipmentMethod](#shipmentmethod) | No |
| paymentMethod | [PaymentMethod](#paymentmethod) | No |

# CustomerFinancialDetail
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| balance | float | No |
| totalSalesExcludingTax | float | No |
| overdueAmount | float | No |

# CustomerPayment
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| journalDisplayName | string | No |
| lineNumber | int | No |
| customerId | guid | No |
| customerNumber | string | No |
| contactId | string | No |
| postingDate | date | No |
| documentNumber | string | No |
| externalDocumentNumber | string | No |
| amount | float | No |
| appliesToInvoiceId | guid | No |
| appliesToInvoiceNumber | string | No |
| description | string | No |
| comment | string | No |
| dimensions | dimensionType | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| customer | [Customer](#customer) | No |

# CustomerPaymentJournal
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |
| balancingAccountId | guid | No |
| balancingAccountNumber | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| customerPayments | [CustomerPayment[]](#customerpayment) | Yes |
| account | [Account](#account) | No |

# CustomerSale
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| customerId | guid | No |
| customerNumber | string | No |
| name | string | No |
| totalSalesAmount | float | No |
| dateFilter_FilterOnly | date | No |

# DefaultDimensions
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| parentId | guid | No |
| dimensionId | guid | No |
| dimensionCode | string | No |
| dimensionValueId | guid | No |
| dimensionValueCode | string | No |
| postingValidation | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| account | [Account](#account) | No |
| dimension | [Dimension](#dimension) | No |
| dimensionValue | [DimensionValue](#dimensionvalue) | No |

# Dimension
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| dimensionValues | [DimensionValue[]](#dimensionvalue) | Yes |

# DimensionLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| parentId | guid | No |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| valueId | guid | No |
| valueCode | string | No |
| valueDisplayName | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| dimension | [Dimension](#dimension) | No |

# DimensionValue
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |

# Employee
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |
| givenName | string | No |
| middleName | string | No |
| surname | string | No |
| jobTitle | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| mobilePhone | string | No |
| email | string | No |
| personalEmail | string | No |
| employmentDate | date | No |
| terminationDate | date | No |
| status | string | No |
| birthDate | date | No |
| statisticsGroupCode | string | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| picture | [Picture[]](#picture) | Yes |
| defaultDimensions | [DefaultDimensions[]](#defaultdimensions) | Yes |
| timeRegistrationEntries | [TimeRegistrationEntry[]](#timeregistrationentry) | Yes |

# GeneralLedgerEntry
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | int | Yes |
| postingDate | date | No |
| documentNumber | string | No |
| documentType | string | No |
| accountId | guid | No |
| accountNumber | string | No |
| description | string | No |
| debitAmount | float | No |
| creditAmount | float | No |
| dimensions | dimensionType | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| account | [Account](#account) | No |

# GeneralLedgerEntryAttachments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| generalLedgerEntryNumber | int | No |
| id | guid | Yes |
| fileName | string | No |
| byteSize | int | No |
| content | string | No |
| createdDateTime | date | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| generalLedgerEntry | [GeneralLedgerEntry](#generalledgerentry) | No |

# IncomeStatement
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# Item
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |
| type | string | No |
| itemCategoryId | guid | No |
| itemCategoryCode | string | No |
| blocked | bool | No |
| baseUnitOfMeasureId | guid | No |
| baseUnitOfMeasure | unitOfMeasureType | No |
| gtin | string | No |
| inventory | float | No |
| unitPrice | float | No |
| priceIncludesTax | bool | No |
| unitCost | float | No |
| taxGroupId | guid | No |
| taxGroupCode | string | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| picture | [Picture[]](#picture) | Yes |
| defaultDimensions | [DefaultDimensions[]](#defaultdimensions) | Yes |
| itemCategory | [ItemCategory](#itemcategory) | No |

# ItemCategory
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |

# Journal
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |
| balancingAccountId | guid | No |
| balancingAccountNumber | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| journalLines | [JournalLine[]](#journalline) | Yes |
| account | [Account](#account) | No |

# JournalLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| journalDisplayName | string | No |
| lineNumber | int | No |
| accountType | string | No |
| accountId | guid | No |
| accountNumber | string | No |
| postingDate | date | No |
| documentNumber | string | No |
| externalDocumentNumber | string | No |
| amount | float | No |
| description | string | No |
| comment | string | No |
| dimensions | dimensionType | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| attachments | [Attachments[]](#attachments) | Yes |
| account | [Account](#account) | No |

# PaymentMethod
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |

# PaymentTerm
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| dueDateCalculation | string | No |
| discountDateCalculation | string | No |
| discountPercent | float | No |
| calculateDiscountOnCreditMemos | bool | No |
| lastModifiedDateTime | date | Yes |

# PdfDocument
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| content | string | No |

# Picture
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| width | int | No |
| height | int | No |
| contentType | string | No |
| content | string | No |

# Project
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |

# PurchaseInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| invoiceDate | date | No |
| postingDate | date | No |
| dueDate | date | No |
| vendorInvoiceNumber | string | No |
| vendorId | guid | No |
| vendorNumber | string | No |
| vendorName | string | No |
| payToName | string | No |
| payToContact | string | No |
| payToVendorId | guid | No |
| payToVendorNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| buyFromAddress | postalAddressType | No |
| payToAddress | postalAddressType | No |
| shipToAddress | postalAddressType | No |
| currencyId | guid | No |
| currencyCode | string | No |
| pricesIncludeTax | bool | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseInvoiceLines | [PurchaseInvoiceLine[]](#purchaseinvoiceline) | Yes |
| pdfDocument | [PdfDocument[]](#pdfdocument) | Yes |
| vendor | [Vendor](#vendor) | No |
| currency | [Currency](#currency) | No |

# PurchaseInvoiceLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | string | Yes |
| documentId | guid | No |
| sequence | int | No |
| itemId | guid | No |
| accountId | guid | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasure | unitOfMeasureType | No |
| unitCost | float | No |
| quantity | float | No |
| discountAmount | float | No |
| discountPercent | float | No |
| discountAppliedBeforeTax | bool | No |
| amountExcludingTax | float | No |
| taxCode | string | No |
| taxPercent | float | No |
| totalTaxAmount | float | No |
| amountIncludingTax | float | No |
| invoiceDiscountAllocation | float | No |
| netAmount | float | No |
| netTaxAmount | float | No |
| netAmountIncludingTax | float | No |
| expectedReceiptDate | date | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [Item](#item) | No |
| account | [Account](#account) | No |

# RetainedEarningsStatement
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# SalesCreditMemo
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| creditMemoDate | date | No |
| postingDate | date | No |
| dueDate | date | No |
| customerId | guid | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | guid | No |
| billToCustomerNumber | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| currencyId | guid | No |
| currencyCode | string | No |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| salesperson | string | No |
| pricesIncludeTax | bool | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | date | Yes |
| invoiceId | guid | No |
| invoiceNumber | string | No |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesCreditMemoLines | [SalesCreditMemoLine[]](#salescreditmemoline) | Yes |
| pdfDocument | [PdfDocument[]](#pdfdocument) | Yes |
| customer | [Customer](#customer) | No |
| currency | [Currency](#currency) | No |
| paymentTerm | [PaymentTerm](#paymentterm) | No |
| shipmentMethod | [ShipmentMethod](#shipmentmethod) | No |

# SalesCreditMemoLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | string | Yes |
| documentId | guid | No |
| sequence | int | No |
| itemId | guid | No |
| accountId | guid | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | guid | No |
| unitOfMeasure | unitOfMeasureType | No |
| unitPrice | float | No |
| quantity | float | No |
| discountAmount | float | No |
| discountPercent | float | No |
| discountAppliedBeforeTax | bool | No |
| amountExcludingTax | float | No |
| taxCode | string | No |
| taxPercent | float | No |
| totalTaxAmount | float | No |
| amountIncludingTax | float | No |
| invoiceDiscountAllocation | float | No |
| netAmount | float | No |
| netTaxAmount | float | No |
| netAmountIncludingTax | float | No |
| shipmentDate | date | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [Item](#item) | No |
| account | [Account](#account) | No |

# SalesInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| invoiceDate | date | No |
| postingDate | date | No |
| dueDate | date | No |
| customerPurchaseOrderReference | string | No |
| customerId | guid | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | guid | No |
| billToCustomerNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| shippingPostalAddress | postalAddressType | No |
| currencyId | guid | No |
| currencyCode | string | No |
| orderId | guid | No |
| orderNumber | string | No |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| salesperson | string | No |
| pricesIncludeTax | bool | No |
| remainingAmount | float | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | date | Yes |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesInvoiceLines | [SalesInvoiceLine[]](#salesinvoiceline) | Yes |
| pdfDocument | [PdfDocument[]](#pdfdocument) | Yes |
| customer | [Customer](#customer) | No |
| currency | [Currency](#currency) | No |
| paymentTerm | [PaymentTerm](#paymentterm) | No |
| shipmentMethod | [ShipmentMethod](#shipmentmethod) | No |

# SalesInvoiceLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | string | Yes |
| documentId | guid | No |
| sequence | int | No |
| itemId | guid | No |
| accountId | guid | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | guid | No |
| unitOfMeasure | unitOfMeasureType | No |
| unitPrice | float | No |
| quantity | float | No |
| discountAmount | float | No |
| discountPercent | float | No |
| discountAppliedBeforeTax | bool | No |
| amountExcludingTax | float | No |
| taxCode | string | No |
| taxPercent | float | No |
| totalTaxAmount | float | No |
| amountIncludingTax | float | No |
| invoiceDiscountAllocation | float | No |
| netAmount | float | No |
| netTaxAmount | float | No |
| netAmountIncludingTax | float | No |
| shipmentDate | date | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [Item](#item) | No |
| account | [Account](#account) | No |

# SalesOrder
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| orderDate | date | No |
| postingDate | date | No |
| customerId | guid | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | guid | No |
| billToCustomerNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| shippingPostalAddress | postalAddressType | No |
| currencyId | guid | No |
| currencyCode | string | No |
| pricesIncludeTax | bool | No |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| salesperson | string | No |
| partialShipping | bool | No |
| requestedDeliveryDate | date | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| fullyShipped | bool | No |
| status | string | No |
| lastModifiedDateTime | date | Yes |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesOrderLines | [SalesOrderLine[]](#salesorderline) | Yes |
| customer | [Customer](#customer) | No |
| currency | [Currency](#currency) | No |
| paymentTerm | [PaymentTerm](#paymentterm) | No |
| shipmentMethod | [ShipmentMethod](#shipmentmethod) | No |

# SalesOrderLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | string | Yes |
| documentId | guid | No |
| sequence | int | No |
| itemId | guid | No |
| accountId | guid | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | guid | No |
| unitOfMeasure | unitOfMeasureType | No |
| quantity | float | No |
| unitPrice | float | No |
| discountAmount | float | No |
| discountPercent | float | No |
| discountAppliedBeforeTax | bool | No |
| amountExcludingTax | float | No |
| taxCode | string | No |
| taxPercent | float | No |
| totalTaxAmount | float | No |
| amountIncludingTax | float | No |
| invoiceDiscountAllocation | float | No |
| netAmount | float | No |
| netTaxAmount | float | No |
| netAmountIncludingTax | float | No |
| shipmentDate | date | No |
| shippedQuantity | float | No |
| invoicedQuantity | float | No |
| invoiceQuantity | float | No |
| shipQuantity | float | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [Item](#item) | No |
| account | [Account](#account) | No |

# SalesQuote
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| documentDate | date | No |
| postingDate | date | No |
| dueDate | date | No |
| customerId | guid | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | guid | No |
| billToCustomerNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| shippingPostalAddress | postalAddressType | No |
| currencyId | guid | No |
| currencyCode | string | No |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| salesperson | string | No |
| discountAmount | float | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| sentDate | date | No |
| validUntilDate | date | No |
| acceptedDate | date | No |
| lastModifiedDateTime | date | Yes |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesQuoteLines | [SalesQuoteLine[]](#salesquoteline) | Yes |
| pdfDocument | [PdfDocument[]](#pdfdocument) | Yes |
| customer | [Customer](#customer) | No |
| currency | [Currency](#currency) | No |
| paymentTerm | [PaymentTerm](#paymentterm) | No |
| shipmentMethod | [ShipmentMethod](#shipmentmethod) | No |

# SalesQuoteLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | string | Yes |
| documentId | guid | No |
| sequence | int | No |
| itemId | guid | No |
| accountId | guid | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | guid | No |
| unitOfMeasure | unitOfMeasureType | No |
| unitPrice | float | No |
| quantity | float | No |
| discountAmount | float | No |
| discountPercent | float | No |
| discountAppliedBeforeTax | bool | No |
| amountExcludingTax | float | No |
| taxCode | string | No |
| taxPercent | float | No |
| totalTaxAmount | float | No |
| amountIncludingTax | float | No |
| netAmount | float | No |
| netTaxAmount | float | No |
| netAmountIncludingTax | float | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [Item](#item) | No |
| account | [Account](#account) | No |

# ShipmentMethod
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |

# Subscriptions
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| subscriptionId | string | No |
| notificationUrl | string | No |
| resource | string | No |
| userId | guid | No |
| lastModifiedDateTime | date | Yes |
| clientState | string | No |
| expirationDateTime | date | No |

# TaxArea
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| taxType | string | No |
| lastModifiedDateTime | date | Yes |

# TaxGroup
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| taxType | string | No |
| lastModifiedDateTime | date | Yes |

# TimeRegistrationEntry
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| employeeId | guid | No |
| employeeNumber | string | No |
| jobId | guid | No |
| jobNumber | string | No |
| absence | string | No |
| lineNumber | int | No |
| date | date | No |
| quantity | float | No |
| status | string | No |
| unitOfMeasureId | guid | No |
| unitOfMeasure | unitOfMeasureType | No |
| dimensions | dimensionType | No |
| lastModfiedDateTime | date | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| project | [Project](#project) | No |

# TrialBalance
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| number | string | No |
| accountId | guid | No |
| accountType | string | No |
| display | string | No |
| totalDebit | string | No |
| totalCredit | string | No |
| balanceAtDateDebit | string | No |
| balanceAtDateCredit | string | No |
| dateFilter | date | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| account | [Account](#account) | No |

# UnitOfMeasure
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| internationalStandardCode | string | No |
| lastModifiedDateTime | date | Yes |

# Vendor
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| email | string | No |
| website | string | No |
| taxRegistrationNumber | string | No |
| currencyId | guid | No |
| currencyCode | string | No |
| irs1099Code | string | No |
| paymentTermsId | guid | No |
| paymentMethodId | guid | No |
| taxLiable | bool | No |
| blocked | string | No |
| balance | float | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| picture | [Picture[]](#picture) | Yes |
| defaultDimensions | [DefaultDimensions[]](#defaultdimensions) | Yes |
| currency | [Currency](#currency) | No |
| paymentTerm | [PaymentTerm](#paymentterm) | No |
| paymentMethod | [PaymentMethod](#paymentmethod) | No |

# VendorPurchase
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| vendorId | guid | No |
| vendorNumber | string | No |
| name | string | No |
| totalPurchaseAmount | float | No |
| dateFilter_FilterOnly | date | No |


---
Generated on 2020-05-11 17:35:34
