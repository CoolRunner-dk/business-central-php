# AccountantPortalActivityCues
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| overduePurchInvoiceAmount | string |   |   |   |
| overduePurchInvoiceStyle | string |   |   |   |
| overdueSalesInvoiceAmount | string |   |   |   |
| overdueSalesInvoiceStyle | string |   |   |   |
| nonAppliedPaymentsAmount | string |   |   |   |
| nonAppliedPaymentsStyle | string |   |   |   |
| purchInvoicesDueNextWeekAmount | string |   |   |   |
| purchInvoicesDueNextWeekStyle | string |   |   |   |
| salesInvoicesDueNextWeekAmount | string |   |   |   |
| salesInvoicesDueNextWeekStyle | string |   |   |   |
| ongoingPurchaseInvoicesAmount | string |   |   |   |
| ongoingPurchaseInvoicesStyle | string |   |   |   |
| ongoingSalesInvoicesAmount | string |   |   |   |
| ongoingSalesInvoicesStyle | string |   |   |   |
| salesThisMonthAmount | string |   |   |   |
| salesThisMonthStyle | string |   |   |   |
| top10CustomerSalesYTDAmount | string |   |   |   |
| top10CustomerSalesYTDStyle | string |   |   |   |
| averageCollectionDaysAmount | string |   |   |   |
| averageCollectionDaysStyle | string |   |   |   |
| ongoingSalesQuotesAmount | string |   |   |   |
| ongoingSalesQuotesStyle | string |   |   |   |
| ongoingSalesOrdersAmount | string |   |   |   |
| ongoingSalesOrdersStyle | string |   |   |   |
| requeststoApproveAmount | string |   |   |   |
| requeststoApproveStyle | string |   |   |   |
| purchaseOrdersAmount | string |   |   |   |
| purchaseOrdersStyle | string |   |   |   |
| salesInvPendDocExchangeAmount | string |   |   |   |
| salesInvPendDocExchangeStyle | string |   |   |   |
| salesCrMPendDocExchangeAmount | string |   |   |   |
| salesCrMPendDocExchangeStyle | string |   |   |   |
| myIncomingDocumentsAmount | string |   |   |   |
| myIncomingDocumentsStyle | string |   |   |   |
| incDocAwaitingVerifAmount | string |   |   |   |
| incDocAwaitingVerifStyle | string |   |   |   |
| contactNameAmount | string |   |   |   |
| contactNameStyle | string |   |   |   |

# AccountantPortalFinanceCues
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| overduePurchaseDocumentsAmount | string |   |   |   |
| overduePurchaseDocumentsStyle | string |   |   |   |
| purchaseDiscountsNextWeekAmount | string |   |   |   |
| purchaseDiscountsNextWeekStyle | string |   |   |   |
| overdueSalesDocumentsAmount | string |   |   |   |
| overdueSalesDocumentsStyle | string |   |   |   |
| purchaseDocumentsDueTodayAmount | string |   |   |   |
| purchaseDocumentsDueTodayStyle | string |   |   |   |
| vendorsPaymentsOnHoldAmount | string |   |   |   |
| vendorsPaymentsOnHoldStyle | string |   |   |   |
| pOsPendingApprovalAmount | string |   |   |   |
| pOsPendingApprovalStyle | string |   |   |   |
| sOsPendingApprovalAmount | string |   |   |   |
| sOsPendingApprovalStyle | string |   |   |   |
| approvedSalesOrdersAmount | string |   |   |   |
| approvedSalesOrdersStyle | string |   |   |   |
| approvedPurchaseOrdersAmount | string |   |   |   |
| approvedPurchaseOrdersStyle | string |   |   |   |
| purchaseReturnOrdersAmount | string |   |   |   |
| purchaseReturnOrdersStyle | string |   |   |   |
| salesReturnOrdersAllAmount | string |   |   |   |
| salesReturnOrdersAllStyle | string |   |   |   |
| customersBlockedAmount | string |   |   |   |
| customersBlockedStyle | string |   |   |   |
| newIncomingDocumentsAmount | string |   |   |   |
| newIncomingDocumentsStyle | string |   |   |   |
| approvedIncomingDocumentsAmount | string |   |   |   |
| approvedIncomingDocumentsStyle | string |   |   |   |
| oCRPendingAmount | string |   |   |   |
| oCRPendingStyle | string |   |   |   |
| oCRCompletedAmount | string |   |   |   |
| oCRCompletedStyle | string |   |   |   |
| requestsToApproveAmount | string |   |   |   |
| requestsToApproveStyle | string |   |   |   |
| requestsSentForApprovalAmount | string |   |   |   |
| requestsSentForApprovalStyle | string |   |   |   |
| cashAccountsBalanceAmount | string |   |   |   |
| cashAccountsBalanceStyle | string |   |   |   |
| lastDepreciatedPostedDateAmount | string |   |   |   |
| lastDepreciatedPostedDateStyle | string |   |   |   |
| lastLoginDateAmount | string |   |   |   |
| lastLoginDateStyle | string |   |   |   |

# AccountantPortalUserTasks
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| title | string |   |   |   |
| dueDateTime | date |   |   |   |
| percentComplete | int |   |   |   |
| priority | string |   |   |   |
| description | string |   |   |   |
| createdByName | string |   |   |   |
| createdDateTime | date |   |   |   |
| startDateTime | date |   |   |   |
| assignedTo | guid |   |   |   |
| link | string |   |   |   |
| userTaskGroupAssignedTo | string |   |   |   |

# BankAccountLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| transactionNo | int |   |   |   |
| bankAccountNo | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| open | bool |   |   |   |
| currencyCode | string |   |   |   |
| amount | float |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| remainingAmount | float |   |   |   |
| amountLCY | float |   |   |   |
| debitAmountLCY | float |   |   |   |
| creditAmountLCY | float |   |   |   |
| dimensionSetID | int |   |   |   |
| bankAccountName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# C2Graph
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| component | string |   |   |   |
| type | string |   |   |   |
| schema | string |   |   |   |

# CsApprovalComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| tableID | int |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| userID | string |   |   |   |
| dateAndTime | date |   |   |   |
| comment | string |   |   |   |

# CsApprovalDocument
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| documentType | string |   |   |   |
| documentTypeInt | string |   |   |   |
| no | string |   |   |   |
| sourceNo | string |   |   |   |
| sourceName | string |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| docOnHold | string |   |   |   |
| docDueDate | date |   |   |   |
| nextApproverId | string |   |   |   |
| allowEditLines | bool |   |   |   |
| documentFilename | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| amountExclVATLCY | float |   |   |   |
| amountInclVATLCY | float |   |   |   |
| askRemoveOnHold | bool |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csApprovalDocumentApprovalEntries | [CsApprovalDocumentApprovalEntries[]](#csapprovaldocumentapprovalentries) | Yes |
| csApprovalDocumentApprovalComments | [CsApprovalDocumentApprovalComments[]](#csapprovaldocumentapprovalcomments) | Yes |
| csApprovalDocumentAttachedFiles | [CsApprovalDocumentAttachedFiles[]](#csapprovaldocumentattachedfiles) | Yes |
# CsApprovalDocumentApprovalComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| userID | string |   |   |   |
| userName | string |   |   |   |
| dateAndTime | date |   |   |   |
| comment | string |   |   |   |

# CsApprovalDocumentApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| sequenceNo | int |   |   |   |
| approverID | string |   |   |   |
| approverName | string |   |   |   |
| status | string |   |   |   |
| dateTimeSentForApproval | date |   |   |   |
| lastDateTimeModified | date |   |   |   |
| workflowInstanceID | guid |   |   |   |

# CsApprovalDocumentAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| currentUserId | string |   |   |   |
| tableID | int |   |   |   |
| documentType | int |   |   |   |
| documentNo | string |   |   |   |
| description | string |   |   |   |
| fileExtension | string |   |   |   |
| importedBy | string |   |   |   |
| importedDateTime | date |   |   |   |
| filename | string |   |   |   |
| allowDelete | bool |   |   |   |

# CsApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| tableID | int |   |   |   |
| approvalCode | string |   |   |   |
| documentType | string |   |   |   |
| documentTypeInt | string |   |   |   |
| documentNo | string |   |   |   |
| sequenceNo | int |   |   |   |
| sourceNo | string |   |   |   |
| sourceName | string |   |   |   |
| purchaserCode | string |   |   |   |
| approverID | string |   |   |   |
| status | string |   |   |   |
| statusInt | string |   |   |   |
| comment | bool |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| amountExclVATLCY | float |   |   |   |
| amountInclVATLCY | float |   |   |   |
| docOnHold | string |   |   |   |
| docDate | date |   |   |   |
| docLastComment | string |   |   |   |
| docFilename | string |   |   |   |
| hasAttachments | bool |   |   |   |
| currentApprover | string |   |   |   |
| askRemoveOnHold | bool |   |   |   |

# CsApprovalSharing
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| ownerUserID | string |   |   |   |
| sharedToUserID | string |   |   |   |
| sharingType | string |   |   |   |
| validFrom | date |   |   |   |
| validTo | date |   |   |   |
| ownerName | string |   |   |   |
| sharedToUserName | string |   |   |   |
| sharingTypeInt | string |   |   |   |
| displayOrder | int |   |   |   |
| useOwnersPermissions | bool |   |   |   |

# CsApprovers
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| userID | string |   |   |   |
| salespersPurchCode | string |   |   |   |
| name | string |   |   |   |

# CsDeferralTemplates
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| deferralCode | string |   |   |   |
| description | string |   |   |   |
| deferralPct | float |   |   |   |
| startDate | string |   |   |   |
| noOfPeriods | int |   |   |   |
| periodDescription | string |   |   |   |

# CsDimensionValues
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| dimCode | string |   |   |   |
| code | string |   |   |   |
| name | string |   |   |   |
| dimValueType | string |   |   |   |

# CsEnabledReasonCodes
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| tableID | int |   |   |   |
| docType | string |   |   |   |
| type | string |   |   |   |
| reasonCode | string |   |   |   |
| docTypeInt | string |   |   |   |
| typeInt | string |   |   |   |
| description | string |   |   |   |

# CsFixedAssets
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |

# CsGLAccounts
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| name | string |   |   |   |
| directPosting | bool |   |   |   |
| accountType | string |   |   |   |
| accountTypeInt | string |   |   |   |

# CsItemCharges
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |

# CsItems
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |

# CsJobTasks
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   |   |
| jobTaskNo | string |   |   |   |
| description | string |   |   |   |
| jobTaskType | string |   |   |   |
| indentation | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsJobs
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |
| billToCustomerNo | string |   |   |   |
| startingDate | date |   |   |   |
| endingDate | date |   |   |   |
| billToName | string |   |   |   |

# CsLocationCodes
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| name | string |   |   |   |

# CsPostedApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| tableID | int |   |   |   |
| approvalCode | string |   |   |   |
| documentNo | string |   |   |   |
| sequenceNo | int |   |   |   |
| sourceNo | string |   |   |   |
| sourceName | string |   |   |   |
| purchaserCode | string |   |   |   |
| approverID | string |   |   |   |
| status | string |   |   |   |
| statusInt | string |   |   |   |
| comment | bool |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| docDueDate | date |   |   |   |
| docOnHold | string |   |   |   |
| docDate | date |   |   |   |
| docLastComment | string |   |   |   |
| docFilename | string |   |   |   |
| hasAttachments | bool |   |   |   |

# CsPostedDocSearch
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| type | string |   |   |   |
| no | string |   |   |   |
| userID | string |   |   |   |
| name | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| extDocNo | string |   |   |   |
| currCode | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| docLastComment | string |   |   |   |
| docFilename | string |   |   |   |

# CsPostedPurchaseCrMemo
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| payToVendorNo | string |   |   |   |
| payToName | string |   |   |   |
| payToName2 | string |   |   |   |
| payToAddress | string |   |   |   |
| payToAddress2 | string |   |   |   |
| payToCity | string |   |   |   |
| payToContact | string |   |   |   |
| yourReference | string |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| purchaserCode | string |   |   |   |
| onHold | string |   |   |   |
| vendorCrMemoNo | string |   |   |   |
| payToPostCode | string |   |   |   |
| payToCounty | string |   |   |   |
| payToCountryRegionCode | string |   |   |   |
| payToCountryRegion | string |   |   |   |
| documentDate | date |   |   |   |
| paymentMethodCode | string |   |   |   |
| paymentMethod | string |   |   |   |
| documentFilename | string |   |   |   |
| pricesIncludingVAT | bool |   |   |   |
| lineAmountExclVAT | float |   |   |   |
| lineAmountInclVAT | float |   |   |   |
| amountExclVATLCY | float |   |   |   |
| amountInclVATLCY | float |   |   |   |
| webDim1Code | string |   |   |   |
| webDim2Code | string |   |   |   |
| webDim3Code | string |   |   |   |
| webDim4Code | string |   |   |   |
| webDim5Code | string |   |   |   |
| webDim6Code | string |   |   |   |
| webDim7Code | string |   |   |   |
| webDim8Code | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPostedPurchaseCrMemoPurchLines | [CsPostedPurchaseCrMemoPurchLines[]](#cspostedpurchasecrmemopurchlines) | Yes |
| csPostedPurchaseCrMemoApprovalEntries | [CsPostedPurchaseCrMemoApprovalEntries[]](#cspostedpurchasecrmemoapprovalentries) | Yes |
| csPostedPurchaseCrMemoApprovalComments | [CsPostedPurchaseCrMemoApprovalComments[]](#cspostedpurchasecrmemoapprovalcomments) | Yes |
| csPostedPurchaseCrMemoAttachedFiles | [CsPostedPurchaseCrMemoAttachedFiles[]](#cspostedpurchasecrmemoattachedfiles) | Yes |
# CsPostedPurchaseCrMemoApprovalComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| userID | string |   |   |   |
| userName | string |   |   |   |
| dateAndTime | date |   |   |   |
| comment | string |   |   |   |

# CsPostedPurchaseCrMemoApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| sequenceNo | int |   |   |   |
| approverID | string |   |   |   |
| approverName | string |   |   |   |
| status | string |   |   |   |
| statusInt | string |   |   |   |
| dateTimeSentForApproval | date |   |   |   |
| lastDateTimeModified | date |   |   |   |

# CsPostedPurchaseCrMemoAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| currentUserId | string |   |   |   |
| tableID | int |   |   |   |
| documentType | int |   |   |   |
| documentNo | string |   |   |   |
| description | string |   |   |   |
| fileExtension | string |   |   |   |
| importedBy | string |   |   |   |
| importedDateTime | date |   |   |   |
| filename | string |   |   |   |
| allowDelete | bool |   |   |   |

# CsPostedPurchaseCrMemoPurchLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   |   |
| lineNo | int |   |   |   |
| currentUserId | string |   |   |   |
| type | string |   |   |   |
| typeInt | string |   |   |   |
| no | string |   |   |   |
| postingAccountDescription | string |   |   |   |
| variantCode | string |   |   |   |
| prodPostingGroup | string |   |   |   |
| prodPostingGroupDesc | string |   |   |   |
| vATProdPostingGroup | string |   |   |   |
| vATProdPostingGroupDesc | string |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| locationCode | string |   |   |   |
| quantity | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| unitOfMeasureDesc | string |   |   |   |
| directUnitCost | float |   |   |   |
| indirectCostPct | float |   |   |   |
| lineAmount | float |   |   |   |
| lineDiscountPct | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| jobNo | string |   |   |   |
| jobDesc | string |   |   |   |
| jobTaskNo | string |   |   |   |
| jobTaskDesc | string |   |   |   |
| deferralCode | string |   |   |   |
| webDim1ValueCode | string |   |   |   |
| webDim2ValueCode | string |   |   |   |
| webDim3ValueCode | string |   |   |   |
| webDim4ValueCode | string |   |   |   |
| webDim5ValueCode | string |   |   |   |
| webDim6ValueCode | string |   |   |   |
| webDim7ValueCode | string |   |   |   |
| webDim8ValueCode | string |   |   |   |
| webDim1ValueName | string |   |   |   |
| webDim2ValueName | string |   |   |   |
| webDim3ValueName | string |   |   |   |
| webDim4ValueName | string |   |   |   |
| webDim5ValueName | string |   |   |   |
| webDim6ValueName | string |   |   |   |
| webDim7ValueName | string |   |   |   |
| webDim8ValueName | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseCrMemos
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| vendorNo | string |   |   |   |
| name | string |   |   |   |
| postingDate | date |   |   |   |
| docDate | date |   |   |   |
| vendorCrMemoNo | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| currCode | string |   |   |   |
| respCenter | string |   |   |   |
| docLastComment | string |   |   |   |
| docFilename | string |   |   |   |

# CsPostedPurchaseInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| payToVendorNo | string |   |   |   |
| payToName | string |   |   |   |
| payToName2 | string |   |   |   |
| payToAddress | string |   |   |   |
| payToAddress2 | string |   |   |   |
| payToCity | string |   |   |   |
| payToContact | string |   |   |   |
| yourReference | string |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| purchaserCode | string |   |   |   |
| onHold | string |   |   |   |
| vendorOrderNo | string |   |   |   |
| vendorInvoiceNo | string |   |   |   |
| payToPostCode | string |   |   |   |
| payToCounty | string |   |   |   |
| payToCountryRegionCode | string |   |   |   |
| payToCountryRegion | string |   |   |   |
| documentDate | date |   |   |   |
| paymentMethodCode | string |   |   |   |
| paymentMethod | string |   |   |   |
| documentFilename | string |   |   |   |
| pricesIncludingVAT | bool |   |   |   |
| lineAmountExclVAT | float |   |   |   |
| lineAmountInclVAT | float |   |   |   |
| amountExclVATLCY | float |   |   |   |
| amountInclVATLCY | float |   |   |   |
| webDim1Code | string |   |   |   |
| webDim2Code | string |   |   |   |
| webDim3Code | string |   |   |   |
| webDim4Code | string |   |   |   |
| webDim5Code | string |   |   |   |
| webDim6Code | string |   |   |   |
| webDim7Code | string |   |   |   |
| webDim8Code | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPostedPurchaseInvoicePurchLines | [CsPostedPurchaseInvoicePurchLines[]](#cspostedpurchaseinvoicepurchlines) | Yes |
| csPostedPurchaseInvoiceApprovalEntries | [CsPostedPurchaseInvoiceApprovalEntries[]](#cspostedpurchaseinvoiceapprovalentries) | Yes |
| csPostedPurchaseInvoiceApprovalComments | [CsPostedPurchaseInvoiceApprovalComments[]](#cspostedpurchaseinvoiceapprovalcomments) | Yes |
| csPostedPurchaseInvoiceAttachedFiles | [CsPostedPurchaseInvoiceAttachedFiles[]](#cspostedpurchaseinvoiceattachedfiles) | Yes |
# CsPostedPurchaseInvoiceApprovalComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| userID | string |   |   |   |
| userName | string |   |   |   |
| dateAndTime | date |   |   |   |
| comment | string |   |   |   |

# CsPostedPurchaseInvoiceApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| sequenceNo | int |   |   |   |
| approverID | string |   |   |   |
| approverName | string |   |   |   |
| status | string |   |   |   |
| statusInt | string |   |   |   |
| dateTimeSentForApproval | date |   |   |   |
| lastDateTimeModified | date |   |   |   |

# CsPostedPurchaseInvoiceAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| currentUserId | string |   |   |   |
| tableID | int |   |   |   |
| documentType | int |   |   |   |
| documentNo | string |   |   |   |
| description | string |   |   |   |
| fileExtension | string |   |   |   |
| importedBy | string |   |   |   |
| importedDateTime | date |   |   |   |
| filename | string |   |   |   |
| allowDelete | bool |   |   |   |

# CsPostedPurchaseInvoicePurchLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   |   |
| lineNo | int |   |   |   |
| currentUserId | string |   |   |   |
| type | string |   |   |   |
| typeInt | string |   |   |   |
| no | string |   |   |   |
| postingAccountDescription | string |   |   |   |
| variantCode | string |   |   |   |
| prodPostingGroup | string |   |   |   |
| prodPostingGroupDesc | string |   |   |   |
| vATProdPostingGroup | string |   |   |   |
| vATProdPostingGroupDesc | string |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| locationCode | string |   |   |   |
| quantity | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| unitOfMeasureDesc | string |   |   |   |
| directUnitCost | float |   |   |   |
| indirectCostPct | float |   |   |   |
| lineAmount | float |   |   |   |
| lineDiscountPct | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| jobNo | string |   |   |   |
| jobDesc | string |   |   |   |
| jobTaskNo | string |   |   |   |
| jobTaskDesc | string |   |   |   |
| deferralCode | string |   |   |   |
| webDim1ValueCode | string |   |   |   |
| webDim2ValueCode | string |   |   |   |
| webDim3ValueCode | string |   |   |   |
| webDim4ValueCode | string |   |   |   |
| webDim5ValueCode | string |   |   |   |
| webDim6ValueCode | string |   |   |   |
| webDim7ValueCode | string |   |   |   |
| webDim8ValueCode | string |   |   |   |
| webDim1ValueName | string |   |   |   |
| webDim2ValueName | string |   |   |   |
| webDim3ValueName | string |   |   |   |
| webDim4ValueName | string |   |   |   |
| webDim5ValueName | string |   |   |   |
| webDim6ValueName | string |   |   |   |
| webDim7ValueName | string |   |   |   |
| webDim8ValueName | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseInvoices
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| vendorNo | string |   |   |   |
| name | string |   |   |   |
| postingDate | date |   |   |   |
| docDate | date |   |   |   |
| vendorInvoiceNo | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| currCode | string |   |   |   |
| respCenter | string |   |   |   |
| docLastComment | string |   |   |   |
| docFilename | string |   |   |   |

# CsProdPostGroups
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| description | string |   |   |   |

# CsPurchaseDocument
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| no | string |   |   |   |
| documentTypeInt | string |   |   |   |
| payToVendorNo | string |   |   |   |
| payToName | string |   |   |   |
| payToName2 | string |   |   |   |
| payToAddress | string |   |   |   |
| payToAddress2 | string |   |   |   |
| payToCity | string |   |   |   |
| payToContact | string |   |   |   |
| yourReference | string |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| purchaserCode | string |   |   |   |
| onHold | string |   |   |   |
| vendorOrderNo | string |   |   |   |
| vendorInvoiceNo | string |   |   |   |
| vendorCrMemoNo | string |   |   |   |
| payToPostCode | string |   |   |   |
| payToCounty | string |   |   |   |
| payToCountryRegionCode | string |   |   |   |
| payToCountryRegion | string |   |   |   |
| documentDate | date |   |   |   |
| paymentMethodCode | string |   |   |   |
| paymentMethod | string |   |   |   |
| nextApproverId | string |   |   |   |
| allowEditLines | bool |   |   |   |
| documentFilename | string |   |   |   |
| pricesIncludingVAT | bool |   |   |   |
| importedAmountExclVAT | float |   |   |   |
| importedAmountInclVAT | float |   |   |   |
| importedAmountExclVATLCY | float |   |   |   |
| importedAmountInclVATLCY | float |   |   |   |
| assignedAmountExclVAT | float |   |   |   |
| assignedAmountInclVAT | float |   |   |   |
| headerAmount | float |   |   |   |
| headerAmountLCY | float |   |   |   |
| askRemoveOnHold | bool |   |   |   |
| webDim1Code | string |   |   |   |
| webDim2Code | string |   |   |   |
| webDim3Code | string |   |   |   |
| webDim4Code | string |   |   |   |
| webDim5Code | string |   |   |   |
| webDim6Code | string |   |   |   |
| webDim7Code | string |   |   |   |
| webDim8Code | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csPurchaseDocumentPurchLines | [CsPurchaseDocumentPurchLines[]](#cspurchasedocumentpurchlines) | Yes |
| csPurchaseDocumentApprovalEntries | [CsPurchaseDocumentApprovalEntries[]](#cspurchasedocumentapprovalentries) | Yes |
| csPurchaseDocumentApprovalComments | [CsPurchaseDocumentApprovalComments[]](#cspurchasedocumentapprovalcomments) | Yes |
| csPurchaseDocumentAttachedFiles | [CsPurchaseDocumentAttachedFiles[]](#cspurchasedocumentattachedfiles) | Yes |
# CsPurchaseDocumentApprovalComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| userID | string |   |   |   |
| userName | string |   |   |   |
| dateAndTime | date |   |   |   |
| comment | string |   |   |   |

# CsPurchaseDocumentApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| sequenceNo | int |   |   |   |
| approverID | string |   |   |   |
| approverName | string |   |   |   |
| status | string |   |   |   |
| dateTimeSentForApproval | date |   |   |   |
| lastDateTimeModified | date |   |   |   |
| workflowInstanceID | guid |   |   |   |

# CsPurchaseDocumentAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| currentUserId | string |   |   |   |
| tableID | int |   |   |   |
| documentType | int |   |   |   |
| documentNo | string |   |   |   |
| description | string |   |   |   |
| fileExtension | string |   |   |   |
| importedBy | string |   |   |   |
| importedDateTime | date |   |   |   |
| filename | string |   |   |   |
| allowDelete | bool |   |   |   |

# CsPurchaseDocumentPurchLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| lineNo | int |   |   |   |
| currentUserId | string |   |   |   |
| documentTypeInt | string |   |   |   |
| type | string |   |   |   |
| typeInt | string |   |   |   |
| no | string |   |   |   |
| postingAccountDescription | string |   |   |   |
| variantCode | string |   |   |   |
| prodPostingGroup | string |   |   |   |
| prodPostingGroupDesc | string |   |   |   |
| vATProdPostingGroup | string |   |   |   |
| vATProdPostingGroupDesc | string |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| locationCode | string |   |   |   |
| quantity | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| unitOfMeasureDesc | string |   |   |   |
| directUnitCost | float |   |   |   |
| indirectCostPct | float |   |   |   |
| lineAmount | float |   |   |   |
| lineDiscountPct | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| lineStyle | string |   |   |   |
| jobNo | string |   |   |   |
| jobDesc | string |   |   |   |
| jobTaskNo | string |   |   |   |
| jobTaskDesc | string |   |   |   |
| deferralCode | string |   |   |   |
| fAPostingType | string |   |   |   |
| webDim1ValueCode | string |   |   |   |
| webDim2ValueCode | string |   |   |   |
| webDim3ValueCode | string |   |   |   |
| webDim4ValueCode | string |   |   |   |
| webDim5ValueCode | string |   |   |   |
| webDim6ValueCode | string |   |   |   |
| webDim7ValueCode | string |   |   |   |
| webDim8ValueCode | string |   |   |   |
| webDim1ValueName | string |   |   |   |
| webDim2ValueName | string |   |   |   |
| webDim3ValueName | string |   |   |   |
| webDim4ValueName | string |   |   |   |
| webDim5ValueName | string |   |   |   |
| webDim6ValueName | string |   |   |   |
| webDim7ValueName | string |   |   |   |
| webDim8ValueName | string |   |   |   |
| webDim1Rule | int |   |   |   |
| webDim2Rule | int |   |   |   |
| webDim3Rule | int |   |   |   |
| webDim4Rule | int |   |   |   |
| webDim5Rule | int |   |   |   |
| webDim6Rule | int |   |   |   |
| webDim7Rule | int |   |   |   |
| webDim8Rule | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPurchaseLine
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| lineNo | int |   |   |   |
| currentUserId | string |   |   |   |
| documentTypeInt | string |   |   |   |
| type | string |   |   |   |
| typeInt | string |   |   |   |
| no | string |   |   |   |
| postingAccountDescription | string |   |   |   |
| variantCode | string |   |   |   |
| prodPostingGroup | string |   |   |   |
| prodPostingGroupDesc | string |   |   |   |
| vATProdPostingGroup | string |   |   |   |
| vATProdPostingGroupDesc | string |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| locationCode | string |   |   |   |
| quantity | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| unitOfMeasureDesc | string |   |   |   |
| directUnitCost | float |   |   |   |
| indirectCostPct | float |   |   |   |
| lineAmount | float |   |   |   |
| lineDiscountPct | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| lineStyle | string |   |   |   |
| jobNo | string |   |   |   |
| jobDesc | string |   |   |   |
| jobTaskNo | string |   |   |   |
| jobTaskDesc | string |   |   |   |
| deferralCode | string |   |   |   |
| fAPostingType | string |   |   |   |
| webDim1ValueCode | string |   |   |   |
| webDim2ValueCode | string |   |   |   |
| webDim3ValueCode | string |   |   |   |
| webDim4ValueCode | string |   |   |   |
| webDim5ValueCode | string |   |   |   |
| webDim6ValueCode | string |   |   |   |
| webDim7ValueCode | string |   |   |   |
| webDim8ValueCode | string |   |   |   |
| webDim1ValueName | string |   |   |   |
| webDim2ValueName | string |   |   |   |
| webDim3ValueName | string |   |   |   |
| webDim4ValueName | string |   |   |   |
| webDim5ValueName | string |   |   |   |
| webDim6ValueName | string |   |   |   |
| webDim7ValueName | string |   |   |   |
| webDim8ValueName | string |   |   |   |
| webDim1Rule | int |   |   |   |
| webDim2Rule | int |   |   |   |
| webDim3Rule | int |   |   |   |
| webDim4Rule | int |   |   |   |
| webDim5Rule | int |   |   |   |
| webDim6Rule | int |   |   |   |
| webDim7Rule | int |   |   |   |
| webDim8Rule | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsStdAmountDistribCodes
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| description | string |   |   |   |
| enabledForPurchase | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csStdAmountDistribCodesVendors | [CsStdAmountDistribCodesVendors[]](#csstdamountdistribcodesvendors) | Yes |
# CsStdAmountDistribCodesVendors
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| vendorNo | string |   |   |   |
| amountDistributionCode | string |   |   |   |

# CsUnitOfMeasure
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| description | string |   |   |   |

# CsVATProdPostGroups
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| description | string |   |   |   |

# CsVendorInfo
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| name | string |   |   |   |
| name2 | string |   |   |   |
| address | string |   |   |   |
| address2 | string |   |   |   |
| postCodeCity | string |   |   |   |
| phoneNo | string |   |   |   |
| countryRegion | string |   |   |   |
| comment | bool |   |   |   |
| blocked | string |   |   |   |
| balanceLCY | float |   |   |   |
| balanceDueLCY | float |   |   |   |
| vATRegistrationNo | string |   |   |   |
| county | string |   |   |   |
| eMail | string |   |   |   |
| homePage | string |   |   |   |
| globalDimension1Filter | string |   |   |   |
| globalDimension2Filter | string |   |   |   |
| currencyFilter | string |   |   |   |
| dateFilter | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csVendorInfoComments | [CsVendorInfoComments[]](#csvendorinfocomments) | Yes |
| csVendorInfoContacts | [CsVendorInfoContacts[]](#csvendorinfocontacts) | Yes |
| csVendorInfoDocuments | [CsVendorInfoDocuments[]](#csvendorinfodocuments) | Yes |
# CsVendorInfoComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| tableName | string |   |   |   |
| no | string |   |   |   |
| lineNo | int |   |   |   |
| date | date |   |   |   |
| code | string |   |   |   |
| comment | string |   |   |   |

# CsVendorInfoContacts
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| name | string |   |   |   |
| phoneNo | string |   |   |   |
| eMail | string |   |   |   |

# CsVendorInfoDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| type | string |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| typeInt | string |   |   |   |
| documentTypeInt | string |   |   |   |
| currencyCode | string |   |   |   |
| amountExclVAT | float |   |   |   |
| amountInclVAT | float |   |   |   |
| date | date |   |   |   |
| fullyApplied | bool |   |   |   |
| onHold | string |   |   |   |
| latestComment | string |   |   |   |

# CsWebHelp
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| section | string |   |   |   |
| lineNo | int |   |   |   |
| heading | bool |   |   |   |
| text | string |   |   |   |
| bold | bool |   |   |   |
| italic | bool |   |   |   |
| underline | bool |   |   |   |
| link | string |   |   |   |
| linkType | string |   |   |   |
| newWindow | bool |   |   |   |

# CsWebMenu
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| description | string |   |   |   |
| sorting | int |   |   |   |

# CsWebSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| companyGuid | string |   |   |   |
| companyName | string |   |   |   |
| enableWebApproval | bool |   |   |   |
| lCYCode | string |   |   |   |
| showLCYAmounts | int |   |   |   |
| showType | bool |   |   |   |
| showPostingAccountName | bool |   |   |   |
| showJobNo | bool |   |   |   |
| showJobTaskNo | bool |   |   |   |
| showProdPostingGroup | bool |   |   |   |
| showVATProdGroup | bool |   |   |   |
| showDescription2 | bool |   |   |   |
| showLineDiscPct | bool |   |   |   |
| showUOM | bool |   |   |   |
| showFAPostingType | bool |   |   |   |
| showLocationCode | bool |   |   |   |
| showDeferralCode | bool |   |   |   |
| dimJobFieldPlacement | int |   |   |   |
| defSearchFromDate | date |   |   |   |
| defSearchToDate | date |   |   |   |
| defTimeZoneId | string |   |   |   |
| defNumberAndUnitsName | string |   |   |   |
| defLanguageName | string |   |   |   |
| webHelpActive | bool |   |   |   |
| advApprovalInvoice | bool |   |   |   |
| advApprovalCrMemo | bool |   |   |   |
| maxLineDescLength | int |   |   |   |
| allowForwardAndApprove | bool |   |   |   |
| allowForwardWOApproval | bool |   |   |   |
| allowForwardAndReturn | bool |   |   |   |
| dim1Code | string |   |   |   |
| dim2Code | string |   |   |   |
| dim3Code | string |   |   |   |
| dim4Code | string |   |   |   |
| dim5Code | string |   |   |   |
| dim6Code | string |   |   |   |
| dim7Code | string |   |   |   |
| dim8Code | string |   |   |   |
| dim1Name | string |   |   |   |
| dim2Name | string |   |   |   |
| dim3Name | string |   |   |   |
| dim4Name | string |   |   |   |
| dim5Name | string |   |   |   |
| dim6Name | string |   |   |   |
| dim7Name | string |   |   |   |
| dim8Name | string |   |   |   |
| lineDim1Code | string |   |   |   |
| lineDim2Code | string |   |   |   |
| lineDim3Code | string |   |   |   |
| lineDim4Code | string |   |   |   |
| lineDim5Code | string |   |   |   |
| lineDim6Code | string |   |   |   |
| lineDim7Code | string |   |   |   |
| lineDim8Code | string |   |   |   |
| lineDim1Name | string |   |   |   |
| lineDim2Name | string |   |   |   |
| lineDim3Name | string |   |   |   |
| lineDim4Name | string |   |   |   |
| lineDim5Name | string |   |   |   |
| lineDim6Name | string |   |   |   |
| lineDim7Name | string |   |   |   |
| lineDim8Name | string |   |   |   |
| cEMEnabled | bool |   |   |   |
| cDCEnabled | bool |   |   |   |

# CsWebSubMenu
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| webMenuCode | string |   |   |   |
| code | string |   |   |   |
| description | string |   |   |   |
| approvalCodeFilter | string |   |   |   |
| tableIDFilter | string |   |   |   |
| documentTypeFilter | string |   |   |   |
| sorting | int |   |   |   |

# CsWebUser
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| userID | string |   |   |   |
| documentSearch | string |   |   |   |
| purchRespCenterFilter | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csWebUserPermissions | [CsWebUserPermissions[]](#cswebuserpermissions) | Yes |
# CsWebUserCompany
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| userId | string |   |   |   |
| companyCode | string |   |   |   |
| companyGuid | guid |   |   |   |
| noOfDocForApproval | int |   |   |   |
| noOfSharedDocuments | int |   |   |   |
| display | string |   |   |   |

# CsWebUserPermissions
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| continiaUserID | string |   |   |   |
| type | string |   |   |   |
| dimensionCode | string |   |   |   |
| approvalUserGroupCode | string |   |   |   |
| assigningPermission | string |   |   |   |
| approvalPermission | string |   |   |   |
| assigningFilter | string |   |   |   |
| approvalFilter | string |   |   |   |
| noOfRecords | int |   |   |   |

# CsWebUserPmsSelection
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| permissionType | string |   |   |   |
| continiaUserID | string |   |   |   |
| type | string |   |   |   |
| dimensionCode | string |   |   |   |
| approvalUserGroupCode | string |   |   |   |
| codeNo | string |   |   |   |
| typeInt | string |   |   |   |
| permissionTypeInt | string |   |   |   |
| name | string |   |   |   |
| blocked | bool |   |   |   |
| accountType | string |   |   |   |

# Company
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| name | string |   |   |   |
| evaluationCompany | bool |   |   |   |
| displayName | string |   |   |   |
| id | guid |   |   |   |
| businessProfileId | string |   |   |   |

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
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| transactionNo | int |   |   |   |
| customerNo | string |   |   |   |
| postingDate | date |   |   |   |
| dueDate | date |   |   |   |
| pmtDiscountDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| salespersonCode | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| iCPartnerCode | string |   |   |   |
| open | bool |   |   |   |
| currencyCode | string |   |   |   |
| dimensionSetID | int |   |   |   |
| amount | float |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| remainingAmount | float |   |   |   |
| amountLCY | float |   |   |   |
| debitAmountLCY | float |   |   |   |
| creditAmountLCY | float |   |   |   |
| remainingAmtLCY | float |   |   |   |
| originalAmtLCY | float |   |   |   |
| customerName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# DimensionSetEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| dimensionSetID | int |   |   |   |
| dimensionCode | string |   |   |   |
| dimensionValueCode | string |   |   |   |
| dimensionValueID | int |   |   |   |
| dimensionName | string |   |   |   |
| dimensionValueName | string |   |   |   |

# ExcelTemplateAgedAccountsPayable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| vendorId | guid |   |   |   |
| vendorNumber | string |   |   |   |
| name | string |   |   |   |
| currencyCode | string |   |   |   |
| balanceDue | float |   |   |   |
| currentAmount | float |   |   |   |
| period1Amount | float |   |   |   |
| period2Amount | float |   |   |   |
| period3Amount | float |   |   |   |
| agedAsOfDate | date |   |   |   |
| periodLengthFilter | string |   |   |   |

# ExcelTemplateAgedAccountsReceivable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| customerId | guid |   |   |   |
| customerNumber | string |   |   |   |
| name | string |   |   |   |
| currencyCode | string |   |   |   |
| balanceDue | float |   |   |   |
| currentAmount | float |   |   |   |
| period1Amount | float |   |   |   |
| period2Amount | float |   |   |   |
| period3Amount | float |   |   |   |
| agedAsOfDate | date |   |   |   |
| periodLengthFilter | string |   |   |   |

# ExcelTemplateBalanceSheet
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   |   |
| display | string |   |   |   |
| balance | float |   |   |   |
| lineType | string |   |   |   |
| indentation | int |   |   |   |
| dateFilter | date |   |   |   |

# ExcelTemplateCashFlowStatement
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   |   |
| display | string |   |   |   |
| netChange | float |   |   |   |
| lineType | string |   |   |   |
| indentation | int |   |   |   |
| dateFilter | date |   |   |   |

# ExcelTemplateIncomeStatement
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   |   |
| display | string |   |   |   |
| netChange | float |   |   |   |
| lineType | string |   |   |   |
| indentation | int |   |   |   |
| dateFilter | date |   |   |   |

# ExcelTemplateRetainedEarnings
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   |   |
| display | string |   |   |   |
| netChange | float |   |   |   |
| lineType | string |   |   |   |
| indentation | int |   |   |   |
| dateFilter | date |   |   |   |

# ExcelTemplateTrialBalance
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| number | string |   |   |   |
| accountId | guid |   |   |   |
| accountType | string |   |   |   |
| display | string |   |   |   |
| totalDebit | string |   |   |   |
| totalCredit | string |   |   |   |
| balanceAtDateDebit | string |   |   |   |
| balanceAtDateCredit | string |   |   |   |
| dateFilter | date |   |   |   |

# ExcelTemplateViewCompanyInformation
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| displayName | string |   |   |   |
| currency | string |   |   |   |

# FALedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| gLEntryNo | int |   |   |   |
| fANo | string |   |   |   |
| fAClassCode | string |   |   |   |
| fASubclassCode | string |   |   |   |
| fAPostingDate | date |   |   |   |
| fAPostingCategory | string |   |   |   |
| fAPostingType | string |   |   |   |
| fALocationCode | string |   |   |   |
| depreciationBookCode | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| locationCode | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| amountLCY | float |   |   |   |
| dimensionSetID | int |   |   |   |
| fADescription | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# GLBudgetEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| budgetName | string |   |   |   |
| gLAccountNo | string |   |   |   |
| businessUnitCode | string |   |   |   |
| date | date |   |   |   |
| amount | float |   |   |   |
| dimensionSetID | int |   |   |   |

# GLEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| transactionNo | int |   |   |   |
| gLAccountNo | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| sourceCode | string |   |   |   |
| jobNo | string |   |   |   |
| businessUnitCode | string |   |   |   |
| reasonCode | string |   |   |   |
| genPostingType | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| useTax | bool |   |   |   |
| vATBusPostingGroup | string |   |   |   |
| vATProdPostingGroup | string |   |   |   |
| iCPartnerCode | string |   |   |   |
| amount | float |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| vATAmount | float |   |   |   |
| additionalCurrencyAmount | float |   |   |   |
| addCurrencyDebitAmount | float |   |   |   |
| addCurrencyCreditAmount | float |   |   |   |
| dimensionSetID | int |   |   |   |
| gLAccountName | string |   |   |   |

# GeneralJournals
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| journalTemplateName | string |   |   |   |
| journalBatchName | string |   |   |   |
| lineNo | int |   |   |   |
| currentJnlBatchName | string |   |   |   |
| x003CDocumentNoSimplePageX003E | string |   |   |   |
| x003CCurrentPostingDateX003E | date |   |   |   |
| x003CCurrentCurrencyCodeX003E | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| incomingDocumentEntryNo | int |   |   |   |
| externalDocumentNo | string |   |   |   |
| appliesToExtDocNo | string |   |   |   |
| accountType | string |   |   |   |
| accountNo | string |   |   |   |
| accountName | string |   |   |   |
| description | string |   |   |   |
| payerInformation | string |   |   |   |
| transactionInformation | string |   |   |   |
| businessUnitCode | string |   |   |   |
| salespersPurchCode | string |   |   |   |
| campaignNo | string |   |   |   |
| currencyCode | string |   |   |   |
| eU3PartyTrade | bool |   |   |   |
| genPostingType | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vATBusPostingGroup | string |   |   |   |
| vATProdPostingGroup | string |   |   |   |
| quantity | float |   |   |   |
| amount | float |   |   |   |
| amountLCY | float |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| vATAmount | float |   |   |   |
| vATDifference | float |   |   |   |
| balVATAmount | float |   |   |   |
| balVATDifference | float |   |   |   |
| balAccountType | string |   |   |   |
| balAccountNo | string |   |   |   |
| balGenPostingType | string |   |   |   |
| balGenBusPostingGroup | string |   |   |   |
| balGenProdPostingGroup | string |   |   |   |
| deferralCode | string |   |   |   |
| jobQueueStatus | string |   |   |   |
| balVATBusPostingGroup | string |   |   |   |
| balVATProdPostingGroup | string |   |   |   |
| billToPayToNo | string |   |   |   |
| shipToOrderAddressCode | string |   |   |   |
| paymentTermsCode | string |   |   |   |
| appliedAutomatically | bool |   |   |   |
| applied | bool |   |   |   |
| appliesToDocType | string |   |   |   |
| appliesToDocNo | string |   |   |   |
| appliesToID | string |   |   |   |
| onHold | string |   |   |   |
| bankPaymentType | string |   |   |   |
| reasonCode | string |   |   |   |
| correction | bool |   |   |   |
| comment | string |   |   |   |
| directDebitMandateID | string |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| shortcutDimCode3 | string |   |   |   |
| shortcutDimCode4 | string |   |   |   |
| shortcutDimCode5 | string |   |   |   |
| shortcutDimCode6 | string |   |   |   |
| shortcutDimCode7 | string |   |   |   |
| shortcutDimCode8 | string |   |   |   |
| numberOfJournalRecords | int |   |   |   |
| balAccName | string |   |   |   |
| displayTotalDebit | float |   |   |   |
| displayTotalCredit | float |   |   |   |
| balance | float |   |   |   |
| totalBalance | float |   |   |   |

# InvoiceDocument
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| invoiceId | guid |   |   |   |
| base64 | string |   |   |   |
| binary | string |   |   |   |

# InvoiceReminder
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| invoiceId | guid |   |   |   |
| message | string |   |   |   |

# ItemLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| entryType | string |   |   |   |
| itemNo | string |   |   |   |
| crossReferenceNo | string |   |   |   |
| lotNo | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| postingDate | date |   |   |   |
| expirationDate | date |   |   |   |
| warrantyDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentNo | string |   |   |   |
| documentType | string |   |   |   |
| locationCode | string |   |   |   |
| jobNo | string |   |   |   |
| jobTaskNo | string |   |   |   |
| open | bool |   |   |   |
| quantity | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| remainingQuantity | float |   |   |   |
| invoicedQuantity | float |   |   |   |
| dimensionSetID | int |   |   |   |
| costAmountExpected | float |   |   |   |
| costAmountActual | float |   |   |   |
| costAmountNonInvtbl | float |   |   |   |
| purchaseAmountExpected | float |   |   |   |
| purchaseAmountActual | float |   |   |   |
| salesAmountExpected | float |   |   |   |
| salesAmountActual | float |   |   |   |
| itemDescription | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# ItemSalesAndProfit
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| itemDiscGroup | string |   |   |   |
| itemTrackingCode | string |   |   |   |
| profit | float |   |   |   |
| scrap | float |   |   |   |
| salesUnitOfMeasure | string |   |   |   |
| standardCost | float |   |   |   |
| unitCost | float |   |   |   |
| unitPrice | float |   |   |   |
| unitVolume | float |   |   |   |
| vendorNo | string |   |   |   |
| purchUnitOfMeasure | string |   |   |   |
| cOGSLCY | float |   |   |   |
| inventory | float |   |   |   |
| netChange | float |   |   |   |
| netInvoicedQty | float |   |   |   |
| purchasesLCY | float |   |   |   |
| purchasesQty | float |   |   |   |
| salesLCY | float |   |   |   |
| salesQty | float |   |   |   |
| vendorName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# ItemSalesByCustomer
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| documentNo | string |   |   |   |
| postingDate | date |   |   |   |
| itemNo | string |   |   |   |
| itemLedgerEntryQuantity | float |   |   |   |
| dimensionSetID | int |   |   |   |
| customerNo | string |   |   |   |
| name | string |   |   |   |
| description | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# JobLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| jobNo | string |   |   |   |
| jobTaskNo | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentNo | string |   |   |   |
| jobPostingGroup | string |   |   |   |
| resourceGroupNo | string |   |   |   |
| workTypeCode | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| locationCode | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| quantityBase | float |   |   |   |
| directUnitCostLCY | float |   |   |   |
| unitCostLCY | float |   |   |   |
| totalCostLCY | float |   |   |   |
| unitPriceLCY | float |   |   |   |
| totalPriceLCY | float |   |   |   |
| lineAmountLCY | float |   |   |   |
| dimensionSetID | int |   |   |   |
| jobDescription | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# JobList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |
| billToCustomerNo | string |   |   |   |
| status | string |   |   |   |
| personResponsible | string |   |   |   |
| nextInvoiceDate | date |   |   |   |
| jobPostingGroup | string |   |   |   |
| searchDescription | string |   |   |   |
| percentOfOverduePlanningLines | float |   |   |   |
| percentCompleted | float |   |   |   |
| percentInvoiced | float |   |   |   |
| projectManager | string |   |   |   |

# JobPlanningLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   |   |
| jobTaskNo | string |   |   |   |
| lineNo | int |   |   |   |
| lineType | string |   |   |   |
| usageLink | bool |   |   |   |
| planningDate | date |   |   |   |
| plannedDeliveryDate | date |   |   |   |
| currencyDate | date |   |   |   |
| documentNo | string |   |   |   |
| type | string |   |   |   |
| no | string |   |   |   |
| description | string |   |   |   |
| priceCalculationMethod | string |   |   |   |
| costCalculationMethod | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| variantCode | string |   |   |   |
| locationCode | string |   |   |   |
| workTypeCode | string |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| reserveName | string |   |   |   |
| quantity | float |   |   |   |
| reservedQuantity | float |   |   |   |
| quantityBase | float |   |   |   |
| remainingQty | float |   |   |   |
| directUnitCostLCY | float |   |   |   |
| unitCost | float |   |   |   |
| unitCostLCY | float |   |   |   |
| totalCost | float |   |   |   |
| remainingTotalCost | float |   |   |   |
| totalCostLCY | float |   |   |   |
| remainingTotalCostLCY | float |   |   |   |
| unitPrice | float |   |   |   |
| unitPriceLCY | float |   |   |   |
| lineAmount | float |   |   |   |
| remainingLineAmount | float |   |   |   |
| lineAmountLCY | float |   |   |   |
| remainingLineAmountLCY | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| totalPrice | float |   |   |   |
| totalPriceLCY | float |   |   |   |
| qtyPosted | float |   |   |   |
| qtyToTransferToJournal | float |   |   |   |
| postedTotalCost | float |   |   |   |
| postedTotalCostLCY | float |   |   |   |
| postedLineAmount | float |   |   |   |
| postedLineAmountLCY | float |   |   |   |
| qtyTransferredToInvoice | float |   |   |   |
| qtyToTransferToInvoice | float |   |   |   |
| qtyInvoiced | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| invoicedAmountLCY | float |   |   |   |
| invoicedCostAmountLCY | float |   |   |   |
| userID | string |   |   |   |
| serialNo | string |   |   |   |
| lotNo | string |   |   |   |
| jobContractEntryNo | int |   |   |   |
| ledgerEntryType | string |   |   |   |
| ledgerEntryNo | int |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| overdue | bool |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| jobTaskNoLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# JobTaskLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   |   |
| jobTaskNo | string |   |   |   |
| description | string |   |   |   |
| jobTaskType | string |   |   |   |
| totaling | string |   |   |   |
| jobPostingGroup | string |   |   |   |
| wIPTotal | string |   |   |   |
| wIPMethod | string |   |   |   |
| startDate | date |   |   |   |
| endDate | date |   |   |   |
| scheduleTotalCost | float |   |   |   |
| scheduleTotalPrice | float |   |   |   |
| usageTotalCost | float |   |   |   |
| usageTotalPrice | float |   |   |   |
| contractTotalCost | float |   |   |   |
| contractTotalPrice | float |   |   |   |
| contractInvoicedCost | float |   |   |   |
| contractInvoicedPrice | float |   |   |   |
| remainingTotalCost | float |   |   |   |
| remainingTotalPrice | float |   |   |   |
| eACTotalCost | float |   |   |   |
| eACTotalPrice | float |   |   |   |
| globalDimension1Code | string |   |   |   |
| globalDimension2Code | string |   |   |   |
| outstandingOrders | float |   |   |   |
| amtRcdNotInvoiced | float |   |   |   |
| planningDateFilter | string |   |   |   |
| postingDateFilter | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| totalingLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# Media
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | guid |   |   |   |
| description | string |   |   |   |
| content | string |   |   |   |
| mimeType | string |   |   |   |
| height | int |   |   |   |
| width | int |   |   |   |
| companyName | string |   |   |   |
| expirationDate | date |   |   |   |
| prohibitCache | bool |   |   |   |
| fileName | string |   |   |   |
| securityToken | string |   |   |   |
| creatingUser | string |   |   |   |

# PowerBIAgedAccPayable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| value | float |   |   |   |
| periodType | string |   |   |   |
| date | string |   |   |   |
| dateSorting | int |   |   |   |
| periodTypeSorting | int |   |   |   |

# PowerBIAgedAccReceivable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| value | float |   |   |   |
| periodType | string |   |   |   |
| date | string |   |   |   |
| measureName | string |   |   |   |
| dateSorting | int |   |   |   |
| periodTypeSorting | int |   |   |   |

# PowerBIAgedInventoryChart
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| value | float |   |   |   |
| date | string |   |   |   |
| periodType | string |   |   |   |
| periodTypeSorting | int |   |   |   |

# PowerBICustItemLedgEnt
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| itemNo | string |   |   |   |
| quantity | float |   |   |   |
| auxiliaryIndex1 | int |   |   |   |

# PowerBICustLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| dueDate | date |   |   |   |
| open | bool |   |   |   |
| customerPostingGroup | string |   |   |   |
| salesLCY | float |   |   |   |
| postingDate | date |   |   |   |
| remainingAmtLCY | float |   |   |   |

# PowerBICustomerList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| customerName | string |   |   |   |
| customerNo | string |   |   |   |
| creditLimit | float |   |   |   |
| balanceDue | float |   |   |   |
| postingDate | date |   |   |   |
| custLedgerEntryNo | int |   |   |   |
| amount | float |   |   |   |
| amountLCY | float |   |   |   |
| transactionNo | int |   |   |   |
| entryNo | int |   |   |   |

# PowerBIGLAmountList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| gLAccountNo | string |   |   |   |
| name | string |   |   |   |
| accountType | string |   |   |   |
| debitCredit | string |   |   |   |
| postingDate | date |   |   |   |
| amount | float |   |   |   |
| entryNo | int |   |   |   |

# PowerBIGLBudgetedAmount
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| gLAccountNo | string |   |   |   |
| name | string |   |   |   |
| accountType | string |   |   |   |
| debitCredit | string |   |   |   |
| amount | float |   |   |   |
| date | date |   |   |   |
| auxiliaryIndex1 | int |   |   |   |

# PowerBIItemPurchaseList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| itemNo | string |   |   |   |
| searchDescription | string |   |   |   |
| purchasePostDate | date |   |   |   |
| purchasedQuantity | float |   |   |   |
| purchaseEntryNo | int |   |   |   |

# PowerBIItemSalesList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| itemNo | string |   |   |   |
| searchDescription | string |   |   |   |
| salesPostDate | date |   |   |   |
| soldQuantity | float |   |   |   |
| salesEntryNo | int |   |   |   |

# PowerBIJobActVBudgCost
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| measureNo | string |   |   |   |
| measureName | string |   |   |   |
| value | float |   |   |   |

# PowerBIJobActVBudgPrice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| measureNo | string |   |   |   |
| measureName | string |   |   |   |
| value | float |   |   |   |

# PowerBIJobProfitability
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| measureNo | string |   |   |   |
| measureName | string |   |   |   |
| value | float |   |   |   |

# PowerBIJobsList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   |   |
| searchDescription | string |   |   |   |
| complete | bool |   |   |   |
| status | string |   |   |   |
| postingDate | date |   |   |   |
| totalCost | float |   |   |   |
| entryNo | int |   |   |   |
| entryType | string |   |   |   |

# PowerBIPurchaseHdrVendor
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| itemNo | string |   |   |   |
| quantity | float |   |   |   |
| baseUnitOfMeasure | string |   |   |   |
| description | string |   |   |   |
| unitPrice | float |   |   |   |
| inventory | float |   |   |   |
| qtyOnPurchOrder | float |   |   |   |
| vendorNo | string |   |   |   |
| name | string |   |   |   |
| countryRegionCode | string |   |   |   |
| balance | float |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |
| auxiliaryIndex3 | string |   |   |   |
| auxiliaryIndex4 | int |   |   |   |
| auxiliaryIndex5 | string |   |   |   |

# PowerBIPurchaseList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   |   |
| orderDate | date |   |   |   |
| expectedReceiptDate | date |   |   |   |
| dueDate | date |   |   |   |
| pmtDiscountDate | date |   |   |   |
| quantity | float |   |   |   |
| amount | float |   |   |   |
| itemNo | string |   |   |   |
| description | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |
| auxiliaryIndex3 | string |   |   |   |
| auxiliaryIndex4 | int |   |   |   |

# PowerBIReportLabels
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| labelID | string |   |   |   |
| textValue | string |   |   |   |

# PowerBISalesHdrCust
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| itemNo | string |   |   |   |
| quantity | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| qtyShippedBase | float |   |   |   |
| baseUnitOfMeasure | string |   |   |   |
| description | string |   |   |   |
| unitPrice | float |   |   |   |
| inventory | float |   |   |   |
| customerNo | string |   |   |   |
| name | string |   |   |   |
| countryRegionCode | string |   |   |   |
| balance | float |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |
| auxiliaryIndex3 | string |   |   |   |
| auxiliaryIndex4 | int |   |   |   |
| auxiliaryIndex5 | string |   |   |   |

# PowerBISalesList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| shipmentDate | date |   |   |   |
| dueDate | date |   |   |   |
| quantity | float |   |   |   |
| amount | float |   |   |   |
| itemNo | string |   |   |   |
| description | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |
| auxiliaryIndex3 | string |   |   |   |
| auxiliaryIndex4 | int |   |   |   |

# PowerBISalesPipeline
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| rowNo | string |   |   |   |
| value | float |   |   |   |
| measureName | string |   |   |   |
| measureNo | string |   |   |   |

# PowerBITop5Opportunities
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| measureNo | string |   |   |   |
| value | float |   |   |   |
| measureName | string |   |   |   |

# PowerBITopCustOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| postingDate | date |   |   |   |
| customerNo | string |   |   |   |
| salesLCY | float |   |   |   |
| name | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# PowerBIVendItemLedgEnt
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| itemNo | string |   |   |   |
| quantity | float |   |   |   |
| auxiliaryIndex1 | int |   |   |   |

# PowerBIVendorLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| dueDate | date |   |   |   |
| open | bool |   |   |   |
| remainingAmtLCY | float |   |   |   |

# PowerBIVendorList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| vendorNo | string |   |   |   |
| vendorName | string |   |   |   |
| balanceDue | float |   |   |   |
| postingDate | date |   |   |   |
| appliedVendLedgerEntryNo | int |   |   |   |
| amount | float |   |   |   |
| amountLCY | float |   |   |   |
| transactionNo | int |   |   |   |
| entryNo | int |   |   |   |
| remainingPmtDiscPossible | float |   |   |   |

# PowerBIWorkDateCalc
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| number | int |   |   |   |
| workDateNAV | date |   |   |   |

# ResLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| entryType | string |   |   |   |
| resourceNo | string |   |   |   |
| resourceGroupNo | string |   |   |   |
| jobNo | string |   |   |   |
| workTypeCode | string |   |   |   |
| postingDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentNo | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantity | float |   |   |   |
| quantityBase | float |   |   |   |
| directUnitCost | float |   |   |   |
| unitCost | float |   |   |   |
| totalCost | float |   |   |   |
| unitPrice | float |   |   |   |
| totalPrice | float |   |   |   |
| dimensionSetID | int |   |   |   |
| resourceName | string |   |   |   |
| resourceGroupName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |

# SalesDashboard
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| documentNo | string |   |   |   |
| postingDate | date |   |   |   |
| entryType | string |   |   |   |
| quantity | float |   |   |   |
| dimensionSetID | int |   |   |   |
| salesAmountActual | float |   |   |   |
| salesAmountExpected | float |   |   |   |
| costAmountActual | float |   |   |   |
| costAmountExpected | float |   |   |   |
| countryRegionName | string |   |   |   |
| customerName | string |   |   |   |
| customerPostingGroup | string |   |   |   |
| customerDiscGroup | string |   |   |   |
| city | string |   |   |   |
| description | string |   |   |   |
| salesPersonName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |
| auxiliaryIndex3 | string |   |   |   |
| auxiliaryIndex4 | string |   |   |   |

# SalesOpportunities
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   |   |
| description | string |   |   |   |
| creationDate | date |   |   |   |
| closed | bool |   |   |   |
| salesCycleCode | string |   |   |   |
| dateClosed | date |   |   |   |
| priority | string |   |   |   |
| status | string |   |   |   |
| calcdCurrentValueLCY | float |   |   |   |
| chancesOfSuccess | float |   |   |   |
| completed | float |   |   |   |
| contactName | string |   |   |   |
| estimatedClosingDate | date |   |   |   |
| salespersonName | string |   |   |   |
| estimatedValueLCY | float |   |   |   |
| contactCompanyName | string |   |   |   |

# SalesOrdersBySalesPerson
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| itemNo | string |   |   |   |
| itemDescription | string |   |   |   |
| documentNo | string |   |   |   |
| amount | float |   |   |   |
| lineNo | int |   |   |   |
| dimensionSetID | int |   |   |   |
| postingDate | date |   |   |   |
| currenyDescription | string |   |   |   |
| currencyCode | string |   |   |   |
| salesPersonCode | string |   |   |   |
| salesPersonName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |
| auxiliaryIndex3 | string |   |   |   |
| auxiliaryIndex4 | string |   |   |   |

# SegmentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| segmentNo | string |   |   |   |
| lineNo | int |   |   |   |
| contactNo | string |   |   |   |
| campaignNo | string |   |   |   |
| salespersonCode | string |   |   |   |
| correspondenceType | string |   |   |   |
| interactionTemplateCode | string |   |   |   |
| costLCY | float |   |   |   |
| durationMin | float |   |   |   |
| attachmentNo | int |   |   |   |
| campaignResponse | bool |   |   |   |
| informationFlow | string |   |   |   |
| initiatedBy | string |   |   |   |
| contactAltAddressCode | string |   |   |   |
| evaluation | string |   |   |   |
| campaignTarget | bool |   |   |   |
| languageCode | string |   |   |   |
| description | string |   |   |   |
| date | date |   |   |   |
| timeOfInteraction | string |   |   |   |
| attemptFailed | bool |   |   |   |
| toDoNo | string |   |   |   |
| contactCompanyNo | string |   |   |   |
| campaignEntryNo | int |   |   |   |
| interactionGroupCode | string |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| sendWordDocAsAttmt | bool |   |   |   |
| contactVia | string |   |   |   |
| versionNo | int |   |   |   |
| docNoOccurrence | int |   |   |   |
| subject | string |   |   |   |
| opportunityNo | string |   |   |   |
| wizardStep | string |   |   |   |
| wizardContactName | string |   |   |   |
| opportunityDescription | string |   |   |   |
| campaignDescription | string |   |   |   |
| interactionSuccessful | bool |   |   |   |
| dialContact | bool |   |   |   |
| mailContact | bool |   |   |   |
| contactName | string |   |   |   |
| contactCompanyName | string |   |   |   |

# TopCustomerOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| name | string |   |   |   |
| no | string |   |   |   |
| countryRegionCode | string |   |   |   |
| city | string |   |   |   |
| globalDimension1Code | string |   |   |   |
| globalDimension2Code | string |   |   |   |
| salespersonCode | string |   |   |   |
| salesLCY | float |   |   |   |
| profitLCY | float |   |   |   |
| salesPersonName | string |   |   |   |
| countryRegionName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |
| auxiliaryIndex2 | string |   |   |   |

# UserTaskSetComplete
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   |   |
| title | string |   |   |   |
| dueDateTime | date |   |   |   |
| priority | string |   |   |   |
| percentComplete | int |   |   |   |
| assignedToUserName | string |   |   |   |
| userTaskGroupAssignedTo | string |   |   |   |
| createdDateTime | date |   |   |   |
| completedDateTime | date |   |   |   |
| startDateTime | date |   |   |   |
| createdByUserName | string |   |   |   |
| completedByUserName | string |   |   |   |

## Actions

### SetComplete
No parameters
# ValueEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| itemNo | string |   |   |   |
| itemLedgerEntryNo | int |   |   |   |
| itemLedgerEntryType | string |   |   |   |
| itemLedgerEntryQuantity | float |   |   |   |
| postingDate | date |   |   |   |
| valuationDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| locationCode | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| jobNo | string |   |   |   |
| jobTaskNo | string |   |   |   |
| jobLedgerEntryNo | int |   |   |   |
| valuedQuantity | float |   |   |   |
| invoicedQuantity | float |   |   |   |
| costPerUnit | float |   |   |   |
| costPostedToGL | float |   |   |   |
| expectedCost | bool |   |   |   |
| costAmountActual | float |   |   |   |
| costAmountExpected | float |   |   |   |
| costAmountNonInvtbl | float |   |   |   |
| salesAmountActual | float |   |   |   |
| salesAmountExpected | float |   |   |   |
| purchaseAmountActual | float |   |   |   |
| purchaseAmountExpected | float |   |   |   |
| dimensionSetID | int |   |   |   |
| itemDescription | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# VendorLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   |   |
| transactionNo | int |   |   |   |
| vendorNo | string |   |   |   |
| postingDate | date |   |   |   |
| dueDate | date |   |   |   |
| pmtDiscountDate | date |   |   |   |
| documentDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNo | string |   |   |   |
| purchaserCode | string |   |   |   |
| sourceCode | string |   |   |   |
| reasonCode | string |   |   |   |
| iCPartnerCode | string |   |   |   |
| open | bool |   |   |   |
| currencyCode | string |   |   |   |
| dimensionSetID | int |   |   |   |
| amount | float |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| remainingAmount | float |   |   |   |
| amountLCY | float |   |   |   |
| debitAmountLCY | float |   |   |   |
| creditAmountLCY | float |   |   |   |
| remainingAmtLCY | float |   |   |   |
| originalAmtLCY | float |   |   |   |
| vendorName | string |   |   |   |
| auxiliaryIndex1 | string |   |   |   |

# InvoicingAttachment
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| documentId | guid |   |   |   |
| fileName | string |   |   |   |
| byteSize | int |   |   |   |
| content | string |   |   |   |
| base64Content | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |

## Actions

### Copy
No parameters
# InvoicingContact
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| number | string |   |   |   |
| xrmId | guid |   |   |   |
| displayName | string |   |   |   |
| phoneNumber | string |   |   |   |
| email | string |   |   |   |
| customerId | guid |   |   |   |

## Actions

### MakeCustomer
No parameters
# InvoicingCountryRegion
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| code | string |   |   |   |
| displayName | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingCustomer
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| graphContactId | string |   |   |   |
| contactId | guid |   |   |   |
| displayName | string |   |   |   |
| type | string |   |   |   |
| isBlocked | bool |   |   |   |
| address | postalAddressType |   |   |   |
| address.street | string |   |   |   |
| address.city | string |   |   |   |
| address.state | string |   |   |   |
| address.countryLetterCode | string |   |   |   |
| address.postalCode | string |   |   |   |
| phoneNumber | string |   |   |   |
| email | string |   |   |   |
| website | string |   |   |   |
| pricesIncludeTax | bool |   |   |   |
| taxLiable | bool |   |   |   |
| taxAreaId | guid |   |   |   |
| taxAreaDisplayName | string |   |   |   |
| taxRegistrationNumber | string |   |   |   |
| paymentTermsId | guid |   |   |   |
| shipmentMethodId | guid |   |   |   |
| paymentMethodId | guid |   |   |   |
| balance | float |   |   |   |
| overdueAmount | float |   |   |   |
| totalSalesExcludingTax | float |   |   |   |
| lastModifiedDateTime | date |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingCustomersCoupons | [InvoicingCustomersCoupon[]](#invoicingcustomerscoupon) | Yes |
# InvoicingCustomersCoupon
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| claimId | string |   |   |   |
| graphContactId | string |   |   |   |
| customerId | guid |   |   |   |
| usage | string |   |   |   |
| offer | string |   |   |   |
| terms | string |   |   |   |
| code | string |   |   |   |
| expiration | date |   |   |   |
| discountValue | float |   |   |   |
| discountType | string |   |   |   |
| createdDateTime | date |   |   |   |
| isValid | bool |   |   |   |
| status | string |   |   |   |
| amount | string |   |   |   |
| isApplied | bool |   |   |   |

# InvoicingEmailPreview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentId | guid |   |   |   |
| email | string |   |   |   |
| subject | string |   |   |   |
| body | string |   |   |   |
| bodyText | string |   |   |   |

# InvoicingEmailSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| recipientType | string |   |   |   |
| eMail | string |   |   |   |

# InvoicingExportInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| startDate | date |   |   |   |
| endDate | date |   |   |   |
| email | string |   |   |   |

# InvoicingGeneralSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| currencySymbol | string |   |   |   |
| paypalEmailAddress | string |   |   |   |
| countryRegionCode | string |   |   |   |
| languageId | int |   |   |   |
| languageCode | string |   |   |   |
| languageDisplayName | string |   |   |   |
| defaultTaxId | guid |   |   |   |
| defaultTaxDisplayName | string |   |   |   |
| defaultPaymentTermsId | guid |   |   |   |
| defaultPaymentTermsDisplayName | string |   |   |   |
| defaultPaymentMethodId | guid |   |   |   |
| defaultPaymentMethodDisplayName | string |   |   |   |
| amountRoundingPrecision | float |   |   |   |
| unitAmountRoundingPrecision | float |   |   |   |
| quantityRoundingPrecision | float |   |   |   |
| taxRoundingPrecision | float |   |   |   |
| draftInvoiceFileName | string |   |   |   |
| postedInvoiceFileName | string |   |   |   |
| quoteFileName | string |   |   |   |
| taxableGroupId | guid |   |   |   |
| nonTaxableGroupId | guid |   |   |   |
| enableSynchronization | bool |   |   |   |
| enableSyncCoupons | bool |   |   |   |
| updateVersion | string |   |   |   |

## Actions

### FixIntegrationRecordIDs
No parameters
### FixTemplates
No parameters
### SyncBizProfile
No parameters
# InvoicingItem
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| displayName | string |   |   |   |
| type | string |   |   |   |
| blocked | bool |   |   |   |
| baseUnitOfMeasureId | guid |   |   |   |
| baseUnitOfMeasureIntStdCode | string |   |   |   |
| baseUnitOfMeasureDescription | string |   |   |   |
| gtin | string |   |   |   |
| inventory | float |   |   |   |
| unitPrice | float |   |   |   |
| priceIncludesTax | bool |   |   |   |
| unitCost | float |   |   |   |
| taxGroupId | guid |   |   |   |
| taxGroupCode | string |   |   |   |
| taxable | bool |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingKPI
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| invoicedYearToDate | float |   |   |   |
| numberOfInvoicesYearToDate | int |   |   |   |
| invoicedCurrentMonth | float |   |   |   |
| salesInvoicesOutsdanding | float |   |   |   |
| salesInvoicesOverdue | float |   |   |   |
| numberOfQuotes | int |   |   |   |
| numberOfDraftInvoices | int |   |   |   |
| requestedDateTime | date |   |   |   |
| yTDDateFilter | string |   |   |   |

# InvoicingLanguage
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| languageId | int |   |   |   |
| languageCode | string |   |   |   |
| displayName | string |   |   |   |
| default | bool |   |   |   |

# InvoicingPDF
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentId | guid |   |   |   |
| fileName | string |   |   |   |
| content | string |   |   |   |

# InvoicingPaymentMethod
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| code | string |   |   |   |
| displayName | string |   |   |   |
| default | bool |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingPaymentTerm
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| code | string |   |   |   |
| displayName | string |   |   |   |
| dueDateCalculation | string |   |   |   |
| discountDateCalculation | string |   |   |   |
| discountPercent | float |   |   |   |
| calculateDiscountOnCreditMemos | bool |   |   |   |
| lastModifiedDateTime | date |   |   |   |
| default | bool |   |   |   |

# InvoicingQBOSyncAuth
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| key | int |   |   |   |
| authorizationUrl | string |   |   |   |

# InvoicingSMTPMailSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   |   |
| sMTPServer | string |   |   |   |
| authentication | string |   |   |   |
| userName | string |   |   |   |
| sMTPServerPort | int |   |   |   |
| secureConnection | bool |   |   |   |
| passWord | string |   |   |   |

# InvoicingSalesInvoiceOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| customerNumber | string |   |   |   |
| customerName | string |   |   |   |
| invoiceDate | date |   |   |   |
| dueDate | date |   |   |   |
| currencyCode | string |   |   |   |
| subtotalAmount | float |   |   |   |
| totalAmountExcludingTax | float |   |   |   |
| totalTaxAmount | float |   |   |   |
| totalAmountIncludingTax | float |   |   |   |
| status | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |
| isTest | bool |   |   |   |
| lastEmailSentStatus | string |   |   |   |

# InvoicingSalesInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| customerId | guid |   |   |   |
| graphContactId | string |   |   |   |
| customerNumber | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxAreaId | guid |   |   |   |
| taxAreaDisplayName | string |   |   |   |
| taxRegistrationNumber | string |   |   |   |
| customerName | string |   |   |   |
| customerEmail | string |   |   |   |
| invoiceDate | date |   |   |   |
| dueDate | date |   |   |   |
| billingPostalAddress | postalAddressType |   |   |   |
| billingPostalAddress.street | string |   |   |   |
| billingPostalAddress.city | string |   |   |   |
| billingPostalAddress.state | string |   |   |   |
| billingPostalAddress.countryLetterCode | string |   |   |   |
| billingPostalAddress.postalCode | string |   |   |   |
| pricesIncludeTax | bool |   |   |   |
| currencyCode | string |   |   |   |
| lines | array |   |   |   |
| lines.*.sequence | int |   | X |   |
| lines.*.itemId | guid |   | X |   |
| lines.*.description | string |   | X |   |
| lines.*.quantity | float |   | X |   |
| lines.*.unitPrice | float |   | X |   |
| lines.*.lineDiscountCalculation | string |   |   |   |
| lines.*.lineDiscountValue | float |   |   |   |
| lines.*.taxable | bool |   |   |   |
| lines.*.taxGroupId | guid |   | X |   |
| lines.*.lineAmount | float |   |   |   |
| lines.*.amountExcludingTax | float |   |   |   |
| lines.*.amountIncludingTax | float |   |   |   |
| lines.*.invoiceDiscountAmount | float |   |   |   |
| lines.*.taxPercent | float |   |   |   |
| lines.*.totalTaxAmount | float |   |   |   |
| subtotalAmount | float |   |   |   |
| discountAmount | float |   |   |   |
| discountAppliedBeforeTax | bool |   |   |   |
| coupons | array |   |   |   |
| coupons.*.claimId | string |   | X |   |
| coupons.*.usage | string |   |   |   |
| coupons.*.offer | string |   |   |   |
| coupons.*.terms | string |   |   |   |
| coupons.*.code | string |   |   |   |
| coupons.*.expiration | date |   |   |   |
| coupons.*.discountValue | float |   |   |   |
| coupons.*.discountType | string |   |   |   |
| coupons.*.amount | string |   |   |   |
| totalAmountExcludingTax | float |   |   |   |
| totalTaxAmount | float |   |   |   |
| totalAmountIncludingTax | float |   |   |   |
| noteForCustomer | string |   |   |   |
| status | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |
| attachments | array |   |   |   |
| attachments.*.id | guid | X | X |   |
| attachments.*.fileName | string |   |   |   |
| attachments.*.byteSize | int |   |   |   |
| invoiceDiscountCalculation | string |   |   |   |
| invoiceDiscountValue | float |   |   |   |
| remainingAmount | float |   |   |   |
| lastEmailSentStatus | string |   |   |   |
| lastEmailSentTime | date |   |   |   |
| isTest | bool |   |   |   |
| isCustomerBlocked | bool |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingSalesInvoicesPayments | [InvoicingSalesInvoicesPayment[]](#invoicingsalesinvoicespayment) | Yes |
## Actions

### CancelAndSend
No parameters
### Cancel
No parameters
### PostAndSend
No parameters
### Post
No parameters
### Send
No parameters
# InvoicingSalesInvoicesPayment
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| appliesToInvoiceId | guid |   |   |   |
| paymentNo | int |   |   |   |
| customerId | guid |   |   |   |
| paymentDate | date |   |   |   |
| amount | float |   |   |   |
| paymentMethodId | guid |   |   |   |

# InvoicingSalesQuote
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| quoteDate | date |   |   |   |
| dueDate | date |   |   |   |
| validUntilDate | date |   |   |   |
| status | string |   |   |   |
| accepted | bool |   |   |   |
| acceptedDate | date |   |   |   |
| customerId | guid |   |   |   |
| graphContactId | string |   |   |   |
| customerNumber | string |   |   |   |
| customerName | string |   |   |   |
| customerEmail | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxAreaId | guid |   |   |   |
| taxAreaDisplayName | string |   |   |   |
| taxRegistrationNumber | string |   |   |   |
| billingPostalAddress | postalAddressType |   |   |   |
| billingPostalAddress.street | string |   |   |   |
| billingPostalAddress.city | string |   |   |   |
| billingPostalAddress.state | string |   |   |   |
| billingPostalAddress.countryLetterCode | string |   |   |   |
| billingPostalAddress.postalCode | string |   |   |   |
| pricesIncludeTax | bool |   |   |   |
| shipmentMethod | string |   |   |   |
| salesperson | string |   |   |   |
| currencyCode | string |   |   |   |
| lines | array |   |   |   |
| lines.*.sequence | int |   | X |   |
| lines.*.itemId | guid |   | X |   |
| lines.*.description | string |   | X |   |
| lines.*.quantity | float |   | X |   |
| lines.*.unitPrice | float |   | X |   |
| lines.*.lineDiscountCalculation | string |   |   |   |
| lines.*.lineDiscountValue | float |   | X |   |
| lines.*.taxable | bool |   | X |   |
| lines.*.taxGroupId | guid |   | X |   |
| lines.*.lineAmount | float |   | X |   |
| lines.*.amountExcludingTax | float |   | X |   |
| lines.*.amountIncludingTax | float |   | X |   |
| lines.*.invoiceDiscountAmount | float |   | X |   |
| lines.*.taxPercent | float |   | X |   |
| lines.*.totalTaxAmount | float |   | X |   |
| subtotalAmount | float |   | X |   |
| discountAmount | float |   | X |   |
| discountAppliedBeforeTax | bool |   | X |   |
| coupons | array |   | X |   |
| coupons.*.claimId | string |   | X |   |
| coupons.*.usage | string |   |   |   |
| coupons.*.offer | string |   |   |   |
| coupons.*.terms | string |   |   |   |
| coupons.*.code | string |   |   |   |
| coupons.*.expiration | date |   |   |   |
| coupons.*.discountValue | float |   |   |   |
| coupons.*.discountType | string |   |   |   |
| coupons.*.amount | string |   |   |   |
| totalAmountExcludingTax | float |   |   |   |
| totalTaxAmount | float |   |   |   |
| totalAmountIncludingTax | float |   |   |   |
| noteForCustomer | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |
| attachments | array |   |   |   |
| attachments.*.id | guid | X | X |   |
| attachments.*.fileName | string |   |   |   |
| attachments.*.byteSize | int |   |   |   |
| invoiceDiscountCalculation | string |   |   |   |
| invoiceDiscountValue | float |   |   |   |
| lastEmailSentStatus | string |   |   |   |
| lastEmailSentTime | date |   |   |   |
| isCustomerBlocked | bool |   |   |   |

## Actions

### MakeInvoice
No parameters
### Send
No parameters
# InvoicingSalesTaxSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| displayName | string |   |   |   |
| default | bool |   |   |   |
| city | string |   |   |   |
| cityRate | float |   |   |   |
| state | string |   |   |   |
| stateRate | float |   |   |   |
| canadaGstHstDescription | string |   |   |   |
| canadaGstHstRate | float |   |   |   |
| canadaPstDescription | string |   |   |   |
| canadaPstRate | float |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingSyncServicesSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| key | int |   |   |   |
| qboSyncTitle | string |   |   |   |
| qboSyncDescription | string |   |   |   |
| qboSyncEnabled | bool |   |   |   |
| qbdSyncTitle | string |   |   |   |
| qbdSyncDescription | string |   |   |   |
| qbdSyncEnabled | bool |   |   |   |
| qbdSyncSendToEmail | string |   |   |   |

## Actions

### SendInstructionsByEmail
No parameters
# InvoicingTaxArea
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| code | string |   |   |   |
| displayName | string |   |   |   |
| taxType | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingTaxGroup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| code | string |   |   |   |
| displayName | string |   |   |   |
| taxType | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingTaxRate
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| taxAreaId | guid |   |   |   |
| taxGroupId | guid |   |   |   |
| taxRate | float |   |   |   |

# InvoicingTestMail
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   |   |
| email | string |   |   |   |

# InvoicingUnitsOfMeasure
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| code | string |   |   |   |
| displayName | string |   |   |   |
| internationalStandardCode | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# InvoicingVATSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| default | bool |   |   |   |
| displayName | string |   |   |   |
| vatPercentage | float |   |   |   |
| vatRegulationDescription | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |

# Powerbifinance
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | int |   |   |   |
| date | date |   |   |   |
| closedPeriod | bool |   |   |   |
| accountScheduleName | string |   |   |   |
| kPICode | string |   |   |   |
| kPIName | string |   |   |   |
| netChangeActual | float |   |   |   |
| balanceAtDateActual | float |   |   |   |
| netChangeBudget | float |   |   |   |
| balanceAtDateBudget | float |   |   |   |
| netChangeActualLastYear | float |   |   |   |
| balanceAtDateActualLastYear | float |   |   |   |
| netChangeBudgetLastYear | float |   |   |   |
| balanceAtDateBudgetLastYear | float |   |   |   |
| netChangeForecast | float |   |   |   |
| balanceAtDateForecast | float |   |   |   |

# PurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| buyFromVendorNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| expectedReceiptDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToReceive | float |   |   |   |
| directUnitCost | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| unitPriceLcy | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| jobNumber | string |   |   |   |
| indirectCostPercent | float |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyRcdNotInvoiced | float |   |   |   |
| amtRcdNotInvoiced | float |   |   |   |
| quantityReceived | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| receiptNumber | string |   |   |   |
| receiptLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| payToVendorNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| vendorItemNumber | string |   |   |   |
| salesOrderNumber | string |   |   |   |
| salesOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| entryPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| useTax | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| reservedQuantity | float |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| outstandingAmtExVatLcy | float |   |   |   |
| aRcdNotInvExVatLcy | float |   |   |   |
| dimensionSetId | int |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobLineType | string |   |   |   |
| jobUnitPrice | float |   |   |   |
| jobTotalPrice | float |   |   |   |
| jobLineAmount | float |   |   |   |
| jobLineDiscountAmount | float |   |   |   |
| jobLineDiscountPercent | float |   |   |   |
| jobUnitPriceLcy | float |   |   |   |
| jobTotalPriceLcy | float |   |   |   |
| jobLineAmountLcy | float |   |   |   |
| jobLineDiscAmountLcy | float |   |   |   |
| jobCurrencyFactor | float |   |   |   |
| jobCurrencyCode | string |   |   |   |
| jobPlanningLineNumber | int |   |   |   |
| jobRemainingQty | float |   |   |   |
| jobRemainingQtyBase | float |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| prodOrderNumber | string |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToReceiveBase | float |   |   |   |
| qtyRcdNotInvoicedBase | float |   |   |   |
| qtyReceivedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| faPostingType | string |   |   |   |
| depreciationBookCode | string |   |   |   |
| salvageValue | float |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| deprAcquisitionCost | bool |   |   |   |
| maintenanceCode | string |   |   |   |
| insuranceNumber | string |   |   |   |
| budgetedFaNumber | string |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderSalesNumber | string |   |   |   |
| specialOrderSalesLineNumber | int |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyReceived | bool |   |   |   |
| requestedReceiptDate | date |   |   |   |
| promisedReceiptDate | date |   |   |   |
| leadTimeCalculation | string |   |   |   |
| inboundWhseHandlingTime | string |   |   |   |
| plannedReceiptDate | date |   |   |   |
| orderDate | date |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToShip | float |   |   |   |
| returnQtyToShipBase | float |   |   |   |
| returnQtyShippedNotInvd | float |   |   |   |
| retQtyShpdNotInvdBase | float |   |   |   |
| returnShpdNotInvd | float |   |   |   |
| returnShpdNotInvdLcy | float |   |   |   |
| returnQtyShipped | float |   |   |   |
| returnQtyShippedBase | float |   |   |   |
| returnShipmentNumber | string |   |   |   |
| returnShipmentLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| subtype | string |   |   |   |
| routingNumber | string |   |   |   |
| operationNumber | string |   |   |   |
| workCenterNumber | string |   |   |   |
| finished | bool |   |   |   |
| prodOrderLineNumber | int |   |   |   |
| overheadRate | float |   |   |   |
| mpsOrder | bool |   |   |   |
| planningFlexibility | string |   |   |   |
| safetyLeadTime | string |   |   |   |
| routingReferenceNumber | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# PurchaseDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| documentType | string |   |   |   |
| buyFromVendorNumber | string |   |   |   |
| number | string |   |   |   |
| payToVendorNumber | string |   |   |   |
| payToName | string |   |   |   |
| payToName2 | string |   |   |   |
| payToAddress | string |   |   |   |
| payToAddress2 | string |   |   |   |
| payToCity | string |   |   |   |
| payToContact | string |   |   |   |
| yourReference | string |   |   |   |
| shipToCode | string |   |   |   |
| shipToName | string |   |   |   |
| shipToName2 | string |   |   |   |
| shipToAddress | string |   |   |   |
| shipToAddress2 | string |   |   |   |
| shipToCity | string |   |   |   |
| shipToContact | string |   |   |   |
| orderDate | date |   |   |   |
| postingDate | date |   |   |   |
| expectedReceiptDate | date |   |   |   |
| postingDescription | string |   |   |   |
| paymentTermsCode | string |   |   |   |
| dueDate | date |   |   |   |
| paymentDiscountPercent | float |   |   |   |
| pmtDiscountDate | date |   |   |   |
| shipmentMethodCode | string |   |   |   |
| locationCode | string |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| vendorPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| currencyFactor | float |   |   |   |
| pricesIncludingVat | bool |   |   |   |
| invoiceDiscCode | string |   |   |   |
| languageCode | string |   |   |   |
| purchaserCode | string |   |   |   |
| orderClass | string |   |   |   |
| comment | bool |   |   |   |
| numberPrinted | int |   |   |   |
| onHold | string |   |   |   |
| appliesToDocType | string |   |   |   |
| appliesToDocNumber | string |   |   |   |
| balAccountNumber | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| receive | bool |   |   |   |
| invoice | bool |   |   |   |
| printPostedDocuments | bool |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| receivingNumber | string |   |   |   |
| postingNumber | string |   |   |   |
| lastReceivingNumber | string |   |   |   |
| lastPostingNumber | string |   |   |   |
| vendorOrderNumber | string |   |   |   |
| vendorShipmentNumber | string |   |   |   |
| vendorInvoiceNumber | string |   |   |   |
| vendorCrMemoNumber | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| reasonCode | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| vatCountryRegionCode | string |   |   |   |
| buyFromVendorName | string |   |   |   |
| buyFromVendorName2 | string |   |   |   |
| buyFromAddress | string |   |   |   |
| buyFromAddress2 | string |   |   |   |
| buyFromCity | string |   |   |   |
| buyFromContact | string |   |   |   |
| payToPostCode | string |   |   |   |
| payToCounty | string |   |   |   |
| payToCountryRegionCode | string |   |   |   |
| buyFromPostCode | string |   |   |   |
| buyFromCounty | string |   |   |   |
| buyFromCountryRegionCode | string |   |   |   |
| shipToPostCode | string |   |   |   |
| shipToCounty | string |   |   |   |
| shipToCountryRegionCode | string |   |   |   |
| balAccountType | string |   |   |   |
| orderAddressCode | string |   |   |   |
| entryPoint | string |   |   |   |
| correction | bool |   |   |   |
| documentDate | date |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| paymentMethodCode | string |   |   |   |
| numberSeries | string |   |   |   |
| postingNumberSeries | string |   |   |   |
| receivingNumberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| appliesToId | string |   |   |   |
| vatBaseDiscountPercent | float |   |   |   |
| status | string |   |   |   |
| invoiceDiscountCalculation | string |   |   |   |
| invoiceDiscountValue | float |   |   |   |
| sendIcDocument | bool |   |   |   |
| icStatus | string |   |   |   |
| buyFromIcPartnerCode | string |   |   |   |
| payToIcPartnerCode | string |   |   |   |
| icDirection | string |   |   |   |
| prepaymentNumber | string |   |   |   |
| lastPrepaymentNumber | string |   |   |   |
| prepmtCrMemoNumber | string |   |   |   |
| lastPrepmtCrMemoNumber | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepaymentNumberSeries | string |   |   |   |
| compressPrepayment | bool |   |   |   |
| prepaymentDueDate | date |   |   |   |
| prepmtCrMemoNumberSeries | string |   |   |   |
| prepmtPostingDescription | string |   |   |   |
| prepmtPmtDiscountDate | date |   |   |   |
| prepmtPaymentTermsCode | string |   |   |   |
| prepmtPaymentDiscountPercent | float |   |   |   |
| quoteNumber | string |   |   |   |
| jobQueueStatus | string |   |   |   |
| jobQueueEntryId | guid |   |   |   |
| incomingDocumentEntryNumber | int |   |   |   |
| creditorNumber | string |   |   |   |
| paymentReference | string |   |   |   |
| aRcdNotInvExVatLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| dimensionSetId | int |   |   |   |
| invoiceDiscountAmount | float |   |   |   |
| numberOfArchivedVersions | int |   |   |   |
| docNumberOccurrence | int |   |   |   |
| campaignNumber | string |   |   |   |
| buyFromContactNumber | string |   |   |   |
| payToContactNumber | string |   |   |   |
| responsibilityCenter | string |   |   |   |
| completelyReceived | bool |   |   |   |
| postingFromWhseRef | int |   |   |   |
| locationFilter | string |   |   |   |
| requestedReceiptDate | date |   |   |   |
| promisedReceiptDate | date |   |   |   |
| leadTimeCalculation | string |   |   |   |
| inboundWhseHandlingTime | string |   |   |   |
| vendorAuthorizationNumber | string |   |   |   |
| returnShipmentNumber | string |   |   |   |
| returnShipmentNumberSeries | string |   |   |   |
| ship | bool |   |   |   |
| lastReturnShipmentNumber | string |   |   |   |
| assignedUserId | string |   |   |   |
| pendingApprovals | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseDocumentsworkflowPurchaseDocumentLines | [PurchaseDocumentsworkflowPurchaseDocumentLines[]](#purchasedocumentsworkflowpurchasedocumentlines) | Yes |
# PurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| buyFromVendorNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| expectedReceiptDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToReceive | float |   |   |   |
| directUnitCost | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| unitPriceLcy | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| jobNumber | string |   |   |   |
| indirectCostPercent | float |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyRcdNotInvoiced | float |   |   |   |
| amtRcdNotInvoiced | float |   |   |   |
| quantityReceived | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| receiptNumber | string |   |   |   |
| receiptLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| payToVendorNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| vendorItemNumber | string |   |   |   |
| salesOrderNumber | string |   |   |   |
| salesOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| entryPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| useTax | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| reservedQuantity | float |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| outstandingAmtExVatLcy | float |   |   |   |
| aRcdNotInvExVatLcy | float |   |   |   |
| dimensionSetId | int |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobLineType | string |   |   |   |
| jobUnitPrice | float |   |   |   |
| jobTotalPrice | float |   |   |   |
| jobLineAmount | float |   |   |   |
| jobLineDiscountAmount | float |   |   |   |
| jobLineDiscountPercent | float |   |   |   |
| jobUnitPriceLcy | float |   |   |   |
| jobTotalPriceLcy | float |   |   |   |
| jobLineAmountLcy | float |   |   |   |
| jobLineDiscAmountLcy | float |   |   |   |
| jobCurrencyFactor | float |   |   |   |
| jobCurrencyCode | string |   |   |   |
| jobPlanningLineNumber | int |   |   |   |
| jobRemainingQty | float |   |   |   |
| jobRemainingQtyBase | float |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| prodOrderNumber | string |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToReceiveBase | float |   |   |   |
| qtyRcdNotInvoicedBase | float |   |   |   |
| qtyReceivedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| faPostingType | string |   |   |   |
| depreciationBookCode | string |   |   |   |
| salvageValue | float |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| deprAcquisitionCost | bool |   |   |   |
| maintenanceCode | string |   |   |   |
| insuranceNumber | string |   |   |   |
| budgetedFaNumber | string |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderSalesNumber | string |   |   |   |
| specialOrderSalesLineNumber | int |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyReceived | bool |   |   |   |
| requestedReceiptDate | date |   |   |   |
| promisedReceiptDate | date |   |   |   |
| leadTimeCalculation | string |   |   |   |
| inboundWhseHandlingTime | string |   |   |   |
| plannedReceiptDate | date |   |   |   |
| orderDate | date |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToShip | float |   |   |   |
| returnQtyToShipBase | float |   |   |   |
| returnQtyShippedNotInvd | float |   |   |   |
| retQtyShpdNotInvdBase | float |   |   |   |
| returnShpdNotInvd | float |   |   |   |
| returnShpdNotInvdLcy | float |   |   |   |
| returnQtyShipped | float |   |   |   |
| returnQtyShippedBase | float |   |   |   |
| returnShipmentNumber | string |   |   |   |
| returnShipmentLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| subtype | string |   |   |   |
| routingNumber | string |   |   |   |
| operationNumber | string |   |   |   |
| workCenterNumber | string |   |   |   |
| finished | bool |   |   |   |
| prodOrderLineNumber | int |   |   |   |
| overheadRate | float |   |   |   |
| mpsOrder | bool |   |   |   |
| planningFlexibility | string |   |   |   |
| safetyLeadTime | string |   |   |   |
| routingReferenceNumber | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| shipmentDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToShip | float |   |   |   |
| unitPrice | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| customerPriceGroup | string |   |   |   |
| jobNumber | string |   |   |   |
| workTypeCode | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyShippedNotInvoiced | float |   |   |   |
| shippedNotInvoiced | float |   |   |   |
| quantityShipped | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| shipmentNumber | string |   |   |   |
| shipmentLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| billToCustomerNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| purchaseOrderNumber | string |   |   |   |
| purchOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| exitPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxCategory | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| vatClauseCode | string |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| shippedNotInvoicedLcy | float |   |   |   |
| shippedNotInvLcyNoVat | float |   |   |   |
| reservedQuantity | float |   |   |   |
| reserve | string |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| dimensionSetId | int |   |   |   |
| qtyToAssembleToOrder | float |   |   |   |
| qtyToAsmToOrderBase | float |   |   |   |
| atoWhseOutstandingQty | float |   |   |   |
| atoWhseOutstdQtyBase | float |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobContractEntryNumber | int |   |   |   |
| postingDate | date |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| planned | bool |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToShipBase | float |   |   |   |
| qtyShippedNotInvdBase | float |   |   |   |
| qtyShippedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| depreciationBookCode | string |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| outOfStockSubstitution | bool |   |   |   |
| substitutionAvailable | bool |   |   |   |
| originallyOrderedNumber | string |   |   |   |
| originallyOrderedVarCode | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderPurchaseNumber | string |   |   |   |
| specialOrderPurchLineNumber | int |   |   |   |
| whseOutstandingQty | float |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyShipped | bool |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| promisedDeliveryDate | date |   |   |   |
| shippingTime | string |   |   |   |
| outboundWhseHandlingTime | string |   |   |   |
| plannedDeliveryDate | date |   |   |   |
| plannedShipmentDate | date |   |   |   |
| shippingAgentCode | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToReceive | float |   |   |   |
| returnQtyToReceiveBase | float |   |   |   |
| returnQtyRcdNotInvd | float |   |   |   |
| retQtyRcdNotInvdBase | float |   |   |   |
| returnRcdNotInvd | float |   |   |   |
| returnRcdNotInvdLcy | float |   |   |   |
| returnQtyReceived | float |   |   |   |
| returnQtyReceivedBase | float |   |   |   |
| applFromItemEntry | int |   |   |   |
| bomItemNumber | string |   |   |   |
| returnReceiptNumber | string |   |   |   |
| returnReceiptLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| allowLineDisc | bool |   |   |   |
| customerDiscGroup | string |   |   |   |
| subtype | string |   |   |   |
| priceDescription | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| documentType | string |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| number | string |   |   |   |
| billToCustomerNumber | string |   |   |   |
| billToName | string |   |   |   |
| billToName2 | string |   |   |   |
| billToAddress | string |   |   |   |
| billToAddress2 | string |   |   |   |
| billToCity | string |   |   |   |
| billToContact | string |   |   |   |
| yourReference | string |   |   |   |
| shipToCode | string |   |   |   |
| shipToName | string |   |   |   |
| shipToName2 | string |   |   |   |
| shipToAddress | string |   |   |   |
| shipToAddress2 | string |   |   |   |
| shipToCity | string |   |   |   |
| shipToContact | string |   |   |   |
| orderDate | date |   |   |   |
| postingDate | date |   |   |   |
| shipmentDate | date |   |   |   |
| postingDescription | string |   |   |   |
| paymentTermsCode | string |   |   |   |
| dueDate | date |   |   |   |
| paymentDiscountPercent | float |   |   |   |
| pmtDiscountDate | date |   |   |   |
| shipmentMethodCode | string |   |   |   |
| locationCode | string |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| customerPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| currencyFactor | float |   |   |   |
| customerPriceGroup | string |   |   |   |
| pricesIncludingVat | bool |   |   |   |
| invoiceDiscCode | string |   |   |   |
| customerDiscGroup | string |   |   |   |
| languageCode | string |   |   |   |
| salespersonCode | string |   |   |   |
| orderClass | string |   |   |   |
| comment | bool |   |   |   |
| numberPrinted | int |   |   |   |
| onHold | string |   |   |   |
| appliesToDocType | string |   |   |   |
| appliesToDocNumber | string |   |   |   |
| balAccountNumber | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| ship | bool |   |   |   |
| invoice | bool |   |   |   |
| printPostedDocuments | bool |   |   |   |
| amount | float |   |   |   |
| amountIncludingVAT | float |   |   |   |
| shippingNumber | string |   |   |   |
| postingNumber | string |   |   |   |
| lastShippingNumber | string |   |   |   |
| lastPostingNumber | string |   |   |   |
| prepaymentNumber | string |   |   |   |
| lastPrepaymentNumber | string |   |   |   |
| premptCrMemoNumber | string |   |   |   |
| lastPremtCrMemoNumber | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| combineShipments | bool |   |   |   |
| reasonCode | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| eu3PartyTrade | bool |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| vatCountryRegionCode | string |   |   |   |
| sellToCustomerName | string |   |   |   |
| sellToCustomerName2 | string |   |   |   |
| sellToAddress | string |   |   |   |
| sellToAddress2 | string |   |   |   |
| sellToCity | string |   |   |   |
| sellToContact | string |   |   |   |
| billToPostCode | string |   |   |   |
| billToCounty | string |   |   |   |
| billToCountryRegionCode | string |   |   |   |
| sellToPostCode | string |   |   |   |
| sellToCounty | string |   |   |   |
| sellToCountryRegionCode | string |   |   |   |
| shipToPostCode | string |   |   |   |
| shipToCounty | string |   |   |   |
| shipToCountryRegionCode | string |   |   |   |
| balAccountType | string |   |   |   |
| exitPoint | string |   |   |   |
| correction | bool |   |   |   |
| documentDate | date |   |   |   |
| externalDocumentNumber | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| paymentMethodCode | string |   |   |   |
| shippingAgentCode | string |   |   |   |
| packageTrackingNumber | string |   |   |   |
| numberSeries | string |   |   |   |
| postingNumberSeries | string |   |   |   |
| shippingNumberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| reserve | string |   |   |   |
| appliesToId | string |   |   |   |
| vatBaseDiscountPercent | float |   |   |   |
| status | string |   |   |   |
| invoiceDiscountCalculation | string |   |   |   |
| invoiceDiscountValue | float |   |   |   |
| sendIcDocument | bool |   |   |   |
| icStatus | string |   |   |   |
| sellToIcPartnerCode | string |   |   |   |
| billToIcPartnerCode | string |   |   |   |
| icDirection | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepaymentNumberSeries | string |   |   |   |
| compressPrepayment | bool |   |   |   |
| prepaymentDueDate | date |   |   |   |
| prepmtCrMemoNumberSeries | string |   |   |   |
| prepmtPostingDescription | string |   |   |   |
| prepmtPmtDiscountDate | date |   |   |   |
| prepmtPaymentTermsCode | string |   |   |   |
| prepmtPaymentDiscountPercent | float |   |   |   |
| quoteNumber | string |   |   |   |
| quoteValidUntilDate | date |   |   |   |
| quoteSentToCustomer | date |   |   |   |
| quoteAccepted | bool |   |   |   |
| quoteAcceptedDate | date |   |   |   |
| jobQueueStatus | string |   |   |   |
| jobQueueEntryId | guid |   |   |   |
| incomingDocumentEntryNumber | int |   |   |   |
| workDescription | string |   |   |   |
| amountShippedNotInvoicedInclVat | float |   |   |   |
| amountShippedNotInvoiced | float |   |   |   |
| dimensionSetId | int |   |   |   |
| paymentServiceSetId | int |   |   |   |
| directDebitMandateId | string |   |   |   |
| invoiceDiscountAmount | float |   |   |   |
| numberOfArchivedVersions | int |   |   |   |
| docNumberOccurrence | int |   |   |   |
| campaignNumber | string |   |   |   |
| sellToCustomerTemplateCode | string |   |   |   |
| sellToContactNumber | string |   |   |   |
| billToContactNumber | string |   |   |   |
| billToCustomerTemplateCode | string |   |   |   |
| opportunityNumber | string |   |   |   |
| responsibilityCenter | string |   |   |   |
| shippingAdvice | string |   |   |   |
| shippedNotInvoiced | bool |   |   |   |
| completelyShipped | bool |   |   |   |
| postingFromWhseRef | int |   |   |   |
| locationFilter | string |   |   |   |
| shipped | bool |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| promisedDeliveryDate | date |   |   |   |
| shippingTime | string |   |   |   |
| outboundWhseHandlingTime | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| lateOrderShipping | bool |   |   |   |
| receive | bool |   |   |   |
| returnReceiptNumber | string |   |   |   |
| returnReceiptNumberSeries | string |   |   |   |
| lastReturnReceiptNumber | string |   |   |   |
| allowLineDisc | bool |   |   |   |
| getShipmentUsed | bool |   |   |   |
| assignedUserId | string |   |   |   |
| dateFilter | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesDocumentsworkflowSalesDocumentLines | [SalesDocumentsworkflowSalesDocumentLines[]](#salesdocumentsworkflowsalesdocumentlines) | Yes |
# SalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| shipmentDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToShip | float |   |   |   |
| unitPrice | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| customerPriceGroup | string |   |   |   |
| jobNumber | string |   |   |   |
| workTypeCode | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyShippedNotInvoiced | float |   |   |   |
| shippedNotInvoiced | float |   |   |   |
| quantityShipped | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| shipmentNumber | string |   |   |   |
| shipmentLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| billToCustomerNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| purchaseOrderNumber | string |   |   |   |
| purchOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| exitPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxCategory | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| vatClauseCode | string |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| shippedNotInvoicedLcy | float |   |   |   |
| shippedNotInvLcyNoVat | float |   |   |   |
| reservedQuantity | float |   |   |   |
| reserve | string |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| dimensionSetId | int |   |   |   |
| qtyToAssembleToOrder | float |   |   |   |
| qtyToAsmToOrderBase | float |   |   |   |
| atoWhseOutstandingQty | float |   |   |   |
| atoWhseOutstdQtyBase | float |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobContractEntryNumber | int |   |   |   |
| postingDate | date |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| planned | bool |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToShipBase | float |   |   |   |
| qtyShippedNotInvdBase | float |   |   |   |
| qtyShippedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| depreciationBookCode | string |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| outOfStockSubstitution | bool |   |   |   |
| substitutionAvailable | bool |   |   |   |
| originallyOrderedNumber | string |   |   |   |
| originallyOrderedVarCode | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderPurchaseNumber | string |   |   |   |
| specialOrderPurchLineNumber | int |   |   |   |
| whseOutstandingQty | float |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyShipped | bool |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| promisedDeliveryDate | date |   |   |   |
| shippingTime | string |   |   |   |
| outboundWhseHandlingTime | string |   |   |   |
| plannedDeliveryDate | date |   |   |   |
| plannedShipmentDate | date |   |   |   |
| shippingAgentCode | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToReceive | float |   |   |   |
| returnQtyToReceiveBase | float |   |   |   |
| returnQtyRcdNotInvd | float |   |   |   |
| retQtyRcdNotInvdBase | float |   |   |   |
| returnRcdNotInvd | float |   |   |   |
| returnRcdNotInvdLcy | float |   |   |   |
| returnQtyReceived | float |   |   |   |
| returnQtyReceivedBase | float |   |   |   |
| applFromItemEntry | int |   |   |   |
| bomItemNumber | string |   |   |   |
| returnReceiptNumber | string |   |   |   |
| returnReceiptLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| allowLineDisc | bool |   |   |   |
| customerDiscGroup | string |   |   |   |
| subtype | string |   |   |   |
| priceDescription | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowCustomers
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| name | string |   |   |   |
| searchName | string |   |   |   |
| name2 | string |   |   |   |
| address | string |   |   |   |
| address2 | string |   |   |   |
| city | string |   |   |   |
| contact | string |   |   |   |
| phoneNumber | string |   |   |   |
| telexNumber | string |   |   |   |
| documentSendingProfile | string |   |   |   |
| ourAccountNumber | string |   |   |   |
| territoryCode | string |   |   |   |
| globalDimension1Code | string |   |   |   |
| globalDimension2Code | string |   |   |   |
| chainName | string |   |   |   |
| budgetedAmount | float |   |   |   |
| creditLimitLcy | float |   |   |   |
| customerPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| customerPriceGroup | string |   |   |   |
| languageCode | string |   |   |   |
| statisticsGroup | int |   |   |   |
| paymentTermsCode | string |   |   |   |
| finChargeTermsCode | string |   |   |   |
| salespersonCode | string |   |   |   |
| shipmentMethodCode | string |   |   |   |
| shippingAgentCode | string |   |   |   |
| placeOfExport | string |   |   |   |
| invoiceDiscCode | string |   |   |   |
| customerDiscGroup | string |   |   |   |
| countryRegionCode | string |   |   |   |
| collectionMethod | string |   |   |   |
| amount | float |   |   |   |
| comment | bool |   |   |   |
| blocked | string |   |   |   |
| invoiceCopies | int |   |   |   |
| lastStatementNumber | int |   |   |   |
| printStatements | bool |   |   |   |
| billToCustomerNumber | string |   |   |   |
| priority | int |   |   |   |
| paymentMethodCode | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |
| lastDateModified | date |   |   |   |
| dateFilter | string |   |   |   |
| globalDimension1Filter | string |   |   |   |
| globalDimension2Filter | string |   |   |   |
| balance | float |   |   |   |
| balanceLcy | float |   |   |   |
| netChange | float |   |   |   |
| netChangeLcy | float |   |   |   |
| salesLcy | float |   |   |   |
| profitLcy | float |   |   |   |
| invDiscountsLcy | float |   |   |   |
| pmtDiscountsLcy | float |   |   |   |
| balanceDue | float |   |   |   |
| balanceDueLcy | float |   |   |   |
| payments | float |   |   |   |
| invoiceAmounts | float |   |   |   |
| crMemoAmounts | float |   |   |   |
| financeChargeMemoAmounts | float |   |   |   |
| paymentsLcy | float |   |   |   |
| invAmountsLcy | float |   |   |   |
| crMemoAmountsLcy | float |   |   |   |
| finChargeMemoAmountsLcy | float |   |   |   |
| outstandingOrders | float |   |   |   |
| shippedNotInvoiced | float |   |   |   |
| applicationMethod | string |   |   |   |
| pricesIncludingVat | bool |   |   |   |
| locationCode | string |   |   |   |
| faxNumber | string |   |   |   |
| telexAnswerBack | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| combineShipments | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| gln | string |   |   |   |
| postCode | string |   |   |   |
| county | string |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| debitAmountLcy | float |   |   |   |
| creditAmountLcy | float |   |   |   |
| eMail | string |   |   |   |
| homePage | string |   |   |   |
| reminderTermsCode | string |   |   |   |
| reminderAmounts | float |   |   |   |
| reminderAmountsLcy | float |   |   |   |
| numberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| currencyFilter | string |   |   |   |
| outstandingOrdersLcy | float |   |   |   |
| shippedNotInvoicedLcy | float |   |   |   |
| reserve | string |   |   |   |
| blockPaymentTolerance | bool |   |   |   |
| pmtDiscToleranceLcy | float |   |   |   |
| pmtToleranceLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| refunds | float |   |   |   |
| refundsLcy | float |   |   |   |
| otherAmounts | float |   |   |   |
| otherAmountsLcy | float |   |   |   |
| prepaymentPercent | float |   |   |   |
| outstandingInvoicesLcy | float |   |   |   |
| outstandingInvoices | float |   |   |   |
| billToNumberOfArchivedDoc | int |   |   |   |
| sellToNumberOfArchivedDoc | int |   |   |   |
| partnerType | string |   |   |   |
| preferredBankAccountCode | string |   |   |   |
| cashFlowPaymentTermsCode | string |   |   |   |
| primaryContactNumber | string |   |   |   |
| contactType | string |   |   |   |
| responsibilityCenter | string |   |   |   |
| shippingAdvice | string |   |   |   |
| shippingTime | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| serviceZoneCode | string |   |   |   |
| contractGainLossAmount | float |   |   |   |
| shipToFilter | string |   |   |   |
| outstandingServOrdersLcy | float |   |   |   |
| servShippedNotInvoicedLcy | float |   |   |   |
| outstandingServInvoicesLcy | float |   |   |   |
| allowLineDisc | bool |   |   |   |
| numberOfQuotes | int |   |   |   |
| numberOfBlanketOrders | int |   |   |   |
| numberOfOrders | int |   |   |   |
| numberOfInvoices | int |   |   |   |
| numberOfReturnOrders | int |   |   |   |
| numberOfCreditMemos | int |   |   |   |
| numberOfPstdShipments | int |   |   |   |
| numberOfPstdInvoices | int |   |   |   |
| numberOfPstdReturnReceipts | int |   |   |   |
| numberOfPstdCreditMemos | int |   |   |   |
| numberOfShipToAddresses | int |   |   |   |
| billToNumberOfQuotes | int |   |   |   |
| billToNumberOfBlanketOrders | int |   |   |   |
| billToNumberOfOrders | int |   |   |   |
| billToNumberOfInvoices | int |   |   |   |
| billToNumberOfReturnOrders | int |   |   |   |
| billToNumberOfCreditMemos | int |   |   |   |
| billToNumberOfPstdShipments | int |   |   |   |
| billToNumberOfPstdInvoices | int |   |   |   |
| billToNumberOfPstdReturnR | int |   |   |   |
| billToNumberOfPstdCrMemos | int |   |   |   |
| baseCalendarCode | string |   |   |   |
| copySellToAddrToQteFrom | string |   |   |   |
| validateEuVatRegNumber | bool |   |   |   |
| currencyId | guid |   |   |   |
| paymentTermsId | guid |   |   |   |
| shipmentMethodId | guid |   |   |   |
| paymentMethodId | guid |   |   |   |
| taxAreaId | guid |   |   |   |
| contactId | guid |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowGenJournalBatches
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| journalTemplateName | string |   |   |   |
| name | string |   |   |   |
| description | string |   |   |   |
| reasonCode | string |   |   |   |
| balAccountType | string |   |   |   |
| balAccountNumber | string |   |   |   |
| numberSeries | string |   |   |   |
| postingNumberSeries | string |   |   |   |
| copyVatSetupToJnlLines | bool |   |   |   |
| allowVatDifference | bool |   |   |   |
| allowPaymentExport | bool |   |   |   |
| bankStatementImportFormat | string |   |   |   |
| templateType | string |   |   |   |
| recurring | bool |   |   |   |
| suggestBalancingAmount | bool |   |   |   |
| lastModifiedDatetime | date |   |   |   |

# WorkflowGenJournalLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| journalTemplateName | string |   |   |   |
| journalBatchName | string |   |   |   |
| lineNumber | int |   |   |   |
| accountType | string |   |   |   |
| accountNumber | string |   |   |   |
| postingDate | date |   |   |   |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| description | string |   |   |   |
| vatPercent | float |   |   |   |
| balAccountNumber | string |   |   |   |
| currencyCode | string |   |   |   |
| amount | float |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| amountLcy | float |   |   |   |
| balanceLcy | float |   |   |   |
| currencyFactor | float |   |   |   |
| salesPurchLcy | float |   |   |   |
| profitLcy | float |   |   |   |
| invDiscountLcy | float |   |   |   |
| billToPayToNumber | string |   |   |   |
| postingGroup | string |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| salespersPurchCode | string |   |   |   |
| sourceCode | string |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| onHold | string |   |   |   |
| appliesToDocType | string |   |   |   |
| appliesToDocNumber | string |   |   |   |
| dueDate | date |   |   |   |
| pmtDiscountDate | date |   |   |   |
| paymentDiscountPercent | float |   |   |   |
| jobNumber | string |   |   |   |
| quantity | float |   |   |   |
| vatAmount | float |   |   |   |
| vatPosting | string |   |   |   |
| paymentTermsCode | string |   |   |   |
| appliesToId | string |   |   |   |
| businessUnitCode | string |   |   |   |
| reasonCode | string |   |   |   |
| recurringMethod | string |   |   |   |
| expirationDate | date |   |   |   |
| recurringFrequency | string |   |   |   |
| allocatedAmtLcy | float |   |   |   |
| genPostingType | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| eu3PartyTrade | bool |   |   |   |
| allowApplication | bool |   |   |   |
| balAccountType | string |   |   |   |
| balGenPostingType | string |   |   |   |
| balGenBusPostingGroup | string |   |   |   |
| balGenProdPostingGroup | string |   |   |   |
| balVatCalculationType | string |   |   |   |
| balVatPercent | float |   |   |   |
| balVatAmount | float |   |   |   |
| bankPaymentType | string |   |   |   |
| vatBaseAmount | float |   |   |   |
| balVatBaseAmount | float |   |   |   |
| correction | bool |   |   |   |
| checkPrinted | bool |   |   |   |
| documentDate | date |   |   |   |
| externalDocumentNumber | string |   |   |   |
| sourceType | string |   |   |   |
| sourceNumber | string |   |   |   |
| postingNumberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| useTax | bool |   |   |   |
| balTaxAreaCode | string |   |   |   |
| balTaxLiable | bool |   |   |   |
| balTaxGroupCode | string |   |   |   |
| balUseTax | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| balVatBusPostingGroup | string |   |   |   |
| balVatProdPostingGroup | string |   |   |   |
| additionalCurrencyPosting | string |   |   |   |
| faAddCurrencyFactor | float |   |   |   |
| sourceCurrencyCode | string |   |   |   |
| sourceCurrencyAmount | float |   |   |   |
| sourceCurrVatBaseAmount | float |   |   |   |
| sourceCurrVatAmount | float |   |   |   |
| vatBaseDiscountPercent | float |   |   |   |
| vatAmountLcy | float |   |   |   |
| vatBaseAmountLcy | float |   |   |   |
| balVatAmountLcy | float |   |   |   |
| balVatBaseAmountLcy | float |   |   |   |
| reversingEntry | bool |   |   |   |
| allowZeroAmountPosting | bool |   |   |   |
| shipToOrderAddressCode | string |   |   |   |
| vatDifference | float |   |   |   |
| balVatDifference | float |   |   |   |
| icPartnerCode | string |   |   |   |
| icDirection | string |   |   |   |
| icPartnerGLAccNumber | string |   |   |   |
| icPartnerTransactionNumber | int |   |   |   |
| sellToBuyFromNumber | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| countryRegionCode | string |   |   |   |
| prepayment | bool |   |   |   |
| financialVoid | bool |   |   |   |
| incomingDocumentEntryNumber | int |   |   |   |
| creditorNumber | string |   |   |   |
| paymentReference | string |   |   |   |
| paymentMethodCode | string |   |   |   |
| appliesToExtDocNumber | string |   |   |   |
| recipientBankAccount | string |   |   |   |
| messageToRecipient | string |   |   |   |
| exportedToPaymentFile | bool |   |   |   |
| hasPaymentExportError | bool |   |   |   |
| dimensionSetId | int |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobUnitPriceLcy | float |   |   |   |
| jobTotalPriceLcy | float |   |   |   |
| jobQuantity | float |   |   |   |
| jobUnitCostLcy | float |   |   |   |
| jobLineDiscountPercent | float |   |   |   |
| jobLineDiscAmountLcy | float |   |   |   |
| jobUnitOfMeasureCode | string |   |   |   |
| jobLineType | string |   |   |   |
| jobUnitPrice | float |   |   |   |
| jobTotalPrice | float |   |   |   |
| jobUnitCost | float |   |   |   |
| jobTotalCost | float |   |   |   |
| jobLineDiscountAmount | float |   |   |   |
| jobLineAmount | float |   |   |   |
| jobTotalCostLcy | float |   |   |   |
| jobLineAmountLcy | float |   |   |   |
| jobCurrencyFactor | float |   |   |   |
| jobCurrencyCode | string |   |   |   |
| jobPlanningLineNumber | int |   |   |   |
| jobRemainingQty | float |   |   |   |
| directDebitMandateId | string |   |   |   |
| dataExchEntryNumber | int |   |   |   |
| payerInformation | string |   |   |   |
| transactionInformation | string |   |   |   |
| dataExchLineNumber | int |   |   |   |
| appliedAutomatically | bool |   |   |   |
| deferralCode | string |   |   |   |
| deferralLineNumber | int |   |   |   |
| campaignNumber | string |   |   |   |
| prodOrderNumber | string |   |   |   |
| faPostingDate | date |   |   |   |
| faPostingType | string |   |   |   |
| depreciationBookCode | string |   |   |   |
| salvageValue | float |   |   |   |
| numberOfDepreciationDays | int |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| deprAcquisitionCost | bool |   |   |   |
| maintenanceCode | string |   |   |   |
| insuranceNumber | string |   |   |   |
| budgetedFaNumber | string |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| faReclassificationEntry | bool |   |   |   |
| faErrorEntryNumber | int |   |   |   |
| indexEntry | bool |   |   |   |
| sourceLineNumber | int |   |   |   |
| comment | string |   |   |   |
| checkExported | bool |   |   |   |
| checkTransmitted | bool |   |   |   |
| id | guid |   |   |   |
| accountId | guid |   |   |   |
| customerId | guid |   |   |   |
| appliesToInvoiceId | guid |   |   |   |
| contactGraphId | string |   |   |   |
| lastModifiedDatetime | date |   |   |   |
| journalBatchId | guid |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowItems
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| number2 | string |   |   |   |
| description | string |   |   |   |
| searchDescription | string |   |   |   |
| description2 | string |   |   |   |
| assemblyBom | bool |   |   |   |
| baseUnitOfMeasure | string |   |   |   |
| priceUnitConversion | int |   |   |   |
| type | string |   |   |   |
| inventoryPostingGroup | string |   |   |   |
| shelfNumber | string |   |   |   |
| itemDiscGroup | string |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| statisticsGroup | int |   |   |   |
| commissionGroup | int |   |   |   |
| unitPrice | float |   |   |   |
| priceProfitCalculation | string |   |   |   |
| profitPercent | float |   |   |   |
| costingMethod | string |   |   |   |
| unitCost | float |   |   |   |
| standardCost | float |   |   |   |
| lastDirectCost | float |   |   |   |
| indirectCostPercent | float |   |   |   |
| costIsAdjusted | bool |   |   |   |
| allowOnlineAdjustment | bool |   |   |   |
| vendorNumber | string |   |   |   |
| vendorItemNumber | string |   |   |   |
| leadTimeCalculation | string |   |   |   |
| reorderPoint | float |   |   |   |
| maximumInventory | float |   |   |   |
| reorderQuantity | float |   |   |   |
| alternativeItemNumber | string |   |   |   |
| unitListPrice | float |   |   |   |
| dutyDuePercent | float |   |   |   |
| dutyCode | string |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| durability | string |   |   |   |
| freightType | string |   |   |   |
| tariffNumber | string |   |   |   |
| dutyUnitConversion | float |   |   |   |
| countryRegionPurchasedCode | string |   |   |   |
| budgetQuantity | float |   |   |   |
| budgetedAmount | float |   |   |   |
| budgetProfit | float |   |   |   |
| comment | bool |   |   |   |
| blocked | bool |   |   |   |
| costIsPostedToGL | bool |   |   |   |
| blockReason | string |   |   |   |
| lastDatetimeModified | date |   |   |   |
| lastDateModified | date |   |   |   |
| lastTimeModified | string |   |   |   |
| dateFilter | string |   |   |   |
| globalDimension1Filter | string |   |   |   |
| globalDimension2Filter | string |   |   |   |
| locationFilter | string |   |   |   |
| inventory | float |   |   |   |
| netInvoicedQty | float |   |   |   |
| netChange | float |   |   |   |
| purchasesQty | float |   |   |   |
| salesQty | float |   |   |   |
| positiveAdjmtQty | float |   |   |   |
| negativeAdjmtQty | float |   |   |   |
| purchasesLcy | float |   |   |   |
| salesLcy | float |   |   |   |
| positiveAdjmtLcy | float |   |   |   |
| negativeAdjmtLcy | float |   |   |   |
| cogsLcy | float |   |   |   |
| qtyOnPurchOrder | float |   |   |   |
| qtyOnSalesOrder | float |   |   |   |
| priceIncludesVat | bool |   |   |   |
| dropShipmentFilter | string |   |   |   |
| vatBusPostingGrPrice | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| transferredQty | float |   |   |   |
| transferredLcy | float |   |   |   |
| countryRegionOfOriginCode | string |   |   |   |
| automaticExtTexts | bool |   |   |   |
| numberSeries | string |   |   |   |
| taxGroupCode | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| reserve | string |   |   |   |
| reservedQtyOnInventory | float |   |   |   |
| reservedQtyOnPurchOrders | float |   |   |   |
| reservedQtyOnSalesOrders | float |   |   |   |
| globalDimension1Code | string |   |   |   |
| globalDimension2Code | string |   |   |   |
| resQtyOnOutboundTransfer | float |   |   |   |
| resQtyOnInboundTransfer | float |   |   |   |
| resQtyOnSalesReturns | float |   |   |   |
| resQtyOnPurchReturns | float |   |   |   |
| stockoutWarning | string |   |   |   |
| preventNegativeInventory | string |   |   |   |
| costOfOpenProductionOrders | float |   |   |   |
| applicationWkshUserId | string |   |   |   |
| assemblyPolicy | string |   |   |   |
| resQtyOnAssemblyOrder | float |   |   |   |
| resQtyOnAsmComp | float |   |   |   |
| qtyOnAssemblyOrder | float |   |   |   |
| qtyOnAsmComponent | float |   |   |   |
| qtyOnJobOrder | float |   |   |   |
| resQtyOnJobOrder | float |   |   |   |
| gtin | string |   |   |   |
| defaultDeferralTemplateCode | string |   |   |   |
| lowLevelCode | int |   |   |   |
| lotSize | float |   |   |   |
| serialNos | string |   |   |   |
| lastUnitCostCalcDate | date |   |   |   |
| rolledUpMaterialCost | float |   |   |   |
| rolledUpCapacityCost | float |   |   |   |
| scrapPercent | float |   |   |   |
| inventoryValueZero | bool |   |   |   |
| discreteOrderQuantity | int |   |   |   |
| minimumOrderQuantity | float |   |   |   |
| maximumOrderQuantity | float |   |   |   |
| safetyStockQuantity | float |   |   |   |
| orderMultiple | float |   |   |   |
| safetyLeadTime | string |   |   |   |
| flushingMethod | string |   |   |   |
| replenishmentSystem | string |   |   |   |
| scheduledReceiptQty | float |   |   |   |
| scheduledNeedQty | float |   |   |   |
| roundingPrecision | float |   |   |   |
| binFilter | string |   |   |   |
| variantFilter | string |   |   |   |
| salesUnitOfMeasure | string |   |   |   |
| purchUnitOfMeasure | string |   |   |   |
| timeBucket | string |   |   |   |
| reservedQtyOnProdOrder | float |   |   |   |
| resQtyOnProdOrderComp | float |   |   |   |
| resQtyOnReqLine | float |   |   |   |
| reorderingPolicy | string |   |   |   |
| includeInventory | bool |   |   |   |
| manufacturingPolicy | string |   |   |   |
| reschedulingPeriod | string |   |   |   |
| lotAccumulationPeriod | string |   |   |   |
| dampenerPeriod | string |   |   |   |
| dampenerQuantity | float |   |   |   |
| overflowLevel | float |   |   |   |
| planningTransferShipQty | float |   |   |   |
| planningWorksheetQty | float |   |   |   |
| stockkeepingUnitExists | bool |   |   |   |
| manufacturerCode | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| createdFromNonstockItem | bool |   |   |   |
| substitutesExist | bool |   |   |   |
| qtyInTransit | float |   |   |   |
| transOrdReceiptQty | float |   |   |   |
| transOrdShipmentQty | float |   |   |   |
| qtyAssignedToShip | float |   |   |   |
| qtyPicked | float |   |   |   |
| serviceItemGroup | string |   |   |   |
| qtyOnServiceOrder | float |   |   |   |
| resQtyOnServiceOrders | float |   |   |   |
| itemTrackingCode | string |   |   |   |
| lotNos | string |   |   |   |
| expirationCalculation | string |   |   |   |
| lotNumberFilter | string |   |   |   |
| serialNumberFilter | string |   |   |   |
| qtyOnPurchReturn | float |   |   |   |
| qtyOnSalesReturn | float |   |   |   |
| numberOfSubstitutes | int |   |   |   |
| warehouseClassCode | string |   |   |   |
| specialEquipmentCode | string |   |   |   |
| putAwayTemplateCode | string |   |   |   |
| putAwayUnitOfMeasureCode | string |   |   |   |
| physInvtCountingPeriodCode | string |   |   |   |
| lastCountingPeriodUpdate | date |   |   |   |
| lastPhysInvtDate | date |   |   |   |
| useCrossDocking | bool |   |   |   |
| nextCountingStartDate | date |   |   |   |
| nextCountingEndDate | date |   |   |   |
| identifierCode | string |   |   |   |
| unitOfMeasureId | guid |   |   |   |
| taxGroupId | guid |   |   |   |
| routingNumber | string |   |   |   |
| productionBomNumber | string |   |   |   |
| singleLevelMaterialCost | float |   |   |   |
| singleLevelCapacityCost | float |   |   |   |
| singleLevelSubcontrdCost | float |   |   |   |
| singleLevelCapOvhdCost | float |   |   |   |
| singleLevelMfgOvhdCost | float |   |   |   |
| overheadRate | float |   |   |   |
| rolledUpSubcontractedCost | float |   |   |   |
| rolledUpMfgOvhdCost | float |   |   |   |
| rolledUpCapOverheadCost | float |   |   |   |
| planningIssuesQty | float |   |   |   |
| planningReceiptQty | float |   |   |   |
| plannedOrderReceiptQty | float |   |   |   |
| fpOrderReceiptQty | float |   |   |   |
| relOrderReceiptQty | float |   |   |   |
| planningReleaseQty | float |   |   |   |
| plannedOrderReleaseQty | float |   |   |   |
| purchReqReceiptQty | float |   |   |   |
| purchReqReleaseQty | float |   |   |   |
| orderTrackingPolicy | string |   |   |   |
| prodForecastQuantityBase | float |   |   |   |
| productionForecastName | string |   |   |   |
| componentForecast | string |   |   |   |
| qtyOnProdOrder | float |   |   |   |
| qtyOnComponentLines | float |   |   |   |
| critical | bool |   |   |   |
| commonItemNumber | string |   |   |   |
| unitOfMeasureFilter | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| pictures | [Media[]](#media) | Yes |
# WorkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| buyFromVendorNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| expectedReceiptDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToReceive | float |   |   |   |
| directUnitCost | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| unitPriceLcy | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| jobNumber | string |   |   |   |
| indirectCostPercent | float |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyRcdNotInvoiced | float |   |   |   |
| amtRcdNotInvoiced | float |   |   |   |
| quantityReceived | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| receiptNumber | string |   |   |   |
| receiptLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| payToVendorNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| vendorItemNumber | string |   |   |   |
| salesOrderNumber | string |   |   |   |
| salesOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| entryPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| useTax | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| reservedQuantity | float |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| outstandingAmtExVatLcy | float |   |   |   |
| aRcdNotInvExVatLcy | float |   |   |   |
| dimensionSetId | int |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobLineType | string |   |   |   |
| jobUnitPrice | float |   |   |   |
| jobTotalPrice | float |   |   |   |
| jobLineAmount | float |   |   |   |
| jobLineDiscountAmount | float |   |   |   |
| jobLineDiscountPercent | float |   |   |   |
| jobUnitPriceLcy | float |   |   |   |
| jobTotalPriceLcy | float |   |   |   |
| jobLineAmountLcy | float |   |   |   |
| jobLineDiscAmountLcy | float |   |   |   |
| jobCurrencyFactor | float |   |   |   |
| jobCurrencyCode | string |   |   |   |
| jobPlanningLineNumber | int |   |   |   |
| jobRemainingQty | float |   |   |   |
| jobRemainingQtyBase | float |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| prodOrderNumber | string |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToReceiveBase | float |   |   |   |
| qtyRcdNotInvoicedBase | float |   |   |   |
| qtyReceivedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| faPostingType | string |   |   |   |
| depreciationBookCode | string |   |   |   |
| salvageValue | float |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| deprAcquisitionCost | bool |   |   |   |
| maintenanceCode | string |   |   |   |
| insuranceNumber | string |   |   |   |
| budgetedFaNumber | string |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderSalesNumber | string |   |   |   |
| specialOrderSalesLineNumber | int |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyReceived | bool |   |   |   |
| requestedReceiptDate | date |   |   |   |
| promisedReceiptDate | date |   |   |   |
| leadTimeCalculation | string |   |   |   |
| inboundWhseHandlingTime | string |   |   |   |
| plannedReceiptDate | date |   |   |   |
| orderDate | date |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToShip | float |   |   |   |
| returnQtyToShipBase | float |   |   |   |
| returnQtyShippedNotInvd | float |   |   |   |
| retQtyShpdNotInvdBase | float |   |   |   |
| returnShpdNotInvd | float |   |   |   |
| returnShpdNotInvdLcy | float |   |   |   |
| returnQtyShipped | float |   |   |   |
| returnQtyShippedBase | float |   |   |   |
| returnShipmentNumber | string |   |   |   |
| returnShipmentLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| subtype | string |   |   |   |
| routingNumber | string |   |   |   |
| operationNumber | string |   |   |   |
| workCenterNumber | string |   |   |   |
| finished | bool |   |   |   |
| prodOrderLineNumber | int |   |   |   |
| overheadRate | float |   |   |   |
| mpsOrder | bool |   |   |   |
| planningFlexibility | string |   |   |   |
| safetyLeadTime | string |   |   |   |
| routingReferenceNumber | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowPurchaseDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| documentType | string |   |   |   |
| buyFromVendorNumber | string |   |   |   |
| number | string |   |   |   |
| payToVendorNumber | string |   |   |   |
| payToName | string |   |   |   |
| payToName2 | string |   |   |   |
| payToAddress | string |   |   |   |
| payToAddress2 | string |   |   |   |
| payToCity | string |   |   |   |
| payToContact | string |   |   |   |
| yourReference | string |   |   |   |
| shipToCode | string |   |   |   |
| shipToName | string |   |   |   |
| shipToName2 | string |   |   |   |
| shipToAddress | string |   |   |   |
| shipToAddress2 | string |   |   |   |
| shipToCity | string |   |   |   |
| shipToContact | string |   |   |   |
| orderDate | date |   |   |   |
| postingDate | date |   |   |   |
| expectedReceiptDate | date |   |   |   |
| postingDescription | string |   |   |   |
| paymentTermsCode | string |   |   |   |
| dueDate | date |   |   |   |
| paymentDiscountPercent | float |   |   |   |
| pmtDiscountDate | date |   |   |   |
| shipmentMethodCode | string |   |   |   |
| locationCode | string |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| vendorPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| currencyFactor | float |   |   |   |
| pricesIncludingVat | bool |   |   |   |
| invoiceDiscCode | string |   |   |   |
| languageCode | string |   |   |   |
| purchaserCode | string |   |   |   |
| orderClass | string |   |   |   |
| comment | bool |   |   |   |
| numberPrinted | int |   |   |   |
| onHold | string |   |   |   |
| appliesToDocType | string |   |   |   |
| appliesToDocNumber | string |   |   |   |
| balAccountNumber | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| receive | bool |   |   |   |
| invoice | bool |   |   |   |
| printPostedDocuments | bool |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| receivingNumber | string |   |   |   |
| postingNumber | string |   |   |   |
| lastReceivingNumber | string |   |   |   |
| lastPostingNumber | string |   |   |   |
| vendorOrderNumber | string |   |   |   |
| vendorShipmentNumber | string |   |   |   |
| vendorInvoiceNumber | string |   |   |   |
| vendorCrMemoNumber | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| reasonCode | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| vatCountryRegionCode | string |   |   |   |
| buyFromVendorName | string |   |   |   |
| buyFromVendorName2 | string |   |   |   |
| buyFromAddress | string |   |   |   |
| buyFromAddress2 | string |   |   |   |
| buyFromCity | string |   |   |   |
| buyFromContact | string |   |   |   |
| payToPostCode | string |   |   |   |
| payToCounty | string |   |   |   |
| payToCountryRegionCode | string |   |   |   |
| buyFromPostCode | string |   |   |   |
| buyFromCounty | string |   |   |   |
| buyFromCountryRegionCode | string |   |   |   |
| shipToPostCode | string |   |   |   |
| shipToCounty | string |   |   |   |
| shipToCountryRegionCode | string |   |   |   |
| balAccountType | string |   |   |   |
| orderAddressCode | string |   |   |   |
| entryPoint | string |   |   |   |
| correction | bool |   |   |   |
| documentDate | date |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| paymentMethodCode | string |   |   |   |
| numberSeries | string |   |   |   |
| postingNumberSeries | string |   |   |   |
| receivingNumberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| appliesToId | string |   |   |   |
| vatBaseDiscountPercent | float |   |   |   |
| status | string |   |   |   |
| invoiceDiscountCalculation | string |   |   |   |
| invoiceDiscountValue | float |   |   |   |
| sendIcDocument | bool |   |   |   |
| icStatus | string |   |   |   |
| buyFromIcPartnerCode | string |   |   |   |
| payToIcPartnerCode | string |   |   |   |
| icDirection | string |   |   |   |
| prepaymentNumber | string |   |   |   |
| lastPrepaymentNumber | string |   |   |   |
| prepmtCrMemoNumber | string |   |   |   |
| lastPrepmtCrMemoNumber | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepaymentNumberSeries | string |   |   |   |
| compressPrepayment | bool |   |   |   |
| prepaymentDueDate | date |   |   |   |
| prepmtCrMemoNumberSeries | string |   |   |   |
| prepmtPostingDescription | string |   |   |   |
| prepmtPmtDiscountDate | date |   |   |   |
| prepmtPaymentTermsCode | string |   |   |   |
| prepmtPaymentDiscountPercent | float |   |   |   |
| quoteNumber | string |   |   |   |
| jobQueueStatus | string |   |   |   |
| jobQueueEntryId | guid |   |   |   |
| incomingDocumentEntryNumber | int |   |   |   |
| creditorNumber | string |   |   |   |
| paymentReference | string |   |   |   |
| aRcdNotInvExVatLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| dimensionSetId | int |   |   |   |
| invoiceDiscountAmount | float |   |   |   |
| numberOfArchivedVersions | int |   |   |   |
| docNumberOccurrence | int |   |   |   |
| campaignNumber | string |   |   |   |
| buyFromContactNumber | string |   |   |   |
| payToContactNumber | string |   |   |   |
| responsibilityCenter | string |   |   |   |
| completelyReceived | bool |   |   |   |
| postingFromWhseRef | int |   |   |   |
| locationFilter | string |   |   |   |
| requestedReceiptDate | date |   |   |   |
| promisedReceiptDate | date |   |   |   |
| leadTimeCalculation | string |   |   |   |
| inboundWhseHandlingTime | string |   |   |   |
| vendorAuthorizationNumber | string |   |   |   |
| returnShipmentNumber | string |   |   |   |
| returnShipmentNumberSeries | string |   |   |   |
| ship | bool |   |   |   |
| lastReturnShipmentNumber | string |   |   |   |
| assignedUserId | string |   |   |   |
| pendingApprovals | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowPurchaseDocumentsworkflowPurchaseDocumentLines | [WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]](#workflowpurchasedocumentsworkflowpurchasedocumentlines) | Yes |
# WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| buyFromVendorNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| expectedReceiptDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToReceive | float |   |   |   |
| directUnitCost | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| unitPriceLcy | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| jobNumber | string |   |   |   |
| indirectCostPercent | float |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyRcdNotInvoiced | float |   |   |   |
| amtRcdNotInvoiced | float |   |   |   |
| quantityReceived | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| receiptNumber | string |   |   |   |
| receiptLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| payToVendorNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| vendorItemNumber | string |   |   |   |
| salesOrderNumber | string |   |   |   |
| salesOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| entryPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| useTax | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| reservedQuantity | float |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| outstandingAmtExVatLcy | float |   |   |   |
| aRcdNotInvExVatLcy | float |   |   |   |
| dimensionSetId | int |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobLineType | string |   |   |   |
| jobUnitPrice | float |   |   |   |
| jobTotalPrice | float |   |   |   |
| jobLineAmount | float |   |   |   |
| jobLineDiscountAmount | float |   |   |   |
| jobLineDiscountPercent | float |   |   |   |
| jobUnitPriceLcy | float |   |   |   |
| jobTotalPriceLcy | float |   |   |   |
| jobLineAmountLcy | float |   |   |   |
| jobLineDiscAmountLcy | float |   |   |   |
| jobCurrencyFactor | float |   |   |   |
| jobCurrencyCode | string |   |   |   |
| jobPlanningLineNumber | int |   |   |   |
| jobRemainingQty | float |   |   |   |
| jobRemainingQtyBase | float |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| prodOrderNumber | string |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToReceiveBase | float |   |   |   |
| qtyRcdNotInvoicedBase | float |   |   |   |
| qtyReceivedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| faPostingType | string |   |   |   |
| depreciationBookCode | string |   |   |   |
| salvageValue | float |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| deprAcquisitionCost | bool |   |   |   |
| maintenanceCode | string |   |   |   |
| insuranceNumber | string |   |   |   |
| budgetedFaNumber | string |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderSalesNumber | string |   |   |   |
| specialOrderSalesLineNumber | int |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyReceived | bool |   |   |   |
| requestedReceiptDate | date |   |   |   |
| promisedReceiptDate | date |   |   |   |
| leadTimeCalculation | string |   |   |   |
| inboundWhseHandlingTime | string |   |   |   |
| plannedReceiptDate | date |   |   |   |
| orderDate | date |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToShip | float |   |   |   |
| returnQtyToShipBase | float |   |   |   |
| returnQtyShippedNotInvd | float |   |   |   |
| retQtyShpdNotInvdBase | float |   |   |   |
| returnShpdNotInvd | float |   |   |   |
| returnShpdNotInvdLcy | float |   |   |   |
| returnQtyShipped | float |   |   |   |
| returnQtyShippedBase | float |   |   |   |
| returnShipmentNumber | string |   |   |   |
| returnShipmentLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| subtype | string |   |   |   |
| routingNumber | string |   |   |   |
| operationNumber | string |   |   |   |
| workCenterNumber | string |   |   |   |
| finished | bool |   |   |   |
| prodOrderLineNumber | int |   |   |   |
| overheadRate | float |   |   |   |
| mpsOrder | bool |   |   |   |
| planningFlexibility | string |   |   |   |
| safetyLeadTime | string |   |   |   |
| routingReferenceNumber | int |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| shipmentDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToShip | float |   |   |   |
| unitPrice | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| customerPriceGroup | string |   |   |   |
| jobNumber | string |   |   |   |
| workTypeCode | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyShippedNotInvoiced | float |   |   |   |
| shippedNotInvoiced | float |   |   |   |
| quantityShipped | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| shipmentNumber | string |   |   |   |
| shipmentLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| billToCustomerNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| purchaseOrderNumber | string |   |   |   |
| purchOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| exitPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxCategory | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| vatClauseCode | string |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| shippedNotInvoicedLcy | float |   |   |   |
| shippedNotInvLcyNoVat | float |   |   |   |
| reservedQuantity | float |   |   |   |
| reserve | string |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| dimensionSetId | int |   |   |   |
| qtyToAssembleToOrder | float |   |   |   |
| qtyToAsmToOrderBase | float |   |   |   |
| atoWhseOutstandingQty | float |   |   |   |
| atoWhseOutstdQtyBase | float |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobContractEntryNumber | int |   |   |   |
| postingDate | date |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| planned | bool |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToShipBase | float |   |   |   |
| qtyShippedNotInvdBase | float |   |   |   |
| qtyShippedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| depreciationBookCode | string |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| outOfStockSubstitution | bool |   |   |   |
| substitutionAvailable | bool |   |   |   |
| originallyOrderedNumber | string |   |   |   |
| originallyOrderedVarCode | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderPurchaseNumber | string |   |   |   |
| specialOrderPurchLineNumber | int |   |   |   |
| whseOutstandingQty | float |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyShipped | bool |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| promisedDeliveryDate | date |   |   |   |
| shippingTime | string |   |   |   |
| outboundWhseHandlingTime | string |   |   |   |
| plannedDeliveryDate | date |   |   |   |
| plannedShipmentDate | date |   |   |   |
| shippingAgentCode | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToReceive | float |   |   |   |
| returnQtyToReceiveBase | float |   |   |   |
| returnQtyRcdNotInvd | float |   |   |   |
| retQtyRcdNotInvdBase | float |   |   |   |
| returnRcdNotInvd | float |   |   |   |
| returnRcdNotInvdLcy | float |   |   |   |
| returnQtyReceived | float |   |   |   |
| returnQtyReceivedBase | float |   |   |   |
| applFromItemEntry | int |   |   |   |
| bomItemNumber | string |   |   |   |
| returnReceiptNumber | string |   |   |   |
| returnReceiptLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| allowLineDisc | bool |   |   |   |
| customerDiscGroup | string |   |   |   |
| subtype | string |   |   |   |
| priceDescription | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| documentType | string |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| number | string |   |   |   |
| billToCustomerNumber | string |   |   |   |
| billToName | string |   |   |   |
| billToName2 | string |   |   |   |
| billToAddress | string |   |   |   |
| billToAddress2 | string |   |   |   |
| billToCity | string |   |   |   |
| billToContact | string |   |   |   |
| yourReference | string |   |   |   |
| shipToCode | string |   |   |   |
| shipToName | string |   |   |   |
| shipToName2 | string |   |   |   |
| shipToAddress | string |   |   |   |
| shipToAddress2 | string |   |   |   |
| shipToCity | string |   |   |   |
| shipToContact | string |   |   |   |
| orderDate | date |   |   |   |
| postingDate | date |   |   |   |
| shipmentDate | date |   |   |   |
| postingDescription | string |   |   |   |
| paymentTermsCode | string |   |   |   |
| dueDate | date |   |   |   |
| paymentDiscountPercent | float |   |   |   |
| pmtDiscountDate | date |   |   |   |
| shipmentMethodCode | string |   |   |   |
| locationCode | string |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| customerPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| currencyFactor | float |   |   |   |
| customerPriceGroup | string |   |   |   |
| pricesIncludingVat | bool |   |   |   |
| invoiceDiscCode | string |   |   |   |
| customerDiscGroup | string |   |   |   |
| languageCode | string |   |   |   |
| salespersonCode | string |   |   |   |
| orderClass | string |   |   |   |
| comment | bool |   |   |   |
| numberPrinted | int |   |   |   |
| onHold | string |   |   |   |
| appliesToDocType | string |   |   |   |
| appliesToDocNumber | string |   |   |   |
| balAccountNumber | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| ship | bool |   |   |   |
| invoice | bool |   |   |   |
| printPostedDocuments | bool |   |   |   |
| amount | float |   |   |   |
| amountIncludingVAT | float |   |   |   |
| shippingNumber | string |   |   |   |
| postingNumber | string |   |   |   |
| lastShippingNumber | string |   |   |   |
| lastPostingNumber | string |   |   |   |
| prepaymentNumber | string |   |   |   |
| lastPrepaymentNumber | string |   |   |   |
| premptCrMemoNumber | string |   |   |   |
| lastPremtCrMemoNumber | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| combineShipments | bool |   |   |   |
| reasonCode | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| eu3PartyTrade | bool |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| vatCountryRegionCode | string |   |   |   |
| sellToCustomerName | string |   |   |   |
| sellToCustomerName2 | string |   |   |   |
| sellToAddress | string |   |   |   |
| sellToAddress2 | string |   |   |   |
| sellToCity | string |   |   |   |
| sellToContact | string |   |   |   |
| billToPostCode | string |   |   |   |
| billToCounty | string |   |   |   |
| billToCountryRegionCode | string |   |   |   |
| sellToPostCode | string |   |   |   |
| sellToCounty | string |   |   |   |
| sellToCountryRegionCode | string |   |   |   |
| shipToPostCode | string |   |   |   |
| shipToCounty | string |   |   |   |
| shipToCountryRegionCode | string |   |   |   |
| balAccountType | string |   |   |   |
| exitPoint | string |   |   |   |
| correction | bool |   |   |   |
| documentDate | date |   |   |   |
| externalDocumentNumber | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| paymentMethodCode | string |   |   |   |
| shippingAgentCode | string |   |   |   |
| packageTrackingNumber | string |   |   |   |
| numberSeries | string |   |   |   |
| postingNumberSeries | string |   |   |   |
| shippingNumberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| reserve | string |   |   |   |
| appliesToId | string |   |   |   |
| vatBaseDiscountPercent | float |   |   |   |
| status | string |   |   |   |
| invoiceDiscountCalculation | string |   |   |   |
| invoiceDiscountValue | float |   |   |   |
| sendIcDocument | bool |   |   |   |
| icStatus | string |   |   |   |
| sellToIcPartnerCode | string |   |   |   |
| billToIcPartnerCode | string |   |   |   |
| icDirection | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepaymentNumberSeries | string |   |   |   |
| compressPrepayment | bool |   |   |   |
| prepaymentDueDate | date |   |   |   |
| prepmtCrMemoNumberSeries | string |   |   |   |
| prepmtPostingDescription | string |   |   |   |
| prepmtPmtDiscountDate | date |   |   |   |
| prepmtPaymentTermsCode | string |   |   |   |
| prepmtPaymentDiscountPercent | float |   |   |   |
| quoteNumber | string |   |   |   |
| quoteValidUntilDate | date |   |   |   |
| quoteSentToCustomer | date |   |   |   |
| quoteAccepted | bool |   |   |   |
| quoteAcceptedDate | date |   |   |   |
| jobQueueStatus | string |   |   |   |
| jobQueueEntryId | guid |   |   |   |
| incomingDocumentEntryNumber | int |   |   |   |
| workDescription | string |   |   |   |
| amountShippedNotInvoicedInclVat | float |   |   |   |
| amountShippedNotInvoiced | float |   |   |   |
| dimensionSetId | int |   |   |   |
| paymentServiceSetId | int |   |   |   |
| directDebitMandateId | string |   |   |   |
| invoiceDiscountAmount | float |   |   |   |
| numberOfArchivedVersions | int |   |   |   |
| docNumberOccurrence | int |   |   |   |
| campaignNumber | string |   |   |   |
| sellToCustomerTemplateCode | string |   |   |   |
| sellToContactNumber | string |   |   |   |
| billToContactNumber | string |   |   |   |
| billToCustomerTemplateCode | string |   |   |   |
| opportunityNumber | string |   |   |   |
| responsibilityCenter | string |   |   |   |
| shippingAdvice | string |   |   |   |
| shippedNotInvoiced | bool |   |   |   |
| completelyShipped | bool |   |   |   |
| postingFromWhseRef | int |   |   |   |
| locationFilter | string |   |   |   |
| shipped | bool |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| promisedDeliveryDate | date |   |   |   |
| shippingTime | string |   |   |   |
| outboundWhseHandlingTime | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| lateOrderShipping | bool |   |   |   |
| receive | bool |   |   |   |
| returnReceiptNumber | string |   |   |   |
| returnReceiptNumberSeries | string |   |   |   |
| lastReturnReceiptNumber | string |   |   |   |
| allowLineDisc | bool |   |   |   |
| getShipmentUsed | bool |   |   |   |
| assignedUserId | string |   |   |   |
| dateFilter | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowSalesDocumentsworkflowSalesDocumentLines | [WorkflowSalesDocumentsworkflowSalesDocumentLines[]](#workflowsalesdocumentsworkflowsalesdocumentlines) | Yes |
# WorkflowSalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   |   |
| documentNumber | string |   |   |   |
| lineNumber | int |   |   |   |
| sellToCustomerNumber | string |   |   |   |
| type | string |   |   |   |
| number | string |   |   |   |
| locationCode | string |   |   |   |
| postingGroup | string |   |   |   |
| shipmentDate | date |   |   |   |
| description | string |   |   |   |
| description2 | string |   |   |   |
| unitOfMeasure | string |   |   |   |
| quantity | float |   |   |   |
| outstandingQuantity | float |   |   |   |
| qtyToInvoice | float |   |   |   |
| qtyToShip | float |   |   |   |
| unitPrice | float |   |   |   |
| unitCostLcy | float |   |   |   |
| vatPercent | float |   |   |   |
| lineDiscountPercent | float |   |   |   |
| lineDiscountAmount | float |   |   |   |
| amount | float |   |   |   |
| amountIncludingVat | float |   |   |   |
| allowInvoiceDisc | bool |   |   |   |
| grossWeight | float |   |   |   |
| netWeight | float |   |   |   |
| unitsPerParcel | float |   |   |   |
| unitVolume | float |   |   |   |
| applToItemEntry | int |   |   |   |
| shortcutDimension1Code | string |   |   |   |
| shortcutDimension2Code | string |   |   |   |
| customerPriceGroup | string |   |   |   |
| jobNumber | string |   |   |   |
| workTypeCode | string |   |   |   |
| recalculateInvoiceDisc | bool |   |   |   |
| outstandingAmount | float |   |   |   |
| qtyShippedNotInvoiced | float |   |   |   |
| shippedNotInvoiced | float |   |   |   |
| quantityShipped | float |   |   |   |
| quantityInvoiced | float |   |   |   |
| shipmentNumber | string |   |   |   |
| shipmentLineNumber | int |   |   |   |
| profitPercent | float |   |   |   |
| billToCustomerNumber | string |   |   |   |
| invDiscountAmount | float |   |   |   |
| purchaseOrderNumber | string |   |   |   |
| purchOrderLineNumber | int |   |   |   |
| dropShipment | bool |   |   |   |
| genBusPostingGroup | string |   |   |   |
| genProdPostingGroup | string |   |   |   |
| vatCalculationType | string |   |   |   |
| transactionType | string |   |   |   |
| transportMethod | string |   |   |   |
| attachedToLineNumber | int |   |   |   |
| exitPoint | string |   |   |   |
| area | string |   |   |   |
| transactionSpecification | string |   |   |   |
| taxCategory | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| taxGroupCode | string |   |   |   |
| vatClauseCode | string |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| vatProdPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| outstandingAmountLcy | float |   |   |   |
| shippedNotInvoicedLcy | float |   |   |   |
| shippedNotInvLcyNoVat | float |   |   |   |
| reservedQuantity | float |   |   |   |
| reserve | string |   |   |   |
| blanketOrderNumber | string |   |   |   |
| blanketOrderLineNumber | int |   |   |   |
| vatBaseAmount | float |   |   |   |
| unitCost | float |   |   |   |
| systemCreatedEntry | bool |   |   |   |
| lineAmount | float |   |   |   |
| vatDifference | float |   |   |   |
| invDiscAmountToInvoice | float |   |   |   |
| vatIdentifier | string |   |   |   |
| icPartnerRefType | string |   |   |   |
| icPartnerReference | string |   |   |   |
| prepaymentPercent | float |   |   |   |
| prepmtLineAmount | float |   |   |   |
| prepmtAmtInv | float |   |   |   |
| prepmtAmtInclVat | float |   |   |   |
| prepaymentAmount | float |   |   |   |
| prepmtVatBaseAmt | float |   |   |   |
| prepaymentVatPercent | float |   |   |   |
| prepmtVatCalcType | string |   |   |   |
| prepaymentVatIdentifier | string |   |   |   |
| prepaymentTaxAreaCode | string |   |   |   |
| prepaymentTaxLiable | bool |   |   |   |
| prepaymentTaxGroupCode | string |   |   |   |
| prepmtAmtToDeduct | float |   |   |   |
| prepmtAmtDeducted | float |   |   |   |
| prepaymentLine | bool |   |   |   |
| prepmtAmountInvInclVat | float |   |   |   |
| prepmtAmountInvLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| prepmtVatAmountInvLcy | float |   |   |   |
| prepaymentVatDifference | float |   |   |   |
| prepmtVatDiffToDeduct | float |   |   |   |
| prepmtVatDiffDeducted | float |   |   |   |
| dimensionSetId | int |   |   |   |
| qtyToAssembleToOrder | float |   |   |   |
| qtyToAsmToOrderBase | float |   |   |   |
| atoWhseOutstandingQty | float |   |   |   |
| atoWhseOutstdQtyBase | float |   |   |   |
| jobTaskNumber | string |   |   |   |
| jobContractEntryNumber | int |   |   |   |
| postingDate | date |   |   |   |
| deferralCode | string |   |   |   |
| returnsDeferralStartDate | date |   |   |   |
| variantCode | string |   |   |   |
| binCode | string |   |   |   |
| qtyPerUnitOfMeasure | float |   |   |   |
| planned | bool |   |   |   |
| unitOfMeasureCode | string |   |   |   |
| quantityBase | float |   |   |   |
| outstandingQtyBase | float |   |   |   |
| qtyToInvoiceBase | float |   |   |   |
| qtyToShipBase | float |   |   |   |
| qtyShippedNotInvdBase | float |   |   |   |
| qtyShippedBase | float |   |   |   |
| qtyInvoicedBase | float |   |   |   |
| reservedQtyBase | float |   |   |   |
| faPostingDate | date |   |   |   |
| depreciationBookCode | string |   |   |   |
| deprUntilFaPostingDate | bool |   |   |   |
| duplicateInDepreciationBook | string |   |   |   |
| useDuplicationList | bool |   |   |   |
| responsibilityCenter | string |   |   |   |
| outOfStockSubstitution | bool |   |   |   |
| substitutionAvailable | bool |   |   |   |
| originallyOrderedNumber | string |   |   |   |
| originallyOrderedVarCode | string |   |   |   |
| crossReferenceNumber | string |   |   |   |
| unitOfMeasureCrossRef | string |   |   |   |
| crossReferenceType | string |   |   |   |
| crossReferenceTypeNumber | string |   |   |   |
| itemCategoryCode | string |   |   |   |
| nonstock | bool |   |   |   |
| purchasingCode | string |   |   |   |
| specialOrder | bool |   |   |   |
| specialOrderPurchaseNumber | string |   |   |   |
| specialOrderPurchLineNumber | int |   |   |   |
| whseOutstandingQty | float |   |   |   |
| whseOutstandingQtyBase | float |   |   |   |
| completelyShipped | bool |   |   |   |
| requestedDeliveryDate | date |   |   |   |
| promisedDeliveryDate | date |   |   |   |
| shippingTime | string |   |   |   |
| outboundWhseHandlingTime | string |   |   |   |
| plannedDeliveryDate | date |   |   |   |
| plannedShipmentDate | date |   |   |   |
| shippingAgentCode | string |   |   |   |
| shippingAgentServiceCode | string |   |   |   |
| allowItemChargeAssignment | bool |   |   |   |
| qtyToAssign | float |   |   |   |
| qtyAssigned | float |   |   |   |
| returnQtyToReceive | float |   |   |   |
| returnQtyToReceiveBase | float |   |   |   |
| returnQtyRcdNotInvd | float |   |   |   |
| retQtyRcdNotInvdBase | float |   |   |   |
| returnRcdNotInvd | float |   |   |   |
| returnRcdNotInvdLcy | float |   |   |   |
| returnQtyReceived | float |   |   |   |
| returnQtyReceivedBase | float |   |   |   |
| applFromItemEntry | int |   |   |   |
| bomItemNumber | string |   |   |   |
| returnReceiptNumber | string |   |   |   |
| returnReceiptLineNumber | int |   |   |   |
| returnReasonCode | string |   |   |   |
| allowLineDisc | bool |   |   |   |
| customerDiscGroup | string |   |   |   |
| subtype | string |   |   |   |
| priceDescription | string |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowVendors
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| number | string |   |   |   |
| name | string |   |   |   |
| searchName | string |   |   |   |
| name2 | string |   |   |   |
| address | string |   |   |   |
| address2 | string |   |   |   |
| city | string |   |   |   |
| contact | string |   |   |   |
| phoneNumber | string |   |   |   |
| telexNumber | string |   |   |   |
| ourAccountNumber | string |   |   |   |
| territoryCode | string |   |   |   |
| globalDimension1Code | string |   |   |   |
| globalDimension2Code | string |   |   |   |
| budgetedAmount | float |   |   |   |
| vendorPostingGroup | string |   |   |   |
| currencyCode | string |   |   |   |
| languageCode | string |   |   |   |
| statisticsGroup | int |   |   |   |
| paymentTermsCode | string |   |   |   |
| finChargeTermsCode | string |   |   |   |
| purchaserCode | string |   |   |   |
| shipmentMethodCode | string |   |   |   |
| shippingAgentCode | string |   |   |   |
| invoiceDiscCode | string |   |   |   |
| countryRegionCode | string |   |   |   |
| comment | bool |   |   |   |
| blocked | string |   |   |   |
| payToVendorNumber | string |   |   |   |
| priority | int |   |   |   |
| paymentMethodCode | string |   |   |   |
| lastModifiedDateTime | date |   |   |   |
| lastDateModified | date |   |   |   |
| dateFilter | string |   |   |   |
| globalDimension1Filter | string |   |   |   |
| globalDimension2Filter | string |   |   |   |
| balance | float |   |   |   |
| balanceLcy | float |   |   |   |
| netChange | float |   |   |   |
| netChangeLcy | float |   |   |   |
| purchasesLcy | float |   |   |   |
| invDiscountsLcy | float |   |   |   |
| pmtDiscountsLcy | float |   |   |   |
| balanceDue | float |   |   |   |
| balanceDueLcy | float |   |   |   |
| payments | float |   |   |   |
| invoiceAmounts | float |   |   |   |
| crMemoAmounts | float |   |   |   |
| financeChargeMemoAmounts | float |   |   |   |
| paymentsLcy | float |   |   |   |
| invAmountsLcy | float |   |   |   |
| crMemoAmountsLcy | float |   |   |   |
| finChargeMemoAmountsLcy | float |   |   |   |
| outstandingOrders | float |   |   |   |
| amtRcdNotInvoiced | float |   |   |   |
| applicationMethod | string |   |   |   |
| pricesIncludingVat | bool |   |   |   |
| faxNumber | string |   |   |   |
| telexAnswerBack | string |   |   |   |
| vatRegistrationNumber | string |   |   |   |
| genBusPostingGroup | string |   |   |   |
| gln | string |   |   |   |
| postCode | string |   |   |   |
| county | string |   |   |   |
| debitAmount | float |   |   |   |
| creditAmount | float |   |   |   |
| debitAmountLcy | float |   |   |   |
| creditAmountLcy | float |   |   |   |
| eMail | string |   |   |   |
| homePage | string |   |   |   |
| reminderAmounts | float |   |   |   |
| reminderAmountsLcy | float |   |   |   |
| numberSeries | string |   |   |   |
| taxAreaCode | string |   |   |   |
| taxLiable | bool |   |   |   |
| vatBusPostingGroup | string |   |   |   |
| currencyFilter | string |   |   |   |
| outstandingOrdersLcy | float |   |   |   |
| amtRcdNotInvoicedLcy | float |   |   |   |
| blockPaymentTolerance | bool |   |   |   |
| pmtDiscToleranceLcy | float |   |   |   |
| pmtToleranceLcy | float |   |   |   |
| icPartnerCode | string |   |   |   |
| refunds | float |   |   |   |
| refundsLcy | float |   |   |   |
| otherAmounts | float |   |   |   |
| otherAmountsLcy | float |   |   |   |
| prepaymentPercent | float |   |   |   |
| outstandingInvoices | float |   |   |   |
| outstandingInvoicesLcy | float |   |   |   |
| payToNumberOfArchivedDoc | int |   |   |   |
| buyFromNumberOfArchivedDoc | int |   |   |   |
| partnerType | string |   |   |   |
| creditorNumber | string |   |   |   |
| preferredBankAccountCode | string |   |   |   |
| cashFlowPaymentTermsCode | string |   |   |   |
| primaryContactNumber | string |   |   |   |
| responsibilityCenter | string |   |   |   |
| locationCode | string |   |   |   |
| leadTimeCalculation | string |   |   |   |
| numberOfPstdReceipts | int |   |   |   |
| numberOfPstdInvoices | int |   |   |   |
| numberOfPstdReturnShipments | int |   |   |   |
| numberOfPstdCreditMemos | int |   |   |   |
| payToNumberOfOrders | int |   |   |   |
| payToNumberOfInvoices | int |   |   |   |
| payToNumberOfReturnOrders | int |   |   |   |
| payToNumberOfCreditMemos | int |   |   |   |
| payToNumberOfPstdReceipts | int |   |   |   |
| payToNumberOfPstdInvoices | int |   |   |   |
| payToNumberOfPstdReturnS | int |   |   |   |
| payToNumberOfPstdCrMemos | int |   |   |   |
| numberOfQuotes | int |   |   |   |
| numberOfBlanketOrders | int |   |   |   |
| numberOfOrders | int |   |   |   |
| numberOfInvoices | int |   |   |   |
| numberOfReturnOrders | int |   |   |   |
| numberOfCreditMemos | int |   |   |   |
| numberOfOrderAddresses | int |   |   |   |
| payToNumberOfQuotes | int |   |   |   |
| payToNumberOfBlanketOrders | int |   |   |   |
| numberOfIncomingDocuments | int |   |   |   |
| baseCalendarCode | string |   |   |   |
| documentSendingProfile | string |   |   |   |
| validateEuVatRegNumber | bool |   |   |   |
| currencyId | guid |   |   |   |
| paymentTermsId | guid |   |   |   |
| paymentMethodId | guid |   |   |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowWebhookSubscriptions
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   |   |
| notificationUrl | string |   |   |   |
| conditions | string |   |   |   |
| eventCode | string |   |   |   |
| clientType | string |   |   |   |
| clientId | guid |   |   |   |
| enabled | bool |   |   |   |

