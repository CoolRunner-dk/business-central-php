# Account
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| displayName | string | No |
| category | string | No |
| subCategory | string | No |
| blocked | bool | No |
| lastModifiedDateTime | string | Yes |

# AgedAccountsPayable
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| vendorId | string | No |
| vendorNumber | string | No |
| name | string | No |
| currencyCode | string | No |
| balanceDue | float | No |
| currentAmount | float | No |
| period1Amount | float | No |
| period2Amount | float | No |
| period3Amount | float | No |
| agedAsOfDate | string | No |
| periodLengthFilter | string | No |

# AgedAccountsReceivable
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| customerId | string | No |
| customerNumber | string | No |
| name | string | No |
| currencyCode | string | No |
| balanceDue | float | No |
| currentAmount | float | No |
| period1Amount | float | No |
| period2Amount | float | No |
| period3Amount | float | No |
| agedAsOfDate | string | No |
| periodLengthFilter | string | No |

# Attachments
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| parentId | string | No |
| id | string | Yes |
| fileName | string | No |
| byteSize | int | No |
| content | string | No |
| lastModifiedDateTime | string | Yes |

# BalanceSheet
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| lineNumber | int | No |
| display | string | No |
| balance | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | string | No |

# BankAccount
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| displayName | string | No |

# CashFlowStatement
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | string | No |

# Company
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| systemVersion | string | No |
| name | string | No |
| displayName | string | No |
| businessProfileId | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| items | [item](#Item) | Yes |
| picture | [picture](#Picture) | Yes |
| defaultDimensions | [defaultdimensions](#DefaultDimensions) | Yes |
| customers | [customer](#Customer) | Yes |
| customerFinancialDetails | [customerfinancialdetail](#CustomerFinancialDetail) | Yes |
| vendors | [vendor](#Vendor) | Yes |
| companyInformation | [companyinformation](#CompanyInformation) | Yes |
| salesInvoices | [salesinvoice](#SalesInvoice) | Yes |
| salesInvoiceLines | [salesinvoiceline](#SalesInvoiceLine) | Yes |
| pdfDocument | [pdfdocument](#PdfDocument) | Yes |
| customerPaymentJournals | [customerpaymentjournal](#CustomerPaymentJournal) | Yes |
| customerPayments | [customerpayment](#CustomerPayment) | Yes |
| accounts | [account](#Account) | Yes |
| taxGroups | [taxgroup](#TaxGroup) | Yes |
| journals | [journal](#Journal) | Yes |
| journalLines | [journalline](#JournalLine) | Yes |
| attachments | [attachments](#Attachments) | Yes |
| employees | [employee](#Employee) | Yes |
| timeRegistrationEntries | [timeregistrationentry](#TimeRegistrationEntry) | Yes |
| generalLedgerEntries | [generalledgerentry](#GeneralLedgerEntry) | Yes |
| currencies | [currency](#Currency) | Yes |
| paymentMethods | [paymentmethod](#PaymentMethod) | Yes |
| dimensions | [dimension](#Dimension) | Yes |
| dimensionValues | [dimensionvalue](#DimensionValue) | Yes |
| dimensionLines | [dimensionline](#DimensionLine) | Yes |
| paymentTerms | [paymentterm](#PaymentTerm) | Yes |
| shipmentMethods | [shipmentmethod](#ShipmentMethod) | Yes |
| itemCategories | [itemcategory](#ItemCategory) | Yes |
| cashFlowStatement | [cashflowstatement](#CashFlowStatement) | Yes |
| countriesRegions | [countryregion](#CountryRegion) | Yes |
| salesOrders | [salesorder](#SalesOrder) | Yes |
| salesOrderLines | [salesorderline](#SalesOrderLine) | Yes |
| retainedEarningsStatement | [retainedearningsstatement](#RetainedEarningsStatement) | Yes |
| unitsOfMeasure | [unitofmeasure](#UnitOfMeasure) | Yes |
| agedAccountsReceivable | [agedaccountsreceivable](#AgedAccountsReceivable) | Yes |
| agedAccountsPayable | [agedaccountspayable](#AgedAccountsPayable) | Yes |
| balanceSheet | [balancesheet](#BalanceSheet) | Yes |
| trialBalance | [trialbalance](#TrialBalance) | Yes |
| incomeStatement | [incomestatement](#IncomeStatement) | Yes |
| taxAreas | [taxarea](#TaxArea) | Yes |
| salesQuotes | [salesquote](#SalesQuote) | Yes |
| salesQuoteLines | [salesquoteline](#SalesQuoteLine) | Yes |
| salesCreditMemos | [salescreditmemo](#SalesCreditMemo) | Yes |
| salesCreditMemoLines | [salescreditmemoline](#SalesCreditMemoLine) | Yes |
| generalLedgerEntryAttachments | [generalledgerentryattachments](#GeneralLedgerEntryAttachments) | Yes |
| purchaseInvoices | [purchaseinvoice](#PurchaseInvoice) | Yes |
| purchaseInvoiceLines | [purchaseinvoiceline](#PurchaseInvoiceLine) | Yes |
| projects | [project](#Project) | Yes |
| bankAccounts | [bankaccount](#BankAccount) | Yes |
| customerSales | [customersale](#CustomerSale) | Yes |
| vendorPurchases | [vendorpurchase](#VendorPurchase) | Yes |

# CompanyInformation
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| displayName | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| faxNumber | string | No |
| email | string | No |
| website | string | No |
| taxRegistrationNumber | string | No |
| currencyCode | string | No |
| currentFiscalYearStartDate | string | No |
| industry | string | No |
| picture | string | No |
| lastModifiedDateTime | string | Yes |

# CountryRegion
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| addressFormat | string | No |
| lastModifiedDateTime | string | Yes |

# Currency
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| symbol | string | No |
| amountDecimalPlaces | string | No |
| amountRoundingPrecision | float | No |
| lastModifiedDateTime | string | Yes |

# Customer
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| displayName | string | No |
| type | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| email | string | No |
| website | string | No |
| taxLiable | bool | No |
| taxAreaId | string | No |
| taxAreaDisplayName | string | Yes |
| taxRegistrationNumber | string | No |
| currencyId | string | No |
| currencyCode | string | No |
| paymentTermsId | string | No |
| shipmentMethodId | string | No |
| paymentMethodId | string | No |
| blocked | string | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| customerFinancialDetails | [customerfinancialdetail](#CustomerFinancialDetail) | Yes |
| picture | [picture](#Picture) | Yes |
| defaultDimensions | [defaultdimensions](#DefaultDimensions) | Yes |
| currency | [currency](#Currency) | No |
| paymentTerm | [paymentterm](#PaymentTerm) | No |
| shipmentMethod | [shipmentmethod](#ShipmentMethod) | No |
| paymentMethod | [paymentmethod](#PaymentMethod) | No |

# CustomerFinancialDetail
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| balance | float | No |
| totalSalesExcludingTax | float | No |
| overdueAmount | float | No |

# CustomerPayment
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| journalDisplayName | string | No |
| lineNumber | int | No |
| customerId | string | No |
| customerNumber | string | No |
| contactId | string | No |
| postingDate | string | No |
| documentNumber | string | No |
| externalDocumentNumber | string | No |
| amount | float | No |
| appliesToInvoiceId | string | No |
| appliesToInvoiceNumber | string | No |
| description | string | No |
| comment | string | No |
| dimensions | dimensionType | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| customer | [customer](#Customer) | No |

# CustomerPaymentJournal
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |
| balancingAccountId | string | No |
| balancingAccountNumber | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| customerPayments | [customerpayment](#CustomerPayment) | Yes |
| account | [account](#Account) | No |

# CustomerSale
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| customerId | string | No |
| customerNumber | string | No |
| name | string | No |
| totalSalesAmount | float | No |
| dateFilter_FilterOnly | string | No |

# DefaultDimensions
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| parentId | string | No |
| dimensionId | string | No |
| dimensionCode | string | No |
| dimensionValueId | string | No |
| dimensionValueCode | string | No |
| postingValidation | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| account | [account](#Account) | No |
| dimension | [dimension](#Dimension) | No |
| dimensionValue | [dimensionvalue](#DimensionValue) | No |

# Dimension
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| dimensionValues | [dimensionvalue](#DimensionValue) | Yes |

# DimensionLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| parentId | string | No |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| valueId | string | No |
| valueCode | string | No |
| valueDisplayName | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| dimension | [dimension](#Dimension) | No |

# DimensionValue
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |

# Employee
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
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
| employmentDate | string | No |
| terminationDate | string | No |
| status | string | No |
| birthDate | string | No |
| statisticsGroupCode | string | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| picture | [picture](#Picture) | Yes |
| defaultDimensions | [defaultdimensions](#DefaultDimensions) | Yes |
| timeRegistrationEntries | [timeregistrationentry](#TimeRegistrationEntry) | Yes |

# GeneralLedgerEntry
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | int | Yes |
| postingDate | string | No |
| documentNumber | string | No |
| documentType | string | No |
| accountId | string | No |
| accountNumber | string | No |
| description | string | No |
| debitAmount | float | No |
| creditAmount | float | No |
| dimensions | dimensionType | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| account | [account](#Account) | No |

# GeneralLedgerEntryAttachments
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| generalLedgerEntryNumber | int | No |
| id | string | Yes |
| fileName | string | No |
| byteSize | int | No |
| content | string | No |
| createdDateTime | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| generalLedgerEntry | [generalledgerentry](#GeneralLedgerEntry) | No |

# IncomeStatement
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | string | No |

# Item
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| displayName | string | No |
| type | string | No |
| itemCategoryId | string | No |
| itemCategoryCode | string | No |
| blocked | bool | No |
| baseUnitOfMeasureId | string | No |
| baseUnitOfMeasure | unitOfMeasureType | No |
| gtin | string | No |
| inventory | float | No |
| unitPrice | float | No |
| priceIncludesTax | bool | No |
| unitCost | float | No |
| taxGroupId | string | No |
| taxGroupCode | string | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| picture | [picture](#Picture) | Yes |
| defaultDimensions | [defaultdimensions](#DefaultDimensions) | Yes |
| itemCategory | [itemcategory](#ItemCategory) | No |

# ItemCategory
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |

# Journal
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |
| balancingAccountId | string | No |
| balancingAccountNumber | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| journalLines | [journalline](#JournalLine) | Yes |
| account | [account](#Account) | No |

# JournalLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| journalDisplayName | string | No |
| lineNumber | int | No |
| accountType | string | No |
| accountId | string | No |
| accountNumber | string | No |
| postingDate | string | No |
| documentNumber | string | No |
| externalDocumentNumber | string | No |
| amount | float | No |
| description | string | No |
| comment | string | No |
| dimensions | dimensionType | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| attachments | [attachments](#Attachments) | Yes |
| account | [account](#Account) | No |

# PaymentMethod
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |

# PaymentTerm
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| dueDateCalculation | string | No |
| discountDateCalculation | string | No |
| discountPercent | float | No |
| calculateDiscountOnCreditMemos | bool | No |
| lastModifiedDateTime | string | Yes |

# PdfDocument
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| content | string | No |

# Picture
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| width | int | No |
| height | int | No |
| contentType | string | No |
| content | string | No |

# Project
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| displayName | string | No |

# PurchaseInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| invoiceDate | string | No |
| postingDate | string | No |
| dueDate | string | No |
| vendorInvoiceNumber | string | No |
| vendorId | string | No |
| vendorNumber | string | No |
| vendorName | string | No |
| payToName | string | No |
| payToContact | string | No |
| payToVendorId | string | No |
| payToVendorNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| buyFromAddress | postalAddressType | No |
| payToAddress | postalAddressType | No |
| shipToAddress | postalAddressType | No |
| currencyId | string | No |
| currencyCode | string | No |
| pricesIncludeTax | bool | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseInvoiceLines | [purchaseinvoiceline](#PurchaseInvoiceLine) | Yes |
| pdfDocument | [pdfdocument](#PdfDocument) | Yes |
| vendor | [vendor](#Vendor) | No |
| currency | [currency](#Currency) | No |

# PurchaseInvoiceLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| documentId | string | No |
| sequence | int | No |
| itemId | string | No |
| accountId | string | No |
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
| expectedReceiptDate | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [item](#Item) | No |
| account | [account](#Account) | No |

# RetainedEarningsStatement
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | string | No |

# SalesCreditMemo
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| creditMemoDate | string | No |
| postingDate | string | No |
| dueDate | string | No |
| customerId | string | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | string | No |
| billToCustomerNumber | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| currencyId | string | No |
| currencyCode | string | No |
| paymentTermsId | string | No |
| shipmentMethodId | string | No |
| salesperson | string | No |
| pricesIncludeTax | bool | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | string | Yes |
| invoiceId | string | No |
| invoiceNumber | string | No |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesCreditMemoLines | [salescreditmemoline](#SalesCreditMemoLine) | Yes |
| pdfDocument | [pdfdocument](#PdfDocument) | Yes |
| customer | [customer](#Customer) | No |
| currency | [currency](#Currency) | No |
| paymentTerm | [paymentterm](#PaymentTerm) | No |
| shipmentMethod | [shipmentmethod](#ShipmentMethod) | No |

# SalesCreditMemoLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| documentId | string | No |
| sequence | int | No |
| itemId | string | No |
| accountId | string | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | string | No |
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
| shipmentDate | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [item](#Item) | No |
| account | [account](#Account) | No |

# SalesInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| invoiceDate | string | No |
| postingDate | string | No |
| dueDate | string | No |
| customerPurchaseOrderReference | string | No |
| customerId | string | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | string | No |
| billToCustomerNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| shippingPostalAddress | postalAddressType | No |
| currencyId | string | No |
| currencyCode | string | No |
| orderId | string | No |
| orderNumber | string | No |
| paymentTermsId | string | No |
| shipmentMethodId | string | No |
| salesperson | string | No |
| pricesIncludeTax | bool | No |
| remainingAmount | float | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | string | Yes |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesInvoiceLines | [salesinvoiceline](#SalesInvoiceLine) | Yes |
| pdfDocument | [pdfdocument](#PdfDocument) | Yes |
| customer | [customer](#Customer) | No |
| currency | [currency](#Currency) | No |
| paymentTerm | [paymentterm](#PaymentTerm) | No |
| shipmentMethod | [shipmentmethod](#ShipmentMethod) | No |

# SalesInvoiceLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| documentId | string | No |
| sequence | int | No |
| itemId | string | No |
| accountId | string | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | string | No |
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
| shipmentDate | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [item](#Item) | No |
| account | [account](#Account) | No |

# SalesOrder
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| orderDate | string | No |
| postingDate | string | No |
| customerId | string | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | string | No |
| billToCustomerNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| shippingPostalAddress | postalAddressType | No |
| currencyId | string | No |
| currencyCode | string | No |
| pricesIncludeTax | bool | No |
| paymentTermsId | string | No |
| shipmentMethodId | string | No |
| salesperson | string | No |
| partialShipping | bool | No |
| requestedDeliveryDate | string | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| fullyShipped | bool | No |
| status | string | No |
| lastModifiedDateTime | string | Yes |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesOrderLines | [salesorderline](#SalesOrderLine) | Yes |
| customer | [customer](#Customer) | No |
| currency | [currency](#Currency) | No |
| paymentTerm | [paymentterm](#PaymentTerm) | No |
| shipmentMethod | [shipmentmethod](#ShipmentMethod) | No |

# SalesOrderLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| documentId | string | No |
| sequence | int | No |
| itemId | string | No |
| accountId | string | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | string | No |
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
| shipmentDate | string | No |
| shippedQuantity | float | No |
| invoicedQuantity | float | No |
| invoiceQuantity | float | No |
| shipQuantity | float | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| item | [item](#Item) | No |
| account | [account](#Account) | No |

# SalesQuote
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| externalDocumentNumber | string | No |
| documentDate | string | No |
| postingDate | string | No |
| dueDate | string | No |
| customerId | string | No |
| contactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| billToName | string | No |
| billToCustomerId | string | No |
| billToCustomerNumber | string | No |
| shipToName | string | No |
| shipToContact | string | No |
| sellingPostalAddress | postalAddressType | No |
| billingPostalAddress | postalAddressType | No |
| shippingPostalAddress | postalAddressType | No |
| currencyId | string | No |
| currencyCode | string | No |
| paymentTermsId | string | No |
| shipmentMethodId | string | No |
| salesperson | string | No |
| discountAmount | float | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| sentDate | string | No |
| validUntilDate | string | No |
| acceptedDate | string | No |
| lastModifiedDateTime | string | Yes |
| phoneNumber | string | No |
| email | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesQuoteLines | [salesquoteline](#SalesQuoteLine) | Yes |
| pdfDocument | [pdfdocument](#PdfDocument) | Yes |
| customer | [customer](#Customer) | No |
| currency | [currency](#Currency) | No |
| paymentTerm | [paymentterm](#PaymentTerm) | No |
| shipmentMethod | [shipmentmethod](#ShipmentMethod) | No |

# SalesQuoteLine
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| documentId | string | No |
| sequence | int | No |
| itemId | string | No |
| accountId | string | No |
| lineType | string | No |
| lineDetails | documentLineObjectDetailsType | No |
| description | string | No |
| unitOfMeasureId | string | No |
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
| item | [item](#Item) | No |
| account | [account](#Account) | No |

# ShipmentMethod
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |

# Subscriptions
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| subscriptionId | string | No |
| notificationUrl | string | No |
| resource | string | No |
| userId | string | No |
| lastModifiedDateTime | string | Yes |
| clientState | string | No |
| expirationDateTime | string | No |

# TaxArea
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| taxType | string | No |
| lastModifiedDateTime | string | Yes |

# TaxGroup
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| taxType | string | No |
| lastModifiedDateTime | string | Yes |

# TimeRegistrationEntry
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| employeeId | string | No |
| employeeNumber | string | No |
| jobId | string | No |
| jobNumber | string | No |
| absence | string | No |
| lineNumber | int | No |
| date | string | No |
| quantity | float | No |
| status | string | No |
| unitOfMeasureId | string | No |
| unitOfMeasure | unitOfMeasureType | No |
| dimensions | dimensionType | No |
| lastModfiedDateTime | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| project | [project](#Project) | No |

# TrialBalance
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| number | string | No |
| accountId | string | No |
| accountType | string | No |
| display | string | No |
| totalDebit | string | No |
| totalCredit | string | No |
| balanceAtDateDebit | string | No |
| balanceAtDateCredit | string | No |
| dateFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| account | [account](#Account) | No |

# UnitOfMeasure
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| internationalStandardCode | string | No |
| lastModifiedDateTime | string | Yes |

# Vendor
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| number | string | No |
| displayName | string | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| email | string | No |
| website | string | No |
| taxRegistrationNumber | string | No |
| currencyId | string | No |
| currencyCode | string | No |
| irs1099Code | string | No |
| paymentTermsId | string | No |
| paymentMethodId | string | No |
| taxLiable | bool | No |
| blocked | string | No |
| balance | float | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| picture | [picture](#Picture) | Yes |
| defaultDimensions | [defaultdimensions](#DefaultDimensions) | Yes |
| currency | [currency](#Currency) | No |
| paymentTerm | [paymentterm](#PaymentTerm) | No |
| paymentMethod | [paymentmethod](#PaymentMethod) | No |

# VendorPurchase
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| vendorId | string | No |
| vendorNumber | string | No |
| name | string | No |
| totalPurchaseAmount | float | No |
| dateFilter_FilterOnly | string | No |

