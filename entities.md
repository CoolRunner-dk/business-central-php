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
| Item | [item](#items) | Yes |
| Picture | [picture](#picture) | Yes |
| DefaultDimensions | [defaultdimensions](#defaultDimensions) | Yes |
| Customer | [customer](#customers) | Yes |
| CustomerFinancialDetail | [customerfinancialdetail](#customerFinancialDetails) | Yes |
| Vendor | [vendor](#vendors) | Yes |
| CompanyInformation | [companyinformation](#companyInformation) | Yes |
| SalesInvoice | [salesinvoice](#salesInvoices) | Yes |
| SalesInvoiceLine | [salesinvoiceline](#salesInvoiceLines) | Yes |
| PdfDocument | [pdfdocument](#pdfDocument) | Yes |
| CustomerPaymentJournal | [customerpaymentjournal](#customerPaymentJournals) | Yes |
| CustomerPayment | [customerpayment](#customerPayments) | Yes |
| Account | [account](#accounts) | Yes |
| TaxGroup | [taxgroup](#taxGroups) | Yes |
| Journal | [journal](#journals) | Yes |
| JournalLine | [journalline](#journalLines) | Yes |
| Attachments | [attachments](#attachments) | Yes |
| Employee | [employee](#employees) | Yes |
| TimeRegistrationEntry | [timeregistrationentry](#timeRegistrationEntries) | Yes |
| GeneralLedgerEntry | [generalledgerentry](#generalLedgerEntries) | Yes |
| Currency | [currency](#currencies) | Yes |
| PaymentMethod | [paymentmethod](#paymentMethods) | Yes |
| Dimension | [dimension](#dimensions) | Yes |
| DimensionValue | [dimensionvalue](#dimensionValues) | Yes |
| DimensionLine | [dimensionline](#dimensionLines) | Yes |
| PaymentTerm | [paymentterm](#paymentTerms) | Yes |
| ShipmentMethod | [shipmentmethod](#shipmentMethods) | Yes |
| ItemCategory | [itemcategory](#itemCategories) | Yes |
| CashFlowStatement | [cashflowstatement](#cashFlowStatement) | Yes |
| CountryRegion | [countryregion](#countriesRegions) | Yes |
| SalesOrder | [salesorder](#salesOrders) | Yes |
| SalesOrderLine | [salesorderline](#salesOrderLines) | Yes |
| RetainedEarningsStatement | [retainedearningsstatement](#retainedEarningsStatement) | Yes |
| UnitOfMeasure | [unitofmeasure](#unitsOfMeasure) | Yes |
| AgedAccountsReceivable | [agedaccountsreceivable](#agedAccountsReceivable) | Yes |
| AgedAccountsPayable | [agedaccountspayable](#agedAccountsPayable) | Yes |
| BalanceSheet | [balancesheet](#balanceSheet) | Yes |
| TrialBalance | [trialbalance](#trialBalance) | Yes |
| IncomeStatement | [incomestatement](#incomeStatement) | Yes |
| TaxArea | [taxarea](#taxAreas) | Yes |
| SalesQuote | [salesquote](#salesQuotes) | Yes |
| SalesQuoteLine | [salesquoteline](#salesQuoteLines) | Yes |
| SalesCreditMemo | [salescreditmemo](#salesCreditMemos) | Yes |
| SalesCreditMemoLine | [salescreditmemoline](#salesCreditMemoLines) | Yes |
| GeneralLedgerEntryAttachments | [generalledgerentryattachments](#generalLedgerEntryAttachments) | Yes |
| PurchaseInvoice | [purchaseinvoice](#purchaseInvoices) | Yes |
| PurchaseInvoiceLine | [purchaseinvoiceline](#purchaseInvoiceLines) | Yes |
| Project | [project](#projects) | Yes |
| BankAccount | [bankaccount](#bankAccounts) | Yes |
| CustomerSale | [customersale](#customerSales) | Yes |
| VendorPurchase | [vendorpurchase](#vendorPurchases) | Yes |

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
| CustomerFinancialDetail | [customerfinancialdetail](#customerFinancialDetails) | Yes |
| Picture | [picture](#picture) | Yes |
| DefaultDimensions | [defaultdimensions](#defaultDimensions) | Yes |
| Currency | [currency](#currency) | No |
| PaymentTerm | [paymentterm](#paymentTerm) | No |
| ShipmentMethod | [shipmentmethod](#shipmentMethod) | No |
| PaymentMethod | [paymentmethod](#paymentMethod) | No |

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
| Customer | [customer](#customer) | No |

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
| CustomerPayment | [customerpayment](#customerPayments) | Yes |
| Account | [account](#account) | No |

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
| Account | [account](#account) | No |
| Dimension | [dimension](#dimension) | No |
| DimensionValue | [dimensionvalue](#dimensionValue) | No |

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
| DimensionValue | [dimensionvalue](#dimensionValues) | Yes |

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
| Dimension | [dimension](#dimension) | No |

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
| Picture | [picture](#picture) | Yes |
| DefaultDimensions | [defaultdimensions](#defaultDimensions) | Yes |
| TimeRegistrationEntry | [timeregistrationentry](#timeRegistrationEntries) | Yes |

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
| Account | [account](#account) | No |

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
| GeneralLedgerEntry | [generalledgerentry](#generalLedgerEntry) | No |

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
| Picture | [picture](#picture) | Yes |
| DefaultDimensions | [defaultdimensions](#defaultDimensions) | Yes |
| ItemCategory | [itemcategory](#itemCategory) | No |

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
| JournalLine | [journalline](#journalLines) | Yes |
| Account | [account](#account) | No |

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
| Attachments | [attachments](#attachments) | Yes |
| Account | [account](#account) | No |

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
| PurchaseInvoiceLine | [purchaseinvoiceline](#purchaseInvoiceLines) | Yes |
| PdfDocument | [pdfdocument](#pdfDocument) | Yes |
| Vendor | [vendor](#vendor) | No |
| Currency | [currency](#currency) | No |

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
| Item | [item](#item) | No |
| Account | [account](#account) | No |

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
| SalesCreditMemoLine | [salescreditmemoline](#salesCreditMemoLines) | Yes |
| PdfDocument | [pdfdocument](#pdfDocument) | Yes |
| Customer | [customer](#customer) | No |
| Currency | [currency](#currency) | No |
| PaymentTerm | [paymentterm](#paymentTerm) | No |
| ShipmentMethod | [shipmentmethod](#shipmentMethod) | No |

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
| Item | [item](#item) | No |
| Account | [account](#account) | No |

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
| SalesInvoiceLine | [salesinvoiceline](#salesInvoiceLines) | Yes |
| PdfDocument | [pdfdocument](#pdfDocument) | Yes |
| Customer | [customer](#customer) | No |
| Currency | [currency](#currency) | No |
| PaymentTerm | [paymentterm](#paymentTerm) | No |
| ShipmentMethod | [shipmentmethod](#shipmentMethod) | No |

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
| Item | [item](#item) | No |
| Account | [account](#account) | No |

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
| SalesOrderLine | [salesorderline](#salesOrderLines) | Yes |
| Customer | [customer](#customer) | No |
| Currency | [currency](#currency) | No |
| PaymentTerm | [paymentterm](#paymentTerm) | No |
| ShipmentMethod | [shipmentmethod](#shipmentMethod) | No |

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
| Item | [item](#item) | No |
| Account | [account](#account) | No |

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
| SalesQuoteLine | [salesquoteline](#salesQuoteLines) | Yes |
| PdfDocument | [pdfdocument](#pdfDocument) | Yes |
| Customer | [customer](#customer) | No |
| Currency | [currency](#currency) | No |
| PaymentTerm | [paymentterm](#paymentTerm) | No |
| ShipmentMethod | [shipmentmethod](#shipmentMethod) | No |

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
| Item | [item](#item) | No |
| Account | [account](#account) | No |

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
| Project | [project](#project) | No |

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
| Account | [account](#account) | No |

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
| Picture | [picture](#picture) | Yes |
| DefaultDimensions | [defaultdimensions](#defaultDimensions) | Yes |
| Currency | [currency](#currency) | No |
| PaymentTerm | [paymentterm](#paymentTerm) | No |
| PaymentMethod | [paymentmethod](#paymentMethod) | No |

# VendorPurchase
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| vendorId | string | No |
| vendorNumber | string | No |
| name | string | No |
| totalPurchaseAmount | float | No |
| dateFilter_FilterOnly | string | No |

