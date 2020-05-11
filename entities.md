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
| Name | Type |
| --- | --- |
| items | Item |
| picture | Picture |
| defaultDimensions | DefaultDimensions |
| customers | Customer |
| customerFinancialDetails | CustomerFinancialDetail |
| vendors | Vendor |
| companyInformation | CompanyInformation |
| salesInvoices | SalesInvoice |
| salesInvoiceLines | SalesInvoiceLine |
| pdfDocument | PdfDocument |
| customerPaymentJournals | CustomerPaymentJournal |
| customerPayments | CustomerPayment |
| accounts | Account |
| taxGroups | TaxGroup |
| journals | Journal |
| journalLines | JournalLine |
| attachments | Attachments |
| employees | Employee |
| timeRegistrationEntries | TimeRegistrationEntry |
| generalLedgerEntries | GeneralLedgerEntry |
| currencies | Currency |
| paymentMethods | PaymentMethod |
| dimensions | Dimension |
| dimensionValues | DimensionValue |
| dimensionLines | DimensionLine |
| paymentTerms | PaymentTerm |
| shipmentMethods | ShipmentMethod |
| itemCategories | ItemCategory |
| cashFlowStatement | CashFlowStatement |
| countriesRegions | CountryRegion |
| salesOrders | SalesOrder |
| salesOrderLines | SalesOrderLine |
| retainedEarningsStatement | RetainedEarningsStatement |
| unitsOfMeasure | UnitOfMeasure |
| agedAccountsReceivable | AgedAccountsReceivable |
| agedAccountsPayable | AgedAccountsPayable |
| balanceSheet | BalanceSheet |
| trialBalance | TrialBalance |
| incomeStatement | IncomeStatement |
| taxAreas | TaxArea |
| salesQuotes | SalesQuote |
| salesQuoteLines | SalesQuoteLine |
| salesCreditMemos | SalesCreditMemo |
| salesCreditMemoLines | SalesCreditMemoLine |
| generalLedgerEntryAttachments | GeneralLedgerEntryAttachments |
| purchaseInvoices | PurchaseInvoice |
| purchaseInvoiceLines | PurchaseInvoiceLine |
| projects | Project |
| bankAccounts | BankAccount |
| customerSales | CustomerSale |
| vendorPurchases | VendorPurchase |

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
| Name | Type |
| --- | --- |
| customerFinancialDetails | CustomerFinancialDetail |
| picture | Picture |
| defaultDimensions | DefaultDimensions |
| currency | Currency |
| paymentTerm | PaymentTerm |
| shipmentMethod | ShipmentMethod |
| paymentMethod | PaymentMethod |

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
| Name | Type |
| --- | --- |
| customer | Customer |

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
| Name | Type |
| --- | --- |
| customerPayments | CustomerPayment |
| account | Account |

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
| Name | Type |
| --- | --- |
| account | Account |
| dimension | Dimension |
| dimensionValue | DimensionValue |

# Dimension
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| id | string | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | string | Yes |

## Relations
| Name | Type |
| --- | --- |
| dimensionValues | DimensionValue |

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
| Name | Type |
| --- | --- |
| dimension | Dimension |

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
| Name | Type |
| --- | --- |
| picture | Picture |
| defaultDimensions | DefaultDimensions |
| timeRegistrationEntries | TimeRegistrationEntry |

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
| Name | Type |
| --- | --- |
| account | Account |

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
| Name | Type |
| --- | --- |
| generalLedgerEntry | GeneralLedgerEntry |

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
| Name | Type |
| --- | --- |
| picture | Picture |
| defaultDimensions | DefaultDimensions |
| itemCategory | ItemCategory |

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
| Name | Type |
| --- | --- |
| journalLines | JournalLine |
| account | Account |

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
| Name | Type |
| --- | --- |
| attachments | Attachments |
| account | Account |

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
| Name | Type |
| --- | --- |
| purchaseInvoiceLines | PurchaseInvoiceLine |
| pdfDocument | PdfDocument |
| vendor | Vendor |
| currency | Currency |

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
| Name | Type |
| --- | --- |
| item | Item |
| account | Account |

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
| Name | Type |
| --- | --- |
| salesCreditMemoLines | SalesCreditMemoLine |
| pdfDocument | PdfDocument |
| customer | Customer |
| currency | Currency |
| paymentTerm | PaymentTerm |
| shipmentMethod | ShipmentMethod |

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
| Name | Type |
| --- | --- |
| item | Item |
| account | Account |

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
| Name | Type |
| --- | --- |
| salesInvoiceLines | SalesInvoiceLine |
| pdfDocument | PdfDocument |
| customer | Customer |
| currency | Currency |
| paymentTerm | PaymentTerm |
| shipmentMethod | ShipmentMethod |

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
| Name | Type |
| --- | --- |
| item | Item |
| account | Account |

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
| Name | Type |
| --- | --- |
| salesOrderLines | SalesOrderLine |
| customer | Customer |
| currency | Currency |
| paymentTerm | PaymentTerm |
| shipmentMethod | ShipmentMethod |

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
| Name | Type |
| --- | --- |
| item | Item |
| account | Account |

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
| Name | Type |
| --- | --- |
| salesQuoteLines | SalesQuoteLine |
| pdfDocument | PdfDocument |
| customer | Customer |
| currency | Currency |
| paymentTerm | PaymentTerm |
| shipmentMethod | ShipmentMethod |

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
| Name | Type |
| --- | --- |
| item | Item |
| account | Account |

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
| Name | Type |
| --- | --- |
| project | Project |

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
| Name | Type |
| --- | --- |
| account | Account |

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
| Name | Type |
| --- | --- |
| picture | Picture |
| defaultDimensions | DefaultDimensions |
| currency | Currency |
| paymentTerm | PaymentTerm |
| paymentMethod | PaymentMethod |

# VendorPurchase
## Properties
| Name | Type | Read Only |
| --- | --- | --- |
| vendorId | string | No |
| vendorNumber | string | No |
| name | string | No |
| totalPurchaseAmount | float | No |
| dateFilter_FilterOnly | string | No |

