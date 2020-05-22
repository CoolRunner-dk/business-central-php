# AccountantPortalActivityCues
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| overduePurchInvoiceAmount | string |   |   |
| overduePurchInvoiceStyle | string |   |   |
| overdueSalesInvoiceAmount | string |   |   |
| overdueSalesInvoiceStyle | string |   |   |
| nonAppliedPaymentsAmount | string |   |   |
| nonAppliedPaymentsStyle | string |   |   |
| purchInvoicesDueNextWeekAmount | string |   |   |
| purchInvoicesDueNextWeekStyle | string |   |   |
| salesInvoicesDueNextWeekAmount | string |   |   |
| salesInvoicesDueNextWeekStyle | string |   |   |
| ongoingPurchaseInvoicesAmount | string |   |   |
| ongoingPurchaseInvoicesStyle | string |   |   |
| ongoingSalesInvoicesAmount | string |   |   |
| ongoingSalesInvoicesStyle | string |   |   |
| salesThisMonthAmount | string |   |   |
| salesThisMonthStyle | string |   |   |
| top10CustomerSalesYTDAmount | string |   |   |
| top10CustomerSalesYTDStyle | string |   |   |
| averageCollectionDaysAmount | string |   |   |
| averageCollectionDaysStyle | string |   |   |
| ongoingSalesQuotesAmount | string |   |   |
| ongoingSalesQuotesStyle | string |   |   |
| ongoingSalesOrdersAmount | string |   |   |
| ongoingSalesOrdersStyle | string |   |   |
| requeststoApproveAmount | string |   |   |
| requeststoApproveStyle | string |   |   |
| purchaseOrdersAmount | string |   |   |
| purchaseOrdersStyle | string |   |   |
| salesInvPendDocExchangeAmount | string |   |   |
| salesInvPendDocExchangeStyle | string |   |   |
| salesCrMPendDocExchangeAmount | string |   |   |
| salesCrMPendDocExchangeStyle | string |   |   |
| myIncomingDocumentsAmount | string |   |   |
| myIncomingDocumentsStyle | string |   |   |
| incDocAwaitingVerifAmount | string |   |   |
| incDocAwaitingVerifStyle | string |   |   |
| contactNameAmount | string |   |   |
| contactNameStyle | string |   |   |

# AccountantPortalFinanceCues
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| overduePurchaseDocumentsAmount | string |   |   |
| overduePurchaseDocumentsStyle | string |   |   |
| purchaseDiscountsNextWeekAmount | string |   |   |
| purchaseDiscountsNextWeekStyle | string |   |   |
| overdueSalesDocumentsAmount | string |   |   |
| overdueSalesDocumentsStyle | string |   |   |
| purchaseDocumentsDueTodayAmount | string |   |   |
| purchaseDocumentsDueTodayStyle | string |   |   |
| vendorsPaymentsOnHoldAmount | string |   |   |
| vendorsPaymentsOnHoldStyle | string |   |   |
| pOsPendingApprovalAmount | string |   |   |
| pOsPendingApprovalStyle | string |   |   |
| sOsPendingApprovalAmount | string |   |   |
| sOsPendingApprovalStyle | string |   |   |
| approvedSalesOrdersAmount | string |   |   |
| approvedSalesOrdersStyle | string |   |   |
| approvedPurchaseOrdersAmount | string |   |   |
| approvedPurchaseOrdersStyle | string |   |   |
| purchaseReturnOrdersAmount | string |   |   |
| purchaseReturnOrdersStyle | string |   |   |
| salesReturnOrdersAllAmount | string |   |   |
| salesReturnOrdersAllStyle | string |   |   |
| customersBlockedAmount | string |   |   |
| customersBlockedStyle | string |   |   |
| newIncomingDocumentsAmount | string |   |   |
| newIncomingDocumentsStyle | string |   |   |
| approvedIncomingDocumentsAmount | string |   |   |
| approvedIncomingDocumentsStyle | string |   |   |
| oCRPendingAmount | string |   |   |
| oCRPendingStyle | string |   |   |
| oCRCompletedAmount | string |   |   |
| oCRCompletedStyle | string |   |   |
| requestsToApproveAmount | string |   |   |
| requestsToApproveStyle | string |   |   |
| requestsSentForApprovalAmount | string |   |   |
| requestsSentForApprovalStyle | string |   |   |
| cashAccountsBalanceAmount | string |   |   |
| cashAccountsBalanceStyle | string |   |   |
| lastDepreciatedPostedDateAmount | string |   |   |
| lastDepreciatedPostedDateStyle | string |   |   |
| lastLoginDateAmount | string |   |   |
| lastLoginDateStyle | string |   |   |

# AccountantPortalUserTasks
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| title | string |   |   |
| dueDateTime | date |   |   |
| percentComplete | int |   |   |
| priority | string |   |   |
| description | string |   |   |
| createdByName | string |   |   |
| createdDateTime | date |   |   |
| startDateTime | date |   |   |
| assignedTo | guid |   |   |
| link | string |   |   |
| userTaskGroupAssignedTo | string |   |   |

# BankAccountLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| transactionNo | int |   |   |
| bankAccountNo | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| open | bool |   |   |
| currencyCode | string |   |   |
| amount | float |   |   |
| debitAmount | float |   |   |
| creditAmount | float |   |   |
| remainingAmount | float |   |   |
| amountLCY | float |   |   |
| debitAmountLCY | float |   |   |
| creditAmountLCY | float |   |   |
| dimensionSetID | int |   |   |
| bankAccountName | string |   |   |
| auxiliaryIndex1 | string |   |   |

# C2Graph
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| component | string |   |   |
| type | string |   |   |
| schema | string |   |   |

# CsApprovalComments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| tableID | int |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| userID | string |   |   |
| dateAndTime | date |   |   |
| comment | string |   |   |

# CsApprovalDocument
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| documentType | string |   |   |
| documentTypeInt | string |   |   |
| no | string |   |   |
| sourceNo | string |   |   |
| sourceName | string |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| docOnHold | string |   |   |
| docDueDate | date |   |   |
| nextApproverId | string |   |   |
| allowEditLines | bool |   |   |
| documentFilename | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| amountExclVATLCY | float |   |   |
| amountInclVATLCY | float |   |   |
| askRemoveOnHold | bool |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csApprovalDocumentApprovalEntries | [CsApprovalDocumentApprovalEntries[]](#csapprovaldocumentapprovalentries) | Yes |
| csApprovalDocumentApprovalComments | [CsApprovalDocumentApprovalComments[]](#csapprovaldocumentapprovalcomments) | Yes |
| csApprovalDocumentAttachedFiles | [CsApprovalDocumentAttachedFiles[]](#csapprovaldocumentattachedfiles) | Yes |
# CsApprovalDocumentApprovalComments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| userID | string |   |   |
| userName | string |   |   |
| dateAndTime | date |   |   |
| comment | string |   |   |

# CsApprovalDocumentApprovalEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| sequenceNo | int |   |   |
| approverID | string |   |   |
| approverName | string |   |   |
| status | string |   |   |
| dateTimeSentForApproval | date |   |   |
| lastDateTimeModified | date |   |   |
| workflowInstanceID | guid |   |   |

# CsApprovalDocumentAttachedFiles
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| currentUserId | string |   |   |
| tableID | int |   |   |
| documentType | int |   |   |
| documentNo | string |   |   |
| description | string |   |   |
| fileExtension | string |   |   |
| importedBy | string |   |   |
| importedDateTime | date |   |   |
| filename | string |   |   |
| allowDelete | bool |   |   |

# CsApprovalEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| tableID | int |   |   |
| approvalCode | string |   |   |
| documentType | string |   |   |
| documentTypeInt | string |   |   |
| documentNo | string |   |   |
| sequenceNo | int |   |   |
| sourceNo | string |   |   |
| sourceName | string |   |   |
| purchaserCode | string |   |   |
| approverID | string |   |   |
| status | string |   |   |
| statusInt | string |   |   |
| comment | bool |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| amountExclVATLCY | float |   |   |
| amountInclVATLCY | float |   |   |
| docOnHold | string |   |   |
| docDate | date |   |   |
| docLastComment | string |   |   |
| docFilename | string |   |   |
| hasAttachments | bool |   |   |
| currentApprover | string |   |   |
| askRemoveOnHold | bool |   |   |

# CsApprovalSharing
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| ownerUserID | string |   |   |
| sharedToUserID | string |   |   |
| sharingType | string |   |   |
| validFrom | date |   |   |
| validTo | date |   |   |
| ownerName | string |   |   |
| sharedToUserName | string |   |   |
| sharingTypeInt | string |   |   |
| displayOrder | int |   |   |
| useOwnersPermissions | bool |   |   |

# CsApprovers
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| userID | string |   |   |
| salespersPurchCode | string |   |   |
| name | string |   |   |

# CsDeferralTemplates
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| deferralCode | string |   |   |
| description | string |   |   |
| deferralPct | float |   |   |
| startDate | string |   |   |
| noOfPeriods | int |   |   |
| periodDescription | string |   |   |

# CsDimensionValues
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| dimCode | string |   |   |
| code | string |   |   |
| name | string |   |   |
| dimValueType | string |   |   |

# CsEnabledReasonCodes
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| tableID | int |   |   |
| docType | string |   |   |
| type | string |   |   |
| reasonCode | string |   |   |
| docTypeInt | string |   |   |
| typeInt | string |   |   |
| description | string |   |   |

# CsFixedAssets
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |

# CsGLAccounts
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| name | string |   |   |
| directPosting | bool |   |   |
| accountType | string |   |   |
| accountTypeInt | string |   |   |

# CsItemCharges
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |

# CsItems
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |

# CsJobTasks
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| jobNo | string |   |   |
| jobTaskNo | string |   |   |
| description | string |   |   |
| jobTaskType | string |   |   |
| indentation | int |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsJobs
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |
| billToCustomerNo | string |   |   |
| startingDate | date |   |   |
| endingDate | date |   |   |
| billToName | string |   |   |

# CsLocationCodes
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| name | string |   |   |

# CsPostedApprovalEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| tableID | int |   |   |
| approvalCode | string |   |   |
| documentNo | string |   |   |
| sequenceNo | int |   |   |
| sourceNo | string |   |   |
| sourceName | string |   |   |
| purchaserCode | string |   |   |
| approverID | string |   |   |
| status | string |   |   |
| statusInt | string |   |   |
| comment | bool |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| docDueDate | date |   |   |
| docOnHold | string |   |   |
| docDate | date |   |   |
| docLastComment | string |   |   |
| docFilename | string |   |   |
| hasAttachments | bool |   |   |

# CsPostedDocSearch
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| type | string |   |   |
| no | string |   |   |
| userID | string |   |   |
| name | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| extDocNo | string |   |   |
| currCode | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| docLastComment | string |   |   |
| docFilename | string |   |   |

# CsPostedPurchaseCrMemo
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| payToVendorNo | string |   |   |
| payToName | string |   |   |
| payToName2 | string |   |   |
| payToAddress | string |   |   |
| payToAddress2 | string |   |   |
| payToCity | string |   |   |
| payToContact | string |   |   |
| yourReference | string |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| purchaserCode | string |   |   |
| onHold | string |   |   |
| vendorCrMemoNo | string |   |   |
| payToPostCode | string |   |   |
| payToCounty | string |   |   |
| payToCountryRegionCode | string |   |   |
| payToCountryRegion | string |   |   |
| documentDate | date |   |   |
| paymentMethodCode | string |   |   |
| paymentMethod | string |   |   |
| documentFilename | string |   |   |
| pricesIncludingVAT | bool |   |   |
| lineAmountExclVAT | float |   |   |
| lineAmountInclVAT | float |   |   |
| amountExclVATLCY | float |   |   |
| amountInclVATLCY | float |   |   |
| webDim1Code | string |   |   |
| webDim2Code | string |   |   |
| webDim3Code | string |   |   |
| webDim4Code | string |   |   |
| webDim5Code | string |   |   |
| webDim6Code | string |   |   |
| webDim7Code | string |   |   |
| webDim8Code | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPostedPurchaseCrMemoPurchLines | [CsPostedPurchaseCrMemoPurchLines[]](#cspostedpurchasecrmemopurchlines) | Yes |
| csPostedPurchaseCrMemoApprovalEntries | [CsPostedPurchaseCrMemoApprovalEntries[]](#cspostedpurchasecrmemoapprovalentries) | Yes |
| csPostedPurchaseCrMemoApprovalComments | [CsPostedPurchaseCrMemoApprovalComments[]](#cspostedpurchasecrmemoapprovalcomments) | Yes |
| csPostedPurchaseCrMemoAttachedFiles | [CsPostedPurchaseCrMemoAttachedFiles[]](#cspostedpurchasecrmemoattachedfiles) | Yes |
# CsPostedPurchaseCrMemoApprovalComments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| userID | string |   |   |
| userName | string |   |   |
| dateAndTime | date |   |   |
| comment | string |   |   |

# CsPostedPurchaseCrMemoApprovalEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| sequenceNo | int |   |   |
| approverID | string |   |   |
| approverName | string |   |   |
| status | string |   |   |
| statusInt | string |   |   |
| dateTimeSentForApproval | date |   |   |
| lastDateTimeModified | date |   |   |

# CsPostedPurchaseCrMemoAttachedFiles
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| currentUserId | string |   |   |
| tableID | int |   |   |
| documentType | int |   |   |
| documentNo | string |   |   |
| description | string |   |   |
| fileExtension | string |   |   |
| importedBy | string |   |   |
| importedDateTime | date |   |   |
| filename | string |   |   |
| allowDelete | bool |   |   |

# CsPostedPurchaseCrMemoPurchLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentNo | string |   |   |
| lineNo | int |   |   |
| currentUserId | string |   |   |
| type | string |   |   |
| typeInt | string |   |   |
| no | string |   |   |
| postingAccountDescription | string |   |   |
| variantCode | string |   |   |
| prodPostingGroup | string |   |   |
| prodPostingGroupDesc | string |   |   |
| vATProdPostingGroup | string |   |   |
| vATProdPostingGroupDesc | string |   |   |
| description | string |   |   |
| description2 | string |   |   |
| locationCode | string |   |   |
| quantity | float |   |   |
| unitOfMeasureCode | string |   |   |
| unitOfMeasureDesc | string |   |   |
| directUnitCost | float |   |   |
| indirectCostPct | float |   |   |
| lineAmount | float |   |   |
| lineDiscountPct | float |   |   |
| lineDiscountAmount | float |   |   |
| jobNo | string |   |   |
| jobDesc | string |   |   |
| jobTaskNo | string |   |   |
| jobTaskDesc | string |   |   |
| deferralCode | string |   |   |
| webDim1ValueCode | string |   |   |
| webDim2ValueCode | string |   |   |
| webDim3ValueCode | string |   |   |
| webDim4ValueCode | string |   |   |
| webDim5ValueCode | string |   |   |
| webDim6ValueCode | string |   |   |
| webDim7ValueCode | string |   |   |
| webDim8ValueCode | string |   |   |
| webDim1ValueName | string |   |   |
| webDim2ValueName | string |   |   |
| webDim3ValueName | string |   |   |
| webDim4ValueName | string |   |   |
| webDim5ValueName | string |   |   |
| webDim6ValueName | string |   |   |
| webDim7ValueName | string |   |   |
| webDim8ValueName | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseCrMemos
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| vendorNo | string |   |   |
| name | string |   |   |
| postingDate | date |   |   |
| docDate | date |   |   |
| vendorCrMemoNo | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| currCode | string |   |   |
| respCenter | string |   |   |
| docLastComment | string |   |   |
| docFilename | string |   |   |

# CsPostedPurchaseInvoice
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| payToVendorNo | string |   |   |
| payToName | string |   |   |
| payToName2 | string |   |   |
| payToAddress | string |   |   |
| payToAddress2 | string |   |   |
| payToCity | string |   |   |
| payToContact | string |   |   |
| yourReference | string |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| purchaserCode | string |   |   |
| onHold | string |   |   |
| vendorOrderNo | string |   |   |
| vendorInvoiceNo | string |   |   |
| payToPostCode | string |   |   |
| payToCounty | string |   |   |
| payToCountryRegionCode | string |   |   |
| payToCountryRegion | string |   |   |
| documentDate | date |   |   |
| paymentMethodCode | string |   |   |
| paymentMethod | string |   |   |
| documentFilename | string |   |   |
| pricesIncludingVAT | bool |   |   |
| lineAmountExclVAT | float |   |   |
| lineAmountInclVAT | float |   |   |
| amountExclVATLCY | float |   |   |
| amountInclVATLCY | float |   |   |
| webDim1Code | string |   |   |
| webDim2Code | string |   |   |
| webDim3Code | string |   |   |
| webDim4Code | string |   |   |
| webDim5Code | string |   |   |
| webDim6Code | string |   |   |
| webDim7Code | string |   |   |
| webDim8Code | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPostedPurchaseInvoicePurchLines | [CsPostedPurchaseInvoicePurchLines[]](#cspostedpurchaseinvoicepurchlines) | Yes |
| csPostedPurchaseInvoiceApprovalEntries | [CsPostedPurchaseInvoiceApprovalEntries[]](#cspostedpurchaseinvoiceapprovalentries) | Yes |
| csPostedPurchaseInvoiceApprovalComments | [CsPostedPurchaseInvoiceApprovalComments[]](#cspostedpurchaseinvoiceapprovalcomments) | Yes |
| csPostedPurchaseInvoiceAttachedFiles | [CsPostedPurchaseInvoiceAttachedFiles[]](#cspostedpurchaseinvoiceattachedfiles) | Yes |
# CsPostedPurchaseInvoiceApprovalComments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| userID | string |   |   |
| userName | string |   |   |
| dateAndTime | date |   |   |
| comment | string |   |   |

# CsPostedPurchaseInvoiceApprovalEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| sequenceNo | int |   |   |
| approverID | string |   |   |
| approverName | string |   |   |
| status | string |   |   |
| statusInt | string |   |   |
| dateTimeSentForApproval | date |   |   |
| lastDateTimeModified | date |   |   |

# CsPostedPurchaseInvoiceAttachedFiles
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| currentUserId | string |   |   |
| tableID | int |   |   |
| documentType | int |   |   |
| documentNo | string |   |   |
| description | string |   |   |
| fileExtension | string |   |   |
| importedBy | string |   |   |
| importedDateTime | date |   |   |
| filename | string |   |   |
| allowDelete | bool |   |   |

# CsPostedPurchaseInvoicePurchLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentNo | string |   |   |
| lineNo | int |   |   |
| currentUserId | string |   |   |
| type | string |   |   |
| typeInt | string |   |   |
| no | string |   |   |
| postingAccountDescription | string |   |   |
| variantCode | string |   |   |
| prodPostingGroup | string |   |   |
| prodPostingGroupDesc | string |   |   |
| vATProdPostingGroup | string |   |   |
| vATProdPostingGroupDesc | string |   |   |
| description | string |   |   |
| description2 | string |   |   |
| locationCode | string |   |   |
| quantity | float |   |   |
| unitOfMeasureCode | string |   |   |
| unitOfMeasureDesc | string |   |   |
| directUnitCost | float |   |   |
| indirectCostPct | float |   |   |
| lineAmount | float |   |   |
| lineDiscountPct | float |   |   |
| lineDiscountAmount | float |   |   |
| jobNo | string |   |   |
| jobDesc | string |   |   |
| jobTaskNo | string |   |   |
| jobTaskDesc | string |   |   |
| deferralCode | string |   |   |
| webDim1ValueCode | string |   |   |
| webDim2ValueCode | string |   |   |
| webDim3ValueCode | string |   |   |
| webDim4ValueCode | string |   |   |
| webDim5ValueCode | string |   |   |
| webDim6ValueCode | string |   |   |
| webDim7ValueCode | string |   |   |
| webDim8ValueCode | string |   |   |
| webDim1ValueName | string |   |   |
| webDim2ValueName | string |   |   |
| webDim3ValueName | string |   |   |
| webDim4ValueName | string |   |   |
| webDim5ValueName | string |   |   |
| webDim6ValueName | string |   |   |
| webDim7ValueName | string |   |   |
| webDim8ValueName | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseInvoices
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| vendorNo | string |   |   |
| name | string |   |   |
| postingDate | date |   |   |
| docDate | date |   |   |
| vendorInvoiceNo | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| currCode | string |   |   |
| respCenter | string |   |   |
| docLastComment | string |   |   |
| docFilename | string |   |   |

# CsProdPostGroups
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| description | string |   |   |

# CsPurchaseDocument
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   |   |
| no | string |   |   |
| documentTypeInt | string |   |   |
| payToVendorNo | string |   |   |
| payToName | string |   |   |
| payToName2 | string |   |   |
| payToAddress | string |   |   |
| payToAddress2 | string |   |   |
| payToCity | string |   |   |
| payToContact | string |   |   |
| yourReference | string |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| purchaserCode | string |   |   |
| onHold | string |   |   |
| vendorOrderNo | string |   |   |
| vendorInvoiceNo | string |   |   |
| vendorCrMemoNo | string |   |   |
| payToPostCode | string |   |   |
| payToCounty | string |   |   |
| payToCountryRegionCode | string |   |   |
| payToCountryRegion | string |   |   |
| documentDate | date |   |   |
| paymentMethodCode | string |   |   |
| paymentMethod | string |   |   |
| nextApproverId | string |   |   |
| allowEditLines | bool |   |   |
| documentFilename | string |   |   |
| pricesIncludingVAT | bool |   |   |
| importedAmountExclVAT | float |   |   |
| importedAmountInclVAT | float |   |   |
| importedAmountExclVATLCY | float |   |   |
| importedAmountInclVATLCY | float |   |   |
| assignedAmountExclVAT | float |   |   |
| assignedAmountInclVAT | float |   |   |
| headerAmount | float |   |   |
| headerAmountLCY | float |   |   |
| askRemoveOnHold | bool |   |   |
| webDim1Code | string |   |   |
| webDim2Code | string |   |   |
| webDim3Code | string |   |   |
| webDim4Code | string |   |   |
| webDim5Code | string |   |   |
| webDim6Code | string |   |   |
| webDim7Code | string |   |   |
| webDim8Code | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPurchaseDocumentPurchLines | [CsPurchaseDocumentPurchLines[]](#cspurchasedocumentpurchlines) | Yes |
| csPurchaseDocumentApprovalEntries | [CsPurchaseDocumentApprovalEntries[]](#cspurchasedocumentapprovalentries) | Yes |
| csPurchaseDocumentApprovalComments | [CsPurchaseDocumentApprovalComments[]](#cspurchasedocumentapprovalcomments) | Yes |
| csPurchaseDocumentAttachedFiles | [CsPurchaseDocumentAttachedFiles[]](#cspurchasedocumentattachedfiles) | Yes |
# CsPurchaseDocumentApprovalComments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| userID | string |   |   |
| userName | string |   |   |
| dateAndTime | date |   |   |
| comment | string |   |   |

# CsPurchaseDocumentApprovalEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| sequenceNo | int |   |   |
| approverID | string |   |   |
| approverName | string |   |   |
| status | string |   |   |
| dateTimeSentForApproval | date |   |   |
| lastDateTimeModified | date |   |   |
| workflowInstanceID | guid |   |   |

# CsPurchaseDocumentAttachedFiles
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| currentUserId | string |   |   |
| tableID | int |   |   |
| documentType | int |   |   |
| documentNo | string |   |   |
| description | string |   |   |
| fileExtension | string |   |   |
| importedBy | string |   |   |
| importedDateTime | date |   |   |
| filename | string |   |   |
| allowDelete | bool |   |   |

# CsPurchaseDocumentPurchLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   |   |
| documentNo | string |   |   |
| lineNo | int |   |   |
| currentUserId | string |   |   |
| documentTypeInt | string |   |   |
| type | string |   |   |
| typeInt | string |   |   |
| no | string |   |   |
| postingAccountDescription | string |   |   |
| variantCode | string |   |   |
| prodPostingGroup | string |   |   |
| prodPostingGroupDesc | string |   |   |
| vATProdPostingGroup | string |   |   |
| vATProdPostingGroupDesc | string |   |   |
| description | string |   |   |
| description2 | string |   |   |
| locationCode | string |   |   |
| quantity | float |   |   |
| unitOfMeasureCode | string |   |   |
| unitOfMeasureDesc | string |   |   |
| directUnitCost | float |   |   |
| indirectCostPct | float |   |   |
| lineAmount | float |   |   |
| lineDiscountPct | float |   |   |
| lineDiscountAmount | float |   |   |
| lineStyle | string |   |   |
| jobNo | string |   |   |
| jobDesc | string |   |   |
| jobTaskNo | string |   |   |
| jobTaskDesc | string |   |   |
| deferralCode | string |   |   |
| fAPostingType | string |   |   |
| webDim1ValueCode | string |   |   |
| webDim2ValueCode | string |   |   |
| webDim3ValueCode | string |   |   |
| webDim4ValueCode | string |   |   |
| webDim5ValueCode | string |   |   |
| webDim6ValueCode | string |   |   |
| webDim7ValueCode | string |   |   |
| webDim8ValueCode | string |   |   |
| webDim1ValueName | string |   |   |
| webDim2ValueName | string |   |   |
| webDim3ValueName | string |   |   |
| webDim4ValueName | string |   |   |
| webDim5ValueName | string |   |   |
| webDim6ValueName | string |   |   |
| webDim7ValueName | string |   |   |
| webDim8ValueName | string |   |   |
| webDim1Rule | int |   |   |
| webDim2Rule | int |   |   |
| webDim3Rule | int |   |   |
| webDim4Rule | int |   |   |
| webDim5Rule | int |   |   |
| webDim6Rule | int |   |   |
| webDim7Rule | int |   |   |
| webDim8Rule | int |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPurchaseLine
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   |   |
| documentNo | string |   |   |
| lineNo | int |   |   |
| currentUserId | string |   |   |
| documentTypeInt | string |   |   |
| type | string |   |   |
| typeInt | string |   |   |
| no | string |   |   |
| postingAccountDescription | string |   |   |
| variantCode | string |   |   |
| prodPostingGroup | string |   |   |
| prodPostingGroupDesc | string |   |   |
| vATProdPostingGroup | string |   |   |
| vATProdPostingGroupDesc | string |   |   |
| description | string |   |   |
| description2 | string |   |   |
| locationCode | string |   |   |
| quantity | float |   |   |
| unitOfMeasureCode | string |   |   |
| unitOfMeasureDesc | string |   |   |
| directUnitCost | float |   |   |
| indirectCostPct | float |   |   |
| lineAmount | float |   |   |
| lineDiscountPct | float |   |   |
| lineDiscountAmount | float |   |   |
| lineStyle | string |   |   |
| jobNo | string |   |   |
| jobDesc | string |   |   |
| jobTaskNo | string |   |   |
| jobTaskDesc | string |   |   |
| deferralCode | string |   |   |
| fAPostingType | string |   |   |
| webDim1ValueCode | string |   |   |
| webDim2ValueCode | string |   |   |
| webDim3ValueCode | string |   |   |
| webDim4ValueCode | string |   |   |
| webDim5ValueCode | string |   |   |
| webDim6ValueCode | string |   |   |
| webDim7ValueCode | string |   |   |
| webDim8ValueCode | string |   |   |
| webDim1ValueName | string |   |   |
| webDim2ValueName | string |   |   |
| webDim3ValueName | string |   |   |
| webDim4ValueName | string |   |   |
| webDim5ValueName | string |   |   |
| webDim6ValueName | string |   |   |
| webDim7ValueName | string |   |   |
| webDim8ValueName | string |   |   |
| webDim1Rule | int |   |   |
| webDim2Rule | int |   |   |
| webDim3Rule | int |   |   |
| webDim4Rule | int |   |   |
| webDim5Rule | int |   |   |
| webDim6Rule | int |   |   |
| webDim7Rule | int |   |   |
| webDim8Rule | int |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsStdAmountDistribCodes
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| description | string |   |   |
| enabledForPurchase | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csStdAmountDistribCodesVendors | [CsStdAmountDistribCodesVendors[]](#csstdamountdistribcodesvendors) | Yes |
# CsStdAmountDistribCodesVendors
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| vendorNo | string |   |   |
| amountDistributionCode | string |   |   |

# CsUnitOfMeasure
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| description | string |   |   |

# CsVATProdPostGroups
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| description | string |   |   |

# CsVendorInfo
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| name | string |   |   |
| name2 | string |   |   |
| address | string |   |   |
| address2 | string |   |   |
| postCodeCity | string |   |   |
| phoneNo | string |   |   |
| countryRegion | string |   |   |
| comment | bool |   |   |
| blocked | string |   |   |
| balanceLCY | float |   |   |
| balanceDueLCY | float |   |   |
| vATRegistrationNo | string |   |   |
| county | string |   |   |
| eMail | string |   |   |
| homePage | string |   |   |
| globalDimension1Filter | string |   |   |
| globalDimension2Filter | string |   |   |
| currencyFilter | string |   |   |
| dateFilter | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csVendorInfoComments | [CsVendorInfoComments[]](#csvendorinfocomments) | Yes |
| csVendorInfoContacts | [CsVendorInfoContacts[]](#csvendorinfocontacts) | Yes |
| csVendorInfoDocuments | [CsVendorInfoDocuments[]](#csvendorinfodocuments) | Yes |
# CsVendorInfoComments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| tableName | string |   |   |
| no | string |   |   |
| lineNo | int |   |   |
| date | date |   |   |
| code | string |   |   |
| comment | string |   |   |

# CsVendorInfoContacts
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| name | string |   |   |
| phoneNo | string |   |   |
| eMail | string |   |   |

# CsVendorInfoDocuments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| type | string |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| typeInt | string |   |   |
| documentTypeInt | string |   |   |
| currencyCode | string |   |   |
| amountExclVAT | float |   |   |
| amountInclVAT | float |   |   |
| date | date |   |   |
| fullyApplied | bool |   |   |
| onHold | string |   |   |
| latestComment | string |   |   |

# CsWebHelp
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| section | string |   |   |
| lineNo | int |   |   |
| heading | bool |   |   |
| text | string |   |   |
| bold | bool |   |   |
| italic | bool |   |   |
| underline | bool |   |   |
| link | string |   |   |
| linkType | string |   |   |
| newWindow | bool |   |   |

# CsWebMenu
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| description | string |   |   |
| sorting | int |   |   |

# CsWebSetup
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| companyGuid | string |   |   |
| companyName | string |   |   |
| enableWebApproval | bool |   |   |
| lCYCode | string |   |   |
| showLCYAmounts | int |   |   |
| showType | bool |   |   |
| showPostingAccountName | bool |   |   |
| showJobNo | bool |   |   |
| showJobTaskNo | bool |   |   |
| showProdPostingGroup | bool |   |   |
| showVATProdGroup | bool |   |   |
| showDescription2 | bool |   |   |
| showLineDiscPct | bool |   |   |
| showUOM | bool |   |   |
| showFAPostingType | bool |   |   |
| showLocationCode | bool |   |   |
| showDeferralCode | bool |   |   |
| dimJobFieldPlacement | int |   |   |
| defSearchFromDate | date |   |   |
| defSearchToDate | date |   |   |
| defTimeZoneId | string |   |   |
| defNumberAndUnitsName | string |   |   |
| defLanguageName | string |   |   |
| webHelpActive | bool |   |   |
| advApprovalInvoice | bool |   |   |
| advApprovalCrMemo | bool |   |   |
| maxLineDescLength | int |   |   |
| allowForwardAndApprove | bool |   |   |
| allowForwardWOApproval | bool |   |   |
| allowForwardAndReturn | bool |   |   |
| dim1Code | string |   |   |
| dim2Code | string |   |   |
| dim3Code | string |   |   |
| dim4Code | string |   |   |
| dim5Code | string |   |   |
| dim6Code | string |   |   |
| dim7Code | string |   |   |
| dim8Code | string |   |   |
| dim1Name | string |   |   |
| dim2Name | string |   |   |
| dim3Name | string |   |   |
| dim4Name | string |   |   |
| dim5Name | string |   |   |
| dim6Name | string |   |   |
| dim7Name | string |   |   |
| dim8Name | string |   |   |
| lineDim1Code | string |   |   |
| lineDim2Code | string |   |   |
| lineDim3Code | string |   |   |
| lineDim4Code | string |   |   |
| lineDim5Code | string |   |   |
| lineDim6Code | string |   |   |
| lineDim7Code | string |   |   |
| lineDim8Code | string |   |   |
| lineDim1Name | string |   |   |
| lineDim2Name | string |   |   |
| lineDim3Name | string |   |   |
| lineDim4Name | string |   |   |
| lineDim5Name | string |   |   |
| lineDim6Name | string |   |   |
| lineDim7Name | string |   |   |
| lineDim8Name | string |   |   |
| cEMEnabled | bool |   |   |
| cDCEnabled | bool |   |   |

# CsWebSubMenu
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| webMenuCode | string |   |   |
| code | string |   |   |
| description | string |   |   |
| approvalCodeFilter | string |   |   |
| tableIDFilter | string |   |   |
| documentTypeFilter | string |   |   |
| sorting | int |   |   |

# CsWebUser
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| userID | string |   |   |
| documentSearch | string |   |   |
| purchRespCenterFilter | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csWebUserPermissions | [CsWebUserPermissions[]](#cswebuserpermissions) | Yes |
# CsWebUserCompany
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| userId | string |   |   |
| companyCode | string |   |   |
| companyGuid | guid |   |   |
| noOfDocForApproval | int |   |   |
| noOfSharedDocuments | int |   |   |
| display | string |   |   |

# CsWebUserPermissions
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| continiaUserID | string |   |   |
| type | string |   |   |
| dimensionCode | string |   |   |
| approvalUserGroupCode | string |   |   |
| assigningPermission | string |   |   |
| approvalPermission | string |   |   |
| assigningFilter | string |   |   |
| approvalFilter | string |   |   |
| noOfRecords | int |   |   |

# CsWebUserPmsSelection
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| permissionType | string |   |   |
| continiaUserID | string |   |   |
| type | string |   |   |
| dimensionCode | string |   |   |
| approvalUserGroupCode | string |   |   |
| codeNo | string |   |   |
| typeInt | string |   |   |
| permissionTypeInt | string |   |   |
| name | string |   |   |
| blocked | bool |   |   |
| accountType | string |   |   |

# Company
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| name | string |   |   |
| evaluationCompany | bool |   |   |
| displayName | string |   |   |
| id | guid | X |   |
| businessProfileId | string |   |   |

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
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| transactionNo | int |   |   |
| customerNo | string |   |   |
| postingDate | date |   |   |
| dueDate | date |   |   |
| pmtDiscountDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| salespersonCode | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| iCPartnerCode | string |   |   |
| open | bool |   |   |
| currencyCode | string |   |   |
| dimensionSetID | int |   |   |
| amount | float |   |   |
| debitAmount | float |   |   |
| creditAmount | float |   |   |
| remainingAmount | float |   |   |
| amountLCY | float |   |   |
| debitAmountLCY | float |   |   |
| creditAmountLCY | float |   |   |
| remainingAmtLCY | float |   |   |
| originalAmtLCY | float |   |   |
| customerName | string |   |   |
| auxiliaryIndex1 | string |   |   |

# DimensionSetEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| dimensionSetID | int |   |   |
| dimensionCode | string |   |   |
| dimensionValueCode | string |   |   |
| dimensionValueID | int |   |   |
| dimensionName | string |   |   |
| dimensionValueName | string |   |   |

# ExcelTemplateAgedAccountsPayable
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| vendorId | guid |   |   |
| vendorNumber | string |   |   |
| name | string |   |   |
| currencyCode | string |   |   |
| balanceDue | float |   |   |
| currentAmount | float |   |   |
| period1Amount | float |   |   |
| period2Amount | float |   |   |
| period3Amount | float |   |   |
| agedAsOfDate | date |   |   |
| periodLengthFilter | string |   |   |

# ExcelTemplateAgedAccountsReceivable
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| customerId | guid |   |   |
| customerNumber | string |   |   |
| name | string |   |   |
| currencyCode | string |   |   |
| balanceDue | float |   |   |
| currentAmount | float |   |   |
| period1Amount | float |   |   |
| period2Amount | float |   |   |
| period3Amount | float |   |   |
| agedAsOfDate | date |   |   |
| periodLengthFilter | string |   |   |

# ExcelTemplateBalanceSheet
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| lineNumber | int |   |   |
| display | string |   |   |
| balance | float |   |   |
| lineType | string |   |   |
| indentation | int |   |   |
| dateFilter | date |   |   |

# ExcelTemplateCashFlowStatement
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| lineNumber | int |   |   |
| display | string |   |   |
| netChange | float |   |   |
| lineType | string |   |   |
| indentation | int |   |   |
| dateFilter | date |   |   |

# ExcelTemplateIncomeStatement
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| lineNumber | int |   |   |
| display | string |   |   |
| netChange | float |   |   |
| lineType | string |   |   |
| indentation | int |   |   |
| dateFilter | date |   |   |

# ExcelTemplateRetainedEarnings
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| lineNumber | int |   |   |
| display | string |   |   |
| netChange | float |   |   |
| lineType | string |   |   |
| indentation | int |   |   |
| dateFilter | date |   |   |

# ExcelTemplateTrialBalance
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| number | string |   |   |
| accountId | guid |   |   |
| accountType | string |   |   |
| display | string |   |   |
| totalDebit | string |   |   |
| totalCredit | string |   |   |
| balanceAtDateDebit | string |   |   |
| balanceAtDateCredit | string |   |   |
| dateFilter | date |   |   |

# ExcelTemplateViewCompanyInformation
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| displayName | string |   |   |
| currency | string |   |   |

# FALedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| gLEntryNo | int |   |   |
| fANo | string |   |   |
| fAClassCode | string |   |   |
| fASubclassCode | string |   |   |
| fAPostingDate | date |   |   |
| fAPostingCategory | string |   |   |
| fAPostingType | string |   |   |
| fALocationCode | string |   |   |
| depreciationBookCode | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| locationCode | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| amountLCY | float |   |   |
| dimensionSetID | int |   |   |
| fADescription | string |   |   |
| auxiliaryIndex1 | string |   |   |

# GLBudgetEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| budgetName | string |   |   |
| gLAccountNo | string |   |   |
| businessUnitCode | string |   |   |
| date | date |   |   |
| amount | float |   |   |
| dimensionSetID | int |   |   |

# GLEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| transactionNo | int |   |   |
| gLAccountNo | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| sourceCode | string |   |   |
| jobNo | string |   |   |
| businessUnitCode | string |   |   |
| reasonCode | string |   |   |
| genPostingType | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| taxAreaCode | string |   |   |
| taxLiable | bool |   |   |
| taxGroupCode | string |   |   |
| useTax | bool |   |   |
| vATBusPostingGroup | string |   |   |
| vATProdPostingGroup | string |   |   |
| iCPartnerCode | string |   |   |
| amount | float |   |   |
| debitAmount | float |   |   |
| creditAmount | float |   |   |
| vATAmount | float |   |   |
| additionalCurrencyAmount | float |   |   |
| addCurrencyDebitAmount | float |   |   |
| addCurrencyCreditAmount | float |   |   |
| dimensionSetID | int |   |   |
| gLAccountName | string |   |   |

# GeneralJournals
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| journalTemplateName | string |   |   |
| journalBatchName | string |   |   |
| lineNo | int |   |   |
| currentJnlBatchName | string |   |   |
| x003CDocumentNoSimplePageX003E | string |   |   |
| x003CCurrentPostingDateX003E | date |   |   |
| x003CCurrentCurrencyCodeX003E | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| incomingDocumentEntryNo | int |   |   |
| externalDocumentNo | string |   |   |
| appliesToExtDocNo | string |   |   |
| accountType | string |   |   |
| accountNo | string |   |   |
| accountName | string |   |   |
| description | string |   |   |
| payerInformation | string |   |   |
| transactionInformation | string |   |   |
| businessUnitCode | string |   |   |
| salespersPurchCode | string |   |   |
| campaignNo | string |   |   |
| currencyCode | string |   |   |
| eU3PartyTrade | bool |   |   |
| genPostingType | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| vATBusPostingGroup | string |   |   |
| vATProdPostingGroup | string |   |   |
| quantity | float |   |   |
| amount | float |   |   |
| amountLCY | float |   |   |
| debitAmount | float |   |   |
| creditAmount | float |   |   |
| vATAmount | float |   |   |
| vATDifference | float |   |   |
| balVATAmount | float |   |   |
| balVATDifference | float |   |   |
| balAccountType | string |   |   |
| balAccountNo | string |   |   |
| balGenPostingType | string |   |   |
| balGenBusPostingGroup | string |   |   |
| balGenProdPostingGroup | string |   |   |
| deferralCode | string |   |   |
| jobQueueStatus | string |   |   |
| balVATBusPostingGroup | string |   |   |
| balVATProdPostingGroup | string |   |   |
| billToPayToNo | string |   |   |
| shipToOrderAddressCode | string |   |   |
| paymentTermsCode | string |   |   |
| appliedAutomatically | bool |   |   |
| applied | bool |   |   |
| appliesToDocType | string |   |   |
| appliesToDocNo | string |   |   |
| appliesToID | string |   |   |
| onHold | string |   |   |
| bankPaymentType | string |   |   |
| reasonCode | string |   |   |
| correction | bool |   |   |
| comment | string |   |   |
| directDebitMandateID | string |   |   |
| shortcutDimension1Code | string |   |   |
| shortcutDimension2Code | string |   |   |
| shortcutDimCode3 | string |   |   |
| shortcutDimCode4 | string |   |   |
| shortcutDimCode5 | string |   |   |
| shortcutDimCode6 | string |   |   |
| shortcutDimCode7 | string |   |   |
| shortcutDimCode8 | string |   |   |
| numberOfJournalRecords | int |   |   |
| balAccName | string |   |   |
| displayTotalDebit | float |   |   |
| displayTotalCredit | float |   |   |
| balance | float |   |   |
| totalBalance | float |   |   |

# InvoiceDocument
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| invoiceId | guid |   |   |
| base64 | string |   |   |
| binary | string |   |   |

# InvoiceReminder
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| invoiceId | guid |   |   |
| message | string |   |   |

# ItemLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| entryType | string |   |   |
| itemNo | string |   |   |
| crossReferenceNo | string |   |   |
| lotNo | string |   |   |
| itemCategoryCode | string |   |   |
| postingDate | date |   |   |
| expirationDate | date |   |   |
| warrantyDate | date |   |   |
| documentDate | date |   |   |
| documentNo | string |   |   |
| documentType | string |   |   |
| locationCode | string |   |   |
| jobNo | string |   |   |
| jobTaskNo | string |   |   |
| open | bool |   |   |
| quantity | float |   |   |
| unitOfMeasureCode | string |   |   |
| qtyPerUnitOfMeasure | float |   |   |
| remainingQuantity | float |   |   |
| invoicedQuantity | float |   |   |
| dimensionSetID | int |   |   |
| costAmountExpected | float |   |   |
| costAmountActual | float |   |   |
| costAmountNonInvtbl | float |   |   |
| purchaseAmountExpected | float |   |   |
| purchaseAmountActual | float |   |   |
| salesAmountExpected | float |   |   |
| salesAmountActual | float |   |   |
| itemDescription | string |   |   |
| auxiliaryIndex1 | string |   |   |

# ItemSalesAndProfit
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |
| genProdPostingGroup | string |   |   |
| itemDiscGroup | string |   |   |
| itemTrackingCode | string |   |   |
| profit | float |   |   |
| scrap | float |   |   |
| salesUnitOfMeasure | string |   |   |
| standardCost | float |   |   |
| unitCost | float |   |   |
| unitPrice | float |   |   |
| unitVolume | float |   |   |
| vendorNo | string |   |   |
| purchUnitOfMeasure | string |   |   |
| cOGSLCY | float |   |   |
| inventory | float |   |   |
| netChange | float |   |   |
| netInvoicedQty | float |   |   |
| purchasesLCY | float |   |   |
| purchasesQty | float |   |   |
| salesLCY | float |   |   |
| salesQty | float |   |   |
| vendorName | string |   |   |
| auxiliaryIndex1 | string |   |   |

# ItemSalesByCustomer
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| documentNo | string |   |   |
| postingDate | date |   |   |
| itemNo | string |   |   |
| itemLedgerEntryQuantity | float |   |   |
| dimensionSetID | int |   |   |
| customerNo | string |   |   |
| name | string |   |   |
| description | string |   |   |
| genProdPostingGroup | string |   |   |
| auxiliaryIndex1 | string |   |   |

# JobLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| jobNo | string |   |   |
| jobTaskNo | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| documentNo | string |   |   |
| jobPostingGroup | string |   |   |
| resourceGroupNo | string |   |   |
| workTypeCode | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| locationCode | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| quantityBase | float |   |   |
| directUnitCostLCY | float |   |   |
| unitCostLCY | float |   |   |
| totalCostLCY | float |   |   |
| unitPriceLCY | float |   |   |
| totalPriceLCY | float |   |   |
| lineAmountLCY | float |   |   |
| dimensionSetID | int |   |   |
| jobDescription | string |   |   |
| auxiliaryIndex1 | string |   |   |

# JobList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |
| billToCustomerNo | string |   |   |
| status | string |   |   |
| personResponsible | string |   |   |
| nextInvoiceDate | date |   |   |
| jobPostingGroup | string |   |   |
| searchDescription | string |   |   |
| percentOfOverduePlanningLines | float |   |   |
| percentCompleted | float |   |   |
| percentInvoiced | float |   |   |
| projectManager | string |   |   |

# JobPlanningLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| jobNo | string |   |   |
| jobTaskNo | string |   |   |
| lineNo | int |   |   |
| lineType | string |   |   |
| usageLink | bool |   |   |
| planningDate | date |   |   |
| plannedDeliveryDate | date |   |   |
| currencyDate | date |   |   |
| documentNo | string |   |   |
| type | string |   |   |
| no | string |   |   |
| description | string |   |   |
| priceCalculationMethod | string |   |   |
| costCalculationMethod | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| variantCode | string |   |   |
| locationCode | string |   |   |
| workTypeCode | string |   |   |
| unitOfMeasureCode | string |   |   |
| reserveName | string |   |   |
| quantity | float |   |   |
| reservedQuantity | float |   |   |
| quantityBase | float |   |   |
| remainingQty | float |   |   |
| directUnitCostLCY | float |   |   |
| unitCost | float |   |   |
| unitCostLCY | float |   |   |
| totalCost | float |   |   |
| remainingTotalCost | float |   |   |
| totalCostLCY | float |   |   |
| remainingTotalCostLCY | float |   |   |
| unitPrice | float |   |   |
| unitPriceLCY | float |   |   |
| lineAmount | float |   |   |
| remainingLineAmount | float |   |   |
| lineAmountLCY | float |   |   |
| remainingLineAmountLCY | float |   |   |
| lineDiscountAmount | float |   |   |
| lineDiscountPercent | float |   |   |
| totalPrice | float |   |   |
| totalPriceLCY | float |   |   |
| qtyPosted | float |   |   |
| qtyToTransferToJournal | float |   |   |
| postedTotalCost | float |   |   |
| postedTotalCostLCY | float |   |   |
| postedLineAmount | float |   |   |
| postedLineAmountLCY | float |   |   |
| qtyTransferredToInvoice | float |   |   |
| qtyToTransferToInvoice | float |   |   |
| qtyInvoiced | float |   |   |
| qtyToInvoice | float |   |   |
| invoicedAmountLCY | float |   |   |
| invoicedCostAmountLCY | float |   |   |
| userID | string |   |   |
| serialNo | string |   |   |
| lotNo | string |   |   |
| jobContractEntryNo | int |   |   |
| ledgerEntryType | string |   |   |
| ledgerEntryNo | int |   |   |
| systemCreatedEntry | bool |   |   |
| overdue | bool |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| jobTaskNoLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# JobTaskLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| jobNo | string |   |   |
| jobTaskNo | string |   |   |
| description | string |   |   |
| jobTaskType | string |   |   |
| totaling | string |   |   |
| jobPostingGroup | string |   |   |
| wIPTotal | string |   |   |
| wIPMethod | string |   |   |
| startDate | date |   |   |
| endDate | date |   |   |
| scheduleTotalCost | float |   |   |
| scheduleTotalPrice | float |   |   |
| usageTotalCost | float |   |   |
| usageTotalPrice | float |   |   |
| contractTotalCost | float |   |   |
| contractTotalPrice | float |   |   |
| contractInvoicedCost | float |   |   |
| contractInvoicedPrice | float |   |   |
| remainingTotalCost | float |   |   |
| remainingTotalPrice | float |   |   |
| eACTotalCost | float |   |   |
| eACTotalPrice | float |   |   |
| globalDimension1Code | string |   |   |
| globalDimension2Code | string |   |   |
| outstandingOrders | float |   |   |
| amtRcdNotInvoiced | float |   |   |
| planningDateFilter | string |   |   |
| postingDateFilter | string |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| totalingLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# Media
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | guid |   |   |
| description | string |   |   |
| content | string |   |   |
| mimeType | string |   |   |
| height | int |   |   |
| width | int |   |   |
| companyName | string |   |   |
| expirationDate | date |   |   |
| prohibitCache | bool |   |   |
| fileName | string |   |   |
| securityToken | string |   |   |
| creatingUser | string |   |   |

# PowerBIAgedAccPayable
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| value | float |   |   |
| periodType | string |   |   |
| date | string |   |   |
| dateSorting | int |   |   |
| periodTypeSorting | int |   |   |

# PowerBIAgedAccReceivable
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| value | float |   |   |
| periodType | string |   |   |
| date | string |   |   |
| measureName | string |   |   |
| dateSorting | int |   |   |
| periodTypeSorting | int |   |   |

# PowerBIAgedInventoryChart
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| value | float |   |   |
| date | string |   |   |
| periodType | string |   |   |
| periodTypeSorting | int |   |   |

# PowerBICustItemLedgEnt
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| itemNo | string |   |   |
| quantity | float |   |   |
| auxiliaryIndex1 | int |   |   |

# PowerBICustLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| dueDate | date |   |   |
| open | bool |   |   |
| customerPostingGroup | string |   |   |
| salesLCY | float |   |   |
| postingDate | date |   |   |
| remainingAmtLCY | float |   |   |

# PowerBICustomerList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| customerName | string |   |   |
| customerNo | string |   |   |
| creditLimit | float |   |   |
| balanceDue | float |   |   |
| postingDate | date |   |   |
| custLedgerEntryNo | int |   |   |
| amount | float |   |   |
| amountLCY | float |   |   |
| transactionNo | int |   |   |
| entryNo | int |   |   |

# PowerBIGLAmountList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| gLAccountNo | string |   |   |
| name | string |   |   |
| accountType | string |   |   |
| debitCredit | string |   |   |
| postingDate | date |   |   |
| amount | float |   |   |
| entryNo | int |   |   |

# PowerBIGLBudgetedAmount
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| gLAccountNo | string |   |   |
| name | string |   |   |
| accountType | string |   |   |
| debitCredit | string |   |   |
| amount | float |   |   |
| date | date |   |   |
| auxiliaryIndex1 | int |   |   |

# PowerBIItemPurchaseList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| itemNo | string |   |   |
| searchDescription | string |   |   |
| purchasePostDate | date |   |   |
| purchasedQuantity | float |   |   |
| purchaseEntryNo | int |   |   |

# PowerBIItemSalesList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| itemNo | string |   |   |
| searchDescription | string |   |   |
| salesPostDate | date |   |   |
| soldQuantity | float |   |   |
| salesEntryNo | int |   |   |

# PowerBIJobActVBudgCost
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| measureNo | string |   |   |
| measureName | string |   |   |
| value | float |   |   |

# PowerBIJobActVBudgPrice
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| measureNo | string |   |   |
| measureName | string |   |   |
| value | float |   |   |

# PowerBIJobProfitability
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| measureNo | string |   |   |
| measureName | string |   |   |
| value | float |   |   |

# PowerBIJobsList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| jobNo | string |   |   |
| searchDescription | string |   |   |
| complete | bool |   |   |
| status | string |   |   |
| postingDate | date |   |   |
| totalCost | float |   |   |
| entryNo | int |   |   |
| entryType | string |   |   |

# PowerBIPurchaseHdrVendor
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| itemNo | string |   |   |
| quantity | float |   |   |
| baseUnitOfMeasure | string |   |   |
| description | string |   |   |
| unitPrice | float |   |   |
| inventory | float |   |   |
| qtyOnPurchOrder | float |   |   |
| vendorNo | string |   |   |
| name | string |   |   |
| countryRegionCode | string |   |   |
| balance | float |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |
| auxiliaryIndex3 | string |   |   |
| auxiliaryIndex4 | int |   |   |
| auxiliaryIndex5 | string |   |   |

# PowerBIPurchaseList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentNo | string |   |   |
| orderDate | date |   |   |
| expectedReceiptDate | date |   |   |
| dueDate | date |   |   |
| pmtDiscountDate | date |   |   |
| quantity | float |   |   |
| amount | float |   |   |
| itemNo | string |   |   |
| description | string |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |
| auxiliaryIndex3 | string |   |   |
| auxiliaryIndex4 | int |   |   |

# PowerBIReportLabels
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| labelID | string |   |   |
| textValue | string |   |   |

# PowerBISalesHdrCust
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| itemNo | string |   |   |
| quantity | float |   |   |
| qtyInvoicedBase | float |   |   |
| qtyShippedBase | float |   |   |
| baseUnitOfMeasure | string |   |   |
| description | string |   |   |
| unitPrice | float |   |   |
| inventory | float |   |   |
| customerNo | string |   |   |
| name | string |   |   |
| countryRegionCode | string |   |   |
| balance | float |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |
| auxiliaryIndex3 | string |   |   |
| auxiliaryIndex4 | int |   |   |
| auxiliaryIndex5 | string |   |   |

# PowerBISalesList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentNo | string |   |   |
| requestedDeliveryDate | date |   |   |
| shipmentDate | date |   |   |
| dueDate | date |   |   |
| quantity | float |   |   |
| amount | float |   |   |
| itemNo | string |   |   |
| description | string |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |
| auxiliaryIndex3 | string |   |   |
| auxiliaryIndex4 | int |   |   |

# PowerBISalesPipeline
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| rowNo | string |   |   |
| value | float |   |   |
| measureName | string |   |   |
| measureNo | string |   |   |

# PowerBITop5Opportunities
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| measureNo | string |   |   |
| value | float |   |   |
| measureName | string |   |   |

# PowerBITopCustOverview
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| postingDate | date |   |   |
| customerNo | string |   |   |
| salesLCY | float |   |   |
| name | string |   |   |
| auxiliaryIndex1 | string |   |   |

# PowerBIVendItemLedgEnt
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| itemNo | string |   |   |
| quantity | float |   |   |
| auxiliaryIndex1 | int |   |   |

# PowerBIVendorLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| dueDate | date |   |   |
| open | bool |   |   |
| remainingAmtLCY | float |   |   |

# PowerBIVendorList
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| vendorNo | string |   |   |
| vendorName | string |   |   |
| balanceDue | float |   |   |
| postingDate | date |   |   |
| appliedVendLedgerEntryNo | int |   |   |
| amount | float |   |   |
| amountLCY | float |   |   |
| transactionNo | int |   |   |
| entryNo | int |   |   |
| remainingPmtDiscPossible | float |   |   |

# PowerBIWorkDateCalc
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| number | int |   |   |
| workDateNAV | date |   |   |

# ResLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| entryType | string |   |   |
| resourceNo | string |   |   |
| resourceGroupNo | string |   |   |
| jobNo | string |   |   |
| workTypeCode | string |   |   |
| postingDate | date |   |   |
| documentDate | date |   |   |
| documentNo | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| unitOfMeasureCode | string |   |   |
| quantity | float |   |   |
| quantityBase | float |   |   |
| directUnitCost | float |   |   |
| unitCost | float |   |   |
| totalCost | float |   |   |
| unitPrice | float |   |   |
| totalPrice | float |   |   |
| dimensionSetID | int |   |   |
| resourceName | string |   |   |
| resourceGroupName | string |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |

# SalesDashboard
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| documentNo | string |   |   |
| postingDate | date |   |   |
| entryType | string |   |   |
| quantity | float |   |   |
| dimensionSetID | int |   |   |
| salesAmountActual | float |   |   |
| salesAmountExpected | float |   |   |
| costAmountActual | float |   |   |
| costAmountExpected | float |   |   |
| countryRegionName | string |   |   |
| customerName | string |   |   |
| customerPostingGroup | string |   |   |
| customerDiscGroup | string |   |   |
| city | string |   |   |
| description | string |   |   |
| salesPersonName | string |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |
| auxiliaryIndex3 | string |   |   |
| auxiliaryIndex4 | string |   |   |

# SalesOpportunities
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | string |   |   |
| description | string |   |   |
| creationDate | date |   |   |
| closed | bool |   |   |
| salesCycleCode | string |   |   |
| dateClosed | date |   |   |
| priority | string |   |   |
| status | string |   |   |
| calcdCurrentValueLCY | float |   |   |
| chancesOfSuccess | float |   |   |
| completed | float |   |   |
| contactName | string |   |   |
| estimatedClosingDate | date |   |   |
| salespersonName | string |   |   |
| estimatedValueLCY | float |   |   |
| contactCompanyName | string |   |   |

# SalesOrdersBySalesPerson
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| itemNo | string |   |   |
| itemDescription | string |   |   |
| documentNo | string |   |   |
| amount | float |   |   |
| lineNo | int |   |   |
| dimensionSetID | int |   |   |
| postingDate | date |   |   |
| currenyDescription | string |   |   |
| currencyCode | string |   |   |
| salesPersonCode | string |   |   |
| salesPersonName | string |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |
| auxiliaryIndex3 | string |   |   |
| auxiliaryIndex4 | string |   |   |

# SegmentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| segmentNo | string |   |   |
| lineNo | int |   |   |
| contactNo | string |   |   |
| campaignNo | string |   |   |
| salespersonCode | string |   |   |
| correspondenceType | string |   |   |
| interactionTemplateCode | string |   |   |
| costLCY | float |   |   |
| durationMin | float |   |   |
| attachmentNo | int |   |   |
| campaignResponse | bool |   |   |
| informationFlow | string |   |   |
| initiatedBy | string |   |   |
| contactAltAddressCode | string |   |   |
| evaluation | string |   |   |
| campaignTarget | bool |   |   |
| languageCode | string |   |   |
| description | string |   |   |
| date | date |   |   |
| timeOfInteraction | string |   |   |
| attemptFailed | bool |   |   |
| toDoNo | string |   |   |
| contactCompanyNo | string |   |   |
| campaignEntryNo | int |   |   |
| interactionGroupCode | string |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| sendWordDocAsAttmt | bool |   |   |
| contactVia | string |   |   |
| versionNo | int |   |   |
| docNoOccurrence | int |   |   |
| subject | string |   |   |
| opportunityNo | string |   |   |
| wizardStep | string |   |   |
| wizardContactName | string |   |   |
| opportunityDescription | string |   |   |
| campaignDescription | string |   |   |
| interactionSuccessful | bool |   |   |
| dialContact | bool |   |   |
| mailContact | bool |   |   |
| contactName | string |   |   |
| contactCompanyName | string |   |   |

# TopCustomerOverview
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| name | string |   |   |
| no | string |   |   |
| countryRegionCode | string |   |   |
| city | string |   |   |
| globalDimension1Code | string |   |   |
| globalDimension2Code | string |   |   |
| salespersonCode | string |   |   |
| salesLCY | float |   |   |
| profitLCY | float |   |   |
| salesPersonName | string |   |   |
| countryRegionName | string |   |   |
| auxiliaryIndex1 | string |   |   |
| auxiliaryIndex2 | string |   |   |

# UserTaskSetComplete
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| iD | int |   |   |
| title | string |   |   |
| dueDateTime | date |   |   |
| priority | string |   |   |
| percentComplete | int |   |   |
| assignedToUserName | string |   |   |
| userTaskGroupAssignedTo | string |   |   |
| createdDateTime | date |   |   |
| completedDateTime | date |   |   |
| startDateTime | date |   |   |
| createdByUserName | string |   |   |
| completedByUserName | string |   |   |

## Actions

| Name |
| --- | --- | :-: |
# ValueEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| itemNo | string |   |   |
| itemLedgerEntryNo | int |   |   |
| itemLedgerEntryType | string |   |   |
| itemLedgerEntryQuantity | float |   |   |
| postingDate | date |   |   |
| valuationDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| genBusPostingGroup | string |   |   |
| genProdPostingGroup | string |   |   |
| locationCode | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| jobNo | string |   |   |
| jobTaskNo | string |   |   |
| jobLedgerEntryNo | int |   |   |
| valuedQuantity | float |   |   |
| invoicedQuantity | float |   |   |
| costPerUnit | float |   |   |
| costPostedToGL | float |   |   |
| expectedCost | bool |   |   |
| costAmountActual | float |   |   |
| costAmountExpected | float |   |   |
| costAmountNonInvtbl | float |   |   |
| salesAmountActual | float |   |   |
| salesAmountExpected | float |   |   |
| purchaseAmountActual | float |   |   |
| purchaseAmountExpected | float |   |   |
| dimensionSetID | int |   |   |
| itemDescription | string |   |   |
| auxiliaryIndex1 | string |   |   |

# VendorLedgerEntries
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| entryNo | int |   |   |
| transactionNo | int |   |   |
| vendorNo | string |   |   |
| postingDate | date |   |   |
| dueDate | date |   |   |
| pmtDiscountDate | date |   |   |
| documentDate | date |   |   |
| documentType | string |   |   |
| documentNo | string |   |   |
| purchaserCode | string |   |   |
| sourceCode | string |   |   |
| reasonCode | string |   |   |
| iCPartnerCode | string |   |   |
| open | bool |   |   |
| currencyCode | string |   |   |
| dimensionSetID | int |   |   |
| amount | float |   |   |
| debitAmount | float |   |   |
| creditAmount | float |   |   |
| remainingAmount | float |   |   |
| amountLCY | float |   |   |
| debitAmountLCY | float |   |   |
| creditAmountLCY | float |   |   |
| remainingAmtLCY | float |   |   |
| originalAmtLCY | float |   |   |
| vendorName | string |   |   |
| auxiliaryIndex1 | string |   |   |

# InvoicingAttachment
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| documentId | guid |   |   |
| fileName | string |   |   |
| byteSize | int |   |   |
| content | string |   |   |
| base64Content | string |   |   |
| lastModifiedDateTime | date | X |   |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingContact
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| number | string |   |   |
| xrmId | guid |   |   |
| displayName | string |   |   |
| phoneNumber | string |   |   |
| email | string |   |   |
| customerId | guid |   |   |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingCountryRegion
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| code | string |   |   |
| displayName | string |   |   |
| lastModifiedDateTime | date | X |   |

# InvoicingCustomer
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| number | string |   |   |
| graphContactId | string |   |   |
| contactId | guid |   |   |
| displayName | string |   |   |
| type | string |   |   |
| isBlocked | bool |   |   |
| address | postalAddressType |   |   |
| phoneNumber | string |   |   |
| email | string |   |   |
| website | string |   |   |
| pricesIncludeTax | bool |   |   |
| taxLiable | bool |   |   |
| taxAreaId | guid |   |   |
| taxAreaDisplayName | string |   |   |
| taxRegistrationNumber | string |   |   |
| paymentTermsId | guid |   |   |
| shipmentMethodId | guid |   |   |
| paymentMethodId | guid |   |   |
| balance | float |   |   |
| overdueAmount | float |   |   |
| totalSalesExcludingTax | float |   |   |
| lastModifiedDateTime | date | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingCustomersCoupons | [InvoicingCustomersCoupon[]](#invoicingcustomerscoupon) | Yes |
# InvoicingCustomersCoupon
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| claimId | string |   |   |
| graphContactId | string |   |   |
| customerId | guid |   |   |
| usage | string |   |   |
| offer | string |   |   |
| terms | string |   |   |
| code | string |   |   |
| expiration | date |   |   |
| discountValue | float |   |   |
| discountType | string |   |   |
| createdDateTime | date |   |   |
| isValid | bool |   |   |
| status | string |   |   |
| amount | string |   |   |
| isApplied | bool |   |   |

# InvoicingEmailPreview
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentId | guid |   |   |
| email | string |   |   |
| subject | string |   |   |
| body | string |   |   |
| bodyText | string |   |   |

# InvoicingEmailSetting
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| recipientType | string |   |   |
| eMail | string |   |   |

# InvoicingExportInvoice
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   |   |
| startDate | date |   |   |
| endDate | date |   |   |
| email | string |   |   |

# InvoicingGeneralSetting
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| currencySymbol | string |   |   |
| paypalEmailAddress | string |   |   |
| countryRegionCode | string |   |   |
| languageId | int |   |   |
| languageCode | string |   |   |
| languageDisplayName | string |   |   |
| defaultTaxId | guid |   |   |
| defaultTaxDisplayName | string |   |   |
| defaultPaymentTermsId | guid |   |   |
| defaultPaymentTermsDisplayName | string |   |   |
| defaultPaymentMethodId | guid |   |   |
| defaultPaymentMethodDisplayName | string |   |   |
| amountRoundingPrecision | float |   |   |
| unitAmountRoundingPrecision | float |   |   |
| quantityRoundingPrecision | float |   |   |
| taxRoundingPrecision | float |   |   |
| draftInvoiceFileName | string |   |   |
| postedInvoiceFileName | string |   |   |
| quoteFileName | string |   |   |
| taxableGroupId | guid |   |   |
| nonTaxableGroupId | guid |   |   |
| enableSynchronization | bool |   |   |
| enableSyncCoupons | bool |   |   |
| updateVersion | string |   |   |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingItem
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| number | string |   |   |
| displayName | string |   |   |
| type | string |   |   |
| blocked | bool |   |   |
| baseUnitOfMeasureId | guid |   |   |
| baseUnitOfMeasureIntStdCode | string |   |   |
| baseUnitOfMeasureDescription | string |   |   |
| gtin | string |   |   |
| inventory | float |   |   |
| unitPrice | float |   |   |
| priceIncludesTax | bool |   |   |
| unitCost | float |   |   |
| taxGroupId | guid |   |   |
| taxGroupCode | string |   |   |
| taxable | bool |   |   |
| lastModifiedDateTime | date | X |   |

# InvoicingKPI
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| invoicedYearToDate | float |   |   |
| numberOfInvoicesYearToDate | int |   |   |
| invoicedCurrentMonth | float |   |   |
| salesInvoicesOutsdanding | float |   |   |
| salesInvoicesOverdue | float |   |   |
| numberOfQuotes | int |   |   |
| numberOfDraftInvoices | int |   |   |
| requestedDateTime | date |   |   |
| yTDDateFilter | string |   |   |

# InvoicingLanguage
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| languageId | int |   |   |
| languageCode | string |   |   |
| displayName | string |   |   |
| default | bool |   |   |

# InvoicingPDF
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentId | guid |   |   |
| fileName | string |   |   |
| content | string |   |   |

# InvoicingPaymentMethod
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| code | string |   |   |
| displayName | string |   |   |
| default | bool |   |   |
| lastModifiedDateTime | date | X |   |

# InvoicingPaymentTerm
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| code | string |   |   |
| displayName | string |   |   |
| dueDateCalculation | string |   |   |
| discountDateCalculation | string |   |   |
| discountPercent | float |   |   |
| calculateDiscountOnCreditMemos | bool |   |   |
| lastModifiedDateTime | date | X |   |
| default | bool |   |   |

# InvoicingQBOSyncAuth
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| key | int |   |   |
| authorizationUrl | string |   |   |

# InvoicingSMTPMailSetup
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| primaryKey | string |   |   |
| sMTPServer | string |   |   |
| authentication | string |   |   |
| userName | string |   |   |
| sMTPServerPort | int |   |   |
| secureConnection | bool |   |   |
| passWord | string |   |   |

# InvoicingSalesInvoiceOverview
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| number | string |   |   |
| customerNumber | string |   |   |
| customerName | string |   |   |
| invoiceDate | date |   |   |
| dueDate | date |   |   |
| currencyCode | string |   |   |
| subtotalAmount | float |   |   |
| totalAmountExcludingTax | float |   |   |
| totalTaxAmount | float |   |   |
| totalAmountIncludingTax | float |   |   |
| status | string |   |   |
| lastModifiedDateTime | date | X |   |
| isTest | bool |   |   |
| lastEmailSentStatus | string |   |   |

# InvoicingSalesInvoice
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X |   |
| number | string |   |   |
| customerId | guid |   |   |
| graphContactId | string |   |   |
| customerNumber | string |   |   |
| taxLiable | bool |   |   |
| taxAreaId | guid |   |   |
| taxAreaDisplayName | string |   |   |
| taxRegistrationNumber | string |   |   |
| customerName | string |   |   |
| customerEmail | string |   |   |
| invoiceDate | date |   |   |
| dueDate | date |   |   |
| billingPostalAddress | postalAddressType |   |   |
| pricesIncludeTax | bool |   |   |
| currencyCode | string |   |   |
| lines | array |   |   |
| lines.*.sequence | int |   | X |
| lines.*.itemId | guid |   | X |
| lines.*.description | string |   | X |
| lines.*.quantity | float |   | X |
| lines.*.unitPrice | float |   | X |
| lines.*.lineDiscountCalculation | string |   |   |
| lines.*.lineDiscountValue | float |   | X |
| lines.*.taxable | bool |   | X |
| lines.*.taxGroupId | guid |   | X |
| lines.*.lineAmount | float |   | X |
| lines.*.amountExcludingTax | float |   | X |
| lines.*.amountIncludingTax | float |   | X |
| lines.*.invoiceDiscountAmount | float |   | X |
| lines.*.taxPercent | float |   | X |
| lines.*.totalTaxAmount | float |   | X |
| subtotalAmount | float |   | X |
| subtotalAmount.sequence | int |   | X |
| subtotalAmount.itemId | guid |   | X |
| subtotalAmount.description | string |   | X |
| subtotalAmount.quantity | float |   | X |
| subtotalAmount.unitPrice | float |   | X |
| subtotalAmount.lineDiscountCalculation | string |   |   |
| subtotalAmount.lineDiscountValue | float |   | X |
| subtotalAmount.taxable | bool |   | X |
| subtotalAmount.taxGroupId | guid |   | X |
| subtotalAmount.lineAmount | float |   | X |
| subtotalAmount.amountExcludingTax | float |   | X |
| subtotalAmount.amountIncludingTax | float |   | X |
| subtotalAmount.invoiceDiscountAmount | float |   | X |
| subtotalAmount.taxPercent | float |   | X |
| subtotalAmount.totalTaxAmount | float |   | X |
| discountAmount | float |   | X |
| discountAmount.sequence | int |   | X |
| discountAmount.itemId | guid |   | X |
| discountAmount.description | string |   | X |
| discountAmount.quantity | float |   | X |
| discountAmount.unitPrice | float |   | X |
| discountAmount.lineDiscountCalculation | string |   |   |
| discountAmount.lineDiscountValue | float |   | X |
| discountAmount.taxable | bool |   | X |
| discountAmount.taxGroupId | guid |   | X |
| discountAmount.lineAmount | float |   | X |
| discountAmount.amountExcludingTax | float |   | X |
| discountAmount.amountIncludingTax | float |   | X |
| discountAmount.invoiceDiscountAmount | float |   | X |
| discountAmount.taxPercent | float |   | X |
| discountAmount.totalTaxAmount | float |   | X |
| discountAppliedBeforeTax | bool |   | X |
| discountAppliedBeforeTax.sequence | int |   | X |
| discountAppliedBeforeTax.itemId | guid |   | X |
| discountAppliedBeforeTax.description | string |   | X |
| discountAppliedBeforeTax.quantity | float |   | X |
| discountAppliedBeforeTax.unitPrice | float |   | X |
| discountAppliedBeforeTax.lineDiscountCalculation | string |   |   |
| discountAppliedBeforeTax.lineDiscountValue | float |   | X |
| discountAppliedBeforeTax.taxable | bool |   | X |
| discountAppliedBeforeTax.taxGroupId | guid |   | X |
| discountAppliedBeforeTax.lineAmount | float |   | X |
| discountAppliedBeforeTax.amountExcludingTax | float |   | X |
| discountAppliedBeforeTax.amountIncludingTax | float |   | X |
| discountAppliedBeforeTax.invoiceDiscountAmount | float |   | X |
| discountAppliedBeforeTax.taxPercent | float |   | X |
| discountAppliedBeforeTax.totalTaxAmount | float |   | X |
| coupons | array |   | X |
| totalAmountExcludingTax | float |   | X |
| totalTaxAmount | float |   | X |
| totalAmountIncludingTax | float |   | X |
| noteForCustomer | string |   | X |
| status | string |   | X |
| lastModifiedDateTime | date | X | X |
| attachments | array |   | X |
| invoiceDiscountCalculation | string |   | X |
| invoiceDiscountValue | float |   | X |
| remainingAmount | float |   | X |
| lastEmailSentStatus | string |   | X |
| lastEmailSentTime | date |   | X |
| isTest | bool |   | X |
| isCustomerBlocked | bool |   | X |

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
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| appliesToInvoiceId | guid |   | X |
| paymentNo | int |   | X |
| customerId | guid |   | X |
| paymentDate | date |   | X |
| amount | float |   | X |
| paymentMethodId | guid |   | X |

# InvoicingSalesQuote
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| number | string |   | X |
| quoteDate | date |   | X |
| dueDate | date |   | X |
| validUntilDate | date |   | X |
| status | string |   | X |
| accepted | bool |   | X |
| acceptedDate | date |   | X |
| customerId | guid |   | X |
| graphContactId | string |   | X |
| customerNumber | string |   | X |
| customerName | string |   | X |
| customerEmail | string |   | X |
| taxLiable | bool |   | X |
| taxAreaId | guid |   | X |
| taxAreaDisplayName | string |   | X |
| taxRegistrationNumber | string |   | X |
| billingPostalAddress | postalAddressType |   | X |
| pricesIncludeTax | bool |   | X |
| shipmentMethod | string |   | X |
| salesperson | string |   | X |
| currencyCode | string |   | X |
| lines | array |   | X |
| subtotalAmount | float |   | X |
| discountAmount | float |   | X |
| discountAppliedBeforeTax | bool |   | X |
| coupons | array |   | X |
| totalAmountExcludingTax | float |   | X |
| totalTaxAmount | float |   | X |
| totalAmountIncludingTax | float |   | X |
| noteForCustomer | string |   | X |
| lastModifiedDateTime | date | X | X |
| attachments | array |   | X |
| invoiceDiscountCalculation | string |   | X |
| invoiceDiscountValue | float |   | X |
| lastEmailSentStatus | string |   | X |
| lastEmailSentTime | date |   | X |
| isCustomerBlocked | bool |   | X |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingSalesTaxSetup
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| displayName | string |   | X |
| default | bool |   | X |
| city | string |   | X |
| cityRate | float |   | X |
| state | string |   | X |
| stateRate | float |   | X |
| canadaGstHstDescription | string |   | X |
| canadaGstHstRate | float |   | X |
| canadaPstDescription | string |   | X |
| canadaPstRate | float |   | X |
| lastModifiedDateTime | date | X | X |

# InvoicingSyncServicesSetting
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| key | int |   | X |
| qboSyncTitle | string |   | X |
| qboSyncDescription | string |   | X |
| qboSyncEnabled | bool |   | X |
| qbdSyncTitle | string |   | X |
| qbdSyncDescription | string |   | X |
| qbdSyncEnabled | bool |   | X |
| qbdSyncSendToEmail | string |   | X |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingTaxArea
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| code | string |   | X |
| displayName | string |   | X |
| taxType | string |   | X |
| lastModifiedDateTime | date | X | X |

# InvoicingTaxGroup
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| code | string |   | X |
| displayName | string |   | X |
| taxType | string |   | X |
| lastModifiedDateTime | date | X | X |

# InvoicingTaxRate
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| taxAreaId | guid |   | X |
| taxGroupId | guid |   | X |
| taxRate | float |   | X |

# InvoicingTestMail
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| code | string |   | X |
| email | string |   | X |

# InvoicingUnitsOfMeasure
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| code | string |   | X |
| displayName | string |   | X |
| internationalStandardCode | string |   | X |
| lastModifiedDateTime | date | X | X |

# InvoicingVATSetup
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| default | bool |   | X |
| displayName | string |   | X |
| vatPercentage | float |   | X |
| vatRegulationDescription | string |   | X |
| lastModifiedDateTime | date | X | X |

# Powerbifinance
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| no | int |   | X |
| date | date |   | X |
| closedPeriod | bool |   | X |
| accountScheduleName | string |   | X |
| kPICode | string |   | X |
| kPIName | string |   | X |
| netChangeActual | float |   | X |
| balanceAtDateActual | float |   | X |
| netChangeBudget | float |   | X |
| balanceAtDateBudget | float |   | X |
| netChangeActualLastYear | float |   | X |
| balanceAtDateActualLastYear | float |   | X |
| netChangeBudgetLastYear | float |   | X |
| balanceAtDateBudgetLastYear | float |   | X |
| netChangeForecast | float |   | X |
| balanceAtDateForecast | float |   | X |

# PurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| buyFromVendorNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| expectedReceiptDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToReceive | float |   | X |
| directUnitCost | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| unitPriceLcy | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| jobNumber | string |   | X |
| indirectCostPercent | float |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyRcdNotInvoiced | float |   | X |
| amtRcdNotInvoiced | float |   | X |
| quantityReceived | float |   | X |
| quantityInvoiced | float |   | X |
| receiptNumber | string |   | X |
| receiptLineNumber | int |   | X |
| profitPercent | float |   | X |
| payToVendorNumber | string |   | X |
| invDiscountAmount | float |   | X |
| vendorItemNumber | string |   | X |
| salesOrderNumber | string |   | X |
| salesOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| entryPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| useTax | bool |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| reservedQuantity | float |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| outstandingAmtExVatLcy | float |   | X |
| aRcdNotInvExVatLcy | float |   | X |
| dimensionSetId | int |   | X |
| jobTaskNumber | string |   | X |
| jobLineType | string |   | X |
| jobUnitPrice | float |   | X |
| jobTotalPrice | float |   | X |
| jobLineAmount | float |   | X |
| jobLineDiscountAmount | float |   | X |
| jobLineDiscountPercent | float |   | X |
| jobUnitPriceLcy | float |   | X |
| jobTotalPriceLcy | float |   | X |
| jobLineAmountLcy | float |   | X |
| jobLineDiscAmountLcy | float |   | X |
| jobCurrencyFactor | float |   | X |
| jobCurrencyCode | string |   | X |
| jobPlanningLineNumber | int |   | X |
| jobRemainingQty | float |   | X |
| jobRemainingQtyBase | float |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| prodOrderNumber | string |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToReceiveBase | float |   | X |
| qtyRcdNotInvoicedBase | float |   | X |
| qtyReceivedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| faPostingType | string |   | X |
| depreciationBookCode | string |   | X |
| salvageValue | float |   | X |
| deprUntilFaPostingDate | bool |   | X |
| deprAcquisitionCost | bool |   | X |
| maintenanceCode | string |   | X |
| insuranceNumber | string |   | X |
| budgetedFaNumber | string |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderSalesNumber | string |   | X |
| specialOrderSalesLineNumber | int |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyReceived | bool |   | X |
| requestedReceiptDate | date |   | X |
| promisedReceiptDate | date |   | X |
| leadTimeCalculation | string |   | X |
| inboundWhseHandlingTime | string |   | X |
| plannedReceiptDate | date |   | X |
| orderDate | date |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToShip | float |   | X |
| returnQtyToShipBase | float |   | X |
| returnQtyShippedNotInvd | float |   | X |
| retQtyShpdNotInvdBase | float |   | X |
| returnShpdNotInvd | float |   | X |
| returnShpdNotInvdLcy | float |   | X |
| returnQtyShipped | float |   | X |
| returnQtyShippedBase | float |   | X |
| returnShipmentNumber | string |   | X |
| returnShipmentLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| subtype | string |   | X |
| routingNumber | string |   | X |
| operationNumber | string |   | X |
| workCenterNumber | string |   | X |
| finished | bool |   | X |
| prodOrderLineNumber | int |   | X |
| overheadRate | float |   | X |
| mpsOrder | bool |   | X |
| planningFlexibility | string |   | X |
| safetyLeadTime | string |   | X |
| routingReferenceNumber | int |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# PurchaseDocuments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| documentType | string |   | X |
| buyFromVendorNumber | string |   | X |
| number | string |   | X |
| payToVendorNumber | string |   | X |
| payToName | string |   | X |
| payToName2 | string |   | X |
| payToAddress | string |   | X |
| payToAddress2 | string |   | X |
| payToCity | string |   | X |
| payToContact | string |   | X |
| yourReference | string |   | X |
| shipToCode | string |   | X |
| shipToName | string |   | X |
| shipToName2 | string |   | X |
| shipToAddress | string |   | X |
| shipToAddress2 | string |   | X |
| shipToCity | string |   | X |
| shipToContact | string |   | X |
| orderDate | date |   | X |
| postingDate | date |   | X |
| expectedReceiptDate | date |   | X |
| postingDescription | string |   | X |
| paymentTermsCode | string |   | X |
| dueDate | date |   | X |
| paymentDiscountPercent | float |   | X |
| pmtDiscountDate | date |   | X |
| shipmentMethodCode | string |   | X |
| locationCode | string |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| vendorPostingGroup | string |   | X |
| currencyCode | string |   | X |
| currencyFactor | float |   | X |
| pricesIncludingVat | bool |   | X |
| invoiceDiscCode | string |   | X |
| languageCode | string |   | X |
| purchaserCode | string |   | X |
| orderClass | string |   | X |
| comment | bool |   | X |
| numberPrinted | int |   | X |
| onHold | string |   | X |
| appliesToDocType | string |   | X |
| appliesToDocNumber | string |   | X |
| balAccountNumber | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| receive | bool |   | X |
| invoice | bool |   | X |
| printPostedDocuments | bool |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| receivingNumber | string |   | X |
| postingNumber | string |   | X |
| lastReceivingNumber | string |   | X |
| lastPostingNumber | string |   | X |
| vendorOrderNumber | string |   | X |
| vendorShipmentNumber | string |   | X |
| vendorInvoiceNumber | string |   | X |
| vendorCrMemoNumber | string |   | X |
| vatRegistrationNumber | string |   | X |
| sellToCustomerNumber | string |   | X |
| reasonCode | string |   | X |
| genBusPostingGroup | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| vatCountryRegionCode | string |   | X |
| buyFromVendorName | string |   | X |
| buyFromVendorName2 | string |   | X |
| buyFromAddress | string |   | X |
| buyFromAddress2 | string |   | X |
| buyFromCity | string |   | X |
| buyFromContact | string |   | X |
| payToPostCode | string |   | X |
| payToCounty | string |   | X |
| payToCountryRegionCode | string |   | X |
| buyFromPostCode | string |   | X |
| buyFromCounty | string |   | X |
| buyFromCountryRegionCode | string |   | X |
| shipToPostCode | string |   | X |
| shipToCounty | string |   | X |
| shipToCountryRegionCode | string |   | X |
| balAccountType | string |   | X |
| orderAddressCode | string |   | X |
| entryPoint | string |   | X |
| correction | bool |   | X |
| documentDate | date |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| paymentMethodCode | string |   | X |
| numberSeries | string |   | X |
| postingNumberSeries | string |   | X |
| receivingNumberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| vatBusPostingGroup | string |   | X |
| appliesToId | string |   | X |
| vatBaseDiscountPercent | float |   | X |
| status | string |   | X |
| invoiceDiscountCalculation | string |   | X |
| invoiceDiscountValue | float |   | X |
| sendIcDocument | bool |   | X |
| icStatus | string |   | X |
| buyFromIcPartnerCode | string |   | X |
| payToIcPartnerCode | string |   | X |
| icDirection | string |   | X |
| prepaymentNumber | string |   | X |
| lastPrepaymentNumber | string |   | X |
| prepmtCrMemoNumber | string |   | X |
| lastPrepmtCrMemoNumber | string |   | X |
| prepaymentPercent | float |   | X |
| prepaymentNumberSeries | string |   | X |
| compressPrepayment | bool |   | X |
| prepaymentDueDate | date |   | X |
| prepmtCrMemoNumberSeries | string |   | X |
| prepmtPostingDescription | string |   | X |
| prepmtPmtDiscountDate | date |   | X |
| prepmtPaymentTermsCode | string |   | X |
| prepmtPaymentDiscountPercent | float |   | X |
| quoteNumber | string |   | X |
| jobQueueStatus | string |   | X |
| jobQueueEntryId | guid |   | X |
| incomingDocumentEntryNumber | int |   | X |
| creditorNumber | string |   | X |
| paymentReference | string |   | X |
| aRcdNotInvExVatLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| dimensionSetId | int |   | X |
| invoiceDiscountAmount | float |   | X |
| numberOfArchivedVersions | int |   | X |
| docNumberOccurrence | int |   | X |
| campaignNumber | string |   | X |
| buyFromContactNumber | string |   | X |
| payToContactNumber | string |   | X |
| responsibilityCenter | string |   | X |
| completelyReceived | bool |   | X |
| postingFromWhseRef | int |   | X |
| locationFilter | string |   | X |
| requestedReceiptDate | date |   | X |
| promisedReceiptDate | date |   | X |
| leadTimeCalculation | string |   | X |
| inboundWhseHandlingTime | string |   | X |
| vendorAuthorizationNumber | string |   | X |
| returnShipmentNumber | string |   | X |
| returnShipmentNumberSeries | string |   | X |
| ship | bool |   | X |
| lastReturnShipmentNumber | string |   | X |
| assignedUserId | string |   | X |
| pendingApprovals | int |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseDocumentsworkflowPurchaseDocumentLines | [PurchaseDocumentsworkflowPurchaseDocumentLines[]](#purchasedocumentsworkflowpurchasedocumentlines) | Yes |
# PurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| buyFromVendorNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| expectedReceiptDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToReceive | float |   | X |
| directUnitCost | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| unitPriceLcy | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| jobNumber | string |   | X |
| indirectCostPercent | float |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyRcdNotInvoiced | float |   | X |
| amtRcdNotInvoiced | float |   | X |
| quantityReceived | float |   | X |
| quantityInvoiced | float |   | X |
| receiptNumber | string |   | X |
| receiptLineNumber | int |   | X |
| profitPercent | float |   | X |
| payToVendorNumber | string |   | X |
| invDiscountAmount | float |   | X |
| vendorItemNumber | string |   | X |
| salesOrderNumber | string |   | X |
| salesOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| entryPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| useTax | bool |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| reservedQuantity | float |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| outstandingAmtExVatLcy | float |   | X |
| aRcdNotInvExVatLcy | float |   | X |
| dimensionSetId | int |   | X |
| jobTaskNumber | string |   | X |
| jobLineType | string |   | X |
| jobUnitPrice | float |   | X |
| jobTotalPrice | float |   | X |
| jobLineAmount | float |   | X |
| jobLineDiscountAmount | float |   | X |
| jobLineDiscountPercent | float |   | X |
| jobUnitPriceLcy | float |   | X |
| jobTotalPriceLcy | float |   | X |
| jobLineAmountLcy | float |   | X |
| jobLineDiscAmountLcy | float |   | X |
| jobCurrencyFactor | float |   | X |
| jobCurrencyCode | string |   | X |
| jobPlanningLineNumber | int |   | X |
| jobRemainingQty | float |   | X |
| jobRemainingQtyBase | float |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| prodOrderNumber | string |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToReceiveBase | float |   | X |
| qtyRcdNotInvoicedBase | float |   | X |
| qtyReceivedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| faPostingType | string |   | X |
| depreciationBookCode | string |   | X |
| salvageValue | float |   | X |
| deprUntilFaPostingDate | bool |   | X |
| deprAcquisitionCost | bool |   | X |
| maintenanceCode | string |   | X |
| insuranceNumber | string |   | X |
| budgetedFaNumber | string |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderSalesNumber | string |   | X |
| specialOrderSalesLineNumber | int |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyReceived | bool |   | X |
| requestedReceiptDate | date |   | X |
| promisedReceiptDate | date |   | X |
| leadTimeCalculation | string |   | X |
| inboundWhseHandlingTime | string |   | X |
| plannedReceiptDate | date |   | X |
| orderDate | date |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToShip | float |   | X |
| returnQtyToShipBase | float |   | X |
| returnQtyShippedNotInvd | float |   | X |
| retQtyShpdNotInvdBase | float |   | X |
| returnShpdNotInvd | float |   | X |
| returnShpdNotInvdLcy | float |   | X |
| returnQtyShipped | float |   | X |
| returnQtyShippedBase | float |   | X |
| returnShipmentNumber | string |   | X |
| returnShipmentLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| subtype | string |   | X |
| routingNumber | string |   | X |
| operationNumber | string |   | X |
| workCenterNumber | string |   | X |
| finished | bool |   | X |
| prodOrderLineNumber | int |   | X |
| overheadRate | float |   | X |
| mpsOrder | bool |   | X |
| planningFlexibility | string |   | X |
| safetyLeadTime | string |   | X |
| routingReferenceNumber | int |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| sellToCustomerNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| shipmentDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToShip | float |   | X |
| unitPrice | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| customerPriceGroup | string |   | X |
| jobNumber | string |   | X |
| workTypeCode | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyShippedNotInvoiced | float |   | X |
| shippedNotInvoiced | float |   | X |
| quantityShipped | float |   | X |
| quantityInvoiced | float |   | X |
| shipmentNumber | string |   | X |
| shipmentLineNumber | int |   | X |
| profitPercent | float |   | X |
| billToCustomerNumber | string |   | X |
| invDiscountAmount | float |   | X |
| purchaseOrderNumber | string |   | X |
| purchOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| exitPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxCategory | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| vatClauseCode | string |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| shippedNotInvoicedLcy | float |   | X |
| shippedNotInvLcyNoVat | float |   | X |
| reservedQuantity | float |   | X |
| reserve | string |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| dimensionSetId | int |   | X |
| qtyToAssembleToOrder | float |   | X |
| qtyToAsmToOrderBase | float |   | X |
| atoWhseOutstandingQty | float |   | X |
| atoWhseOutstdQtyBase | float |   | X |
| jobTaskNumber | string |   | X |
| jobContractEntryNumber | int |   | X |
| postingDate | date |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| planned | bool |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToShipBase | float |   | X |
| qtyShippedNotInvdBase | float |   | X |
| qtyShippedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| depreciationBookCode | string |   | X |
| deprUntilFaPostingDate | bool |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| outOfStockSubstitution | bool |   | X |
| substitutionAvailable | bool |   | X |
| originallyOrderedNumber | string |   | X |
| originallyOrderedVarCode | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderPurchaseNumber | string |   | X |
| specialOrderPurchLineNumber | int |   | X |
| whseOutstandingQty | float |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyShipped | bool |   | X |
| requestedDeliveryDate | date |   | X |
| promisedDeliveryDate | date |   | X |
| shippingTime | string |   | X |
| outboundWhseHandlingTime | string |   | X |
| plannedDeliveryDate | date |   | X |
| plannedShipmentDate | date |   | X |
| shippingAgentCode | string |   | X |
| shippingAgentServiceCode | string |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToReceive | float |   | X |
| returnQtyToReceiveBase | float |   | X |
| returnQtyRcdNotInvd | float |   | X |
| retQtyRcdNotInvdBase | float |   | X |
| returnRcdNotInvd | float |   | X |
| returnRcdNotInvdLcy | float |   | X |
| returnQtyReceived | float |   | X |
| returnQtyReceivedBase | float |   | X |
| applFromItemEntry | int |   | X |
| bomItemNumber | string |   | X |
| returnReceiptNumber | string |   | X |
| returnReceiptLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| allowLineDisc | bool |   | X |
| customerDiscGroup | string |   | X |
| subtype | string |   | X |
| priceDescription | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocuments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| documentType | string |   | X |
| sellToCustomerNumber | string |   | X |
| number | string |   | X |
| billToCustomerNumber | string |   | X |
| billToName | string |   | X |
| billToName2 | string |   | X |
| billToAddress | string |   | X |
| billToAddress2 | string |   | X |
| billToCity | string |   | X |
| billToContact | string |   | X |
| yourReference | string |   | X |
| shipToCode | string |   | X |
| shipToName | string |   | X |
| shipToName2 | string |   | X |
| shipToAddress | string |   | X |
| shipToAddress2 | string |   | X |
| shipToCity | string |   | X |
| shipToContact | string |   | X |
| orderDate | date |   | X |
| postingDate | date |   | X |
| shipmentDate | date |   | X |
| postingDescription | string |   | X |
| paymentTermsCode | string |   | X |
| dueDate | date |   | X |
| paymentDiscountPercent | float |   | X |
| pmtDiscountDate | date |   | X |
| shipmentMethodCode | string |   | X |
| locationCode | string |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| customerPostingGroup | string |   | X |
| currencyCode | string |   | X |
| currencyFactor | float |   | X |
| customerPriceGroup | string |   | X |
| pricesIncludingVat | bool |   | X |
| invoiceDiscCode | string |   | X |
| customerDiscGroup | string |   | X |
| languageCode | string |   | X |
| salespersonCode | string |   | X |
| orderClass | string |   | X |
| comment | bool |   | X |
| numberPrinted | int |   | X |
| onHold | string |   | X |
| appliesToDocType | string |   | X |
| appliesToDocNumber | string |   | X |
| balAccountNumber | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| ship | bool |   | X |
| invoice | bool |   | X |
| printPostedDocuments | bool |   | X |
| amount | float |   | X |
| amountIncludingVAT | float |   | X |
| shippingNumber | string |   | X |
| postingNumber | string |   | X |
| lastShippingNumber | string |   | X |
| lastPostingNumber | string |   | X |
| prepaymentNumber | string |   | X |
| lastPrepaymentNumber | string |   | X |
| premptCrMemoNumber | string |   | X |
| lastPremtCrMemoNumber | string |   | X |
| vatRegistrationNumber | string |   | X |
| combineShipments | bool |   | X |
| reasonCode | string |   | X |
| genBusPostingGroup | string |   | X |
| eu3PartyTrade | bool |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| vatCountryRegionCode | string |   | X |
| sellToCustomerName | string |   | X |
| sellToCustomerName2 | string |   | X |
| sellToAddress | string |   | X |
| sellToAddress2 | string |   | X |
| sellToCity | string |   | X |
| sellToContact | string |   | X |
| billToPostCode | string |   | X |
| billToCounty | string |   | X |
| billToCountryRegionCode | string |   | X |
| sellToPostCode | string |   | X |
| sellToCounty | string |   | X |
| sellToCountryRegionCode | string |   | X |
| shipToPostCode | string |   | X |
| shipToCounty | string |   | X |
| shipToCountryRegionCode | string |   | X |
| balAccountType | string |   | X |
| exitPoint | string |   | X |
| correction | bool |   | X |
| documentDate | date |   | X |
| externalDocumentNumber | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| paymentMethodCode | string |   | X |
| shippingAgentCode | string |   | X |
| packageTrackingNumber | string |   | X |
| numberSeries | string |   | X |
| postingNumberSeries | string |   | X |
| shippingNumberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| vatBusPostingGroup | string |   | X |
| reserve | string |   | X |
| appliesToId | string |   | X |
| vatBaseDiscountPercent | float |   | X |
| status | string |   | X |
| invoiceDiscountCalculation | string |   | X |
| invoiceDiscountValue | float |   | X |
| sendIcDocument | bool |   | X |
| icStatus | string |   | X |
| sellToIcPartnerCode | string |   | X |
| billToIcPartnerCode | string |   | X |
| icDirection | string |   | X |
| prepaymentPercent | float |   | X |
| prepaymentNumberSeries | string |   | X |
| compressPrepayment | bool |   | X |
| prepaymentDueDate | date |   | X |
| prepmtCrMemoNumberSeries | string |   | X |
| prepmtPostingDescription | string |   | X |
| prepmtPmtDiscountDate | date |   | X |
| prepmtPaymentTermsCode | string |   | X |
| prepmtPaymentDiscountPercent | float |   | X |
| quoteNumber | string |   | X |
| quoteValidUntilDate | date |   | X |
| quoteSentToCustomer | date |   | X |
| quoteAccepted | bool |   | X |
| quoteAcceptedDate | date |   | X |
| jobQueueStatus | string |   | X |
| jobQueueEntryId | guid |   | X |
| incomingDocumentEntryNumber | int |   | X |
| workDescription | string |   | X |
| amountShippedNotInvoicedInclVat | float |   | X |
| amountShippedNotInvoiced | float |   | X |
| dimensionSetId | int |   | X |
| paymentServiceSetId | int |   | X |
| directDebitMandateId | string |   | X |
| invoiceDiscountAmount | float |   | X |
| numberOfArchivedVersions | int |   | X |
| docNumberOccurrence | int |   | X |
| campaignNumber | string |   | X |
| sellToCustomerTemplateCode | string |   | X |
| sellToContactNumber | string |   | X |
| billToContactNumber | string |   | X |
| billToCustomerTemplateCode | string |   | X |
| opportunityNumber | string |   | X |
| responsibilityCenter | string |   | X |
| shippingAdvice | string |   | X |
| shippedNotInvoiced | bool |   | X |
| completelyShipped | bool |   | X |
| postingFromWhseRef | int |   | X |
| locationFilter | string |   | X |
| shipped | bool |   | X |
| requestedDeliveryDate | date |   | X |
| promisedDeliveryDate | date |   | X |
| shippingTime | string |   | X |
| outboundWhseHandlingTime | string |   | X |
| shippingAgentServiceCode | string |   | X |
| lateOrderShipping | bool |   | X |
| receive | bool |   | X |
| returnReceiptNumber | string |   | X |
| returnReceiptNumberSeries | string |   | X |
| lastReturnReceiptNumber | string |   | X |
| allowLineDisc | bool |   | X |
| getShipmentUsed | bool |   | X |
| assignedUserId | string |   | X |
| dateFilter | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesDocumentsworkflowSalesDocumentLines | [SalesDocumentsworkflowSalesDocumentLines[]](#salesdocumentsworkflowsalesdocumentlines) | Yes |
# SalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| sellToCustomerNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| shipmentDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToShip | float |   | X |
| unitPrice | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| customerPriceGroup | string |   | X |
| jobNumber | string |   | X |
| workTypeCode | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyShippedNotInvoiced | float |   | X |
| shippedNotInvoiced | float |   | X |
| quantityShipped | float |   | X |
| quantityInvoiced | float |   | X |
| shipmentNumber | string |   | X |
| shipmentLineNumber | int |   | X |
| profitPercent | float |   | X |
| billToCustomerNumber | string |   | X |
| invDiscountAmount | float |   | X |
| purchaseOrderNumber | string |   | X |
| purchOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| exitPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxCategory | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| vatClauseCode | string |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| shippedNotInvoicedLcy | float |   | X |
| shippedNotInvLcyNoVat | float |   | X |
| reservedQuantity | float |   | X |
| reserve | string |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| dimensionSetId | int |   | X |
| qtyToAssembleToOrder | float |   | X |
| qtyToAsmToOrderBase | float |   | X |
| atoWhseOutstandingQty | float |   | X |
| atoWhseOutstdQtyBase | float |   | X |
| jobTaskNumber | string |   | X |
| jobContractEntryNumber | int |   | X |
| postingDate | date |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| planned | bool |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToShipBase | float |   | X |
| qtyShippedNotInvdBase | float |   | X |
| qtyShippedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| depreciationBookCode | string |   | X |
| deprUntilFaPostingDate | bool |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| outOfStockSubstitution | bool |   | X |
| substitutionAvailable | bool |   | X |
| originallyOrderedNumber | string |   | X |
| originallyOrderedVarCode | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderPurchaseNumber | string |   | X |
| specialOrderPurchLineNumber | int |   | X |
| whseOutstandingQty | float |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyShipped | bool |   | X |
| requestedDeliveryDate | date |   | X |
| promisedDeliveryDate | date |   | X |
| shippingTime | string |   | X |
| outboundWhseHandlingTime | string |   | X |
| plannedDeliveryDate | date |   | X |
| plannedShipmentDate | date |   | X |
| shippingAgentCode | string |   | X |
| shippingAgentServiceCode | string |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToReceive | float |   | X |
| returnQtyToReceiveBase | float |   | X |
| returnQtyRcdNotInvd | float |   | X |
| retQtyRcdNotInvdBase | float |   | X |
| returnRcdNotInvd | float |   | X |
| returnRcdNotInvdLcy | float |   | X |
| returnQtyReceived | float |   | X |
| returnQtyReceivedBase | float |   | X |
| applFromItemEntry | int |   | X |
| bomItemNumber | string |   | X |
| returnReceiptNumber | string |   | X |
| returnReceiptLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| allowLineDisc | bool |   | X |
| customerDiscGroup | string |   | X |
| subtype | string |   | X |
| priceDescription | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowCustomers
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| number | string |   | X |
| name | string |   | X |
| searchName | string |   | X |
| name2 | string |   | X |
| address | string |   | X |
| address2 | string |   | X |
| city | string |   | X |
| contact | string |   | X |
| phoneNumber | string |   | X |
| telexNumber | string |   | X |
| documentSendingProfile | string |   | X |
| ourAccountNumber | string |   | X |
| territoryCode | string |   | X |
| globalDimension1Code | string |   | X |
| globalDimension2Code | string |   | X |
| chainName | string |   | X |
| budgetedAmount | float |   | X |
| creditLimitLcy | float |   | X |
| customerPostingGroup | string |   | X |
| currencyCode | string |   | X |
| customerPriceGroup | string |   | X |
| languageCode | string |   | X |
| statisticsGroup | int |   | X |
| paymentTermsCode | string |   | X |
| finChargeTermsCode | string |   | X |
| salespersonCode | string |   | X |
| shipmentMethodCode | string |   | X |
| shippingAgentCode | string |   | X |
| placeOfExport | string |   | X |
| invoiceDiscCode | string |   | X |
| customerDiscGroup | string |   | X |
| countryRegionCode | string |   | X |
| collectionMethod | string |   | X |
| amount | float |   | X |
| comment | bool |   | X |
| blocked | string |   | X |
| invoiceCopies | int |   | X |
| lastStatementNumber | int |   | X |
| printStatements | bool |   | X |
| billToCustomerNumber | string |   | X |
| priority | int |   | X |
| paymentMethodCode | string |   | X |
| lastModifiedDateTime | date | X | X |
| lastDateModified | date |   | X |
| dateFilter | string |   | X |
| globalDimension1Filter | string |   | X |
| globalDimension2Filter | string |   | X |
| balance | float |   | X |
| balanceLcy | float |   | X |
| netChange | float |   | X |
| netChangeLcy | float |   | X |
| salesLcy | float |   | X |
| profitLcy | float |   | X |
| invDiscountsLcy | float |   | X |
| pmtDiscountsLcy | float |   | X |
| balanceDue | float |   | X |
| balanceDueLcy | float |   | X |
| payments | float |   | X |
| invoiceAmounts | float |   | X |
| crMemoAmounts | float |   | X |
| financeChargeMemoAmounts | float |   | X |
| paymentsLcy | float |   | X |
| invAmountsLcy | float |   | X |
| crMemoAmountsLcy | float |   | X |
| finChargeMemoAmountsLcy | float |   | X |
| outstandingOrders | float |   | X |
| shippedNotInvoiced | float |   | X |
| applicationMethod | string |   | X |
| pricesIncludingVat | bool |   | X |
| locationCode | string |   | X |
| faxNumber | string |   | X |
| telexAnswerBack | string |   | X |
| vatRegistrationNumber | string |   | X |
| combineShipments | bool |   | X |
| genBusPostingGroup | string |   | X |
| gln | string |   | X |
| postCode | string |   | X |
| county | string |   | X |
| debitAmount | float |   | X |
| creditAmount | float |   | X |
| debitAmountLcy | float |   | X |
| creditAmountLcy | float |   | X |
| eMail | string |   | X |
| homePage | string |   | X |
| reminderTermsCode | string |   | X |
| reminderAmounts | float |   | X |
| reminderAmountsLcy | float |   | X |
| numberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| vatBusPostingGroup | string |   | X |
| currencyFilter | string |   | X |
| outstandingOrdersLcy | float |   | X |
| shippedNotInvoicedLcy | float |   | X |
| reserve | string |   | X |
| blockPaymentTolerance | bool |   | X |
| pmtDiscToleranceLcy | float |   | X |
| pmtToleranceLcy | float |   | X |
| icPartnerCode | string |   | X |
| refunds | float |   | X |
| refundsLcy | float |   | X |
| otherAmounts | float |   | X |
| otherAmountsLcy | float |   | X |
| prepaymentPercent | float |   | X |
| outstandingInvoicesLcy | float |   | X |
| outstandingInvoices | float |   | X |
| billToNumberOfArchivedDoc | int |   | X |
| sellToNumberOfArchivedDoc | int |   | X |
| partnerType | string |   | X |
| preferredBankAccountCode | string |   | X |
| cashFlowPaymentTermsCode | string |   | X |
| primaryContactNumber | string |   | X |
| contactType | string |   | X |
| responsibilityCenter | string |   | X |
| shippingAdvice | string |   | X |
| shippingTime | string |   | X |
| shippingAgentServiceCode | string |   | X |
| serviceZoneCode | string |   | X |
| contractGainLossAmount | float |   | X |
| shipToFilter | string |   | X |
| outstandingServOrdersLcy | float |   | X |
| servShippedNotInvoicedLcy | float |   | X |
| outstandingServInvoicesLcy | float |   | X |
| allowLineDisc | bool |   | X |
| numberOfQuotes | int |   | X |
| numberOfBlanketOrders | int |   | X |
| numberOfOrders | int |   | X |
| numberOfInvoices | int |   | X |
| numberOfReturnOrders | int |   | X |
| numberOfCreditMemos | int |   | X |
| numberOfPstdShipments | int |   | X |
| numberOfPstdInvoices | int |   | X |
| numberOfPstdReturnReceipts | int |   | X |
| numberOfPstdCreditMemos | int |   | X |
| numberOfShipToAddresses | int |   | X |
| billToNumberOfQuotes | int |   | X |
| billToNumberOfBlanketOrders | int |   | X |
| billToNumberOfOrders | int |   | X |
| billToNumberOfInvoices | int |   | X |
| billToNumberOfReturnOrders | int |   | X |
| billToNumberOfCreditMemos | int |   | X |
| billToNumberOfPstdShipments | int |   | X |
| billToNumberOfPstdInvoices | int |   | X |
| billToNumberOfPstdReturnR | int |   | X |
| billToNumberOfPstdCrMemos | int |   | X |
| baseCalendarCode | string |   | X |
| copySellToAddrToQteFrom | string |   | X |
| validateEuVatRegNumber | bool |   | X |
| currencyId | guid |   | X |
| paymentTermsId | guid |   | X |
| shipmentMethodId | guid |   | X |
| paymentMethodId | guid |   | X |
| taxAreaId | guid |   | X |
| contactId | guid |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowGenJournalBatches
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| journalTemplateName | string |   | X |
| name | string |   | X |
| description | string |   | X |
| reasonCode | string |   | X |
| balAccountType | string |   | X |
| balAccountNumber | string |   | X |
| numberSeries | string |   | X |
| postingNumberSeries | string |   | X |
| copyVatSetupToJnlLines | bool |   | X |
| allowVatDifference | bool |   | X |
| allowPaymentExport | bool |   | X |
| bankStatementImportFormat | string |   | X |
| templateType | string |   | X |
| recurring | bool |   | X |
| suggestBalancingAmount | bool |   | X |
| lastModifiedDatetime | date |   | X |

# WorkflowGenJournalLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| journalTemplateName | string |   | X |
| journalBatchName | string |   | X |
| lineNumber | int |   | X |
| accountType | string |   | X |
| accountNumber | string |   | X |
| postingDate | date |   | X |
| documentType | string |   | X |
| documentNumber | string |   | X |
| description | string |   | X |
| vatPercent | float |   | X |
| balAccountNumber | string |   | X |
| currencyCode | string |   | X |
| amount | float |   | X |
| debitAmount | float |   | X |
| creditAmount | float |   | X |
| amountLcy | float |   | X |
| balanceLcy | float |   | X |
| currencyFactor | float |   | X |
| salesPurchLcy | float |   | X |
| profitLcy | float |   | X |
| invDiscountLcy | float |   | X |
| billToPayToNumber | string |   | X |
| postingGroup | string |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| salespersPurchCode | string |   | X |
| sourceCode | string |   | X |
| systemCreatedEntry | bool |   | X |
| onHold | string |   | X |
| appliesToDocType | string |   | X |
| appliesToDocNumber | string |   | X |
| dueDate | date |   | X |
| pmtDiscountDate | date |   | X |
| paymentDiscountPercent | float |   | X |
| jobNumber | string |   | X |
| quantity | float |   | X |
| vatAmount | float |   | X |
| vatPosting | string |   | X |
| paymentTermsCode | string |   | X |
| appliesToId | string |   | X |
| businessUnitCode | string |   | X |
| reasonCode | string |   | X |
| recurringMethod | string |   | X |
| expirationDate | date |   | X |
| recurringFrequency | string |   | X |
| allocatedAmtLcy | float |   | X |
| genPostingType | string |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| eu3PartyTrade | bool |   | X |
| allowApplication | bool |   | X |
| balAccountType | string |   | X |
| balGenPostingType | string |   | X |
| balGenBusPostingGroup | string |   | X |
| balGenProdPostingGroup | string |   | X |
| balVatCalculationType | string |   | X |
| balVatPercent | float |   | X |
| balVatAmount | float |   | X |
| bankPaymentType | string |   | X |
| vatBaseAmount | float |   | X |
| balVatBaseAmount | float |   | X |
| correction | bool |   | X |
| checkPrinted | bool |   | X |
| documentDate | date |   | X |
| externalDocumentNumber | string |   | X |
| sourceType | string |   | X |
| sourceNumber | string |   | X |
| postingNumberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| useTax | bool |   | X |
| balTaxAreaCode | string |   | X |
| balTaxLiable | bool |   | X |
| balTaxGroupCode | string |   | X |
| balUseTax | bool |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| balVatBusPostingGroup | string |   | X |
| balVatProdPostingGroup | string |   | X |
| additionalCurrencyPosting | string |   | X |
| faAddCurrencyFactor | float |   | X |
| sourceCurrencyCode | string |   | X |
| sourceCurrencyAmount | float |   | X |
| sourceCurrVatBaseAmount | float |   | X |
| sourceCurrVatAmount | float |   | X |
| vatBaseDiscountPercent | float |   | X |
| vatAmountLcy | float |   | X |
| vatBaseAmountLcy | float |   | X |
| balVatAmountLcy | float |   | X |
| balVatBaseAmountLcy | float |   | X |
| reversingEntry | bool |   | X |
| allowZeroAmountPosting | bool |   | X |
| shipToOrderAddressCode | string |   | X |
| vatDifference | float |   | X |
| balVatDifference | float |   | X |
| icPartnerCode | string |   | X |
| icDirection | string |   | X |
| icPartnerGLAccNumber | string |   | X |
| icPartnerTransactionNumber | int |   | X |
| sellToBuyFromNumber | string |   | X |
| vatRegistrationNumber | string |   | X |
| countryRegionCode | string |   | X |
| prepayment | bool |   | X |
| financialVoid | bool |   | X |
| incomingDocumentEntryNumber | int |   | X |
| creditorNumber | string |   | X |
| paymentReference | string |   | X |
| paymentMethodCode | string |   | X |
| appliesToExtDocNumber | string |   | X |
| recipientBankAccount | string |   | X |
| messageToRecipient | string |   | X |
| exportedToPaymentFile | bool |   | X |
| hasPaymentExportError | bool |   | X |
| dimensionSetId | int |   | X |
| jobTaskNumber | string |   | X |
| jobUnitPriceLcy | float |   | X |
| jobTotalPriceLcy | float |   | X |
| jobQuantity | float |   | X |
| jobUnitCostLcy | float |   | X |
| jobLineDiscountPercent | float |   | X |
| jobLineDiscAmountLcy | float |   | X |
| jobUnitOfMeasureCode | string |   | X |
| jobLineType | string |   | X |
| jobUnitPrice | float |   | X |
| jobTotalPrice | float |   | X |
| jobUnitCost | float |   | X |
| jobTotalCost | float |   | X |
| jobLineDiscountAmount | float |   | X |
| jobLineAmount | float |   | X |
| jobTotalCostLcy | float |   | X |
| jobLineAmountLcy | float |   | X |
| jobCurrencyFactor | float |   | X |
| jobCurrencyCode | string |   | X |
| jobPlanningLineNumber | int |   | X |
| jobRemainingQty | float |   | X |
| directDebitMandateId | string |   | X |
| dataExchEntryNumber | int |   | X |
| payerInformation | string |   | X |
| transactionInformation | string |   | X |
| dataExchLineNumber | int |   | X |
| appliedAutomatically | bool |   | X |
| deferralCode | string |   | X |
| deferralLineNumber | int |   | X |
| campaignNumber | string |   | X |
| prodOrderNumber | string |   | X |
| faPostingDate | date |   | X |
| faPostingType | string |   | X |
| depreciationBookCode | string |   | X |
| salvageValue | float |   | X |
| numberOfDepreciationDays | int |   | X |
| deprUntilFaPostingDate | bool |   | X |
| deprAcquisitionCost | bool |   | X |
| maintenanceCode | string |   | X |
| insuranceNumber | string |   | X |
| budgetedFaNumber | string |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| faReclassificationEntry | bool |   | X |
| faErrorEntryNumber | int |   | X |
| indexEntry | bool |   | X |
| sourceLineNumber | int |   | X |
| comment | string |   | X |
| checkExported | bool |   | X |
| checkTransmitted | bool |   | X |
| id | guid | X | X |
| accountId | guid |   | X |
| customerId | guid |   | X |
| appliesToInvoiceId | guid |   | X |
| contactGraphId | string |   | X |
| lastModifiedDatetime | date |   | X |
| journalBatchId | guid |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowItems
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| number | string |   | X |
| number2 | string |   | X |
| description | string |   | X |
| searchDescription | string |   | X |
| description2 | string |   | X |
| assemblyBom | bool |   | X |
| baseUnitOfMeasure | string |   | X |
| priceUnitConversion | int |   | X |
| type | string |   | X |
| inventoryPostingGroup | string |   | X |
| shelfNumber | string |   | X |
| itemDiscGroup | string |   | X |
| allowInvoiceDisc | bool |   | X |
| statisticsGroup | int |   | X |
| commissionGroup | int |   | X |
| unitPrice | float |   | X |
| priceProfitCalculation | string |   | X |
| profitPercent | float |   | X |
| costingMethod | string |   | X |
| unitCost | float |   | X |
| standardCost | float |   | X |
| lastDirectCost | float |   | X |
| indirectCostPercent | float |   | X |
| costIsAdjusted | bool |   | X |
| allowOnlineAdjustment | bool |   | X |
| vendorNumber | string |   | X |
| vendorItemNumber | string |   | X |
| leadTimeCalculation | string |   | X |
| reorderPoint | float |   | X |
| maximumInventory | float |   | X |
| reorderQuantity | float |   | X |
| alternativeItemNumber | string |   | X |
| unitListPrice | float |   | X |
| dutyDuePercent | float |   | X |
| dutyCode | string |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| durability | string |   | X |
| freightType | string |   | X |
| tariffNumber | string |   | X |
| dutyUnitConversion | float |   | X |
| countryRegionPurchasedCode | string |   | X |
| budgetQuantity | float |   | X |
| budgetedAmount | float |   | X |
| budgetProfit | float |   | X |
| comment | bool |   | X |
| blocked | bool |   | X |
| costIsPostedToGL | bool |   | X |
| blockReason | string |   | X |
| lastDatetimeModified | date |   | X |
| lastDateModified | date |   | X |
| lastTimeModified | string |   | X |
| dateFilter | string |   | X |
| globalDimension1Filter | string |   | X |
| globalDimension2Filter | string |   | X |
| locationFilter | string |   | X |
| inventory | float |   | X |
| netInvoicedQty | float |   | X |
| netChange | float |   | X |
| purchasesQty | float |   | X |
| salesQty | float |   | X |
| positiveAdjmtQty | float |   | X |
| negativeAdjmtQty | float |   | X |
| purchasesLcy | float |   | X |
| salesLcy | float |   | X |
| positiveAdjmtLcy | float |   | X |
| negativeAdjmtLcy | float |   | X |
| cogsLcy | float |   | X |
| qtyOnPurchOrder | float |   | X |
| qtyOnSalesOrder | float |   | X |
| priceIncludesVat | bool |   | X |
| dropShipmentFilter | string |   | X |
| vatBusPostingGrPrice | string |   | X |
| genProdPostingGroup | string |   | X |
| transferredQty | float |   | X |
| transferredLcy | float |   | X |
| countryRegionOfOriginCode | string |   | X |
| automaticExtTexts | bool |   | X |
| numberSeries | string |   | X |
| taxGroupCode | string |   | X |
| vatProdPostingGroup | string |   | X |
| reserve | string |   | X |
| reservedQtyOnInventory | float |   | X |
| reservedQtyOnPurchOrders | float |   | X |
| reservedQtyOnSalesOrders | float |   | X |
| globalDimension1Code | string |   | X |
| globalDimension2Code | string |   | X |
| resQtyOnOutboundTransfer | float |   | X |
| resQtyOnInboundTransfer | float |   | X |
| resQtyOnSalesReturns | float |   | X |
| resQtyOnPurchReturns | float |   | X |
| stockoutWarning | string |   | X |
| preventNegativeInventory | string |   | X |
| costOfOpenProductionOrders | float |   | X |
| applicationWkshUserId | string |   | X |
| assemblyPolicy | string |   | X |
| resQtyOnAssemblyOrder | float |   | X |
| resQtyOnAsmComp | float |   | X |
| qtyOnAssemblyOrder | float |   | X |
| qtyOnAsmComponent | float |   | X |
| qtyOnJobOrder | float |   | X |
| resQtyOnJobOrder | float |   | X |
| gtin | string |   | X |
| defaultDeferralTemplateCode | string |   | X |
| lowLevelCode | int |   | X |
| lotSize | float |   | X |
| serialNos | string |   | X |
| lastUnitCostCalcDate | date |   | X |
| rolledUpMaterialCost | float |   | X |
| rolledUpCapacityCost | float |   | X |
| scrapPercent | float |   | X |
| inventoryValueZero | bool |   | X |
| discreteOrderQuantity | int |   | X |
| minimumOrderQuantity | float |   | X |
| maximumOrderQuantity | float |   | X |
| safetyStockQuantity | float |   | X |
| orderMultiple | float |   | X |
| safetyLeadTime | string |   | X |
| flushingMethod | string |   | X |
| replenishmentSystem | string |   | X |
| scheduledReceiptQty | float |   | X |
| scheduledNeedQty | float |   | X |
| roundingPrecision | float |   | X |
| binFilter | string |   | X |
| variantFilter | string |   | X |
| salesUnitOfMeasure | string |   | X |
| purchUnitOfMeasure | string |   | X |
| timeBucket | string |   | X |
| reservedQtyOnProdOrder | float |   | X |
| resQtyOnProdOrderComp | float |   | X |
| resQtyOnReqLine | float |   | X |
| reorderingPolicy | string |   | X |
| includeInventory | bool |   | X |
| manufacturingPolicy | string |   | X |
| reschedulingPeriod | string |   | X |
| lotAccumulationPeriod | string |   | X |
| dampenerPeriod | string |   | X |
| dampenerQuantity | float |   | X |
| overflowLevel | float |   | X |
| planningTransferShipQty | float |   | X |
| planningWorksheetQty | float |   | X |
| stockkeepingUnitExists | bool |   | X |
| manufacturerCode | string |   | X |
| itemCategoryCode | string |   | X |
| createdFromNonstockItem | bool |   | X |
| substitutesExist | bool |   | X |
| qtyInTransit | float |   | X |
| transOrdReceiptQty | float |   | X |
| transOrdShipmentQty | float |   | X |
| qtyAssignedToShip | float |   | X |
| qtyPicked | float |   | X |
| serviceItemGroup | string |   | X |
| qtyOnServiceOrder | float |   | X |
| resQtyOnServiceOrders | float |   | X |
| itemTrackingCode | string |   | X |
| lotNos | string |   | X |
| expirationCalculation | string |   | X |
| lotNumberFilter | string |   | X |
| serialNumberFilter | string |   | X |
| qtyOnPurchReturn | float |   | X |
| qtyOnSalesReturn | float |   | X |
| numberOfSubstitutes | int |   | X |
| warehouseClassCode | string |   | X |
| specialEquipmentCode | string |   | X |
| putAwayTemplateCode | string |   | X |
| putAwayUnitOfMeasureCode | string |   | X |
| physInvtCountingPeriodCode | string |   | X |
| lastCountingPeriodUpdate | date |   | X |
| lastPhysInvtDate | date |   | X |
| useCrossDocking | bool |   | X |
| nextCountingStartDate | date |   | X |
| nextCountingEndDate | date |   | X |
| identifierCode | string |   | X |
| unitOfMeasureId | guid |   | X |
| taxGroupId | guid |   | X |
| routingNumber | string |   | X |
| productionBomNumber | string |   | X |
| singleLevelMaterialCost | float |   | X |
| singleLevelCapacityCost | float |   | X |
| singleLevelSubcontrdCost | float |   | X |
| singleLevelCapOvhdCost | float |   | X |
| singleLevelMfgOvhdCost | float |   | X |
| overheadRate | float |   | X |
| rolledUpSubcontractedCost | float |   | X |
| rolledUpMfgOvhdCost | float |   | X |
| rolledUpCapOverheadCost | float |   | X |
| planningIssuesQty | float |   | X |
| planningReceiptQty | float |   | X |
| plannedOrderReceiptQty | float |   | X |
| fpOrderReceiptQty | float |   | X |
| relOrderReceiptQty | float |   | X |
| planningReleaseQty | float |   | X |
| plannedOrderReleaseQty | float |   | X |
| purchReqReceiptQty | float |   | X |
| purchReqReleaseQty | float |   | X |
| orderTrackingPolicy | string |   | X |
| prodForecastQuantityBase | float |   | X |
| productionForecastName | string |   | X |
| componentForecast | string |   | X |
| qtyOnProdOrder | float |   | X |
| qtyOnComponentLines | float |   | X |
| critical | bool |   | X |
| commonItemNumber | string |   | X |
| unitOfMeasureFilter | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| pictures | [Media[]](#media) | Yes |
# WorkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| buyFromVendorNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| expectedReceiptDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToReceive | float |   | X |
| directUnitCost | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| unitPriceLcy | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| jobNumber | string |   | X |
| indirectCostPercent | float |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyRcdNotInvoiced | float |   | X |
| amtRcdNotInvoiced | float |   | X |
| quantityReceived | float |   | X |
| quantityInvoiced | float |   | X |
| receiptNumber | string |   | X |
| receiptLineNumber | int |   | X |
| profitPercent | float |   | X |
| payToVendorNumber | string |   | X |
| invDiscountAmount | float |   | X |
| vendorItemNumber | string |   | X |
| salesOrderNumber | string |   | X |
| salesOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| entryPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| useTax | bool |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| reservedQuantity | float |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| outstandingAmtExVatLcy | float |   | X |
| aRcdNotInvExVatLcy | float |   | X |
| dimensionSetId | int |   | X |
| jobTaskNumber | string |   | X |
| jobLineType | string |   | X |
| jobUnitPrice | float |   | X |
| jobTotalPrice | float |   | X |
| jobLineAmount | float |   | X |
| jobLineDiscountAmount | float |   | X |
| jobLineDiscountPercent | float |   | X |
| jobUnitPriceLcy | float |   | X |
| jobTotalPriceLcy | float |   | X |
| jobLineAmountLcy | float |   | X |
| jobLineDiscAmountLcy | float |   | X |
| jobCurrencyFactor | float |   | X |
| jobCurrencyCode | string |   | X |
| jobPlanningLineNumber | int |   | X |
| jobRemainingQty | float |   | X |
| jobRemainingQtyBase | float |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| prodOrderNumber | string |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToReceiveBase | float |   | X |
| qtyRcdNotInvoicedBase | float |   | X |
| qtyReceivedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| faPostingType | string |   | X |
| depreciationBookCode | string |   | X |
| salvageValue | float |   | X |
| deprUntilFaPostingDate | bool |   | X |
| deprAcquisitionCost | bool |   | X |
| maintenanceCode | string |   | X |
| insuranceNumber | string |   | X |
| budgetedFaNumber | string |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderSalesNumber | string |   | X |
| specialOrderSalesLineNumber | int |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyReceived | bool |   | X |
| requestedReceiptDate | date |   | X |
| promisedReceiptDate | date |   | X |
| leadTimeCalculation | string |   | X |
| inboundWhseHandlingTime | string |   | X |
| plannedReceiptDate | date |   | X |
| orderDate | date |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToShip | float |   | X |
| returnQtyToShipBase | float |   | X |
| returnQtyShippedNotInvd | float |   | X |
| retQtyShpdNotInvdBase | float |   | X |
| returnShpdNotInvd | float |   | X |
| returnShpdNotInvdLcy | float |   | X |
| returnQtyShipped | float |   | X |
| returnQtyShippedBase | float |   | X |
| returnShipmentNumber | string |   | X |
| returnShipmentLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| subtype | string |   | X |
| routingNumber | string |   | X |
| operationNumber | string |   | X |
| workCenterNumber | string |   | X |
| finished | bool |   | X |
| prodOrderLineNumber | int |   | X |
| overheadRate | float |   | X |
| mpsOrder | bool |   | X |
| planningFlexibility | string |   | X |
| safetyLeadTime | string |   | X |
| routingReferenceNumber | int |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowPurchaseDocuments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| documentType | string |   | X |
| buyFromVendorNumber | string |   | X |
| number | string |   | X |
| payToVendorNumber | string |   | X |
| payToName | string |   | X |
| payToName2 | string |   | X |
| payToAddress | string |   | X |
| payToAddress2 | string |   | X |
| payToCity | string |   | X |
| payToContact | string |   | X |
| yourReference | string |   | X |
| shipToCode | string |   | X |
| shipToName | string |   | X |
| shipToName2 | string |   | X |
| shipToAddress | string |   | X |
| shipToAddress2 | string |   | X |
| shipToCity | string |   | X |
| shipToContact | string |   | X |
| orderDate | date |   | X |
| postingDate | date |   | X |
| expectedReceiptDate | date |   | X |
| postingDescription | string |   | X |
| paymentTermsCode | string |   | X |
| dueDate | date |   | X |
| paymentDiscountPercent | float |   | X |
| pmtDiscountDate | date |   | X |
| shipmentMethodCode | string |   | X |
| locationCode | string |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| vendorPostingGroup | string |   | X |
| currencyCode | string |   | X |
| currencyFactor | float |   | X |
| pricesIncludingVat | bool |   | X |
| invoiceDiscCode | string |   | X |
| languageCode | string |   | X |
| purchaserCode | string |   | X |
| orderClass | string |   | X |
| comment | bool |   | X |
| numberPrinted | int |   | X |
| onHold | string |   | X |
| appliesToDocType | string |   | X |
| appliesToDocNumber | string |   | X |
| balAccountNumber | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| receive | bool |   | X |
| invoice | bool |   | X |
| printPostedDocuments | bool |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| receivingNumber | string |   | X |
| postingNumber | string |   | X |
| lastReceivingNumber | string |   | X |
| lastPostingNumber | string |   | X |
| vendorOrderNumber | string |   | X |
| vendorShipmentNumber | string |   | X |
| vendorInvoiceNumber | string |   | X |
| vendorCrMemoNumber | string |   | X |
| vatRegistrationNumber | string |   | X |
| sellToCustomerNumber | string |   | X |
| reasonCode | string |   | X |
| genBusPostingGroup | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| vatCountryRegionCode | string |   | X |
| buyFromVendorName | string |   | X |
| buyFromVendorName2 | string |   | X |
| buyFromAddress | string |   | X |
| buyFromAddress2 | string |   | X |
| buyFromCity | string |   | X |
| buyFromContact | string |   | X |
| payToPostCode | string |   | X |
| payToCounty | string |   | X |
| payToCountryRegionCode | string |   | X |
| buyFromPostCode | string |   | X |
| buyFromCounty | string |   | X |
| buyFromCountryRegionCode | string |   | X |
| shipToPostCode | string |   | X |
| shipToCounty | string |   | X |
| shipToCountryRegionCode | string |   | X |
| balAccountType | string |   | X |
| orderAddressCode | string |   | X |
| entryPoint | string |   | X |
| correction | bool |   | X |
| documentDate | date |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| paymentMethodCode | string |   | X |
| numberSeries | string |   | X |
| postingNumberSeries | string |   | X |
| receivingNumberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| vatBusPostingGroup | string |   | X |
| appliesToId | string |   | X |
| vatBaseDiscountPercent | float |   | X |
| status | string |   | X |
| invoiceDiscountCalculation | string |   | X |
| invoiceDiscountValue | float |   | X |
| sendIcDocument | bool |   | X |
| icStatus | string |   | X |
| buyFromIcPartnerCode | string |   | X |
| payToIcPartnerCode | string |   | X |
| icDirection | string |   | X |
| prepaymentNumber | string |   | X |
| lastPrepaymentNumber | string |   | X |
| prepmtCrMemoNumber | string |   | X |
| lastPrepmtCrMemoNumber | string |   | X |
| prepaymentPercent | float |   | X |
| prepaymentNumberSeries | string |   | X |
| compressPrepayment | bool |   | X |
| prepaymentDueDate | date |   | X |
| prepmtCrMemoNumberSeries | string |   | X |
| prepmtPostingDescription | string |   | X |
| prepmtPmtDiscountDate | date |   | X |
| prepmtPaymentTermsCode | string |   | X |
| prepmtPaymentDiscountPercent | float |   | X |
| quoteNumber | string |   | X |
| jobQueueStatus | string |   | X |
| jobQueueEntryId | guid |   | X |
| incomingDocumentEntryNumber | int |   | X |
| creditorNumber | string |   | X |
| paymentReference | string |   | X |
| aRcdNotInvExVatLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| dimensionSetId | int |   | X |
| invoiceDiscountAmount | float |   | X |
| numberOfArchivedVersions | int |   | X |
| docNumberOccurrence | int |   | X |
| campaignNumber | string |   | X |
| buyFromContactNumber | string |   | X |
| payToContactNumber | string |   | X |
| responsibilityCenter | string |   | X |
| completelyReceived | bool |   | X |
| postingFromWhseRef | int |   | X |
| locationFilter | string |   | X |
| requestedReceiptDate | date |   | X |
| promisedReceiptDate | date |   | X |
| leadTimeCalculation | string |   | X |
| inboundWhseHandlingTime | string |   | X |
| vendorAuthorizationNumber | string |   | X |
| returnShipmentNumber | string |   | X |
| returnShipmentNumberSeries | string |   | X |
| ship | bool |   | X |
| lastReturnShipmentNumber | string |   | X |
| assignedUserId | string |   | X |
| pendingApprovals | int |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowPurchaseDocumentsworkflowPurchaseDocumentLines | [WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]](#workflowpurchasedocumentsworkflowpurchasedocumentlines) | Yes |
# WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| buyFromVendorNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| expectedReceiptDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToReceive | float |   | X |
| directUnitCost | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| unitPriceLcy | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| jobNumber | string |   | X |
| indirectCostPercent | float |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyRcdNotInvoiced | float |   | X |
| amtRcdNotInvoiced | float |   | X |
| quantityReceived | float |   | X |
| quantityInvoiced | float |   | X |
| receiptNumber | string |   | X |
| receiptLineNumber | int |   | X |
| profitPercent | float |   | X |
| payToVendorNumber | string |   | X |
| invDiscountAmount | float |   | X |
| vendorItemNumber | string |   | X |
| salesOrderNumber | string |   | X |
| salesOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| entryPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| useTax | bool |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| reservedQuantity | float |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| outstandingAmtExVatLcy | float |   | X |
| aRcdNotInvExVatLcy | float |   | X |
| dimensionSetId | int |   | X |
| jobTaskNumber | string |   | X |
| jobLineType | string |   | X |
| jobUnitPrice | float |   | X |
| jobTotalPrice | float |   | X |
| jobLineAmount | float |   | X |
| jobLineDiscountAmount | float |   | X |
| jobLineDiscountPercent | float |   | X |
| jobUnitPriceLcy | float |   | X |
| jobTotalPriceLcy | float |   | X |
| jobLineAmountLcy | float |   | X |
| jobLineDiscAmountLcy | float |   | X |
| jobCurrencyFactor | float |   | X |
| jobCurrencyCode | string |   | X |
| jobPlanningLineNumber | int |   | X |
| jobRemainingQty | float |   | X |
| jobRemainingQtyBase | float |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| prodOrderNumber | string |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToReceiveBase | float |   | X |
| qtyRcdNotInvoicedBase | float |   | X |
| qtyReceivedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| faPostingType | string |   | X |
| depreciationBookCode | string |   | X |
| salvageValue | float |   | X |
| deprUntilFaPostingDate | bool |   | X |
| deprAcquisitionCost | bool |   | X |
| maintenanceCode | string |   | X |
| insuranceNumber | string |   | X |
| budgetedFaNumber | string |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderSalesNumber | string |   | X |
| specialOrderSalesLineNumber | int |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyReceived | bool |   | X |
| requestedReceiptDate | date |   | X |
| promisedReceiptDate | date |   | X |
| leadTimeCalculation | string |   | X |
| inboundWhseHandlingTime | string |   | X |
| plannedReceiptDate | date |   | X |
| orderDate | date |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToShip | float |   | X |
| returnQtyToShipBase | float |   | X |
| returnQtyShippedNotInvd | float |   | X |
| retQtyShpdNotInvdBase | float |   | X |
| returnShpdNotInvd | float |   | X |
| returnShpdNotInvdLcy | float |   | X |
| returnQtyShipped | float |   | X |
| returnQtyShippedBase | float |   | X |
| returnShipmentNumber | string |   | X |
| returnShipmentLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| subtype | string |   | X |
| routingNumber | string |   | X |
| operationNumber | string |   | X |
| workCenterNumber | string |   | X |
| finished | bool |   | X |
| prodOrderLineNumber | int |   | X |
| overheadRate | float |   | X |
| mpsOrder | bool |   | X |
| planningFlexibility | string |   | X |
| safetyLeadTime | string |   | X |
| routingReferenceNumber | int |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| sellToCustomerNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| shipmentDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToShip | float |   | X |
| unitPrice | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| customerPriceGroup | string |   | X |
| jobNumber | string |   | X |
| workTypeCode | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyShippedNotInvoiced | float |   | X |
| shippedNotInvoiced | float |   | X |
| quantityShipped | float |   | X |
| quantityInvoiced | float |   | X |
| shipmentNumber | string |   | X |
| shipmentLineNumber | int |   | X |
| profitPercent | float |   | X |
| billToCustomerNumber | string |   | X |
| invDiscountAmount | float |   | X |
| purchaseOrderNumber | string |   | X |
| purchOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| exitPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxCategory | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| vatClauseCode | string |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| shippedNotInvoicedLcy | float |   | X |
| shippedNotInvLcyNoVat | float |   | X |
| reservedQuantity | float |   | X |
| reserve | string |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| dimensionSetId | int |   | X |
| qtyToAssembleToOrder | float |   | X |
| qtyToAsmToOrderBase | float |   | X |
| atoWhseOutstandingQty | float |   | X |
| atoWhseOutstdQtyBase | float |   | X |
| jobTaskNumber | string |   | X |
| jobContractEntryNumber | int |   | X |
| postingDate | date |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| planned | bool |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToShipBase | float |   | X |
| qtyShippedNotInvdBase | float |   | X |
| qtyShippedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| depreciationBookCode | string |   | X |
| deprUntilFaPostingDate | bool |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| outOfStockSubstitution | bool |   | X |
| substitutionAvailable | bool |   | X |
| originallyOrderedNumber | string |   | X |
| originallyOrderedVarCode | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderPurchaseNumber | string |   | X |
| specialOrderPurchLineNumber | int |   | X |
| whseOutstandingQty | float |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyShipped | bool |   | X |
| requestedDeliveryDate | date |   | X |
| promisedDeliveryDate | date |   | X |
| shippingTime | string |   | X |
| outboundWhseHandlingTime | string |   | X |
| plannedDeliveryDate | date |   | X |
| plannedShipmentDate | date |   | X |
| shippingAgentCode | string |   | X |
| shippingAgentServiceCode | string |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToReceive | float |   | X |
| returnQtyToReceiveBase | float |   | X |
| returnQtyRcdNotInvd | float |   | X |
| retQtyRcdNotInvdBase | float |   | X |
| returnRcdNotInvd | float |   | X |
| returnRcdNotInvdLcy | float |   | X |
| returnQtyReceived | float |   | X |
| returnQtyReceivedBase | float |   | X |
| applFromItemEntry | int |   | X |
| bomItemNumber | string |   | X |
| returnReceiptNumber | string |   | X |
| returnReceiptLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| allowLineDisc | bool |   | X |
| customerDiscGroup | string |   | X |
| subtype | string |   | X |
| priceDescription | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocuments
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| documentType | string |   | X |
| sellToCustomerNumber | string |   | X |
| number | string |   | X |
| billToCustomerNumber | string |   | X |
| billToName | string |   | X |
| billToName2 | string |   | X |
| billToAddress | string |   | X |
| billToAddress2 | string |   | X |
| billToCity | string |   | X |
| billToContact | string |   | X |
| yourReference | string |   | X |
| shipToCode | string |   | X |
| shipToName | string |   | X |
| shipToName2 | string |   | X |
| shipToAddress | string |   | X |
| shipToAddress2 | string |   | X |
| shipToCity | string |   | X |
| shipToContact | string |   | X |
| orderDate | date |   | X |
| postingDate | date |   | X |
| shipmentDate | date |   | X |
| postingDescription | string |   | X |
| paymentTermsCode | string |   | X |
| dueDate | date |   | X |
| paymentDiscountPercent | float |   | X |
| pmtDiscountDate | date |   | X |
| shipmentMethodCode | string |   | X |
| locationCode | string |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| customerPostingGroup | string |   | X |
| currencyCode | string |   | X |
| currencyFactor | float |   | X |
| customerPriceGroup | string |   | X |
| pricesIncludingVat | bool |   | X |
| invoiceDiscCode | string |   | X |
| customerDiscGroup | string |   | X |
| languageCode | string |   | X |
| salespersonCode | string |   | X |
| orderClass | string |   | X |
| comment | bool |   | X |
| numberPrinted | int |   | X |
| onHold | string |   | X |
| appliesToDocType | string |   | X |
| appliesToDocNumber | string |   | X |
| balAccountNumber | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| ship | bool |   | X |
| invoice | bool |   | X |
| printPostedDocuments | bool |   | X |
| amount | float |   | X |
| amountIncludingVAT | float |   | X |
| shippingNumber | string |   | X |
| postingNumber | string |   | X |
| lastShippingNumber | string |   | X |
| lastPostingNumber | string |   | X |
| prepaymentNumber | string |   | X |
| lastPrepaymentNumber | string |   | X |
| premptCrMemoNumber | string |   | X |
| lastPremtCrMemoNumber | string |   | X |
| vatRegistrationNumber | string |   | X |
| combineShipments | bool |   | X |
| reasonCode | string |   | X |
| genBusPostingGroup | string |   | X |
| eu3PartyTrade | bool |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| vatCountryRegionCode | string |   | X |
| sellToCustomerName | string |   | X |
| sellToCustomerName2 | string |   | X |
| sellToAddress | string |   | X |
| sellToAddress2 | string |   | X |
| sellToCity | string |   | X |
| sellToContact | string |   | X |
| billToPostCode | string |   | X |
| billToCounty | string |   | X |
| billToCountryRegionCode | string |   | X |
| sellToPostCode | string |   | X |
| sellToCounty | string |   | X |
| sellToCountryRegionCode | string |   | X |
| shipToPostCode | string |   | X |
| shipToCounty | string |   | X |
| shipToCountryRegionCode | string |   | X |
| balAccountType | string |   | X |
| exitPoint | string |   | X |
| correction | bool |   | X |
| documentDate | date |   | X |
| externalDocumentNumber | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| paymentMethodCode | string |   | X |
| shippingAgentCode | string |   | X |
| packageTrackingNumber | string |   | X |
| numberSeries | string |   | X |
| postingNumberSeries | string |   | X |
| shippingNumberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| vatBusPostingGroup | string |   | X |
| reserve | string |   | X |
| appliesToId | string |   | X |
| vatBaseDiscountPercent | float |   | X |
| status | string |   | X |
| invoiceDiscountCalculation | string |   | X |
| invoiceDiscountValue | float |   | X |
| sendIcDocument | bool |   | X |
| icStatus | string |   | X |
| sellToIcPartnerCode | string |   | X |
| billToIcPartnerCode | string |   | X |
| icDirection | string |   | X |
| prepaymentPercent | float |   | X |
| prepaymentNumberSeries | string |   | X |
| compressPrepayment | bool |   | X |
| prepaymentDueDate | date |   | X |
| prepmtCrMemoNumberSeries | string |   | X |
| prepmtPostingDescription | string |   | X |
| prepmtPmtDiscountDate | date |   | X |
| prepmtPaymentTermsCode | string |   | X |
| prepmtPaymentDiscountPercent | float |   | X |
| quoteNumber | string |   | X |
| quoteValidUntilDate | date |   | X |
| quoteSentToCustomer | date |   | X |
| quoteAccepted | bool |   | X |
| quoteAcceptedDate | date |   | X |
| jobQueueStatus | string |   | X |
| jobQueueEntryId | guid |   | X |
| incomingDocumentEntryNumber | int |   | X |
| workDescription | string |   | X |
| amountShippedNotInvoicedInclVat | float |   | X |
| amountShippedNotInvoiced | float |   | X |
| dimensionSetId | int |   | X |
| paymentServiceSetId | int |   | X |
| directDebitMandateId | string |   | X |
| invoiceDiscountAmount | float |   | X |
| numberOfArchivedVersions | int |   | X |
| docNumberOccurrence | int |   | X |
| campaignNumber | string |   | X |
| sellToCustomerTemplateCode | string |   | X |
| sellToContactNumber | string |   | X |
| billToContactNumber | string |   | X |
| billToCustomerTemplateCode | string |   | X |
| opportunityNumber | string |   | X |
| responsibilityCenter | string |   | X |
| shippingAdvice | string |   | X |
| shippedNotInvoiced | bool |   | X |
| completelyShipped | bool |   | X |
| postingFromWhseRef | int |   | X |
| locationFilter | string |   | X |
| shipped | bool |   | X |
| requestedDeliveryDate | date |   | X |
| promisedDeliveryDate | date |   | X |
| shippingTime | string |   | X |
| outboundWhseHandlingTime | string |   | X |
| shippingAgentServiceCode | string |   | X |
| lateOrderShipping | bool |   | X |
| receive | bool |   | X |
| returnReceiptNumber | string |   | X |
| returnReceiptNumberSeries | string |   | X |
| lastReturnReceiptNumber | string |   | X |
| allowLineDisc | bool |   | X |
| getShipmentUsed | bool |   | X |
| assignedUserId | string |   | X |
| dateFilter | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowSalesDocumentsworkflowSalesDocumentLines | [WorkflowSalesDocumentsworkflowSalesDocumentLines[]](#workflowsalesdocumentsworkflowsalesdocumentlines) | Yes |
# WorkflowSalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| documentType | string |   | X |
| documentNumber | string |   | X |
| lineNumber | int |   | X |
| sellToCustomerNumber | string |   | X |
| type | string |   | X |
| number | string |   | X |
| locationCode | string |   | X |
| postingGroup | string |   | X |
| shipmentDate | date |   | X |
| description | string |   | X |
| description2 | string |   | X |
| unitOfMeasure | string |   | X |
| quantity | float |   | X |
| outstandingQuantity | float |   | X |
| qtyToInvoice | float |   | X |
| qtyToShip | float |   | X |
| unitPrice | float |   | X |
| unitCostLcy | float |   | X |
| vatPercent | float |   | X |
| lineDiscountPercent | float |   | X |
| lineDiscountAmount | float |   | X |
| amount | float |   | X |
| amountIncludingVat | float |   | X |
| allowInvoiceDisc | bool |   | X |
| grossWeight | float |   | X |
| netWeight | float |   | X |
| unitsPerParcel | float |   | X |
| unitVolume | float |   | X |
| applToItemEntry | int |   | X |
| shortcutDimension1Code | string |   | X |
| shortcutDimension2Code | string |   | X |
| customerPriceGroup | string |   | X |
| jobNumber | string |   | X |
| workTypeCode | string |   | X |
| recalculateInvoiceDisc | bool |   | X |
| outstandingAmount | float |   | X |
| qtyShippedNotInvoiced | float |   | X |
| shippedNotInvoiced | float |   | X |
| quantityShipped | float |   | X |
| quantityInvoiced | float |   | X |
| shipmentNumber | string |   | X |
| shipmentLineNumber | int |   | X |
| profitPercent | float |   | X |
| billToCustomerNumber | string |   | X |
| invDiscountAmount | float |   | X |
| purchaseOrderNumber | string |   | X |
| purchOrderLineNumber | int |   | X |
| dropShipment | bool |   | X |
| genBusPostingGroup | string |   | X |
| genProdPostingGroup | string |   | X |
| vatCalculationType | string |   | X |
| transactionType | string |   | X |
| transportMethod | string |   | X |
| attachedToLineNumber | int |   | X |
| exitPoint | string |   | X |
| area | string |   | X |
| transactionSpecification | string |   | X |
| taxCategory | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| taxGroupCode | string |   | X |
| vatClauseCode | string |   | X |
| vatBusPostingGroup | string |   | X |
| vatProdPostingGroup | string |   | X |
| currencyCode | string |   | X |
| outstandingAmountLcy | float |   | X |
| shippedNotInvoicedLcy | float |   | X |
| shippedNotInvLcyNoVat | float |   | X |
| reservedQuantity | float |   | X |
| reserve | string |   | X |
| blanketOrderNumber | string |   | X |
| blanketOrderLineNumber | int |   | X |
| vatBaseAmount | float |   | X |
| unitCost | float |   | X |
| systemCreatedEntry | bool |   | X |
| lineAmount | float |   | X |
| vatDifference | float |   | X |
| invDiscAmountToInvoice | float |   | X |
| vatIdentifier | string |   | X |
| icPartnerRefType | string |   | X |
| icPartnerReference | string |   | X |
| prepaymentPercent | float |   | X |
| prepmtLineAmount | float |   | X |
| prepmtAmtInv | float |   | X |
| prepmtAmtInclVat | float |   | X |
| prepaymentAmount | float |   | X |
| prepmtVatBaseAmt | float |   | X |
| prepaymentVatPercent | float |   | X |
| prepmtVatCalcType | string |   | X |
| prepaymentVatIdentifier | string |   | X |
| prepaymentTaxAreaCode | string |   | X |
| prepaymentTaxLiable | bool |   | X |
| prepaymentTaxGroupCode | string |   | X |
| prepmtAmtToDeduct | float |   | X |
| prepmtAmtDeducted | float |   | X |
| prepaymentLine | bool |   | X |
| prepmtAmountInvInclVat | float |   | X |
| prepmtAmountInvLcy | float |   | X |
| icPartnerCode | string |   | X |
| prepmtVatAmountInvLcy | float |   | X |
| prepaymentVatDifference | float |   | X |
| prepmtVatDiffToDeduct | float |   | X |
| prepmtVatDiffDeducted | float |   | X |
| dimensionSetId | int |   | X |
| qtyToAssembleToOrder | float |   | X |
| qtyToAsmToOrderBase | float |   | X |
| atoWhseOutstandingQty | float |   | X |
| atoWhseOutstdQtyBase | float |   | X |
| jobTaskNumber | string |   | X |
| jobContractEntryNumber | int |   | X |
| postingDate | date |   | X |
| deferralCode | string |   | X |
| returnsDeferralStartDate | date |   | X |
| variantCode | string |   | X |
| binCode | string |   | X |
| qtyPerUnitOfMeasure | float |   | X |
| planned | bool |   | X |
| unitOfMeasureCode | string |   | X |
| quantityBase | float |   | X |
| outstandingQtyBase | float |   | X |
| qtyToInvoiceBase | float |   | X |
| qtyToShipBase | float |   | X |
| qtyShippedNotInvdBase | float |   | X |
| qtyShippedBase | float |   | X |
| qtyInvoicedBase | float |   | X |
| reservedQtyBase | float |   | X |
| faPostingDate | date |   | X |
| depreciationBookCode | string |   | X |
| deprUntilFaPostingDate | bool |   | X |
| duplicateInDepreciationBook | string |   | X |
| useDuplicationList | bool |   | X |
| responsibilityCenter | string |   | X |
| outOfStockSubstitution | bool |   | X |
| substitutionAvailable | bool |   | X |
| originallyOrderedNumber | string |   | X |
| originallyOrderedVarCode | string |   | X |
| crossReferenceNumber | string |   | X |
| unitOfMeasureCrossRef | string |   | X |
| crossReferenceType | string |   | X |
| crossReferenceTypeNumber | string |   | X |
| itemCategoryCode | string |   | X |
| nonstock | bool |   | X |
| purchasingCode | string |   | X |
| specialOrder | bool |   | X |
| specialOrderPurchaseNumber | string |   | X |
| specialOrderPurchLineNumber | int |   | X |
| whseOutstandingQty | float |   | X |
| whseOutstandingQtyBase | float |   | X |
| completelyShipped | bool |   | X |
| requestedDeliveryDate | date |   | X |
| promisedDeliveryDate | date |   | X |
| shippingTime | string |   | X |
| outboundWhseHandlingTime | string |   | X |
| plannedDeliveryDate | date |   | X |
| plannedShipmentDate | date |   | X |
| shippingAgentCode | string |   | X |
| shippingAgentServiceCode | string |   | X |
| allowItemChargeAssignment | bool |   | X |
| qtyToAssign | float |   | X |
| qtyAssigned | float |   | X |
| returnQtyToReceive | float |   | X |
| returnQtyToReceiveBase | float |   | X |
| returnQtyRcdNotInvd | float |   | X |
| retQtyRcdNotInvdBase | float |   | X |
| returnRcdNotInvd | float |   | X |
| returnRcdNotInvdLcy | float |   | X |
| returnQtyReceived | float |   | X |
| returnQtyReceivedBase | float |   | X |
| applFromItemEntry | int |   | X |
| bomItemNumber | string |   | X |
| returnReceiptNumber | string |   | X |
| returnReceiptLineNumber | int |   | X |
| returnReasonCode | string |   | X |
| allowLineDisc | bool |   | X |
| customerDiscGroup | string |   | X |
| subtype | string |   | X |
| priceDescription | string |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowVendors
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| number | string |   | X |
| name | string |   | X |
| searchName | string |   | X |
| name2 | string |   | X |
| address | string |   | X |
| address2 | string |   | X |
| city | string |   | X |
| contact | string |   | X |
| phoneNumber | string |   | X |
| telexNumber | string |   | X |
| ourAccountNumber | string |   | X |
| territoryCode | string |   | X |
| globalDimension1Code | string |   | X |
| globalDimension2Code | string |   | X |
| budgetedAmount | float |   | X |
| vendorPostingGroup | string |   | X |
| currencyCode | string |   | X |
| languageCode | string |   | X |
| statisticsGroup | int |   | X |
| paymentTermsCode | string |   | X |
| finChargeTermsCode | string |   | X |
| purchaserCode | string |   | X |
| shipmentMethodCode | string |   | X |
| shippingAgentCode | string |   | X |
| invoiceDiscCode | string |   | X |
| countryRegionCode | string |   | X |
| comment | bool |   | X |
| blocked | string |   | X |
| payToVendorNumber | string |   | X |
| priority | int |   | X |
| paymentMethodCode | string |   | X |
| lastModifiedDateTime | date | X | X |
| lastDateModified | date |   | X |
| dateFilter | string |   | X |
| globalDimension1Filter | string |   | X |
| globalDimension2Filter | string |   | X |
| balance | float |   | X |
| balanceLcy | float |   | X |
| netChange | float |   | X |
| netChangeLcy | float |   | X |
| purchasesLcy | float |   | X |
| invDiscountsLcy | float |   | X |
| pmtDiscountsLcy | float |   | X |
| balanceDue | float |   | X |
| balanceDueLcy | float |   | X |
| payments | float |   | X |
| invoiceAmounts | float |   | X |
| crMemoAmounts | float |   | X |
| financeChargeMemoAmounts | float |   | X |
| paymentsLcy | float |   | X |
| invAmountsLcy | float |   | X |
| crMemoAmountsLcy | float |   | X |
| finChargeMemoAmountsLcy | float |   | X |
| outstandingOrders | float |   | X |
| amtRcdNotInvoiced | float |   | X |
| applicationMethod | string |   | X |
| pricesIncludingVat | bool |   | X |
| faxNumber | string |   | X |
| telexAnswerBack | string |   | X |
| vatRegistrationNumber | string |   | X |
| genBusPostingGroup | string |   | X |
| gln | string |   | X |
| postCode | string |   | X |
| county | string |   | X |
| debitAmount | float |   | X |
| creditAmount | float |   | X |
| debitAmountLcy | float |   | X |
| creditAmountLcy | float |   | X |
| eMail | string |   | X |
| homePage | string |   | X |
| reminderAmounts | float |   | X |
| reminderAmountsLcy | float |   | X |
| numberSeries | string |   | X |
| taxAreaCode | string |   | X |
| taxLiable | bool |   | X |
| vatBusPostingGroup | string |   | X |
| currencyFilter | string |   | X |
| outstandingOrdersLcy | float |   | X |
| amtRcdNotInvoicedLcy | float |   | X |
| blockPaymentTolerance | bool |   | X |
| pmtDiscToleranceLcy | float |   | X |
| pmtToleranceLcy | float |   | X |
| icPartnerCode | string |   | X |
| refunds | float |   | X |
| refundsLcy | float |   | X |
| otherAmounts | float |   | X |
| otherAmountsLcy | float |   | X |
| prepaymentPercent | float |   | X |
| outstandingInvoices | float |   | X |
| outstandingInvoicesLcy | float |   | X |
| payToNumberOfArchivedDoc | int |   | X |
| buyFromNumberOfArchivedDoc | int |   | X |
| partnerType | string |   | X |
| creditorNumber | string |   | X |
| preferredBankAccountCode | string |   | X |
| cashFlowPaymentTermsCode | string |   | X |
| primaryContactNumber | string |   | X |
| responsibilityCenter | string |   | X |
| locationCode | string |   | X |
| leadTimeCalculation | string |   | X |
| numberOfPstdReceipts | int |   | X |
| numberOfPstdInvoices | int |   | X |
| numberOfPstdReturnShipments | int |   | X |
| numberOfPstdCreditMemos | int |   | X |
| payToNumberOfOrders | int |   | X |
| payToNumberOfInvoices | int |   | X |
| payToNumberOfReturnOrders | int |   | X |
| payToNumberOfCreditMemos | int |   | X |
| payToNumberOfPstdReceipts | int |   | X |
| payToNumberOfPstdInvoices | int |   | X |
| payToNumberOfPstdReturnS | int |   | X |
| payToNumberOfPstdCrMemos | int |   | X |
| numberOfQuotes | int |   | X |
| numberOfBlanketOrders | int |   | X |
| numberOfOrders | int |   | X |
| numberOfInvoices | int |   | X |
| numberOfReturnOrders | int |   | X |
| numberOfCreditMemos | int |   | X |
| numberOfOrderAddresses | int |   | X |
| payToNumberOfQuotes | int |   | X |
| payToNumberOfBlanketOrders | int |   | X |
| numberOfIncomingDocuments | int |   | X |
| baseCalendarCode | string |   | X |
| documentSendingProfile | string |   | X |
| validateEuVatRegNumber | bool |   | X |
| currencyId | guid |   | X |
| paymentTermsId | guid |   | X |
| paymentMethodId | guid |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowWebhookSubscriptions
## Properties
| Name | Type | Read Only | Required |
| --- | --- | :-: | :-: |
| id | guid | X | X |
| notificationUrl | string |   | X |
| conditions | string |   | X |
| eventCode | string |   | X |
| clientType | string |   | X |
| clientId | guid |   | X |
| enabled | bool |   | X |

