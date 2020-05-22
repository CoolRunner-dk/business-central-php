# AccountantPortalActivityCues
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| overduePurchInvoiceAmount | string | No |
| overduePurchInvoiceStyle | string | No |
| overdueSalesInvoiceAmount | string | No |
| overdueSalesInvoiceStyle | string | No |
| nonAppliedPaymentsAmount | string | No |
| nonAppliedPaymentsStyle | string | No |
| purchInvoicesDueNextWeekAmount | string | No |
| purchInvoicesDueNextWeekStyle | string | No |
| salesInvoicesDueNextWeekAmount | string | No |
| salesInvoicesDueNextWeekStyle | string | No |
| ongoingPurchaseInvoicesAmount | string | No |
| ongoingPurchaseInvoicesStyle | string | No |
| ongoingSalesInvoicesAmount | string | No |
| ongoingSalesInvoicesStyle | string | No |
| salesThisMonthAmount | string | No |
| salesThisMonthStyle | string | No |
| top10CustomerSalesYTDAmount | string | No |
| top10CustomerSalesYTDStyle | string | No |
| averageCollectionDaysAmount | string | No |
| averageCollectionDaysStyle | string | No |
| ongoingSalesQuotesAmount | string | No |
| ongoingSalesQuotesStyle | string | No |
| ongoingSalesOrdersAmount | string | No |
| ongoingSalesOrdersStyle | string | No |
| requeststoApproveAmount | string | No |
| requeststoApproveStyle | string | No |
| purchaseOrdersAmount | string | No |
| purchaseOrdersStyle | string | No |
| salesInvPendDocExchangeAmount | string | No |
| salesInvPendDocExchangeStyle | string | No |
| salesCrMPendDocExchangeAmount | string | No |
| salesCrMPendDocExchangeStyle | string | No |
| myIncomingDocumentsAmount | string | No |
| myIncomingDocumentsStyle | string | No |
| incDocAwaitingVerifAmount | string | No |
| incDocAwaitingVerifStyle | string | No |
| contactNameAmount | string | No |
| contactNameStyle | string | No |

# AccountantPortalFinanceCues
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| overduePurchaseDocumentsAmount | string | No |
| overduePurchaseDocumentsStyle | string | No |
| purchaseDiscountsNextWeekAmount | string | No |
| purchaseDiscountsNextWeekStyle | string | No |
| overdueSalesDocumentsAmount | string | No |
| overdueSalesDocumentsStyle | string | No |
| purchaseDocumentsDueTodayAmount | string | No |
| purchaseDocumentsDueTodayStyle | string | No |
| vendorsPaymentsOnHoldAmount | string | No |
| vendorsPaymentsOnHoldStyle | string | No |
| pOsPendingApprovalAmount | string | No |
| pOsPendingApprovalStyle | string | No |
| sOsPendingApprovalAmount | string | No |
| sOsPendingApprovalStyle | string | No |
| approvedSalesOrdersAmount | string | No |
| approvedSalesOrdersStyle | string | No |
| approvedPurchaseOrdersAmount | string | No |
| approvedPurchaseOrdersStyle | string | No |
| purchaseReturnOrdersAmount | string | No |
| purchaseReturnOrdersStyle | string | No |
| salesReturnOrdersAllAmount | string | No |
| salesReturnOrdersAllStyle | string | No |
| customersBlockedAmount | string | No |
| customersBlockedStyle | string | No |
| newIncomingDocumentsAmount | string | No |
| newIncomingDocumentsStyle | string | No |
| approvedIncomingDocumentsAmount | string | No |
| approvedIncomingDocumentsStyle | string | No |
| oCRPendingAmount | string | No |
| oCRPendingStyle | string | No |
| oCRCompletedAmount | string | No |
| oCRCompletedStyle | string | No |
| requestsToApproveAmount | string | No |
| requestsToApproveStyle | string | No |
| requestsSentForApprovalAmount | string | No |
| requestsSentForApprovalStyle | string | No |
| cashAccountsBalanceAmount | string | No |
| cashAccountsBalanceStyle | string | No |
| lastDepreciatedPostedDateAmount | string | No |
| lastDepreciatedPostedDateStyle | string | No |
| lastLoginDateAmount | string | No |
| lastLoginDateStyle | string | No |

# AccountantPortalUserTasks
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| title | string | No |
| dueDateTime | date | No |
| percentComplete | int | No |
| priority | string | No |
| description | string | No |
| createdByName | string | No |
| createdDateTime | date | No |
| startDateTime | date | No |
| assignedTo | guid | No |
| link | string | No |
| userTaskGroupAssignedTo | string | No |

# BankAccountLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| transactionNo | int | No |
| bankAccountNo | string | No |
| postingDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| open | bool | No |
| currencyCode | string | No |
| amount | float | No |
| debitAmount | float | No |
| creditAmount | float | No |
| remainingAmount | float | No |
| amountLCY | float | No |
| debitAmountLCY | float | No |
| creditAmountLCY | float | No |
| dimensionSetID | int | No |
| bankAccountName | string | No |
| auxiliaryIndex1 | string | No |

# C2Graph
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| component | string | No |
| type | string | No |
| schema | string | No |

# CsApprovalComments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| tableID | int | No |
| documentType | string | No |
| documentNo | string | No |
| userID | string | No |
| dateAndTime | date | No |
| comment | string | No |

# CsApprovalDocument
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| documentType | string | No |
| documentTypeInt | string | No |
| no | string | No |
| sourceNo | string | No |
| sourceName | string | No |
| dueDate | date | No |
| currencyCode | string | No |
| docOnHold | string | No |
| docDueDate | date | No |
| nextApproverId | string | No |
| allowEditLines | bool | No |
| documentFilename | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| amountExclVATLCY | float | No |
| amountInclVATLCY | float | No |
| askRemoveOnHold | bool | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csApprovalDocumentApprovalEntries | [CsApprovalDocumentApprovalEntries[]](#csapprovaldocumentapprovalentries) | Yes |
| csApprovalDocumentApprovalComments | [CsApprovalDocumentApprovalComments[]](#csapprovaldocumentapprovalcomments) | Yes |
| csApprovalDocumentAttachedFiles | [CsApprovalDocumentAttachedFiles[]](#csapprovaldocumentattachedfiles) | Yes |
# CsApprovalDocumentApprovalComments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| userID | string | No |
| userName | string | No |
| dateAndTime | date | No |
| comment | string | No |

# CsApprovalDocumentApprovalEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| sequenceNo | int | No |
| approverID | string | No |
| approverName | string | No |
| status | string | No |
| dateTimeSentForApproval | date | No |
| lastDateTimeModified | date | No |
| workflowInstanceID | guid | No |

# CsApprovalDocumentAttachedFiles
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| currentUserId | string | No |
| tableID | int | No |
| documentType | int | No |
| documentNo | string | No |
| description | string | No |
| fileExtension | string | No |
| importedBy | string | No |
| importedDateTime | date | No |
| filename | string | No |
| allowDelete | bool | No |

# CsApprovalEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| tableID | int | No |
| approvalCode | string | No |
| documentType | string | No |
| documentTypeInt | string | No |
| documentNo | string | No |
| sequenceNo | int | No |
| sourceNo | string | No |
| sourceName | string | No |
| purchaserCode | string | No |
| approverID | string | No |
| status | string | No |
| statusInt | string | No |
| comment | bool | No |
| dueDate | date | No |
| currencyCode | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| amountExclVATLCY | float | No |
| amountInclVATLCY | float | No |
| docOnHold | string | No |
| docDate | date | No |
| docLastComment | string | No |
| docFilename | string | No |
| hasAttachments | bool | No |
| currentApprover | string | No |
| askRemoveOnHold | bool | No |

# CsApprovalSharing
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| ownerUserID | string | No |
| sharedToUserID | string | No |
| sharingType | string | No |
| validFrom | date | No |
| validTo | date | No |
| ownerName | string | No |
| sharedToUserName | string | No |
| sharingTypeInt | string | No |
| displayOrder | int | No |
| useOwnersPermissions | bool | No |

# CsApprovers
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| userID | string | No |
| salespersPurchCode | string | No |
| name | string | No |

# CsDeferralTemplates
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| deferralCode | string | No |
| description | string | No |
| deferralPct | float | No |
| startDate | string | No |
| noOfPeriods | int | No |
| periodDescription | string | No |

# CsDimensionValues
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| dimCode | string | No |
| code | string | No |
| name | string | No |
| dimValueType | string | No |

# CsEnabledReasonCodes
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| tableID | int | No |
| docType | string | No |
| type | string | No |
| reasonCode | string | No |
| docTypeInt | string | No |
| typeInt | string | No |
| description | string | No |

# CsFixedAssets
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |

# CsGLAccounts
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| name | string | No |
| directPosting | bool | No |
| accountType | string | No |
| accountTypeInt | string | No |

# CsItemCharges
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |

# CsItems
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |

# CsJobTasks
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| jobNo | string | No |
| jobTaskNo | string | No |
| description | string | No |
| jobTaskType | string | No |
| indentation | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsJobs
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |
| billToCustomerNo | string | No |
| startingDate | date | No |
| endingDate | date | No |
| billToName | string | No |

# CsLocationCodes
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| name | string | No |

# CsPostedApprovalEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| tableID | int | No |
| approvalCode | string | No |
| documentNo | string | No |
| sequenceNo | int | No |
| sourceNo | string | No |
| sourceName | string | No |
| purchaserCode | string | No |
| approverID | string | No |
| status | string | No |
| statusInt | string | No |
| comment | bool | No |
| dueDate | date | No |
| currencyCode | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| docDueDate | date | No |
| docOnHold | string | No |
| docDate | date | No |
| docLastComment | string | No |
| docFilename | string | No |
| hasAttachments | bool | No |

# CsPostedDocSearch
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| type | string | No |
| no | string | No |
| userID | string | No |
| name | string | No |
| postingDate | date | No |
| documentDate | date | No |
| extDocNo | string | No |
| currCode | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| docLastComment | string | No |
| docFilename | string | No |

# CsPostedPurchaseCrMemo
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| payToVendorNo | string | No |
| payToName | string | No |
| payToName2 | string | No |
| payToAddress | string | No |
| payToAddress2 | string | No |
| payToCity | string | No |
| payToContact | string | No |
| yourReference | string | No |
| dueDate | date | No |
| currencyCode | string | No |
| purchaserCode | string | No |
| onHold | string | No |
| vendorCrMemoNo | string | No |
| payToPostCode | string | No |
| payToCounty | string | No |
| payToCountryRegionCode | string | No |
| payToCountryRegion | string | No |
| documentDate | date | No |
| paymentMethodCode | string | No |
| paymentMethod | string | No |
| documentFilename | string | No |
| pricesIncludingVAT | bool | No |
| lineAmountExclVAT | float | No |
| lineAmountInclVAT | float | No |
| amountExclVATLCY | float | No |
| amountInclVATLCY | float | No |
| webDim1Code | string | No |
| webDim2Code | string | No |
| webDim3Code | string | No |
| webDim4Code | string | No |
| webDim5Code | string | No |
| webDim6Code | string | No |
| webDim7Code | string | No |
| webDim8Code | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPostedPurchaseCrMemoPurchLines | [CsPostedPurchaseCrMemoPurchLines[]](#cspostedpurchasecrmemopurchlines) | Yes |
| csPostedPurchaseCrMemoApprovalEntries | [CsPostedPurchaseCrMemoApprovalEntries[]](#cspostedpurchasecrmemoapprovalentries) | Yes |
| csPostedPurchaseCrMemoApprovalComments | [CsPostedPurchaseCrMemoApprovalComments[]](#cspostedpurchasecrmemoapprovalcomments) | Yes |
| csPostedPurchaseCrMemoAttachedFiles | [CsPostedPurchaseCrMemoAttachedFiles[]](#cspostedpurchasecrmemoattachedfiles) | Yes |
# CsPostedPurchaseCrMemoApprovalComments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| userID | string | No |
| userName | string | No |
| dateAndTime | date | No |
| comment | string | No |

# CsPostedPurchaseCrMemoApprovalEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| sequenceNo | int | No |
| approverID | string | No |
| approverName | string | No |
| status | string | No |
| statusInt | string | No |
| dateTimeSentForApproval | date | No |
| lastDateTimeModified | date | No |

# CsPostedPurchaseCrMemoAttachedFiles
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| currentUserId | string | No |
| tableID | int | No |
| documentType | int | No |
| documentNo | string | No |
| description | string | No |
| fileExtension | string | No |
| importedBy | string | No |
| importedDateTime | date | No |
| filename | string | No |
| allowDelete | bool | No |

# CsPostedPurchaseCrMemoPurchLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentNo | string | No |
| lineNo | int | No |
| currentUserId | string | No |
| type | string | No |
| typeInt | string | No |
| no | string | No |
| postingAccountDescription | string | No |
| variantCode | string | No |
| prodPostingGroup | string | No |
| prodPostingGroupDesc | string | No |
| vATProdPostingGroup | string | No |
| vATProdPostingGroupDesc | string | No |
| description | string | No |
| description2 | string | No |
| locationCode | string | No |
| quantity | float | No |
| unitOfMeasureCode | string | No |
| unitOfMeasureDesc | string | No |
| directUnitCost | float | No |
| indirectCostPct | float | No |
| lineAmount | float | No |
| lineDiscountPct | float | No |
| lineDiscountAmount | float | No |
| jobNo | string | No |
| jobDesc | string | No |
| jobTaskNo | string | No |
| jobTaskDesc | string | No |
| deferralCode | string | No |
| webDim1ValueCode | string | No |
| webDim2ValueCode | string | No |
| webDim3ValueCode | string | No |
| webDim4ValueCode | string | No |
| webDim5ValueCode | string | No |
| webDim6ValueCode | string | No |
| webDim7ValueCode | string | No |
| webDim8ValueCode | string | No |
| webDim1ValueName | string | No |
| webDim2ValueName | string | No |
| webDim3ValueName | string | No |
| webDim4ValueName | string | No |
| webDim5ValueName | string | No |
| webDim6ValueName | string | No |
| webDim7ValueName | string | No |
| webDim8ValueName | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseCrMemos
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| vendorNo | string | No |
| name | string | No |
| postingDate | date | No |
| docDate | date | No |
| vendorCrMemoNo | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| currCode | string | No |
| respCenter | string | No |
| docLastComment | string | No |
| docFilename | string | No |

# CsPostedPurchaseInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| payToVendorNo | string | No |
| payToName | string | No |
| payToName2 | string | No |
| payToAddress | string | No |
| payToAddress2 | string | No |
| payToCity | string | No |
| payToContact | string | No |
| yourReference | string | No |
| dueDate | date | No |
| currencyCode | string | No |
| purchaserCode | string | No |
| onHold | string | No |
| vendorOrderNo | string | No |
| vendorInvoiceNo | string | No |
| payToPostCode | string | No |
| payToCounty | string | No |
| payToCountryRegionCode | string | No |
| payToCountryRegion | string | No |
| documentDate | date | No |
| paymentMethodCode | string | No |
| paymentMethod | string | No |
| documentFilename | string | No |
| pricesIncludingVAT | bool | No |
| lineAmountExclVAT | float | No |
| lineAmountInclVAT | float | No |
| amountExclVATLCY | float | No |
| amountInclVATLCY | float | No |
| webDim1Code | string | No |
| webDim2Code | string | No |
| webDim3Code | string | No |
| webDim4Code | string | No |
| webDim5Code | string | No |
| webDim6Code | string | No |
| webDim7Code | string | No |
| webDim8Code | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPostedPurchaseInvoicePurchLines | [CsPostedPurchaseInvoicePurchLines[]](#cspostedpurchaseinvoicepurchlines) | Yes |
| csPostedPurchaseInvoiceApprovalEntries | [CsPostedPurchaseInvoiceApprovalEntries[]](#cspostedpurchaseinvoiceapprovalentries) | Yes |
| csPostedPurchaseInvoiceApprovalComments | [CsPostedPurchaseInvoiceApprovalComments[]](#cspostedpurchaseinvoiceapprovalcomments) | Yes |
| csPostedPurchaseInvoiceAttachedFiles | [CsPostedPurchaseInvoiceAttachedFiles[]](#cspostedpurchaseinvoiceattachedfiles) | Yes |
# CsPostedPurchaseInvoiceApprovalComments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| userID | string | No |
| userName | string | No |
| dateAndTime | date | No |
| comment | string | No |

# CsPostedPurchaseInvoiceApprovalEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| sequenceNo | int | No |
| approverID | string | No |
| approverName | string | No |
| status | string | No |
| statusInt | string | No |
| dateTimeSentForApproval | date | No |
| lastDateTimeModified | date | No |

# CsPostedPurchaseInvoiceAttachedFiles
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| currentUserId | string | No |
| tableID | int | No |
| documentType | int | No |
| documentNo | string | No |
| description | string | No |
| fileExtension | string | No |
| importedBy | string | No |
| importedDateTime | date | No |
| filename | string | No |
| allowDelete | bool | No |

# CsPostedPurchaseInvoicePurchLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentNo | string | No |
| lineNo | int | No |
| currentUserId | string | No |
| type | string | No |
| typeInt | string | No |
| no | string | No |
| postingAccountDescription | string | No |
| variantCode | string | No |
| prodPostingGroup | string | No |
| prodPostingGroupDesc | string | No |
| vATProdPostingGroup | string | No |
| vATProdPostingGroupDesc | string | No |
| description | string | No |
| description2 | string | No |
| locationCode | string | No |
| quantity | float | No |
| unitOfMeasureCode | string | No |
| unitOfMeasureDesc | string | No |
| directUnitCost | float | No |
| indirectCostPct | float | No |
| lineAmount | float | No |
| lineDiscountPct | float | No |
| lineDiscountAmount | float | No |
| jobNo | string | No |
| jobDesc | string | No |
| jobTaskNo | string | No |
| jobTaskDesc | string | No |
| deferralCode | string | No |
| webDim1ValueCode | string | No |
| webDim2ValueCode | string | No |
| webDim3ValueCode | string | No |
| webDim4ValueCode | string | No |
| webDim5ValueCode | string | No |
| webDim6ValueCode | string | No |
| webDim7ValueCode | string | No |
| webDim8ValueCode | string | No |
| webDim1ValueName | string | No |
| webDim2ValueName | string | No |
| webDim3ValueName | string | No |
| webDim4ValueName | string | No |
| webDim5ValueName | string | No |
| webDim6ValueName | string | No |
| webDim7ValueName | string | No |
| webDim8ValueName | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseInvoices
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| vendorNo | string | No |
| name | string | No |
| postingDate | date | No |
| docDate | date | No |
| vendorInvoiceNo | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| currCode | string | No |
| respCenter | string | No |
| docLastComment | string | No |
| docFilename | string | No |

# CsProdPostGroups
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| description | string | No |

# CsPurchaseDocument
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| no | string | No |
| documentTypeInt | string | No |
| payToVendorNo | string | No |
| payToName | string | No |
| payToName2 | string | No |
| payToAddress | string | No |
| payToAddress2 | string | No |
| payToCity | string | No |
| payToContact | string | No |
| yourReference | string | No |
| dueDate | date | No |
| currencyCode | string | No |
| purchaserCode | string | No |
| onHold | string | No |
| vendorOrderNo | string | No |
| vendorInvoiceNo | string | No |
| vendorCrMemoNo | string | No |
| payToPostCode | string | No |
| payToCounty | string | No |
| payToCountryRegionCode | string | No |
| payToCountryRegion | string | No |
| documentDate | date | No |
| paymentMethodCode | string | No |
| paymentMethod | string | No |
| nextApproverId | string | No |
| allowEditLines | bool | No |
| documentFilename | string | No |
| pricesIncludingVAT | bool | No |
| importedAmountExclVAT | float | No |
| importedAmountInclVAT | float | No |
| importedAmountExclVATLCY | float | No |
| importedAmountInclVATLCY | float | No |
| assignedAmountExclVAT | float | No |
| assignedAmountInclVAT | float | No |
| headerAmount | float | No |
| headerAmountLCY | float | No |
| askRemoveOnHold | bool | No |
| webDim1Code | string | No |
| webDim2Code | string | No |
| webDim3Code | string | No |
| webDim4Code | string | No |
| webDim5Code | string | No |
| webDim6Code | string | No |
| webDim7Code | string | No |
| webDim8Code | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPurchaseDocumentPurchLines | [CsPurchaseDocumentPurchLines[]](#cspurchasedocumentpurchlines) | Yes |
| csPurchaseDocumentApprovalEntries | [CsPurchaseDocumentApprovalEntries[]](#cspurchasedocumentapprovalentries) | Yes |
| csPurchaseDocumentApprovalComments | [CsPurchaseDocumentApprovalComments[]](#cspurchasedocumentapprovalcomments) | Yes |
| csPurchaseDocumentAttachedFiles | [CsPurchaseDocumentAttachedFiles[]](#cspurchasedocumentattachedfiles) | Yes |
# CsPurchaseDocumentApprovalComments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| userID | string | No |
| userName | string | No |
| dateAndTime | date | No |
| comment | string | No |

# CsPurchaseDocumentApprovalEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| sequenceNo | int | No |
| approverID | string | No |
| approverName | string | No |
| status | string | No |
| dateTimeSentForApproval | date | No |
| lastDateTimeModified | date | No |
| workflowInstanceID | guid | No |

# CsPurchaseDocumentAttachedFiles
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| currentUserId | string | No |
| tableID | int | No |
| documentType | int | No |
| documentNo | string | No |
| description | string | No |
| fileExtension | string | No |
| importedBy | string | No |
| importedDateTime | date | No |
| filename | string | No |
| allowDelete | bool | No |

# CsPurchaseDocumentPurchLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNo | string | No |
| lineNo | int | No |
| currentUserId | string | No |
| documentTypeInt | string | No |
| type | string | No |
| typeInt | string | No |
| no | string | No |
| postingAccountDescription | string | No |
| variantCode | string | No |
| prodPostingGroup | string | No |
| prodPostingGroupDesc | string | No |
| vATProdPostingGroup | string | No |
| vATProdPostingGroupDesc | string | No |
| description | string | No |
| description2 | string | No |
| locationCode | string | No |
| quantity | float | No |
| unitOfMeasureCode | string | No |
| unitOfMeasureDesc | string | No |
| directUnitCost | float | No |
| indirectCostPct | float | No |
| lineAmount | float | No |
| lineDiscountPct | float | No |
| lineDiscountAmount | float | No |
| lineStyle | string | No |
| jobNo | string | No |
| jobDesc | string | No |
| jobTaskNo | string | No |
| jobTaskDesc | string | No |
| deferralCode | string | No |
| fAPostingType | string | No |
| webDim1ValueCode | string | No |
| webDim2ValueCode | string | No |
| webDim3ValueCode | string | No |
| webDim4ValueCode | string | No |
| webDim5ValueCode | string | No |
| webDim6ValueCode | string | No |
| webDim7ValueCode | string | No |
| webDim8ValueCode | string | No |
| webDim1ValueName | string | No |
| webDim2ValueName | string | No |
| webDim3ValueName | string | No |
| webDim4ValueName | string | No |
| webDim5ValueName | string | No |
| webDim6ValueName | string | No |
| webDim7ValueName | string | No |
| webDim8ValueName | string | No |
| webDim1Rule | int | No |
| webDim2Rule | int | No |
| webDim3Rule | int | No |
| webDim4Rule | int | No |
| webDim5Rule | int | No |
| webDim6Rule | int | No |
| webDim7Rule | int | No |
| webDim8Rule | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPurchaseLine
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNo | string | No |
| lineNo | int | No |
| currentUserId | string | No |
| documentTypeInt | string | No |
| type | string | No |
| typeInt | string | No |
| no | string | No |
| postingAccountDescription | string | No |
| variantCode | string | No |
| prodPostingGroup | string | No |
| prodPostingGroupDesc | string | No |
| vATProdPostingGroup | string | No |
| vATProdPostingGroupDesc | string | No |
| description | string | No |
| description2 | string | No |
| locationCode | string | No |
| quantity | float | No |
| unitOfMeasureCode | string | No |
| unitOfMeasureDesc | string | No |
| directUnitCost | float | No |
| indirectCostPct | float | No |
| lineAmount | float | No |
| lineDiscountPct | float | No |
| lineDiscountAmount | float | No |
| lineStyle | string | No |
| jobNo | string | No |
| jobDesc | string | No |
| jobTaskNo | string | No |
| jobTaskDesc | string | No |
| deferralCode | string | No |
| fAPostingType | string | No |
| webDim1ValueCode | string | No |
| webDim2ValueCode | string | No |
| webDim3ValueCode | string | No |
| webDim4ValueCode | string | No |
| webDim5ValueCode | string | No |
| webDim6ValueCode | string | No |
| webDim7ValueCode | string | No |
| webDim8ValueCode | string | No |
| webDim1ValueName | string | No |
| webDim2ValueName | string | No |
| webDim3ValueName | string | No |
| webDim4ValueName | string | No |
| webDim5ValueName | string | No |
| webDim6ValueName | string | No |
| webDim7ValueName | string | No |
| webDim8ValueName | string | No |
| webDim1Rule | int | No |
| webDim2Rule | int | No |
| webDim3Rule | int | No |
| webDim4Rule | int | No |
| webDim5Rule | int | No |
| webDim6Rule | int | No |
| webDim7Rule | int | No |
| webDim8Rule | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsStdAmountDistribCodes
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| description | string | No |
| enabledForPurchase | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csStdAmountDistribCodesVendors | [CsStdAmountDistribCodesVendors[]](#csstdamountdistribcodesvendors) | Yes |
# CsStdAmountDistribCodesVendors
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| vendorNo | string | No |
| amountDistributionCode | string | No |

# CsUnitOfMeasure
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| description | string | No |

# CsVATProdPostGroups
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| description | string | No |

# CsVendorInfo
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| name | string | No |
| name2 | string | No |
| address | string | No |
| address2 | string | No |
| postCodeCity | string | No |
| phoneNo | string | No |
| countryRegion | string | No |
| comment | bool | No |
| blocked | string | No |
| balanceLCY | float | No |
| balanceDueLCY | float | No |
| vATRegistrationNo | string | No |
| county | string | No |
| eMail | string | No |
| homePage | string | No |
| globalDimension1Filter | string | No |
| globalDimension2Filter | string | No |
| currencyFilter | string | No |
| dateFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csVendorInfoComments | [CsVendorInfoComments[]](#csvendorinfocomments) | Yes |
| csVendorInfoContacts | [CsVendorInfoContacts[]](#csvendorinfocontacts) | Yes |
| csVendorInfoDocuments | [CsVendorInfoDocuments[]](#csvendorinfodocuments) | Yes |
# CsVendorInfoComments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| tableName | string | No |
| no | string | No |
| lineNo | int | No |
| date | date | No |
| code | string | No |
| comment | string | No |

# CsVendorInfoContacts
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| name | string | No |
| phoneNo | string | No |
| eMail | string | No |

# CsVendorInfoDocuments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| type | string | No |
| documentType | string | No |
| documentNo | string | No |
| typeInt | string | No |
| documentTypeInt | string | No |
| currencyCode | string | No |
| amountExclVAT | float | No |
| amountInclVAT | float | No |
| date | date | No |
| fullyApplied | bool | No |
| onHold | string | No |
| latestComment | string | No |

# CsWebHelp
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| section | string | No |
| lineNo | int | No |
| heading | bool | No |
| text | string | No |
| bold | bool | No |
| italic | bool | No |
| underline | bool | No |
| link | string | No |
| linkType | string | No |
| newWindow | bool | No |

# CsWebMenu
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| description | string | No |
| sorting | int | No |

# CsWebSetup
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| companyGuid | string | No |
| companyName | string | No |
| enableWebApproval | bool | No |
| lCYCode | string | No |
| showLCYAmounts | int | No |
| showType | bool | No |
| showPostingAccountName | bool | No |
| showJobNo | bool | No |
| showJobTaskNo | bool | No |
| showProdPostingGroup | bool | No |
| showVATProdGroup | bool | No |
| showDescription2 | bool | No |
| showLineDiscPct | bool | No |
| showUOM | bool | No |
| showFAPostingType | bool | No |
| showLocationCode | bool | No |
| showDeferralCode | bool | No |
| dimJobFieldPlacement | int | No |
| defSearchFromDate | date | No |
| defSearchToDate | date | No |
| defTimeZoneId | string | No |
| defNumberAndUnitsName | string | No |
| defLanguageName | string | No |
| webHelpActive | bool | No |
| advApprovalInvoice | bool | No |
| advApprovalCrMemo | bool | No |
| maxLineDescLength | int | No |
| allowForwardAndApprove | bool | No |
| allowForwardWOApproval | bool | No |
| allowForwardAndReturn | bool | No |
| dim1Code | string | No |
| dim2Code | string | No |
| dim3Code | string | No |
| dim4Code | string | No |
| dim5Code | string | No |
| dim6Code | string | No |
| dim7Code | string | No |
| dim8Code | string | No |
| dim1Name | string | No |
| dim2Name | string | No |
| dim3Name | string | No |
| dim4Name | string | No |
| dim5Name | string | No |
| dim6Name | string | No |
| dim7Name | string | No |
| dim8Name | string | No |
| lineDim1Code | string | No |
| lineDim2Code | string | No |
| lineDim3Code | string | No |
| lineDim4Code | string | No |
| lineDim5Code | string | No |
| lineDim6Code | string | No |
| lineDim7Code | string | No |
| lineDim8Code | string | No |
| lineDim1Name | string | No |
| lineDim2Name | string | No |
| lineDim3Name | string | No |
| lineDim4Name | string | No |
| lineDim5Name | string | No |
| lineDim6Name | string | No |
| lineDim7Name | string | No |
| lineDim8Name | string | No |
| cEMEnabled | bool | No |
| cDCEnabled | bool | No |

# CsWebSubMenu
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| webMenuCode | string | No |
| code | string | No |
| description | string | No |
| approvalCodeFilter | string | No |
| tableIDFilter | string | No |
| documentTypeFilter | string | No |
| sorting | int | No |

# CsWebUser
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| userID | string | No |
| documentSearch | string | No |
| purchRespCenterFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csWebUserPermissions | [CsWebUserPermissions[]](#cswebuserpermissions) | Yes |
# CsWebUserCompany
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| userId | string | No |
| companyCode | string | No |
| companyGuid | guid | No |
| noOfDocForApproval | int | No |
| noOfSharedDocuments | int | No |
| display | string | No |

# CsWebUserPermissions
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| continiaUserID | string | No |
| type | string | No |
| dimensionCode | string | No |
| approvalUserGroupCode | string | No |
| assigningPermission | string | No |
| approvalPermission | string | No |
| assigningFilter | string | No |
| approvalFilter | string | No |
| noOfRecords | int | No |

# CsWebUserPmsSelection
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| permissionType | string | No |
| continiaUserID | string | No |
| type | string | No |
| dimensionCode | string | No |
| approvalUserGroupCode | string | No |
| codeNo | string | No |
| typeInt | string | No |
| permissionTypeInt | string | No |
| name | string | No |
| blocked | bool | No |
| accountType | string | No |

# Company
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| name | string | No |
| evaluationCompany | bool | No |
| displayName | string | No |
| id | guid | Yes |
| businessProfileId | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| accountantPortalActivityCues | [AccountantPortalActivityCues[]](#accountantportalactivitycues) | Yes |
| accountantPortalFinanceCues | [AccountantPortalFinanceCues[]](#accountantportalfinancecues) | Yes |
| accountantPortalUserTasks | [AccountantPortalUserTasks[]](#accountantportalusertasks) | Yes |
| c2Graphs | [C2Graph[]](#c2graph) | Yes |
| invoiceDocuments | [InvoiceDocument[]](#invoicedocument) | Yes |
| invoiceReminders | [InvoiceReminder[]](#invoicereminder) | Yes |
| invoicingAttachments | [InvoicingAttachment[]](#invoicingattachment) | Yes |
| invoicingContacts | [InvoicingContact[]](#invoicingcontact) | Yes |
| invoicingCountryRegions | [InvoicingCountryRegion[]](#invoicingcountryregion) | Yes |
| invoicingCustomers | [InvoicingCustomer[]](#invoicingcustomer) | Yes |
| invoicingCustomersCoupons | [InvoicingCustomersCoupon[]](#invoicingcustomerscoupon) | Yes |
| invoicingEmailPreviews | [InvoicingEmailPreview[]](#invoicingemailpreview) | Yes |
| invoicingEmailSettings | [InvoicingEmailSetting[]](#invoicingemailsetting) | Yes |
| invoicingExportInvoices | [InvoicingExportInvoice[]](#invoicingexportinvoice) | Yes |
| invoicingGeneralSettings | [InvoicingGeneralSetting[]](#invoicinggeneralsetting) | Yes |
| invoicingItems | [InvoicingItem[]](#invoicingitem) | Yes |
| invoicingKPIs | [InvoicingKPI[]](#invoicingkpi) | Yes |
| invoicingLanguages | [InvoicingLanguage[]](#invoicinglanguage) | Yes |
| invoicingPaymentMethods | [InvoicingPaymentMethod[]](#invoicingpaymentmethod) | Yes |
| invoicingPaymentTerms | [InvoicingPaymentTerm[]](#invoicingpaymentterm) | Yes |
| invoicingPDFs | [InvoicingPDF[]](#invoicingpdf) | Yes |
| invoicingQBOSyncAuths | [InvoicingQBOSyncAuth[]](#invoicingqbosyncauth) | Yes |
| invoicingSalesInvoiceOverviews | [InvoicingSalesInvoiceOverview[]](#invoicingsalesinvoiceoverview) | Yes |
| invoicingSalesInvoices | [InvoicingSalesInvoice[]](#invoicingsalesinvoice) | Yes |
| invoicingSalesInvoicesPayments | [InvoicingSalesInvoicesPayment[]](#invoicingsalesinvoicespayment) | Yes |
| invoicingSalesQuotes | [InvoicingSalesQuote[]](#invoicingsalesquote) | Yes |
| invoicingSalesTaxSetups | [InvoicingSalesTaxSetup[]](#invoicingsalestaxsetup) | Yes |
| invoicingSMTPMailSetups | [InvoicingSMTPMailSetup[]](#invoicingsmtpmailsetup) | Yes |
| invoicingSyncServicesSettings | [InvoicingSyncServicesSetting[]](#invoicingsyncservicessetting) | Yes |
| invoicingTaxAreas | [InvoicingTaxArea[]](#invoicingtaxarea) | Yes |
| invoicingTaxGroups | [InvoicingTaxGroup[]](#invoicingtaxgroup) | Yes |
| invoicingTaxRates | [InvoicingTaxRate[]](#invoicingtaxrate) | Yes |
| invoicingTestMails | [InvoicingTestMail[]](#invoicingtestmail) | Yes |
| invoicingUnitsOfMeasures | [InvoicingUnitsOfMeasure[]](#invoicingunitsofmeasure) | Yes |
| invoicingVATSetups | [InvoicingVATSetup[]](#invoicingvatsetup) | Yes |
| powerbifinances | [Powerbifinance[]](#powerbifinance) | Yes |
| userTaskSetCompletes | [UserTaskSetComplete[]](#usertasksetcomplete) | Yes |
| itemSalesAndProfits | [ItemSalesAndProfit[]](#itemsalesandprofit) | Yes |
| itemSalesByCustomers | [ItemSalesByCustomer[]](#itemsalesbycustomer) | Yes |
| salesDashboards | [SalesDashboard[]](#salesdashboard) | Yes |
| salesOpportunities | [SalesOpportunities[]](#salesopportunities) | Yes |
| salesOrdersBySalesPeople | [SalesOrdersBySalesPerson[]](#salesordersbysalesperson) | Yes |
| topCustomerOverviews | [TopCustomerOverview[]](#topcustomeroverview) | Yes |
| csApprovalComments | [CsApprovalComments[]](#csapprovalcomments) | Yes |
| csApprovalDocuments | [CsApprovalDocument[]](#csapprovaldocument) | Yes |
| csApprovalDocumentApprovalEntries | [CsApprovalDocumentApprovalEntries[]](#csapprovaldocumentapprovalentries) | Yes |
| csApprovalDocumentApprovalComments | [CsApprovalDocumentApprovalComments[]](#csapprovaldocumentapprovalcomments) | Yes |
| csApprovalDocumentAttachedFiles | [CsApprovalDocumentAttachedFiles[]](#csapprovaldocumentattachedfiles) | Yes |
| csApprovalEntries | [CsApprovalEntries[]](#csapprovalentries) | Yes |
| csApprovalSharings | [CsApprovalSharing[]](#csapprovalsharing) | Yes |
| csApprovers | [CsApprovers[]](#csapprovers) | Yes |
| csDeferralTemplates | [CsDeferralTemplates[]](#csdeferraltemplates) | Yes |
| csDimensionValues | [CsDimensionValues[]](#csdimensionvalues) | Yes |
| csEnabledReasonCodes | [CsEnabledReasonCodes[]](#csenabledreasoncodes) | Yes |
| csFixedAssets | [CsFixedAssets[]](#csfixedassets) | Yes |
| csGLAccounts | [CsGLAccounts[]](#csglaccounts) | Yes |
| csItemCharges | [CsItemCharges[]](#csitemcharges) | Yes |
| csItems | [CsItems[]](#csitems) | Yes |
| csJobs | [CsJobs[]](#csjobs) | Yes |
| csJobTasks | [CsJobTasks[]](#csjobtasks) | Yes |
| csLocationCodes | [CsLocationCodes[]](#cslocationcodes) | Yes |
| csPostedApprovalEntries | [CsPostedApprovalEntries[]](#cspostedapprovalentries) | Yes |
| csPostedDocSearches | [CsPostedDocSearch[]](#csposteddocsearch) | Yes |
| csPostedPurchaseCrMemos | [CsPostedPurchaseCrMemos[]](#cspostedpurchasecrmemos) | Yes |
| csPostedPurchaseCrMemoPurchLines | [CsPostedPurchaseCrMemoPurchLines[]](#cspostedpurchasecrmemopurchlines) | Yes |
| csPostedPurchaseCrMemoApprovalEntries | [CsPostedPurchaseCrMemoApprovalEntries[]](#cspostedpurchasecrmemoapprovalentries) | Yes |
| csPostedPurchaseCrMemoApprovalComments | [CsPostedPurchaseCrMemoApprovalComments[]](#cspostedpurchasecrmemoapprovalcomments) | Yes |
| csPostedPurchaseCrMemoAttachedFiles | [CsPostedPurchaseCrMemoAttachedFiles[]](#cspostedpurchasecrmemoattachedfiles) | Yes |
| csPostedPurchaseInvoices | [CsPostedPurchaseInvoices[]](#cspostedpurchaseinvoices) | Yes |
| csPostedPurchaseInvoicePurchLines | [CsPostedPurchaseInvoicePurchLines[]](#cspostedpurchaseinvoicepurchlines) | Yes |
| csPostedPurchaseInvoiceApprovalEntries | [CsPostedPurchaseInvoiceApprovalEntries[]](#cspostedpurchaseinvoiceapprovalentries) | Yes |
| csPostedPurchaseInvoiceApprovalComments | [CsPostedPurchaseInvoiceApprovalComments[]](#cspostedpurchaseinvoiceapprovalcomments) | Yes |
| csPostedPurchaseInvoiceAttachedFiles | [CsPostedPurchaseInvoiceAttachedFiles[]](#cspostedpurchaseinvoiceattachedfiles) | Yes |
| csProdPostGroups | [CsProdPostGroups[]](#csprodpostgroups) | Yes |
| csPurchaseDocuments | [CsPurchaseDocument[]](#cspurchasedocument) | Yes |
| csPurchaseDocumentPurchLines | [CsPurchaseDocumentPurchLines[]](#cspurchasedocumentpurchlines) | Yes |
| csPurchaseDocumentApprovalEntries | [CsPurchaseDocumentApprovalEntries[]](#cspurchasedocumentapprovalentries) | Yes |
| csPurchaseDocumentApprovalComments | [CsPurchaseDocumentApprovalComments[]](#cspurchasedocumentapprovalcomments) | Yes |
| csPurchaseDocumentAttachedFiles | [CsPurchaseDocumentAttachedFiles[]](#cspurchasedocumentattachedfiles) | Yes |
| csPurchaseLines | [CsPurchaseLine[]](#cspurchaseline) | Yes |
| csStdAmountDistribCodes | [CsStdAmountDistribCodes[]](#csstdamountdistribcodes) | Yes |
| csStdAmountDistribCodesVendors | [CsStdAmountDistribCodesVendors[]](#csstdamountdistribcodesvendors) | Yes |
| csUnitOfMeasures | [CsUnitOfMeasure[]](#csunitofmeasure) | Yes |
| csVATProdPostGroups | [CsVATProdPostGroups[]](#csvatprodpostgroups) | Yes |
| csVendorInfos | [CsVendorInfo[]](#csvendorinfo) | Yes |
| csVendorInfoComments | [CsVendorInfoComments[]](#csvendorinfocomments) | Yes |
| csVendorInfoContacts | [CsVendorInfoContacts[]](#csvendorinfocontacts) | Yes |
| csVendorInfoDocuments | [CsVendorInfoDocuments[]](#csvendorinfodocuments) | Yes |
| csWebHelps | [CsWebHelp[]](#cswebhelp) | Yes |
| csWebMenus | [CsWebMenu[]](#cswebmenu) | Yes |
| csWebSetups | [CsWebSetup[]](#cswebsetup) | Yes |
| csWebSubMenus | [CsWebSubMenu[]](#cswebsubmenu) | Yes |
| csWebUsers | [CsWebUser[]](#cswebuser) | Yes |
| csWebUserPermissions | [CsWebUserPermissions[]](#cswebuserpermissions) | Yes |
| csWebUserCompanies | [CsWebUserCompany[]](#cswebusercompany) | Yes |
| csWebUserPmsSelections | [CsWebUserPmsSelection[]](#cswebuserpmsselection) | Yes |
| excelTemplateAgedAccountsPayables | [ExcelTemplateAgedAccountsPayable[]](#exceltemplateagedaccountspayable) | Yes |
| excelTemplateAgedAccountsReceivables | [ExcelTemplateAgedAccountsReceivable[]](#exceltemplateagedaccountsreceivable) | Yes |
| excelTemplateBalanceSheets | [ExcelTemplateBalanceSheet[]](#exceltemplatebalancesheet) | Yes |
| excelTemplateCashFlowStatements | [ExcelTemplateCashFlowStatement[]](#exceltemplatecashflowstatement) | Yes |
| excelTemplateIncomeStatements | [ExcelTemplateIncomeStatement[]](#exceltemplateincomestatement) | Yes |
| excelTemplateRetainedEarnings | [ExcelTemplateRetainedEarnings[]](#exceltemplateretainedearnings) | Yes |
| excelTemplateTrialBalances | [ExcelTemplateTrialBalance[]](#exceltemplatetrialbalance) | Yes |
| excelTemplateViewCompanyInformations | [ExcelTemplateViewCompanyInformation[]](#exceltemplateviewcompanyinformation) | Yes |
| generalJournals | [GeneralJournals[]](#generaljournals) | Yes |
| jobLists | [JobList[]](#joblist) | Yes |
| jobPlanningLines | [JobPlanningLines[]](#jobplanninglines) | Yes |
| jobTaskLines | [JobTaskLines[]](#jobtasklines) | Yes |
| powerBIAgedAccPayables | [PowerBIAgedAccPayable[]](#powerbiagedaccpayable) | Yes |
| powerBIAgedAccReceivables | [PowerBIAgedAccReceivable[]](#powerbiagedaccreceivable) | Yes |
| powerBIAgedInventoryCharts | [PowerBIAgedInventoryChart[]](#powerbiagedinventorychart) | Yes |
| powerBIJobActVBudgCosts | [PowerBIJobActVBudgCost[]](#powerbijobactvbudgcost) | Yes |
| powerBIJobActVBudgPrices | [PowerBIJobActVBudgPrice[]](#powerbijobactvbudgprice) | Yes |
| powerBIJobProfitabilities | [PowerBIJobProfitability[]](#powerbijobprofitability) | Yes |
| powerBIReportLabels | [PowerBIReportLabels[]](#powerbireportlabels) | Yes |
| powerBISalesPipelines | [PowerBISalesPipeline[]](#powerbisalespipeline) | Yes |
| powerBITop5Opportunities | [PowerBITop5Opportunities[]](#powerbitop5opportunities) | Yes |
| powerBIWorkDateCalcs | [PowerBIWorkDateCalc[]](#powerbiworkdatecalc) | Yes |
| purchaseDocumentLines | [PurchaseDocumentLines[]](#purchasedocumentlines) | Yes |
| purchaseDocuments | [PurchaseDocuments[]](#purchasedocuments) | Yes |
| purchaseDocumentsworkflowPurchaseDocumentLines | [PurchaseDocumentsworkflowPurchaseDocumentLines[]](#purchasedocumentsworkflowpurchasedocumentlines) | Yes |
| salesDocumentLines | [SalesDocumentLines[]](#salesdocumentlines) | Yes |
| salesDocuments | [SalesDocuments[]](#salesdocuments) | Yes |
| salesDocumentsworkflowSalesDocumentLines | [SalesDocumentsworkflowSalesDocumentLines[]](#salesdocumentsworkflowsalesdocumentlines) | Yes |
| workflowCustomers | [WorkflowCustomers[]](#workflowcustomers) | Yes |
| workflowGenJournalBatches | [WorkflowGenJournalBatches[]](#workflowgenjournalbatches) | Yes |
| workflowGenJournalLines | [WorkflowGenJournalLines[]](#workflowgenjournallines) | Yes |
| workflowItems | [WorkflowItems[]](#workflowitems) | Yes |
| workflowPurchaseDocumentLines | [WorkflowPurchaseDocumentLines[]](#workflowpurchasedocumentlines) | Yes |
| workflowPurchaseDocuments | [WorkflowPurchaseDocuments[]](#workflowpurchasedocuments) | Yes |
| workflowPurchaseDocumentsworkflowPurchaseDocumentLines | [WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]](#workflowpurchasedocumentsworkflowpurchasedocumentlines) | Yes |
| workflowSalesDocumentLines | [WorkflowSalesDocumentLines[]](#workflowsalesdocumentlines) | Yes |
| workflowSalesDocuments | [WorkflowSalesDocuments[]](#workflowsalesdocuments) | Yes |
| workflowSalesDocumentsworkflowSalesDocumentLines | [WorkflowSalesDocumentsworkflowSalesDocumentLines[]](#workflowsalesdocumentsworkflowsalesdocumentlines) | Yes |
| workflowVendors | [WorkflowVendors[]](#workflowvendors) | Yes |
| workflowWebhookSubscriptions | [WorkflowWebhookSubscriptions[]](#workflowwebhooksubscriptions) | Yes |
| bankAccountLedgerEntries | [BankAccountLedgerEntries[]](#bankaccountledgerentries) | Yes |
| custLedgerEntries | [CustLedgerEntries[]](#custledgerentries) | Yes |
| dimensionSetEntries | [DimensionSetEntries[]](#dimensionsetentries) | Yes |
| fALedgerEntries | [FALedgerEntries[]](#faledgerentries) | Yes |
| gLBudgetEntries | [GLBudgetEntries[]](#glbudgetentries) | Yes |
| gLEntries | [GLEntries[]](#glentries) | Yes |
| itemLedgerEntries | [ItemLedgerEntries[]](#itemledgerentries) | Yes |
| jobLedgerEntries | [JobLedgerEntries[]](#jobledgerentries) | Yes |
| powerBICustItemLedgEnts | [PowerBICustItemLedgEnt[]](#powerbicustitemledgent) | Yes |
| powerBICustLedgerEntries | [PowerBICustLedgerEntries[]](#powerbicustledgerentries) | Yes |
| powerBICustomerLists | [PowerBICustomerList[]](#powerbicustomerlist) | Yes |
| powerBIGLAmountLists | [PowerBIGLAmountList[]](#powerbiglamountlist) | Yes |
| powerBIGLBudgetedAmounts | [PowerBIGLBudgetedAmount[]](#powerbiglbudgetedamount) | Yes |
| powerBIItemPurchaseLists | [PowerBIItemPurchaseList[]](#powerbiitempurchaselist) | Yes |
| powerBIItemSalesLists | [PowerBIItemSalesList[]](#powerbiitemsaleslist) | Yes |
| powerBIJobsLists | [PowerBIJobsList[]](#powerbijobslist) | Yes |
| powerBIPurchaseHdrVendors | [PowerBIPurchaseHdrVendor[]](#powerbipurchasehdrvendor) | Yes |
| powerBIPurchaseLists | [PowerBIPurchaseList[]](#powerbipurchaselist) | Yes |
| powerBISalesHdrCusts | [PowerBISalesHdrCust[]](#powerbisaleshdrcust) | Yes |
| powerBISalesLists | [PowerBISalesList[]](#powerbisaleslist) | Yes |
| powerBITopCustOverviews | [PowerBITopCustOverview[]](#powerbitopcustoverview) | Yes |
| powerBIVendItemLedgEnts | [PowerBIVendItemLedgEnt[]](#powerbivenditemledgent) | Yes |
| powerBIVendorLedgerEntries | [PowerBIVendorLedgerEntries[]](#powerbivendorledgerentries) | Yes |
| powerBIVendorLists | [PowerBIVendorList[]](#powerbivendorlist) | Yes |
| resLedgerEntries | [ResLedgerEntries[]](#resledgerentries) | Yes |
| segmentLines | [SegmentLines[]](#segmentlines) | Yes |
| valueEntries | [ValueEntries[]](#valueentries) | Yes |
| vendorLedgerEntries | [VendorLedgerEntries[]](#vendorledgerentries) | Yes |
# CustLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| transactionNo | int | No |
| customerNo | string | No |
| postingDate | date | No |
| dueDate | date | No |
| pmtDiscountDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| salespersonCode | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| iCPartnerCode | string | No |
| open | bool | No |
| currencyCode | string | No |
| dimensionSetID | int | No |
| amount | float | No |
| debitAmount | float | No |
| creditAmount | float | No |
| remainingAmount | float | No |
| amountLCY | float | No |
| debitAmountLCY | float | No |
| creditAmountLCY | float | No |
| remainingAmtLCY | float | No |
| originalAmtLCY | float | No |
| customerName | string | No |
| auxiliaryIndex1 | string | No |

# DimensionSetEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| dimensionSetID | int | No |
| dimensionCode | string | No |
| dimensionValueCode | string | No |
| dimensionValueID | int | No |
| dimensionName | string | No |
| dimensionValueName | string | No |

# ExcelTemplateAgedAccountsPayable
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

# ExcelTemplateAgedAccountsReceivable
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

# ExcelTemplateBalanceSheet
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| balance | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# ExcelTemplateCashFlowStatement
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# ExcelTemplateIncomeStatement
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# ExcelTemplateRetainedEarnings
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| lineNumber | int | No |
| display | string | No |
| netChange | float | No |
| lineType | string | No |
| indentation | int | No |
| dateFilter | date | No |

# ExcelTemplateTrialBalance
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

# ExcelTemplateViewCompanyInformation
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| displayName | string | No |
| currency | string | No |

# FALedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| gLEntryNo | int | No |
| fANo | string | No |
| fAClassCode | string | No |
| fASubclassCode | string | No |
| fAPostingDate | date | No |
| fAPostingCategory | string | No |
| fAPostingType | string | No |
| fALocationCode | string | No |
| depreciationBookCode | string | No |
| postingDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| locationCode | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| amountLCY | float | No |
| dimensionSetID | int | No |
| fADescription | string | No |
| auxiliaryIndex1 | string | No |

# GLBudgetEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| budgetName | string | No |
| gLAccountNo | string | No |
| businessUnitCode | string | No |
| date | date | No |
| amount | float | No |
| dimensionSetID | int | No |

# GLEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| transactionNo | int | No |
| gLAccountNo | string | No |
| postingDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| sourceCode | string | No |
| jobNo | string | No |
| businessUnitCode | string | No |
| reasonCode | string | No |
| genPostingType | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| useTax | bool | No |
| vATBusPostingGroup | string | No |
| vATProdPostingGroup | string | No |
| iCPartnerCode | string | No |
| amount | float | No |
| debitAmount | float | No |
| creditAmount | float | No |
| vATAmount | float | No |
| additionalCurrencyAmount | float | No |
| addCurrencyDebitAmount | float | No |
| addCurrencyCreditAmount | float | No |
| dimensionSetID | int | No |
| gLAccountName | string | No |

# GeneralJournals
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| journalTemplateName | string | No |
| journalBatchName | string | No |
| lineNo | int | No |
| currentJnlBatchName | string | No |
| x003CDocumentNoSimplePageX003E | string | No |
| x003CCurrentPostingDateX003E | date | No |
| x003CCurrentCurrencyCodeX003E | string | No |
| postingDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| incomingDocumentEntryNo | int | No |
| externalDocumentNo | string | No |
| appliesToExtDocNo | string | No |
| accountType | string | No |
| accountNo | string | No |
| accountName | string | No |
| description | string | No |
| payerInformation | string | No |
| transactionInformation | string | No |
| businessUnitCode | string | No |
| salespersPurchCode | string | No |
| campaignNo | string | No |
| currencyCode | string | No |
| eU3PartyTrade | bool | No |
| genPostingType | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vATBusPostingGroup | string | No |
| vATProdPostingGroup | string | No |
| quantity | float | No |
| amount | float | No |
| amountLCY | float | No |
| debitAmount | float | No |
| creditAmount | float | No |
| vATAmount | float | No |
| vATDifference | float | No |
| balVATAmount | float | No |
| balVATDifference | float | No |
| balAccountType | string | No |
| balAccountNo | string | No |
| balGenPostingType | string | No |
| balGenBusPostingGroup | string | No |
| balGenProdPostingGroup | string | No |
| deferralCode | string | No |
| jobQueueStatus | string | No |
| balVATBusPostingGroup | string | No |
| balVATProdPostingGroup | string | No |
| billToPayToNo | string | No |
| shipToOrderAddressCode | string | No |
| paymentTermsCode | string | No |
| appliedAutomatically | bool | No |
| applied | bool | No |
| appliesToDocType | string | No |
| appliesToDocNo | string | No |
| appliesToID | string | No |
| onHold | string | No |
| bankPaymentType | string | No |
| reasonCode | string | No |
| correction | bool | No |
| comment | string | No |
| directDebitMandateID | string | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| shortcutDimCode3 | string | No |
| shortcutDimCode4 | string | No |
| shortcutDimCode5 | string | No |
| shortcutDimCode6 | string | No |
| shortcutDimCode7 | string | No |
| shortcutDimCode8 | string | No |
| numberOfJournalRecords | int | No |
| balAccName | string | No |
| displayTotalDebit | float | No |
| displayTotalCredit | float | No |
| balance | float | No |
| totalBalance | float | No |

# InvoiceDocument
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| invoiceId | guid | No |
| base64 | string | No |
| binary | string | No |

# InvoiceReminder
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| invoiceId | guid | No |
| message | string | No |

# ItemLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| entryType | string | No |
| itemNo | string | No |
| crossReferenceNo | string | No |
| lotNo | string | No |
| itemCategoryCode | string | No |
| postingDate | date | No |
| expirationDate | date | No |
| warrantyDate | date | No |
| documentDate | date | No |
| documentNo | string | No |
| documentType | string | No |
| locationCode | string | No |
| jobNo | string | No |
| jobTaskNo | string | No |
| open | bool | No |
| quantity | float | No |
| unitOfMeasureCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| remainingQuantity | float | No |
| invoicedQuantity | float | No |
| dimensionSetID | int | No |
| costAmountExpected | float | No |
| costAmountActual | float | No |
| costAmountNonInvtbl | float | No |
| purchaseAmountExpected | float | No |
| purchaseAmountActual | float | No |
| salesAmountExpected | float | No |
| salesAmountActual | float | No |
| itemDescription | string | No |
| auxiliaryIndex1 | string | No |

# ItemSalesAndProfit
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |
| genProdPostingGroup | string | No |
| itemDiscGroup | string | No |
| itemTrackingCode | string | No |
| profit | float | No |
| scrap | float | No |
| salesUnitOfMeasure | string | No |
| standardCost | float | No |
| unitCost | float | No |
| unitPrice | float | No |
| unitVolume | float | No |
| vendorNo | string | No |
| purchUnitOfMeasure | string | No |
| cOGSLCY | float | No |
| inventory | float | No |
| netChange | float | No |
| netInvoicedQty | float | No |
| purchasesLCY | float | No |
| purchasesQty | float | No |
| salesLCY | float | No |
| salesQty | float | No |
| vendorName | string | No |
| auxiliaryIndex1 | string | No |

# ItemSalesByCustomer
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| documentNo | string | No |
| postingDate | date | No |
| itemNo | string | No |
| itemLedgerEntryQuantity | float | No |
| dimensionSetID | int | No |
| customerNo | string | No |
| name | string | No |
| description | string | No |
| genProdPostingGroup | string | No |
| auxiliaryIndex1 | string | No |

# JobLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| jobNo | string | No |
| jobTaskNo | string | No |
| postingDate | date | No |
| documentDate | date | No |
| documentNo | string | No |
| jobPostingGroup | string | No |
| resourceGroupNo | string | No |
| workTypeCode | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| locationCode | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| quantityBase | float | No |
| directUnitCostLCY | float | No |
| unitCostLCY | float | No |
| totalCostLCY | float | No |
| unitPriceLCY | float | No |
| totalPriceLCY | float | No |
| lineAmountLCY | float | No |
| dimensionSetID | int | No |
| jobDescription | string | No |
| auxiliaryIndex1 | string | No |

# JobList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |
| billToCustomerNo | string | No |
| status | string | No |
| personResponsible | string | No |
| nextInvoiceDate | date | No |
| jobPostingGroup | string | No |
| searchDescription | string | No |
| percentOfOverduePlanningLines | float | No |
| percentCompleted | float | No |
| percentInvoiced | float | No |
| projectManager | string | No |

# JobPlanningLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| jobNo | string | No |
| jobTaskNo | string | No |
| lineNo | int | No |
| lineType | string | No |
| usageLink | bool | No |
| planningDate | date | No |
| plannedDeliveryDate | date | No |
| currencyDate | date | No |
| documentNo | string | No |
| type | string | No |
| no | string | No |
| description | string | No |
| priceCalculationMethod | string | No |
| costCalculationMethod | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| variantCode | string | No |
| locationCode | string | No |
| workTypeCode | string | No |
| unitOfMeasureCode | string | No |
| reserveName | string | No |
| quantity | float | No |
| reservedQuantity | float | No |
| quantityBase | float | No |
| remainingQty | float | No |
| directUnitCostLCY | float | No |
| unitCost | float | No |
| unitCostLCY | float | No |
| totalCost | float | No |
| remainingTotalCost | float | No |
| totalCostLCY | float | No |
| remainingTotalCostLCY | float | No |
| unitPrice | float | No |
| unitPriceLCY | float | No |
| lineAmount | float | No |
| remainingLineAmount | float | No |
| lineAmountLCY | float | No |
| remainingLineAmountLCY | float | No |
| lineDiscountAmount | float | No |
| lineDiscountPercent | float | No |
| totalPrice | float | No |
| totalPriceLCY | float | No |
| qtyPosted | float | No |
| qtyToTransferToJournal | float | No |
| postedTotalCost | float | No |
| postedTotalCostLCY | float | No |
| postedLineAmount | float | No |
| postedLineAmountLCY | float | No |
| qtyTransferredToInvoice | float | No |
| qtyToTransferToInvoice | float | No |
| qtyInvoiced | float | No |
| qtyToInvoice | float | No |
| invoicedAmountLCY | float | No |
| invoicedCostAmountLCY | float | No |
| userID | string | No |
| serialNo | string | No |
| lotNo | string | No |
| jobContractEntryNo | int | No |
| ledgerEntryType | string | No |
| ledgerEntryNo | int | No |
| systemCreatedEntry | bool | No |
| overdue | bool | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| jobTaskNoLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# JobTaskLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| jobNo | string | No |
| jobTaskNo | string | No |
| description | string | No |
| jobTaskType | string | No |
| totaling | string | No |
| jobPostingGroup | string | No |
| wIPTotal | string | No |
| wIPMethod | string | No |
| startDate | date | No |
| endDate | date | No |
| scheduleTotalCost | float | No |
| scheduleTotalPrice | float | No |
| usageTotalCost | float | No |
| usageTotalPrice | float | No |
| contractTotalCost | float | No |
| contractTotalPrice | float | No |
| contractInvoicedCost | float | No |
| contractInvoicedPrice | float | No |
| remainingTotalCost | float | No |
| remainingTotalPrice | float | No |
| eACTotalCost | float | No |
| eACTotalPrice | float | No |
| globalDimension1Code | string | No |
| globalDimension2Code | string | No |
| outstandingOrders | float | No |
| amtRcdNotInvoiced | float | No |
| planningDateFilter | string | No |
| postingDateFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| totalingLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# Media
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | guid | No |
| description | string | No |
| content | string | No |
| mimeType | string | No |
| height | int | No |
| width | int | No |
| companyName | string | No |
| expirationDate | date | No |
| prohibitCache | bool | No |
| fileName | string | No |
| securityToken | string | No |
| creatingUser | string | No |

# PowerBIAgedAccPayable
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| value | float | No |
| periodType | string | No |
| date | string | No |
| dateSorting | int | No |
| periodTypeSorting | int | No |

# PowerBIAgedAccReceivable
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| value | float | No |
| periodType | string | No |
| date | string | No |
| measureName | string | No |
| dateSorting | int | No |
| periodTypeSorting | int | No |

# PowerBIAgedInventoryChart
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| value | float | No |
| date | string | No |
| periodType | string | No |
| periodTypeSorting | int | No |

# PowerBICustItemLedgEnt
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| itemNo | string | No |
| quantity | float | No |
| auxiliaryIndex1 | int | No |

# PowerBICustLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| dueDate | date | No |
| open | bool | No |
| customerPostingGroup | string | No |
| salesLCY | float | No |
| postingDate | date | No |
| remainingAmtLCY | float | No |

# PowerBICustomerList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| customerName | string | No |
| customerNo | string | No |
| creditLimit | float | No |
| balanceDue | float | No |
| postingDate | date | No |
| custLedgerEntryNo | int | No |
| amount | float | No |
| amountLCY | float | No |
| transactionNo | int | No |
| entryNo | int | No |

# PowerBIGLAmountList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| gLAccountNo | string | No |
| name | string | No |
| accountType | string | No |
| debitCredit | string | No |
| postingDate | date | No |
| amount | float | No |
| entryNo | int | No |

# PowerBIGLBudgetedAmount
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| gLAccountNo | string | No |
| name | string | No |
| accountType | string | No |
| debitCredit | string | No |
| amount | float | No |
| date | date | No |
| auxiliaryIndex1 | int | No |

# PowerBIItemPurchaseList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| itemNo | string | No |
| searchDescription | string | No |
| purchasePostDate | date | No |
| purchasedQuantity | float | No |
| purchaseEntryNo | int | No |

# PowerBIItemSalesList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| itemNo | string | No |
| searchDescription | string | No |
| salesPostDate | date | No |
| soldQuantity | float | No |
| salesEntryNo | int | No |

# PowerBIJobActVBudgCost
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| measureNo | string | No |
| measureName | string | No |
| value | float | No |

# PowerBIJobActVBudgPrice
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| measureNo | string | No |
| measureName | string | No |
| value | float | No |

# PowerBIJobProfitability
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| measureNo | string | No |
| measureName | string | No |
| value | float | No |

# PowerBIJobsList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| jobNo | string | No |
| searchDescription | string | No |
| complete | bool | No |
| status | string | No |
| postingDate | date | No |
| totalCost | float | No |
| entryNo | int | No |
| entryType | string | No |

# PowerBIPurchaseHdrVendor
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| itemNo | string | No |
| quantity | float | No |
| baseUnitOfMeasure | string | No |
| description | string | No |
| unitPrice | float | No |
| inventory | float | No |
| qtyOnPurchOrder | float | No |
| vendorNo | string | No |
| name | string | No |
| countryRegionCode | string | No |
| balance | float | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |
| auxiliaryIndex3 | string | No |
| auxiliaryIndex4 | int | No |
| auxiliaryIndex5 | string | No |

# PowerBIPurchaseList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentNo | string | No |
| orderDate | date | No |
| expectedReceiptDate | date | No |
| dueDate | date | No |
| pmtDiscountDate | date | No |
| quantity | float | No |
| amount | float | No |
| itemNo | string | No |
| description | string | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |
| auxiliaryIndex3 | string | No |
| auxiliaryIndex4 | int | No |

# PowerBIReportLabels
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| labelID | string | No |
| textValue | string | No |

# PowerBISalesHdrCust
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| itemNo | string | No |
| quantity | float | No |
| qtyInvoicedBase | float | No |
| qtyShippedBase | float | No |
| baseUnitOfMeasure | string | No |
| description | string | No |
| unitPrice | float | No |
| inventory | float | No |
| customerNo | string | No |
| name | string | No |
| countryRegionCode | string | No |
| balance | float | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |
| auxiliaryIndex3 | string | No |
| auxiliaryIndex4 | int | No |
| auxiliaryIndex5 | string | No |

# PowerBISalesList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentNo | string | No |
| requestedDeliveryDate | date | No |
| shipmentDate | date | No |
| dueDate | date | No |
| quantity | float | No |
| amount | float | No |
| itemNo | string | No |
| description | string | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |
| auxiliaryIndex3 | string | No |
| auxiliaryIndex4 | int | No |

# PowerBISalesPipeline
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| rowNo | string | No |
| value | float | No |
| measureName | string | No |
| measureNo | string | No |

# PowerBITop5Opportunities
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| measureNo | string | No |
| value | float | No |
| measureName | string | No |

# PowerBITopCustOverview
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| postingDate | date | No |
| customerNo | string | No |
| salesLCY | float | No |
| name | string | No |
| auxiliaryIndex1 | string | No |

# PowerBIVendItemLedgEnt
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| itemNo | string | No |
| quantity | float | No |
| auxiliaryIndex1 | int | No |

# PowerBIVendorLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| dueDate | date | No |
| open | bool | No |
| remainingAmtLCY | float | No |

# PowerBIVendorList
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| vendorNo | string | No |
| vendorName | string | No |
| balanceDue | float | No |
| postingDate | date | No |
| appliedVendLedgerEntryNo | int | No |
| amount | float | No |
| amountLCY | float | No |
| transactionNo | int | No |
| entryNo | int | No |
| remainingPmtDiscPossible | float | No |

# PowerBIWorkDateCalc
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| number | int | No |
| workDateNAV | date | No |

# ResLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| entryType | string | No |
| resourceNo | string | No |
| resourceGroupNo | string | No |
| jobNo | string | No |
| workTypeCode | string | No |
| postingDate | date | No |
| documentDate | date | No |
| documentNo | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| unitOfMeasureCode | string | No |
| quantity | float | No |
| quantityBase | float | No |
| directUnitCost | float | No |
| unitCost | float | No |
| totalCost | float | No |
| unitPrice | float | No |
| totalPrice | float | No |
| dimensionSetID | int | No |
| resourceName | string | No |
| resourceGroupName | string | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |

# SalesDashboard
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| documentNo | string | No |
| postingDate | date | No |
| entryType | string | No |
| quantity | float | No |
| dimensionSetID | int | No |
| salesAmountActual | float | No |
| salesAmountExpected | float | No |
| costAmountActual | float | No |
| costAmountExpected | float | No |
| countryRegionName | string | No |
| customerName | string | No |
| customerPostingGroup | string | No |
| customerDiscGroup | string | No |
| city | string | No |
| description | string | No |
| salesPersonName | string | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |
| auxiliaryIndex3 | string | No |
| auxiliaryIndex4 | string | No |

# SalesOpportunities
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | string | No |
| description | string | No |
| creationDate | date | No |
| closed | bool | No |
| salesCycleCode | string | No |
| dateClosed | date | No |
| priority | string | No |
| status | string | No |
| calcdCurrentValueLCY | float | No |
| chancesOfSuccess | float | No |
| completed | float | No |
| contactName | string | No |
| estimatedClosingDate | date | No |
| salespersonName | string | No |
| estimatedValueLCY | float | No |
| contactCompanyName | string | No |

# SalesOrdersBySalesPerson
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| itemNo | string | No |
| itemDescription | string | No |
| documentNo | string | No |
| amount | float | No |
| lineNo | int | No |
| dimensionSetID | int | No |
| postingDate | date | No |
| currenyDescription | string | No |
| currencyCode | string | No |
| salesPersonCode | string | No |
| salesPersonName | string | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |
| auxiliaryIndex3 | string | No |
| auxiliaryIndex4 | string | No |

# SegmentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| segmentNo | string | No |
| lineNo | int | No |
| contactNo | string | No |
| campaignNo | string | No |
| salespersonCode | string | No |
| correspondenceType | string | No |
| interactionTemplateCode | string | No |
| costLCY | float | No |
| durationMin | float | No |
| attachmentNo | int | No |
| campaignResponse | bool | No |
| informationFlow | string | No |
| initiatedBy | string | No |
| contactAltAddressCode | string | No |
| evaluation | string | No |
| campaignTarget | bool | No |
| languageCode | string | No |
| description | string | No |
| date | date | No |
| timeOfInteraction | string | No |
| attemptFailed | bool | No |
| toDoNo | string | No |
| contactCompanyNo | string | No |
| campaignEntryNo | int | No |
| interactionGroupCode | string | No |
| documentType | string | No |
| documentNo | string | No |
| sendWordDocAsAttmt | bool | No |
| contactVia | string | No |
| versionNo | int | No |
| docNoOccurrence | int | No |
| subject | string | No |
| opportunityNo | string | No |
| wizardStep | string | No |
| wizardContactName | string | No |
| opportunityDescription | string | No |
| campaignDescription | string | No |
| interactionSuccessful | bool | No |
| dialContact | bool | No |
| mailContact | bool | No |
| contactName | string | No |
| contactCompanyName | string | No |

# TopCustomerOverview
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| name | string | No |
| no | string | No |
| countryRegionCode | string | No |
| city | string | No |
| globalDimension1Code | string | No |
| globalDimension2Code | string | No |
| salespersonCode | string | No |
| salesLCY | float | No |
| profitLCY | float | No |
| salesPersonName | string | No |
| countryRegionName | string | No |
| auxiliaryIndex1 | string | No |
| auxiliaryIndex2 | string | No |

# UserTaskSetComplete
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| iD | int | No |
| title | string | No |
| dueDateTime | date | No |
| priority | string | No |
| percentComplete | int | No |
| assignedToUserName | string | No |
| userTaskGroupAssignedTo | string | No |
| createdDateTime | date | No |
| completedDateTime | date | No |
| startDateTime | date | No |
| createdByUserName | string | No |
| completedByUserName | string | No |

## Actions

| Name |
| --- | --- | :-: |
# ValueEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| itemNo | string | No |
| itemLedgerEntryNo | int | No |
| itemLedgerEntryType | string | No |
| itemLedgerEntryQuantity | float | No |
| postingDate | date | No |
| valuationDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| locationCode | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| jobNo | string | No |
| jobTaskNo | string | No |
| jobLedgerEntryNo | int | No |
| valuedQuantity | float | No |
| invoicedQuantity | float | No |
| costPerUnit | float | No |
| costPostedToGL | float | No |
| expectedCost | bool | No |
| costAmountActual | float | No |
| costAmountExpected | float | No |
| costAmountNonInvtbl | float | No |
| salesAmountActual | float | No |
| salesAmountExpected | float | No |
| purchaseAmountActual | float | No |
| purchaseAmountExpected | float | No |
| dimensionSetID | int | No |
| itemDescription | string | No |
| auxiliaryIndex1 | string | No |

# VendorLedgerEntries
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| entryNo | int | No |
| transactionNo | int | No |
| vendorNo | string | No |
| postingDate | date | No |
| dueDate | date | No |
| pmtDiscountDate | date | No |
| documentDate | date | No |
| documentType | string | No |
| documentNo | string | No |
| purchaserCode | string | No |
| sourceCode | string | No |
| reasonCode | string | No |
| iCPartnerCode | string | No |
| open | bool | No |
| currencyCode | string | No |
| dimensionSetID | int | No |
| amount | float | No |
| debitAmount | float | No |
| creditAmount | float | No |
| remainingAmount | float | No |
| amountLCY | float | No |
| debitAmountLCY | float | No |
| creditAmountLCY | float | No |
| remainingAmtLCY | float | No |
| originalAmtLCY | float | No |
| vendorName | string | No |
| auxiliaryIndex1 | string | No |

# InvoicingAttachment
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| documentId | guid | No |
| fileName | string | No |
| byteSize | int | No |
| content | string | No |
| base64Content | string | No |
| lastModifiedDateTime | date | Yes |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingContact
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| number | string | No |
| xrmId | guid | No |
| displayName | string | No |
| phoneNumber | string | No |
| email | string | No |
| customerId | guid | No |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingCountryRegion
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| lastModifiedDateTime | date | Yes |

# InvoicingCustomer
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| graphContactId | string | No |
| contactId | guid | No |
| displayName | string | No |
| type | string | No |
| isBlocked | bool | No |
| address | postalAddressType | No |
| phoneNumber | string | No |
| email | string | No |
| website | string | No |
| pricesIncludeTax | bool | No |
| taxLiable | bool | No |
| taxAreaId | guid | No |
| taxAreaDisplayName | string | No |
| taxRegistrationNumber | string | No |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| paymentMethodId | guid | No |
| balance | float | No |
| overdueAmount | float | No |
| totalSalesExcludingTax | float | No |
| lastModifiedDateTime | date | Yes |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingCustomersCoupons | [InvoicingCustomersCoupon[]](#invoicingcustomerscoupon) | Yes |
# InvoicingCustomersCoupon
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| claimId | string | No |
| graphContactId | string | No |
| customerId | guid | No |
| usage | string | No |
| offer | string | No |
| terms | string | No |
| code | string | No |
| expiration | date | No |
| discountValue | float | No |
| discountType | string | No |
| createdDateTime | date | No |
| isValid | bool | No |
| status | string | No |
| amount | string | No |
| isApplied | bool | No |

# InvoicingEmailPreview
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentId | guid | No |
| email | string | No |
| subject | string | No |
| body | string | No |
| bodyText | string | No |

# InvoicingEmailSetting
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| recipientType | string | No |
| eMail | string | No |

# InvoicingExportInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| startDate | date | No |
| endDate | date | No |
| email | string | No |

# InvoicingGeneralSetting
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| currencySymbol | string | No |
| paypalEmailAddress | string | No |
| countryRegionCode | string | No |
| languageId | int | No |
| languageCode | string | No |
| languageDisplayName | string | No |
| defaultTaxId | guid | No |
| defaultTaxDisplayName | string | No |
| defaultPaymentTermsId | guid | No |
| defaultPaymentTermsDisplayName | string | No |
| defaultPaymentMethodId | guid | No |
| defaultPaymentMethodDisplayName | string | No |
| amountRoundingPrecision | float | No |
| unitAmountRoundingPrecision | float | No |
| quantityRoundingPrecision | float | No |
| taxRoundingPrecision | float | No |
| draftInvoiceFileName | string | No |
| postedInvoiceFileName | string | No |
| quoteFileName | string | No |
| taxableGroupId | guid | No |
| nonTaxableGroupId | guid | No |
| enableSynchronization | bool | No |
| enableSyncCoupons | bool | No |
| updateVersion | string | No |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingItem
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| displayName | string | No |
| type | string | No |
| blocked | bool | No |
| baseUnitOfMeasureId | guid | No |
| baseUnitOfMeasureIntStdCode | string | No |
| baseUnitOfMeasureDescription | string | No |
| gtin | string | No |
| inventory | float | No |
| unitPrice | float | No |
| priceIncludesTax | bool | No |
| unitCost | float | No |
| taxGroupId | guid | No |
| taxGroupCode | string | No |
| taxable | bool | No |
| lastModifiedDateTime | date | Yes |

# InvoicingKPI
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| invoicedYearToDate | float | No |
| numberOfInvoicesYearToDate | int | No |
| invoicedCurrentMonth | float | No |
| salesInvoicesOutsdanding | float | No |
| salesInvoicesOverdue | float | No |
| numberOfQuotes | int | No |
| numberOfDraftInvoices | int | No |
| requestedDateTime | date | No |
| yTDDateFilter | string | No |

# InvoicingLanguage
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| languageId | int | No |
| languageCode | string | No |
| displayName | string | No |
| default | bool | No |

# InvoicingPDF
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentId | guid | No |
| fileName | string | No |
| content | string | No |

# InvoicingPaymentMethod
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| default | bool | No |
| lastModifiedDateTime | date | Yes |

# InvoicingPaymentTerm
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
| default | bool | No |

# InvoicingQBOSyncAuth
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| key | int | No |
| authorizationUrl | string | No |

# InvoicingSMTPMailSetup
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| primaryKey | string | No |
| sMTPServer | string | No |
| authentication | string | No |
| userName | string | No |
| sMTPServerPort | int | No |
| secureConnection | bool | No |
| passWord | string | No |

# InvoicingSalesInvoiceOverview
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| customerNumber | string | No |
| customerName | string | No |
| invoiceDate | date | No |
| dueDate | date | No |
| currencyCode | string | No |
| subtotalAmount | float | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| status | string | No |
| lastModifiedDateTime | date | Yes |
| isTest | bool | No |
| lastEmailSentStatus | string | No |

# InvoicingSalesInvoice
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| customerId | guid | No |
| graphContactId | string | No |
| customerNumber | string | No |
| taxLiable | bool | No |
| taxAreaId | guid | No |
| taxAreaDisplayName | string | No |
| taxRegistrationNumber | string | No |
| customerName | string | No |
| customerEmail | string | No |
| invoiceDate | date | No |
| dueDate | date | No |
| billingPostalAddress | postalAddressType | No |
| pricesIncludeTax | bool | No |
| currencyCode | string | No |
| lines | nativeInvoicingSalesInvoiceLines[] | No |
| subtotalAmount | float | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| coupons | nativeInvoicingSalesDocumentCoupons[] | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| noteForCustomer | string | No |
| status | string | No |
| lastModifiedDateTime | date | Yes |
| attachments | nativeInvoicingDocumentAttachments[] | No |
| invoiceDiscountCalculation | string | No |
| invoiceDiscountValue | float | No |
| remainingAmount | float | No |
| lastEmailSentStatus | string | No |
| lastEmailSentTime | date | No |
| isTest | bool | No |
| isCustomerBlocked | bool | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingSalesInvoicesPayments | [InvoicingSalesInvoicesPayment[]](#invoicingsalesinvoicespayment) | Yes |
## Actions

| Name |
| --- | --- | :-: |
| invoicingSalesInvoicesPayments |
# InvoicingSalesInvoicesPayment
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| appliesToInvoiceId | guid | No |
| paymentNo | int | No |
| customerId | guid | No |
| paymentDate | date | No |
| amount | float | No |
| paymentMethodId | guid | No |

# InvoicingSalesQuote
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| quoteDate | date | No |
| dueDate | date | No |
| validUntilDate | date | No |
| status | string | No |
| accepted | bool | No |
| acceptedDate | date | No |
| customerId | guid | No |
| graphContactId | string | No |
| customerNumber | string | No |
| customerName | string | No |
| customerEmail | string | No |
| taxLiable | bool | No |
| taxAreaId | guid | No |
| taxAreaDisplayName | string | No |
| taxRegistrationNumber | string | No |
| billingPostalAddress | postalAddressType | No |
| pricesIncludeTax | bool | No |
| shipmentMethod | string | No |
| salesperson | string | No |
| currencyCode | string | No |
| lines | nativeInvoicingSalesQuoteLines[] | No |
| subtotalAmount | float | No |
| discountAmount | float | No |
| discountAppliedBeforeTax | bool | No |
| coupons | nativeInvoicingSalesDocumentCoupons[] | No |
| totalAmountExcludingTax | float | No |
| totalTaxAmount | float | No |
| totalAmountIncludingTax | float | No |
| noteForCustomer | string | No |
| lastModifiedDateTime | date | Yes |
| attachments | nativeInvoicingDocumentAttachments[] | No |
| invoiceDiscountCalculation | string | No |
| invoiceDiscountValue | float | No |
| lastEmailSentStatus | string | No |
| lastEmailSentTime | date | No |
| isCustomerBlocked | bool | No |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingSalesTaxSetup
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| displayName | string | No |
| default | bool | No |
| city | string | No |
| cityRate | float | No |
| state | string | No |
| stateRate | float | No |
| canadaGstHstDescription | string | No |
| canadaGstHstRate | float | No |
| canadaPstDescription | string | No |
| canadaPstRate | float | No |
| lastModifiedDateTime | date | Yes |

# InvoicingSyncServicesSetting
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| key | int | No |
| qboSyncTitle | string | No |
| qboSyncDescription | string | No |
| qboSyncEnabled | bool | No |
| qbdSyncTitle | string | No |
| qbdSyncDescription | string | No |
| qbdSyncEnabled | bool | No |
| qbdSyncSendToEmail | string | No |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingTaxArea
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| taxType | string | No |
| lastModifiedDateTime | date | Yes |

# InvoicingTaxGroup
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| taxType | string | No |
| lastModifiedDateTime | date | Yes |

# InvoicingTaxRate
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| taxAreaId | guid | No |
| taxGroupId | guid | No |
| taxRate | float | No |

# InvoicingTestMail
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| code | string | No |
| email | string | No |

# InvoicingUnitsOfMeasure
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| code | string | No |
| displayName | string | No |
| internationalStandardCode | string | No |
| lastModifiedDateTime | date | Yes |

# InvoicingVATSetup
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| default | bool | No |
| displayName | string | No |
| vatPercentage | float | No |
| vatRegulationDescription | string | No |
| lastModifiedDateTime | date | Yes |

# Powerbifinance
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| no | int | No |
| date | date | No |
| closedPeriod | bool | No |
| accountScheduleName | string | No |
| kPICode | string | No |
| kPIName | string | No |
| netChangeActual | float | No |
| balanceAtDateActual | float | No |
| netChangeBudget | float | No |
| balanceAtDateBudget | float | No |
| netChangeActualLastYear | float | No |
| balanceAtDateActualLastYear | float | No |
| netChangeBudgetLastYear | float | No |
| balanceAtDateBudgetLastYear | float | No |
| netChangeForecast | float | No |
| balanceAtDateForecast | float | No |

# PurchaseDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| buyFromVendorNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| expectedReceiptDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToReceive | float | No |
| directUnitCost | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| unitPriceLcy | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| jobNumber | string | No |
| indirectCostPercent | float | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyRcdNotInvoiced | float | No |
| amtRcdNotInvoiced | float | No |
| quantityReceived | float | No |
| quantityInvoiced | float | No |
| receiptNumber | string | No |
| receiptLineNumber | int | No |
| profitPercent | float | No |
| payToVendorNumber | string | No |
| invDiscountAmount | float | No |
| vendorItemNumber | string | No |
| salesOrderNumber | string | No |
| salesOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| entryPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| useTax | bool | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| reservedQuantity | float | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| outstandingAmtExVatLcy | float | No |
| aRcdNotInvExVatLcy | float | No |
| dimensionSetId | int | No |
| jobTaskNumber | string | No |
| jobLineType | string | No |
| jobUnitPrice | float | No |
| jobTotalPrice | float | No |
| jobLineAmount | float | No |
| jobLineDiscountAmount | float | No |
| jobLineDiscountPercent | float | No |
| jobUnitPriceLcy | float | No |
| jobTotalPriceLcy | float | No |
| jobLineAmountLcy | float | No |
| jobLineDiscAmountLcy | float | No |
| jobCurrencyFactor | float | No |
| jobCurrencyCode | string | No |
| jobPlanningLineNumber | int | No |
| jobRemainingQty | float | No |
| jobRemainingQtyBase | float | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| prodOrderNumber | string | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToReceiveBase | float | No |
| qtyRcdNotInvoicedBase | float | No |
| qtyReceivedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| faPostingType | string | No |
| depreciationBookCode | string | No |
| salvageValue | float | No |
| deprUntilFaPostingDate | bool | No |
| deprAcquisitionCost | bool | No |
| maintenanceCode | string | No |
| insuranceNumber | string | No |
| budgetedFaNumber | string | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderSalesNumber | string | No |
| specialOrderSalesLineNumber | int | No |
| whseOutstandingQtyBase | float | No |
| completelyReceived | bool | No |
| requestedReceiptDate | date | No |
| promisedReceiptDate | date | No |
| leadTimeCalculation | string | No |
| inboundWhseHandlingTime | string | No |
| plannedReceiptDate | date | No |
| orderDate | date | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToShip | float | No |
| returnQtyToShipBase | float | No |
| returnQtyShippedNotInvd | float | No |
| retQtyShpdNotInvdBase | float | No |
| returnShpdNotInvd | float | No |
| returnShpdNotInvdLcy | float | No |
| returnQtyShipped | float | No |
| returnQtyShippedBase | float | No |
| returnShipmentNumber | string | No |
| returnShipmentLineNumber | int | No |
| returnReasonCode | string | No |
| subtype | string | No |
| routingNumber | string | No |
| operationNumber | string | No |
| workCenterNumber | string | No |
| finished | bool | No |
| prodOrderLineNumber | int | No |
| overheadRate | float | No |
| mpsOrder | bool | No |
| planningFlexibility | string | No |
| safetyLeadTime | string | No |
| routingReferenceNumber | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# PurchaseDocuments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| documentType | string | No |
| buyFromVendorNumber | string | No |
| number | string | No |
| payToVendorNumber | string | No |
| payToName | string | No |
| payToName2 | string | No |
| payToAddress | string | No |
| payToAddress2 | string | No |
| payToCity | string | No |
| payToContact | string | No |
| yourReference | string | No |
| shipToCode | string | No |
| shipToName | string | No |
| shipToName2 | string | No |
| shipToAddress | string | No |
| shipToAddress2 | string | No |
| shipToCity | string | No |
| shipToContact | string | No |
| orderDate | date | No |
| postingDate | date | No |
| expectedReceiptDate | date | No |
| postingDescription | string | No |
| paymentTermsCode | string | No |
| dueDate | date | No |
| paymentDiscountPercent | float | No |
| pmtDiscountDate | date | No |
| shipmentMethodCode | string | No |
| locationCode | string | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| vendorPostingGroup | string | No |
| currencyCode | string | No |
| currencyFactor | float | No |
| pricesIncludingVat | bool | No |
| invoiceDiscCode | string | No |
| languageCode | string | No |
| purchaserCode | string | No |
| orderClass | string | No |
| comment | bool | No |
| numberPrinted | int | No |
| onHold | string | No |
| appliesToDocType | string | No |
| appliesToDocNumber | string | No |
| balAccountNumber | string | No |
| recalculateInvoiceDisc | bool | No |
| receive | bool | No |
| invoice | bool | No |
| printPostedDocuments | bool | No |
| amount | float | No |
| amountIncludingVat | float | No |
| receivingNumber | string | No |
| postingNumber | string | No |
| lastReceivingNumber | string | No |
| lastPostingNumber | string | No |
| vendorOrderNumber | string | No |
| vendorShipmentNumber | string | No |
| vendorInvoiceNumber | string | No |
| vendorCrMemoNumber | string | No |
| vatRegistrationNumber | string | No |
| sellToCustomerNumber | string | No |
| reasonCode | string | No |
| genBusPostingGroup | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| vatCountryRegionCode | string | No |
| buyFromVendorName | string | No |
| buyFromVendorName2 | string | No |
| buyFromAddress | string | No |
| buyFromAddress2 | string | No |
| buyFromCity | string | No |
| buyFromContact | string | No |
| payToPostCode | string | No |
| payToCounty | string | No |
| payToCountryRegionCode | string | No |
| buyFromPostCode | string | No |
| buyFromCounty | string | No |
| buyFromCountryRegionCode | string | No |
| shipToPostCode | string | No |
| shipToCounty | string | No |
| shipToCountryRegionCode | string | No |
| balAccountType | string | No |
| orderAddressCode | string | No |
| entryPoint | string | No |
| correction | bool | No |
| documentDate | date | No |
| area | string | No |
| transactionSpecification | string | No |
| paymentMethodCode | string | No |
| numberSeries | string | No |
| postingNumberSeries | string | No |
| receivingNumberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| vatBusPostingGroup | string | No |
| appliesToId | string | No |
| vatBaseDiscountPercent | float | No |
| status | string | No |
| invoiceDiscountCalculation | string | No |
| invoiceDiscountValue | float | No |
| sendIcDocument | bool | No |
| icStatus | string | No |
| buyFromIcPartnerCode | string | No |
| payToIcPartnerCode | string | No |
| icDirection | string | No |
| prepaymentNumber | string | No |
| lastPrepaymentNumber | string | No |
| prepmtCrMemoNumber | string | No |
| lastPrepmtCrMemoNumber | string | No |
| prepaymentPercent | float | No |
| prepaymentNumberSeries | string | No |
| compressPrepayment | bool | No |
| prepaymentDueDate | date | No |
| prepmtCrMemoNumberSeries | string | No |
| prepmtPostingDescription | string | No |
| prepmtPmtDiscountDate | date | No |
| prepmtPaymentTermsCode | string | No |
| prepmtPaymentDiscountPercent | float | No |
| quoteNumber | string | No |
| jobQueueStatus | string | No |
| jobQueueEntryId | guid | No |
| incomingDocumentEntryNumber | int | No |
| creditorNumber | string | No |
| paymentReference | string | No |
| aRcdNotInvExVatLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| dimensionSetId | int | No |
| invoiceDiscountAmount | float | No |
| numberOfArchivedVersions | int | No |
| docNumberOccurrence | int | No |
| campaignNumber | string | No |
| buyFromContactNumber | string | No |
| payToContactNumber | string | No |
| responsibilityCenter | string | No |
| completelyReceived | bool | No |
| postingFromWhseRef | int | No |
| locationFilter | string | No |
| requestedReceiptDate | date | No |
| promisedReceiptDate | date | No |
| leadTimeCalculation | string | No |
| inboundWhseHandlingTime | string | No |
| vendorAuthorizationNumber | string | No |
| returnShipmentNumber | string | No |
| returnShipmentNumberSeries | string | No |
| ship | bool | No |
| lastReturnShipmentNumber | string | No |
| assignedUserId | string | No |
| pendingApprovals | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseDocumentsworkflowPurchaseDocumentLines | [PurchaseDocumentsworkflowPurchaseDocumentLines[]](#purchasedocumentsworkflowpurchasedocumentlines) | Yes |
# PurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| buyFromVendorNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| expectedReceiptDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToReceive | float | No |
| directUnitCost | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| unitPriceLcy | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| jobNumber | string | No |
| indirectCostPercent | float | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyRcdNotInvoiced | float | No |
| amtRcdNotInvoiced | float | No |
| quantityReceived | float | No |
| quantityInvoiced | float | No |
| receiptNumber | string | No |
| receiptLineNumber | int | No |
| profitPercent | float | No |
| payToVendorNumber | string | No |
| invDiscountAmount | float | No |
| vendorItemNumber | string | No |
| salesOrderNumber | string | No |
| salesOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| entryPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| useTax | bool | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| reservedQuantity | float | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| outstandingAmtExVatLcy | float | No |
| aRcdNotInvExVatLcy | float | No |
| dimensionSetId | int | No |
| jobTaskNumber | string | No |
| jobLineType | string | No |
| jobUnitPrice | float | No |
| jobTotalPrice | float | No |
| jobLineAmount | float | No |
| jobLineDiscountAmount | float | No |
| jobLineDiscountPercent | float | No |
| jobUnitPriceLcy | float | No |
| jobTotalPriceLcy | float | No |
| jobLineAmountLcy | float | No |
| jobLineDiscAmountLcy | float | No |
| jobCurrencyFactor | float | No |
| jobCurrencyCode | string | No |
| jobPlanningLineNumber | int | No |
| jobRemainingQty | float | No |
| jobRemainingQtyBase | float | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| prodOrderNumber | string | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToReceiveBase | float | No |
| qtyRcdNotInvoicedBase | float | No |
| qtyReceivedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| faPostingType | string | No |
| depreciationBookCode | string | No |
| salvageValue | float | No |
| deprUntilFaPostingDate | bool | No |
| deprAcquisitionCost | bool | No |
| maintenanceCode | string | No |
| insuranceNumber | string | No |
| budgetedFaNumber | string | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderSalesNumber | string | No |
| specialOrderSalesLineNumber | int | No |
| whseOutstandingQtyBase | float | No |
| completelyReceived | bool | No |
| requestedReceiptDate | date | No |
| promisedReceiptDate | date | No |
| leadTimeCalculation | string | No |
| inboundWhseHandlingTime | string | No |
| plannedReceiptDate | date | No |
| orderDate | date | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToShip | float | No |
| returnQtyToShipBase | float | No |
| returnQtyShippedNotInvd | float | No |
| retQtyShpdNotInvdBase | float | No |
| returnShpdNotInvd | float | No |
| returnShpdNotInvdLcy | float | No |
| returnQtyShipped | float | No |
| returnQtyShippedBase | float | No |
| returnShipmentNumber | string | No |
| returnShipmentLineNumber | int | No |
| returnReasonCode | string | No |
| subtype | string | No |
| routingNumber | string | No |
| operationNumber | string | No |
| workCenterNumber | string | No |
| finished | bool | No |
| prodOrderLineNumber | int | No |
| overheadRate | float | No |
| mpsOrder | bool | No |
| planningFlexibility | string | No |
| safetyLeadTime | string | No |
| routingReferenceNumber | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| sellToCustomerNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| shipmentDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToShip | float | No |
| unitPrice | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| customerPriceGroup | string | No |
| jobNumber | string | No |
| workTypeCode | string | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyShippedNotInvoiced | float | No |
| shippedNotInvoiced | float | No |
| quantityShipped | float | No |
| quantityInvoiced | float | No |
| shipmentNumber | string | No |
| shipmentLineNumber | int | No |
| profitPercent | float | No |
| billToCustomerNumber | string | No |
| invDiscountAmount | float | No |
| purchaseOrderNumber | string | No |
| purchOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| exitPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxCategory | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| vatClauseCode | string | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| shippedNotInvoicedLcy | float | No |
| shippedNotInvLcyNoVat | float | No |
| reservedQuantity | float | No |
| reserve | string | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| dimensionSetId | int | No |
| qtyToAssembleToOrder | float | No |
| qtyToAsmToOrderBase | float | No |
| atoWhseOutstandingQty | float | No |
| atoWhseOutstdQtyBase | float | No |
| jobTaskNumber | string | No |
| jobContractEntryNumber | int | No |
| postingDate | date | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| planned | bool | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToShipBase | float | No |
| qtyShippedNotInvdBase | float | No |
| qtyShippedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| depreciationBookCode | string | No |
| deprUntilFaPostingDate | bool | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| outOfStockSubstitution | bool | No |
| substitutionAvailable | bool | No |
| originallyOrderedNumber | string | No |
| originallyOrderedVarCode | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderPurchaseNumber | string | No |
| specialOrderPurchLineNumber | int | No |
| whseOutstandingQty | float | No |
| whseOutstandingQtyBase | float | No |
| completelyShipped | bool | No |
| requestedDeliveryDate | date | No |
| promisedDeliveryDate | date | No |
| shippingTime | string | No |
| outboundWhseHandlingTime | string | No |
| plannedDeliveryDate | date | No |
| plannedShipmentDate | date | No |
| shippingAgentCode | string | No |
| shippingAgentServiceCode | string | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToReceive | float | No |
| returnQtyToReceiveBase | float | No |
| returnQtyRcdNotInvd | float | No |
| retQtyRcdNotInvdBase | float | No |
| returnRcdNotInvd | float | No |
| returnRcdNotInvdLcy | float | No |
| returnQtyReceived | float | No |
| returnQtyReceivedBase | float | No |
| applFromItemEntry | int | No |
| bomItemNumber | string | No |
| returnReceiptNumber | string | No |
| returnReceiptLineNumber | int | No |
| returnReasonCode | string | No |
| allowLineDisc | bool | No |
| customerDiscGroup | string | No |
| subtype | string | No |
| priceDescription | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocuments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| documentType | string | No |
| sellToCustomerNumber | string | No |
| number | string | No |
| billToCustomerNumber | string | No |
| billToName | string | No |
| billToName2 | string | No |
| billToAddress | string | No |
| billToAddress2 | string | No |
| billToCity | string | No |
| billToContact | string | No |
| yourReference | string | No |
| shipToCode | string | No |
| shipToName | string | No |
| shipToName2 | string | No |
| shipToAddress | string | No |
| shipToAddress2 | string | No |
| shipToCity | string | No |
| shipToContact | string | No |
| orderDate | date | No |
| postingDate | date | No |
| shipmentDate | date | No |
| postingDescription | string | No |
| paymentTermsCode | string | No |
| dueDate | date | No |
| paymentDiscountPercent | float | No |
| pmtDiscountDate | date | No |
| shipmentMethodCode | string | No |
| locationCode | string | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| customerPostingGroup | string | No |
| currencyCode | string | No |
| currencyFactor | float | No |
| customerPriceGroup | string | No |
| pricesIncludingVat | bool | No |
| invoiceDiscCode | string | No |
| customerDiscGroup | string | No |
| languageCode | string | No |
| salespersonCode | string | No |
| orderClass | string | No |
| comment | bool | No |
| numberPrinted | int | No |
| onHold | string | No |
| appliesToDocType | string | No |
| appliesToDocNumber | string | No |
| balAccountNumber | string | No |
| recalculateInvoiceDisc | bool | No |
| ship | bool | No |
| invoice | bool | No |
| printPostedDocuments | bool | No |
| amount | float | No |
| amountIncludingVAT | float | No |
| shippingNumber | string | No |
| postingNumber | string | No |
| lastShippingNumber | string | No |
| lastPostingNumber | string | No |
| prepaymentNumber | string | No |
| lastPrepaymentNumber | string | No |
| premptCrMemoNumber | string | No |
| lastPremtCrMemoNumber | string | No |
| vatRegistrationNumber | string | No |
| combineShipments | bool | No |
| reasonCode | string | No |
| genBusPostingGroup | string | No |
| eu3PartyTrade | bool | No |
| transactionType | string | No |
| transportMethod | string | No |
| vatCountryRegionCode | string | No |
| sellToCustomerName | string | No |
| sellToCustomerName2 | string | No |
| sellToAddress | string | No |
| sellToAddress2 | string | No |
| sellToCity | string | No |
| sellToContact | string | No |
| billToPostCode | string | No |
| billToCounty | string | No |
| billToCountryRegionCode | string | No |
| sellToPostCode | string | No |
| sellToCounty | string | No |
| sellToCountryRegionCode | string | No |
| shipToPostCode | string | No |
| shipToCounty | string | No |
| shipToCountryRegionCode | string | No |
| balAccountType | string | No |
| exitPoint | string | No |
| correction | bool | No |
| documentDate | date | No |
| externalDocumentNumber | string | No |
| area | string | No |
| transactionSpecification | string | No |
| paymentMethodCode | string | No |
| shippingAgentCode | string | No |
| packageTrackingNumber | string | No |
| numberSeries | string | No |
| postingNumberSeries | string | No |
| shippingNumberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| vatBusPostingGroup | string | No |
| reserve | string | No |
| appliesToId | string | No |
| vatBaseDiscountPercent | float | No |
| status | string | No |
| invoiceDiscountCalculation | string | No |
| invoiceDiscountValue | float | No |
| sendIcDocument | bool | No |
| icStatus | string | No |
| sellToIcPartnerCode | string | No |
| billToIcPartnerCode | string | No |
| icDirection | string | No |
| prepaymentPercent | float | No |
| prepaymentNumberSeries | string | No |
| compressPrepayment | bool | No |
| prepaymentDueDate | date | No |
| prepmtCrMemoNumberSeries | string | No |
| prepmtPostingDescription | string | No |
| prepmtPmtDiscountDate | date | No |
| prepmtPaymentTermsCode | string | No |
| prepmtPaymentDiscountPercent | float | No |
| quoteNumber | string | No |
| quoteValidUntilDate | date | No |
| quoteSentToCustomer | date | No |
| quoteAccepted | bool | No |
| quoteAcceptedDate | date | No |
| jobQueueStatus | string | No |
| jobQueueEntryId | guid | No |
| incomingDocumentEntryNumber | int | No |
| workDescription | string | No |
| amountShippedNotInvoicedInclVat | float | No |
| amountShippedNotInvoiced | float | No |
| dimensionSetId | int | No |
| paymentServiceSetId | int | No |
| directDebitMandateId | string | No |
| invoiceDiscountAmount | float | No |
| numberOfArchivedVersions | int | No |
| docNumberOccurrence | int | No |
| campaignNumber | string | No |
| sellToCustomerTemplateCode | string | No |
| sellToContactNumber | string | No |
| billToContactNumber | string | No |
| billToCustomerTemplateCode | string | No |
| opportunityNumber | string | No |
| responsibilityCenter | string | No |
| shippingAdvice | string | No |
| shippedNotInvoiced | bool | No |
| completelyShipped | bool | No |
| postingFromWhseRef | int | No |
| locationFilter | string | No |
| shipped | bool | No |
| requestedDeliveryDate | date | No |
| promisedDeliveryDate | date | No |
| shippingTime | string | No |
| outboundWhseHandlingTime | string | No |
| shippingAgentServiceCode | string | No |
| lateOrderShipping | bool | No |
| receive | bool | No |
| returnReceiptNumber | string | No |
| returnReceiptNumberSeries | string | No |
| lastReturnReceiptNumber | string | No |
| allowLineDisc | bool | No |
| getShipmentUsed | bool | No |
| assignedUserId | string | No |
| dateFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesDocumentsworkflowSalesDocumentLines | [SalesDocumentsworkflowSalesDocumentLines[]](#salesdocumentsworkflowsalesdocumentlines) | Yes |
# SalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| sellToCustomerNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| shipmentDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToShip | float | No |
| unitPrice | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| customerPriceGroup | string | No |
| jobNumber | string | No |
| workTypeCode | string | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyShippedNotInvoiced | float | No |
| shippedNotInvoiced | float | No |
| quantityShipped | float | No |
| quantityInvoiced | float | No |
| shipmentNumber | string | No |
| shipmentLineNumber | int | No |
| profitPercent | float | No |
| billToCustomerNumber | string | No |
| invDiscountAmount | float | No |
| purchaseOrderNumber | string | No |
| purchOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| exitPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxCategory | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| vatClauseCode | string | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| shippedNotInvoicedLcy | float | No |
| shippedNotInvLcyNoVat | float | No |
| reservedQuantity | float | No |
| reserve | string | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| dimensionSetId | int | No |
| qtyToAssembleToOrder | float | No |
| qtyToAsmToOrderBase | float | No |
| atoWhseOutstandingQty | float | No |
| atoWhseOutstdQtyBase | float | No |
| jobTaskNumber | string | No |
| jobContractEntryNumber | int | No |
| postingDate | date | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| planned | bool | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToShipBase | float | No |
| qtyShippedNotInvdBase | float | No |
| qtyShippedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| depreciationBookCode | string | No |
| deprUntilFaPostingDate | bool | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| outOfStockSubstitution | bool | No |
| substitutionAvailable | bool | No |
| originallyOrderedNumber | string | No |
| originallyOrderedVarCode | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderPurchaseNumber | string | No |
| specialOrderPurchLineNumber | int | No |
| whseOutstandingQty | float | No |
| whseOutstandingQtyBase | float | No |
| completelyShipped | bool | No |
| requestedDeliveryDate | date | No |
| promisedDeliveryDate | date | No |
| shippingTime | string | No |
| outboundWhseHandlingTime | string | No |
| plannedDeliveryDate | date | No |
| plannedShipmentDate | date | No |
| shippingAgentCode | string | No |
| shippingAgentServiceCode | string | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToReceive | float | No |
| returnQtyToReceiveBase | float | No |
| returnQtyRcdNotInvd | float | No |
| retQtyRcdNotInvdBase | float | No |
| returnRcdNotInvd | float | No |
| returnRcdNotInvdLcy | float | No |
| returnQtyReceived | float | No |
| returnQtyReceivedBase | float | No |
| applFromItemEntry | int | No |
| bomItemNumber | string | No |
| returnReceiptNumber | string | No |
| returnReceiptLineNumber | int | No |
| returnReasonCode | string | No |
| allowLineDisc | bool | No |
| customerDiscGroup | string | No |
| subtype | string | No |
| priceDescription | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowCustomers
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| name | string | No |
| searchName | string | No |
| name2 | string | No |
| address | string | No |
| address2 | string | No |
| city | string | No |
| contact | string | No |
| phoneNumber | string | No |
| telexNumber | string | No |
| documentSendingProfile | string | No |
| ourAccountNumber | string | No |
| territoryCode | string | No |
| globalDimension1Code | string | No |
| globalDimension2Code | string | No |
| chainName | string | No |
| budgetedAmount | float | No |
| creditLimitLcy | float | No |
| customerPostingGroup | string | No |
| currencyCode | string | No |
| customerPriceGroup | string | No |
| languageCode | string | No |
| statisticsGroup | int | No |
| paymentTermsCode | string | No |
| finChargeTermsCode | string | No |
| salespersonCode | string | No |
| shipmentMethodCode | string | No |
| shippingAgentCode | string | No |
| placeOfExport | string | No |
| invoiceDiscCode | string | No |
| customerDiscGroup | string | No |
| countryRegionCode | string | No |
| collectionMethod | string | No |
| amount | float | No |
| comment | bool | No |
| blocked | string | No |
| invoiceCopies | int | No |
| lastStatementNumber | int | No |
| printStatements | bool | No |
| billToCustomerNumber | string | No |
| priority | int | No |
| paymentMethodCode | string | No |
| lastModifiedDateTime | date | Yes |
| lastDateModified | date | No |
| dateFilter | string | No |
| globalDimension1Filter | string | No |
| globalDimension2Filter | string | No |
| balance | float | No |
| balanceLcy | float | No |
| netChange | float | No |
| netChangeLcy | float | No |
| salesLcy | float | No |
| profitLcy | float | No |
| invDiscountsLcy | float | No |
| pmtDiscountsLcy | float | No |
| balanceDue | float | No |
| balanceDueLcy | float | No |
| payments | float | No |
| invoiceAmounts | float | No |
| crMemoAmounts | float | No |
| financeChargeMemoAmounts | float | No |
| paymentsLcy | float | No |
| invAmountsLcy | float | No |
| crMemoAmountsLcy | float | No |
| finChargeMemoAmountsLcy | float | No |
| outstandingOrders | float | No |
| shippedNotInvoiced | float | No |
| applicationMethod | string | No |
| pricesIncludingVat | bool | No |
| locationCode | string | No |
| faxNumber | string | No |
| telexAnswerBack | string | No |
| vatRegistrationNumber | string | No |
| combineShipments | bool | No |
| genBusPostingGroup | string | No |
| gln | string | No |
| postCode | string | No |
| county | string | No |
| debitAmount | float | No |
| creditAmount | float | No |
| debitAmountLcy | float | No |
| creditAmountLcy | float | No |
| eMail | string | No |
| homePage | string | No |
| reminderTermsCode | string | No |
| reminderAmounts | float | No |
| reminderAmountsLcy | float | No |
| numberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| vatBusPostingGroup | string | No |
| currencyFilter | string | No |
| outstandingOrdersLcy | float | No |
| shippedNotInvoicedLcy | float | No |
| reserve | string | No |
| blockPaymentTolerance | bool | No |
| pmtDiscToleranceLcy | float | No |
| pmtToleranceLcy | float | No |
| icPartnerCode | string | No |
| refunds | float | No |
| refundsLcy | float | No |
| otherAmounts | float | No |
| otherAmountsLcy | float | No |
| prepaymentPercent | float | No |
| outstandingInvoicesLcy | float | No |
| outstandingInvoices | float | No |
| billToNumberOfArchivedDoc | int | No |
| sellToNumberOfArchivedDoc | int | No |
| partnerType | string | No |
| preferredBankAccountCode | string | No |
| cashFlowPaymentTermsCode | string | No |
| primaryContactNumber | string | No |
| contactType | string | No |
| responsibilityCenter | string | No |
| shippingAdvice | string | No |
| shippingTime | string | No |
| shippingAgentServiceCode | string | No |
| serviceZoneCode | string | No |
| contractGainLossAmount | float | No |
| shipToFilter | string | No |
| outstandingServOrdersLcy | float | No |
| servShippedNotInvoicedLcy | float | No |
| outstandingServInvoicesLcy | float | No |
| allowLineDisc | bool | No |
| numberOfQuotes | int | No |
| numberOfBlanketOrders | int | No |
| numberOfOrders | int | No |
| numberOfInvoices | int | No |
| numberOfReturnOrders | int | No |
| numberOfCreditMemos | int | No |
| numberOfPstdShipments | int | No |
| numberOfPstdInvoices | int | No |
| numberOfPstdReturnReceipts | int | No |
| numberOfPstdCreditMemos | int | No |
| numberOfShipToAddresses | int | No |
| billToNumberOfQuotes | int | No |
| billToNumberOfBlanketOrders | int | No |
| billToNumberOfOrders | int | No |
| billToNumberOfInvoices | int | No |
| billToNumberOfReturnOrders | int | No |
| billToNumberOfCreditMemos | int | No |
| billToNumberOfPstdShipments | int | No |
| billToNumberOfPstdInvoices | int | No |
| billToNumberOfPstdReturnR | int | No |
| billToNumberOfPstdCrMemos | int | No |
| baseCalendarCode | string | No |
| copySellToAddrToQteFrom | string | No |
| validateEuVatRegNumber | bool | No |
| currencyId | guid | No |
| paymentTermsId | guid | No |
| shipmentMethodId | guid | No |
| paymentMethodId | guid | No |
| taxAreaId | guid | No |
| contactId | guid | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowGenJournalBatches
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| journalTemplateName | string | No |
| name | string | No |
| description | string | No |
| reasonCode | string | No |
| balAccountType | string | No |
| balAccountNumber | string | No |
| numberSeries | string | No |
| postingNumberSeries | string | No |
| copyVatSetupToJnlLines | bool | No |
| allowVatDifference | bool | No |
| allowPaymentExport | bool | No |
| bankStatementImportFormat | string | No |
| templateType | string | No |
| recurring | bool | No |
| suggestBalancingAmount | bool | No |
| lastModifiedDatetime | date | No |

# WorkflowGenJournalLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| journalTemplateName | string | No |
| journalBatchName | string | No |
| lineNumber | int | No |
| accountType | string | No |
| accountNumber | string | No |
| postingDate | date | No |
| documentType | string | No |
| documentNumber | string | No |
| description | string | No |
| vatPercent | float | No |
| balAccountNumber | string | No |
| currencyCode | string | No |
| amount | float | No |
| debitAmount | float | No |
| creditAmount | float | No |
| amountLcy | float | No |
| balanceLcy | float | No |
| currencyFactor | float | No |
| salesPurchLcy | float | No |
| profitLcy | float | No |
| invDiscountLcy | float | No |
| billToPayToNumber | string | No |
| postingGroup | string | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| salespersPurchCode | string | No |
| sourceCode | string | No |
| systemCreatedEntry | bool | No |
| onHold | string | No |
| appliesToDocType | string | No |
| appliesToDocNumber | string | No |
| dueDate | date | No |
| pmtDiscountDate | date | No |
| paymentDiscountPercent | float | No |
| jobNumber | string | No |
| quantity | float | No |
| vatAmount | float | No |
| vatPosting | string | No |
| paymentTermsCode | string | No |
| appliesToId | string | No |
| businessUnitCode | string | No |
| reasonCode | string | No |
| recurringMethod | string | No |
| expirationDate | date | No |
| recurringFrequency | string | No |
| allocatedAmtLcy | float | No |
| genPostingType | string | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| eu3PartyTrade | bool | No |
| allowApplication | bool | No |
| balAccountType | string | No |
| balGenPostingType | string | No |
| balGenBusPostingGroup | string | No |
| balGenProdPostingGroup | string | No |
| balVatCalculationType | string | No |
| balVatPercent | float | No |
| balVatAmount | float | No |
| bankPaymentType | string | No |
| vatBaseAmount | float | No |
| balVatBaseAmount | float | No |
| correction | bool | No |
| checkPrinted | bool | No |
| documentDate | date | No |
| externalDocumentNumber | string | No |
| sourceType | string | No |
| sourceNumber | string | No |
| postingNumberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| useTax | bool | No |
| balTaxAreaCode | string | No |
| balTaxLiable | bool | No |
| balTaxGroupCode | string | No |
| balUseTax | bool | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| balVatBusPostingGroup | string | No |
| balVatProdPostingGroup | string | No |
| additionalCurrencyPosting | string | No |
| faAddCurrencyFactor | float | No |
| sourceCurrencyCode | string | No |
| sourceCurrencyAmount | float | No |
| sourceCurrVatBaseAmount | float | No |
| sourceCurrVatAmount | float | No |
| vatBaseDiscountPercent | float | No |
| vatAmountLcy | float | No |
| vatBaseAmountLcy | float | No |
| balVatAmountLcy | float | No |
| balVatBaseAmountLcy | float | No |
| reversingEntry | bool | No |
| allowZeroAmountPosting | bool | No |
| shipToOrderAddressCode | string | No |
| vatDifference | float | No |
| balVatDifference | float | No |
| icPartnerCode | string | No |
| icDirection | string | No |
| icPartnerGLAccNumber | string | No |
| icPartnerTransactionNumber | int | No |
| sellToBuyFromNumber | string | No |
| vatRegistrationNumber | string | No |
| countryRegionCode | string | No |
| prepayment | bool | No |
| financialVoid | bool | No |
| incomingDocumentEntryNumber | int | No |
| creditorNumber | string | No |
| paymentReference | string | No |
| paymentMethodCode | string | No |
| appliesToExtDocNumber | string | No |
| recipientBankAccount | string | No |
| messageToRecipient | string | No |
| exportedToPaymentFile | bool | No |
| hasPaymentExportError | bool | No |
| dimensionSetId | int | No |
| jobTaskNumber | string | No |
| jobUnitPriceLcy | float | No |
| jobTotalPriceLcy | float | No |
| jobQuantity | float | No |
| jobUnitCostLcy | float | No |
| jobLineDiscountPercent | float | No |
| jobLineDiscAmountLcy | float | No |
| jobUnitOfMeasureCode | string | No |
| jobLineType | string | No |
| jobUnitPrice | float | No |
| jobTotalPrice | float | No |
| jobUnitCost | float | No |
| jobTotalCost | float | No |
| jobLineDiscountAmount | float | No |
| jobLineAmount | float | No |
| jobTotalCostLcy | float | No |
| jobLineAmountLcy | float | No |
| jobCurrencyFactor | float | No |
| jobCurrencyCode | string | No |
| jobPlanningLineNumber | int | No |
| jobRemainingQty | float | No |
| directDebitMandateId | string | No |
| dataExchEntryNumber | int | No |
| payerInformation | string | No |
| transactionInformation | string | No |
| dataExchLineNumber | int | No |
| appliedAutomatically | bool | No |
| deferralCode | string | No |
| deferralLineNumber | int | No |
| campaignNumber | string | No |
| prodOrderNumber | string | No |
| faPostingDate | date | No |
| faPostingType | string | No |
| depreciationBookCode | string | No |
| salvageValue | float | No |
| numberOfDepreciationDays | int | No |
| deprUntilFaPostingDate | bool | No |
| deprAcquisitionCost | bool | No |
| maintenanceCode | string | No |
| insuranceNumber | string | No |
| budgetedFaNumber | string | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| faReclassificationEntry | bool | No |
| faErrorEntryNumber | int | No |
| indexEntry | bool | No |
| sourceLineNumber | int | No |
| comment | string | No |
| checkExported | bool | No |
| checkTransmitted | bool | No |
| id | guid | Yes |
| accountId | guid | No |
| customerId | guid | No |
| appliesToInvoiceId | guid | No |
| contactGraphId | string | No |
| lastModifiedDatetime | date | No |
| journalBatchId | guid | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowItems
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| number2 | string | No |
| description | string | No |
| searchDescription | string | No |
| description2 | string | No |
| assemblyBom | bool | No |
| baseUnitOfMeasure | string | No |
| priceUnitConversion | int | No |
| type | string | No |
| inventoryPostingGroup | string | No |
| shelfNumber | string | No |
| itemDiscGroup | string | No |
| allowInvoiceDisc | bool | No |
| statisticsGroup | int | No |
| commissionGroup | int | No |
| unitPrice | float | No |
| priceProfitCalculation | string | No |
| profitPercent | float | No |
| costingMethod | string | No |
| unitCost | float | No |
| standardCost | float | No |
| lastDirectCost | float | No |
| indirectCostPercent | float | No |
| costIsAdjusted | bool | No |
| allowOnlineAdjustment | bool | No |
| vendorNumber | string | No |
| vendorItemNumber | string | No |
| leadTimeCalculation | string | No |
| reorderPoint | float | No |
| maximumInventory | float | No |
| reorderQuantity | float | No |
| alternativeItemNumber | string | No |
| unitListPrice | float | No |
| dutyDuePercent | float | No |
| dutyCode | string | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| durability | string | No |
| freightType | string | No |
| tariffNumber | string | No |
| dutyUnitConversion | float | No |
| countryRegionPurchasedCode | string | No |
| budgetQuantity | float | No |
| budgetedAmount | float | No |
| budgetProfit | float | No |
| comment | bool | No |
| blocked | bool | No |
| costIsPostedToGL | bool | No |
| blockReason | string | No |
| lastDatetimeModified | date | No |
| lastDateModified | date | No |
| lastTimeModified | string | No |
| dateFilter | string | No |
| globalDimension1Filter | string | No |
| globalDimension2Filter | string | No |
| locationFilter | string | No |
| inventory | float | No |
| netInvoicedQty | float | No |
| netChange | float | No |
| purchasesQty | float | No |
| salesQty | float | No |
| positiveAdjmtQty | float | No |
| negativeAdjmtQty | float | No |
| purchasesLcy | float | No |
| salesLcy | float | No |
| positiveAdjmtLcy | float | No |
| negativeAdjmtLcy | float | No |
| cogsLcy | float | No |
| qtyOnPurchOrder | float | No |
| qtyOnSalesOrder | float | No |
| priceIncludesVat | bool | No |
| dropShipmentFilter | string | No |
| vatBusPostingGrPrice | string | No |
| genProdPostingGroup | string | No |
| transferredQty | float | No |
| transferredLcy | float | No |
| countryRegionOfOriginCode | string | No |
| automaticExtTexts | bool | No |
| numberSeries | string | No |
| taxGroupCode | string | No |
| vatProdPostingGroup | string | No |
| reserve | string | No |
| reservedQtyOnInventory | float | No |
| reservedQtyOnPurchOrders | float | No |
| reservedQtyOnSalesOrders | float | No |
| globalDimension1Code | string | No |
| globalDimension2Code | string | No |
| resQtyOnOutboundTransfer | float | No |
| resQtyOnInboundTransfer | float | No |
| resQtyOnSalesReturns | float | No |
| resQtyOnPurchReturns | float | No |
| stockoutWarning | string | No |
| preventNegativeInventory | string | No |
| costOfOpenProductionOrders | float | No |
| applicationWkshUserId | string | No |
| assemblyPolicy | string | No |
| resQtyOnAssemblyOrder | float | No |
| resQtyOnAsmComp | float | No |
| qtyOnAssemblyOrder | float | No |
| qtyOnAsmComponent | float | No |
| qtyOnJobOrder | float | No |
| resQtyOnJobOrder | float | No |
| gtin | string | No |
| defaultDeferralTemplateCode | string | No |
| lowLevelCode | int | No |
| lotSize | float | No |
| serialNos | string | No |
| lastUnitCostCalcDate | date | No |
| rolledUpMaterialCost | float | No |
| rolledUpCapacityCost | float | No |
| scrapPercent | float | No |
| inventoryValueZero | bool | No |
| discreteOrderQuantity | int | No |
| minimumOrderQuantity | float | No |
| maximumOrderQuantity | float | No |
| safetyStockQuantity | float | No |
| orderMultiple | float | No |
| safetyLeadTime | string | No |
| flushingMethod | string | No |
| replenishmentSystem | string | No |
| scheduledReceiptQty | float | No |
| scheduledNeedQty | float | No |
| roundingPrecision | float | No |
| binFilter | string | No |
| variantFilter | string | No |
| salesUnitOfMeasure | string | No |
| purchUnitOfMeasure | string | No |
| timeBucket | string | No |
| reservedQtyOnProdOrder | float | No |
| resQtyOnProdOrderComp | float | No |
| resQtyOnReqLine | float | No |
| reorderingPolicy | string | No |
| includeInventory | bool | No |
| manufacturingPolicy | string | No |
| reschedulingPeriod | string | No |
| lotAccumulationPeriod | string | No |
| dampenerPeriod | string | No |
| dampenerQuantity | float | No |
| overflowLevel | float | No |
| planningTransferShipQty | float | No |
| planningWorksheetQty | float | No |
| stockkeepingUnitExists | bool | No |
| manufacturerCode | string | No |
| itemCategoryCode | string | No |
| createdFromNonstockItem | bool | No |
| substitutesExist | bool | No |
| qtyInTransit | float | No |
| transOrdReceiptQty | float | No |
| transOrdShipmentQty | float | No |
| qtyAssignedToShip | float | No |
| qtyPicked | float | No |
| serviceItemGroup | string | No |
| qtyOnServiceOrder | float | No |
| resQtyOnServiceOrders | float | No |
| itemTrackingCode | string | No |
| lotNos | string | No |
| expirationCalculation | string | No |
| lotNumberFilter | string | No |
| serialNumberFilter | string | No |
| qtyOnPurchReturn | float | No |
| qtyOnSalesReturn | float | No |
| numberOfSubstitutes | int | No |
| warehouseClassCode | string | No |
| specialEquipmentCode | string | No |
| putAwayTemplateCode | string | No |
| putAwayUnitOfMeasureCode | string | No |
| physInvtCountingPeriodCode | string | No |
| lastCountingPeriodUpdate | date | No |
| lastPhysInvtDate | date | No |
| useCrossDocking | bool | No |
| nextCountingStartDate | date | No |
| nextCountingEndDate | date | No |
| identifierCode | string | No |
| unitOfMeasureId | guid | No |
| taxGroupId | guid | No |
| routingNumber | string | No |
| productionBomNumber | string | No |
| singleLevelMaterialCost | float | No |
| singleLevelCapacityCost | float | No |
| singleLevelSubcontrdCost | float | No |
| singleLevelCapOvhdCost | float | No |
| singleLevelMfgOvhdCost | float | No |
| overheadRate | float | No |
| rolledUpSubcontractedCost | float | No |
| rolledUpMfgOvhdCost | float | No |
| rolledUpCapOverheadCost | float | No |
| planningIssuesQty | float | No |
| planningReceiptQty | float | No |
| plannedOrderReceiptQty | float | No |
| fpOrderReceiptQty | float | No |
| relOrderReceiptQty | float | No |
| planningReleaseQty | float | No |
| plannedOrderReleaseQty | float | No |
| purchReqReceiptQty | float | No |
| purchReqReleaseQty | float | No |
| orderTrackingPolicy | string | No |
| prodForecastQuantityBase | float | No |
| productionForecastName | string | No |
| componentForecast | string | No |
| qtyOnProdOrder | float | No |
| qtyOnComponentLines | float | No |
| critical | bool | No |
| commonItemNumber | string | No |
| unitOfMeasureFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| pictures | [Media[]](#media) | Yes |
# WorkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| buyFromVendorNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| expectedReceiptDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToReceive | float | No |
| directUnitCost | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| unitPriceLcy | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| jobNumber | string | No |
| indirectCostPercent | float | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyRcdNotInvoiced | float | No |
| amtRcdNotInvoiced | float | No |
| quantityReceived | float | No |
| quantityInvoiced | float | No |
| receiptNumber | string | No |
| receiptLineNumber | int | No |
| profitPercent | float | No |
| payToVendorNumber | string | No |
| invDiscountAmount | float | No |
| vendorItemNumber | string | No |
| salesOrderNumber | string | No |
| salesOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| entryPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| useTax | bool | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| reservedQuantity | float | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| outstandingAmtExVatLcy | float | No |
| aRcdNotInvExVatLcy | float | No |
| dimensionSetId | int | No |
| jobTaskNumber | string | No |
| jobLineType | string | No |
| jobUnitPrice | float | No |
| jobTotalPrice | float | No |
| jobLineAmount | float | No |
| jobLineDiscountAmount | float | No |
| jobLineDiscountPercent | float | No |
| jobUnitPriceLcy | float | No |
| jobTotalPriceLcy | float | No |
| jobLineAmountLcy | float | No |
| jobLineDiscAmountLcy | float | No |
| jobCurrencyFactor | float | No |
| jobCurrencyCode | string | No |
| jobPlanningLineNumber | int | No |
| jobRemainingQty | float | No |
| jobRemainingQtyBase | float | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| prodOrderNumber | string | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToReceiveBase | float | No |
| qtyRcdNotInvoicedBase | float | No |
| qtyReceivedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| faPostingType | string | No |
| depreciationBookCode | string | No |
| salvageValue | float | No |
| deprUntilFaPostingDate | bool | No |
| deprAcquisitionCost | bool | No |
| maintenanceCode | string | No |
| insuranceNumber | string | No |
| budgetedFaNumber | string | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderSalesNumber | string | No |
| specialOrderSalesLineNumber | int | No |
| whseOutstandingQtyBase | float | No |
| completelyReceived | bool | No |
| requestedReceiptDate | date | No |
| promisedReceiptDate | date | No |
| leadTimeCalculation | string | No |
| inboundWhseHandlingTime | string | No |
| plannedReceiptDate | date | No |
| orderDate | date | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToShip | float | No |
| returnQtyToShipBase | float | No |
| returnQtyShippedNotInvd | float | No |
| retQtyShpdNotInvdBase | float | No |
| returnShpdNotInvd | float | No |
| returnShpdNotInvdLcy | float | No |
| returnQtyShipped | float | No |
| returnQtyShippedBase | float | No |
| returnShipmentNumber | string | No |
| returnShipmentLineNumber | int | No |
| returnReasonCode | string | No |
| subtype | string | No |
| routingNumber | string | No |
| operationNumber | string | No |
| workCenterNumber | string | No |
| finished | bool | No |
| prodOrderLineNumber | int | No |
| overheadRate | float | No |
| mpsOrder | bool | No |
| planningFlexibility | string | No |
| safetyLeadTime | string | No |
| routingReferenceNumber | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowPurchaseDocuments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| documentType | string | No |
| buyFromVendorNumber | string | No |
| number | string | No |
| payToVendorNumber | string | No |
| payToName | string | No |
| payToName2 | string | No |
| payToAddress | string | No |
| payToAddress2 | string | No |
| payToCity | string | No |
| payToContact | string | No |
| yourReference | string | No |
| shipToCode | string | No |
| shipToName | string | No |
| shipToName2 | string | No |
| shipToAddress | string | No |
| shipToAddress2 | string | No |
| shipToCity | string | No |
| shipToContact | string | No |
| orderDate | date | No |
| postingDate | date | No |
| expectedReceiptDate | date | No |
| postingDescription | string | No |
| paymentTermsCode | string | No |
| dueDate | date | No |
| paymentDiscountPercent | float | No |
| pmtDiscountDate | date | No |
| shipmentMethodCode | string | No |
| locationCode | string | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| vendorPostingGroup | string | No |
| currencyCode | string | No |
| currencyFactor | float | No |
| pricesIncludingVat | bool | No |
| invoiceDiscCode | string | No |
| languageCode | string | No |
| purchaserCode | string | No |
| orderClass | string | No |
| comment | bool | No |
| numberPrinted | int | No |
| onHold | string | No |
| appliesToDocType | string | No |
| appliesToDocNumber | string | No |
| balAccountNumber | string | No |
| recalculateInvoiceDisc | bool | No |
| receive | bool | No |
| invoice | bool | No |
| printPostedDocuments | bool | No |
| amount | float | No |
| amountIncludingVat | float | No |
| receivingNumber | string | No |
| postingNumber | string | No |
| lastReceivingNumber | string | No |
| lastPostingNumber | string | No |
| vendorOrderNumber | string | No |
| vendorShipmentNumber | string | No |
| vendorInvoiceNumber | string | No |
| vendorCrMemoNumber | string | No |
| vatRegistrationNumber | string | No |
| sellToCustomerNumber | string | No |
| reasonCode | string | No |
| genBusPostingGroup | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| vatCountryRegionCode | string | No |
| buyFromVendorName | string | No |
| buyFromVendorName2 | string | No |
| buyFromAddress | string | No |
| buyFromAddress2 | string | No |
| buyFromCity | string | No |
| buyFromContact | string | No |
| payToPostCode | string | No |
| payToCounty | string | No |
| payToCountryRegionCode | string | No |
| buyFromPostCode | string | No |
| buyFromCounty | string | No |
| buyFromCountryRegionCode | string | No |
| shipToPostCode | string | No |
| shipToCounty | string | No |
| shipToCountryRegionCode | string | No |
| balAccountType | string | No |
| orderAddressCode | string | No |
| entryPoint | string | No |
| correction | bool | No |
| documentDate | date | No |
| area | string | No |
| transactionSpecification | string | No |
| paymentMethodCode | string | No |
| numberSeries | string | No |
| postingNumberSeries | string | No |
| receivingNumberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| vatBusPostingGroup | string | No |
| appliesToId | string | No |
| vatBaseDiscountPercent | float | No |
| status | string | No |
| invoiceDiscountCalculation | string | No |
| invoiceDiscountValue | float | No |
| sendIcDocument | bool | No |
| icStatus | string | No |
| buyFromIcPartnerCode | string | No |
| payToIcPartnerCode | string | No |
| icDirection | string | No |
| prepaymentNumber | string | No |
| lastPrepaymentNumber | string | No |
| prepmtCrMemoNumber | string | No |
| lastPrepmtCrMemoNumber | string | No |
| prepaymentPercent | float | No |
| prepaymentNumberSeries | string | No |
| compressPrepayment | bool | No |
| prepaymentDueDate | date | No |
| prepmtCrMemoNumberSeries | string | No |
| prepmtPostingDescription | string | No |
| prepmtPmtDiscountDate | date | No |
| prepmtPaymentTermsCode | string | No |
| prepmtPaymentDiscountPercent | float | No |
| quoteNumber | string | No |
| jobQueueStatus | string | No |
| jobQueueEntryId | guid | No |
| incomingDocumentEntryNumber | int | No |
| creditorNumber | string | No |
| paymentReference | string | No |
| aRcdNotInvExVatLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| dimensionSetId | int | No |
| invoiceDiscountAmount | float | No |
| numberOfArchivedVersions | int | No |
| docNumberOccurrence | int | No |
| campaignNumber | string | No |
| buyFromContactNumber | string | No |
| payToContactNumber | string | No |
| responsibilityCenter | string | No |
| completelyReceived | bool | No |
| postingFromWhseRef | int | No |
| locationFilter | string | No |
| requestedReceiptDate | date | No |
| promisedReceiptDate | date | No |
| leadTimeCalculation | string | No |
| inboundWhseHandlingTime | string | No |
| vendorAuthorizationNumber | string | No |
| returnShipmentNumber | string | No |
| returnShipmentNumberSeries | string | No |
| ship | bool | No |
| lastReturnShipmentNumber | string | No |
| assignedUserId | string | No |
| pendingApprovals | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowPurchaseDocumentsworkflowPurchaseDocumentLines | [WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]](#workflowpurchasedocumentsworkflowpurchasedocumentlines) | Yes |
# WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| buyFromVendorNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| expectedReceiptDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToReceive | float | No |
| directUnitCost | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| unitPriceLcy | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| jobNumber | string | No |
| indirectCostPercent | float | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyRcdNotInvoiced | float | No |
| amtRcdNotInvoiced | float | No |
| quantityReceived | float | No |
| quantityInvoiced | float | No |
| receiptNumber | string | No |
| receiptLineNumber | int | No |
| profitPercent | float | No |
| payToVendorNumber | string | No |
| invDiscountAmount | float | No |
| vendorItemNumber | string | No |
| salesOrderNumber | string | No |
| salesOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| entryPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| useTax | bool | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| reservedQuantity | float | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| outstandingAmtExVatLcy | float | No |
| aRcdNotInvExVatLcy | float | No |
| dimensionSetId | int | No |
| jobTaskNumber | string | No |
| jobLineType | string | No |
| jobUnitPrice | float | No |
| jobTotalPrice | float | No |
| jobLineAmount | float | No |
| jobLineDiscountAmount | float | No |
| jobLineDiscountPercent | float | No |
| jobUnitPriceLcy | float | No |
| jobTotalPriceLcy | float | No |
| jobLineAmountLcy | float | No |
| jobLineDiscAmountLcy | float | No |
| jobCurrencyFactor | float | No |
| jobCurrencyCode | string | No |
| jobPlanningLineNumber | int | No |
| jobRemainingQty | float | No |
| jobRemainingQtyBase | float | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| prodOrderNumber | string | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToReceiveBase | float | No |
| qtyRcdNotInvoicedBase | float | No |
| qtyReceivedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| faPostingType | string | No |
| depreciationBookCode | string | No |
| salvageValue | float | No |
| deprUntilFaPostingDate | bool | No |
| deprAcquisitionCost | bool | No |
| maintenanceCode | string | No |
| insuranceNumber | string | No |
| budgetedFaNumber | string | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderSalesNumber | string | No |
| specialOrderSalesLineNumber | int | No |
| whseOutstandingQtyBase | float | No |
| completelyReceived | bool | No |
| requestedReceiptDate | date | No |
| promisedReceiptDate | date | No |
| leadTimeCalculation | string | No |
| inboundWhseHandlingTime | string | No |
| plannedReceiptDate | date | No |
| orderDate | date | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToShip | float | No |
| returnQtyToShipBase | float | No |
| returnQtyShippedNotInvd | float | No |
| retQtyShpdNotInvdBase | float | No |
| returnShpdNotInvd | float | No |
| returnShpdNotInvdLcy | float | No |
| returnQtyShipped | float | No |
| returnQtyShippedBase | float | No |
| returnShipmentNumber | string | No |
| returnShipmentLineNumber | int | No |
| returnReasonCode | string | No |
| subtype | string | No |
| routingNumber | string | No |
| operationNumber | string | No |
| workCenterNumber | string | No |
| finished | bool | No |
| prodOrderLineNumber | int | No |
| overheadRate | float | No |
| mpsOrder | bool | No |
| planningFlexibility | string | No |
| safetyLeadTime | string | No |
| routingReferenceNumber | int | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| sellToCustomerNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| shipmentDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToShip | float | No |
| unitPrice | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| customerPriceGroup | string | No |
| jobNumber | string | No |
| workTypeCode | string | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyShippedNotInvoiced | float | No |
| shippedNotInvoiced | float | No |
| quantityShipped | float | No |
| quantityInvoiced | float | No |
| shipmentNumber | string | No |
| shipmentLineNumber | int | No |
| profitPercent | float | No |
| billToCustomerNumber | string | No |
| invDiscountAmount | float | No |
| purchaseOrderNumber | string | No |
| purchOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| exitPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxCategory | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| vatClauseCode | string | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| shippedNotInvoicedLcy | float | No |
| shippedNotInvLcyNoVat | float | No |
| reservedQuantity | float | No |
| reserve | string | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| dimensionSetId | int | No |
| qtyToAssembleToOrder | float | No |
| qtyToAsmToOrderBase | float | No |
| atoWhseOutstandingQty | float | No |
| atoWhseOutstdQtyBase | float | No |
| jobTaskNumber | string | No |
| jobContractEntryNumber | int | No |
| postingDate | date | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| planned | bool | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToShipBase | float | No |
| qtyShippedNotInvdBase | float | No |
| qtyShippedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| depreciationBookCode | string | No |
| deprUntilFaPostingDate | bool | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| outOfStockSubstitution | bool | No |
| substitutionAvailable | bool | No |
| originallyOrderedNumber | string | No |
| originallyOrderedVarCode | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderPurchaseNumber | string | No |
| specialOrderPurchLineNumber | int | No |
| whseOutstandingQty | float | No |
| whseOutstandingQtyBase | float | No |
| completelyShipped | bool | No |
| requestedDeliveryDate | date | No |
| promisedDeliveryDate | date | No |
| shippingTime | string | No |
| outboundWhseHandlingTime | string | No |
| plannedDeliveryDate | date | No |
| plannedShipmentDate | date | No |
| shippingAgentCode | string | No |
| shippingAgentServiceCode | string | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToReceive | float | No |
| returnQtyToReceiveBase | float | No |
| returnQtyRcdNotInvd | float | No |
| retQtyRcdNotInvdBase | float | No |
| returnRcdNotInvd | float | No |
| returnRcdNotInvdLcy | float | No |
| returnQtyReceived | float | No |
| returnQtyReceivedBase | float | No |
| applFromItemEntry | int | No |
| bomItemNumber | string | No |
| returnReceiptNumber | string | No |
| returnReceiptLineNumber | int | No |
| returnReasonCode | string | No |
| allowLineDisc | bool | No |
| customerDiscGroup | string | No |
| subtype | string | No |
| priceDescription | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocuments
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| documentType | string | No |
| sellToCustomerNumber | string | No |
| number | string | No |
| billToCustomerNumber | string | No |
| billToName | string | No |
| billToName2 | string | No |
| billToAddress | string | No |
| billToAddress2 | string | No |
| billToCity | string | No |
| billToContact | string | No |
| yourReference | string | No |
| shipToCode | string | No |
| shipToName | string | No |
| shipToName2 | string | No |
| shipToAddress | string | No |
| shipToAddress2 | string | No |
| shipToCity | string | No |
| shipToContact | string | No |
| orderDate | date | No |
| postingDate | date | No |
| shipmentDate | date | No |
| postingDescription | string | No |
| paymentTermsCode | string | No |
| dueDate | date | No |
| paymentDiscountPercent | float | No |
| pmtDiscountDate | date | No |
| shipmentMethodCode | string | No |
| locationCode | string | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| customerPostingGroup | string | No |
| currencyCode | string | No |
| currencyFactor | float | No |
| customerPriceGroup | string | No |
| pricesIncludingVat | bool | No |
| invoiceDiscCode | string | No |
| customerDiscGroup | string | No |
| languageCode | string | No |
| salespersonCode | string | No |
| orderClass | string | No |
| comment | bool | No |
| numberPrinted | int | No |
| onHold | string | No |
| appliesToDocType | string | No |
| appliesToDocNumber | string | No |
| balAccountNumber | string | No |
| recalculateInvoiceDisc | bool | No |
| ship | bool | No |
| invoice | bool | No |
| printPostedDocuments | bool | No |
| amount | float | No |
| amountIncludingVAT | float | No |
| shippingNumber | string | No |
| postingNumber | string | No |
| lastShippingNumber | string | No |
| lastPostingNumber | string | No |
| prepaymentNumber | string | No |
| lastPrepaymentNumber | string | No |
| premptCrMemoNumber | string | No |
| lastPremtCrMemoNumber | string | No |
| vatRegistrationNumber | string | No |
| combineShipments | bool | No |
| reasonCode | string | No |
| genBusPostingGroup | string | No |
| eu3PartyTrade | bool | No |
| transactionType | string | No |
| transportMethod | string | No |
| vatCountryRegionCode | string | No |
| sellToCustomerName | string | No |
| sellToCustomerName2 | string | No |
| sellToAddress | string | No |
| sellToAddress2 | string | No |
| sellToCity | string | No |
| sellToContact | string | No |
| billToPostCode | string | No |
| billToCounty | string | No |
| billToCountryRegionCode | string | No |
| sellToPostCode | string | No |
| sellToCounty | string | No |
| sellToCountryRegionCode | string | No |
| shipToPostCode | string | No |
| shipToCounty | string | No |
| shipToCountryRegionCode | string | No |
| balAccountType | string | No |
| exitPoint | string | No |
| correction | bool | No |
| documentDate | date | No |
| externalDocumentNumber | string | No |
| area | string | No |
| transactionSpecification | string | No |
| paymentMethodCode | string | No |
| shippingAgentCode | string | No |
| packageTrackingNumber | string | No |
| numberSeries | string | No |
| postingNumberSeries | string | No |
| shippingNumberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| vatBusPostingGroup | string | No |
| reserve | string | No |
| appliesToId | string | No |
| vatBaseDiscountPercent | float | No |
| status | string | No |
| invoiceDiscountCalculation | string | No |
| invoiceDiscountValue | float | No |
| sendIcDocument | bool | No |
| icStatus | string | No |
| sellToIcPartnerCode | string | No |
| billToIcPartnerCode | string | No |
| icDirection | string | No |
| prepaymentPercent | float | No |
| prepaymentNumberSeries | string | No |
| compressPrepayment | bool | No |
| prepaymentDueDate | date | No |
| prepmtCrMemoNumberSeries | string | No |
| prepmtPostingDescription | string | No |
| prepmtPmtDiscountDate | date | No |
| prepmtPaymentTermsCode | string | No |
| prepmtPaymentDiscountPercent | float | No |
| quoteNumber | string | No |
| quoteValidUntilDate | date | No |
| quoteSentToCustomer | date | No |
| quoteAccepted | bool | No |
| quoteAcceptedDate | date | No |
| jobQueueStatus | string | No |
| jobQueueEntryId | guid | No |
| incomingDocumentEntryNumber | int | No |
| workDescription | string | No |
| amountShippedNotInvoicedInclVat | float | No |
| amountShippedNotInvoiced | float | No |
| dimensionSetId | int | No |
| paymentServiceSetId | int | No |
| directDebitMandateId | string | No |
| invoiceDiscountAmount | float | No |
| numberOfArchivedVersions | int | No |
| docNumberOccurrence | int | No |
| campaignNumber | string | No |
| sellToCustomerTemplateCode | string | No |
| sellToContactNumber | string | No |
| billToContactNumber | string | No |
| billToCustomerTemplateCode | string | No |
| opportunityNumber | string | No |
| responsibilityCenter | string | No |
| shippingAdvice | string | No |
| shippedNotInvoiced | bool | No |
| completelyShipped | bool | No |
| postingFromWhseRef | int | No |
| locationFilter | string | No |
| shipped | bool | No |
| requestedDeliveryDate | date | No |
| promisedDeliveryDate | date | No |
| shippingTime | string | No |
| outboundWhseHandlingTime | string | No |
| shippingAgentServiceCode | string | No |
| lateOrderShipping | bool | No |
| receive | bool | No |
| returnReceiptNumber | string | No |
| returnReceiptNumberSeries | string | No |
| lastReturnReceiptNumber | string | No |
| allowLineDisc | bool | No |
| getShipmentUsed | bool | No |
| assignedUserId | string | No |
| dateFilter | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowSalesDocumentsworkflowSalesDocumentLines | [WorkflowSalesDocumentsworkflowSalesDocumentLines[]](#workflowsalesdocumentsworkflowsalesdocumentlines) | Yes |
# WorkflowSalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| documentType | string | No |
| documentNumber | string | No |
| lineNumber | int | No |
| sellToCustomerNumber | string | No |
| type | string | No |
| number | string | No |
| locationCode | string | No |
| postingGroup | string | No |
| shipmentDate | date | No |
| description | string | No |
| description2 | string | No |
| unitOfMeasure | string | No |
| quantity | float | No |
| outstandingQuantity | float | No |
| qtyToInvoice | float | No |
| qtyToShip | float | No |
| unitPrice | float | No |
| unitCostLcy | float | No |
| vatPercent | float | No |
| lineDiscountPercent | float | No |
| lineDiscountAmount | float | No |
| amount | float | No |
| amountIncludingVat | float | No |
| allowInvoiceDisc | bool | No |
| grossWeight | float | No |
| netWeight | float | No |
| unitsPerParcel | float | No |
| unitVolume | float | No |
| applToItemEntry | int | No |
| shortcutDimension1Code | string | No |
| shortcutDimension2Code | string | No |
| customerPriceGroup | string | No |
| jobNumber | string | No |
| workTypeCode | string | No |
| recalculateInvoiceDisc | bool | No |
| outstandingAmount | float | No |
| qtyShippedNotInvoiced | float | No |
| shippedNotInvoiced | float | No |
| quantityShipped | float | No |
| quantityInvoiced | float | No |
| shipmentNumber | string | No |
| shipmentLineNumber | int | No |
| profitPercent | float | No |
| billToCustomerNumber | string | No |
| invDiscountAmount | float | No |
| purchaseOrderNumber | string | No |
| purchOrderLineNumber | int | No |
| dropShipment | bool | No |
| genBusPostingGroup | string | No |
| genProdPostingGroup | string | No |
| vatCalculationType | string | No |
| transactionType | string | No |
| transportMethod | string | No |
| attachedToLineNumber | int | No |
| exitPoint | string | No |
| area | string | No |
| transactionSpecification | string | No |
| taxCategory | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| taxGroupCode | string | No |
| vatClauseCode | string | No |
| vatBusPostingGroup | string | No |
| vatProdPostingGroup | string | No |
| currencyCode | string | No |
| outstandingAmountLcy | float | No |
| shippedNotInvoicedLcy | float | No |
| shippedNotInvLcyNoVat | float | No |
| reservedQuantity | float | No |
| reserve | string | No |
| blanketOrderNumber | string | No |
| blanketOrderLineNumber | int | No |
| vatBaseAmount | float | No |
| unitCost | float | No |
| systemCreatedEntry | bool | No |
| lineAmount | float | No |
| vatDifference | float | No |
| invDiscAmountToInvoice | float | No |
| vatIdentifier | string | No |
| icPartnerRefType | string | No |
| icPartnerReference | string | No |
| prepaymentPercent | float | No |
| prepmtLineAmount | float | No |
| prepmtAmtInv | float | No |
| prepmtAmtInclVat | float | No |
| prepaymentAmount | float | No |
| prepmtVatBaseAmt | float | No |
| prepaymentVatPercent | float | No |
| prepmtVatCalcType | string | No |
| prepaymentVatIdentifier | string | No |
| prepaymentTaxAreaCode | string | No |
| prepaymentTaxLiable | bool | No |
| prepaymentTaxGroupCode | string | No |
| prepmtAmtToDeduct | float | No |
| prepmtAmtDeducted | float | No |
| prepaymentLine | bool | No |
| prepmtAmountInvInclVat | float | No |
| prepmtAmountInvLcy | float | No |
| icPartnerCode | string | No |
| prepmtVatAmountInvLcy | float | No |
| prepaymentVatDifference | float | No |
| prepmtVatDiffToDeduct | float | No |
| prepmtVatDiffDeducted | float | No |
| dimensionSetId | int | No |
| qtyToAssembleToOrder | float | No |
| qtyToAsmToOrderBase | float | No |
| atoWhseOutstandingQty | float | No |
| atoWhseOutstdQtyBase | float | No |
| jobTaskNumber | string | No |
| jobContractEntryNumber | int | No |
| postingDate | date | No |
| deferralCode | string | No |
| returnsDeferralStartDate | date | No |
| variantCode | string | No |
| binCode | string | No |
| qtyPerUnitOfMeasure | float | No |
| planned | bool | No |
| unitOfMeasureCode | string | No |
| quantityBase | float | No |
| outstandingQtyBase | float | No |
| qtyToInvoiceBase | float | No |
| qtyToShipBase | float | No |
| qtyShippedNotInvdBase | float | No |
| qtyShippedBase | float | No |
| qtyInvoicedBase | float | No |
| reservedQtyBase | float | No |
| faPostingDate | date | No |
| depreciationBookCode | string | No |
| deprUntilFaPostingDate | bool | No |
| duplicateInDepreciationBook | string | No |
| useDuplicationList | bool | No |
| responsibilityCenter | string | No |
| outOfStockSubstitution | bool | No |
| substitutionAvailable | bool | No |
| originallyOrderedNumber | string | No |
| originallyOrderedVarCode | string | No |
| crossReferenceNumber | string | No |
| unitOfMeasureCrossRef | string | No |
| crossReferenceType | string | No |
| crossReferenceTypeNumber | string | No |
| itemCategoryCode | string | No |
| nonstock | bool | No |
| purchasingCode | string | No |
| specialOrder | bool | No |
| specialOrderPurchaseNumber | string | No |
| specialOrderPurchLineNumber | int | No |
| whseOutstandingQty | float | No |
| whseOutstandingQtyBase | float | No |
| completelyShipped | bool | No |
| requestedDeliveryDate | date | No |
| promisedDeliveryDate | date | No |
| shippingTime | string | No |
| outboundWhseHandlingTime | string | No |
| plannedDeliveryDate | date | No |
| plannedShipmentDate | date | No |
| shippingAgentCode | string | No |
| shippingAgentServiceCode | string | No |
| allowItemChargeAssignment | bool | No |
| qtyToAssign | float | No |
| qtyAssigned | float | No |
| returnQtyToReceive | float | No |
| returnQtyToReceiveBase | float | No |
| returnQtyRcdNotInvd | float | No |
| retQtyRcdNotInvdBase | float | No |
| returnRcdNotInvd | float | No |
| returnRcdNotInvdLcy | float | No |
| returnQtyReceived | float | No |
| returnQtyReceivedBase | float | No |
| applFromItemEntry | int | No |
| bomItemNumber | string | No |
| returnReceiptNumber | string | No |
| returnReceiptLineNumber | int | No |
| returnReasonCode | string | No |
| allowLineDisc | bool | No |
| customerDiscGroup | string | No |
| subtype | string | No |
| priceDescription | string | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowVendors
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| number | string | No |
| name | string | No |
| searchName | string | No |
| name2 | string | No |
| address | string | No |
| address2 | string | No |
| city | string | No |
| contact | string | No |
| phoneNumber | string | No |
| telexNumber | string | No |
| ourAccountNumber | string | No |
| territoryCode | string | No |
| globalDimension1Code | string | No |
| globalDimension2Code | string | No |
| budgetedAmount | float | No |
| vendorPostingGroup | string | No |
| currencyCode | string | No |
| languageCode | string | No |
| statisticsGroup | int | No |
| paymentTermsCode | string | No |
| finChargeTermsCode | string | No |
| purchaserCode | string | No |
| shipmentMethodCode | string | No |
| shippingAgentCode | string | No |
| invoiceDiscCode | string | No |
| countryRegionCode | string | No |
| comment | bool | No |
| blocked | string | No |
| payToVendorNumber | string | No |
| priority | int | No |
| paymentMethodCode | string | No |
| lastModifiedDateTime | date | Yes |
| lastDateModified | date | No |
| dateFilter | string | No |
| globalDimension1Filter | string | No |
| globalDimension2Filter | string | No |
| balance | float | No |
| balanceLcy | float | No |
| netChange | float | No |
| netChangeLcy | float | No |
| purchasesLcy | float | No |
| invDiscountsLcy | float | No |
| pmtDiscountsLcy | float | No |
| balanceDue | float | No |
| balanceDueLcy | float | No |
| payments | float | No |
| invoiceAmounts | float | No |
| crMemoAmounts | float | No |
| financeChargeMemoAmounts | float | No |
| paymentsLcy | float | No |
| invAmountsLcy | float | No |
| crMemoAmountsLcy | float | No |
| finChargeMemoAmountsLcy | float | No |
| outstandingOrders | float | No |
| amtRcdNotInvoiced | float | No |
| applicationMethod | string | No |
| pricesIncludingVat | bool | No |
| faxNumber | string | No |
| telexAnswerBack | string | No |
| vatRegistrationNumber | string | No |
| genBusPostingGroup | string | No |
| gln | string | No |
| postCode | string | No |
| county | string | No |
| debitAmount | float | No |
| creditAmount | float | No |
| debitAmountLcy | float | No |
| creditAmountLcy | float | No |
| eMail | string | No |
| homePage | string | No |
| reminderAmounts | float | No |
| reminderAmountsLcy | float | No |
| numberSeries | string | No |
| taxAreaCode | string | No |
| taxLiable | bool | No |
| vatBusPostingGroup | string | No |
| currencyFilter | string | No |
| outstandingOrdersLcy | float | No |
| amtRcdNotInvoicedLcy | float | No |
| blockPaymentTolerance | bool | No |
| pmtDiscToleranceLcy | float | No |
| pmtToleranceLcy | float | No |
| icPartnerCode | string | No |
| refunds | float | No |
| refundsLcy | float | No |
| otherAmounts | float | No |
| otherAmountsLcy | float | No |
| prepaymentPercent | float | No |
| outstandingInvoices | float | No |
| outstandingInvoicesLcy | float | No |
| payToNumberOfArchivedDoc | int | No |
| buyFromNumberOfArchivedDoc | int | No |
| partnerType | string | No |
| creditorNumber | string | No |
| preferredBankAccountCode | string | No |
| cashFlowPaymentTermsCode | string | No |
| primaryContactNumber | string | No |
| responsibilityCenter | string | No |
| locationCode | string | No |
| leadTimeCalculation | string | No |
| numberOfPstdReceipts | int | No |
| numberOfPstdInvoices | int | No |
| numberOfPstdReturnShipments | int | No |
| numberOfPstdCreditMemos | int | No |
| payToNumberOfOrders | int | No |
| payToNumberOfInvoices | int | No |
| payToNumberOfReturnOrders | int | No |
| payToNumberOfCreditMemos | int | No |
| payToNumberOfPstdReceipts | int | No |
| payToNumberOfPstdInvoices | int | No |
| payToNumberOfPstdReturnS | int | No |
| payToNumberOfPstdCrMemos | int | No |
| numberOfQuotes | int | No |
| numberOfBlanketOrders | int | No |
| numberOfOrders | int | No |
| numberOfInvoices | int | No |
| numberOfReturnOrders | int | No |
| numberOfCreditMemos | int | No |
| numberOfOrderAddresses | int | No |
| payToNumberOfQuotes | int | No |
| payToNumberOfBlanketOrders | int | No |
| numberOfIncomingDocuments | int | No |
| baseCalendarCode | string | No |
| documentSendingProfile | string | No |
| validateEuVatRegNumber | bool | No |
| currencyId | guid | No |
| paymentTermsId | guid | No |
| paymentMethodId | guid | No |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowWebhookSubscriptions
## Properties
| Name | Type | Read Only |
| --- | --- | :-: |
| id | guid | Yes |
| notificationUrl | string | No |
| conditions | string | No |
| eventCode | string | No |
| clientType | string | No |
| clientId | guid | No |
| enabled | bool | No |

