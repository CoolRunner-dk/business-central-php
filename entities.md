# AccountantPortalActivityCues
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| overduePurchInvoiceAmount | string |   |   | X |
| overduePurchInvoiceStyle | string |   |   | X |
| overdueSalesInvoiceAmount | string |   |   | X |
| overdueSalesInvoiceStyle | string |   |   | X |
| nonAppliedPaymentsAmount | string |   |   | X |
| nonAppliedPaymentsStyle | string |   |   | X |
| purchInvoicesDueNextWeekAmount | string |   |   | X |
| purchInvoicesDueNextWeekStyle | string |   |   | X |
| salesInvoicesDueNextWeekAmount | string |   |   | X |
| salesInvoicesDueNextWeekStyle | string |   |   | X |
| ongoingPurchaseInvoicesAmount | string |   |   | X |
| ongoingPurchaseInvoicesStyle | string |   |   | X |
| ongoingSalesInvoicesAmount | string |   |   | X |
| ongoingSalesInvoicesStyle | string |   |   | X |
| salesThisMonthAmount | string |   |   | X |
| salesThisMonthStyle | string |   |   | X |
| top10CustomerSalesYTDAmount | string |   |   | X |
| top10CustomerSalesYTDStyle | string |   |   | X |
| averageCollectionDaysAmount | string |   |   | X |
| averageCollectionDaysStyle | string |   |   | X |
| ongoingSalesQuotesAmount | string |   |   | X |
| ongoingSalesQuotesStyle | string |   |   | X |
| ongoingSalesOrdersAmount | string |   |   | X |
| ongoingSalesOrdersStyle | string |   |   | X |
| requeststoApproveAmount | string |   |   | X |
| requeststoApproveStyle | string |   |   | X |
| purchaseOrdersAmount | string |   |   | X |
| purchaseOrdersStyle | string |   |   | X |
| salesInvPendDocExchangeAmount | string |   |   | X |
| salesInvPendDocExchangeStyle | string |   |   | X |
| salesCrMPendDocExchangeAmount | string |   |   | X |
| salesCrMPendDocExchangeStyle | string |   |   | X |
| myIncomingDocumentsAmount | string |   |   | X |
| myIncomingDocumentsStyle | string |   |   | X |
| incDocAwaitingVerifAmount | string |   |   | X |
| incDocAwaitingVerifStyle | string |   |   | X |
| contactNameAmount | string |   |   | X |
| contactNameStyle | string |   |   | X |

# AccountantPortalFinanceCues
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| overduePurchaseDocumentsAmount | string |   |   | X |
| overduePurchaseDocumentsStyle | string |   |   | X |
| purchaseDiscountsNextWeekAmount | string |   |   | X |
| purchaseDiscountsNextWeekStyle | string |   |   | X |
| overdueSalesDocumentsAmount | string |   |   | X |
| overdueSalesDocumentsStyle | string |   |   | X |
| purchaseDocumentsDueTodayAmount | string |   |   | X |
| purchaseDocumentsDueTodayStyle | string |   |   | X |
| vendorsPaymentsOnHoldAmount | string |   |   | X |
| vendorsPaymentsOnHoldStyle | string |   |   | X |
| pOsPendingApprovalAmount | string |   |   | X |
| pOsPendingApprovalStyle | string |   |   | X |
| sOsPendingApprovalAmount | string |   |   | X |
| sOsPendingApprovalStyle | string |   |   | X |
| approvedSalesOrdersAmount | string |   |   | X |
| approvedSalesOrdersStyle | string |   |   | X |
| approvedPurchaseOrdersAmount | string |   |   | X |
| approvedPurchaseOrdersStyle | string |   |   | X |
| purchaseReturnOrdersAmount | string |   |   | X |
| purchaseReturnOrdersStyle | string |   |   | X |
| salesReturnOrdersAllAmount | string |   |   | X |
| salesReturnOrdersAllStyle | string |   |   | X |
| customersBlockedAmount | string |   |   | X |
| customersBlockedStyle | string |   |   | X |
| newIncomingDocumentsAmount | string |   |   | X |
| newIncomingDocumentsStyle | string |   |   | X |
| approvedIncomingDocumentsAmount | string |   |   | X |
| approvedIncomingDocumentsStyle | string |   |   | X |
| oCRPendingAmount | string |   |   | X |
| oCRPendingStyle | string |   |   | X |
| oCRCompletedAmount | string |   |   | X |
| oCRCompletedStyle | string |   |   | X |
| requestsToApproveAmount | string |   |   | X |
| requestsToApproveStyle | string |   |   | X |
| requestsSentForApprovalAmount | string |   |   | X |
| requestsSentForApprovalStyle | string |   |   | X |
| cashAccountsBalanceAmount | string |   |   | X |
| cashAccountsBalanceStyle | string |   |   | X |
| lastDepreciatedPostedDateAmount | string |   |   | X |
| lastDepreciatedPostedDateStyle | string |   |   | X |
| lastLoginDateAmount | string |   |   | X |
| lastLoginDateStyle | string |   |   | X |

# AccountantPortalUserTasks
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| title | string |   |   | X |
| dueDateTime | date |   |   | X |
| percentComplete | int |   |   | X |
| priority | string |   |   | X |
| description | string |   |   | X |
| createdByName | string |   |   | X |
| createdDateTime | date |   |   | X |
| startDateTime | date |   |   | X |
| assignedTo | guid |   |   | X |
| link | string |   |   | X |
| userTaskGroupAssignedTo | string |   |   | X |

# BankAccountLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| transactionNo | int |   |   | X |
| bankAccountNo | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| open | bool |   |   | X |
| currencyCode | string |   |   | X |
| amount | float |   |   | X |
| debitAmount | float |   |   | X |
| creditAmount | float |   |   | X |
| remainingAmount | float |   |   | X |
| amountLCY | float |   |   | X |
| debitAmountLCY | float |   |   | X |
| creditAmountLCY | float |   |   | X |
| dimensionSetID | int |   |   | X |
| bankAccountName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# C2Graph
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| component | string |   |   | X |
| type | string |   |   | X |
| schema | string |   |   | X |

# CsApprovalComments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| tableID | int |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| userID | string |   |   | X |
| dateAndTime | date |   |   | X |
| comment | string |   |   | X |

# CsApprovalDocument
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| documentType | string |   |   | X |
| documentTypeInt | string |   |   | X |
| no | string |   |   | X |
| sourceNo | string |   |   | X |
| sourceName | string |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| docOnHold | string |   |   | X |
| docDueDate | date |   |   | X |
| nextApproverId | string |   |   | X |
| allowEditLines | bool |   |   | X |
| documentFilename | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| amountExclVATLCY | float |   |   | X |
| amountInclVATLCY | float |   |   | X |
| askRemoveOnHold | bool |   |   | X |

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
| entryNo | int |   |   | X |
| userID | string |   |   | X |
| userName | string |   |   | X |
| dateAndTime | date |   |   | X |
| comment | string |   |   | X |

# CsApprovalDocumentApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| sequenceNo | int |   |   | X |
| approverID | string |   |   | X |
| approverName | string |   |   | X |
| status | string |   |   | X |
| dateTimeSentForApproval | date |   |   | X |
| lastDateTimeModified | date |   |   | X |
| workflowInstanceID | guid |   |   | X |

# CsApprovalDocumentAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| currentUserId | string |   |   | X |
| tableID | int |   |   | X |
| documentType | int |   |   | X |
| documentNo | string |   |   | X |
| description | string |   |   | X |
| fileExtension | string |   |   | X |
| importedBy | string |   |   | X |
| importedDateTime | date |   |   | X |
| filename | string |   |   | X |
| allowDelete | bool |   |   | X |

# CsApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| tableID | int |   |   | X |
| approvalCode | string |   |   | X |
| documentType | string |   |   | X |
| documentTypeInt | string |   |   | X |
| documentNo | string |   |   | X |
| sequenceNo | int |   |   | X |
| sourceNo | string |   |   | X |
| sourceName | string |   |   | X |
| purchaserCode | string |   |   | X |
| approverID | string |   |   | X |
| status | string |   |   | X |
| statusInt | string |   |   | X |
| comment | bool |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| amountExclVATLCY | float |   |   | X |
| amountInclVATLCY | float |   |   | X |
| docOnHold | string |   |   | X |
| docDate | date |   |   | X |
| docLastComment | string |   |   | X |
| docFilename | string |   |   | X |
| hasAttachments | bool |   |   | X |
| currentApprover | string |   |   | X |
| askRemoveOnHold | bool |   |   | X |

# CsApprovalSharing
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| ownerUserID | string |   |   | X |
| sharedToUserID | string |   |   | X |
| sharingType | string |   |   | X |
| validFrom | date |   |   | X |
| validTo | date |   |   | X |
| ownerName | string |   |   | X |
| sharedToUserName | string |   |   | X |
| sharingTypeInt | string |   |   | X |
| displayOrder | int |   |   | X |
| useOwnersPermissions | bool |   |   | X |

# CsApprovers
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| userID | string |   |   | X |
| salespersPurchCode | string |   |   | X |
| name | string |   |   | X |

# CsDeferralTemplates
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| deferralCode | string |   |   | X |
| description | string |   |   | X |
| deferralPct | float |   |   | X |
| startDate | string |   |   | X |
| noOfPeriods | int |   |   | X |
| periodDescription | string |   |   | X |

# CsDimensionValues
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| dimCode | string |   |   | X |
| code | string |   |   | X |
| name | string |   |   | X |
| dimValueType | string |   |   | X |

# CsEnabledReasonCodes
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| tableID | int |   |   | X |
| docType | string |   |   | X |
| type | string |   |   | X |
| reasonCode | string |   |   | X |
| docTypeInt | string |   |   | X |
| typeInt | string |   |   | X |
| description | string |   |   | X |

# CsFixedAssets
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |

# CsGLAccounts
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| name | string |   |   | X |
| directPosting | bool |   |   | X |
| accountType | string |   |   | X |
| accountTypeInt | string |   |   | X |

# CsItemCharges
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |

# CsItems
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |

# CsJobTasks
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   | X |
| jobTaskNo | string |   |   | X |
| description | string |   |   | X |
| jobTaskType | string |   |   | X |
| indentation | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsJobs
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |
| billToCustomerNo | string |   |   | X |
| startingDate | date |   |   | X |
| endingDate | date |   |   | X |
| billToName | string |   |   | X |

# CsLocationCodes
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| name | string |   |   | X |

# CsPostedApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| tableID | int |   |   | X |
| approvalCode | string |   |   | X |
| documentNo | string |   |   | X |
| sequenceNo | int |   |   | X |
| sourceNo | string |   |   | X |
| sourceName | string |   |   | X |
| purchaserCode | string |   |   | X |
| approverID | string |   |   | X |
| status | string |   |   | X |
| statusInt | string |   |   | X |
| comment | bool |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| docDueDate | date |   |   | X |
| docOnHold | string |   |   | X |
| docDate | date |   |   | X |
| docLastComment | string |   |   | X |
| docFilename | string |   |   | X |
| hasAttachments | bool |   |   | X |

# CsPostedDocSearch
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| type | string |   |   | X |
| no | string |   |   | X |
| userID | string |   |   | X |
| name | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| extDocNo | string |   |   | X |
| currCode | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| docLastComment | string |   |   | X |
| docFilename | string |   |   | X |

# CsPostedPurchaseCrMemo
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| payToVendorNo | string |   |   | X |
| payToName | string |   |   | X |
| payToName2 | string |   |   | X |
| payToAddress | string |   |   | X |
| payToAddress2 | string |   |   | X |
| payToCity | string |   |   | X |
| payToContact | string |   |   | X |
| yourReference | string |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| purchaserCode | string |   |   | X |
| onHold | string |   |   | X |
| vendorCrMemoNo | string |   |   | X |
| payToPostCode | string |   |   | X |
| payToCounty | string |   |   | X |
| payToCountryRegionCode | string |   |   | X |
| payToCountryRegion | string |   |   | X |
| documentDate | date |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethod | string |   |   | X |
| documentFilename | string |   |   | X |
| pricesIncludingVAT | bool |   |   | X |
| lineAmountExclVAT | float |   |   | X |
| lineAmountInclVAT | float |   |   | X |
| amountExclVATLCY | float |   |   | X |
| amountInclVATLCY | float |   |   | X |
| webDim1Code | string |   |   | X |
| webDim2Code | string |   |   | X |
| webDim3Code | string |   |   | X |
| webDim4Code | string |   |   | X |
| webDim5Code | string |   |   | X |
| webDim6Code | string |   |   | X |
| webDim7Code | string |   |   | X |
| webDim8Code | string |   |   | X |

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
| entryNo | int |   |   | X |
| userID | string |   |   | X |
| userName | string |   |   | X |
| dateAndTime | date |   |   | X |
| comment | string |   |   | X |

# CsPostedPurchaseCrMemoApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| sequenceNo | int |   |   | X |
| approverID | string |   |   | X |
| approverName | string |   |   | X |
| status | string |   |   | X |
| statusInt | string |   |   | X |
| dateTimeSentForApproval | date |   |   | X |
| lastDateTimeModified | date |   |   | X |

# CsPostedPurchaseCrMemoAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| currentUserId | string |   |   | X |
| tableID | int |   |   | X |
| documentType | int |   |   | X |
| documentNo | string |   |   | X |
| description | string |   |   | X |
| fileExtension | string |   |   | X |
| importedBy | string |   |   | X |
| importedDateTime | date |   |   | X |
| filename | string |   |   | X |
| allowDelete | bool |   |   | X |

# CsPostedPurchaseCrMemoPurchLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   | X |
| lineNo | int |   |   | X |
| currentUserId | string |   |   | X |
| type | string |   |   | X |
| typeInt | string |   |   | X |
| no | string |   |   | X |
| postingAccountDescription | string |   |   | X |
| variantCode | string |   |   | X |
| prodPostingGroup | string |   |   | X |
| prodPostingGroupDesc | string |   |   | X |
| vATProdPostingGroup | string |   |   | X |
| vATProdPostingGroupDesc | string |   |   | X |
| description | string |   |   | X |
| description2 | string |   |   | X |
| locationCode | string |   |   | X |
| quantity | float |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureDesc | string |   |   | X |
| directUnitCost | float |   |   | X |
| indirectCostPct | float |   |   | X |
| lineAmount | float |   |   | X |
| lineDiscountPct | float |   |   | X |
| lineDiscountAmount | float |   |   | X |
| jobNo | string |   |   | X |
| jobDesc | string |   |   | X |
| jobTaskNo | string |   |   | X |
| jobTaskDesc | string |   |   | X |
| deferralCode | string |   |   | X |
| webDim1ValueCode | string |   |   | X |
| webDim2ValueCode | string |   |   | X |
| webDim3ValueCode | string |   |   | X |
| webDim4ValueCode | string |   |   | X |
| webDim5ValueCode | string |   |   | X |
| webDim6ValueCode | string |   |   | X |
| webDim7ValueCode | string |   |   | X |
| webDim8ValueCode | string |   |   | X |
| webDim1ValueName | string |   |   | X |
| webDim2ValueName | string |   |   | X |
| webDim3ValueName | string |   |   | X |
| webDim4ValueName | string |   |   | X |
| webDim5ValueName | string |   |   | X |
| webDim6ValueName | string |   |   | X |
| webDim7ValueName | string |   |   | X |
| webDim8ValueName | string |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseCrMemos
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| vendorNo | string |   |   | X |
| name | string |   |   | X |
| postingDate | date |   |   | X |
| docDate | date |   |   | X |
| vendorCrMemoNo | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| currCode | string |   |   | X |
| respCenter | string |   |   | X |
| docLastComment | string |   |   | X |
| docFilename | string |   |   | X |

# CsPostedPurchaseInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| payToVendorNo | string |   |   | X |
| payToName | string |   |   | X |
| payToName2 | string |   |   | X |
| payToAddress | string |   |   | X |
| payToAddress2 | string |   |   | X |
| payToCity | string |   |   | X |
| payToContact | string |   |   | X |
| yourReference | string |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| purchaserCode | string |   |   | X |
| onHold | string |   |   | X |
| vendorOrderNo | string |   |   | X |
| vendorInvoiceNo | string |   |   | X |
| payToPostCode | string |   |   | X |
| payToCounty | string |   |   | X |
| payToCountryRegionCode | string |   |   | X |
| payToCountryRegion | string |   |   | X |
| documentDate | date |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethod | string |   |   | X |
| documentFilename | string |   |   | X |
| pricesIncludingVAT | bool |   |   | X |
| lineAmountExclVAT | float |   |   | X |
| lineAmountInclVAT | float |   |   | X |
| amountExclVATLCY | float |   |   | X |
| amountInclVATLCY | float |   |   | X |
| webDim1Code | string |   |   | X |
| webDim2Code | string |   |   | X |
| webDim3Code | string |   |   | X |
| webDim4Code | string |   |   | X |
| webDim5Code | string |   |   | X |
| webDim6Code | string |   |   | X |
| webDim7Code | string |   |   | X |
| webDim8Code | string |   |   | X |

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
| entryNo | int |   |   | X |
| userID | string |   |   | X |
| userName | string |   |   | X |
| dateAndTime | date |   |   | X |
| comment | string |   |   | X |

# CsPostedPurchaseInvoiceApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| sequenceNo | int |   |   | X |
| approverID | string |   |   | X |
| approverName | string |   |   | X |
| status | string |   |   | X |
| statusInt | string |   |   | X |
| dateTimeSentForApproval | date |   |   | X |
| lastDateTimeModified | date |   |   | X |

# CsPostedPurchaseInvoiceAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| currentUserId | string |   |   | X |
| tableID | int |   |   | X |
| documentType | int |   |   | X |
| documentNo | string |   |   | X |
| description | string |   |   | X |
| fileExtension | string |   |   | X |
| importedBy | string |   |   | X |
| importedDateTime | date |   |   | X |
| filename | string |   |   | X |
| allowDelete | bool |   |   | X |

# CsPostedPurchaseInvoicePurchLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   | X |
| lineNo | int |   |   | X |
| currentUserId | string |   |   | X |
| type | string |   |   | X |
| typeInt | string |   |   | X |
| no | string |   |   | X |
| postingAccountDescription | string |   |   | X |
| variantCode | string |   |   | X |
| prodPostingGroup | string |   |   | X |
| prodPostingGroupDesc | string |   |   | X |
| vATProdPostingGroup | string |   |   | X |
| vATProdPostingGroupDesc | string |   |   | X |
| description | string |   |   | X |
| description2 | string |   |   | X |
| locationCode | string |   |   | X |
| quantity | float |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureDesc | string |   |   | X |
| directUnitCost | float |   |   | X |
| indirectCostPct | float |   |   | X |
| lineAmount | float |   |   | X |
| lineDiscountPct | float |   |   | X |
| lineDiscountAmount | float |   |   | X |
| jobNo | string |   |   | X |
| jobDesc | string |   |   | X |
| jobTaskNo | string |   |   | X |
| jobTaskDesc | string |   |   | X |
| deferralCode | string |   |   | X |
| webDim1ValueCode | string |   |   | X |
| webDim2ValueCode | string |   |   | X |
| webDim3ValueCode | string |   |   | X |
| webDim4ValueCode | string |   |   | X |
| webDim5ValueCode | string |   |   | X |
| webDim6ValueCode | string |   |   | X |
| webDim7ValueCode | string |   |   | X |
| webDim8ValueCode | string |   |   | X |
| webDim1ValueName | string |   |   | X |
| webDim2ValueName | string |   |   | X |
| webDim3ValueName | string |   |   | X |
| webDim4ValueName | string |   |   | X |
| webDim5ValueName | string |   |   | X |
| webDim6ValueName | string |   |   | X |
| webDim7ValueName | string |   |   | X |
| webDim8ValueName | string |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPostedPurchaseInvoices
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| vendorNo | string |   |   | X |
| name | string |   |   | X |
| postingDate | date |   |   | X |
| docDate | date |   |   | X |
| vendorInvoiceNo | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| currCode | string |   |   | X |
| respCenter | string |   |   | X |
| docLastComment | string |   |   | X |
| docFilename | string |   |   | X |

# CsProdPostGroups
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| description | string |   |   | X |

# CsPurchaseDocument
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| no | string |   |   | X |
| documentTypeInt | string |   |   | X |
| payToVendorNo | string |   |   | X |
| payToName | string |   |   | X |
| payToName2 | string |   |   | X |
| payToAddress | string |   |   | X |
| payToAddress2 | string |   |   | X |
| payToCity | string |   |   | X |
| payToContact | string |   |   | X |
| yourReference | string |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| purchaserCode | string |   |   | X |
| onHold | string |   |   | X |
| vendorOrderNo | string |   |   | X |
| vendorInvoiceNo | string |   |   | X |
| vendorCrMemoNo | string |   |   | X |
| payToPostCode | string |   |   | X |
| payToCounty | string |   |   | X |
| payToCountryRegionCode | string |   |   | X |
| payToCountryRegion | string |   |   | X |
| documentDate | date |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethod | string |   |   | X |
| nextApproverId | string |   |   | X |
| allowEditLines | bool |   |   | X |
| documentFilename | string |   |   | X |
| pricesIncludingVAT | bool |   |   | X |
| importedAmountExclVAT | float |   |   | X |
| importedAmountInclVAT | float |   |   | X |
| importedAmountExclVATLCY | float |   |   | X |
| importedAmountInclVATLCY | float |   |   | X |
| assignedAmountExclVAT | float |   |   | X |
| assignedAmountInclVAT | float |   |   | X |
| headerAmount | float |   |   | X |
| headerAmountLCY | float |   |   | X |
| askRemoveOnHold | bool |   |   | X |
| webDim1Code | string |   |   | X |
| webDim2Code | string |   |   | X |
| webDim3Code | string |   |   | X |
| webDim4Code | string |   |   | X |
| webDim5Code | string |   |   | X |
| webDim6Code | string |   |   | X |
| webDim7Code | string |   |   | X |
| webDim8Code | string |   |   | X |

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
| entryNo | int |   |   | X |
| userID | string |   |   | X |
| userName | string |   |   | X |
| dateAndTime | date |   |   | X |
| comment | string |   |   | X |

# CsPurchaseDocumentApprovalEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| sequenceNo | int |   |   | X |
| approverID | string |   |   | X |
| approverName | string |   |   | X |
| status | string |   |   | X |
| dateTimeSentForApproval | date |   |   | X |
| lastDateTimeModified | date |   |   | X |
| workflowInstanceID | guid |   |   | X |

# CsPurchaseDocumentAttachedFiles
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| currentUserId | string |   |   | X |
| tableID | int |   |   | X |
| documentType | int |   |   | X |
| documentNo | string |   |   | X |
| description | string |   |   | X |
| fileExtension | string |   |   | X |
| importedBy | string |   |   | X |
| importedDateTime | date |   |   | X |
| filename | string |   |   | X |
| allowDelete | bool |   |   | X |

# CsPurchaseDocumentPurchLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| lineNo | int |   |   | X |
| currentUserId | string |   |   | X |
| documentTypeInt | string |   |   | X |
| type | string |   |   | X |
| typeInt | string |   |   | X |
| no | string |   |   | X |
| postingAccountDescription | string |   |   | X |
| variantCode | string |   |   | X |
| prodPostingGroup | string |   |   | X |
| prodPostingGroupDesc | string |   |   | X |
| vATProdPostingGroup | string |   |   | X |
| vATProdPostingGroupDesc | string |   |   | X |
| description | string |   |   | X |
| description2 | string |   |   | X |
| locationCode | string |   |   | X |
| quantity | float |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureDesc | string |   |   | X |
| directUnitCost | float |   |   | X |
| indirectCostPct | float |   |   | X |
| lineAmount | float |   |   | X |
| lineDiscountPct | float |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineStyle | string |   |   | X |
| jobNo | string |   |   | X |
| jobDesc | string |   |   | X |
| jobTaskNo | string |   |   | X |
| jobTaskDesc | string |   |   | X |
| deferralCode | string |   |   | X |
| fAPostingType | string |   |   | X |
| webDim1ValueCode | string |   |   | X |
| webDim2ValueCode | string |   |   | X |
| webDim3ValueCode | string |   |   | X |
| webDim4ValueCode | string |   |   | X |
| webDim5ValueCode | string |   |   | X |
| webDim6ValueCode | string |   |   | X |
| webDim7ValueCode | string |   |   | X |
| webDim8ValueCode | string |   |   | X |
| webDim1ValueName | string |   |   | X |
| webDim2ValueName | string |   |   | X |
| webDim3ValueName | string |   |   | X |
| webDim4ValueName | string |   |   | X |
| webDim5ValueName | string |   |   | X |
| webDim6ValueName | string |   |   | X |
| webDim7ValueName | string |   |   | X |
| webDim8ValueName | string |   |   | X |
| webDim1Rule | int |   |   | X |
| webDim2Rule | int |   |   | X |
| webDim3Rule | int |   |   | X |
| webDim4Rule | int |   |   | X |
| webDim5Rule | int |   |   | X |
| webDim6Rule | int |   |   | X |
| webDim7Rule | int |   |   | X |
| webDim8Rule | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsPurchaseLine
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| lineNo | int |   |   | X |
| currentUserId | string |   |   | X |
| documentTypeInt | string |   |   | X |
| type | string |   |   | X |
| typeInt | string |   |   | X |
| no | string |   |   | X |
| postingAccountDescription | string |   |   | X |
| variantCode | string |   |   | X |
| prodPostingGroup | string |   |   | X |
| prodPostingGroupDesc | string |   |   | X |
| vATProdPostingGroup | string |   |   | X |
| vATProdPostingGroupDesc | string |   |   | X |
| description | string |   |   | X |
| description2 | string |   |   | X |
| locationCode | string |   |   | X |
| quantity | float |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureDesc | string |   |   | X |
| directUnitCost | float |   |   | X |
| indirectCostPct | float |   |   | X |
| lineAmount | float |   |   | X |
| lineDiscountPct | float |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineStyle | string |   |   | X |
| jobNo | string |   |   | X |
| jobDesc | string |   |   | X |
| jobTaskNo | string |   |   | X |
| jobTaskDesc | string |   |   | X |
| deferralCode | string |   |   | X |
| fAPostingType | string |   |   | X |
| webDim1ValueCode | string |   |   | X |
| webDim2ValueCode | string |   |   | X |
| webDim3ValueCode | string |   |   | X |
| webDim4ValueCode | string |   |   | X |
| webDim5ValueCode | string |   |   | X |
| webDim6ValueCode | string |   |   | X |
| webDim7ValueCode | string |   |   | X |
| webDim8ValueCode | string |   |   | X |
| webDim1ValueName | string |   |   | X |
| webDim2ValueName | string |   |   | X |
| webDim3ValueName | string |   |   | X |
| webDim4ValueName | string |   |   | X |
| webDim5ValueName | string |   |   | X |
| webDim6ValueName | string |   |   | X |
| webDim7ValueName | string |   |   | X |
| webDim8ValueName | string |   |   | X |
| webDim1Rule | int |   |   | X |
| webDim2Rule | int |   |   | X |
| webDim3Rule | int |   |   | X |
| webDim4Rule | int |   |   | X |
| webDim5Rule | int |   |   | X |
| webDim6Rule | int |   |   | X |
| webDim7Rule | int |   |   | X |
| webDim8Rule | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
# CsStdAmountDistribCodes
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| description | string |   |   | X |
| enabledForPurchase | string |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csStdAmountDistribCodesVendors | [CsStdAmountDistribCodesVendors[]](#csstdamountdistribcodesvendors) | Yes |
# CsStdAmountDistribCodesVendors
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| vendorNo | string |   |   | X |
| amountDistributionCode | string |   |   | X |

# CsUnitOfMeasure
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| description | string |   |   | X |

# CsVATProdPostGroups
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| description | string |   |   | X |

# CsVendorInfo
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| name | string |   |   | X |
| name2 | string |   |   | X |
| address | string |   |   | X |
| address2 | string |   |   | X |
| postCodeCity | string |   |   | X |
| phoneNo | string |   |   | X |
| countryRegion | string |   |   | X |
| comment | bool |   |   | X |
| blocked | string |   |   | X |
| balanceLCY | float |   |   | X |
| balanceDueLCY | float |   |   | X |
| vATRegistrationNo | string |   |   | X |
| county | string |   |   | X |
| eMail | string |   |   | X |
| homePage | string |   |   | X |
| globalDimension1Filter | string |   |   | X |
| globalDimension2Filter | string |   |   | X |
| currencyFilter | string |   |   | X |
| dateFilter | string |   |   | X |

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
| tableName | string |   |   | X |
| no | string |   |   | X |
| lineNo | int |   |   | X |
| date | date |   |   | X |
| code | string |   |   | X |
| comment | string |   |   | X |

# CsVendorInfoContacts
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| name | string |   |   | X |
| phoneNo | string |   |   | X |
| eMail | string |   |   | X |

# CsVendorInfoDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| type | string |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| typeInt | string |   |   | X |
| documentTypeInt | string |   |   | X |
| currencyCode | string |   |   | X |
| amountExclVAT | float |   |   | X |
| amountInclVAT | float |   |   | X |
| date | date |   |   | X |
| fullyApplied | bool |   |   | X |
| onHold | string |   |   | X |
| latestComment | string |   |   | X |

# CsWebHelp
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| section | string |   |   | X |
| lineNo | int |   |   | X |
| heading | bool |   |   | X |
| text | string |   |   | X |
| bold | bool |   |   | X |
| italic | bool |   |   | X |
| underline | bool |   |   | X |
| link | string |   |   | X |
| linkType | string |   |   | X |
| newWindow | bool |   |   | X |

# CsWebMenu
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| description | string |   |   | X |
| sorting | int |   |   | X |

# CsWebSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| companyGuid | string |   |   | X |
| companyName | string |   |   | X |
| enableWebApproval | bool |   |   | X |
| lCYCode | string |   |   | X |
| showLCYAmounts | int |   |   | X |
| showType | bool |   |   | X |
| showPostingAccountName | bool |   |   | X |
| showJobNo | bool |   |   | X |
| showJobTaskNo | bool |   |   | X |
| showProdPostingGroup | bool |   |   | X |
| showVATProdGroup | bool |   |   | X |
| showDescription2 | bool |   |   | X |
| showLineDiscPct | bool |   |   | X |
| showUOM | bool |   |   | X |
| showFAPostingType | bool |   |   | X |
| showLocationCode | bool |   |   | X |
| showDeferralCode | bool |   |   | X |
| dimJobFieldPlacement | int |   |   | X |
| defSearchFromDate | date |   |   | X |
| defSearchToDate | date |   |   | X |
| defTimeZoneId | string |   |   | X |
| defNumberAndUnitsName | string |   |   | X |
| defLanguageName | string |   |   | X |
| webHelpActive | bool |   |   | X |
| advApprovalInvoice | bool |   |   | X |
| advApprovalCrMemo | bool |   |   | X |
| maxLineDescLength | int |   |   | X |
| allowForwardAndApprove | bool |   |   | X |
| allowForwardWOApproval | bool |   |   | X |
| allowForwardAndReturn | bool |   |   | X |
| dim1Code | string |   |   | X |
| dim2Code | string |   |   | X |
| dim3Code | string |   |   | X |
| dim4Code | string |   |   | X |
| dim5Code | string |   |   | X |
| dim6Code | string |   |   | X |
| dim7Code | string |   |   | X |
| dim8Code | string |   |   | X |
| dim1Name | string |   |   | X |
| dim2Name | string |   |   | X |
| dim3Name | string |   |   | X |
| dim4Name | string |   |   | X |
| dim5Name | string |   |   | X |
| dim6Name | string |   |   | X |
| dim7Name | string |   |   | X |
| dim8Name | string |   |   | X |
| lineDim1Code | string |   |   | X |
| lineDim2Code | string |   |   | X |
| lineDim3Code | string |   |   | X |
| lineDim4Code | string |   |   | X |
| lineDim5Code | string |   |   | X |
| lineDim6Code | string |   |   | X |
| lineDim7Code | string |   |   | X |
| lineDim8Code | string |   |   | X |
| lineDim1Name | string |   |   | X |
| lineDim2Name | string |   |   | X |
| lineDim3Name | string |   |   | X |
| lineDim4Name | string |   |   | X |
| lineDim5Name | string |   |   | X |
| lineDim6Name | string |   |   | X |
| lineDim7Name | string |   |   | X |
| lineDim8Name | string |   |   | X |
| cEMEnabled | bool |   |   | X |
| cDCEnabled | bool |   |   | X |

# CsWebSubMenu
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| webMenuCode | string |   |   | X |
| code | string |   |   | X |
| description | string |   |   | X |
| approvalCodeFilter | string |   |   | X |
| tableIDFilter | string |   |   | X |
| documentTypeFilter | string |   |   | X |
| sorting | int |   |   | X |

# CsWebUser
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| userID | string |   |   | X |
| documentSearch | string |   |   | X |
| purchRespCenterFilter | string |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| csWebUserPermissions | [CsWebUserPermissions[]](#cswebuserpermissions) | Yes |
# CsWebUserCompany
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| userId | string |   |   | X |
| companyCode | string |   |   | X |
| companyGuid | guid |   |   | X |
| noOfDocForApproval | int |   |   | X |
| noOfSharedDocuments | int |   |   | X |
| display | string |   |   | X |

# CsWebUserPermissions
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| continiaUserID | string |   |   | X |
| type | string |   |   | X |
| dimensionCode | string |   |   | X |
| approvalUserGroupCode | string |   |   | X |
| assigningPermission | string |   |   | X |
| approvalPermission | string |   |   | X |
| assigningFilter | string |   |   | X |
| approvalFilter | string |   |   | X |
| noOfRecords | int |   |   | X |

# CsWebUserPmsSelection
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| permissionType | string |   |   | X |
| continiaUserID | string |   |   | X |
| type | string |   |   | X |
| dimensionCode | string |   |   | X |
| approvalUserGroupCode | string |   |   | X |
| codeNo | string |   |   | X |
| typeInt | string |   |   | X |
| permissionTypeInt | string |   |   | X |
| name | string |   |   | X |
| blocked | bool |   |   | X |
| accountType | string |   |   | X |

# Company
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| name | string |   |   | X |
| evaluationCompany | bool |   |   | X |
| displayName | string |   |   | X |
| id | guid |   |   | X |
| businessProfileId | string |   |   | X |

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
| entryNo | int |   |   | X |
| transactionNo | int |   |   | X |
| customerNo | string |   |   | X |
| postingDate | date |   |   | X |
| dueDate | date |   |   | X |
| pmtDiscountDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| salespersonCode | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| iCPartnerCode | string |   |   | X |
| open | bool |   |   | X |
| currencyCode | string |   |   | X |
| dimensionSetID | int |   |   | X |
| amount | float |   |   | X |
| debitAmount | float |   |   | X |
| creditAmount | float |   |   | X |
| remainingAmount | float |   |   | X |
| amountLCY | float |   |   | X |
| debitAmountLCY | float |   |   | X |
| creditAmountLCY | float |   |   | X |
| remainingAmtLCY | float |   |   | X |
| originalAmtLCY | float |   |   | X |
| customerName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# DimensionSetEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| dimensionSetID | int |   |   | X |
| dimensionCode | string |   |   | X |
| dimensionValueCode | string |   |   | X |
| dimensionValueID | int |   |   | X |
| dimensionName | string |   |   | X |
| dimensionValueName | string |   |   | X |

# ExcelTemplateAgedAccountsPayable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| vendorId | guid |   |   | X |
| vendorNumber | string |   |   | X |
| name | string |   |   | X |
| currencyCode | string |   |   | X |
| balanceDue | float |   |   | X |
| currentAmount | float |   |   | X |
| period1Amount | float |   |   | X |
| period2Amount | float |   |   | X |
| period3Amount | float |   |   | X |
| agedAsOfDate | date |   |   | X |
| periodLengthFilter | string |   |   | X |

# ExcelTemplateAgedAccountsReceivable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| customerId | guid |   |   | X |
| customerNumber | string |   |   | X |
| name | string |   |   | X |
| currencyCode | string |   |   | X |
| balanceDue | float |   |   | X |
| currentAmount | float |   |   | X |
| period1Amount | float |   |   | X |
| period2Amount | float |   |   | X |
| period3Amount | float |   |   | X |
| agedAsOfDate | date |   |   | X |
| periodLengthFilter | string |   |   | X |

# ExcelTemplateBalanceSheet
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   | X |
| display | string |   |   | X |
| balance | float |   |   | X |
| lineType | string |   |   | X |
| indentation | int |   |   | X |
| dateFilter | date |   |   | X |

# ExcelTemplateCashFlowStatement
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   | X |
| display | string |   |   | X |
| netChange | float |   |   | X |
| lineType | string |   |   | X |
| indentation | int |   |   | X |
| dateFilter | date |   |   | X |

# ExcelTemplateIncomeStatement
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   | X |
| display | string |   |   | X |
| netChange | float |   |   | X |
| lineType | string |   |   | X |
| indentation | int |   |   | X |
| dateFilter | date |   |   | X |

# ExcelTemplateRetainedEarnings
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| lineNumber | int |   |   | X |
| display | string |   |   | X |
| netChange | float |   |   | X |
| lineType | string |   |   | X |
| indentation | int |   |   | X |
| dateFilter | date |   |   | X |

# ExcelTemplateTrialBalance
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| number | string |   |   | X |
| accountId | guid |   |   | X |
| accountType | string |   |   | X |
| display | string |   |   | X |
| totalDebit | string |   |   | X |
| totalCredit | string |   |   | X |
| balanceAtDateDebit | string |   |   | X |
| balanceAtDateCredit | string |   |   | X |
| dateFilter | date |   |   | X |

# ExcelTemplateViewCompanyInformation
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| displayName | string |   |   | X |
| currency | string |   |   | X |

# FALedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| gLEntryNo | int |   |   | X |
| fANo | string |   |   | X |
| fAClassCode | string |   |   | X |
| fASubclassCode | string |   |   | X |
| fAPostingDate | date |   |   | X |
| fAPostingCategory | string |   |   | X |
| fAPostingType | string |   |   | X |
| fALocationCode | string |   |   | X |
| depreciationBookCode | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| locationCode | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| amountLCY | float |   |   | X |
| dimensionSetID | int |   |   | X |
| fADescription | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# GLBudgetEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| budgetName | string |   |   | X |
| gLAccountNo | string |   |   | X |
| businessUnitCode | string |   |   | X |
| date | date |   |   | X |
| amount | float |   |   | X |
| dimensionSetID | int |   |   | X |

# GLEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| transactionNo | int |   |   | X |
| gLAccountNo | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| sourceCode | string |   |   | X |
| jobNo | string |   |   | X |
| businessUnitCode | string |   |   | X |
| reasonCode | string |   |   | X |
| genPostingType | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| taxAreaCode | string |   |   | X |
| taxLiable | bool |   |   | X |
| taxGroupCode | string |   |   | X |
| useTax | bool |   |   | X |
| vATBusPostingGroup | string |   |   | X |
| vATProdPostingGroup | string |   |   | X |
| iCPartnerCode | string |   |   | X |
| amount | float |   |   | X |
| debitAmount | float |   |   | X |
| creditAmount | float |   |   | X |
| vATAmount | float |   |   | X |
| additionalCurrencyAmount | float |   |   | X |
| addCurrencyDebitAmount | float |   |   | X |
| addCurrencyCreditAmount | float |   |   | X |
| dimensionSetID | int |   |   | X |
| gLAccountName | string |   |   | X |

# GeneralJournals
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| journalTemplateName | string |   |   | X |
| journalBatchName | string |   |   | X |
| lineNo | int |   |   | X |
| currentJnlBatchName | string |   |   | X |
| x003CDocumentNoSimplePageX003E | string |   |   | X |
| x003CCurrentPostingDateX003E | date |   |   | X |
| x003CCurrentCurrencyCodeX003E | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| incomingDocumentEntryNo | int |   |   | X |
| externalDocumentNo | string |   |   | X |
| appliesToExtDocNo | string |   |   | X |
| accountType | string |   |   | X |
| accountNo | string |   |   | X |
| accountName | string |   |   | X |
| description | string |   |   | X |
| payerInformation | string |   |   | X |
| transactionInformation | string |   |   | X |
| businessUnitCode | string |   |   | X |
| salespersPurchCode | string |   |   | X |
| campaignNo | string |   |   | X |
| currencyCode | string |   |   | X |
| eU3PartyTrade | bool |   |   | X |
| genPostingType | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| vATBusPostingGroup | string |   |   | X |
| vATProdPostingGroup | string |   |   | X |
| quantity | float |   |   | X |
| amount | float |   |   | X |
| amountLCY | float |   |   | X |
| debitAmount | float |   |   | X |
| creditAmount | float |   |   | X |
| vATAmount | float |   |   | X |
| vATDifference | float |   |   | X |
| balVATAmount | float |   |   | X |
| balVATDifference | float |   |   | X |
| balAccountType | string |   |   | X |
| balAccountNo | string |   |   | X |
| balGenPostingType | string |   |   | X |
| balGenBusPostingGroup | string |   |   | X |
| balGenProdPostingGroup | string |   |   | X |
| deferralCode | string |   |   | X |
| jobQueueStatus | string |   |   | X |
| balVATBusPostingGroup | string |   |   | X |
| balVATProdPostingGroup | string |   |   | X |
| billToPayToNo | string |   |   | X |
| shipToOrderAddressCode | string |   |   | X |
| paymentTermsCode | string |   |   | X |
| appliedAutomatically | bool |   |   | X |
| applied | bool |   |   | X |
| appliesToDocType | string |   |   | X |
| appliesToDocNo | string |   |   | X |
| appliesToID | string |   |   | X |
| onHold | string |   |   | X |
| bankPaymentType | string |   |   | X |
| reasonCode | string |   |   | X |
| correction | bool |   |   | X |
| comment | string |   |   | X |
| directDebitMandateID | string |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimCode3 | string |   |   | X |
| shortcutDimCode4 | string |   |   | X |
| shortcutDimCode5 | string |   |   | X |
| shortcutDimCode6 | string |   |   | X |
| shortcutDimCode7 | string |   |   | X |
| shortcutDimCode8 | string |   |   | X |
| numberOfJournalRecords | int |   |   | X |
| balAccName | string |   |   | X |
| displayTotalDebit | float |   |   | X |
| displayTotalCredit | float |   |   | X |
| balance | float |   |   | X |
| totalBalance | float |   |   | X |

# InvoiceDocument
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| invoiceId | guid |   |   | X |
| base64 | string |   |   | X |
| binary | string |   |   | X |

# InvoiceReminder
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| invoiceId | guid |   |   | X |
| message | string |   |   | X |

# ItemLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| entryType | string |   |   | X |
| itemNo | string |   |   | X |
| crossReferenceNo | string |   |   | X |
| lotNo | string |   |   | X |
| itemCategoryCode | string |   |   | X |
| postingDate | date |   |   | X |
| expirationDate | date |   |   | X |
| warrantyDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentNo | string |   |   | X |
| documentType | string |   |   | X |
| locationCode | string |   |   | X |
| jobNo | string |   |   | X |
| jobTaskNo | string |   |   | X |
| open | bool |   |   | X |
| quantity | float |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| remainingQuantity | float |   |   | X |
| invoicedQuantity | float |   |   | X |
| dimensionSetID | int |   |   | X |
| costAmountExpected | float |   |   | X |
| costAmountActual | float |   |   | X |
| costAmountNonInvtbl | float |   |   | X |
| purchaseAmountExpected | float |   |   | X |
| purchaseAmountActual | float |   |   | X |
| salesAmountExpected | float |   |   | X |
| salesAmountActual | float |   |   | X |
| itemDescription | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# ItemSalesAndProfit
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| itemDiscGroup | string |   |   | X |
| itemTrackingCode | string |   |   | X |
| profit | float |   |   | X |
| scrap | float |   |   | X |
| salesUnitOfMeasure | string |   |   | X |
| standardCost | float |   |   | X |
| unitCost | float |   |   | X |
| unitPrice | float |   |   | X |
| unitVolume | float |   |   | X |
| vendorNo | string |   |   | X |
| purchUnitOfMeasure | string |   |   | X |
| cOGSLCY | float |   |   | X |
| inventory | float |   |   | X |
| netChange | float |   |   | X |
| netInvoicedQty | float |   |   | X |
| purchasesLCY | float |   |   | X |
| purchasesQty | float |   |   | X |
| salesLCY | float |   |   | X |
| salesQty | float |   |   | X |
| vendorName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# ItemSalesByCustomer
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| documentNo | string |   |   | X |
| postingDate | date |   |   | X |
| itemNo | string |   |   | X |
| itemLedgerEntryQuantity | float |   |   | X |
| dimensionSetID | int |   |   | X |
| customerNo | string |   |   | X |
| name | string |   |   | X |
| description | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# JobLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| jobNo | string |   |   | X |
| jobTaskNo | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentNo | string |   |   | X |
| jobPostingGroup | string |   |   | X |
| resourceGroupNo | string |   |   | X |
| workTypeCode | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| locationCode | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| quantityBase | float |   |   | X |
| directUnitCostLCY | float |   |   | X |
| unitCostLCY | float |   |   | X |
| totalCostLCY | float |   |   | X |
| unitPriceLCY | float |   |   | X |
| totalPriceLCY | float |   |   | X |
| lineAmountLCY | float |   |   | X |
| dimensionSetID | int |   |   | X |
| jobDescription | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# JobList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |
| billToCustomerNo | string |   |   | X |
| status | string |   |   | X |
| personResponsible | string |   |   | X |
| nextInvoiceDate | date |   |   | X |
| jobPostingGroup | string |   |   | X |
| searchDescription | string |   |   | X |
| percentOfOverduePlanningLines | float |   |   | X |
| percentCompleted | float |   |   | X |
| percentInvoiced | float |   |   | X |
| projectManager | string |   |   | X |

# JobPlanningLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   | X |
| jobTaskNo | string |   |   | X |
| lineNo | int |   |   | X |
| lineType | string |   |   | X |
| usageLink | bool |   |   | X |
| planningDate | date |   |   | X |
| plannedDeliveryDate | date |   |   | X |
| currencyDate | date |   |   | X |
| documentNo | string |   |   | X |
| type | string |   |   | X |
| no | string |   |   | X |
| description | string |   |   | X |
| priceCalculationMethod | string |   |   | X |
| costCalculationMethod | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| variantCode | string |   |   | X |
| locationCode | string |   |   | X |
| workTypeCode | string |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| reserveName | string |   |   | X |
| quantity | float |   |   | X |
| reservedQuantity | float |   |   | X |
| quantityBase | float |   |   | X |
| remainingQty | float |   |   | X |
| directUnitCostLCY | float |   |   | X |
| unitCost | float |   |   | X |
| unitCostLCY | float |   |   | X |
| totalCost | float |   |   | X |
| remainingTotalCost | float |   |   | X |
| totalCostLCY | float |   |   | X |
| remainingTotalCostLCY | float |   |   | X |
| unitPrice | float |   |   | X |
| unitPriceLCY | float |   |   | X |
| lineAmount | float |   |   | X |
| remainingLineAmount | float |   |   | X |
| lineAmountLCY | float |   |   | X |
| remainingLineAmountLCY | float |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountPercent | float |   |   | X |
| totalPrice | float |   |   | X |
| totalPriceLCY | float |   |   | X |
| qtyPosted | float |   |   | X |
| qtyToTransferToJournal | float |   |   | X |
| postedTotalCost | float |   |   | X |
| postedTotalCostLCY | float |   |   | X |
| postedLineAmount | float |   |   | X |
| postedLineAmountLCY | float |   |   | X |
| qtyTransferredToInvoice | float |   |   | X |
| qtyToTransferToInvoice | float |   |   | X |
| qtyInvoiced | float |   |   | X |
| qtyToInvoice | float |   |   | X |
| invoicedAmountLCY | float |   |   | X |
| invoicedCostAmountLCY | float |   |   | X |
| userID | string |   |   | X |
| serialNo | string |   |   | X |
| lotNo | string |   |   | X |
| jobContractEntryNo | int |   |   | X |
| ledgerEntryType | string |   |   | X |
| ledgerEntryNo | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| overdue | bool |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| jobTaskNoLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# JobTaskLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   | X |
| jobTaskNo | string |   |   | X |
| description | string |   |   | X |
| jobTaskType | string |   |   | X |
| totaling | string |   |   | X |
| jobPostingGroup | string |   |   | X |
| wIPTotal | string |   |   | X |
| wIPMethod | string |   |   | X |
| startDate | date |   |   | X |
| endDate | date |   |   | X |
| scheduleTotalCost | float |   |   | X |
| scheduleTotalPrice | float |   |   | X |
| usageTotalCost | float |   |   | X |
| usageTotalPrice | float |   |   | X |
| contractTotalCost | float |   |   | X |
| contractTotalPrice | float |   |   | X |
| contractInvoicedCost | float |   |   | X |
| contractInvoicedPrice | float |   |   | X |
| remainingTotalCost | float |   |   | X |
| remainingTotalPrice | float |   |   | X |
| eACTotalCost | float |   |   | X |
| eACTotalPrice | float |   |   | X |
| globalDimension1Code | string |   |   | X |
| globalDimension2Code | string |   |   | X |
| outstandingOrders | float |   |   | X |
| amtRcdNotInvoiced | float |   |   | X |
| planningDateFilter | string |   |   | X |
| postingDateFilter | string |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNoLinks | [JobList[]](#joblist) | Yes |
| totalingLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# Media
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | guid |   |   | X |
| description | string |   |   | X |
| content | string |   |   | X |
| mimeType | string |   |   | X |
| height | int |   |   | X |
| width | int |   |   | X |
| companyName | string |   |   | X |
| expirationDate | date |   |   | X |
| prohibitCache | bool |   |   | X |
| fileName | string |   |   | X |
| securityToken | string |   |   | X |
| creatingUser | string |   |   | X |

# PowerBIAgedAccPayable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| value | float |   |   | X |
| periodType | string |   |   | X |
| date | string |   |   | X |
| dateSorting | int |   |   | X |
| periodTypeSorting | int |   |   | X |

# PowerBIAgedAccReceivable
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| value | float |   |   | X |
| periodType | string |   |   | X |
| date | string |   |   | X |
| measureName | string |   |   | X |
| dateSorting | int |   |   | X |
| periodTypeSorting | int |   |   | X |

# PowerBIAgedInventoryChart
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| value | float |   |   | X |
| date | string |   |   | X |
| periodType | string |   |   | X |
| periodTypeSorting | int |   |   | X |

# PowerBICustItemLedgEnt
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| itemNo | string |   |   | X |
| quantity | float |   |   | X |
| auxiliaryIndex1 | int |   |   | X |

# PowerBICustLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| dueDate | date |   |   | X |
| open | bool |   |   | X |
| customerPostingGroup | string |   |   | X |
| salesLCY | float |   |   | X |
| postingDate | date |   |   | X |
| remainingAmtLCY | float |   |   | X |

# PowerBICustomerList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| customerName | string |   |   | X |
| customerNo | string |   |   | X |
| creditLimit | float |   |   | X |
| balanceDue | float |   |   | X |
| postingDate | date |   |   | X |
| custLedgerEntryNo | int |   |   | X |
| amount | float |   |   | X |
| amountLCY | float |   |   | X |
| transactionNo | int |   |   | X |
| entryNo | int |   |   | X |

# PowerBIGLAmountList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| gLAccountNo | string |   |   | X |
| name | string |   |   | X |
| accountType | string |   |   | X |
| debitCredit | string |   |   | X |
| postingDate | date |   |   | X |
| amount | float |   |   | X |
| entryNo | int |   |   | X |

# PowerBIGLBudgetedAmount
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| gLAccountNo | string |   |   | X |
| name | string |   |   | X |
| accountType | string |   |   | X |
| debitCredit | string |   |   | X |
| amount | float |   |   | X |
| date | date |   |   | X |
| auxiliaryIndex1 | int |   |   | X |

# PowerBIItemPurchaseList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| itemNo | string |   |   | X |
| searchDescription | string |   |   | X |
| purchasePostDate | date |   |   | X |
| purchasedQuantity | float |   |   | X |
| purchaseEntryNo | int |   |   | X |

# PowerBIItemSalesList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| itemNo | string |   |   | X |
| searchDescription | string |   |   | X |
| salesPostDate | date |   |   | X |
| soldQuantity | float |   |   | X |
| salesEntryNo | int |   |   | X |

# PowerBIJobActVBudgCost
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| measureNo | string |   |   | X |
| measureName | string |   |   | X |
| value | float |   |   | X |

# PowerBIJobActVBudgPrice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| measureNo | string |   |   | X |
| measureName | string |   |   | X |
| value | float |   |   | X |

# PowerBIJobProfitability
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| measureNo | string |   |   | X |
| measureName | string |   |   | X |
| value | float |   |   | X |

# PowerBIJobsList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| jobNo | string |   |   | X |
| searchDescription | string |   |   | X |
| complete | bool |   |   | X |
| status | string |   |   | X |
| postingDate | date |   |   | X |
| totalCost | float |   |   | X |
| entryNo | int |   |   | X |
| entryType | string |   |   | X |

# PowerBIPurchaseHdrVendor
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| itemNo | string |   |   | X |
| quantity | float |   |   | X |
| baseUnitOfMeasure | string |   |   | X |
| description | string |   |   | X |
| unitPrice | float |   |   | X |
| inventory | float |   |   | X |
| qtyOnPurchOrder | float |   |   | X |
| vendorNo | string |   |   | X |
| name | string |   |   | X |
| countryRegionCode | string |   |   | X |
| balance | float |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |
| auxiliaryIndex3 | string |   |   | X |
| auxiliaryIndex4 | int |   |   | X |
| auxiliaryIndex5 | string |   |   | X |

# PowerBIPurchaseList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   | X |
| orderDate | date |   |   | X |
| expectedReceiptDate | date |   |   | X |
| dueDate | date |   |   | X |
| pmtDiscountDate | date |   |   | X |
| quantity | float |   |   | X |
| amount | float |   |   | X |
| itemNo | string |   |   | X |
| description | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |
| auxiliaryIndex3 | string |   |   | X |
| auxiliaryIndex4 | int |   |   | X |

# PowerBIReportLabels
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| labelID | string |   |   | X |
| textValue | string |   |   | X |

# PowerBISalesHdrCust
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| itemNo | string |   |   | X |
| quantity | float |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyShippedBase | float |   |   | X |
| baseUnitOfMeasure | string |   |   | X |
| description | string |   |   | X |
| unitPrice | float |   |   | X |
| inventory | float |   |   | X |
| customerNo | string |   |   | X |
| name | string |   |   | X |
| countryRegionCode | string |   |   | X |
| balance | float |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |
| auxiliaryIndex3 | string |   |   | X |
| auxiliaryIndex4 | int |   |   | X |
| auxiliaryIndex5 | string |   |   | X |

# PowerBISalesList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentNo | string |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| shipmentDate | date |   |   | X |
| dueDate | date |   |   | X |
| quantity | float |   |   | X |
| amount | float |   |   | X |
| itemNo | string |   |   | X |
| description | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |
| auxiliaryIndex3 | string |   |   | X |
| auxiliaryIndex4 | int |   |   | X |

# PowerBISalesPipeline
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| rowNo | string |   |   | X |
| value | float |   |   | X |
| measureName | string |   |   | X |
| measureNo | string |   |   | X |

# PowerBITop5Opportunities
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| measureNo | string |   |   | X |
| value | float |   |   | X |
| measureName | string |   |   | X |

# PowerBITopCustOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| postingDate | date |   |   | X |
| customerNo | string |   |   | X |
| salesLCY | float |   |   | X |
| name | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# PowerBIVendItemLedgEnt
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| itemNo | string |   |   | X |
| quantity | float |   |   | X |
| auxiliaryIndex1 | int |   |   | X |

# PowerBIVendorLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| dueDate | date |   |   | X |
| open | bool |   |   | X |
| remainingAmtLCY | float |   |   | X |

# PowerBIVendorList
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| vendorNo | string |   |   | X |
| vendorName | string |   |   | X |
| balanceDue | float |   |   | X |
| postingDate | date |   |   | X |
| appliedVendLedgerEntryNo | int |   |   | X |
| amount | float |   |   | X |
| amountLCY | float |   |   | X |
| transactionNo | int |   |   | X |
| entryNo | int |   |   | X |
| remainingPmtDiscPossible | float |   |   | X |

# PowerBIWorkDateCalc
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| number | int |   |   | X |
| workDateNAV | date |   |   | X |

# ResLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| entryType | string |   |   | X |
| resourceNo | string |   |   | X |
| resourceGroupNo | string |   |   | X |
| jobNo | string |   |   | X |
| workTypeCode | string |   |   | X |
| postingDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentNo | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| quantity | float |   |   | X |
| quantityBase | float |   |   | X |
| directUnitCost | float |   |   | X |
| unitCost | float |   |   | X |
| totalCost | float |   |   | X |
| unitPrice | float |   |   | X |
| totalPrice | float |   |   | X |
| dimensionSetID | int |   |   | X |
| resourceName | string |   |   | X |
| resourceGroupName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |

# SalesDashboard
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| documentNo | string |   |   | X |
| postingDate | date |   |   | X |
| entryType | string |   |   | X |
| quantity | float |   |   | X |
| dimensionSetID | int |   |   | X |
| salesAmountActual | float |   |   | X |
| salesAmountExpected | float |   |   | X |
| costAmountActual | float |   |   | X |
| costAmountExpected | float |   |   | X |
| countryRegionName | string |   |   | X |
| customerName | string |   |   | X |
| customerPostingGroup | string |   |   | X |
| customerDiscGroup | string |   |   | X |
| city | string |   |   | X |
| description | string |   |   | X |
| salesPersonName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |
| auxiliaryIndex3 | string |   |   | X |
| auxiliaryIndex4 | string |   |   | X |

# SalesOpportunities
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | string |   |   | X |
| description | string |   |   | X |
| creationDate | date |   |   | X |
| closed | bool |   |   | X |
| salesCycleCode | string |   |   | X |
| dateClosed | date |   |   | X |
| priority | string |   |   | X |
| status | string |   |   | X |
| calcdCurrentValueLCY | float |   |   | X |
| chancesOfSuccess | float |   |   | X |
| completed | float |   |   | X |
| contactName | string |   |   | X |
| estimatedClosingDate | date |   |   | X |
| salespersonName | string |   |   | X |
| estimatedValueLCY | float |   |   | X |
| contactCompanyName | string |   |   | X |

# SalesOrdersBySalesPerson
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| itemNo | string |   |   | X |
| itemDescription | string |   |   | X |
| documentNo | string |   |   | X |
| amount | float |   |   | X |
| lineNo | int |   |   | X |
| dimensionSetID | int |   |   | X |
| postingDate | date |   |   | X |
| currenyDescription | string |   |   | X |
| currencyCode | string |   |   | X |
| salesPersonCode | string |   |   | X |
| salesPersonName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |
| auxiliaryIndex3 | string |   |   | X |
| auxiliaryIndex4 | string |   |   | X |

# SegmentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| segmentNo | string |   |   | X |
| lineNo | int |   |   | X |
| contactNo | string |   |   | X |
| campaignNo | string |   |   | X |
| salespersonCode | string |   |   | X |
| correspondenceType | string |   |   | X |
| interactionTemplateCode | string |   |   | X |
| costLCY | float |   |   | X |
| durationMin | float |   |   | X |
| attachmentNo | int |   |   | X |
| campaignResponse | bool |   |   | X |
| informationFlow | string |   |   | X |
| initiatedBy | string |   |   | X |
| contactAltAddressCode | string |   |   | X |
| evaluation | string |   |   | X |
| campaignTarget | bool |   |   | X |
| languageCode | string |   |   | X |
| description | string |   |   | X |
| date | date |   |   | X |
| timeOfInteraction | string |   |   | X |
| attemptFailed | bool |   |   | X |
| toDoNo | string |   |   | X |
| contactCompanyNo | string |   |   | X |
| campaignEntryNo | int |   |   | X |
| interactionGroupCode | string |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| sendWordDocAsAttmt | bool |   |   | X |
| contactVia | string |   |   | X |
| versionNo | int |   |   | X |
| docNoOccurrence | int |   |   | X |
| subject | string |   |   | X |
| opportunityNo | string |   |   | X |
| wizardStep | string |   |   | X |
| wizardContactName | string |   |   | X |
| opportunityDescription | string |   |   | X |
| campaignDescription | string |   |   | X |
| interactionSuccessful | bool |   |   | X |
| dialContact | bool |   |   | X |
| mailContact | bool |   |   | X |
| contactName | string |   |   | X |
| contactCompanyName | string |   |   | X |

# TopCustomerOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| name | string |   |   | X |
| no | string |   |   | X |
| countryRegionCode | string |   |   | X |
| city | string |   |   | X |
| globalDimension1Code | string |   |   | X |
| globalDimension2Code | string |   |   | X |
| salespersonCode | string |   |   | X |
| salesLCY | float |   |   | X |
| profitLCY | float |   |   | X |
| salesPersonName | string |   |   | X |
| countryRegionName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |
| auxiliaryIndex2 | string |   |   | X |

# UserTaskSetComplete
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| iD | int |   |   | X |
| title | string |   |   | X |
| dueDateTime | date |   |   | X |
| priority | string |   |   | X |
| percentComplete | int |   |   | X |
| assignedToUserName | string |   |   | X |
| userTaskGroupAssignedTo | string |   |   | X |
| createdDateTime | date |   |   | X |
| completedDateTime | date |   |   | X |
| startDateTime | date |   |   | X |
| createdByUserName | string |   |   | X |
| completedByUserName | string |   |   | X |

## Actions

### SetComplete
No parameters
# ValueEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| itemNo | string |   |   | X |
| itemLedgerEntryNo | int |   |   | X |
| itemLedgerEntryType | string |   |   | X |
| itemLedgerEntryQuantity | float |   |   | X |
| postingDate | date |   |   | X |
| valuationDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genProdPostingGroup | string |   |   | X |
| locationCode | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| jobNo | string |   |   | X |
| jobTaskNo | string |   |   | X |
| jobLedgerEntryNo | int |   |   | X |
| valuedQuantity | float |   |   | X |
| invoicedQuantity | float |   |   | X |
| costPerUnit | float |   |   | X |
| costPostedToGL | float |   |   | X |
| expectedCost | bool |   |   | X |
| costAmountActual | float |   |   | X |
| costAmountExpected | float |   |   | X |
| costAmountNonInvtbl | float |   |   | X |
| salesAmountActual | float |   |   | X |
| salesAmountExpected | float |   |   | X |
| purchaseAmountActual | float |   |   | X |
| purchaseAmountExpected | float |   |   | X |
| dimensionSetID | int |   |   | X |
| itemDescription | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# VendorLedgerEntries
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| entryNo | int |   |   | X |
| transactionNo | int |   |   | X |
| vendorNo | string |   |   | X |
| postingDate | date |   |   | X |
| dueDate | date |   |   | X |
| pmtDiscountDate | date |   |   | X |
| documentDate | date |   |   | X |
| documentType | string |   |   | X |
| documentNo | string |   |   | X |
| purchaserCode | string |   |   | X |
| sourceCode | string |   |   | X |
| reasonCode | string |   |   | X |
| iCPartnerCode | string |   |   | X |
| open | bool |   |   | X |
| currencyCode | string |   |   | X |
| dimensionSetID | int |   |   | X |
| amount | float |   |   | X |
| debitAmount | float |   |   | X |
| creditAmount | float |   |   | X |
| remainingAmount | float |   |   | X |
| amountLCY | float |   |   | X |
| debitAmountLCY | float |   |   | X |
| creditAmountLCY | float |   |   | X |
| remainingAmtLCY | float |   |   | X |
| originalAmtLCY | float |   |   | X |
| vendorName | string |   |   | X |
| auxiliaryIndex1 | string |   |   | X |

# InvoicingAttachment
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| documentId | guid |   |   | X |
| fileName | string |   |   | X |
| byteSize | int |   |   | X |
| content | string |   |   | X |
| base64Content | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |

## Actions

### Copy
No parameters
# InvoicingContact
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| number | string |   |   | X |
| xrmId | guid |   |   | X |
| displayName | string |   |   | X |
| phoneNumber | string |   |   | X |
| email | string |   |   | X |
| customerId | guid |   |   | X |

## Actions

### MakeCustomer
No parameters
# InvoicingCountryRegion
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| code | string |   |   | X |
| displayName | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |

# InvoicingCustomer
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| number | string |   |   | X |
| graphContactId | string |   |   | X |
| contactId | guid |   |   | X |
| displayName | string |   |   | X |
| type | string |   |   | X |
| isBlocked | bool |   |   | X |
| address | postalAddressType |   |   | X |
| address.street | string |   |   | X |
| address.city | string |   |   | X |
| address.state | string |   |   | X |
| address.countryLetterCode | string |   |   | X |
| address.postalCode | string |   |   | X |
| phoneNumber | string |   |   | X |
| phoneNumber.street | string |   |   | X |
| phoneNumber.city | string |   |   | X |
| phoneNumber.state | string |   |   | X |
| phoneNumber.countryLetterCode | string |   |   | X |
| phoneNumber.postalCode | string |   |   | X |
| email | string |   |   | X |
| email.street | string |   |   | X |
| email.city | string |   |   | X |
| email.state | string |   |   | X |
| email.countryLetterCode | string |   |   | X |
| email.postalCode | string |   |   | X |
| website | string |   |   | X |
| website.street | string |   |   | X |
| website.city | string |   |   | X |
| website.state | string |   |   | X |
| website.countryLetterCode | string |   |   | X |
| website.postalCode | string |   |   | X |
| pricesIncludeTax | bool |   |   | X |
| pricesIncludeTax.street | string |   |   | X |
| pricesIncludeTax.city | string |   |   | X |
| pricesIncludeTax.state | string |   |   | X |
| pricesIncludeTax.countryLetterCode | string |   |   | X |
| pricesIncludeTax.postalCode | string |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.street | string |   |   | X |
| taxLiable.city | string |   |   | X |
| taxLiable.state | string |   |   | X |
| taxLiable.countryLetterCode | string |   |   | X |
| taxLiable.postalCode | string |   |   | X |
| taxAreaId | guid |   |   | X |
| taxAreaId.street | string |   |   | X |
| taxAreaId.city | string |   |   | X |
| taxAreaId.state | string |   |   | X |
| taxAreaId.countryLetterCode | string |   |   | X |
| taxAreaId.postalCode | string |   |   | X |
| taxAreaDisplayName | string |   |   | X |
| taxAreaDisplayName.street | string |   |   | X |
| taxAreaDisplayName.city | string |   |   | X |
| taxAreaDisplayName.state | string |   |   | X |
| taxAreaDisplayName.countryLetterCode | string |   |   | X |
| taxAreaDisplayName.postalCode | string |   |   | X |
| taxRegistrationNumber | string |   |   | X |
| taxRegistrationNumber.street | string |   |   | X |
| taxRegistrationNumber.city | string |   |   | X |
| taxRegistrationNumber.state | string |   |   | X |
| taxRegistrationNumber.countryLetterCode | string |   |   | X |
| taxRegistrationNumber.postalCode | string |   |   | X |
| paymentTermsId | guid |   |   | X |
| paymentTermsId.street | string |   |   | X |
| paymentTermsId.city | string |   |   | X |
| paymentTermsId.state | string |   |   | X |
| paymentTermsId.countryLetterCode | string |   |   | X |
| paymentTermsId.postalCode | string |   |   | X |
| shipmentMethodId | guid |   |   | X |
| shipmentMethodId.street | string |   |   | X |
| shipmentMethodId.city | string |   |   | X |
| shipmentMethodId.state | string |   |   | X |
| shipmentMethodId.countryLetterCode | string |   |   | X |
| shipmentMethodId.postalCode | string |   |   | X |
| paymentMethodId | guid |   |   | X |
| paymentMethodId.street | string |   |   | X |
| paymentMethodId.city | string |   |   | X |
| paymentMethodId.state | string |   |   | X |
| paymentMethodId.countryLetterCode | string |   |   | X |
| paymentMethodId.postalCode | string |   |   | X |
| balance | float |   |   | X |
| balance.street | string |   |   | X |
| balance.city | string |   |   | X |
| balance.state | string |   |   | X |
| balance.countryLetterCode | string |   |   | X |
| balance.postalCode | string |   |   | X |
| overdueAmount | float |   |   | X |
| overdueAmount.street | string |   |   | X |
| overdueAmount.city | string |   |   | X |
| overdueAmount.state | string |   |   | X |
| overdueAmount.countryLetterCode | string |   |   | X |
| overdueAmount.postalCode | string |   |   | X |
| totalSalesExcludingTax | float |   |   | X |
| totalSalesExcludingTax.street | string |   |   | X |
| totalSalesExcludingTax.city | string |   |   | X |
| totalSalesExcludingTax.state | string |   |   | X |
| totalSalesExcludingTax.countryLetterCode | string |   |   | X |
| totalSalesExcludingTax.postalCode | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.street | string |   |   | X |
| lastModifiedDateTime.city | string |   |   | X |
| lastModifiedDateTime.state | string |   |   | X |
| lastModifiedDateTime.countryLetterCode | string |   |   | X |
| lastModifiedDateTime.postalCode | string |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingCustomersCoupons | [InvoicingCustomersCoupon[]](#invoicingcustomerscoupon) | Yes |
# InvoicingCustomersCoupon
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| claimId | string |   |   | X |
| claimId.street | string |   |   | X |
| claimId.city | string |   |   | X |
| claimId.state | string |   |   | X |
| claimId.countryLetterCode | string |   |   | X |
| claimId.postalCode | string |   |   | X |
| graphContactId | string |   |   | X |
| graphContactId.street | string |   |   | X |
| graphContactId.city | string |   |   | X |
| graphContactId.state | string |   |   | X |
| graphContactId.countryLetterCode | string |   |   | X |
| graphContactId.postalCode | string |   |   | X |
| customerId | guid |   |   | X |
| customerId.street | string |   |   | X |
| customerId.city | string |   |   | X |
| customerId.state | string |   |   | X |
| customerId.countryLetterCode | string |   |   | X |
| customerId.postalCode | string |   |   | X |
| usage | string |   |   | X |
| usage.street | string |   |   | X |
| usage.city | string |   |   | X |
| usage.state | string |   |   | X |
| usage.countryLetterCode | string |   |   | X |
| usage.postalCode | string |   |   | X |
| offer | string |   |   | X |
| offer.street | string |   |   | X |
| offer.city | string |   |   | X |
| offer.state | string |   |   | X |
| offer.countryLetterCode | string |   |   | X |
| offer.postalCode | string |   |   | X |
| terms | string |   |   | X |
| terms.street | string |   |   | X |
| terms.city | string |   |   | X |
| terms.state | string |   |   | X |
| terms.countryLetterCode | string |   |   | X |
| terms.postalCode | string |   |   | X |
| code | string |   |   | X |
| code.street | string |   |   | X |
| code.city | string |   |   | X |
| code.state | string |   |   | X |
| code.countryLetterCode | string |   |   | X |
| code.postalCode | string |   |   | X |
| expiration | date |   |   | X |
| expiration.street | string |   |   | X |
| expiration.city | string |   |   | X |
| expiration.state | string |   |   | X |
| expiration.countryLetterCode | string |   |   | X |
| expiration.postalCode | string |   |   | X |
| discountValue | float |   |   | X |
| discountValue.street | string |   |   | X |
| discountValue.city | string |   |   | X |
| discountValue.state | string |   |   | X |
| discountValue.countryLetterCode | string |   |   | X |
| discountValue.postalCode | string |   |   | X |
| discountType | string |   |   | X |
| discountType.street | string |   |   | X |
| discountType.city | string |   |   | X |
| discountType.state | string |   |   | X |
| discountType.countryLetterCode | string |   |   | X |
| discountType.postalCode | string |   |   | X |
| createdDateTime | date |   |   | X |
| createdDateTime.street | string |   |   | X |
| createdDateTime.city | string |   |   | X |
| createdDateTime.state | string |   |   | X |
| createdDateTime.countryLetterCode | string |   |   | X |
| createdDateTime.postalCode | string |   |   | X |
| isValid | bool |   |   | X |
| isValid.street | string |   |   | X |
| isValid.city | string |   |   | X |
| isValid.state | string |   |   | X |
| isValid.countryLetterCode | string |   |   | X |
| isValid.postalCode | string |   |   | X |
| status | string |   |   | X |
| status.street | string |   |   | X |
| status.city | string |   |   | X |
| status.state | string |   |   | X |
| status.countryLetterCode | string |   |   | X |
| status.postalCode | string |   |   | X |
| amount | string |   |   | X |
| amount.street | string |   |   | X |
| amount.city | string |   |   | X |
| amount.state | string |   |   | X |
| amount.countryLetterCode | string |   |   | X |
| amount.postalCode | string |   |   | X |
| isApplied | bool |   |   | X |
| isApplied.street | string |   |   | X |
| isApplied.city | string |   |   | X |
| isApplied.state | string |   |   | X |
| isApplied.countryLetterCode | string |   |   | X |
| isApplied.postalCode | string |   |   | X |

# InvoicingEmailPreview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentId | guid |   |   | X |
| documentId.street | string |   |   | X |
| documentId.city | string |   |   | X |
| documentId.state | string |   |   | X |
| documentId.countryLetterCode | string |   |   | X |
| documentId.postalCode | string |   |   | X |
| email | string |   |   | X |
| email.street | string |   |   | X |
| email.city | string |   |   | X |
| email.state | string |   |   | X |
| email.countryLetterCode | string |   |   | X |
| email.postalCode | string |   |   | X |
| subject | string |   |   | X |
| subject.street | string |   |   | X |
| subject.city | string |   |   | X |
| subject.state | string |   |   | X |
| subject.countryLetterCode | string |   |   | X |
| subject.postalCode | string |   |   | X |
| body | string |   |   | X |
| body.street | string |   |   | X |
| body.city | string |   |   | X |
| body.state | string |   |   | X |
| body.countryLetterCode | string |   |   | X |
| body.postalCode | string |   |   | X |
| bodyText | string |   |   | X |
| bodyText.street | string |   |   | X |
| bodyText.city | string |   |   | X |
| bodyText.state | string |   |   | X |
| bodyText.countryLetterCode | string |   |   | X |
| bodyText.postalCode | string |   |   | X |

# InvoicingEmailSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| code.street | string |   |   | X |
| code.city | string |   |   | X |
| code.state | string |   |   | X |
| code.countryLetterCode | string |   |   | X |
| code.postalCode | string |   |   | X |
| recipientType | string |   |   | X |
| recipientType.street | string |   |   | X |
| recipientType.city | string |   |   | X |
| recipientType.state | string |   |   | X |
| recipientType.countryLetterCode | string |   |   | X |
| recipientType.postalCode | string |   |   | X |
| eMail | string |   |   | X |
| eMail.street | string |   |   | X |
| eMail.city | string |   |   | X |
| eMail.state | string |   |   | X |
| eMail.countryLetterCode | string |   |   | X |
| eMail.postalCode | string |   |   | X |

# InvoicingExportInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| code.street | string |   |   | X |
| code.city | string |   |   | X |
| code.state | string |   |   | X |
| code.countryLetterCode | string |   |   | X |
| code.postalCode | string |   |   | X |
| startDate | date |   |   | X |
| startDate.street | string |   |   | X |
| startDate.city | string |   |   | X |
| startDate.state | string |   |   | X |
| startDate.countryLetterCode | string |   |   | X |
| startDate.postalCode | string |   |   | X |
| endDate | date |   |   | X |
| endDate.street | string |   |   | X |
| endDate.city | string |   |   | X |
| endDate.state | string |   |   | X |
| endDate.countryLetterCode | string |   |   | X |
| endDate.postalCode | string |   |   | X |
| email | string |   |   | X |
| email.street | string |   |   | X |
| email.city | string |   |   | X |
| email.state | string |   |   | X |
| email.countryLetterCode | string |   |   | X |
| email.postalCode | string |   |   | X |

# InvoicingGeneralSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| primaryKey.street | string |   |   | X |
| primaryKey.city | string |   |   | X |
| primaryKey.state | string |   |   | X |
| primaryKey.countryLetterCode | string |   |   | X |
| primaryKey.postalCode | string |   |   | X |
| currencySymbol | string |   |   | X |
| currencySymbol.street | string |   |   | X |
| currencySymbol.city | string |   |   | X |
| currencySymbol.state | string |   |   | X |
| currencySymbol.countryLetterCode | string |   |   | X |
| currencySymbol.postalCode | string |   |   | X |
| paypalEmailAddress | string |   |   | X |
| paypalEmailAddress.street | string |   |   | X |
| paypalEmailAddress.city | string |   |   | X |
| paypalEmailAddress.state | string |   |   | X |
| paypalEmailAddress.countryLetterCode | string |   |   | X |
| paypalEmailAddress.postalCode | string |   |   | X |
| countryRegionCode | string |   |   | X |
| countryRegionCode.street | string |   |   | X |
| countryRegionCode.city | string |   |   | X |
| countryRegionCode.state | string |   |   | X |
| countryRegionCode.countryLetterCode | string |   |   | X |
| countryRegionCode.postalCode | string |   |   | X |
| languageId | int |   |   | X |
| languageId.street | string |   |   | X |
| languageId.city | string |   |   | X |
| languageId.state | string |   |   | X |
| languageId.countryLetterCode | string |   |   | X |
| languageId.postalCode | string |   |   | X |
| languageCode | string |   |   | X |
| languageCode.street | string |   |   | X |
| languageCode.city | string |   |   | X |
| languageCode.state | string |   |   | X |
| languageCode.countryLetterCode | string |   |   | X |
| languageCode.postalCode | string |   |   | X |
| languageDisplayName | string |   |   | X |
| languageDisplayName.street | string |   |   | X |
| languageDisplayName.city | string |   |   | X |
| languageDisplayName.state | string |   |   | X |
| languageDisplayName.countryLetterCode | string |   |   | X |
| languageDisplayName.postalCode | string |   |   | X |
| defaultTaxId | guid |   |   | X |
| defaultTaxId.street | string |   |   | X |
| defaultTaxId.city | string |   |   | X |
| defaultTaxId.state | string |   |   | X |
| defaultTaxId.countryLetterCode | string |   |   | X |
| defaultTaxId.postalCode | string |   |   | X |
| defaultTaxDisplayName | string |   |   | X |
| defaultTaxDisplayName.street | string |   |   | X |
| defaultTaxDisplayName.city | string |   |   | X |
| defaultTaxDisplayName.state | string |   |   | X |
| defaultTaxDisplayName.countryLetterCode | string |   |   | X |
| defaultTaxDisplayName.postalCode | string |   |   | X |
| defaultPaymentTermsId | guid |   |   | X |
| defaultPaymentTermsId.street | string |   |   | X |
| defaultPaymentTermsId.city | string |   |   | X |
| defaultPaymentTermsId.state | string |   |   | X |
| defaultPaymentTermsId.countryLetterCode | string |   |   | X |
| defaultPaymentTermsId.postalCode | string |   |   | X |
| defaultPaymentTermsDisplayName | string |   |   | X |
| defaultPaymentTermsDisplayName.street | string |   |   | X |
| defaultPaymentTermsDisplayName.city | string |   |   | X |
| defaultPaymentTermsDisplayName.state | string |   |   | X |
| defaultPaymentTermsDisplayName.countryLetterCode | string |   |   | X |
| defaultPaymentTermsDisplayName.postalCode | string |   |   | X |
| defaultPaymentMethodId | guid |   |   | X |
| defaultPaymentMethodId.street | string |   |   | X |
| defaultPaymentMethodId.city | string |   |   | X |
| defaultPaymentMethodId.state | string |   |   | X |
| defaultPaymentMethodId.countryLetterCode | string |   |   | X |
| defaultPaymentMethodId.postalCode | string |   |   | X |
| defaultPaymentMethodDisplayName | string |   |   | X |
| defaultPaymentMethodDisplayName.street | string |   |   | X |
| defaultPaymentMethodDisplayName.city | string |   |   | X |
| defaultPaymentMethodDisplayName.state | string |   |   | X |
| defaultPaymentMethodDisplayName.countryLetterCode | string |   |   | X |
| defaultPaymentMethodDisplayName.postalCode | string |   |   | X |
| amountRoundingPrecision | float |   |   | X |
| amountRoundingPrecision.street | string |   |   | X |
| amountRoundingPrecision.city | string |   |   | X |
| amountRoundingPrecision.state | string |   |   | X |
| amountRoundingPrecision.countryLetterCode | string |   |   | X |
| amountRoundingPrecision.postalCode | string |   |   | X |
| unitAmountRoundingPrecision | float |   |   | X |
| unitAmountRoundingPrecision.street | string |   |   | X |
| unitAmountRoundingPrecision.city | string |   |   | X |
| unitAmountRoundingPrecision.state | string |   |   | X |
| unitAmountRoundingPrecision.countryLetterCode | string |   |   | X |
| unitAmountRoundingPrecision.postalCode | string |   |   | X |
| quantityRoundingPrecision | float |   |   | X |
| quantityRoundingPrecision.street | string |   |   | X |
| quantityRoundingPrecision.city | string |   |   | X |
| quantityRoundingPrecision.state | string |   |   | X |
| quantityRoundingPrecision.countryLetterCode | string |   |   | X |
| quantityRoundingPrecision.postalCode | string |   |   | X |
| taxRoundingPrecision | float |   |   | X |
| taxRoundingPrecision.street | string |   |   | X |
| taxRoundingPrecision.city | string |   |   | X |
| taxRoundingPrecision.state | string |   |   | X |
| taxRoundingPrecision.countryLetterCode | string |   |   | X |
| taxRoundingPrecision.postalCode | string |   |   | X |
| draftInvoiceFileName | string |   |   | X |
| draftInvoiceFileName.street | string |   |   | X |
| draftInvoiceFileName.city | string |   |   | X |
| draftInvoiceFileName.state | string |   |   | X |
| draftInvoiceFileName.countryLetterCode | string |   |   | X |
| draftInvoiceFileName.postalCode | string |   |   | X |
| postedInvoiceFileName | string |   |   | X |
| postedInvoiceFileName.street | string |   |   | X |
| postedInvoiceFileName.city | string |   |   | X |
| postedInvoiceFileName.state | string |   |   | X |
| postedInvoiceFileName.countryLetterCode | string |   |   | X |
| postedInvoiceFileName.postalCode | string |   |   | X |
| quoteFileName | string |   |   | X |
| quoteFileName.street | string |   |   | X |
| quoteFileName.city | string |   |   | X |
| quoteFileName.state | string |   |   | X |
| quoteFileName.countryLetterCode | string |   |   | X |
| quoteFileName.postalCode | string |   |   | X |
| taxableGroupId | guid |   |   | X |
| taxableGroupId.street | string |   |   | X |
| taxableGroupId.city | string |   |   | X |
| taxableGroupId.state | string |   |   | X |
| taxableGroupId.countryLetterCode | string |   |   | X |
| taxableGroupId.postalCode | string |   |   | X |
| nonTaxableGroupId | guid |   |   | X |
| nonTaxableGroupId.street | string |   |   | X |
| nonTaxableGroupId.city | string |   |   | X |
| nonTaxableGroupId.state | string |   |   | X |
| nonTaxableGroupId.countryLetterCode | string |   |   | X |
| nonTaxableGroupId.postalCode | string |   |   | X |
| enableSynchronization | bool |   |   | X |
| enableSynchronization.street | string |   |   | X |
| enableSynchronization.city | string |   |   | X |
| enableSynchronization.state | string |   |   | X |
| enableSynchronization.countryLetterCode | string |   |   | X |
| enableSynchronization.postalCode | string |   |   | X |
| enableSyncCoupons | bool |   |   | X |
| enableSyncCoupons.street | string |   |   | X |
| enableSyncCoupons.city | string |   |   | X |
| enableSyncCoupons.state | string |   |   | X |
| enableSyncCoupons.countryLetterCode | string |   |   | X |
| enableSyncCoupons.postalCode | string |   |   | X |
| updateVersion | string |   |   | X |
| updateVersion.street | string |   |   | X |
| updateVersion.city | string |   |   | X |
| updateVersion.state | string |   |   | X |
| updateVersion.countryLetterCode | string |   |   | X |
| updateVersion.postalCode | string |   |   | X |

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
| id | guid |   |   | X |
| id.street | string |   |   | X |
| id.city | string |   |   | X |
| id.state | string |   |   | X |
| id.countryLetterCode | string |   |   | X |
| id.postalCode | string |   |   | X |
| number | string |   |   | X |
| number.street | string |   |   | X |
| number.city | string |   |   | X |
| number.state | string |   |   | X |
| number.countryLetterCode | string |   |   | X |
| number.postalCode | string |   |   | X |
| displayName | string |   |   | X |
| displayName.street | string |   |   | X |
| displayName.city | string |   |   | X |
| displayName.state | string |   |   | X |
| displayName.countryLetterCode | string |   |   | X |
| displayName.postalCode | string |   |   | X |
| type | string |   |   | X |
| type.street | string |   |   | X |
| type.city | string |   |   | X |
| type.state | string |   |   | X |
| type.countryLetterCode | string |   |   | X |
| type.postalCode | string |   |   | X |
| blocked | bool |   |   | X |
| blocked.street | string |   |   | X |
| blocked.city | string |   |   | X |
| blocked.state | string |   |   | X |
| blocked.countryLetterCode | string |   |   | X |
| blocked.postalCode | string |   |   | X |
| baseUnitOfMeasureId | guid |   |   | X |
| baseUnitOfMeasureId.street | string |   |   | X |
| baseUnitOfMeasureId.city | string |   |   | X |
| baseUnitOfMeasureId.state | string |   |   | X |
| baseUnitOfMeasureId.countryLetterCode | string |   |   | X |
| baseUnitOfMeasureId.postalCode | string |   |   | X |
| baseUnitOfMeasureIntStdCode | string |   |   | X |
| baseUnitOfMeasureIntStdCode.street | string |   |   | X |
| baseUnitOfMeasureIntStdCode.city | string |   |   | X |
| baseUnitOfMeasureIntStdCode.state | string |   |   | X |
| baseUnitOfMeasureIntStdCode.countryLetterCode | string |   |   | X |
| baseUnitOfMeasureIntStdCode.postalCode | string |   |   | X |
| baseUnitOfMeasureDescription | string |   |   | X |
| baseUnitOfMeasureDescription.street | string |   |   | X |
| baseUnitOfMeasureDescription.city | string |   |   | X |
| baseUnitOfMeasureDescription.state | string |   |   | X |
| baseUnitOfMeasureDescription.countryLetterCode | string |   |   | X |
| baseUnitOfMeasureDescription.postalCode | string |   |   | X |
| gtin | string |   |   | X |
| gtin.street | string |   |   | X |
| gtin.city | string |   |   | X |
| gtin.state | string |   |   | X |
| gtin.countryLetterCode | string |   |   | X |
| gtin.postalCode | string |   |   | X |
| inventory | float |   |   | X |
| inventory.street | string |   |   | X |
| inventory.city | string |   |   | X |
| inventory.state | string |   |   | X |
| inventory.countryLetterCode | string |   |   | X |
| inventory.postalCode | string |   |   | X |
| unitPrice | float |   |   | X |
| unitPrice.street | string |   |   | X |
| unitPrice.city | string |   |   | X |
| unitPrice.state | string |   |   | X |
| unitPrice.countryLetterCode | string |   |   | X |
| unitPrice.postalCode | string |   |   | X |
| priceIncludesTax | bool |   |   | X |
| priceIncludesTax.street | string |   |   | X |
| priceIncludesTax.city | string |   |   | X |
| priceIncludesTax.state | string |   |   | X |
| priceIncludesTax.countryLetterCode | string |   |   | X |
| priceIncludesTax.postalCode | string |   |   | X |
| unitCost | float |   |   | X |
| unitCost.street | string |   |   | X |
| unitCost.city | string |   |   | X |
| unitCost.state | string |   |   | X |
| unitCost.countryLetterCode | string |   |   | X |
| unitCost.postalCode | string |   |   | X |
| taxGroupId | guid |   |   | X |
| taxGroupId.street | string |   |   | X |
| taxGroupId.city | string |   |   | X |
| taxGroupId.state | string |   |   | X |
| taxGroupId.countryLetterCode | string |   |   | X |
| taxGroupId.postalCode | string |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.street | string |   |   | X |
| taxGroupCode.city | string |   |   | X |
| taxGroupCode.state | string |   |   | X |
| taxGroupCode.countryLetterCode | string |   |   | X |
| taxGroupCode.postalCode | string |   |   | X |
| taxable | bool |   |   | X |
| taxable.street | string |   |   | X |
| taxable.city | string |   |   | X |
| taxable.state | string |   |   | X |
| taxable.countryLetterCode | string |   |   | X |
| taxable.postalCode | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.street | string |   |   | X |
| lastModifiedDateTime.city | string |   |   | X |
| lastModifiedDateTime.state | string |   |   | X |
| lastModifiedDateTime.countryLetterCode | string |   |   | X |
| lastModifiedDateTime.postalCode | string |   |   | X |

# InvoicingKPI
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| primaryKey.street | string |   |   | X |
| primaryKey.city | string |   |   | X |
| primaryKey.state | string |   |   | X |
| primaryKey.countryLetterCode | string |   |   | X |
| primaryKey.postalCode | string |   |   | X |
| invoicedYearToDate | float |   |   | X |
| invoicedYearToDate.street | string |   |   | X |
| invoicedYearToDate.city | string |   |   | X |
| invoicedYearToDate.state | string |   |   | X |
| invoicedYearToDate.countryLetterCode | string |   |   | X |
| invoicedYearToDate.postalCode | string |   |   | X |
| numberOfInvoicesYearToDate | int |   |   | X |
| numberOfInvoicesYearToDate.street | string |   |   | X |
| numberOfInvoicesYearToDate.city | string |   |   | X |
| numberOfInvoicesYearToDate.state | string |   |   | X |
| numberOfInvoicesYearToDate.countryLetterCode | string |   |   | X |
| numberOfInvoicesYearToDate.postalCode | string |   |   | X |
| invoicedCurrentMonth | float |   |   | X |
| invoicedCurrentMonth.street | string |   |   | X |
| invoicedCurrentMonth.city | string |   |   | X |
| invoicedCurrentMonth.state | string |   |   | X |
| invoicedCurrentMonth.countryLetterCode | string |   |   | X |
| invoicedCurrentMonth.postalCode | string |   |   | X |
| salesInvoicesOutsdanding | float |   |   | X |
| salesInvoicesOutsdanding.street | string |   |   | X |
| salesInvoicesOutsdanding.city | string |   |   | X |
| salesInvoicesOutsdanding.state | string |   |   | X |
| salesInvoicesOutsdanding.countryLetterCode | string |   |   | X |
| salesInvoicesOutsdanding.postalCode | string |   |   | X |
| salesInvoicesOverdue | float |   |   | X |
| salesInvoicesOverdue.street | string |   |   | X |
| salesInvoicesOverdue.city | string |   |   | X |
| salesInvoicesOverdue.state | string |   |   | X |
| salesInvoicesOverdue.countryLetterCode | string |   |   | X |
| salesInvoicesOverdue.postalCode | string |   |   | X |
| numberOfQuotes | int |   |   | X |
| numberOfQuotes.street | string |   |   | X |
| numberOfQuotes.city | string |   |   | X |
| numberOfQuotes.state | string |   |   | X |
| numberOfQuotes.countryLetterCode | string |   |   | X |
| numberOfQuotes.postalCode | string |   |   | X |
| numberOfDraftInvoices | int |   |   | X |
| numberOfDraftInvoices.street | string |   |   | X |
| numberOfDraftInvoices.city | string |   |   | X |
| numberOfDraftInvoices.state | string |   |   | X |
| numberOfDraftInvoices.countryLetterCode | string |   |   | X |
| numberOfDraftInvoices.postalCode | string |   |   | X |
| requestedDateTime | date |   |   | X |
| requestedDateTime.street | string |   |   | X |
| requestedDateTime.city | string |   |   | X |
| requestedDateTime.state | string |   |   | X |
| requestedDateTime.countryLetterCode | string |   |   | X |
| requestedDateTime.postalCode | string |   |   | X |
| yTDDateFilter | string |   |   | X |
| yTDDateFilter.street | string |   |   | X |
| yTDDateFilter.city | string |   |   | X |
| yTDDateFilter.state | string |   |   | X |
| yTDDateFilter.countryLetterCode | string |   |   | X |
| yTDDateFilter.postalCode | string |   |   | X |

# InvoicingLanguage
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| languageId | int |   |   | X |
| languageId.street | string |   |   | X |
| languageId.city | string |   |   | X |
| languageId.state | string |   |   | X |
| languageId.countryLetterCode | string |   |   | X |
| languageId.postalCode | string |   |   | X |
| languageCode | string |   |   | X |
| languageCode.street | string |   |   | X |
| languageCode.city | string |   |   | X |
| languageCode.state | string |   |   | X |
| languageCode.countryLetterCode | string |   |   | X |
| languageCode.postalCode | string |   |   | X |
| displayName | string |   |   | X |
| displayName.street | string |   |   | X |
| displayName.city | string |   |   | X |
| displayName.state | string |   |   | X |
| displayName.countryLetterCode | string |   |   | X |
| displayName.postalCode | string |   |   | X |
| default | bool |   |   | X |
| default.street | string |   |   | X |
| default.city | string |   |   | X |
| default.state | string |   |   | X |
| default.countryLetterCode | string |   |   | X |
| default.postalCode | string |   |   | X |

# InvoicingPDF
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentId | guid |   |   | X |
| documentId.street | string |   |   | X |
| documentId.city | string |   |   | X |
| documentId.state | string |   |   | X |
| documentId.countryLetterCode | string |   |   | X |
| documentId.postalCode | string |   |   | X |
| fileName | string |   |   | X |
| fileName.street | string |   |   | X |
| fileName.city | string |   |   | X |
| fileName.state | string |   |   | X |
| fileName.countryLetterCode | string |   |   | X |
| fileName.postalCode | string |   |   | X |
| content | string |   |   | X |
| content.street | string |   |   | X |
| content.city | string |   |   | X |
| content.state | string |   |   | X |
| content.countryLetterCode | string |   |   | X |
| content.postalCode | string |   |   | X |

# InvoicingPaymentMethod
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.street | string |   |   | X |
| id.city | string |   |   | X |
| id.state | string |   |   | X |
| id.countryLetterCode | string |   |   | X |
| id.postalCode | string |   |   | X |
| code | string |   |   | X |
| code.street | string |   |   | X |
| code.city | string |   |   | X |
| code.state | string |   |   | X |
| code.countryLetterCode | string |   |   | X |
| code.postalCode | string |   |   | X |
| displayName | string |   |   | X |
| displayName.street | string |   |   | X |
| displayName.city | string |   |   | X |
| displayName.state | string |   |   | X |
| displayName.countryLetterCode | string |   |   | X |
| displayName.postalCode | string |   |   | X |
| default | bool |   |   | X |
| default.street | string |   |   | X |
| default.city | string |   |   | X |
| default.state | string |   |   | X |
| default.countryLetterCode | string |   |   | X |
| default.postalCode | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.street | string |   |   | X |
| lastModifiedDateTime.city | string |   |   | X |
| lastModifiedDateTime.state | string |   |   | X |
| lastModifiedDateTime.countryLetterCode | string |   |   | X |
| lastModifiedDateTime.postalCode | string |   |   | X |

# InvoicingPaymentTerm
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.street | string |   |   | X |
| id.city | string |   |   | X |
| id.state | string |   |   | X |
| id.countryLetterCode | string |   |   | X |
| id.postalCode | string |   |   | X |
| code | string |   |   | X |
| code.street | string |   |   | X |
| code.city | string |   |   | X |
| code.state | string |   |   | X |
| code.countryLetterCode | string |   |   | X |
| code.postalCode | string |   |   | X |
| displayName | string |   |   | X |
| displayName.street | string |   |   | X |
| displayName.city | string |   |   | X |
| displayName.state | string |   |   | X |
| displayName.countryLetterCode | string |   |   | X |
| displayName.postalCode | string |   |   | X |
| dueDateCalculation | string |   |   | X |
| dueDateCalculation.street | string |   |   | X |
| dueDateCalculation.city | string |   |   | X |
| dueDateCalculation.state | string |   |   | X |
| dueDateCalculation.countryLetterCode | string |   |   | X |
| dueDateCalculation.postalCode | string |   |   | X |
| discountDateCalculation | string |   |   | X |
| discountDateCalculation.street | string |   |   | X |
| discountDateCalculation.city | string |   |   | X |
| discountDateCalculation.state | string |   |   | X |
| discountDateCalculation.countryLetterCode | string |   |   | X |
| discountDateCalculation.postalCode | string |   |   | X |
| discountPercent | float |   |   | X |
| discountPercent.street | string |   |   | X |
| discountPercent.city | string |   |   | X |
| discountPercent.state | string |   |   | X |
| discountPercent.countryLetterCode | string |   |   | X |
| discountPercent.postalCode | string |   |   | X |
| calculateDiscountOnCreditMemos | bool |   |   | X |
| calculateDiscountOnCreditMemos.street | string |   |   | X |
| calculateDiscountOnCreditMemos.city | string |   |   | X |
| calculateDiscountOnCreditMemos.state | string |   |   | X |
| calculateDiscountOnCreditMemos.countryLetterCode | string |   |   | X |
| calculateDiscountOnCreditMemos.postalCode | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.street | string |   |   | X |
| lastModifiedDateTime.city | string |   |   | X |
| lastModifiedDateTime.state | string |   |   | X |
| lastModifiedDateTime.countryLetterCode | string |   |   | X |
| lastModifiedDateTime.postalCode | string |   |   | X |
| default | bool |   |   | X |
| default.street | string |   |   | X |
| default.city | string |   |   | X |
| default.state | string |   |   | X |
| default.countryLetterCode | string |   |   | X |
| default.postalCode | string |   |   | X |

# InvoicingQBOSyncAuth
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| key | int |   |   | X |
| key.street | string |   |   | X |
| key.city | string |   |   | X |
| key.state | string |   |   | X |
| key.countryLetterCode | string |   |   | X |
| key.postalCode | string |   |   | X |
| authorizationUrl | string |   |   | X |
| authorizationUrl.street | string |   |   | X |
| authorizationUrl.city | string |   |   | X |
| authorizationUrl.state | string |   |   | X |
| authorizationUrl.countryLetterCode | string |   |   | X |
| authorizationUrl.postalCode | string |   |   | X |

# InvoicingSMTPMailSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| primaryKey.street | string |   |   | X |
| primaryKey.city | string |   |   | X |
| primaryKey.state | string |   |   | X |
| primaryKey.countryLetterCode | string |   |   | X |
| primaryKey.postalCode | string |   |   | X |
| sMTPServer | string |   |   | X |
| sMTPServer.street | string |   |   | X |
| sMTPServer.city | string |   |   | X |
| sMTPServer.state | string |   |   | X |
| sMTPServer.countryLetterCode | string |   |   | X |
| sMTPServer.postalCode | string |   |   | X |
| authentication | string |   |   | X |
| authentication.street | string |   |   | X |
| authentication.city | string |   |   | X |
| authentication.state | string |   |   | X |
| authentication.countryLetterCode | string |   |   | X |
| authentication.postalCode | string |   |   | X |
| userName | string |   |   | X |
| userName.street | string |   |   | X |
| userName.city | string |   |   | X |
| userName.state | string |   |   | X |
| userName.countryLetterCode | string |   |   | X |
| userName.postalCode | string |   |   | X |
| sMTPServerPort | int |   |   | X |
| sMTPServerPort.street | string |   |   | X |
| sMTPServerPort.city | string |   |   | X |
| sMTPServerPort.state | string |   |   | X |
| sMTPServerPort.countryLetterCode | string |   |   | X |
| sMTPServerPort.postalCode | string |   |   | X |
| secureConnection | bool |   |   | X |
| secureConnection.street | string |   |   | X |
| secureConnection.city | string |   |   | X |
| secureConnection.state | string |   |   | X |
| secureConnection.countryLetterCode | string |   |   | X |
| secureConnection.postalCode | string |   |   | X |
| passWord | string |   |   | X |
| passWord.street | string |   |   | X |
| passWord.city | string |   |   | X |
| passWord.state | string |   |   | X |
| passWord.countryLetterCode | string |   |   | X |
| passWord.postalCode | string |   |   | X |

# InvoicingSalesInvoiceOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.street | string |   |   | X |
| id.city | string |   |   | X |
| id.state | string |   |   | X |
| id.countryLetterCode | string |   |   | X |
| id.postalCode | string |   |   | X |
| number | string |   |   | X |
| number.street | string |   |   | X |
| number.city | string |   |   | X |
| number.state | string |   |   | X |
| number.countryLetterCode | string |   |   | X |
| number.postalCode | string |   |   | X |
| customerNumber | string |   |   | X |
| customerNumber.street | string |   |   | X |
| customerNumber.city | string |   |   | X |
| customerNumber.state | string |   |   | X |
| customerNumber.countryLetterCode | string |   |   | X |
| customerNumber.postalCode | string |   |   | X |
| customerName | string |   |   | X |
| customerName.street | string |   |   | X |
| customerName.city | string |   |   | X |
| customerName.state | string |   |   | X |
| customerName.countryLetterCode | string |   |   | X |
| customerName.postalCode | string |   |   | X |
| invoiceDate | date |   |   | X |
| invoiceDate.street | string |   |   | X |
| invoiceDate.city | string |   |   | X |
| invoiceDate.state | string |   |   | X |
| invoiceDate.countryLetterCode | string |   |   | X |
| invoiceDate.postalCode | string |   |   | X |
| dueDate | date |   |   | X |
| dueDate.street | string |   |   | X |
| dueDate.city | string |   |   | X |
| dueDate.state | string |   |   | X |
| dueDate.countryLetterCode | string |   |   | X |
| dueDate.postalCode | string |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.street | string |   |   | X |
| currencyCode.city | string |   |   | X |
| currencyCode.state | string |   |   | X |
| currencyCode.countryLetterCode | string |   |   | X |
| currencyCode.postalCode | string |   |   | X |
| subtotalAmount | float |   |   | X |
| subtotalAmount.street | string |   |   | X |
| subtotalAmount.city | string |   |   | X |
| subtotalAmount.state | string |   |   | X |
| subtotalAmount.countryLetterCode | string |   |   | X |
| subtotalAmount.postalCode | string |   |   | X |
| totalAmountExcludingTax | float |   |   | X |
| totalAmountExcludingTax.street | string |   |   | X |
| totalAmountExcludingTax.city | string |   |   | X |
| totalAmountExcludingTax.state | string |   |   | X |
| totalAmountExcludingTax.countryLetterCode | string |   |   | X |
| totalAmountExcludingTax.postalCode | string |   |   | X |
| totalTaxAmount | float |   |   | X |
| totalTaxAmount.street | string |   |   | X |
| totalTaxAmount.city | string |   |   | X |
| totalTaxAmount.state | string |   |   | X |
| totalTaxAmount.countryLetterCode | string |   |   | X |
| totalTaxAmount.postalCode | string |   |   | X |
| totalAmountIncludingTax | float |   |   | X |
| totalAmountIncludingTax.street | string |   |   | X |
| totalAmountIncludingTax.city | string |   |   | X |
| totalAmountIncludingTax.state | string |   |   | X |
| totalAmountIncludingTax.countryLetterCode | string |   |   | X |
| totalAmountIncludingTax.postalCode | string |   |   | X |
| status | string |   |   | X |
| status.street | string |   |   | X |
| status.city | string |   |   | X |
| status.state | string |   |   | X |
| status.countryLetterCode | string |   |   | X |
| status.postalCode | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.street | string |   |   | X |
| lastModifiedDateTime.city | string |   |   | X |
| lastModifiedDateTime.state | string |   |   | X |
| lastModifiedDateTime.countryLetterCode | string |   |   | X |
| lastModifiedDateTime.postalCode | string |   |   | X |
| isTest | bool |   |   | X |
| isTest.street | string |   |   | X |
| isTest.city | string |   |   | X |
| isTest.state | string |   |   | X |
| isTest.countryLetterCode | string |   |   | X |
| isTest.postalCode | string |   |   | X |
| lastEmailSentStatus | string |   |   | X |
| lastEmailSentStatus.street | string |   |   | X |
| lastEmailSentStatus.city | string |   |   | X |
| lastEmailSentStatus.state | string |   |   | X |
| lastEmailSentStatus.countryLetterCode | string |   |   | X |
| lastEmailSentStatus.postalCode | string |   |   | X |

# InvoicingSalesInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.street | string |   |   | X |
| id.city | string |   |   | X |
| id.state | string |   |   | X |
| id.countryLetterCode | string |   |   | X |
| id.postalCode | string |   |   | X |
| number | string |   |   | X |
| number.street | string |   |   | X |
| number.city | string |   |   | X |
| number.state | string |   |   | X |
| number.countryLetterCode | string |   |   | X |
| number.postalCode | string |   |   | X |
| customerId | guid |   |   | X |
| customerId.street | string |   |   | X |
| customerId.city | string |   |   | X |
| customerId.state | string |   |   | X |
| customerId.countryLetterCode | string |   |   | X |
| customerId.postalCode | string |   |   | X |
| graphContactId | string |   |   | X |
| graphContactId.street | string |   |   | X |
| graphContactId.city | string |   |   | X |
| graphContactId.state | string |   |   | X |
| graphContactId.countryLetterCode | string |   |   | X |
| graphContactId.postalCode | string |   |   | X |
| customerNumber | string |   |   | X |
| customerNumber.street | string |   |   | X |
| customerNumber.city | string |   |   | X |
| customerNumber.state | string |   |   | X |
| customerNumber.countryLetterCode | string |   |   | X |
| customerNumber.postalCode | string |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.street | string |   |   | X |
| taxLiable.city | string |   |   | X |
| taxLiable.state | string |   |   | X |
| taxLiable.countryLetterCode | string |   |   | X |
| taxLiable.postalCode | string |   |   | X |
| taxAreaId | guid |   |   | X |
| taxAreaId.street | string |   |   | X |
| taxAreaId.city | string |   |   | X |
| taxAreaId.state | string |   |   | X |
| taxAreaId.countryLetterCode | string |   |   | X |
| taxAreaId.postalCode | string |   |   | X |
| taxAreaDisplayName | string |   |   | X |
| taxAreaDisplayName.street | string |   |   | X |
| taxAreaDisplayName.city | string |   |   | X |
| taxAreaDisplayName.state | string |   |   | X |
| taxAreaDisplayName.countryLetterCode | string |   |   | X |
| taxAreaDisplayName.postalCode | string |   |   | X |
| taxRegistrationNumber | string |   |   | X |
| taxRegistrationNumber.street | string |   |   | X |
| taxRegistrationNumber.city | string |   |   | X |
| taxRegistrationNumber.state | string |   |   | X |
| taxRegistrationNumber.countryLetterCode | string |   |   | X |
| taxRegistrationNumber.postalCode | string |   |   | X |
| customerName | string |   |   | X |
| customerName.street | string |   |   | X |
| customerName.city | string |   |   | X |
| customerName.state | string |   |   | X |
| customerName.countryLetterCode | string |   |   | X |
| customerName.postalCode | string |   |   | X |
| customerEmail | string |   |   | X |
| customerEmail.street | string |   |   | X |
| customerEmail.city | string |   |   | X |
| customerEmail.state | string |   |   | X |
| customerEmail.countryLetterCode | string |   |   | X |
| customerEmail.postalCode | string |   |   | X |
| invoiceDate | date |   |   | X |
| invoiceDate.street | string |   |   | X |
| invoiceDate.city | string |   |   | X |
| invoiceDate.state | string |   |   | X |
| invoiceDate.countryLetterCode | string |   |   | X |
| invoiceDate.postalCode | string |   |   | X |
| dueDate | date |   |   | X |
| dueDate.street | string |   |   | X |
| dueDate.city | string |   |   | X |
| dueDate.state | string |   |   | X |
| dueDate.countryLetterCode | string |   |   | X |
| dueDate.postalCode | string |   |   | X |
| billingPostalAddress | postalAddressType |   |   | X |
| billingPostalAddress.street | string |   |   | X |
| billingPostalAddress.city | string |   |   | X |
| billingPostalAddress.state | string |   |   | X |
| billingPostalAddress.countryLetterCode | string |   |   | X |
| billingPostalAddress.postalCode | string |   |   | X |
| pricesIncludeTax | bool |   |   | X |
| pricesIncludeTax.street | string |   |   | X |
| pricesIncludeTax.city | string |   |   | X |
| pricesIncludeTax.state | string |   |   | X |
| pricesIncludeTax.countryLetterCode | string |   |   | X |
| pricesIncludeTax.postalCode | string |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.street | string |   |   | X |
| currencyCode.city | string |   |   | X |
| currencyCode.state | string |   |   | X |
| currencyCode.countryLetterCode | string |   |   | X |
| currencyCode.postalCode | string |   |   | X |
| lines | array |   |   | X |
| lines.*.sequence | int |   | X |   |
| lines.*.itemId | guid |   | X |   |
| lines.*.description | string |   | X |   |
| lines.*.quantity | float |   | X |   |
| lines.*.unitPrice | float |   | X |   |
| lines.*.lineDiscountCalculation | string |   |   | X |
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
| subtotalAmount.sequence | int |   | X |   |
| subtotalAmount.itemId | guid |   | X |   |
| subtotalAmount.description | string |   | X |   |
| subtotalAmount.quantity | float |   | X |   |
| subtotalAmount.unitPrice | float |   | X |   |
| subtotalAmount.lineDiscountCalculation | string |   |   | X |
| subtotalAmount.lineDiscountValue | float |   | X |   |
| subtotalAmount.taxable | bool |   | X |   |
| subtotalAmount.taxGroupId | guid |   | X |   |
| subtotalAmount.lineAmount | float |   | X |   |
| subtotalAmount.amountExcludingTax | float |   | X |   |
| subtotalAmount.amountIncludingTax | float |   | X |   |
| subtotalAmount.invoiceDiscountAmount | float |   | X |   |
| subtotalAmount.taxPercent | float |   | X |   |
| subtotalAmount.totalTaxAmount | float |   | X |   |
| discountAmount | float |   | X |   |
| discountAmount.sequence | int |   | X |   |
| discountAmount.itemId | guid |   | X |   |
| discountAmount.description | string |   | X |   |
| discountAmount.quantity | float |   | X |   |
| discountAmount.unitPrice | float |   | X |   |
| discountAmount.lineDiscountCalculation | string |   |   | X |
| discountAmount.lineDiscountValue | float |   | X |   |
| discountAmount.taxable | bool |   | X |   |
| discountAmount.taxGroupId | guid |   | X |   |
| discountAmount.lineAmount | float |   | X |   |
| discountAmount.amountExcludingTax | float |   | X |   |
| discountAmount.amountIncludingTax | float |   | X |   |
| discountAmount.invoiceDiscountAmount | float |   | X |   |
| discountAmount.taxPercent | float |   | X |   |
| discountAmount.totalTaxAmount | float |   | X |   |
| discountAppliedBeforeTax | bool |   | X |   |
| discountAppliedBeforeTax.sequence | int |   | X |   |
| discountAppliedBeforeTax.itemId | guid |   | X |   |
| discountAppliedBeforeTax.description | string |   | X |   |
| discountAppliedBeforeTax.quantity | float |   | X |   |
| discountAppliedBeforeTax.unitPrice | float |   | X |   |
| discountAppliedBeforeTax.lineDiscountCalculation | string |   |   | X |
| discountAppliedBeforeTax.lineDiscountValue | float |   | X |   |
| discountAppliedBeforeTax.taxable | bool |   | X |   |
| discountAppliedBeforeTax.taxGroupId | guid |   | X |   |
| discountAppliedBeforeTax.lineAmount | float |   | X |   |
| discountAppliedBeforeTax.amountExcludingTax | float |   | X |   |
| discountAppliedBeforeTax.amountIncludingTax | float |   | X |   |
| discountAppliedBeforeTax.invoiceDiscountAmount | float |   | X |   |
| discountAppliedBeforeTax.taxPercent | float |   | X |   |
| discountAppliedBeforeTax.totalTaxAmount | float |   | X |   |
| coupons | array |   | X |   |
| coupons.*.claimId | string |   | X |   |
| coupons.*.usage | string |   |   | X |
| coupons.*.offer | string |   |   | X |
| coupons.*.terms | string |   |   | X |
| coupons.*.code | string |   |   | X |
| coupons.*.expiration | date |   |   | X |
| coupons.*.discountValue | float |   |   | X |
| coupons.*.discountType | string |   |   | X |
| coupons.*.amount | string |   |   | X |
| totalAmountExcludingTax | float |   |   | X |
| totalAmountExcludingTax.claimId | string |   | X |   |
| totalAmountExcludingTax.usage | string |   |   | X |
| totalAmountExcludingTax.offer | string |   |   | X |
| totalAmountExcludingTax.terms | string |   |   | X |
| totalAmountExcludingTax.code | string |   |   | X |
| totalAmountExcludingTax.expiration | date |   |   | X |
| totalAmountExcludingTax.discountValue | float |   |   | X |
| totalAmountExcludingTax.discountType | string |   |   | X |
| totalAmountExcludingTax.amount | string |   |   | X |
| totalTaxAmount | float |   |   | X |
| totalTaxAmount.claimId | string |   | X |   |
| totalTaxAmount.usage | string |   |   | X |
| totalTaxAmount.offer | string |   |   | X |
| totalTaxAmount.terms | string |   |   | X |
| totalTaxAmount.code | string |   |   | X |
| totalTaxAmount.expiration | date |   |   | X |
| totalTaxAmount.discountValue | float |   |   | X |
| totalTaxAmount.discountType | string |   |   | X |
| totalTaxAmount.amount | string |   |   | X |
| totalAmountIncludingTax | float |   |   | X |
| totalAmountIncludingTax.claimId | string |   | X |   |
| totalAmountIncludingTax.usage | string |   |   | X |
| totalAmountIncludingTax.offer | string |   |   | X |
| totalAmountIncludingTax.terms | string |   |   | X |
| totalAmountIncludingTax.code | string |   |   | X |
| totalAmountIncludingTax.expiration | date |   |   | X |
| totalAmountIncludingTax.discountValue | float |   |   | X |
| totalAmountIncludingTax.discountType | string |   |   | X |
| totalAmountIncludingTax.amount | string |   |   | X |
| noteForCustomer | string |   |   | X |
| noteForCustomer.claimId | string |   | X |   |
| noteForCustomer.usage | string |   |   | X |
| noteForCustomer.offer | string |   |   | X |
| noteForCustomer.terms | string |   |   | X |
| noteForCustomer.code | string |   |   | X |
| noteForCustomer.expiration | date |   |   | X |
| noteForCustomer.discountValue | float |   |   | X |
| noteForCustomer.discountType | string |   |   | X |
| noteForCustomer.amount | string |   |   | X |
| status | string |   |   | X |
| status.claimId | string |   | X |   |
| status.usage | string |   |   | X |
| status.offer | string |   |   | X |
| status.terms | string |   |   | X |
| status.code | string |   |   | X |
| status.expiration | date |   |   | X |
| status.discountValue | float |   |   | X |
| status.discountType | string |   |   | X |
| status.amount | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.claimId | string |   | X |   |
| lastModifiedDateTime.usage | string |   |   | X |
| lastModifiedDateTime.offer | string |   |   | X |
| lastModifiedDateTime.terms | string |   |   | X |
| lastModifiedDateTime.code | string |   |   | X |
| lastModifiedDateTime.expiration | date |   |   | X |
| lastModifiedDateTime.discountValue | float |   |   | X |
| lastModifiedDateTime.discountType | string |   |   | X |
| lastModifiedDateTime.amount | string |   |   | X |
| attachments | array |   |   | X |
| attachments.*.id | guid | X | X |   |
| attachments.*.fileName | string |   |   | X |
| attachments.*.byteSize | int |   |   | X |
| invoiceDiscountCalculation | string |   |   | X |
| invoiceDiscountCalculation.id | guid | X | X |   |
| invoiceDiscountCalculation.fileName | string |   |   | X |
| invoiceDiscountCalculation.byteSize | int |   |   | X |
| invoiceDiscountValue | float |   |   | X |
| invoiceDiscountValue.id | guid | X | X |   |
| invoiceDiscountValue.fileName | string |   |   | X |
| invoiceDiscountValue.byteSize | int |   |   | X |
| remainingAmount | float |   |   | X |
| remainingAmount.id | guid | X | X |   |
| remainingAmount.fileName | string |   |   | X |
| remainingAmount.byteSize | int |   |   | X |
| lastEmailSentStatus | string |   |   | X |
| lastEmailSentStatus.id | guid | X | X |   |
| lastEmailSentStatus.fileName | string |   |   | X |
| lastEmailSentStatus.byteSize | int |   |   | X |
| lastEmailSentTime | date |   |   | X |
| lastEmailSentTime.id | guid | X | X |   |
| lastEmailSentTime.fileName | string |   |   | X |
| lastEmailSentTime.byteSize | int |   |   | X |
| isTest | bool |   |   | X |
| isTest.id | guid | X | X |   |
| isTest.fileName | string |   |   | X |
| isTest.byteSize | int |   |   | X |
| isCustomerBlocked | bool |   |   | X |
| isCustomerBlocked.id | guid | X | X |   |
| isCustomerBlocked.fileName | string |   |   | X |
| isCustomerBlocked.byteSize | int |   |   | X |

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
| appliesToInvoiceId | guid |   |   | X |
| appliesToInvoiceId.id | guid | X | X |   |
| appliesToInvoiceId.fileName | string |   |   | X |
| appliesToInvoiceId.byteSize | int |   |   | X |
| paymentNo | int |   |   | X |
| paymentNo.id | guid | X | X |   |
| paymentNo.fileName | string |   |   | X |
| paymentNo.byteSize | int |   |   | X |
| customerId | guid |   |   | X |
| customerId.id | guid | X | X |   |
| customerId.fileName | string |   |   | X |
| customerId.byteSize | int |   |   | X |
| paymentDate | date |   |   | X |
| paymentDate.id | guid | X | X |   |
| paymentDate.fileName | string |   |   | X |
| paymentDate.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| paymentMethodId | guid |   |   | X |
| paymentMethodId.id | guid | X | X |   |
| paymentMethodId.fileName | string |   |   | X |
| paymentMethodId.byteSize | int |   |   | X |

# InvoicingSalesQuote
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| quoteDate | date |   |   | X |
| quoteDate.id | guid | X | X |   |
| quoteDate.fileName | string |   |   | X |
| quoteDate.byteSize | int |   |   | X |
| dueDate | date |   |   | X |
| dueDate.id | guid | X | X |   |
| dueDate.fileName | string |   |   | X |
| dueDate.byteSize | int |   |   | X |
| validUntilDate | date |   |   | X |
| validUntilDate.id | guid | X | X |   |
| validUntilDate.fileName | string |   |   | X |
| validUntilDate.byteSize | int |   |   | X |
| status | string |   |   | X |
| status.id | guid | X | X |   |
| status.fileName | string |   |   | X |
| status.byteSize | int |   |   | X |
| accepted | bool |   |   | X |
| accepted.id | guid | X | X |   |
| accepted.fileName | string |   |   | X |
| accepted.byteSize | int |   |   | X |
| acceptedDate | date |   |   | X |
| acceptedDate.id | guid | X | X |   |
| acceptedDate.fileName | string |   |   | X |
| acceptedDate.byteSize | int |   |   | X |
| customerId | guid |   |   | X |
| customerId.id | guid | X | X |   |
| customerId.fileName | string |   |   | X |
| customerId.byteSize | int |   |   | X |
| graphContactId | string |   |   | X |
| graphContactId.id | guid | X | X |   |
| graphContactId.fileName | string |   |   | X |
| graphContactId.byteSize | int |   |   | X |
| customerNumber | string |   |   | X |
| customerNumber.id | guid | X | X |   |
| customerNumber.fileName | string |   |   | X |
| customerNumber.byteSize | int |   |   | X |
| customerName | string |   |   | X |
| customerName.id | guid | X | X |   |
| customerName.fileName | string |   |   | X |
| customerName.byteSize | int |   |   | X |
| customerEmail | string |   |   | X |
| customerEmail.id | guid | X | X |   |
| customerEmail.fileName | string |   |   | X |
| customerEmail.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxAreaId | guid |   |   | X |
| taxAreaId.id | guid | X | X |   |
| taxAreaId.fileName | string |   |   | X |
| taxAreaId.byteSize | int |   |   | X |
| taxAreaDisplayName | string |   |   | X |
| taxAreaDisplayName.id | guid | X | X |   |
| taxAreaDisplayName.fileName | string |   |   | X |
| taxAreaDisplayName.byteSize | int |   |   | X |
| taxRegistrationNumber | string |   |   | X |
| taxRegistrationNumber.id | guid | X | X |   |
| taxRegistrationNumber.fileName | string |   |   | X |
| taxRegistrationNumber.byteSize | int |   |   | X |
| billingPostalAddress | postalAddressType |   |   | X |
| billingPostalAddress.street | string |   |   | X |
| billingPostalAddress.city | string |   |   | X |
| billingPostalAddress.state | string |   |   | X |
| billingPostalAddress.countryLetterCode | string |   |   | X |
| billingPostalAddress.postalCode | string |   |   | X |
| pricesIncludeTax | bool |   |   | X |
| pricesIncludeTax.street | string |   |   | X |
| pricesIncludeTax.city | string |   |   | X |
| pricesIncludeTax.state | string |   |   | X |
| pricesIncludeTax.countryLetterCode | string |   |   | X |
| pricesIncludeTax.postalCode | string |   |   | X |
| shipmentMethod | string |   |   | X |
| shipmentMethod.street | string |   |   | X |
| shipmentMethod.city | string |   |   | X |
| shipmentMethod.state | string |   |   | X |
| shipmentMethod.countryLetterCode | string |   |   | X |
| shipmentMethod.postalCode | string |   |   | X |
| salesperson | string |   |   | X |
| salesperson.street | string |   |   | X |
| salesperson.city | string |   |   | X |
| salesperson.state | string |   |   | X |
| salesperson.countryLetterCode | string |   |   | X |
| salesperson.postalCode | string |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.street | string |   |   | X |
| currencyCode.city | string |   |   | X |
| currencyCode.state | string |   |   | X |
| currencyCode.countryLetterCode | string |   |   | X |
| currencyCode.postalCode | string |   |   | X |
| lines | array |   |   | X |
| lines.*.sequence | int |   | X |   |
| lines.*.itemId | guid |   | X |   |
| lines.*.description | string |   | X |   |
| lines.*.quantity | float |   | X |   |
| lines.*.unitPrice | float |   | X |   |
| lines.*.lineDiscountCalculation | string |   |   | X |
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
| subtotalAmount.sequence | int |   | X |   |
| subtotalAmount.itemId | guid |   | X |   |
| subtotalAmount.description | string |   | X |   |
| subtotalAmount.quantity | float |   | X |   |
| subtotalAmount.unitPrice | float |   | X |   |
| subtotalAmount.lineDiscountCalculation | string |   |   | X |
| subtotalAmount.lineDiscountValue | float |   | X |   |
| subtotalAmount.taxable | bool |   | X |   |
| subtotalAmount.taxGroupId | guid |   | X |   |
| subtotalAmount.lineAmount | float |   | X |   |
| subtotalAmount.amountExcludingTax | float |   | X |   |
| subtotalAmount.amountIncludingTax | float |   | X |   |
| subtotalAmount.invoiceDiscountAmount | float |   | X |   |
| subtotalAmount.taxPercent | float |   | X |   |
| subtotalAmount.totalTaxAmount | float |   | X |   |
| discountAmount | float |   | X |   |
| discountAmount.sequence | int |   | X |   |
| discountAmount.itemId | guid |   | X |   |
| discountAmount.description | string |   | X |   |
| discountAmount.quantity | float |   | X |   |
| discountAmount.unitPrice | float |   | X |   |
| discountAmount.lineDiscountCalculation | string |   |   | X |
| discountAmount.lineDiscountValue | float |   | X |   |
| discountAmount.taxable | bool |   | X |   |
| discountAmount.taxGroupId | guid |   | X |   |
| discountAmount.lineAmount | float |   | X |   |
| discountAmount.amountExcludingTax | float |   | X |   |
| discountAmount.amountIncludingTax | float |   | X |   |
| discountAmount.invoiceDiscountAmount | float |   | X |   |
| discountAmount.taxPercent | float |   | X |   |
| discountAmount.totalTaxAmount | float |   | X |   |
| discountAppliedBeforeTax | bool |   | X |   |
| discountAppliedBeforeTax.sequence | int |   | X |   |
| discountAppliedBeforeTax.itemId | guid |   | X |   |
| discountAppliedBeforeTax.description | string |   | X |   |
| discountAppliedBeforeTax.quantity | float |   | X |   |
| discountAppliedBeforeTax.unitPrice | float |   | X |   |
| discountAppliedBeforeTax.lineDiscountCalculation | string |   |   | X |
| discountAppliedBeforeTax.lineDiscountValue | float |   | X |   |
| discountAppliedBeforeTax.taxable | bool |   | X |   |
| discountAppliedBeforeTax.taxGroupId | guid |   | X |   |
| discountAppliedBeforeTax.lineAmount | float |   | X |   |
| discountAppliedBeforeTax.amountExcludingTax | float |   | X |   |
| discountAppliedBeforeTax.amountIncludingTax | float |   | X |   |
| discountAppliedBeforeTax.invoiceDiscountAmount | float |   | X |   |
| discountAppliedBeforeTax.taxPercent | float |   | X |   |
| discountAppliedBeforeTax.totalTaxAmount | float |   | X |   |
| coupons | array |   | X |   |
| coupons.*.claimId | string |   | X |   |
| coupons.*.usage | string |   |   | X |
| coupons.*.offer | string |   |   | X |
| coupons.*.terms | string |   |   | X |
| coupons.*.code | string |   |   | X |
| coupons.*.expiration | date |   |   | X |
| coupons.*.discountValue | float |   |   | X |
| coupons.*.discountType | string |   |   | X |
| coupons.*.amount | string |   |   | X |
| totalAmountExcludingTax | float |   |   | X |
| totalAmountExcludingTax.claimId | string |   | X |   |
| totalAmountExcludingTax.usage | string |   |   | X |
| totalAmountExcludingTax.offer | string |   |   | X |
| totalAmountExcludingTax.terms | string |   |   | X |
| totalAmountExcludingTax.code | string |   |   | X |
| totalAmountExcludingTax.expiration | date |   |   | X |
| totalAmountExcludingTax.discountValue | float |   |   | X |
| totalAmountExcludingTax.discountType | string |   |   | X |
| totalAmountExcludingTax.amount | string |   |   | X |
| totalTaxAmount | float |   |   | X |
| totalTaxAmount.claimId | string |   | X |   |
| totalTaxAmount.usage | string |   |   | X |
| totalTaxAmount.offer | string |   |   | X |
| totalTaxAmount.terms | string |   |   | X |
| totalTaxAmount.code | string |   |   | X |
| totalTaxAmount.expiration | date |   |   | X |
| totalTaxAmount.discountValue | float |   |   | X |
| totalTaxAmount.discountType | string |   |   | X |
| totalTaxAmount.amount | string |   |   | X |
| totalAmountIncludingTax | float |   |   | X |
| totalAmountIncludingTax.claimId | string |   | X |   |
| totalAmountIncludingTax.usage | string |   |   | X |
| totalAmountIncludingTax.offer | string |   |   | X |
| totalAmountIncludingTax.terms | string |   |   | X |
| totalAmountIncludingTax.code | string |   |   | X |
| totalAmountIncludingTax.expiration | date |   |   | X |
| totalAmountIncludingTax.discountValue | float |   |   | X |
| totalAmountIncludingTax.discountType | string |   |   | X |
| totalAmountIncludingTax.amount | string |   |   | X |
| noteForCustomer | string |   |   | X |
| noteForCustomer.claimId | string |   | X |   |
| noteForCustomer.usage | string |   |   | X |
| noteForCustomer.offer | string |   |   | X |
| noteForCustomer.terms | string |   |   | X |
| noteForCustomer.code | string |   |   | X |
| noteForCustomer.expiration | date |   |   | X |
| noteForCustomer.discountValue | float |   |   | X |
| noteForCustomer.discountType | string |   |   | X |
| noteForCustomer.amount | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.claimId | string |   | X |   |
| lastModifiedDateTime.usage | string |   |   | X |
| lastModifiedDateTime.offer | string |   |   | X |
| lastModifiedDateTime.terms | string |   |   | X |
| lastModifiedDateTime.code | string |   |   | X |
| lastModifiedDateTime.expiration | date |   |   | X |
| lastModifiedDateTime.discountValue | float |   |   | X |
| lastModifiedDateTime.discountType | string |   |   | X |
| lastModifiedDateTime.amount | string |   |   | X |
| attachments | array |   |   | X |
| attachments.*.id | guid | X | X |   |
| attachments.*.fileName | string |   |   | X |
| attachments.*.byteSize | int |   |   | X |
| invoiceDiscountCalculation | string |   |   | X |
| invoiceDiscountCalculation.id | guid | X | X |   |
| invoiceDiscountCalculation.fileName | string |   |   | X |
| invoiceDiscountCalculation.byteSize | int |   |   | X |
| invoiceDiscountValue | float |   |   | X |
| invoiceDiscountValue.id | guid | X | X |   |
| invoiceDiscountValue.fileName | string |   |   | X |
| invoiceDiscountValue.byteSize | int |   |   | X |
| lastEmailSentStatus | string |   |   | X |
| lastEmailSentStatus.id | guid | X | X |   |
| lastEmailSentStatus.fileName | string |   |   | X |
| lastEmailSentStatus.byteSize | int |   |   | X |
| lastEmailSentTime | date |   |   | X |
| lastEmailSentTime.id | guid | X | X |   |
| lastEmailSentTime.fileName | string |   |   | X |
| lastEmailSentTime.byteSize | int |   |   | X |
| isCustomerBlocked | bool |   |   | X |
| isCustomerBlocked.id | guid | X | X |   |
| isCustomerBlocked.fileName | string |   |   | X |
| isCustomerBlocked.byteSize | int |   |   | X |

## Actions

### MakeInvoice
No parameters
### Send
No parameters
# InvoicingSalesTaxSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| displayName | string |   |   | X |
| displayName.id | guid | X | X |   |
| displayName.fileName | string |   |   | X |
| displayName.byteSize | int |   |   | X |
| default | bool |   |   | X |
| default.id | guid | X | X |   |
| default.fileName | string |   |   | X |
| default.byteSize | int |   |   | X |
| city | string |   |   | X |
| city.id | guid | X | X |   |
| city.fileName | string |   |   | X |
| city.byteSize | int |   |   | X |
| cityRate | float |   |   | X |
| cityRate.id | guid | X | X |   |
| cityRate.fileName | string |   |   | X |
| cityRate.byteSize | int |   |   | X |
| state | string |   |   | X |
| state.id | guid | X | X |   |
| state.fileName | string |   |   | X |
| state.byteSize | int |   |   | X |
| stateRate | float |   |   | X |
| stateRate.id | guid | X | X |   |
| stateRate.fileName | string |   |   | X |
| stateRate.byteSize | int |   |   | X |
| canadaGstHstDescription | string |   |   | X |
| canadaGstHstDescription.id | guid | X | X |   |
| canadaGstHstDescription.fileName | string |   |   | X |
| canadaGstHstDescription.byteSize | int |   |   | X |
| canadaGstHstRate | float |   |   | X |
| canadaGstHstRate.id | guid | X | X |   |
| canadaGstHstRate.fileName | string |   |   | X |
| canadaGstHstRate.byteSize | int |   |   | X |
| canadaPstDescription | string |   |   | X |
| canadaPstDescription.id | guid | X | X |   |
| canadaPstDescription.fileName | string |   |   | X |
| canadaPstDescription.byteSize | int |   |   | X |
| canadaPstRate | float |   |   | X |
| canadaPstRate.id | guid | X | X |   |
| canadaPstRate.fileName | string |   |   | X |
| canadaPstRate.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |

# InvoicingSyncServicesSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| key | int |   |   | X |
| key.id | guid | X | X |   |
| key.fileName | string |   |   | X |
| key.byteSize | int |   |   | X |
| qboSyncTitle | string |   |   | X |
| qboSyncTitle.id | guid | X | X |   |
| qboSyncTitle.fileName | string |   |   | X |
| qboSyncTitle.byteSize | int |   |   | X |
| qboSyncDescription | string |   |   | X |
| qboSyncDescription.id | guid | X | X |   |
| qboSyncDescription.fileName | string |   |   | X |
| qboSyncDescription.byteSize | int |   |   | X |
| qboSyncEnabled | bool |   |   | X |
| qboSyncEnabled.id | guid | X | X |   |
| qboSyncEnabled.fileName | string |   |   | X |
| qboSyncEnabled.byteSize | int |   |   | X |
| qbdSyncTitle | string |   |   | X |
| qbdSyncTitle.id | guid | X | X |   |
| qbdSyncTitle.fileName | string |   |   | X |
| qbdSyncTitle.byteSize | int |   |   | X |
| qbdSyncDescription | string |   |   | X |
| qbdSyncDescription.id | guid | X | X |   |
| qbdSyncDescription.fileName | string |   |   | X |
| qbdSyncDescription.byteSize | int |   |   | X |
| qbdSyncEnabled | bool |   |   | X |
| qbdSyncEnabled.id | guid | X | X |   |
| qbdSyncEnabled.fileName | string |   |   | X |
| qbdSyncEnabled.byteSize | int |   |   | X |
| qbdSyncSendToEmail | string |   |   | X |
| qbdSyncSendToEmail.id | guid | X | X |   |
| qbdSyncSendToEmail.fileName | string |   |   | X |
| qbdSyncSendToEmail.byteSize | int |   |   | X |

## Actions

### SendInstructionsByEmail
No parameters
# InvoicingTaxArea
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| code | string |   |   | X |
| code.id | guid | X | X |   |
| code.fileName | string |   |   | X |
| code.byteSize | int |   |   | X |
| displayName | string |   |   | X |
| displayName.id | guid | X | X |   |
| displayName.fileName | string |   |   | X |
| displayName.byteSize | int |   |   | X |
| taxType | string |   |   | X |
| taxType.id | guid | X | X |   |
| taxType.fileName | string |   |   | X |
| taxType.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |

# InvoicingTaxGroup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| code | string |   |   | X |
| code.id | guid | X | X |   |
| code.fileName | string |   |   | X |
| code.byteSize | int |   |   | X |
| displayName | string |   |   | X |
| displayName.id | guid | X | X |   |
| displayName.fileName | string |   |   | X |
| displayName.byteSize | int |   |   | X |
| taxType | string |   |   | X |
| taxType.id | guid | X | X |   |
| taxType.fileName | string |   |   | X |
| taxType.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |

# InvoicingTaxRate
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| taxAreaId | guid |   |   | X |
| taxAreaId.id | guid | X | X |   |
| taxAreaId.fileName | string |   |   | X |
| taxAreaId.byteSize | int |   |   | X |
| taxGroupId | guid |   |   | X |
| taxGroupId.id | guid | X | X |   |
| taxGroupId.fileName | string |   |   | X |
| taxGroupId.byteSize | int |   |   | X |
| taxRate | float |   |   | X |
| taxRate.id | guid | X | X |   |
| taxRate.fileName | string |   |   | X |
| taxRate.byteSize | int |   |   | X |

# InvoicingTestMail
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| code.id | guid | X | X |   |
| code.fileName | string |   |   | X |
| code.byteSize | int |   |   | X |
| email | string |   |   | X |
| email.id | guid | X | X |   |
| email.fileName | string |   |   | X |
| email.byteSize | int |   |   | X |

# InvoicingUnitsOfMeasure
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| code | string |   |   | X |
| code.id | guid | X | X |   |
| code.fileName | string |   |   | X |
| code.byteSize | int |   |   | X |
| displayName | string |   |   | X |
| displayName.id | guid | X | X |   |
| displayName.fileName | string |   |   | X |
| displayName.byteSize | int |   |   | X |
| internationalStandardCode | string |   |   | X |
| internationalStandardCode.id | guid | X | X |   |
| internationalStandardCode.fileName | string |   |   | X |
| internationalStandardCode.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |

# InvoicingVATSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| default | bool |   |   | X |
| default.id | guid | X | X |   |
| default.fileName | string |   |   | X |
| default.byteSize | int |   |   | X |
| displayName | string |   |   | X |
| displayName.id | guid | X | X |   |
| displayName.fileName | string |   |   | X |
| displayName.byteSize | int |   |   | X |
| vatPercentage | float |   |   | X |
| vatPercentage.id | guid | X | X |   |
| vatPercentage.fileName | string |   |   | X |
| vatPercentage.byteSize | int |   |   | X |
| vatRegulationDescription | string |   |   | X |
| vatRegulationDescription.id | guid | X | X |   |
| vatRegulationDescription.fileName | string |   |   | X |
| vatRegulationDescription.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |

# Powerbifinance
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | int |   |   | X |
| no.id | guid | X | X |   |
| no.fileName | string |   |   | X |
| no.byteSize | int |   |   | X |
| date | date |   |   | X |
| date.id | guid | X | X |   |
| date.fileName | string |   |   | X |
| date.byteSize | int |   |   | X |
| closedPeriod | bool |   |   | X |
| closedPeriod.id | guid | X | X |   |
| closedPeriod.fileName | string |   |   | X |
| closedPeriod.byteSize | int |   |   | X |
| accountScheduleName | string |   |   | X |
| accountScheduleName.id | guid | X | X |   |
| accountScheduleName.fileName | string |   |   | X |
| accountScheduleName.byteSize | int |   |   | X |
| kPICode | string |   |   | X |
| kPICode.id | guid | X | X |   |
| kPICode.fileName | string |   |   | X |
| kPICode.byteSize | int |   |   | X |
| kPIName | string |   |   | X |
| kPIName.id | guid | X | X |   |
| kPIName.fileName | string |   |   | X |
| kPIName.byteSize | int |   |   | X |
| netChangeActual | float |   |   | X |
| netChangeActual.id | guid | X | X |   |
| netChangeActual.fileName | string |   |   | X |
| netChangeActual.byteSize | int |   |   | X |
| balanceAtDateActual | float |   |   | X |
| balanceAtDateActual.id | guid | X | X |   |
| balanceAtDateActual.fileName | string |   |   | X |
| balanceAtDateActual.byteSize | int |   |   | X |
| netChangeBudget | float |   |   | X |
| netChangeBudget.id | guid | X | X |   |
| netChangeBudget.fileName | string |   |   | X |
| netChangeBudget.byteSize | int |   |   | X |
| balanceAtDateBudget | float |   |   | X |
| balanceAtDateBudget.id | guid | X | X |   |
| balanceAtDateBudget.fileName | string |   |   | X |
| balanceAtDateBudget.byteSize | int |   |   | X |
| netChangeActualLastYear | float |   |   | X |
| netChangeActualLastYear.id | guid | X | X |   |
| netChangeActualLastYear.fileName | string |   |   | X |
| netChangeActualLastYear.byteSize | int |   |   | X |
| balanceAtDateActualLastYear | float |   |   | X |
| balanceAtDateActualLastYear.id | guid | X | X |   |
| balanceAtDateActualLastYear.fileName | string |   |   | X |
| balanceAtDateActualLastYear.byteSize | int |   |   | X |
| netChangeBudgetLastYear | float |   |   | X |
| netChangeBudgetLastYear.id | guid | X | X |   |
| netChangeBudgetLastYear.fileName | string |   |   | X |
| netChangeBudgetLastYear.byteSize | int |   |   | X |
| balanceAtDateBudgetLastYear | float |   |   | X |
| balanceAtDateBudgetLastYear.id | guid | X | X |   |
| balanceAtDateBudgetLastYear.fileName | string |   |   | X |
| balanceAtDateBudgetLastYear.byteSize | int |   |   | X |
| netChangeForecast | float |   |   | X |
| netChangeForecast.id | guid | X | X |   |
| netChangeForecast.fileName | string |   |   | X |
| netChangeForecast.byteSize | int |   |   | X |
| balanceAtDateForecast | float |   |   | X |
| balanceAtDateForecast.id | guid | X | X |   |
| balanceAtDateForecast.fileName | string |   |   | X |
| balanceAtDateForecast.byteSize | int |   |   | X |

# PurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| buyFromVendorNumber | string |   |   | X |
| buyFromVendorNumber.id | guid | X | X |   |
| buyFromVendorNumber.fileName | string |   |   | X |
| buyFromVendorNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| expectedReceiptDate | date |   |   | X |
| expectedReceiptDate.id | guid | X | X |   |
| expectedReceiptDate.fileName | string |   |   | X |
| expectedReceiptDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToReceive | float |   |   | X |
| qtyToReceive.id | guid | X | X |   |
| qtyToReceive.fileName | string |   |   | X |
| qtyToReceive.byteSize | int |   |   | X |
| directUnitCost | float |   |   | X |
| directUnitCost.id | guid | X | X |   |
| directUnitCost.fileName | string |   |   | X |
| directUnitCost.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| unitPriceLcy | float |   |   | X |
| unitPriceLcy.id | guid | X | X |   |
| unitPriceLcy.fileName | string |   |   | X |
| unitPriceLcy.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| indirectCostPercent | float |   |   | X |
| indirectCostPercent.id | guid | X | X |   |
| indirectCostPercent.fileName | string |   |   | X |
| indirectCostPercent.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyRcdNotInvoiced | float |   |   | X |
| qtyRcdNotInvoiced.id | guid | X | X |   |
| qtyRcdNotInvoiced.fileName | string |   |   | X |
| qtyRcdNotInvoiced.byteSize | int |   |   | X |
| amtRcdNotInvoiced | float |   |   | X |
| amtRcdNotInvoiced.id | guid | X | X |   |
| amtRcdNotInvoiced.fileName | string |   |   | X |
| amtRcdNotInvoiced.byteSize | int |   |   | X |
| quantityReceived | float |   |   | X |
| quantityReceived.id | guid | X | X |   |
| quantityReceived.fileName | string |   |   | X |
| quantityReceived.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| receiptNumber | string |   |   | X |
| receiptNumber.id | guid | X | X |   |
| receiptNumber.fileName | string |   |   | X |
| receiptNumber.byteSize | int |   |   | X |
| receiptLineNumber | int |   |   | X |
| receiptLineNumber.id | guid | X | X |   |
| receiptLineNumber.fileName | string |   |   | X |
| receiptLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| vendorItemNumber | string |   |   | X |
| vendorItemNumber.id | guid | X | X |   |
| vendorItemNumber.fileName | string |   |   | X |
| vendorItemNumber.byteSize | int |   |   | X |
| salesOrderNumber | string |   |   | X |
| salesOrderNumber.id | guid | X | X |   |
| salesOrderNumber.fileName | string |   |   | X |
| salesOrderNumber.byteSize | int |   |   | X |
| salesOrderLineNumber | int |   |   | X |
| salesOrderLineNumber.id | guid | X | X |   |
| salesOrderLineNumber.fileName | string |   |   | X |
| salesOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| entryPoint | string |   |   | X |
| entryPoint.id | guid | X | X |   |
| entryPoint.fileName | string |   |   | X |
| entryPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| useTax | bool |   |   | X |
| useTax.id | guid | X | X |   |
| useTax.fileName | string |   |   | X |
| useTax.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| outstandingAmtExVatLcy | float |   |   | X |
| outstandingAmtExVatLcy.id | guid | X | X |   |
| outstandingAmtExVatLcy.fileName | string |   |   | X |
| outstandingAmtExVatLcy.byteSize | int |   |   | X |
| aRcdNotInvExVatLcy | float |   |   | X |
| aRcdNotInvExVatLcy.id | guid | X | X |   |
| aRcdNotInvExVatLcy.fileName | string |   |   | X |
| aRcdNotInvExVatLcy.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobLineType | string |   |   | X |
| jobLineType.id | guid | X | X |   |
| jobLineType.fileName | string |   |   | X |
| jobLineType.byteSize | int |   |   | X |
| jobUnitPrice | float |   |   | X |
| jobUnitPrice.id | guid | X | X |   |
| jobUnitPrice.fileName | string |   |   | X |
| jobUnitPrice.byteSize | int |   |   | X |
| jobTotalPrice | float |   |   | X |
| jobTotalPrice.id | guid | X | X |   |
| jobTotalPrice.fileName | string |   |   | X |
| jobTotalPrice.byteSize | int |   |   | X |
| jobLineAmount | float |   |   | X |
| jobLineAmount.id | guid | X | X |   |
| jobLineAmount.fileName | string |   |   | X |
| jobLineAmount.byteSize | int |   |   | X |
| jobLineDiscountAmount | float |   |   | X |
| jobLineDiscountAmount.id | guid | X | X |   |
| jobLineDiscountAmount.fileName | string |   |   | X |
| jobLineDiscountAmount.byteSize | int |   |   | X |
| jobLineDiscountPercent | float |   |   | X |
| jobLineDiscountPercent.id | guid | X | X |   |
| jobLineDiscountPercent.fileName | string |   |   | X |
| jobLineDiscountPercent.byteSize | int |   |   | X |
| jobUnitPriceLcy | float |   |   | X |
| jobUnitPriceLcy.id | guid | X | X |   |
| jobUnitPriceLcy.fileName | string |   |   | X |
| jobUnitPriceLcy.byteSize | int |   |   | X |
| jobTotalPriceLcy | float |   |   | X |
| jobTotalPriceLcy.id | guid | X | X |   |
| jobTotalPriceLcy.fileName | string |   |   | X |
| jobTotalPriceLcy.byteSize | int |   |   | X |
| jobLineAmountLcy | float |   |   | X |
| jobLineAmountLcy.id | guid | X | X |   |
| jobLineAmountLcy.fileName | string |   |   | X |
| jobLineAmountLcy.byteSize | int |   |   | X |
| jobLineDiscAmountLcy | float |   |   | X |
| jobLineDiscAmountLcy.id | guid | X | X |   |
| jobLineDiscAmountLcy.fileName | string |   |   | X |
| jobLineDiscAmountLcy.byteSize | int |   |   | X |
| jobCurrencyFactor | float |   |   | X |
| jobCurrencyFactor.id | guid | X | X |   |
| jobCurrencyFactor.fileName | string |   |   | X |
| jobCurrencyFactor.byteSize | int |   |   | X |
| jobCurrencyCode | string |   |   | X |
| jobCurrencyCode.id | guid | X | X |   |
| jobCurrencyCode.fileName | string |   |   | X |
| jobCurrencyCode.byteSize | int |   |   | X |
| jobPlanningLineNumber | int |   |   | X |
| jobPlanningLineNumber.id | guid | X | X |   |
| jobPlanningLineNumber.fileName | string |   |   | X |
| jobPlanningLineNumber.byteSize | int |   |   | X |
| jobRemainingQty | float |   |   | X |
| jobRemainingQty.id | guid | X | X |   |
| jobRemainingQty.fileName | string |   |   | X |
| jobRemainingQty.byteSize | int |   |   | X |
| jobRemainingQtyBase | float |   |   | X |
| jobRemainingQtyBase.id | guid | X | X |   |
| jobRemainingQtyBase.fileName | string |   |   | X |
| jobRemainingQtyBase.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| prodOrderNumber | string |   |   | X |
| prodOrderNumber.id | guid | X | X |   |
| prodOrderNumber.fileName | string |   |   | X |
| prodOrderNumber.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToReceiveBase | float |   |   | X |
| qtyToReceiveBase.id | guid | X | X |   |
| qtyToReceiveBase.fileName | string |   |   | X |
| qtyToReceiveBase.byteSize | int |   |   | X |
| qtyRcdNotInvoicedBase | float |   |   | X |
| qtyRcdNotInvoicedBase.id | guid | X | X |   |
| qtyRcdNotInvoicedBase.fileName | string |   |   | X |
| qtyRcdNotInvoicedBase.byteSize | int |   |   | X |
| qtyReceivedBase | float |   |   | X |
| qtyReceivedBase.id | guid | X | X |   |
| qtyReceivedBase.fileName | string |   |   | X |
| qtyReceivedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| faPostingType | string |   |   | X |
| faPostingType.id | guid | X | X |   |
| faPostingType.fileName | string |   |   | X |
| faPostingType.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| salvageValue | float |   |   | X |
| salvageValue.id | guid | X | X |   |
| salvageValue.fileName | string |   |   | X |
| salvageValue.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| deprAcquisitionCost | bool |   |   | X |
| deprAcquisitionCost.id | guid | X | X |   |
| deprAcquisitionCost.fileName | string |   |   | X |
| deprAcquisitionCost.byteSize | int |   |   | X |
| maintenanceCode | string |   |   | X |
| maintenanceCode.id | guid | X | X |   |
| maintenanceCode.fileName | string |   |   | X |
| maintenanceCode.byteSize | int |   |   | X |
| insuranceNumber | string |   |   | X |
| insuranceNumber.id | guid | X | X |   |
| insuranceNumber.fileName | string |   |   | X |
| insuranceNumber.byteSize | int |   |   | X |
| budgetedFaNumber | string |   |   | X |
| budgetedFaNumber.id | guid | X | X |   |
| budgetedFaNumber.fileName | string |   |   | X |
| budgetedFaNumber.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderSalesNumber | string |   |   | X |
| specialOrderSalesNumber.id | guid | X | X |   |
| specialOrderSalesNumber.fileName | string |   |   | X |
| specialOrderSalesNumber.byteSize | int |   |   | X |
| specialOrderSalesLineNumber | int |   |   | X |
| specialOrderSalesLineNumber.id | guid | X | X |   |
| specialOrderSalesLineNumber.fileName | string |   |   | X |
| specialOrderSalesLineNumber.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyReceived | bool |   |   | X |
| completelyReceived.id | guid | X | X |   |
| completelyReceived.fileName | string |   |   | X |
| completelyReceived.byteSize | int |   |   | X |
| requestedReceiptDate | date |   |   | X |
| requestedReceiptDate.id | guid | X | X |   |
| requestedReceiptDate.fileName | string |   |   | X |
| requestedReceiptDate.byteSize | int |   |   | X |
| promisedReceiptDate | date |   |   | X |
| promisedReceiptDate.id | guid | X | X |   |
| promisedReceiptDate.fileName | string |   |   | X |
| promisedReceiptDate.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| inboundWhseHandlingTime | string |   |   | X |
| inboundWhseHandlingTime.id | guid | X | X |   |
| inboundWhseHandlingTime.fileName | string |   |   | X |
| inboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedReceiptDate | date |   |   | X |
| plannedReceiptDate.id | guid | X | X |   |
| plannedReceiptDate.fileName | string |   |   | X |
| plannedReceiptDate.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToShip | float |   |   | X |
| returnQtyToShip.id | guid | X | X |   |
| returnQtyToShip.fileName | string |   |   | X |
| returnQtyToShip.byteSize | int |   |   | X |
| returnQtyToShipBase | float |   |   | X |
| returnQtyToShipBase.id | guid | X | X |   |
| returnQtyToShipBase.fileName | string |   |   | X |
| returnQtyToShipBase.byteSize | int |   |   | X |
| returnQtyShippedNotInvd | float |   |   | X |
| returnQtyShippedNotInvd.id | guid | X | X |   |
| returnQtyShippedNotInvd.fileName | string |   |   | X |
| returnQtyShippedNotInvd.byteSize | int |   |   | X |
| retQtyShpdNotInvdBase | float |   |   | X |
| retQtyShpdNotInvdBase.id | guid | X | X |   |
| retQtyShpdNotInvdBase.fileName | string |   |   | X |
| retQtyShpdNotInvdBase.byteSize | int |   |   | X |
| returnShpdNotInvd | float |   |   | X |
| returnShpdNotInvd.id | guid | X | X |   |
| returnShpdNotInvd.fileName | string |   |   | X |
| returnShpdNotInvd.byteSize | int |   |   | X |
| returnShpdNotInvdLcy | float |   |   | X |
| returnShpdNotInvdLcy.id | guid | X | X |   |
| returnShpdNotInvdLcy.fileName | string |   |   | X |
| returnShpdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyShipped | float |   |   | X |
| returnQtyShipped.id | guid | X | X |   |
| returnQtyShipped.fileName | string |   |   | X |
| returnQtyShipped.byteSize | int |   |   | X |
| returnQtyShippedBase | float |   |   | X |
| returnQtyShippedBase.id | guid | X | X |   |
| returnQtyShippedBase.fileName | string |   |   | X |
| returnQtyShippedBase.byteSize | int |   |   | X |
| returnShipmentNumber | string |   |   | X |
| returnShipmentNumber.id | guid | X | X |   |
| returnShipmentNumber.fileName | string |   |   | X |
| returnShipmentNumber.byteSize | int |   |   | X |
| returnShipmentLineNumber | int |   |   | X |
| returnShipmentLineNumber.id | guid | X | X |   |
| returnShipmentLineNumber.fileName | string |   |   | X |
| returnShipmentLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| routingNumber | string |   |   | X |
| routingNumber.id | guid | X | X |   |
| routingNumber.fileName | string |   |   | X |
| routingNumber.byteSize | int |   |   | X |
| operationNumber | string |   |   | X |
| operationNumber.id | guid | X | X |   |
| operationNumber.fileName | string |   |   | X |
| operationNumber.byteSize | int |   |   | X |
| workCenterNumber | string |   |   | X |
| workCenterNumber.id | guid | X | X |   |
| workCenterNumber.fileName | string |   |   | X |
| workCenterNumber.byteSize | int |   |   | X |
| finished | bool |   |   | X |
| finished.id | guid | X | X |   |
| finished.fileName | string |   |   | X |
| finished.byteSize | int |   |   | X |
| prodOrderLineNumber | int |   |   | X |
| prodOrderLineNumber.id | guid | X | X |   |
| prodOrderLineNumber.fileName | string |   |   | X |
| prodOrderLineNumber.byteSize | int |   |   | X |
| overheadRate | float |   |   | X |
| overheadRate.id | guid | X | X |   |
| overheadRate.fileName | string |   |   | X |
| overheadRate.byteSize | int |   |   | X |
| mpsOrder | bool |   |   | X |
| mpsOrder.id | guid | X | X |   |
| mpsOrder.fileName | string |   |   | X |
| mpsOrder.byteSize | int |   |   | X |
| planningFlexibility | string |   |   | X |
| planningFlexibility.id | guid | X | X |   |
| planningFlexibility.fileName | string |   |   | X |
| planningFlexibility.byteSize | int |   |   | X |
| safetyLeadTime | string |   |   | X |
| safetyLeadTime.id | guid | X | X |   |
| safetyLeadTime.fileName | string |   |   | X |
| safetyLeadTime.byteSize | int |   |   | X |
| routingReferenceNumber | int |   |   | X |
| routingReferenceNumber.id | guid | X | X |   |
| routingReferenceNumber.fileName | string |   |   | X |
| routingReferenceNumber.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# PurchaseDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| buyFromVendorNumber | string |   |   | X |
| buyFromVendorNumber.id | guid | X | X |   |
| buyFromVendorNumber.fileName | string |   |   | X |
| buyFromVendorNumber.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| payToName | string |   |   | X |
| payToName.id | guid | X | X |   |
| payToName.fileName | string |   |   | X |
| payToName.byteSize | int |   |   | X |
| payToName2 | string |   |   | X |
| payToName2.id | guid | X | X |   |
| payToName2.fileName | string |   |   | X |
| payToName2.byteSize | int |   |   | X |
| payToAddress | string |   |   | X |
| payToAddress.id | guid | X | X |   |
| payToAddress.fileName | string |   |   | X |
| payToAddress.byteSize | int |   |   | X |
| payToAddress2 | string |   |   | X |
| payToAddress2.id | guid | X | X |   |
| payToAddress2.fileName | string |   |   | X |
| payToAddress2.byteSize | int |   |   | X |
| payToCity | string |   |   | X |
| payToCity.id | guid | X | X |   |
| payToCity.fileName | string |   |   | X |
| payToCity.byteSize | int |   |   | X |
| payToContact | string |   |   | X |
| payToContact.id | guid | X | X |   |
| payToContact.fileName | string |   |   | X |
| payToContact.byteSize | int |   |   | X |
| yourReference | string |   |   | X |
| yourReference.id | guid | X | X |   |
| yourReference.fileName | string |   |   | X |
| yourReference.byteSize | int |   |   | X |
| shipToCode | string |   |   | X |
| shipToCode.id | guid | X | X |   |
| shipToCode.fileName | string |   |   | X |
| shipToCode.byteSize | int |   |   | X |
| shipToName | string |   |   | X |
| shipToName.id | guid | X | X |   |
| shipToName.fileName | string |   |   | X |
| shipToName.byteSize | int |   |   | X |
| shipToName2 | string |   |   | X |
| shipToName2.id | guid | X | X |   |
| shipToName2.fileName | string |   |   | X |
| shipToName2.byteSize | int |   |   | X |
| shipToAddress | string |   |   | X |
| shipToAddress.id | guid | X | X |   |
| shipToAddress.fileName | string |   |   | X |
| shipToAddress.byteSize | int |   |   | X |
| shipToAddress2 | string |   |   | X |
| shipToAddress2.id | guid | X | X |   |
| shipToAddress2.fileName | string |   |   | X |
| shipToAddress2.byteSize | int |   |   | X |
| shipToCity | string |   |   | X |
| shipToCity.id | guid | X | X |   |
| shipToCity.fileName | string |   |   | X |
| shipToCity.byteSize | int |   |   | X |
| shipToContact | string |   |   | X |
| shipToContact.id | guid | X | X |   |
| shipToContact.fileName | string |   |   | X |
| shipToContact.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| expectedReceiptDate | date |   |   | X |
| expectedReceiptDate.id | guid | X | X |   |
| expectedReceiptDate.fileName | string |   |   | X |
| expectedReceiptDate.byteSize | int |   |   | X |
| postingDescription | string |   |   | X |
| postingDescription.id | guid | X | X |   |
| postingDescription.fileName | string |   |   | X |
| postingDescription.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| dueDate | date |   |   | X |
| dueDate.id | guid | X | X |   |
| dueDate.fileName | string |   |   | X |
| dueDate.byteSize | int |   |   | X |
| paymentDiscountPercent | float |   |   | X |
| paymentDiscountPercent.id | guid | X | X |   |
| paymentDiscountPercent.fileName | string |   |   | X |
| paymentDiscountPercent.byteSize | int |   |   | X |
| pmtDiscountDate | date |   |   | X |
| pmtDiscountDate.id | guid | X | X |   |
| pmtDiscountDate.fileName | string |   |   | X |
| pmtDiscountDate.byteSize | int |   |   | X |
| shipmentMethodCode | string |   |   | X |
| shipmentMethodCode.id | guid | X | X |   |
| shipmentMethodCode.fileName | string |   |   | X |
| shipmentMethodCode.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| vendorPostingGroup | string |   |   | X |
| vendorPostingGroup.id | guid | X | X |   |
| vendorPostingGroup.fileName | string |   |   | X |
| vendorPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| currencyFactor | float |   |   | X |
| currencyFactor.id | guid | X | X |   |
| currencyFactor.fileName | string |   |   | X |
| currencyFactor.byteSize | int |   |   | X |
| pricesIncludingVat | bool |   |   | X |
| pricesIncludingVat.id | guid | X | X |   |
| pricesIncludingVat.fileName | string |   |   | X |
| pricesIncludingVat.byteSize | int |   |   | X |
| invoiceDiscCode | string |   |   | X |
| invoiceDiscCode.id | guid | X | X |   |
| invoiceDiscCode.fileName | string |   |   | X |
| invoiceDiscCode.byteSize | int |   |   | X |
| languageCode | string |   |   | X |
| languageCode.id | guid | X | X |   |
| languageCode.fileName | string |   |   | X |
| languageCode.byteSize | int |   |   | X |
| purchaserCode | string |   |   | X |
| purchaserCode.id | guid | X | X |   |
| purchaserCode.fileName | string |   |   | X |
| purchaserCode.byteSize | int |   |   | X |
| orderClass | string |   |   | X |
| orderClass.id | guid | X | X |   |
| orderClass.fileName | string |   |   | X |
| orderClass.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| numberPrinted | int |   |   | X |
| numberPrinted.id | guid | X | X |   |
| numberPrinted.fileName | string |   |   | X |
| numberPrinted.byteSize | int |   |   | X |
| onHold | string |   |   | X |
| onHold.id | guid | X | X |   |
| onHold.fileName | string |   |   | X |
| onHold.byteSize | int |   |   | X |
| appliesToDocType | string |   |   | X |
| appliesToDocType.id | guid | X | X |   |
| appliesToDocType.fileName | string |   |   | X |
| appliesToDocType.byteSize | int |   |   | X |
| appliesToDocNumber | string |   |   | X |
| appliesToDocNumber.id | guid | X | X |   |
| appliesToDocNumber.fileName | string |   |   | X |
| appliesToDocNumber.byteSize | int |   |   | X |
| balAccountNumber | string |   |   | X |
| balAccountNumber.id | guid | X | X |   |
| balAccountNumber.fileName | string |   |   | X |
| balAccountNumber.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| receive | bool |   |   | X |
| receive.id | guid | X | X |   |
| receive.fileName | string |   |   | X |
| receive.byteSize | int |   |   | X |
| invoice | bool |   |   | X |
| invoice.id | guid | X | X |   |
| invoice.fileName | string |   |   | X |
| invoice.byteSize | int |   |   | X |
| printPostedDocuments | bool |   |   | X |
| printPostedDocuments.id | guid | X | X |   |
| printPostedDocuments.fileName | string |   |   | X |
| printPostedDocuments.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| receivingNumber | string |   |   | X |
| receivingNumber.id | guid | X | X |   |
| receivingNumber.fileName | string |   |   | X |
| receivingNumber.byteSize | int |   |   | X |
| postingNumber | string |   |   | X |
| postingNumber.id | guid | X | X |   |
| postingNumber.fileName | string |   |   | X |
| postingNumber.byteSize | int |   |   | X |
| lastReceivingNumber | string |   |   | X |
| lastReceivingNumber.id | guid | X | X |   |
| lastReceivingNumber.fileName | string |   |   | X |
| lastReceivingNumber.byteSize | int |   |   | X |
| lastPostingNumber | string |   |   | X |
| lastPostingNumber.id | guid | X | X |   |
| lastPostingNumber.fileName | string |   |   | X |
| lastPostingNumber.byteSize | int |   |   | X |
| vendorOrderNumber | string |   |   | X |
| vendorOrderNumber.id | guid | X | X |   |
| vendorOrderNumber.fileName | string |   |   | X |
| vendorOrderNumber.byteSize | int |   |   | X |
| vendorShipmentNumber | string |   |   | X |
| vendorShipmentNumber.id | guid | X | X |   |
| vendorShipmentNumber.fileName | string |   |   | X |
| vendorShipmentNumber.byteSize | int |   |   | X |
| vendorInvoiceNumber | string |   |   | X |
| vendorInvoiceNumber.id | guid | X | X |   |
| vendorInvoiceNumber.fileName | string |   |   | X |
| vendorInvoiceNumber.byteSize | int |   |   | X |
| vendorCrMemoNumber | string |   |   | X |
| vendorCrMemoNumber.id | guid | X | X |   |
| vendorCrMemoNumber.fileName | string |   |   | X |
| vendorCrMemoNumber.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| reasonCode | string |   |   | X |
| reasonCode.id | guid | X | X |   |
| reasonCode.fileName | string |   |   | X |
| reasonCode.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| vatCountryRegionCode | string |   |   | X |
| vatCountryRegionCode.id | guid | X | X |   |
| vatCountryRegionCode.fileName | string |   |   | X |
| vatCountryRegionCode.byteSize | int |   |   | X |
| buyFromVendorName | string |   |   | X |
| buyFromVendorName.id | guid | X | X |   |
| buyFromVendorName.fileName | string |   |   | X |
| buyFromVendorName.byteSize | int |   |   | X |
| buyFromVendorName2 | string |   |   | X |
| buyFromVendorName2.id | guid | X | X |   |
| buyFromVendorName2.fileName | string |   |   | X |
| buyFromVendorName2.byteSize | int |   |   | X |
| buyFromAddress | string |   |   | X |
| buyFromAddress.id | guid | X | X |   |
| buyFromAddress.fileName | string |   |   | X |
| buyFromAddress.byteSize | int |   |   | X |
| buyFromAddress2 | string |   |   | X |
| buyFromAddress2.id | guid | X | X |   |
| buyFromAddress2.fileName | string |   |   | X |
| buyFromAddress2.byteSize | int |   |   | X |
| buyFromCity | string |   |   | X |
| buyFromCity.id | guid | X | X |   |
| buyFromCity.fileName | string |   |   | X |
| buyFromCity.byteSize | int |   |   | X |
| buyFromContact | string |   |   | X |
| buyFromContact.id | guid | X | X |   |
| buyFromContact.fileName | string |   |   | X |
| buyFromContact.byteSize | int |   |   | X |
| payToPostCode | string |   |   | X |
| payToPostCode.id | guid | X | X |   |
| payToPostCode.fileName | string |   |   | X |
| payToPostCode.byteSize | int |   |   | X |
| payToCounty | string |   |   | X |
| payToCounty.id | guid | X | X |   |
| payToCounty.fileName | string |   |   | X |
| payToCounty.byteSize | int |   |   | X |
| payToCountryRegionCode | string |   |   | X |
| payToCountryRegionCode.id | guid | X | X |   |
| payToCountryRegionCode.fileName | string |   |   | X |
| payToCountryRegionCode.byteSize | int |   |   | X |
| buyFromPostCode | string |   |   | X |
| buyFromPostCode.id | guid | X | X |   |
| buyFromPostCode.fileName | string |   |   | X |
| buyFromPostCode.byteSize | int |   |   | X |
| buyFromCounty | string |   |   | X |
| buyFromCounty.id | guid | X | X |   |
| buyFromCounty.fileName | string |   |   | X |
| buyFromCounty.byteSize | int |   |   | X |
| buyFromCountryRegionCode | string |   |   | X |
| buyFromCountryRegionCode.id | guid | X | X |   |
| buyFromCountryRegionCode.fileName | string |   |   | X |
| buyFromCountryRegionCode.byteSize | int |   |   | X |
| shipToPostCode | string |   |   | X |
| shipToPostCode.id | guid | X | X |   |
| shipToPostCode.fileName | string |   |   | X |
| shipToPostCode.byteSize | int |   |   | X |
| shipToCounty | string |   |   | X |
| shipToCounty.id | guid | X | X |   |
| shipToCounty.fileName | string |   |   | X |
| shipToCounty.byteSize | int |   |   | X |
| shipToCountryRegionCode | string |   |   | X |
| shipToCountryRegionCode.id | guid | X | X |   |
| shipToCountryRegionCode.fileName | string |   |   | X |
| shipToCountryRegionCode.byteSize | int |   |   | X |
| balAccountType | string |   |   | X |
| balAccountType.id | guid | X | X |   |
| balAccountType.fileName | string |   |   | X |
| balAccountType.byteSize | int |   |   | X |
| orderAddressCode | string |   |   | X |
| orderAddressCode.id | guid | X | X |   |
| orderAddressCode.fileName | string |   |   | X |
| orderAddressCode.byteSize | int |   |   | X |
| entryPoint | string |   |   | X |
| entryPoint.id | guid | X | X |   |
| entryPoint.fileName | string |   |   | X |
| entryPoint.byteSize | int |   |   | X |
| correction | bool |   |   | X |
| correction.id | guid | X | X |   |
| correction.fileName | string |   |   | X |
| correction.byteSize | int |   |   | X |
| documentDate | date |   |   | X |
| documentDate.id | guid | X | X |   |
| documentDate.fileName | string |   |   | X |
| documentDate.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| postingNumberSeries | string |   |   | X |
| postingNumberSeries.id | guid | X | X |   |
| postingNumberSeries.fileName | string |   |   | X |
| postingNumberSeries.byteSize | int |   |   | X |
| receivingNumberSeries | string |   |   | X |
| receivingNumberSeries.id | guid | X | X |   |
| receivingNumberSeries.fileName | string |   |   | X |
| receivingNumberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| appliesToId | string |   |   | X |
| appliesToId.id | guid | X | X |   |
| appliesToId.fileName | string |   |   | X |
| appliesToId.byteSize | int |   |   | X |
| vatBaseDiscountPercent | float |   |   | X |
| vatBaseDiscountPercent.id | guid | X | X |   |
| vatBaseDiscountPercent.fileName | string |   |   | X |
| vatBaseDiscountPercent.byteSize | int |   |   | X |
| status | string |   |   | X |
| status.id | guid | X | X |   |
| status.fileName | string |   |   | X |
| status.byteSize | int |   |   | X |
| invoiceDiscountCalculation | string |   |   | X |
| invoiceDiscountCalculation.id | guid | X | X |   |
| invoiceDiscountCalculation.fileName | string |   |   | X |
| invoiceDiscountCalculation.byteSize | int |   |   | X |
| invoiceDiscountValue | float |   |   | X |
| invoiceDiscountValue.id | guid | X | X |   |
| invoiceDiscountValue.fileName | string |   |   | X |
| invoiceDiscountValue.byteSize | int |   |   | X |
| sendIcDocument | bool |   |   | X |
| sendIcDocument.id | guid | X | X |   |
| sendIcDocument.fileName | string |   |   | X |
| sendIcDocument.byteSize | int |   |   | X |
| icStatus | string |   |   | X |
| icStatus.id | guid | X | X |   |
| icStatus.fileName | string |   |   | X |
| icStatus.byteSize | int |   |   | X |
| buyFromIcPartnerCode | string |   |   | X |
| buyFromIcPartnerCode.id | guid | X | X |   |
| buyFromIcPartnerCode.fileName | string |   |   | X |
| buyFromIcPartnerCode.byteSize | int |   |   | X |
| payToIcPartnerCode | string |   |   | X |
| payToIcPartnerCode.id | guid | X | X |   |
| payToIcPartnerCode.fileName | string |   |   | X |
| payToIcPartnerCode.byteSize | int |   |   | X |
| icDirection | string |   |   | X |
| icDirection.id | guid | X | X |   |
| icDirection.fileName | string |   |   | X |
| icDirection.byteSize | int |   |   | X |
| prepaymentNumber | string |   |   | X |
| prepaymentNumber.id | guid | X | X |   |
| prepaymentNumber.fileName | string |   |   | X |
| prepaymentNumber.byteSize | int |   |   | X |
| lastPrepaymentNumber | string |   |   | X |
| lastPrepaymentNumber.id | guid | X | X |   |
| lastPrepaymentNumber.fileName | string |   |   | X |
| lastPrepaymentNumber.byteSize | int |   |   | X |
| prepmtCrMemoNumber | string |   |   | X |
| prepmtCrMemoNumber.id | guid | X | X |   |
| prepmtCrMemoNumber.fileName | string |   |   | X |
| prepmtCrMemoNumber.byteSize | int |   |   | X |
| lastPrepmtCrMemoNumber | string |   |   | X |
| lastPrepmtCrMemoNumber.id | guid | X | X |   |
| lastPrepmtCrMemoNumber.fileName | string |   |   | X |
| lastPrepmtCrMemoNumber.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepaymentNumberSeries | string |   |   | X |
| prepaymentNumberSeries.id | guid | X | X |   |
| prepaymentNumberSeries.fileName | string |   |   | X |
| prepaymentNumberSeries.byteSize | int |   |   | X |
| compressPrepayment | bool |   |   | X |
| compressPrepayment.id | guid | X | X |   |
| compressPrepayment.fileName | string |   |   | X |
| compressPrepayment.byteSize | int |   |   | X |
| prepaymentDueDate | date |   |   | X |
| prepaymentDueDate.id | guid | X | X |   |
| prepaymentDueDate.fileName | string |   |   | X |
| prepaymentDueDate.byteSize | int |   |   | X |
| prepmtCrMemoNumberSeries | string |   |   | X |
| prepmtCrMemoNumberSeries.id | guid | X | X |   |
| prepmtCrMemoNumberSeries.fileName | string |   |   | X |
| prepmtCrMemoNumberSeries.byteSize | int |   |   | X |
| prepmtPostingDescription | string |   |   | X |
| prepmtPostingDescription.id | guid | X | X |   |
| prepmtPostingDescription.fileName | string |   |   | X |
| prepmtPostingDescription.byteSize | int |   |   | X |
| prepmtPmtDiscountDate | date |   |   | X |
| prepmtPmtDiscountDate.id | guid | X | X |   |
| prepmtPmtDiscountDate.fileName | string |   |   | X |
| prepmtPmtDiscountDate.byteSize | int |   |   | X |
| prepmtPaymentTermsCode | string |   |   | X |
| prepmtPaymentTermsCode.id | guid | X | X |   |
| prepmtPaymentTermsCode.fileName | string |   |   | X |
| prepmtPaymentTermsCode.byteSize | int |   |   | X |
| prepmtPaymentDiscountPercent | float |   |   | X |
| prepmtPaymentDiscountPercent.id | guid | X | X |   |
| prepmtPaymentDiscountPercent.fileName | string |   |   | X |
| prepmtPaymentDiscountPercent.byteSize | int |   |   | X |
| quoteNumber | string |   |   | X |
| quoteNumber.id | guid | X | X |   |
| quoteNumber.fileName | string |   |   | X |
| quoteNumber.byteSize | int |   |   | X |
| jobQueueStatus | string |   |   | X |
| jobQueueStatus.id | guid | X | X |   |
| jobQueueStatus.fileName | string |   |   | X |
| jobQueueStatus.byteSize | int |   |   | X |
| jobQueueEntryId | guid |   |   | X |
| jobQueueEntryId.id | guid | X | X |   |
| jobQueueEntryId.fileName | string |   |   | X |
| jobQueueEntryId.byteSize | int |   |   | X |
| incomingDocumentEntryNumber | int |   |   | X |
| incomingDocumentEntryNumber.id | guid | X | X |   |
| incomingDocumentEntryNumber.fileName | string |   |   | X |
| incomingDocumentEntryNumber.byteSize | int |   |   | X |
| creditorNumber | string |   |   | X |
| creditorNumber.id | guid | X | X |   |
| creditorNumber.fileName | string |   |   | X |
| creditorNumber.byteSize | int |   |   | X |
| paymentReference | string |   |   | X |
| paymentReference.id | guid | X | X |   |
| paymentReference.fileName | string |   |   | X |
| paymentReference.byteSize | int |   |   | X |
| aRcdNotInvExVatLcy | float |   |   | X |
| aRcdNotInvExVatLcy.id | guid | X | X |   |
| aRcdNotInvExVatLcy.fileName | string |   |   | X |
| aRcdNotInvExVatLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| invoiceDiscountAmount | float |   |   | X |
| invoiceDiscountAmount.id | guid | X | X |   |
| invoiceDiscountAmount.fileName | string |   |   | X |
| invoiceDiscountAmount.byteSize | int |   |   | X |
| numberOfArchivedVersions | int |   |   | X |
| numberOfArchivedVersions.id | guid | X | X |   |
| numberOfArchivedVersions.fileName | string |   |   | X |
| numberOfArchivedVersions.byteSize | int |   |   | X |
| docNumberOccurrence | int |   |   | X |
| docNumberOccurrence.id | guid | X | X |   |
| docNumberOccurrence.fileName | string |   |   | X |
| docNumberOccurrence.byteSize | int |   |   | X |
| campaignNumber | string |   |   | X |
| campaignNumber.id | guid | X | X |   |
| campaignNumber.fileName | string |   |   | X |
| campaignNumber.byteSize | int |   |   | X |
| buyFromContactNumber | string |   |   | X |
| buyFromContactNumber.id | guid | X | X |   |
| buyFromContactNumber.fileName | string |   |   | X |
| buyFromContactNumber.byteSize | int |   |   | X |
| payToContactNumber | string |   |   | X |
| payToContactNumber.id | guid | X | X |   |
| payToContactNumber.fileName | string |   |   | X |
| payToContactNumber.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| completelyReceived | bool |   |   | X |
| completelyReceived.id | guid | X | X |   |
| completelyReceived.fileName | string |   |   | X |
| completelyReceived.byteSize | int |   |   | X |
| postingFromWhseRef | int |   |   | X |
| postingFromWhseRef.id | guid | X | X |   |
| postingFromWhseRef.fileName | string |   |   | X |
| postingFromWhseRef.byteSize | int |   |   | X |
| locationFilter | string |   |   | X |
| locationFilter.id | guid | X | X |   |
| locationFilter.fileName | string |   |   | X |
| locationFilter.byteSize | int |   |   | X |
| requestedReceiptDate | date |   |   | X |
| requestedReceiptDate.id | guid | X | X |   |
| requestedReceiptDate.fileName | string |   |   | X |
| requestedReceiptDate.byteSize | int |   |   | X |
| promisedReceiptDate | date |   |   | X |
| promisedReceiptDate.id | guid | X | X |   |
| promisedReceiptDate.fileName | string |   |   | X |
| promisedReceiptDate.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| inboundWhseHandlingTime | string |   |   | X |
| inboundWhseHandlingTime.id | guid | X | X |   |
| inboundWhseHandlingTime.fileName | string |   |   | X |
| inboundWhseHandlingTime.byteSize | int |   |   | X |
| vendorAuthorizationNumber | string |   |   | X |
| vendorAuthorizationNumber.id | guid | X | X |   |
| vendorAuthorizationNumber.fileName | string |   |   | X |
| vendorAuthorizationNumber.byteSize | int |   |   | X |
| returnShipmentNumber | string |   |   | X |
| returnShipmentNumber.id | guid | X | X |   |
| returnShipmentNumber.fileName | string |   |   | X |
| returnShipmentNumber.byteSize | int |   |   | X |
| returnShipmentNumberSeries | string |   |   | X |
| returnShipmentNumberSeries.id | guid | X | X |   |
| returnShipmentNumberSeries.fileName | string |   |   | X |
| returnShipmentNumberSeries.byteSize | int |   |   | X |
| ship | bool |   |   | X |
| ship.id | guid | X | X |   |
| ship.fileName | string |   |   | X |
| ship.byteSize | int |   |   | X |
| lastReturnShipmentNumber | string |   |   | X |
| lastReturnShipmentNumber.id | guid | X | X |   |
| lastReturnShipmentNumber.fileName | string |   |   | X |
| lastReturnShipmentNumber.byteSize | int |   |   | X |
| assignedUserId | string |   |   | X |
| assignedUserId.id | guid | X | X |   |
| assignedUserId.fileName | string |   |   | X |
| assignedUserId.byteSize | int |   |   | X |
| pendingApprovals | int |   |   | X |
| pendingApprovals.id | guid | X | X |   |
| pendingApprovals.fileName | string |   |   | X |
| pendingApprovals.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseDocumentsworkflowPurchaseDocumentLines | [PurchaseDocumentsworkflowPurchaseDocumentLines[]](#purchasedocumentsworkflowpurchasedocumentlines) | Yes |
# PurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| buyFromVendorNumber | string |   |   | X |
| buyFromVendorNumber.id | guid | X | X |   |
| buyFromVendorNumber.fileName | string |   |   | X |
| buyFromVendorNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| expectedReceiptDate | date |   |   | X |
| expectedReceiptDate.id | guid | X | X |   |
| expectedReceiptDate.fileName | string |   |   | X |
| expectedReceiptDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToReceive | float |   |   | X |
| qtyToReceive.id | guid | X | X |   |
| qtyToReceive.fileName | string |   |   | X |
| qtyToReceive.byteSize | int |   |   | X |
| directUnitCost | float |   |   | X |
| directUnitCost.id | guid | X | X |   |
| directUnitCost.fileName | string |   |   | X |
| directUnitCost.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| unitPriceLcy | float |   |   | X |
| unitPriceLcy.id | guid | X | X |   |
| unitPriceLcy.fileName | string |   |   | X |
| unitPriceLcy.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| indirectCostPercent | float |   |   | X |
| indirectCostPercent.id | guid | X | X |   |
| indirectCostPercent.fileName | string |   |   | X |
| indirectCostPercent.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyRcdNotInvoiced | float |   |   | X |
| qtyRcdNotInvoiced.id | guid | X | X |   |
| qtyRcdNotInvoiced.fileName | string |   |   | X |
| qtyRcdNotInvoiced.byteSize | int |   |   | X |
| amtRcdNotInvoiced | float |   |   | X |
| amtRcdNotInvoiced.id | guid | X | X |   |
| amtRcdNotInvoiced.fileName | string |   |   | X |
| amtRcdNotInvoiced.byteSize | int |   |   | X |
| quantityReceived | float |   |   | X |
| quantityReceived.id | guid | X | X |   |
| quantityReceived.fileName | string |   |   | X |
| quantityReceived.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| receiptNumber | string |   |   | X |
| receiptNumber.id | guid | X | X |   |
| receiptNumber.fileName | string |   |   | X |
| receiptNumber.byteSize | int |   |   | X |
| receiptLineNumber | int |   |   | X |
| receiptLineNumber.id | guid | X | X |   |
| receiptLineNumber.fileName | string |   |   | X |
| receiptLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| vendorItemNumber | string |   |   | X |
| vendorItemNumber.id | guid | X | X |   |
| vendorItemNumber.fileName | string |   |   | X |
| vendorItemNumber.byteSize | int |   |   | X |
| salesOrderNumber | string |   |   | X |
| salesOrderNumber.id | guid | X | X |   |
| salesOrderNumber.fileName | string |   |   | X |
| salesOrderNumber.byteSize | int |   |   | X |
| salesOrderLineNumber | int |   |   | X |
| salesOrderLineNumber.id | guid | X | X |   |
| salesOrderLineNumber.fileName | string |   |   | X |
| salesOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| entryPoint | string |   |   | X |
| entryPoint.id | guid | X | X |   |
| entryPoint.fileName | string |   |   | X |
| entryPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| useTax | bool |   |   | X |
| useTax.id | guid | X | X |   |
| useTax.fileName | string |   |   | X |
| useTax.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| outstandingAmtExVatLcy | float |   |   | X |
| outstandingAmtExVatLcy.id | guid | X | X |   |
| outstandingAmtExVatLcy.fileName | string |   |   | X |
| outstandingAmtExVatLcy.byteSize | int |   |   | X |
| aRcdNotInvExVatLcy | float |   |   | X |
| aRcdNotInvExVatLcy.id | guid | X | X |   |
| aRcdNotInvExVatLcy.fileName | string |   |   | X |
| aRcdNotInvExVatLcy.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobLineType | string |   |   | X |
| jobLineType.id | guid | X | X |   |
| jobLineType.fileName | string |   |   | X |
| jobLineType.byteSize | int |   |   | X |
| jobUnitPrice | float |   |   | X |
| jobUnitPrice.id | guid | X | X |   |
| jobUnitPrice.fileName | string |   |   | X |
| jobUnitPrice.byteSize | int |   |   | X |
| jobTotalPrice | float |   |   | X |
| jobTotalPrice.id | guid | X | X |   |
| jobTotalPrice.fileName | string |   |   | X |
| jobTotalPrice.byteSize | int |   |   | X |
| jobLineAmount | float |   |   | X |
| jobLineAmount.id | guid | X | X |   |
| jobLineAmount.fileName | string |   |   | X |
| jobLineAmount.byteSize | int |   |   | X |
| jobLineDiscountAmount | float |   |   | X |
| jobLineDiscountAmount.id | guid | X | X |   |
| jobLineDiscountAmount.fileName | string |   |   | X |
| jobLineDiscountAmount.byteSize | int |   |   | X |
| jobLineDiscountPercent | float |   |   | X |
| jobLineDiscountPercent.id | guid | X | X |   |
| jobLineDiscountPercent.fileName | string |   |   | X |
| jobLineDiscountPercent.byteSize | int |   |   | X |
| jobUnitPriceLcy | float |   |   | X |
| jobUnitPriceLcy.id | guid | X | X |   |
| jobUnitPriceLcy.fileName | string |   |   | X |
| jobUnitPriceLcy.byteSize | int |   |   | X |
| jobTotalPriceLcy | float |   |   | X |
| jobTotalPriceLcy.id | guid | X | X |   |
| jobTotalPriceLcy.fileName | string |   |   | X |
| jobTotalPriceLcy.byteSize | int |   |   | X |
| jobLineAmountLcy | float |   |   | X |
| jobLineAmountLcy.id | guid | X | X |   |
| jobLineAmountLcy.fileName | string |   |   | X |
| jobLineAmountLcy.byteSize | int |   |   | X |
| jobLineDiscAmountLcy | float |   |   | X |
| jobLineDiscAmountLcy.id | guid | X | X |   |
| jobLineDiscAmountLcy.fileName | string |   |   | X |
| jobLineDiscAmountLcy.byteSize | int |   |   | X |
| jobCurrencyFactor | float |   |   | X |
| jobCurrencyFactor.id | guid | X | X |   |
| jobCurrencyFactor.fileName | string |   |   | X |
| jobCurrencyFactor.byteSize | int |   |   | X |
| jobCurrencyCode | string |   |   | X |
| jobCurrencyCode.id | guid | X | X |   |
| jobCurrencyCode.fileName | string |   |   | X |
| jobCurrencyCode.byteSize | int |   |   | X |
| jobPlanningLineNumber | int |   |   | X |
| jobPlanningLineNumber.id | guid | X | X |   |
| jobPlanningLineNumber.fileName | string |   |   | X |
| jobPlanningLineNumber.byteSize | int |   |   | X |
| jobRemainingQty | float |   |   | X |
| jobRemainingQty.id | guid | X | X |   |
| jobRemainingQty.fileName | string |   |   | X |
| jobRemainingQty.byteSize | int |   |   | X |
| jobRemainingQtyBase | float |   |   | X |
| jobRemainingQtyBase.id | guid | X | X |   |
| jobRemainingQtyBase.fileName | string |   |   | X |
| jobRemainingQtyBase.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| prodOrderNumber | string |   |   | X |
| prodOrderNumber.id | guid | X | X |   |
| prodOrderNumber.fileName | string |   |   | X |
| prodOrderNumber.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToReceiveBase | float |   |   | X |
| qtyToReceiveBase.id | guid | X | X |   |
| qtyToReceiveBase.fileName | string |   |   | X |
| qtyToReceiveBase.byteSize | int |   |   | X |
| qtyRcdNotInvoicedBase | float |   |   | X |
| qtyRcdNotInvoicedBase.id | guid | X | X |   |
| qtyRcdNotInvoicedBase.fileName | string |   |   | X |
| qtyRcdNotInvoicedBase.byteSize | int |   |   | X |
| qtyReceivedBase | float |   |   | X |
| qtyReceivedBase.id | guid | X | X |   |
| qtyReceivedBase.fileName | string |   |   | X |
| qtyReceivedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| faPostingType | string |   |   | X |
| faPostingType.id | guid | X | X |   |
| faPostingType.fileName | string |   |   | X |
| faPostingType.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| salvageValue | float |   |   | X |
| salvageValue.id | guid | X | X |   |
| salvageValue.fileName | string |   |   | X |
| salvageValue.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| deprAcquisitionCost | bool |   |   | X |
| deprAcquisitionCost.id | guid | X | X |   |
| deprAcquisitionCost.fileName | string |   |   | X |
| deprAcquisitionCost.byteSize | int |   |   | X |
| maintenanceCode | string |   |   | X |
| maintenanceCode.id | guid | X | X |   |
| maintenanceCode.fileName | string |   |   | X |
| maintenanceCode.byteSize | int |   |   | X |
| insuranceNumber | string |   |   | X |
| insuranceNumber.id | guid | X | X |   |
| insuranceNumber.fileName | string |   |   | X |
| insuranceNumber.byteSize | int |   |   | X |
| budgetedFaNumber | string |   |   | X |
| budgetedFaNumber.id | guid | X | X |   |
| budgetedFaNumber.fileName | string |   |   | X |
| budgetedFaNumber.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderSalesNumber | string |   |   | X |
| specialOrderSalesNumber.id | guid | X | X |   |
| specialOrderSalesNumber.fileName | string |   |   | X |
| specialOrderSalesNumber.byteSize | int |   |   | X |
| specialOrderSalesLineNumber | int |   |   | X |
| specialOrderSalesLineNumber.id | guid | X | X |   |
| specialOrderSalesLineNumber.fileName | string |   |   | X |
| specialOrderSalesLineNumber.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyReceived | bool |   |   | X |
| completelyReceived.id | guid | X | X |   |
| completelyReceived.fileName | string |   |   | X |
| completelyReceived.byteSize | int |   |   | X |
| requestedReceiptDate | date |   |   | X |
| requestedReceiptDate.id | guid | X | X |   |
| requestedReceiptDate.fileName | string |   |   | X |
| requestedReceiptDate.byteSize | int |   |   | X |
| promisedReceiptDate | date |   |   | X |
| promisedReceiptDate.id | guid | X | X |   |
| promisedReceiptDate.fileName | string |   |   | X |
| promisedReceiptDate.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| inboundWhseHandlingTime | string |   |   | X |
| inboundWhseHandlingTime.id | guid | X | X |   |
| inboundWhseHandlingTime.fileName | string |   |   | X |
| inboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedReceiptDate | date |   |   | X |
| plannedReceiptDate.id | guid | X | X |   |
| plannedReceiptDate.fileName | string |   |   | X |
| plannedReceiptDate.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToShip | float |   |   | X |
| returnQtyToShip.id | guid | X | X |   |
| returnQtyToShip.fileName | string |   |   | X |
| returnQtyToShip.byteSize | int |   |   | X |
| returnQtyToShipBase | float |   |   | X |
| returnQtyToShipBase.id | guid | X | X |   |
| returnQtyToShipBase.fileName | string |   |   | X |
| returnQtyToShipBase.byteSize | int |   |   | X |
| returnQtyShippedNotInvd | float |   |   | X |
| returnQtyShippedNotInvd.id | guid | X | X |   |
| returnQtyShippedNotInvd.fileName | string |   |   | X |
| returnQtyShippedNotInvd.byteSize | int |   |   | X |
| retQtyShpdNotInvdBase | float |   |   | X |
| retQtyShpdNotInvdBase.id | guid | X | X |   |
| retQtyShpdNotInvdBase.fileName | string |   |   | X |
| retQtyShpdNotInvdBase.byteSize | int |   |   | X |
| returnShpdNotInvd | float |   |   | X |
| returnShpdNotInvd.id | guid | X | X |   |
| returnShpdNotInvd.fileName | string |   |   | X |
| returnShpdNotInvd.byteSize | int |   |   | X |
| returnShpdNotInvdLcy | float |   |   | X |
| returnShpdNotInvdLcy.id | guid | X | X |   |
| returnShpdNotInvdLcy.fileName | string |   |   | X |
| returnShpdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyShipped | float |   |   | X |
| returnQtyShipped.id | guid | X | X |   |
| returnQtyShipped.fileName | string |   |   | X |
| returnQtyShipped.byteSize | int |   |   | X |
| returnQtyShippedBase | float |   |   | X |
| returnQtyShippedBase.id | guid | X | X |   |
| returnQtyShippedBase.fileName | string |   |   | X |
| returnQtyShippedBase.byteSize | int |   |   | X |
| returnShipmentNumber | string |   |   | X |
| returnShipmentNumber.id | guid | X | X |   |
| returnShipmentNumber.fileName | string |   |   | X |
| returnShipmentNumber.byteSize | int |   |   | X |
| returnShipmentLineNumber | int |   |   | X |
| returnShipmentLineNumber.id | guid | X | X |   |
| returnShipmentLineNumber.fileName | string |   |   | X |
| returnShipmentLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| routingNumber | string |   |   | X |
| routingNumber.id | guid | X | X |   |
| routingNumber.fileName | string |   |   | X |
| routingNumber.byteSize | int |   |   | X |
| operationNumber | string |   |   | X |
| operationNumber.id | guid | X | X |   |
| operationNumber.fileName | string |   |   | X |
| operationNumber.byteSize | int |   |   | X |
| workCenterNumber | string |   |   | X |
| workCenterNumber.id | guid | X | X |   |
| workCenterNumber.fileName | string |   |   | X |
| workCenterNumber.byteSize | int |   |   | X |
| finished | bool |   |   | X |
| finished.id | guid | X | X |   |
| finished.fileName | string |   |   | X |
| finished.byteSize | int |   |   | X |
| prodOrderLineNumber | int |   |   | X |
| prodOrderLineNumber.id | guid | X | X |   |
| prodOrderLineNumber.fileName | string |   |   | X |
| prodOrderLineNumber.byteSize | int |   |   | X |
| overheadRate | float |   |   | X |
| overheadRate.id | guid | X | X |   |
| overheadRate.fileName | string |   |   | X |
| overheadRate.byteSize | int |   |   | X |
| mpsOrder | bool |   |   | X |
| mpsOrder.id | guid | X | X |   |
| mpsOrder.fileName | string |   |   | X |
| mpsOrder.byteSize | int |   |   | X |
| planningFlexibility | string |   |   | X |
| planningFlexibility.id | guid | X | X |   |
| planningFlexibility.fileName | string |   |   | X |
| planningFlexibility.byteSize | int |   |   | X |
| safetyLeadTime | string |   |   | X |
| safetyLeadTime.id | guid | X | X |   |
| safetyLeadTime.fileName | string |   |   | X |
| safetyLeadTime.byteSize | int |   |   | X |
| routingReferenceNumber | int |   |   | X |
| routingReferenceNumber.id | guid | X | X |   |
| routingReferenceNumber.fileName | string |   |   | X |
| routingReferenceNumber.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| shipmentDate | date |   |   | X |
| shipmentDate.id | guid | X | X |   |
| shipmentDate.fileName | string |   |   | X |
| shipmentDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToShip | float |   |   | X |
| qtyToShip.id | guid | X | X |   |
| qtyToShip.fileName | string |   |   | X |
| qtyToShip.byteSize | int |   |   | X |
| unitPrice | float |   |   | X |
| unitPrice.id | guid | X | X |   |
| unitPrice.fileName | string |   |   | X |
| unitPrice.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| workTypeCode | string |   |   | X |
| workTypeCode.id | guid | X | X |   |
| workTypeCode.fileName | string |   |   | X |
| workTypeCode.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyShippedNotInvoiced | float |   |   | X |
| qtyShippedNotInvoiced.id | guid | X | X |   |
| qtyShippedNotInvoiced.fileName | string |   |   | X |
| qtyShippedNotInvoiced.byteSize | int |   |   | X |
| shippedNotInvoiced | float |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| quantityShipped | float |   |   | X |
| quantityShipped.id | guid | X | X |   |
| quantityShipped.fileName | string |   |   | X |
| quantityShipped.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| shipmentNumber | string |   |   | X |
| shipmentNumber.id | guid | X | X |   |
| shipmentNumber.fileName | string |   |   | X |
| shipmentNumber.byteSize | int |   |   | X |
| shipmentLineNumber | int |   |   | X |
| shipmentLineNumber.id | guid | X | X |   |
| shipmentLineNumber.fileName | string |   |   | X |
| shipmentLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| purchaseOrderNumber | string |   |   | X |
| purchaseOrderNumber.id | guid | X | X |   |
| purchaseOrderNumber.fileName | string |   |   | X |
| purchaseOrderNumber.byteSize | int |   |   | X |
| purchOrderLineNumber | int |   |   | X |
| purchOrderLineNumber.id | guid | X | X |   |
| purchOrderLineNumber.fileName | string |   |   | X |
| purchOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| exitPoint | string |   |   | X |
| exitPoint.id | guid | X | X |   |
| exitPoint.fileName | string |   |   | X |
| exitPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxCategory | string |   |   | X |
| taxCategory.id | guid | X | X |   |
| taxCategory.fileName | string |   |   | X |
| taxCategory.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| vatClauseCode | string |   |   | X |
| vatClauseCode.id | guid | X | X |   |
| vatClauseCode.fileName | string |   |   | X |
| vatClauseCode.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| shippedNotInvoicedLcy | float |   |   | X |
| shippedNotInvoicedLcy.id | guid | X | X |   |
| shippedNotInvoicedLcy.fileName | string |   |   | X |
| shippedNotInvoicedLcy.byteSize | int |   |   | X |
| shippedNotInvLcyNoVat | float |   |   | X |
| shippedNotInvLcyNoVat.id | guid | X | X |   |
| shippedNotInvLcyNoVat.fileName | string |   |   | X |
| shippedNotInvLcyNoVat.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| qtyToAssembleToOrder | float |   |   | X |
| qtyToAssembleToOrder.id | guid | X | X |   |
| qtyToAssembleToOrder.fileName | string |   |   | X |
| qtyToAssembleToOrder.byteSize | int |   |   | X |
| qtyToAsmToOrderBase | float |   |   | X |
| qtyToAsmToOrderBase.id | guid | X | X |   |
| qtyToAsmToOrderBase.fileName | string |   |   | X |
| qtyToAsmToOrderBase.byteSize | int |   |   | X |
| atoWhseOutstandingQty | float |   |   | X |
| atoWhseOutstandingQty.id | guid | X | X |   |
| atoWhseOutstandingQty.fileName | string |   |   | X |
| atoWhseOutstandingQty.byteSize | int |   |   | X |
| atoWhseOutstdQtyBase | float |   |   | X |
| atoWhseOutstdQtyBase.id | guid | X | X |   |
| atoWhseOutstdQtyBase.fileName | string |   |   | X |
| atoWhseOutstdQtyBase.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobContractEntryNumber | int |   |   | X |
| jobContractEntryNumber.id | guid | X | X |   |
| jobContractEntryNumber.fileName | string |   |   | X |
| jobContractEntryNumber.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| planned | bool |   |   | X |
| planned.id | guid | X | X |   |
| planned.fileName | string |   |   | X |
| planned.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToShipBase | float |   |   | X |
| qtyToShipBase.id | guid | X | X |   |
| qtyToShipBase.fileName | string |   |   | X |
| qtyToShipBase.byteSize | int |   |   | X |
| qtyShippedNotInvdBase | float |   |   | X |
| qtyShippedNotInvdBase.id | guid | X | X |   |
| qtyShippedNotInvdBase.fileName | string |   |   | X |
| qtyShippedNotInvdBase.byteSize | int |   |   | X |
| qtyShippedBase | float |   |   | X |
| qtyShippedBase.id | guid | X | X |   |
| qtyShippedBase.fileName | string |   |   | X |
| qtyShippedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| outOfStockSubstitution | bool |   |   | X |
| outOfStockSubstitution.id | guid | X | X |   |
| outOfStockSubstitution.fileName | string |   |   | X |
| outOfStockSubstitution.byteSize | int |   |   | X |
| substitutionAvailable | bool |   |   | X |
| substitutionAvailable.id | guid | X | X |   |
| substitutionAvailable.fileName | string |   |   | X |
| substitutionAvailable.byteSize | int |   |   | X |
| originallyOrderedNumber | string |   |   | X |
| originallyOrderedNumber.id | guid | X | X |   |
| originallyOrderedNumber.fileName | string |   |   | X |
| originallyOrderedNumber.byteSize | int |   |   | X |
| originallyOrderedVarCode | string |   |   | X |
| originallyOrderedVarCode.id | guid | X | X |   |
| originallyOrderedVarCode.fileName | string |   |   | X |
| originallyOrderedVarCode.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderPurchaseNumber | string |   |   | X |
| specialOrderPurchaseNumber.id | guid | X | X |   |
| specialOrderPurchaseNumber.fileName | string |   |   | X |
| specialOrderPurchaseNumber.byteSize | int |   |   | X |
| specialOrderPurchLineNumber | int |   |   | X |
| specialOrderPurchLineNumber.id | guid | X | X |   |
| specialOrderPurchLineNumber.fileName | string |   |   | X |
| specialOrderPurchLineNumber.byteSize | int |   |   | X |
| whseOutstandingQty | float |   |   | X |
| whseOutstandingQty.id | guid | X | X |   |
| whseOutstandingQty.fileName | string |   |   | X |
| whseOutstandingQty.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyShipped | bool |   |   | X |
| completelyShipped.id | guid | X | X |   |
| completelyShipped.fileName | string |   |   | X |
| completelyShipped.byteSize | int |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| requestedDeliveryDate.id | guid | X | X |   |
| requestedDeliveryDate.fileName | string |   |   | X |
| requestedDeliveryDate.byteSize | int |   |   | X |
| promisedDeliveryDate | date |   |   | X |
| promisedDeliveryDate.id | guid | X | X |   |
| promisedDeliveryDate.fileName | string |   |   | X |
| promisedDeliveryDate.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| outboundWhseHandlingTime | string |   |   | X |
| outboundWhseHandlingTime.id | guid | X | X |   |
| outboundWhseHandlingTime.fileName | string |   |   | X |
| outboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedDeliveryDate | date |   |   | X |
| plannedDeliveryDate.id | guid | X | X |   |
| plannedDeliveryDate.fileName | string |   |   | X |
| plannedDeliveryDate.byteSize | int |   |   | X |
| plannedShipmentDate | date |   |   | X |
| plannedShipmentDate.id | guid | X | X |   |
| plannedShipmentDate.fileName | string |   |   | X |
| plannedShipmentDate.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToReceive | float |   |   | X |
| returnQtyToReceive.id | guid | X | X |   |
| returnQtyToReceive.fileName | string |   |   | X |
| returnQtyToReceive.byteSize | int |   |   | X |
| returnQtyToReceiveBase | float |   |   | X |
| returnQtyToReceiveBase.id | guid | X | X |   |
| returnQtyToReceiveBase.fileName | string |   |   | X |
| returnQtyToReceiveBase.byteSize | int |   |   | X |
| returnQtyRcdNotInvd | float |   |   | X |
| returnQtyRcdNotInvd.id | guid | X | X |   |
| returnQtyRcdNotInvd.fileName | string |   |   | X |
| returnQtyRcdNotInvd.byteSize | int |   |   | X |
| retQtyRcdNotInvdBase | float |   |   | X |
| retQtyRcdNotInvdBase.id | guid | X | X |   |
| retQtyRcdNotInvdBase.fileName | string |   |   | X |
| retQtyRcdNotInvdBase.byteSize | int |   |   | X |
| returnRcdNotInvd | float |   |   | X |
| returnRcdNotInvd.id | guid | X | X |   |
| returnRcdNotInvd.fileName | string |   |   | X |
| returnRcdNotInvd.byteSize | int |   |   | X |
| returnRcdNotInvdLcy | float |   |   | X |
| returnRcdNotInvdLcy.id | guid | X | X |   |
| returnRcdNotInvdLcy.fileName | string |   |   | X |
| returnRcdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyReceived | float |   |   | X |
| returnQtyReceived.id | guid | X | X |   |
| returnQtyReceived.fileName | string |   |   | X |
| returnQtyReceived.byteSize | int |   |   | X |
| returnQtyReceivedBase | float |   |   | X |
| returnQtyReceivedBase.id | guid | X | X |   |
| returnQtyReceivedBase.fileName | string |   |   | X |
| returnQtyReceivedBase.byteSize | int |   |   | X |
| applFromItemEntry | int |   |   | X |
| applFromItemEntry.id | guid | X | X |   |
| applFromItemEntry.fileName | string |   |   | X |
| applFromItemEntry.byteSize | int |   |   | X |
| bomItemNumber | string |   |   | X |
| bomItemNumber.id | guid | X | X |   |
| bomItemNumber.fileName | string |   |   | X |
| bomItemNumber.byteSize | int |   |   | X |
| returnReceiptNumber | string |   |   | X |
| returnReceiptNumber.id | guid | X | X |   |
| returnReceiptNumber.fileName | string |   |   | X |
| returnReceiptNumber.byteSize | int |   |   | X |
| returnReceiptLineNumber | int |   |   | X |
| returnReceiptLineNumber.id | guid | X | X |   |
| returnReceiptLineNumber.fileName | string |   |   | X |
| returnReceiptLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| priceDescription | string |   |   | X |
| priceDescription.id | guid | X | X |   |
| priceDescription.fileName | string |   |   | X |
| priceDescription.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| billToName | string |   |   | X |
| billToName.id | guid | X | X |   |
| billToName.fileName | string |   |   | X |
| billToName.byteSize | int |   |   | X |
| billToName2 | string |   |   | X |
| billToName2.id | guid | X | X |   |
| billToName2.fileName | string |   |   | X |
| billToName2.byteSize | int |   |   | X |
| billToAddress | string |   |   | X |
| billToAddress.id | guid | X | X |   |
| billToAddress.fileName | string |   |   | X |
| billToAddress.byteSize | int |   |   | X |
| billToAddress2 | string |   |   | X |
| billToAddress2.id | guid | X | X |   |
| billToAddress2.fileName | string |   |   | X |
| billToAddress2.byteSize | int |   |   | X |
| billToCity | string |   |   | X |
| billToCity.id | guid | X | X |   |
| billToCity.fileName | string |   |   | X |
| billToCity.byteSize | int |   |   | X |
| billToContact | string |   |   | X |
| billToContact.id | guid | X | X |   |
| billToContact.fileName | string |   |   | X |
| billToContact.byteSize | int |   |   | X |
| yourReference | string |   |   | X |
| yourReference.id | guid | X | X |   |
| yourReference.fileName | string |   |   | X |
| yourReference.byteSize | int |   |   | X |
| shipToCode | string |   |   | X |
| shipToCode.id | guid | X | X |   |
| shipToCode.fileName | string |   |   | X |
| shipToCode.byteSize | int |   |   | X |
| shipToName | string |   |   | X |
| shipToName.id | guid | X | X |   |
| shipToName.fileName | string |   |   | X |
| shipToName.byteSize | int |   |   | X |
| shipToName2 | string |   |   | X |
| shipToName2.id | guid | X | X |   |
| shipToName2.fileName | string |   |   | X |
| shipToName2.byteSize | int |   |   | X |
| shipToAddress | string |   |   | X |
| shipToAddress.id | guid | X | X |   |
| shipToAddress.fileName | string |   |   | X |
| shipToAddress.byteSize | int |   |   | X |
| shipToAddress2 | string |   |   | X |
| shipToAddress2.id | guid | X | X |   |
| shipToAddress2.fileName | string |   |   | X |
| shipToAddress2.byteSize | int |   |   | X |
| shipToCity | string |   |   | X |
| shipToCity.id | guid | X | X |   |
| shipToCity.fileName | string |   |   | X |
| shipToCity.byteSize | int |   |   | X |
| shipToContact | string |   |   | X |
| shipToContact.id | guid | X | X |   |
| shipToContact.fileName | string |   |   | X |
| shipToContact.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| shipmentDate | date |   |   | X |
| shipmentDate.id | guid | X | X |   |
| shipmentDate.fileName | string |   |   | X |
| shipmentDate.byteSize | int |   |   | X |
| postingDescription | string |   |   | X |
| postingDescription.id | guid | X | X |   |
| postingDescription.fileName | string |   |   | X |
| postingDescription.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| dueDate | date |   |   | X |
| dueDate.id | guid | X | X |   |
| dueDate.fileName | string |   |   | X |
| dueDate.byteSize | int |   |   | X |
| paymentDiscountPercent | float |   |   | X |
| paymentDiscountPercent.id | guid | X | X |   |
| paymentDiscountPercent.fileName | string |   |   | X |
| paymentDiscountPercent.byteSize | int |   |   | X |
| pmtDiscountDate | date |   |   | X |
| pmtDiscountDate.id | guid | X | X |   |
| pmtDiscountDate.fileName | string |   |   | X |
| pmtDiscountDate.byteSize | int |   |   | X |
| shipmentMethodCode | string |   |   | X |
| shipmentMethodCode.id | guid | X | X |   |
| shipmentMethodCode.fileName | string |   |   | X |
| shipmentMethodCode.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| customerPostingGroup | string |   |   | X |
| customerPostingGroup.id | guid | X | X |   |
| customerPostingGroup.fileName | string |   |   | X |
| customerPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| currencyFactor | float |   |   | X |
| currencyFactor.id | guid | X | X |   |
| currencyFactor.fileName | string |   |   | X |
| currencyFactor.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| pricesIncludingVat | bool |   |   | X |
| pricesIncludingVat.id | guid | X | X |   |
| pricesIncludingVat.fileName | string |   |   | X |
| pricesIncludingVat.byteSize | int |   |   | X |
| invoiceDiscCode | string |   |   | X |
| invoiceDiscCode.id | guid | X | X |   |
| invoiceDiscCode.fileName | string |   |   | X |
| invoiceDiscCode.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| languageCode | string |   |   | X |
| languageCode.id | guid | X | X |   |
| languageCode.fileName | string |   |   | X |
| languageCode.byteSize | int |   |   | X |
| salespersonCode | string |   |   | X |
| salespersonCode.id | guid | X | X |   |
| salespersonCode.fileName | string |   |   | X |
| salespersonCode.byteSize | int |   |   | X |
| orderClass | string |   |   | X |
| orderClass.id | guid | X | X |   |
| orderClass.fileName | string |   |   | X |
| orderClass.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| numberPrinted | int |   |   | X |
| numberPrinted.id | guid | X | X |   |
| numberPrinted.fileName | string |   |   | X |
| numberPrinted.byteSize | int |   |   | X |
| onHold | string |   |   | X |
| onHold.id | guid | X | X |   |
| onHold.fileName | string |   |   | X |
| onHold.byteSize | int |   |   | X |
| appliesToDocType | string |   |   | X |
| appliesToDocType.id | guid | X | X |   |
| appliesToDocType.fileName | string |   |   | X |
| appliesToDocType.byteSize | int |   |   | X |
| appliesToDocNumber | string |   |   | X |
| appliesToDocNumber.id | guid | X | X |   |
| appliesToDocNumber.fileName | string |   |   | X |
| appliesToDocNumber.byteSize | int |   |   | X |
| balAccountNumber | string |   |   | X |
| balAccountNumber.id | guid | X | X |   |
| balAccountNumber.fileName | string |   |   | X |
| balAccountNumber.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| ship | bool |   |   | X |
| ship.id | guid | X | X |   |
| ship.fileName | string |   |   | X |
| ship.byteSize | int |   |   | X |
| invoice | bool |   |   | X |
| invoice.id | guid | X | X |   |
| invoice.fileName | string |   |   | X |
| invoice.byteSize | int |   |   | X |
| printPostedDocuments | bool |   |   | X |
| printPostedDocuments.id | guid | X | X |   |
| printPostedDocuments.fileName | string |   |   | X |
| printPostedDocuments.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVAT | float |   |   | X |
| amountIncludingVAT.id | guid | X | X |   |
| amountIncludingVAT.fileName | string |   |   | X |
| amountIncludingVAT.byteSize | int |   |   | X |
| shippingNumber | string |   |   | X |
| shippingNumber.id | guid | X | X |   |
| shippingNumber.fileName | string |   |   | X |
| shippingNumber.byteSize | int |   |   | X |
| postingNumber | string |   |   | X |
| postingNumber.id | guid | X | X |   |
| postingNumber.fileName | string |   |   | X |
| postingNumber.byteSize | int |   |   | X |
| lastShippingNumber | string |   |   | X |
| lastShippingNumber.id | guid | X | X |   |
| lastShippingNumber.fileName | string |   |   | X |
| lastShippingNumber.byteSize | int |   |   | X |
| lastPostingNumber | string |   |   | X |
| lastPostingNumber.id | guid | X | X |   |
| lastPostingNumber.fileName | string |   |   | X |
| lastPostingNumber.byteSize | int |   |   | X |
| prepaymentNumber | string |   |   | X |
| prepaymentNumber.id | guid | X | X |   |
| prepaymentNumber.fileName | string |   |   | X |
| prepaymentNumber.byteSize | int |   |   | X |
| lastPrepaymentNumber | string |   |   | X |
| lastPrepaymentNumber.id | guid | X | X |   |
| lastPrepaymentNumber.fileName | string |   |   | X |
| lastPrepaymentNumber.byteSize | int |   |   | X |
| premptCrMemoNumber | string |   |   | X |
| premptCrMemoNumber.id | guid | X | X |   |
| premptCrMemoNumber.fileName | string |   |   | X |
| premptCrMemoNumber.byteSize | int |   |   | X |
| lastPremtCrMemoNumber | string |   |   | X |
| lastPremtCrMemoNumber.id | guid | X | X |   |
| lastPremtCrMemoNumber.fileName | string |   |   | X |
| lastPremtCrMemoNumber.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| combineShipments | bool |   |   | X |
| combineShipments.id | guid | X | X |   |
| combineShipments.fileName | string |   |   | X |
| combineShipments.byteSize | int |   |   | X |
| reasonCode | string |   |   | X |
| reasonCode.id | guid | X | X |   |
| reasonCode.fileName | string |   |   | X |
| reasonCode.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| eu3PartyTrade | bool |   |   | X |
| eu3PartyTrade.id | guid | X | X |   |
| eu3PartyTrade.fileName | string |   |   | X |
| eu3PartyTrade.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| vatCountryRegionCode | string |   |   | X |
| vatCountryRegionCode.id | guid | X | X |   |
| vatCountryRegionCode.fileName | string |   |   | X |
| vatCountryRegionCode.byteSize | int |   |   | X |
| sellToCustomerName | string |   |   | X |
| sellToCustomerName.id | guid | X | X |   |
| sellToCustomerName.fileName | string |   |   | X |
| sellToCustomerName.byteSize | int |   |   | X |
| sellToCustomerName2 | string |   |   | X |
| sellToCustomerName2.id | guid | X | X |   |
| sellToCustomerName2.fileName | string |   |   | X |
| sellToCustomerName2.byteSize | int |   |   | X |
| sellToAddress | string |   |   | X |
| sellToAddress.id | guid | X | X |   |
| sellToAddress.fileName | string |   |   | X |
| sellToAddress.byteSize | int |   |   | X |
| sellToAddress2 | string |   |   | X |
| sellToAddress2.id | guid | X | X |   |
| sellToAddress2.fileName | string |   |   | X |
| sellToAddress2.byteSize | int |   |   | X |
| sellToCity | string |   |   | X |
| sellToCity.id | guid | X | X |   |
| sellToCity.fileName | string |   |   | X |
| sellToCity.byteSize | int |   |   | X |
| sellToContact | string |   |   | X |
| sellToContact.id | guid | X | X |   |
| sellToContact.fileName | string |   |   | X |
| sellToContact.byteSize | int |   |   | X |
| billToPostCode | string |   |   | X |
| billToPostCode.id | guid | X | X |   |
| billToPostCode.fileName | string |   |   | X |
| billToPostCode.byteSize | int |   |   | X |
| billToCounty | string |   |   | X |
| billToCounty.id | guid | X | X |   |
| billToCounty.fileName | string |   |   | X |
| billToCounty.byteSize | int |   |   | X |
| billToCountryRegionCode | string |   |   | X |
| billToCountryRegionCode.id | guid | X | X |   |
| billToCountryRegionCode.fileName | string |   |   | X |
| billToCountryRegionCode.byteSize | int |   |   | X |
| sellToPostCode | string |   |   | X |
| sellToPostCode.id | guid | X | X |   |
| sellToPostCode.fileName | string |   |   | X |
| sellToPostCode.byteSize | int |   |   | X |
| sellToCounty | string |   |   | X |
| sellToCounty.id | guid | X | X |   |
| sellToCounty.fileName | string |   |   | X |
| sellToCounty.byteSize | int |   |   | X |
| sellToCountryRegionCode | string |   |   | X |
| sellToCountryRegionCode.id | guid | X | X |   |
| sellToCountryRegionCode.fileName | string |   |   | X |
| sellToCountryRegionCode.byteSize | int |   |   | X |
| shipToPostCode | string |   |   | X |
| shipToPostCode.id | guid | X | X |   |
| shipToPostCode.fileName | string |   |   | X |
| shipToPostCode.byteSize | int |   |   | X |
| shipToCounty | string |   |   | X |
| shipToCounty.id | guid | X | X |   |
| shipToCounty.fileName | string |   |   | X |
| shipToCounty.byteSize | int |   |   | X |
| shipToCountryRegionCode | string |   |   | X |
| shipToCountryRegionCode.id | guid | X | X |   |
| shipToCountryRegionCode.fileName | string |   |   | X |
| shipToCountryRegionCode.byteSize | int |   |   | X |
| balAccountType | string |   |   | X |
| balAccountType.id | guid | X | X |   |
| balAccountType.fileName | string |   |   | X |
| balAccountType.byteSize | int |   |   | X |
| exitPoint | string |   |   | X |
| exitPoint.id | guid | X | X |   |
| exitPoint.fileName | string |   |   | X |
| exitPoint.byteSize | int |   |   | X |
| correction | bool |   |   | X |
| correction.id | guid | X | X |   |
| correction.fileName | string |   |   | X |
| correction.byteSize | int |   |   | X |
| documentDate | date |   |   | X |
| documentDate.id | guid | X | X |   |
| documentDate.fileName | string |   |   | X |
| documentDate.byteSize | int |   |   | X |
| externalDocumentNumber | string |   |   | X |
| externalDocumentNumber.id | guid | X | X |   |
| externalDocumentNumber.fileName | string |   |   | X |
| externalDocumentNumber.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| packageTrackingNumber | string |   |   | X |
| packageTrackingNumber.id | guid | X | X |   |
| packageTrackingNumber.fileName | string |   |   | X |
| packageTrackingNumber.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| postingNumberSeries | string |   |   | X |
| postingNumberSeries.id | guid | X | X |   |
| postingNumberSeries.fileName | string |   |   | X |
| postingNumberSeries.byteSize | int |   |   | X |
| shippingNumberSeries | string |   |   | X |
| shippingNumberSeries.id | guid | X | X |   |
| shippingNumberSeries.fileName | string |   |   | X |
| shippingNumberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| appliesToId | string |   |   | X |
| appliesToId.id | guid | X | X |   |
| appliesToId.fileName | string |   |   | X |
| appliesToId.byteSize | int |   |   | X |
| vatBaseDiscountPercent | float |   |   | X |
| vatBaseDiscountPercent.id | guid | X | X |   |
| vatBaseDiscountPercent.fileName | string |   |   | X |
| vatBaseDiscountPercent.byteSize | int |   |   | X |
| status | string |   |   | X |
| status.id | guid | X | X |   |
| status.fileName | string |   |   | X |
| status.byteSize | int |   |   | X |
| invoiceDiscountCalculation | string |   |   | X |
| invoiceDiscountCalculation.id | guid | X | X |   |
| invoiceDiscountCalculation.fileName | string |   |   | X |
| invoiceDiscountCalculation.byteSize | int |   |   | X |
| invoiceDiscountValue | float |   |   | X |
| invoiceDiscountValue.id | guid | X | X |   |
| invoiceDiscountValue.fileName | string |   |   | X |
| invoiceDiscountValue.byteSize | int |   |   | X |
| sendIcDocument | bool |   |   | X |
| sendIcDocument.id | guid | X | X |   |
| sendIcDocument.fileName | string |   |   | X |
| sendIcDocument.byteSize | int |   |   | X |
| icStatus | string |   |   | X |
| icStatus.id | guid | X | X |   |
| icStatus.fileName | string |   |   | X |
| icStatus.byteSize | int |   |   | X |
| sellToIcPartnerCode | string |   |   | X |
| sellToIcPartnerCode.id | guid | X | X |   |
| sellToIcPartnerCode.fileName | string |   |   | X |
| sellToIcPartnerCode.byteSize | int |   |   | X |
| billToIcPartnerCode | string |   |   | X |
| billToIcPartnerCode.id | guid | X | X |   |
| billToIcPartnerCode.fileName | string |   |   | X |
| billToIcPartnerCode.byteSize | int |   |   | X |
| icDirection | string |   |   | X |
| icDirection.id | guid | X | X |   |
| icDirection.fileName | string |   |   | X |
| icDirection.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepaymentNumberSeries | string |   |   | X |
| prepaymentNumberSeries.id | guid | X | X |   |
| prepaymentNumberSeries.fileName | string |   |   | X |
| prepaymentNumberSeries.byteSize | int |   |   | X |
| compressPrepayment | bool |   |   | X |
| compressPrepayment.id | guid | X | X |   |
| compressPrepayment.fileName | string |   |   | X |
| compressPrepayment.byteSize | int |   |   | X |
| prepaymentDueDate | date |   |   | X |
| prepaymentDueDate.id | guid | X | X |   |
| prepaymentDueDate.fileName | string |   |   | X |
| prepaymentDueDate.byteSize | int |   |   | X |
| prepmtCrMemoNumberSeries | string |   |   | X |
| prepmtCrMemoNumberSeries.id | guid | X | X |   |
| prepmtCrMemoNumberSeries.fileName | string |   |   | X |
| prepmtCrMemoNumberSeries.byteSize | int |   |   | X |
| prepmtPostingDescription | string |   |   | X |
| prepmtPostingDescription.id | guid | X | X |   |
| prepmtPostingDescription.fileName | string |   |   | X |
| prepmtPostingDescription.byteSize | int |   |   | X |
| prepmtPmtDiscountDate | date |   |   | X |
| prepmtPmtDiscountDate.id | guid | X | X |   |
| prepmtPmtDiscountDate.fileName | string |   |   | X |
| prepmtPmtDiscountDate.byteSize | int |   |   | X |
| prepmtPaymentTermsCode | string |   |   | X |
| prepmtPaymentTermsCode.id | guid | X | X |   |
| prepmtPaymentTermsCode.fileName | string |   |   | X |
| prepmtPaymentTermsCode.byteSize | int |   |   | X |
| prepmtPaymentDiscountPercent | float |   |   | X |
| prepmtPaymentDiscountPercent.id | guid | X | X |   |
| prepmtPaymentDiscountPercent.fileName | string |   |   | X |
| prepmtPaymentDiscountPercent.byteSize | int |   |   | X |
| quoteNumber | string |   |   | X |
| quoteNumber.id | guid | X | X |   |
| quoteNumber.fileName | string |   |   | X |
| quoteNumber.byteSize | int |   |   | X |
| quoteValidUntilDate | date |   |   | X |
| quoteValidUntilDate.id | guid | X | X |   |
| quoteValidUntilDate.fileName | string |   |   | X |
| quoteValidUntilDate.byteSize | int |   |   | X |
| quoteSentToCustomer | date |   |   | X |
| quoteSentToCustomer.id | guid | X | X |   |
| quoteSentToCustomer.fileName | string |   |   | X |
| quoteSentToCustomer.byteSize | int |   |   | X |
| quoteAccepted | bool |   |   | X |
| quoteAccepted.id | guid | X | X |   |
| quoteAccepted.fileName | string |   |   | X |
| quoteAccepted.byteSize | int |   |   | X |
| quoteAcceptedDate | date |   |   | X |
| quoteAcceptedDate.id | guid | X | X |   |
| quoteAcceptedDate.fileName | string |   |   | X |
| quoteAcceptedDate.byteSize | int |   |   | X |
| jobQueueStatus | string |   |   | X |
| jobQueueStatus.id | guid | X | X |   |
| jobQueueStatus.fileName | string |   |   | X |
| jobQueueStatus.byteSize | int |   |   | X |
| jobQueueEntryId | guid |   |   | X |
| jobQueueEntryId.id | guid | X | X |   |
| jobQueueEntryId.fileName | string |   |   | X |
| jobQueueEntryId.byteSize | int |   |   | X |
| incomingDocumentEntryNumber | int |   |   | X |
| incomingDocumentEntryNumber.id | guid | X | X |   |
| incomingDocumentEntryNumber.fileName | string |   |   | X |
| incomingDocumentEntryNumber.byteSize | int |   |   | X |
| workDescription | string |   |   | X |
| workDescription.id | guid | X | X |   |
| workDescription.fileName | string |   |   | X |
| workDescription.byteSize | int |   |   | X |
| amountShippedNotInvoicedInclVat | float |   |   | X |
| amountShippedNotInvoicedInclVat.id | guid | X | X |   |
| amountShippedNotInvoicedInclVat.fileName | string |   |   | X |
| amountShippedNotInvoicedInclVat.byteSize | int |   |   | X |
| amountShippedNotInvoiced | float |   |   | X |
| amountShippedNotInvoiced.id | guid | X | X |   |
| amountShippedNotInvoiced.fileName | string |   |   | X |
| amountShippedNotInvoiced.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| paymentServiceSetId | int |   |   | X |
| paymentServiceSetId.id | guid | X | X |   |
| paymentServiceSetId.fileName | string |   |   | X |
| paymentServiceSetId.byteSize | int |   |   | X |
| directDebitMandateId | string |   |   | X |
| directDebitMandateId.id | guid | X | X |   |
| directDebitMandateId.fileName | string |   |   | X |
| directDebitMandateId.byteSize | int |   |   | X |
| invoiceDiscountAmount | float |   |   | X |
| invoiceDiscountAmount.id | guid | X | X |   |
| invoiceDiscountAmount.fileName | string |   |   | X |
| invoiceDiscountAmount.byteSize | int |   |   | X |
| numberOfArchivedVersions | int |   |   | X |
| numberOfArchivedVersions.id | guid | X | X |   |
| numberOfArchivedVersions.fileName | string |   |   | X |
| numberOfArchivedVersions.byteSize | int |   |   | X |
| docNumberOccurrence | int |   |   | X |
| docNumberOccurrence.id | guid | X | X |   |
| docNumberOccurrence.fileName | string |   |   | X |
| docNumberOccurrence.byteSize | int |   |   | X |
| campaignNumber | string |   |   | X |
| campaignNumber.id | guid | X | X |   |
| campaignNumber.fileName | string |   |   | X |
| campaignNumber.byteSize | int |   |   | X |
| sellToCustomerTemplateCode | string |   |   | X |
| sellToCustomerTemplateCode.id | guid | X | X |   |
| sellToCustomerTemplateCode.fileName | string |   |   | X |
| sellToCustomerTemplateCode.byteSize | int |   |   | X |
| sellToContactNumber | string |   |   | X |
| sellToContactNumber.id | guid | X | X |   |
| sellToContactNumber.fileName | string |   |   | X |
| sellToContactNumber.byteSize | int |   |   | X |
| billToContactNumber | string |   |   | X |
| billToContactNumber.id | guid | X | X |   |
| billToContactNumber.fileName | string |   |   | X |
| billToContactNumber.byteSize | int |   |   | X |
| billToCustomerTemplateCode | string |   |   | X |
| billToCustomerTemplateCode.id | guid | X | X |   |
| billToCustomerTemplateCode.fileName | string |   |   | X |
| billToCustomerTemplateCode.byteSize | int |   |   | X |
| opportunityNumber | string |   |   | X |
| opportunityNumber.id | guid | X | X |   |
| opportunityNumber.fileName | string |   |   | X |
| opportunityNumber.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| shippingAdvice | string |   |   | X |
| shippingAdvice.id | guid | X | X |   |
| shippingAdvice.fileName | string |   |   | X |
| shippingAdvice.byteSize | int |   |   | X |
| shippedNotInvoiced | bool |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| completelyShipped | bool |   |   | X |
| completelyShipped.id | guid | X | X |   |
| completelyShipped.fileName | string |   |   | X |
| completelyShipped.byteSize | int |   |   | X |
| postingFromWhseRef | int |   |   | X |
| postingFromWhseRef.id | guid | X | X |   |
| postingFromWhseRef.fileName | string |   |   | X |
| postingFromWhseRef.byteSize | int |   |   | X |
| locationFilter | string |   |   | X |
| locationFilter.id | guid | X | X |   |
| locationFilter.fileName | string |   |   | X |
| locationFilter.byteSize | int |   |   | X |
| shipped | bool |   |   | X |
| shipped.id | guid | X | X |   |
| shipped.fileName | string |   |   | X |
| shipped.byteSize | int |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| requestedDeliveryDate.id | guid | X | X |   |
| requestedDeliveryDate.fileName | string |   |   | X |
| requestedDeliveryDate.byteSize | int |   |   | X |
| promisedDeliveryDate | date |   |   | X |
| promisedDeliveryDate.id | guid | X | X |   |
| promisedDeliveryDate.fileName | string |   |   | X |
| promisedDeliveryDate.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| outboundWhseHandlingTime | string |   |   | X |
| outboundWhseHandlingTime.id | guid | X | X |   |
| outboundWhseHandlingTime.fileName | string |   |   | X |
| outboundWhseHandlingTime.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| lateOrderShipping | bool |   |   | X |
| lateOrderShipping.id | guid | X | X |   |
| lateOrderShipping.fileName | string |   |   | X |
| lateOrderShipping.byteSize | int |   |   | X |
| receive | bool |   |   | X |
| receive.id | guid | X | X |   |
| receive.fileName | string |   |   | X |
| receive.byteSize | int |   |   | X |
| returnReceiptNumber | string |   |   | X |
| returnReceiptNumber.id | guid | X | X |   |
| returnReceiptNumber.fileName | string |   |   | X |
| returnReceiptNumber.byteSize | int |   |   | X |
| returnReceiptNumberSeries | string |   |   | X |
| returnReceiptNumberSeries.id | guid | X | X |   |
| returnReceiptNumberSeries.fileName | string |   |   | X |
| returnReceiptNumberSeries.byteSize | int |   |   | X |
| lastReturnReceiptNumber | string |   |   | X |
| lastReturnReceiptNumber.id | guid | X | X |   |
| lastReturnReceiptNumber.fileName | string |   |   | X |
| lastReturnReceiptNumber.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| getShipmentUsed | bool |   |   | X |
| getShipmentUsed.id | guid | X | X |   |
| getShipmentUsed.fileName | string |   |   | X |
| getShipmentUsed.byteSize | int |   |   | X |
| assignedUserId | string |   |   | X |
| assignedUserId.id | guid | X | X |   |
| assignedUserId.fileName | string |   |   | X |
| assignedUserId.byteSize | int |   |   | X |
| dateFilter | string |   |   | X |
| dateFilter.id | guid | X | X |   |
| dateFilter.fileName | string |   |   | X |
| dateFilter.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesDocumentsworkflowSalesDocumentLines | [SalesDocumentsworkflowSalesDocumentLines[]](#salesdocumentsworkflowsalesdocumentlines) | Yes |
# SalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| shipmentDate | date |   |   | X |
| shipmentDate.id | guid | X | X |   |
| shipmentDate.fileName | string |   |   | X |
| shipmentDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToShip | float |   |   | X |
| qtyToShip.id | guid | X | X |   |
| qtyToShip.fileName | string |   |   | X |
| qtyToShip.byteSize | int |   |   | X |
| unitPrice | float |   |   | X |
| unitPrice.id | guid | X | X |   |
| unitPrice.fileName | string |   |   | X |
| unitPrice.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| workTypeCode | string |   |   | X |
| workTypeCode.id | guid | X | X |   |
| workTypeCode.fileName | string |   |   | X |
| workTypeCode.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyShippedNotInvoiced | float |   |   | X |
| qtyShippedNotInvoiced.id | guid | X | X |   |
| qtyShippedNotInvoiced.fileName | string |   |   | X |
| qtyShippedNotInvoiced.byteSize | int |   |   | X |
| shippedNotInvoiced | float |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| quantityShipped | float |   |   | X |
| quantityShipped.id | guid | X | X |   |
| quantityShipped.fileName | string |   |   | X |
| quantityShipped.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| shipmentNumber | string |   |   | X |
| shipmentNumber.id | guid | X | X |   |
| shipmentNumber.fileName | string |   |   | X |
| shipmentNumber.byteSize | int |   |   | X |
| shipmentLineNumber | int |   |   | X |
| shipmentLineNumber.id | guid | X | X |   |
| shipmentLineNumber.fileName | string |   |   | X |
| shipmentLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| purchaseOrderNumber | string |   |   | X |
| purchaseOrderNumber.id | guid | X | X |   |
| purchaseOrderNumber.fileName | string |   |   | X |
| purchaseOrderNumber.byteSize | int |   |   | X |
| purchOrderLineNumber | int |   |   | X |
| purchOrderLineNumber.id | guid | X | X |   |
| purchOrderLineNumber.fileName | string |   |   | X |
| purchOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| exitPoint | string |   |   | X |
| exitPoint.id | guid | X | X |   |
| exitPoint.fileName | string |   |   | X |
| exitPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxCategory | string |   |   | X |
| taxCategory.id | guid | X | X |   |
| taxCategory.fileName | string |   |   | X |
| taxCategory.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| vatClauseCode | string |   |   | X |
| vatClauseCode.id | guid | X | X |   |
| vatClauseCode.fileName | string |   |   | X |
| vatClauseCode.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| shippedNotInvoicedLcy | float |   |   | X |
| shippedNotInvoicedLcy.id | guid | X | X |   |
| shippedNotInvoicedLcy.fileName | string |   |   | X |
| shippedNotInvoicedLcy.byteSize | int |   |   | X |
| shippedNotInvLcyNoVat | float |   |   | X |
| shippedNotInvLcyNoVat.id | guid | X | X |   |
| shippedNotInvLcyNoVat.fileName | string |   |   | X |
| shippedNotInvLcyNoVat.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| qtyToAssembleToOrder | float |   |   | X |
| qtyToAssembleToOrder.id | guid | X | X |   |
| qtyToAssembleToOrder.fileName | string |   |   | X |
| qtyToAssembleToOrder.byteSize | int |   |   | X |
| qtyToAsmToOrderBase | float |   |   | X |
| qtyToAsmToOrderBase.id | guid | X | X |   |
| qtyToAsmToOrderBase.fileName | string |   |   | X |
| qtyToAsmToOrderBase.byteSize | int |   |   | X |
| atoWhseOutstandingQty | float |   |   | X |
| atoWhseOutstandingQty.id | guid | X | X |   |
| atoWhseOutstandingQty.fileName | string |   |   | X |
| atoWhseOutstandingQty.byteSize | int |   |   | X |
| atoWhseOutstdQtyBase | float |   |   | X |
| atoWhseOutstdQtyBase.id | guid | X | X |   |
| atoWhseOutstdQtyBase.fileName | string |   |   | X |
| atoWhseOutstdQtyBase.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobContractEntryNumber | int |   |   | X |
| jobContractEntryNumber.id | guid | X | X |   |
| jobContractEntryNumber.fileName | string |   |   | X |
| jobContractEntryNumber.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| planned | bool |   |   | X |
| planned.id | guid | X | X |   |
| planned.fileName | string |   |   | X |
| planned.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToShipBase | float |   |   | X |
| qtyToShipBase.id | guid | X | X |   |
| qtyToShipBase.fileName | string |   |   | X |
| qtyToShipBase.byteSize | int |   |   | X |
| qtyShippedNotInvdBase | float |   |   | X |
| qtyShippedNotInvdBase.id | guid | X | X |   |
| qtyShippedNotInvdBase.fileName | string |   |   | X |
| qtyShippedNotInvdBase.byteSize | int |   |   | X |
| qtyShippedBase | float |   |   | X |
| qtyShippedBase.id | guid | X | X |   |
| qtyShippedBase.fileName | string |   |   | X |
| qtyShippedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| outOfStockSubstitution | bool |   |   | X |
| outOfStockSubstitution.id | guid | X | X |   |
| outOfStockSubstitution.fileName | string |   |   | X |
| outOfStockSubstitution.byteSize | int |   |   | X |
| substitutionAvailable | bool |   |   | X |
| substitutionAvailable.id | guid | X | X |   |
| substitutionAvailable.fileName | string |   |   | X |
| substitutionAvailable.byteSize | int |   |   | X |
| originallyOrderedNumber | string |   |   | X |
| originallyOrderedNumber.id | guid | X | X |   |
| originallyOrderedNumber.fileName | string |   |   | X |
| originallyOrderedNumber.byteSize | int |   |   | X |
| originallyOrderedVarCode | string |   |   | X |
| originallyOrderedVarCode.id | guid | X | X |   |
| originallyOrderedVarCode.fileName | string |   |   | X |
| originallyOrderedVarCode.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderPurchaseNumber | string |   |   | X |
| specialOrderPurchaseNumber.id | guid | X | X |   |
| specialOrderPurchaseNumber.fileName | string |   |   | X |
| specialOrderPurchaseNumber.byteSize | int |   |   | X |
| specialOrderPurchLineNumber | int |   |   | X |
| specialOrderPurchLineNumber.id | guid | X | X |   |
| specialOrderPurchLineNumber.fileName | string |   |   | X |
| specialOrderPurchLineNumber.byteSize | int |   |   | X |
| whseOutstandingQty | float |   |   | X |
| whseOutstandingQty.id | guid | X | X |   |
| whseOutstandingQty.fileName | string |   |   | X |
| whseOutstandingQty.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyShipped | bool |   |   | X |
| completelyShipped.id | guid | X | X |   |
| completelyShipped.fileName | string |   |   | X |
| completelyShipped.byteSize | int |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| requestedDeliveryDate.id | guid | X | X |   |
| requestedDeliveryDate.fileName | string |   |   | X |
| requestedDeliveryDate.byteSize | int |   |   | X |
| promisedDeliveryDate | date |   |   | X |
| promisedDeliveryDate.id | guid | X | X |   |
| promisedDeliveryDate.fileName | string |   |   | X |
| promisedDeliveryDate.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| outboundWhseHandlingTime | string |   |   | X |
| outboundWhseHandlingTime.id | guid | X | X |   |
| outboundWhseHandlingTime.fileName | string |   |   | X |
| outboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedDeliveryDate | date |   |   | X |
| plannedDeliveryDate.id | guid | X | X |   |
| plannedDeliveryDate.fileName | string |   |   | X |
| plannedDeliveryDate.byteSize | int |   |   | X |
| plannedShipmentDate | date |   |   | X |
| plannedShipmentDate.id | guid | X | X |   |
| plannedShipmentDate.fileName | string |   |   | X |
| plannedShipmentDate.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToReceive | float |   |   | X |
| returnQtyToReceive.id | guid | X | X |   |
| returnQtyToReceive.fileName | string |   |   | X |
| returnQtyToReceive.byteSize | int |   |   | X |
| returnQtyToReceiveBase | float |   |   | X |
| returnQtyToReceiveBase.id | guid | X | X |   |
| returnQtyToReceiveBase.fileName | string |   |   | X |
| returnQtyToReceiveBase.byteSize | int |   |   | X |
| returnQtyRcdNotInvd | float |   |   | X |
| returnQtyRcdNotInvd.id | guid | X | X |   |
| returnQtyRcdNotInvd.fileName | string |   |   | X |
| returnQtyRcdNotInvd.byteSize | int |   |   | X |
| retQtyRcdNotInvdBase | float |   |   | X |
| retQtyRcdNotInvdBase.id | guid | X | X |   |
| retQtyRcdNotInvdBase.fileName | string |   |   | X |
| retQtyRcdNotInvdBase.byteSize | int |   |   | X |
| returnRcdNotInvd | float |   |   | X |
| returnRcdNotInvd.id | guid | X | X |   |
| returnRcdNotInvd.fileName | string |   |   | X |
| returnRcdNotInvd.byteSize | int |   |   | X |
| returnRcdNotInvdLcy | float |   |   | X |
| returnRcdNotInvdLcy.id | guid | X | X |   |
| returnRcdNotInvdLcy.fileName | string |   |   | X |
| returnRcdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyReceived | float |   |   | X |
| returnQtyReceived.id | guid | X | X |   |
| returnQtyReceived.fileName | string |   |   | X |
| returnQtyReceived.byteSize | int |   |   | X |
| returnQtyReceivedBase | float |   |   | X |
| returnQtyReceivedBase.id | guid | X | X |   |
| returnQtyReceivedBase.fileName | string |   |   | X |
| returnQtyReceivedBase.byteSize | int |   |   | X |
| applFromItemEntry | int |   |   | X |
| applFromItemEntry.id | guid | X | X |   |
| applFromItemEntry.fileName | string |   |   | X |
| applFromItemEntry.byteSize | int |   |   | X |
| bomItemNumber | string |   |   | X |
| bomItemNumber.id | guid | X | X |   |
| bomItemNumber.fileName | string |   |   | X |
| bomItemNumber.byteSize | int |   |   | X |
| returnReceiptNumber | string |   |   | X |
| returnReceiptNumber.id | guid | X | X |   |
| returnReceiptNumber.fileName | string |   |   | X |
| returnReceiptNumber.byteSize | int |   |   | X |
| returnReceiptLineNumber | int |   |   | X |
| returnReceiptLineNumber.id | guid | X | X |   |
| returnReceiptLineNumber.fileName | string |   |   | X |
| returnReceiptLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| priceDescription | string |   |   | X |
| priceDescription.id | guid | X | X |   |
| priceDescription.fileName | string |   |   | X |
| priceDescription.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowCustomers
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| name | string |   |   | X |
| name.id | guid | X | X |   |
| name.fileName | string |   |   | X |
| name.byteSize | int |   |   | X |
| searchName | string |   |   | X |
| searchName.id | guid | X | X |   |
| searchName.fileName | string |   |   | X |
| searchName.byteSize | int |   |   | X |
| name2 | string |   |   | X |
| name2.id | guid | X | X |   |
| name2.fileName | string |   |   | X |
| name2.byteSize | int |   |   | X |
| address | string |   |   | X |
| address.id | guid | X | X |   |
| address.fileName | string |   |   | X |
| address.byteSize | int |   |   | X |
| address2 | string |   |   | X |
| address2.id | guid | X | X |   |
| address2.fileName | string |   |   | X |
| address2.byteSize | int |   |   | X |
| city | string |   |   | X |
| city.id | guid | X | X |   |
| city.fileName | string |   |   | X |
| city.byteSize | int |   |   | X |
| contact | string |   |   | X |
| contact.id | guid | X | X |   |
| contact.fileName | string |   |   | X |
| contact.byteSize | int |   |   | X |
| phoneNumber | string |   |   | X |
| phoneNumber.id | guid | X | X |   |
| phoneNumber.fileName | string |   |   | X |
| phoneNumber.byteSize | int |   |   | X |
| telexNumber | string |   |   | X |
| telexNumber.id | guid | X | X |   |
| telexNumber.fileName | string |   |   | X |
| telexNumber.byteSize | int |   |   | X |
| documentSendingProfile | string |   |   | X |
| documentSendingProfile.id | guid | X | X |   |
| documentSendingProfile.fileName | string |   |   | X |
| documentSendingProfile.byteSize | int |   |   | X |
| ourAccountNumber | string |   |   | X |
| ourAccountNumber.id | guid | X | X |   |
| ourAccountNumber.fileName | string |   |   | X |
| ourAccountNumber.byteSize | int |   |   | X |
| territoryCode | string |   |   | X |
| territoryCode.id | guid | X | X |   |
| territoryCode.fileName | string |   |   | X |
| territoryCode.byteSize | int |   |   | X |
| globalDimension1Code | string |   |   | X |
| globalDimension1Code.id | guid | X | X |   |
| globalDimension1Code.fileName | string |   |   | X |
| globalDimension1Code.byteSize | int |   |   | X |
| globalDimension2Code | string |   |   | X |
| globalDimension2Code.id | guid | X | X |   |
| globalDimension2Code.fileName | string |   |   | X |
| globalDimension2Code.byteSize | int |   |   | X |
| chainName | string |   |   | X |
| chainName.id | guid | X | X |   |
| chainName.fileName | string |   |   | X |
| chainName.byteSize | int |   |   | X |
| budgetedAmount | float |   |   | X |
| budgetedAmount.id | guid | X | X |   |
| budgetedAmount.fileName | string |   |   | X |
| budgetedAmount.byteSize | int |   |   | X |
| creditLimitLcy | float |   |   | X |
| creditLimitLcy.id | guid | X | X |   |
| creditLimitLcy.fileName | string |   |   | X |
| creditLimitLcy.byteSize | int |   |   | X |
| customerPostingGroup | string |   |   | X |
| customerPostingGroup.id | guid | X | X |   |
| customerPostingGroup.fileName | string |   |   | X |
| customerPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| languageCode | string |   |   | X |
| languageCode.id | guid | X | X |   |
| languageCode.fileName | string |   |   | X |
| languageCode.byteSize | int |   |   | X |
| statisticsGroup | int |   |   | X |
| statisticsGroup.id | guid | X | X |   |
| statisticsGroup.fileName | string |   |   | X |
| statisticsGroup.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| finChargeTermsCode | string |   |   | X |
| finChargeTermsCode.id | guid | X | X |   |
| finChargeTermsCode.fileName | string |   |   | X |
| finChargeTermsCode.byteSize | int |   |   | X |
| salespersonCode | string |   |   | X |
| salespersonCode.id | guid | X | X |   |
| salespersonCode.fileName | string |   |   | X |
| salespersonCode.byteSize | int |   |   | X |
| shipmentMethodCode | string |   |   | X |
| shipmentMethodCode.id | guid | X | X |   |
| shipmentMethodCode.fileName | string |   |   | X |
| shipmentMethodCode.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| placeOfExport | string |   |   | X |
| placeOfExport.id | guid | X | X |   |
| placeOfExport.fileName | string |   |   | X |
| placeOfExport.byteSize | int |   |   | X |
| invoiceDiscCode | string |   |   | X |
| invoiceDiscCode.id | guid | X | X |   |
| invoiceDiscCode.fileName | string |   |   | X |
| invoiceDiscCode.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| countryRegionCode | string |   |   | X |
| countryRegionCode.id | guid | X | X |   |
| countryRegionCode.fileName | string |   |   | X |
| countryRegionCode.byteSize | int |   |   | X |
| collectionMethod | string |   |   | X |
| collectionMethod.id | guid | X | X |   |
| collectionMethod.fileName | string |   |   | X |
| collectionMethod.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| blocked | string |   |   | X |
| blocked.id | guid | X | X |   |
| blocked.fileName | string |   |   | X |
| blocked.byteSize | int |   |   | X |
| invoiceCopies | int |   |   | X |
| invoiceCopies.id | guid | X | X |   |
| invoiceCopies.fileName | string |   |   | X |
| invoiceCopies.byteSize | int |   |   | X |
| lastStatementNumber | int |   |   | X |
| lastStatementNumber.id | guid | X | X |   |
| lastStatementNumber.fileName | string |   |   | X |
| lastStatementNumber.byteSize | int |   |   | X |
| printStatements | bool |   |   | X |
| printStatements.id | guid | X | X |   |
| printStatements.fileName | string |   |   | X |
| printStatements.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| priority | int |   |   | X |
| priority.id | guid | X | X |   |
| priority.fileName | string |   |   | X |
| priority.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |
| lastDateModified | date |   |   | X |
| lastDateModified.id | guid | X | X |   |
| lastDateModified.fileName | string |   |   | X |
| lastDateModified.byteSize | int |   |   | X |
| dateFilter | string |   |   | X |
| dateFilter.id | guid | X | X |   |
| dateFilter.fileName | string |   |   | X |
| dateFilter.byteSize | int |   |   | X |
| globalDimension1Filter | string |   |   | X |
| globalDimension1Filter.id | guid | X | X |   |
| globalDimension1Filter.fileName | string |   |   | X |
| globalDimension1Filter.byteSize | int |   |   | X |
| globalDimension2Filter | string |   |   | X |
| globalDimension2Filter.id | guid | X | X |   |
| globalDimension2Filter.fileName | string |   |   | X |
| globalDimension2Filter.byteSize | int |   |   | X |
| balance | float |   |   | X |
| balance.id | guid | X | X |   |
| balance.fileName | string |   |   | X |
| balance.byteSize | int |   |   | X |
| balanceLcy | float |   |   | X |
| balanceLcy.id | guid | X | X |   |
| balanceLcy.fileName | string |   |   | X |
| balanceLcy.byteSize | int |   |   | X |
| netChange | float |   |   | X |
| netChange.id | guid | X | X |   |
| netChange.fileName | string |   |   | X |
| netChange.byteSize | int |   |   | X |
| netChangeLcy | float |   |   | X |
| netChangeLcy.id | guid | X | X |   |
| netChangeLcy.fileName | string |   |   | X |
| netChangeLcy.byteSize | int |   |   | X |
| salesLcy | float |   |   | X |
| salesLcy.id | guid | X | X |   |
| salesLcy.fileName | string |   |   | X |
| salesLcy.byteSize | int |   |   | X |
| profitLcy | float |   |   | X |
| profitLcy.id | guid | X | X |   |
| profitLcy.fileName | string |   |   | X |
| profitLcy.byteSize | int |   |   | X |
| invDiscountsLcy | float |   |   | X |
| invDiscountsLcy.id | guid | X | X |   |
| invDiscountsLcy.fileName | string |   |   | X |
| invDiscountsLcy.byteSize | int |   |   | X |
| pmtDiscountsLcy | float |   |   | X |
| pmtDiscountsLcy.id | guid | X | X |   |
| pmtDiscountsLcy.fileName | string |   |   | X |
| pmtDiscountsLcy.byteSize | int |   |   | X |
| balanceDue | float |   |   | X |
| balanceDue.id | guid | X | X |   |
| balanceDue.fileName | string |   |   | X |
| balanceDue.byteSize | int |   |   | X |
| balanceDueLcy | float |   |   | X |
| balanceDueLcy.id | guid | X | X |   |
| balanceDueLcy.fileName | string |   |   | X |
| balanceDueLcy.byteSize | int |   |   | X |
| payments | float |   |   | X |
| payments.id | guid | X | X |   |
| payments.fileName | string |   |   | X |
| payments.byteSize | int |   |   | X |
| invoiceAmounts | float |   |   | X |
| invoiceAmounts.id | guid | X | X |   |
| invoiceAmounts.fileName | string |   |   | X |
| invoiceAmounts.byteSize | int |   |   | X |
| crMemoAmounts | float |   |   | X |
| crMemoAmounts.id | guid | X | X |   |
| crMemoAmounts.fileName | string |   |   | X |
| crMemoAmounts.byteSize | int |   |   | X |
| financeChargeMemoAmounts | float |   |   | X |
| financeChargeMemoAmounts.id | guid | X | X |   |
| financeChargeMemoAmounts.fileName | string |   |   | X |
| financeChargeMemoAmounts.byteSize | int |   |   | X |
| paymentsLcy | float |   |   | X |
| paymentsLcy.id | guid | X | X |   |
| paymentsLcy.fileName | string |   |   | X |
| paymentsLcy.byteSize | int |   |   | X |
| invAmountsLcy | float |   |   | X |
| invAmountsLcy.id | guid | X | X |   |
| invAmountsLcy.fileName | string |   |   | X |
| invAmountsLcy.byteSize | int |   |   | X |
| crMemoAmountsLcy | float |   |   | X |
| crMemoAmountsLcy.id | guid | X | X |   |
| crMemoAmountsLcy.fileName | string |   |   | X |
| crMemoAmountsLcy.byteSize | int |   |   | X |
| finChargeMemoAmountsLcy | float |   |   | X |
| finChargeMemoAmountsLcy.id | guid | X | X |   |
| finChargeMemoAmountsLcy.fileName | string |   |   | X |
| finChargeMemoAmountsLcy.byteSize | int |   |   | X |
| outstandingOrders | float |   |   | X |
| outstandingOrders.id | guid | X | X |   |
| outstandingOrders.fileName | string |   |   | X |
| outstandingOrders.byteSize | int |   |   | X |
| shippedNotInvoiced | float |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| applicationMethod | string |   |   | X |
| applicationMethod.id | guid | X | X |   |
| applicationMethod.fileName | string |   |   | X |
| applicationMethod.byteSize | int |   |   | X |
| pricesIncludingVat | bool |   |   | X |
| pricesIncludingVat.id | guid | X | X |   |
| pricesIncludingVat.fileName | string |   |   | X |
| pricesIncludingVat.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| faxNumber | string |   |   | X |
| faxNumber.id | guid | X | X |   |
| faxNumber.fileName | string |   |   | X |
| faxNumber.byteSize | int |   |   | X |
| telexAnswerBack | string |   |   | X |
| telexAnswerBack.id | guid | X | X |   |
| telexAnswerBack.fileName | string |   |   | X |
| telexAnswerBack.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| combineShipments | bool |   |   | X |
| combineShipments.id | guid | X | X |   |
| combineShipments.fileName | string |   |   | X |
| combineShipments.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| gln | string |   |   | X |
| gln.id | guid | X | X |   |
| gln.fileName | string |   |   | X |
| gln.byteSize | int |   |   | X |
| postCode | string |   |   | X |
| postCode.id | guid | X | X |   |
| postCode.fileName | string |   |   | X |
| postCode.byteSize | int |   |   | X |
| county | string |   |   | X |
| county.id | guid | X | X |   |
| county.fileName | string |   |   | X |
| county.byteSize | int |   |   | X |
| debitAmount | float |   |   | X |
| debitAmount.id | guid | X | X |   |
| debitAmount.fileName | string |   |   | X |
| debitAmount.byteSize | int |   |   | X |
| creditAmount | float |   |   | X |
| creditAmount.id | guid | X | X |   |
| creditAmount.fileName | string |   |   | X |
| creditAmount.byteSize | int |   |   | X |
| debitAmountLcy | float |   |   | X |
| debitAmountLcy.id | guid | X | X |   |
| debitAmountLcy.fileName | string |   |   | X |
| debitAmountLcy.byteSize | int |   |   | X |
| creditAmountLcy | float |   |   | X |
| creditAmountLcy.id | guid | X | X |   |
| creditAmountLcy.fileName | string |   |   | X |
| creditAmountLcy.byteSize | int |   |   | X |
| eMail | string |   |   | X |
| eMail.id | guid | X | X |   |
| eMail.fileName | string |   |   | X |
| eMail.byteSize | int |   |   | X |
| homePage | string |   |   | X |
| homePage.id | guid | X | X |   |
| homePage.fileName | string |   |   | X |
| homePage.byteSize | int |   |   | X |
| reminderTermsCode | string |   |   | X |
| reminderTermsCode.id | guid | X | X |   |
| reminderTermsCode.fileName | string |   |   | X |
| reminderTermsCode.byteSize | int |   |   | X |
| reminderAmounts | float |   |   | X |
| reminderAmounts.id | guid | X | X |   |
| reminderAmounts.fileName | string |   |   | X |
| reminderAmounts.byteSize | int |   |   | X |
| reminderAmountsLcy | float |   |   | X |
| reminderAmountsLcy.id | guid | X | X |   |
| reminderAmountsLcy.fileName | string |   |   | X |
| reminderAmountsLcy.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| currencyFilter | string |   |   | X |
| currencyFilter.id | guid | X | X |   |
| currencyFilter.fileName | string |   |   | X |
| currencyFilter.byteSize | int |   |   | X |
| outstandingOrdersLcy | float |   |   | X |
| outstandingOrdersLcy.id | guid | X | X |   |
| outstandingOrdersLcy.fileName | string |   |   | X |
| outstandingOrdersLcy.byteSize | int |   |   | X |
| shippedNotInvoicedLcy | float |   |   | X |
| shippedNotInvoicedLcy.id | guid | X | X |   |
| shippedNotInvoicedLcy.fileName | string |   |   | X |
| shippedNotInvoicedLcy.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| blockPaymentTolerance | bool |   |   | X |
| blockPaymentTolerance.id | guid | X | X |   |
| blockPaymentTolerance.fileName | string |   |   | X |
| blockPaymentTolerance.byteSize | int |   |   | X |
| pmtDiscToleranceLcy | float |   |   | X |
| pmtDiscToleranceLcy.id | guid | X | X |   |
| pmtDiscToleranceLcy.fileName | string |   |   | X |
| pmtDiscToleranceLcy.byteSize | int |   |   | X |
| pmtToleranceLcy | float |   |   | X |
| pmtToleranceLcy.id | guid | X | X |   |
| pmtToleranceLcy.fileName | string |   |   | X |
| pmtToleranceLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| refunds | float |   |   | X |
| refunds.id | guid | X | X |   |
| refunds.fileName | string |   |   | X |
| refunds.byteSize | int |   |   | X |
| refundsLcy | float |   |   | X |
| refundsLcy.id | guid | X | X |   |
| refundsLcy.fileName | string |   |   | X |
| refundsLcy.byteSize | int |   |   | X |
| otherAmounts | float |   |   | X |
| otherAmounts.id | guid | X | X |   |
| otherAmounts.fileName | string |   |   | X |
| otherAmounts.byteSize | int |   |   | X |
| otherAmountsLcy | float |   |   | X |
| otherAmountsLcy.id | guid | X | X |   |
| otherAmountsLcy.fileName | string |   |   | X |
| otherAmountsLcy.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| outstandingInvoicesLcy | float |   |   | X |
| outstandingInvoicesLcy.id | guid | X | X |   |
| outstandingInvoicesLcy.fileName | string |   |   | X |
| outstandingInvoicesLcy.byteSize | int |   |   | X |
| outstandingInvoices | float |   |   | X |
| outstandingInvoices.id | guid | X | X |   |
| outstandingInvoices.fileName | string |   |   | X |
| outstandingInvoices.byteSize | int |   |   | X |
| billToNumberOfArchivedDoc | int |   |   | X |
| billToNumberOfArchivedDoc.id | guid | X | X |   |
| billToNumberOfArchivedDoc.fileName | string |   |   | X |
| billToNumberOfArchivedDoc.byteSize | int |   |   | X |
| sellToNumberOfArchivedDoc | int |   |   | X |
| sellToNumberOfArchivedDoc.id | guid | X | X |   |
| sellToNumberOfArchivedDoc.fileName | string |   |   | X |
| sellToNumberOfArchivedDoc.byteSize | int |   |   | X |
| partnerType | string |   |   | X |
| partnerType.id | guid | X | X |   |
| partnerType.fileName | string |   |   | X |
| partnerType.byteSize | int |   |   | X |
| preferredBankAccountCode | string |   |   | X |
| preferredBankAccountCode.id | guid | X | X |   |
| preferredBankAccountCode.fileName | string |   |   | X |
| preferredBankAccountCode.byteSize | int |   |   | X |
| cashFlowPaymentTermsCode | string |   |   | X |
| cashFlowPaymentTermsCode.id | guid | X | X |   |
| cashFlowPaymentTermsCode.fileName | string |   |   | X |
| cashFlowPaymentTermsCode.byteSize | int |   |   | X |
| primaryContactNumber | string |   |   | X |
| primaryContactNumber.id | guid | X | X |   |
| primaryContactNumber.fileName | string |   |   | X |
| primaryContactNumber.byteSize | int |   |   | X |
| contactType | string |   |   | X |
| contactType.id | guid | X | X |   |
| contactType.fileName | string |   |   | X |
| contactType.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| shippingAdvice | string |   |   | X |
| shippingAdvice.id | guid | X | X |   |
| shippingAdvice.fileName | string |   |   | X |
| shippingAdvice.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| serviceZoneCode | string |   |   | X |
| serviceZoneCode.id | guid | X | X |   |
| serviceZoneCode.fileName | string |   |   | X |
| serviceZoneCode.byteSize | int |   |   | X |
| contractGainLossAmount | float |   |   | X |
| contractGainLossAmount.id | guid | X | X |   |
| contractGainLossAmount.fileName | string |   |   | X |
| contractGainLossAmount.byteSize | int |   |   | X |
| shipToFilter | string |   |   | X |
| shipToFilter.id | guid | X | X |   |
| shipToFilter.fileName | string |   |   | X |
| shipToFilter.byteSize | int |   |   | X |
| outstandingServOrdersLcy | float |   |   | X |
| outstandingServOrdersLcy.id | guid | X | X |   |
| outstandingServOrdersLcy.fileName | string |   |   | X |
| outstandingServOrdersLcy.byteSize | int |   |   | X |
| servShippedNotInvoicedLcy | float |   |   | X |
| servShippedNotInvoicedLcy.id | guid | X | X |   |
| servShippedNotInvoicedLcy.fileName | string |   |   | X |
| servShippedNotInvoicedLcy.byteSize | int |   |   | X |
| outstandingServInvoicesLcy | float |   |   | X |
| outstandingServInvoicesLcy.id | guid | X | X |   |
| outstandingServInvoicesLcy.fileName | string |   |   | X |
| outstandingServInvoicesLcy.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| numberOfQuotes | int |   |   | X |
| numberOfQuotes.id | guid | X | X |   |
| numberOfQuotes.fileName | string |   |   | X |
| numberOfQuotes.byteSize | int |   |   | X |
| numberOfBlanketOrders | int |   |   | X |
| numberOfBlanketOrders.id | guid | X | X |   |
| numberOfBlanketOrders.fileName | string |   |   | X |
| numberOfBlanketOrders.byteSize | int |   |   | X |
| numberOfOrders | int |   |   | X |
| numberOfOrders.id | guid | X | X |   |
| numberOfOrders.fileName | string |   |   | X |
| numberOfOrders.byteSize | int |   |   | X |
| numberOfInvoices | int |   |   | X |
| numberOfInvoices.id | guid | X | X |   |
| numberOfInvoices.fileName | string |   |   | X |
| numberOfInvoices.byteSize | int |   |   | X |
| numberOfReturnOrders | int |   |   | X |
| numberOfReturnOrders.id | guid | X | X |   |
| numberOfReturnOrders.fileName | string |   |   | X |
| numberOfReturnOrders.byteSize | int |   |   | X |
| numberOfCreditMemos | int |   |   | X |
| numberOfCreditMemos.id | guid | X | X |   |
| numberOfCreditMemos.fileName | string |   |   | X |
| numberOfCreditMemos.byteSize | int |   |   | X |
| numberOfPstdShipments | int |   |   | X |
| numberOfPstdShipments.id | guid | X | X |   |
| numberOfPstdShipments.fileName | string |   |   | X |
| numberOfPstdShipments.byteSize | int |   |   | X |
| numberOfPstdInvoices | int |   |   | X |
| numberOfPstdInvoices.id | guid | X | X |   |
| numberOfPstdInvoices.fileName | string |   |   | X |
| numberOfPstdInvoices.byteSize | int |   |   | X |
| numberOfPstdReturnReceipts | int |   |   | X |
| numberOfPstdReturnReceipts.id | guid | X | X |   |
| numberOfPstdReturnReceipts.fileName | string |   |   | X |
| numberOfPstdReturnReceipts.byteSize | int |   |   | X |
| numberOfPstdCreditMemos | int |   |   | X |
| numberOfPstdCreditMemos.id | guid | X | X |   |
| numberOfPstdCreditMemos.fileName | string |   |   | X |
| numberOfPstdCreditMemos.byteSize | int |   |   | X |
| numberOfShipToAddresses | int |   |   | X |
| numberOfShipToAddresses.id | guid | X | X |   |
| numberOfShipToAddresses.fileName | string |   |   | X |
| numberOfShipToAddresses.byteSize | int |   |   | X |
| billToNumberOfQuotes | int |   |   | X |
| billToNumberOfQuotes.id | guid | X | X |   |
| billToNumberOfQuotes.fileName | string |   |   | X |
| billToNumberOfQuotes.byteSize | int |   |   | X |
| billToNumberOfBlanketOrders | int |   |   | X |
| billToNumberOfBlanketOrders.id | guid | X | X |   |
| billToNumberOfBlanketOrders.fileName | string |   |   | X |
| billToNumberOfBlanketOrders.byteSize | int |   |   | X |
| billToNumberOfOrders | int |   |   | X |
| billToNumberOfOrders.id | guid | X | X |   |
| billToNumberOfOrders.fileName | string |   |   | X |
| billToNumberOfOrders.byteSize | int |   |   | X |
| billToNumberOfInvoices | int |   |   | X |
| billToNumberOfInvoices.id | guid | X | X |   |
| billToNumberOfInvoices.fileName | string |   |   | X |
| billToNumberOfInvoices.byteSize | int |   |   | X |
| billToNumberOfReturnOrders | int |   |   | X |
| billToNumberOfReturnOrders.id | guid | X | X |   |
| billToNumberOfReturnOrders.fileName | string |   |   | X |
| billToNumberOfReturnOrders.byteSize | int |   |   | X |
| billToNumberOfCreditMemos | int |   |   | X |
| billToNumberOfCreditMemos.id | guid | X | X |   |
| billToNumberOfCreditMemos.fileName | string |   |   | X |
| billToNumberOfCreditMemos.byteSize | int |   |   | X |
| billToNumberOfPstdShipments | int |   |   | X |
| billToNumberOfPstdShipments.id | guid | X | X |   |
| billToNumberOfPstdShipments.fileName | string |   |   | X |
| billToNumberOfPstdShipments.byteSize | int |   |   | X |
| billToNumberOfPstdInvoices | int |   |   | X |
| billToNumberOfPstdInvoices.id | guid | X | X |   |
| billToNumberOfPstdInvoices.fileName | string |   |   | X |
| billToNumberOfPstdInvoices.byteSize | int |   |   | X |
| billToNumberOfPstdReturnR | int |   |   | X |
| billToNumberOfPstdReturnR.id | guid | X | X |   |
| billToNumberOfPstdReturnR.fileName | string |   |   | X |
| billToNumberOfPstdReturnR.byteSize | int |   |   | X |
| billToNumberOfPstdCrMemos | int |   |   | X |
| billToNumberOfPstdCrMemos.id | guid | X | X |   |
| billToNumberOfPstdCrMemos.fileName | string |   |   | X |
| billToNumberOfPstdCrMemos.byteSize | int |   |   | X |
| baseCalendarCode | string |   |   | X |
| baseCalendarCode.id | guid | X | X |   |
| baseCalendarCode.fileName | string |   |   | X |
| baseCalendarCode.byteSize | int |   |   | X |
| copySellToAddrToQteFrom | string |   |   | X |
| copySellToAddrToQteFrom.id | guid | X | X |   |
| copySellToAddrToQteFrom.fileName | string |   |   | X |
| copySellToAddrToQteFrom.byteSize | int |   |   | X |
| validateEuVatRegNumber | bool |   |   | X |
| validateEuVatRegNumber.id | guid | X | X |   |
| validateEuVatRegNumber.fileName | string |   |   | X |
| validateEuVatRegNumber.byteSize | int |   |   | X |
| currencyId | guid |   |   | X |
| currencyId.id | guid | X | X |   |
| currencyId.fileName | string |   |   | X |
| currencyId.byteSize | int |   |   | X |
| paymentTermsId | guid |   |   | X |
| paymentTermsId.id | guid | X | X |   |
| paymentTermsId.fileName | string |   |   | X |
| paymentTermsId.byteSize | int |   |   | X |
| shipmentMethodId | guid |   |   | X |
| shipmentMethodId.id | guid | X | X |   |
| shipmentMethodId.fileName | string |   |   | X |
| shipmentMethodId.byteSize | int |   |   | X |
| paymentMethodId | guid |   |   | X |
| paymentMethodId.id | guid | X | X |   |
| paymentMethodId.fileName | string |   |   | X |
| paymentMethodId.byteSize | int |   |   | X |
| taxAreaId | guid |   |   | X |
| taxAreaId.id | guid | X | X |   |
| taxAreaId.fileName | string |   |   | X |
| taxAreaId.byteSize | int |   |   | X |
| contactId | guid |   |   | X |
| contactId.id | guid | X | X |   |
| contactId.fileName | string |   |   | X |
| contactId.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowGenJournalBatches
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| journalTemplateName | string |   |   | X |
| journalTemplateName.id | guid | X | X |   |
| journalTemplateName.fileName | string |   |   | X |
| journalTemplateName.byteSize | int |   |   | X |
| name | string |   |   | X |
| name.id | guid | X | X |   |
| name.fileName | string |   |   | X |
| name.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| reasonCode | string |   |   | X |
| reasonCode.id | guid | X | X |   |
| reasonCode.fileName | string |   |   | X |
| reasonCode.byteSize | int |   |   | X |
| balAccountType | string |   |   | X |
| balAccountType.id | guid | X | X |   |
| balAccountType.fileName | string |   |   | X |
| balAccountType.byteSize | int |   |   | X |
| balAccountNumber | string |   |   | X |
| balAccountNumber.id | guid | X | X |   |
| balAccountNumber.fileName | string |   |   | X |
| balAccountNumber.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| postingNumberSeries | string |   |   | X |
| postingNumberSeries.id | guid | X | X |   |
| postingNumberSeries.fileName | string |   |   | X |
| postingNumberSeries.byteSize | int |   |   | X |
| copyVatSetupToJnlLines | bool |   |   | X |
| copyVatSetupToJnlLines.id | guid | X | X |   |
| copyVatSetupToJnlLines.fileName | string |   |   | X |
| copyVatSetupToJnlLines.byteSize | int |   |   | X |
| allowVatDifference | bool |   |   | X |
| allowVatDifference.id | guid | X | X |   |
| allowVatDifference.fileName | string |   |   | X |
| allowVatDifference.byteSize | int |   |   | X |
| allowPaymentExport | bool |   |   | X |
| allowPaymentExport.id | guid | X | X |   |
| allowPaymentExport.fileName | string |   |   | X |
| allowPaymentExport.byteSize | int |   |   | X |
| bankStatementImportFormat | string |   |   | X |
| bankStatementImportFormat.id | guid | X | X |   |
| bankStatementImportFormat.fileName | string |   |   | X |
| bankStatementImportFormat.byteSize | int |   |   | X |
| templateType | string |   |   | X |
| templateType.id | guid | X | X |   |
| templateType.fileName | string |   |   | X |
| templateType.byteSize | int |   |   | X |
| recurring | bool |   |   | X |
| recurring.id | guid | X | X |   |
| recurring.fileName | string |   |   | X |
| recurring.byteSize | int |   |   | X |
| suggestBalancingAmount | bool |   |   | X |
| suggestBalancingAmount.id | guid | X | X |   |
| suggestBalancingAmount.fileName | string |   |   | X |
| suggestBalancingAmount.byteSize | int |   |   | X |
| lastModifiedDatetime | date |   |   | X |
| lastModifiedDatetime.id | guid | X | X |   |
| lastModifiedDatetime.fileName | string |   |   | X |
| lastModifiedDatetime.byteSize | int |   |   | X |

# WorkflowGenJournalLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| journalTemplateName | string |   |   | X |
| journalTemplateName.id | guid | X | X |   |
| journalTemplateName.fileName | string |   |   | X |
| journalTemplateName.byteSize | int |   |   | X |
| journalBatchName | string |   |   | X |
| journalBatchName.id | guid | X | X |   |
| journalBatchName.fileName | string |   |   | X |
| journalBatchName.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| accountType | string |   |   | X |
| accountType.id | guid | X | X |   |
| accountType.fileName | string |   |   | X |
| accountType.byteSize | int |   |   | X |
| accountNumber | string |   |   | X |
| accountNumber.id | guid | X | X |   |
| accountNumber.fileName | string |   |   | X |
| accountNumber.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| balAccountNumber | string |   |   | X |
| balAccountNumber.id | guid | X | X |   |
| balAccountNumber.fileName | string |   |   | X |
| balAccountNumber.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| debitAmount | float |   |   | X |
| debitAmount.id | guid | X | X |   |
| debitAmount.fileName | string |   |   | X |
| debitAmount.byteSize | int |   |   | X |
| creditAmount | float |   |   | X |
| creditAmount.id | guid | X | X |   |
| creditAmount.fileName | string |   |   | X |
| creditAmount.byteSize | int |   |   | X |
| amountLcy | float |   |   | X |
| amountLcy.id | guid | X | X |   |
| amountLcy.fileName | string |   |   | X |
| amountLcy.byteSize | int |   |   | X |
| balanceLcy | float |   |   | X |
| balanceLcy.id | guid | X | X |   |
| balanceLcy.fileName | string |   |   | X |
| balanceLcy.byteSize | int |   |   | X |
| currencyFactor | float |   |   | X |
| currencyFactor.id | guid | X | X |   |
| currencyFactor.fileName | string |   |   | X |
| currencyFactor.byteSize | int |   |   | X |
| salesPurchLcy | float |   |   | X |
| salesPurchLcy.id | guid | X | X |   |
| salesPurchLcy.fileName | string |   |   | X |
| salesPurchLcy.byteSize | int |   |   | X |
| profitLcy | float |   |   | X |
| profitLcy.id | guid | X | X |   |
| profitLcy.fileName | string |   |   | X |
| profitLcy.byteSize | int |   |   | X |
| invDiscountLcy | float |   |   | X |
| invDiscountLcy.id | guid | X | X |   |
| invDiscountLcy.fileName | string |   |   | X |
| invDiscountLcy.byteSize | int |   |   | X |
| billToPayToNumber | string |   |   | X |
| billToPayToNumber.id | guid | X | X |   |
| billToPayToNumber.fileName | string |   |   | X |
| billToPayToNumber.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| salespersPurchCode | string |   |   | X |
| salespersPurchCode.id | guid | X | X |   |
| salespersPurchCode.fileName | string |   |   | X |
| salespersPurchCode.byteSize | int |   |   | X |
| sourceCode | string |   |   | X |
| sourceCode.id | guid | X | X |   |
| sourceCode.fileName | string |   |   | X |
| sourceCode.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| onHold | string |   |   | X |
| onHold.id | guid | X | X |   |
| onHold.fileName | string |   |   | X |
| onHold.byteSize | int |   |   | X |
| appliesToDocType | string |   |   | X |
| appliesToDocType.id | guid | X | X |   |
| appliesToDocType.fileName | string |   |   | X |
| appliesToDocType.byteSize | int |   |   | X |
| appliesToDocNumber | string |   |   | X |
| appliesToDocNumber.id | guid | X | X |   |
| appliesToDocNumber.fileName | string |   |   | X |
| appliesToDocNumber.byteSize | int |   |   | X |
| dueDate | date |   |   | X |
| dueDate.id | guid | X | X |   |
| dueDate.fileName | string |   |   | X |
| dueDate.byteSize | int |   |   | X |
| pmtDiscountDate | date |   |   | X |
| pmtDiscountDate.id | guid | X | X |   |
| pmtDiscountDate.fileName | string |   |   | X |
| pmtDiscountDate.byteSize | int |   |   | X |
| paymentDiscountPercent | float |   |   | X |
| paymentDiscountPercent.id | guid | X | X |   |
| paymentDiscountPercent.fileName | string |   |   | X |
| paymentDiscountPercent.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| vatAmount | float |   |   | X |
| vatAmount.id | guid | X | X |   |
| vatAmount.fileName | string |   |   | X |
| vatAmount.byteSize | int |   |   | X |
| vatPosting | string |   |   | X |
| vatPosting.id | guid | X | X |   |
| vatPosting.fileName | string |   |   | X |
| vatPosting.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| appliesToId | string |   |   | X |
| appliesToId.id | guid | X | X |   |
| appliesToId.fileName | string |   |   | X |
| appliesToId.byteSize | int |   |   | X |
| businessUnitCode | string |   |   | X |
| businessUnitCode.id | guid | X | X |   |
| businessUnitCode.fileName | string |   |   | X |
| businessUnitCode.byteSize | int |   |   | X |
| reasonCode | string |   |   | X |
| reasonCode.id | guid | X | X |   |
| reasonCode.fileName | string |   |   | X |
| reasonCode.byteSize | int |   |   | X |
| recurringMethod | string |   |   | X |
| recurringMethod.id | guid | X | X |   |
| recurringMethod.fileName | string |   |   | X |
| recurringMethod.byteSize | int |   |   | X |
| expirationDate | date |   |   | X |
| expirationDate.id | guid | X | X |   |
| expirationDate.fileName | string |   |   | X |
| expirationDate.byteSize | int |   |   | X |
| recurringFrequency | string |   |   | X |
| recurringFrequency.id | guid | X | X |   |
| recurringFrequency.fileName | string |   |   | X |
| recurringFrequency.byteSize | int |   |   | X |
| allocatedAmtLcy | float |   |   | X |
| allocatedAmtLcy.id | guid | X | X |   |
| allocatedAmtLcy.fileName | string |   |   | X |
| allocatedAmtLcy.byteSize | int |   |   | X |
| genPostingType | string |   |   | X |
| genPostingType.id | guid | X | X |   |
| genPostingType.fileName | string |   |   | X |
| genPostingType.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| eu3PartyTrade | bool |   |   | X |
| eu3PartyTrade.id | guid | X | X |   |
| eu3PartyTrade.fileName | string |   |   | X |
| eu3PartyTrade.byteSize | int |   |   | X |
| allowApplication | bool |   |   | X |
| allowApplication.id | guid | X | X |   |
| allowApplication.fileName | string |   |   | X |
| allowApplication.byteSize | int |   |   | X |
| balAccountType | string |   |   | X |
| balAccountType.id | guid | X | X |   |
| balAccountType.fileName | string |   |   | X |
| balAccountType.byteSize | int |   |   | X |
| balGenPostingType | string |   |   | X |
| balGenPostingType.id | guid | X | X |   |
| balGenPostingType.fileName | string |   |   | X |
| balGenPostingType.byteSize | int |   |   | X |
| balGenBusPostingGroup | string |   |   | X |
| balGenBusPostingGroup.id | guid | X | X |   |
| balGenBusPostingGroup.fileName | string |   |   | X |
| balGenBusPostingGroup.byteSize | int |   |   | X |
| balGenProdPostingGroup | string |   |   | X |
| balGenProdPostingGroup.id | guid | X | X |   |
| balGenProdPostingGroup.fileName | string |   |   | X |
| balGenProdPostingGroup.byteSize | int |   |   | X |
| balVatCalculationType | string |   |   | X |
| balVatCalculationType.id | guid | X | X |   |
| balVatCalculationType.fileName | string |   |   | X |
| balVatCalculationType.byteSize | int |   |   | X |
| balVatPercent | float |   |   | X |
| balVatPercent.id | guid | X | X |   |
| balVatPercent.fileName | string |   |   | X |
| balVatPercent.byteSize | int |   |   | X |
| balVatAmount | float |   |   | X |
| balVatAmount.id | guid | X | X |   |
| balVatAmount.fileName | string |   |   | X |
| balVatAmount.byteSize | int |   |   | X |
| bankPaymentType | string |   |   | X |
| bankPaymentType.id | guid | X | X |   |
| bankPaymentType.fileName | string |   |   | X |
| bankPaymentType.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| balVatBaseAmount | float |   |   | X |
| balVatBaseAmount.id | guid | X | X |   |
| balVatBaseAmount.fileName | string |   |   | X |
| balVatBaseAmount.byteSize | int |   |   | X |
| correction | bool |   |   | X |
| correction.id | guid | X | X |   |
| correction.fileName | string |   |   | X |
| correction.byteSize | int |   |   | X |
| checkPrinted | bool |   |   | X |
| checkPrinted.id | guid | X | X |   |
| checkPrinted.fileName | string |   |   | X |
| checkPrinted.byteSize | int |   |   | X |
| documentDate | date |   |   | X |
| documentDate.id | guid | X | X |   |
| documentDate.fileName | string |   |   | X |
| documentDate.byteSize | int |   |   | X |
| externalDocumentNumber | string |   |   | X |
| externalDocumentNumber.id | guid | X | X |   |
| externalDocumentNumber.fileName | string |   |   | X |
| externalDocumentNumber.byteSize | int |   |   | X |
| sourceType | string |   |   | X |
| sourceType.id | guid | X | X |   |
| sourceType.fileName | string |   |   | X |
| sourceType.byteSize | int |   |   | X |
| sourceNumber | string |   |   | X |
| sourceNumber.id | guid | X | X |   |
| sourceNumber.fileName | string |   |   | X |
| sourceNumber.byteSize | int |   |   | X |
| postingNumberSeries | string |   |   | X |
| postingNumberSeries.id | guid | X | X |   |
| postingNumberSeries.fileName | string |   |   | X |
| postingNumberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| useTax | bool |   |   | X |
| useTax.id | guid | X | X |   |
| useTax.fileName | string |   |   | X |
| useTax.byteSize | int |   |   | X |
| balTaxAreaCode | string |   |   | X |
| balTaxAreaCode.id | guid | X | X |   |
| balTaxAreaCode.fileName | string |   |   | X |
| balTaxAreaCode.byteSize | int |   |   | X |
| balTaxLiable | bool |   |   | X |
| balTaxLiable.id | guid | X | X |   |
| balTaxLiable.fileName | string |   |   | X |
| balTaxLiable.byteSize | int |   |   | X |
| balTaxGroupCode | string |   |   | X |
| balTaxGroupCode.id | guid | X | X |   |
| balTaxGroupCode.fileName | string |   |   | X |
| balTaxGroupCode.byteSize | int |   |   | X |
| balUseTax | bool |   |   | X |
| balUseTax.id | guid | X | X |   |
| balUseTax.fileName | string |   |   | X |
| balUseTax.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| balVatBusPostingGroup | string |   |   | X |
| balVatBusPostingGroup.id | guid | X | X |   |
| balVatBusPostingGroup.fileName | string |   |   | X |
| balVatBusPostingGroup.byteSize | int |   |   | X |
| balVatProdPostingGroup | string |   |   | X |
| balVatProdPostingGroup.id | guid | X | X |   |
| balVatProdPostingGroup.fileName | string |   |   | X |
| balVatProdPostingGroup.byteSize | int |   |   | X |
| additionalCurrencyPosting | string |   |   | X |
| additionalCurrencyPosting.id | guid | X | X |   |
| additionalCurrencyPosting.fileName | string |   |   | X |
| additionalCurrencyPosting.byteSize | int |   |   | X |
| faAddCurrencyFactor | float |   |   | X |
| faAddCurrencyFactor.id | guid | X | X |   |
| faAddCurrencyFactor.fileName | string |   |   | X |
| faAddCurrencyFactor.byteSize | int |   |   | X |
| sourceCurrencyCode | string |   |   | X |
| sourceCurrencyCode.id | guid | X | X |   |
| sourceCurrencyCode.fileName | string |   |   | X |
| sourceCurrencyCode.byteSize | int |   |   | X |
| sourceCurrencyAmount | float |   |   | X |
| sourceCurrencyAmount.id | guid | X | X |   |
| sourceCurrencyAmount.fileName | string |   |   | X |
| sourceCurrencyAmount.byteSize | int |   |   | X |
| sourceCurrVatBaseAmount | float |   |   | X |
| sourceCurrVatBaseAmount.id | guid | X | X |   |
| sourceCurrVatBaseAmount.fileName | string |   |   | X |
| sourceCurrVatBaseAmount.byteSize | int |   |   | X |
| sourceCurrVatAmount | float |   |   | X |
| sourceCurrVatAmount.id | guid | X | X |   |
| sourceCurrVatAmount.fileName | string |   |   | X |
| sourceCurrVatAmount.byteSize | int |   |   | X |
| vatBaseDiscountPercent | float |   |   | X |
| vatBaseDiscountPercent.id | guid | X | X |   |
| vatBaseDiscountPercent.fileName | string |   |   | X |
| vatBaseDiscountPercent.byteSize | int |   |   | X |
| vatAmountLcy | float |   |   | X |
| vatAmountLcy.id | guid | X | X |   |
| vatAmountLcy.fileName | string |   |   | X |
| vatAmountLcy.byteSize | int |   |   | X |
| vatBaseAmountLcy | float |   |   | X |
| vatBaseAmountLcy.id | guid | X | X |   |
| vatBaseAmountLcy.fileName | string |   |   | X |
| vatBaseAmountLcy.byteSize | int |   |   | X |
| balVatAmountLcy | float |   |   | X |
| balVatAmountLcy.id | guid | X | X |   |
| balVatAmountLcy.fileName | string |   |   | X |
| balVatAmountLcy.byteSize | int |   |   | X |
| balVatBaseAmountLcy | float |   |   | X |
| balVatBaseAmountLcy.id | guid | X | X |   |
| balVatBaseAmountLcy.fileName | string |   |   | X |
| balVatBaseAmountLcy.byteSize | int |   |   | X |
| reversingEntry | bool |   |   | X |
| reversingEntry.id | guid | X | X |   |
| reversingEntry.fileName | string |   |   | X |
| reversingEntry.byteSize | int |   |   | X |
| allowZeroAmountPosting | bool |   |   | X |
| allowZeroAmountPosting.id | guid | X | X |   |
| allowZeroAmountPosting.fileName | string |   |   | X |
| allowZeroAmountPosting.byteSize | int |   |   | X |
| shipToOrderAddressCode | string |   |   | X |
| shipToOrderAddressCode.id | guid | X | X |   |
| shipToOrderAddressCode.fileName | string |   |   | X |
| shipToOrderAddressCode.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| balVatDifference | float |   |   | X |
| balVatDifference.id | guid | X | X |   |
| balVatDifference.fileName | string |   |   | X |
| balVatDifference.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| icDirection | string |   |   | X |
| icDirection.id | guid | X | X |   |
| icDirection.fileName | string |   |   | X |
| icDirection.byteSize | int |   |   | X |
| icPartnerGLAccNumber | string |   |   | X |
| icPartnerGLAccNumber.id | guid | X | X |   |
| icPartnerGLAccNumber.fileName | string |   |   | X |
| icPartnerGLAccNumber.byteSize | int |   |   | X |
| icPartnerTransactionNumber | int |   |   | X |
| icPartnerTransactionNumber.id | guid | X | X |   |
| icPartnerTransactionNumber.fileName | string |   |   | X |
| icPartnerTransactionNumber.byteSize | int |   |   | X |
| sellToBuyFromNumber | string |   |   | X |
| sellToBuyFromNumber.id | guid | X | X |   |
| sellToBuyFromNumber.fileName | string |   |   | X |
| sellToBuyFromNumber.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| countryRegionCode | string |   |   | X |
| countryRegionCode.id | guid | X | X |   |
| countryRegionCode.fileName | string |   |   | X |
| countryRegionCode.byteSize | int |   |   | X |
| prepayment | bool |   |   | X |
| prepayment.id | guid | X | X |   |
| prepayment.fileName | string |   |   | X |
| prepayment.byteSize | int |   |   | X |
| financialVoid | bool |   |   | X |
| financialVoid.id | guid | X | X |   |
| financialVoid.fileName | string |   |   | X |
| financialVoid.byteSize | int |   |   | X |
| incomingDocumentEntryNumber | int |   |   | X |
| incomingDocumentEntryNumber.id | guid | X | X |   |
| incomingDocumentEntryNumber.fileName | string |   |   | X |
| incomingDocumentEntryNumber.byteSize | int |   |   | X |
| creditorNumber | string |   |   | X |
| creditorNumber.id | guid | X | X |   |
| creditorNumber.fileName | string |   |   | X |
| creditorNumber.byteSize | int |   |   | X |
| paymentReference | string |   |   | X |
| paymentReference.id | guid | X | X |   |
| paymentReference.fileName | string |   |   | X |
| paymentReference.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| appliesToExtDocNumber | string |   |   | X |
| appliesToExtDocNumber.id | guid | X | X |   |
| appliesToExtDocNumber.fileName | string |   |   | X |
| appliesToExtDocNumber.byteSize | int |   |   | X |
| recipientBankAccount | string |   |   | X |
| recipientBankAccount.id | guid | X | X |   |
| recipientBankAccount.fileName | string |   |   | X |
| recipientBankAccount.byteSize | int |   |   | X |
| messageToRecipient | string |   |   | X |
| messageToRecipient.id | guid | X | X |   |
| messageToRecipient.fileName | string |   |   | X |
| messageToRecipient.byteSize | int |   |   | X |
| exportedToPaymentFile | bool |   |   | X |
| exportedToPaymentFile.id | guid | X | X |   |
| exportedToPaymentFile.fileName | string |   |   | X |
| exportedToPaymentFile.byteSize | int |   |   | X |
| hasPaymentExportError | bool |   |   | X |
| hasPaymentExportError.id | guid | X | X |   |
| hasPaymentExportError.fileName | string |   |   | X |
| hasPaymentExportError.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobUnitPriceLcy | float |   |   | X |
| jobUnitPriceLcy.id | guid | X | X |   |
| jobUnitPriceLcy.fileName | string |   |   | X |
| jobUnitPriceLcy.byteSize | int |   |   | X |
| jobTotalPriceLcy | float |   |   | X |
| jobTotalPriceLcy.id | guid | X | X |   |
| jobTotalPriceLcy.fileName | string |   |   | X |
| jobTotalPriceLcy.byteSize | int |   |   | X |
| jobQuantity | float |   |   | X |
| jobQuantity.id | guid | X | X |   |
| jobQuantity.fileName | string |   |   | X |
| jobQuantity.byteSize | int |   |   | X |
| jobUnitCostLcy | float |   |   | X |
| jobUnitCostLcy.id | guid | X | X |   |
| jobUnitCostLcy.fileName | string |   |   | X |
| jobUnitCostLcy.byteSize | int |   |   | X |
| jobLineDiscountPercent | float |   |   | X |
| jobLineDiscountPercent.id | guid | X | X |   |
| jobLineDiscountPercent.fileName | string |   |   | X |
| jobLineDiscountPercent.byteSize | int |   |   | X |
| jobLineDiscAmountLcy | float |   |   | X |
| jobLineDiscAmountLcy.id | guid | X | X |   |
| jobLineDiscAmountLcy.fileName | string |   |   | X |
| jobLineDiscAmountLcy.byteSize | int |   |   | X |
| jobUnitOfMeasureCode | string |   |   | X |
| jobUnitOfMeasureCode.id | guid | X | X |   |
| jobUnitOfMeasureCode.fileName | string |   |   | X |
| jobUnitOfMeasureCode.byteSize | int |   |   | X |
| jobLineType | string |   |   | X |
| jobLineType.id | guid | X | X |   |
| jobLineType.fileName | string |   |   | X |
| jobLineType.byteSize | int |   |   | X |
| jobUnitPrice | float |   |   | X |
| jobUnitPrice.id | guid | X | X |   |
| jobUnitPrice.fileName | string |   |   | X |
| jobUnitPrice.byteSize | int |   |   | X |
| jobTotalPrice | float |   |   | X |
| jobTotalPrice.id | guid | X | X |   |
| jobTotalPrice.fileName | string |   |   | X |
| jobTotalPrice.byteSize | int |   |   | X |
| jobUnitCost | float |   |   | X |
| jobUnitCost.id | guid | X | X |   |
| jobUnitCost.fileName | string |   |   | X |
| jobUnitCost.byteSize | int |   |   | X |
| jobTotalCost | float |   |   | X |
| jobTotalCost.id | guid | X | X |   |
| jobTotalCost.fileName | string |   |   | X |
| jobTotalCost.byteSize | int |   |   | X |
| jobLineDiscountAmount | float |   |   | X |
| jobLineDiscountAmount.id | guid | X | X |   |
| jobLineDiscountAmount.fileName | string |   |   | X |
| jobLineDiscountAmount.byteSize | int |   |   | X |
| jobLineAmount | float |   |   | X |
| jobLineAmount.id | guid | X | X |   |
| jobLineAmount.fileName | string |   |   | X |
| jobLineAmount.byteSize | int |   |   | X |
| jobTotalCostLcy | float |   |   | X |
| jobTotalCostLcy.id | guid | X | X |   |
| jobTotalCostLcy.fileName | string |   |   | X |
| jobTotalCostLcy.byteSize | int |   |   | X |
| jobLineAmountLcy | float |   |   | X |
| jobLineAmountLcy.id | guid | X | X |   |
| jobLineAmountLcy.fileName | string |   |   | X |
| jobLineAmountLcy.byteSize | int |   |   | X |
| jobCurrencyFactor | float |   |   | X |
| jobCurrencyFactor.id | guid | X | X |   |
| jobCurrencyFactor.fileName | string |   |   | X |
| jobCurrencyFactor.byteSize | int |   |   | X |
| jobCurrencyCode | string |   |   | X |
| jobCurrencyCode.id | guid | X | X |   |
| jobCurrencyCode.fileName | string |   |   | X |
| jobCurrencyCode.byteSize | int |   |   | X |
| jobPlanningLineNumber | int |   |   | X |
| jobPlanningLineNumber.id | guid | X | X |   |
| jobPlanningLineNumber.fileName | string |   |   | X |
| jobPlanningLineNumber.byteSize | int |   |   | X |
| jobRemainingQty | float |   |   | X |
| jobRemainingQty.id | guid | X | X |   |
| jobRemainingQty.fileName | string |   |   | X |
| jobRemainingQty.byteSize | int |   |   | X |
| directDebitMandateId | string |   |   | X |
| directDebitMandateId.id | guid | X | X |   |
| directDebitMandateId.fileName | string |   |   | X |
| directDebitMandateId.byteSize | int |   |   | X |
| dataExchEntryNumber | int |   |   | X |
| dataExchEntryNumber.id | guid | X | X |   |
| dataExchEntryNumber.fileName | string |   |   | X |
| dataExchEntryNumber.byteSize | int |   |   | X |
| payerInformation | string |   |   | X |
| payerInformation.id | guid | X | X |   |
| payerInformation.fileName | string |   |   | X |
| payerInformation.byteSize | int |   |   | X |
| transactionInformation | string |   |   | X |
| transactionInformation.id | guid | X | X |   |
| transactionInformation.fileName | string |   |   | X |
| transactionInformation.byteSize | int |   |   | X |
| dataExchLineNumber | int |   |   | X |
| dataExchLineNumber.id | guid | X | X |   |
| dataExchLineNumber.fileName | string |   |   | X |
| dataExchLineNumber.byteSize | int |   |   | X |
| appliedAutomatically | bool |   |   | X |
| appliedAutomatically.id | guid | X | X |   |
| appliedAutomatically.fileName | string |   |   | X |
| appliedAutomatically.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| deferralLineNumber | int |   |   | X |
| deferralLineNumber.id | guid | X | X |   |
| deferralLineNumber.fileName | string |   |   | X |
| deferralLineNumber.byteSize | int |   |   | X |
| campaignNumber | string |   |   | X |
| campaignNumber.id | guid | X | X |   |
| campaignNumber.fileName | string |   |   | X |
| campaignNumber.byteSize | int |   |   | X |
| prodOrderNumber | string |   |   | X |
| prodOrderNumber.id | guid | X | X |   |
| prodOrderNumber.fileName | string |   |   | X |
| prodOrderNumber.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| faPostingType | string |   |   | X |
| faPostingType.id | guid | X | X |   |
| faPostingType.fileName | string |   |   | X |
| faPostingType.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| salvageValue | float |   |   | X |
| salvageValue.id | guid | X | X |   |
| salvageValue.fileName | string |   |   | X |
| salvageValue.byteSize | int |   |   | X |
| numberOfDepreciationDays | int |   |   | X |
| numberOfDepreciationDays.id | guid | X | X |   |
| numberOfDepreciationDays.fileName | string |   |   | X |
| numberOfDepreciationDays.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| deprAcquisitionCost | bool |   |   | X |
| deprAcquisitionCost.id | guid | X | X |   |
| deprAcquisitionCost.fileName | string |   |   | X |
| deprAcquisitionCost.byteSize | int |   |   | X |
| maintenanceCode | string |   |   | X |
| maintenanceCode.id | guid | X | X |   |
| maintenanceCode.fileName | string |   |   | X |
| maintenanceCode.byteSize | int |   |   | X |
| insuranceNumber | string |   |   | X |
| insuranceNumber.id | guid | X | X |   |
| insuranceNumber.fileName | string |   |   | X |
| insuranceNumber.byteSize | int |   |   | X |
| budgetedFaNumber | string |   |   | X |
| budgetedFaNumber.id | guid | X | X |   |
| budgetedFaNumber.fileName | string |   |   | X |
| budgetedFaNumber.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| faReclassificationEntry | bool |   |   | X |
| faReclassificationEntry.id | guid | X | X |   |
| faReclassificationEntry.fileName | string |   |   | X |
| faReclassificationEntry.byteSize | int |   |   | X |
| faErrorEntryNumber | int |   |   | X |
| faErrorEntryNumber.id | guid | X | X |   |
| faErrorEntryNumber.fileName | string |   |   | X |
| faErrorEntryNumber.byteSize | int |   |   | X |
| indexEntry | bool |   |   | X |
| indexEntry.id | guid | X | X |   |
| indexEntry.fileName | string |   |   | X |
| indexEntry.byteSize | int |   |   | X |
| sourceLineNumber | int |   |   | X |
| sourceLineNumber.id | guid | X | X |   |
| sourceLineNumber.fileName | string |   |   | X |
| sourceLineNumber.byteSize | int |   |   | X |
| comment | string |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| checkExported | bool |   |   | X |
| checkExported.id | guid | X | X |   |
| checkExported.fileName | string |   |   | X |
| checkExported.byteSize | int |   |   | X |
| checkTransmitted | bool |   |   | X |
| checkTransmitted.id | guid | X | X |   |
| checkTransmitted.fileName | string |   |   | X |
| checkTransmitted.byteSize | int |   |   | X |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| accountId | guid |   |   | X |
| accountId.id | guid | X | X |   |
| accountId.fileName | string |   |   | X |
| accountId.byteSize | int |   |   | X |
| customerId | guid |   |   | X |
| customerId.id | guid | X | X |   |
| customerId.fileName | string |   |   | X |
| customerId.byteSize | int |   |   | X |
| appliesToInvoiceId | guid |   |   | X |
| appliesToInvoiceId.id | guid | X | X |   |
| appliesToInvoiceId.fileName | string |   |   | X |
| appliesToInvoiceId.byteSize | int |   |   | X |
| contactGraphId | string |   |   | X |
| contactGraphId.id | guid | X | X |   |
| contactGraphId.fileName | string |   |   | X |
| contactGraphId.byteSize | int |   |   | X |
| lastModifiedDatetime | date |   |   | X |
| lastModifiedDatetime.id | guid | X | X |   |
| lastModifiedDatetime.fileName | string |   |   | X |
| lastModifiedDatetime.byteSize | int |   |   | X |
| journalBatchId | guid |   |   | X |
| journalBatchId.id | guid | X | X |   |
| journalBatchId.fileName | string |   |   | X |
| journalBatchId.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowItems
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| number2 | string |   |   | X |
| number2.id | guid | X | X |   |
| number2.fileName | string |   |   | X |
| number2.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| searchDescription | string |   |   | X |
| searchDescription.id | guid | X | X |   |
| searchDescription.fileName | string |   |   | X |
| searchDescription.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| assemblyBom | bool |   |   | X |
| assemblyBom.id | guid | X | X |   |
| assemblyBom.fileName | string |   |   | X |
| assemblyBom.byteSize | int |   |   | X |
| baseUnitOfMeasure | string |   |   | X |
| baseUnitOfMeasure.id | guid | X | X |   |
| baseUnitOfMeasure.fileName | string |   |   | X |
| baseUnitOfMeasure.byteSize | int |   |   | X |
| priceUnitConversion | int |   |   | X |
| priceUnitConversion.id | guid | X | X |   |
| priceUnitConversion.fileName | string |   |   | X |
| priceUnitConversion.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| inventoryPostingGroup | string |   |   | X |
| inventoryPostingGroup.id | guid | X | X |   |
| inventoryPostingGroup.fileName | string |   |   | X |
| inventoryPostingGroup.byteSize | int |   |   | X |
| shelfNumber | string |   |   | X |
| shelfNumber.id | guid | X | X |   |
| shelfNumber.fileName | string |   |   | X |
| shelfNumber.byteSize | int |   |   | X |
| itemDiscGroup | string |   |   | X |
| itemDiscGroup.id | guid | X | X |   |
| itemDiscGroup.fileName | string |   |   | X |
| itemDiscGroup.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| statisticsGroup | int |   |   | X |
| statisticsGroup.id | guid | X | X |   |
| statisticsGroup.fileName | string |   |   | X |
| statisticsGroup.byteSize | int |   |   | X |
| commissionGroup | int |   |   | X |
| commissionGroup.id | guid | X | X |   |
| commissionGroup.fileName | string |   |   | X |
| commissionGroup.byteSize | int |   |   | X |
| unitPrice | float |   |   | X |
| unitPrice.id | guid | X | X |   |
| unitPrice.fileName | string |   |   | X |
| unitPrice.byteSize | int |   |   | X |
| priceProfitCalculation | string |   |   | X |
| priceProfitCalculation.id | guid | X | X |   |
| priceProfitCalculation.fileName | string |   |   | X |
| priceProfitCalculation.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| costingMethod | string |   |   | X |
| costingMethod.id | guid | X | X |   |
| costingMethod.fileName | string |   |   | X |
| costingMethod.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| standardCost | float |   |   | X |
| standardCost.id | guid | X | X |   |
| standardCost.fileName | string |   |   | X |
| standardCost.byteSize | int |   |   | X |
| lastDirectCost | float |   |   | X |
| lastDirectCost.id | guid | X | X |   |
| lastDirectCost.fileName | string |   |   | X |
| lastDirectCost.byteSize | int |   |   | X |
| indirectCostPercent | float |   |   | X |
| indirectCostPercent.id | guid | X | X |   |
| indirectCostPercent.fileName | string |   |   | X |
| indirectCostPercent.byteSize | int |   |   | X |
| costIsAdjusted | bool |   |   | X |
| costIsAdjusted.id | guid | X | X |   |
| costIsAdjusted.fileName | string |   |   | X |
| costIsAdjusted.byteSize | int |   |   | X |
| allowOnlineAdjustment | bool |   |   | X |
| allowOnlineAdjustment.id | guid | X | X |   |
| allowOnlineAdjustment.fileName | string |   |   | X |
| allowOnlineAdjustment.byteSize | int |   |   | X |
| vendorNumber | string |   |   | X |
| vendorNumber.id | guid | X | X |   |
| vendorNumber.fileName | string |   |   | X |
| vendorNumber.byteSize | int |   |   | X |
| vendorItemNumber | string |   |   | X |
| vendorItemNumber.id | guid | X | X |   |
| vendorItemNumber.fileName | string |   |   | X |
| vendorItemNumber.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| reorderPoint | float |   |   | X |
| reorderPoint.id | guid | X | X |   |
| reorderPoint.fileName | string |   |   | X |
| reorderPoint.byteSize | int |   |   | X |
| maximumInventory | float |   |   | X |
| maximumInventory.id | guid | X | X |   |
| maximumInventory.fileName | string |   |   | X |
| maximumInventory.byteSize | int |   |   | X |
| reorderQuantity | float |   |   | X |
| reorderQuantity.id | guid | X | X |   |
| reorderQuantity.fileName | string |   |   | X |
| reorderQuantity.byteSize | int |   |   | X |
| alternativeItemNumber | string |   |   | X |
| alternativeItemNumber.id | guid | X | X |   |
| alternativeItemNumber.fileName | string |   |   | X |
| alternativeItemNumber.byteSize | int |   |   | X |
| unitListPrice | float |   |   | X |
| unitListPrice.id | guid | X | X |   |
| unitListPrice.fileName | string |   |   | X |
| unitListPrice.byteSize | int |   |   | X |
| dutyDuePercent | float |   |   | X |
| dutyDuePercent.id | guid | X | X |   |
| dutyDuePercent.fileName | string |   |   | X |
| dutyDuePercent.byteSize | int |   |   | X |
| dutyCode | string |   |   | X |
| dutyCode.id | guid | X | X |   |
| dutyCode.fileName | string |   |   | X |
| dutyCode.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| durability | string |   |   | X |
| durability.id | guid | X | X |   |
| durability.fileName | string |   |   | X |
| durability.byteSize | int |   |   | X |
| freightType | string |   |   | X |
| freightType.id | guid | X | X |   |
| freightType.fileName | string |   |   | X |
| freightType.byteSize | int |   |   | X |
| tariffNumber | string |   |   | X |
| tariffNumber.id | guid | X | X |   |
| tariffNumber.fileName | string |   |   | X |
| tariffNumber.byteSize | int |   |   | X |
| dutyUnitConversion | float |   |   | X |
| dutyUnitConversion.id | guid | X | X |   |
| dutyUnitConversion.fileName | string |   |   | X |
| dutyUnitConversion.byteSize | int |   |   | X |
| countryRegionPurchasedCode | string |   |   | X |
| countryRegionPurchasedCode.id | guid | X | X |   |
| countryRegionPurchasedCode.fileName | string |   |   | X |
| countryRegionPurchasedCode.byteSize | int |   |   | X |
| budgetQuantity | float |   |   | X |
| budgetQuantity.id | guid | X | X |   |
| budgetQuantity.fileName | string |   |   | X |
| budgetQuantity.byteSize | int |   |   | X |
| budgetedAmount | float |   |   | X |
| budgetedAmount.id | guid | X | X |   |
| budgetedAmount.fileName | string |   |   | X |
| budgetedAmount.byteSize | int |   |   | X |
| budgetProfit | float |   |   | X |
| budgetProfit.id | guid | X | X |   |
| budgetProfit.fileName | string |   |   | X |
| budgetProfit.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| blocked | bool |   |   | X |
| blocked.id | guid | X | X |   |
| blocked.fileName | string |   |   | X |
| blocked.byteSize | int |   |   | X |
| costIsPostedToGL | bool |   |   | X |
| costIsPostedToGL.id | guid | X | X |   |
| costIsPostedToGL.fileName | string |   |   | X |
| costIsPostedToGL.byteSize | int |   |   | X |
| blockReason | string |   |   | X |
| blockReason.id | guid | X | X |   |
| blockReason.fileName | string |   |   | X |
| blockReason.byteSize | int |   |   | X |
| lastDatetimeModified | date |   |   | X |
| lastDatetimeModified.id | guid | X | X |   |
| lastDatetimeModified.fileName | string |   |   | X |
| lastDatetimeModified.byteSize | int |   |   | X |
| lastDateModified | date |   |   | X |
| lastDateModified.id | guid | X | X |   |
| lastDateModified.fileName | string |   |   | X |
| lastDateModified.byteSize | int |   |   | X |
| lastTimeModified | string |   |   | X |
| lastTimeModified.id | guid | X | X |   |
| lastTimeModified.fileName | string |   |   | X |
| lastTimeModified.byteSize | int |   |   | X |
| dateFilter | string |   |   | X |
| dateFilter.id | guid | X | X |   |
| dateFilter.fileName | string |   |   | X |
| dateFilter.byteSize | int |   |   | X |
| globalDimension1Filter | string |   |   | X |
| globalDimension1Filter.id | guid | X | X |   |
| globalDimension1Filter.fileName | string |   |   | X |
| globalDimension1Filter.byteSize | int |   |   | X |
| globalDimension2Filter | string |   |   | X |
| globalDimension2Filter.id | guid | X | X |   |
| globalDimension2Filter.fileName | string |   |   | X |
| globalDimension2Filter.byteSize | int |   |   | X |
| locationFilter | string |   |   | X |
| locationFilter.id | guid | X | X |   |
| locationFilter.fileName | string |   |   | X |
| locationFilter.byteSize | int |   |   | X |
| inventory | float |   |   | X |
| inventory.id | guid | X | X |   |
| inventory.fileName | string |   |   | X |
| inventory.byteSize | int |   |   | X |
| netInvoicedQty | float |   |   | X |
| netInvoicedQty.id | guid | X | X |   |
| netInvoicedQty.fileName | string |   |   | X |
| netInvoicedQty.byteSize | int |   |   | X |
| netChange | float |   |   | X |
| netChange.id | guid | X | X |   |
| netChange.fileName | string |   |   | X |
| netChange.byteSize | int |   |   | X |
| purchasesQty | float |   |   | X |
| purchasesQty.id | guid | X | X |   |
| purchasesQty.fileName | string |   |   | X |
| purchasesQty.byteSize | int |   |   | X |
| salesQty | float |   |   | X |
| salesQty.id | guid | X | X |   |
| salesQty.fileName | string |   |   | X |
| salesQty.byteSize | int |   |   | X |
| positiveAdjmtQty | float |   |   | X |
| positiveAdjmtQty.id | guid | X | X |   |
| positiveAdjmtQty.fileName | string |   |   | X |
| positiveAdjmtQty.byteSize | int |   |   | X |
| negativeAdjmtQty | float |   |   | X |
| negativeAdjmtQty.id | guid | X | X |   |
| negativeAdjmtQty.fileName | string |   |   | X |
| negativeAdjmtQty.byteSize | int |   |   | X |
| purchasesLcy | float |   |   | X |
| purchasesLcy.id | guid | X | X |   |
| purchasesLcy.fileName | string |   |   | X |
| purchasesLcy.byteSize | int |   |   | X |
| salesLcy | float |   |   | X |
| salesLcy.id | guid | X | X |   |
| salesLcy.fileName | string |   |   | X |
| salesLcy.byteSize | int |   |   | X |
| positiveAdjmtLcy | float |   |   | X |
| positiveAdjmtLcy.id | guid | X | X |   |
| positiveAdjmtLcy.fileName | string |   |   | X |
| positiveAdjmtLcy.byteSize | int |   |   | X |
| negativeAdjmtLcy | float |   |   | X |
| negativeAdjmtLcy.id | guid | X | X |   |
| negativeAdjmtLcy.fileName | string |   |   | X |
| negativeAdjmtLcy.byteSize | int |   |   | X |
| cogsLcy | float |   |   | X |
| cogsLcy.id | guid | X | X |   |
| cogsLcy.fileName | string |   |   | X |
| cogsLcy.byteSize | int |   |   | X |
| qtyOnPurchOrder | float |   |   | X |
| qtyOnPurchOrder.id | guid | X | X |   |
| qtyOnPurchOrder.fileName | string |   |   | X |
| qtyOnPurchOrder.byteSize | int |   |   | X |
| qtyOnSalesOrder | float |   |   | X |
| qtyOnSalesOrder.id | guid | X | X |   |
| qtyOnSalesOrder.fileName | string |   |   | X |
| qtyOnSalesOrder.byteSize | int |   |   | X |
| priceIncludesVat | bool |   |   | X |
| priceIncludesVat.id | guid | X | X |   |
| priceIncludesVat.fileName | string |   |   | X |
| priceIncludesVat.byteSize | int |   |   | X |
| dropShipmentFilter | string |   |   | X |
| dropShipmentFilter.id | guid | X | X |   |
| dropShipmentFilter.fileName | string |   |   | X |
| dropShipmentFilter.byteSize | int |   |   | X |
| vatBusPostingGrPrice | string |   |   | X |
| vatBusPostingGrPrice.id | guid | X | X |   |
| vatBusPostingGrPrice.fileName | string |   |   | X |
| vatBusPostingGrPrice.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| transferredQty | float |   |   | X |
| transferredQty.id | guid | X | X |   |
| transferredQty.fileName | string |   |   | X |
| transferredQty.byteSize | int |   |   | X |
| transferredLcy | float |   |   | X |
| transferredLcy.id | guid | X | X |   |
| transferredLcy.fileName | string |   |   | X |
| transferredLcy.byteSize | int |   |   | X |
| countryRegionOfOriginCode | string |   |   | X |
| countryRegionOfOriginCode.id | guid | X | X |   |
| countryRegionOfOriginCode.fileName | string |   |   | X |
| countryRegionOfOriginCode.byteSize | int |   |   | X |
| automaticExtTexts | bool |   |   | X |
| automaticExtTexts.id | guid | X | X |   |
| automaticExtTexts.fileName | string |   |   | X |
| automaticExtTexts.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| reservedQtyOnInventory | float |   |   | X |
| reservedQtyOnInventory.id | guid | X | X |   |
| reservedQtyOnInventory.fileName | string |   |   | X |
| reservedQtyOnInventory.byteSize | int |   |   | X |
| reservedQtyOnPurchOrders | float |   |   | X |
| reservedQtyOnPurchOrders.id | guid | X | X |   |
| reservedQtyOnPurchOrders.fileName | string |   |   | X |
| reservedQtyOnPurchOrders.byteSize | int |   |   | X |
| reservedQtyOnSalesOrders | float |   |   | X |
| reservedQtyOnSalesOrders.id | guid | X | X |   |
| reservedQtyOnSalesOrders.fileName | string |   |   | X |
| reservedQtyOnSalesOrders.byteSize | int |   |   | X |
| globalDimension1Code | string |   |   | X |
| globalDimension1Code.id | guid | X | X |   |
| globalDimension1Code.fileName | string |   |   | X |
| globalDimension1Code.byteSize | int |   |   | X |
| globalDimension2Code | string |   |   | X |
| globalDimension2Code.id | guid | X | X |   |
| globalDimension2Code.fileName | string |   |   | X |
| globalDimension2Code.byteSize | int |   |   | X |
| resQtyOnOutboundTransfer | float |   |   | X |
| resQtyOnOutboundTransfer.id | guid | X | X |   |
| resQtyOnOutboundTransfer.fileName | string |   |   | X |
| resQtyOnOutboundTransfer.byteSize | int |   |   | X |
| resQtyOnInboundTransfer | float |   |   | X |
| resQtyOnInboundTransfer.id | guid | X | X |   |
| resQtyOnInboundTransfer.fileName | string |   |   | X |
| resQtyOnInboundTransfer.byteSize | int |   |   | X |
| resQtyOnSalesReturns | float |   |   | X |
| resQtyOnSalesReturns.id | guid | X | X |   |
| resQtyOnSalesReturns.fileName | string |   |   | X |
| resQtyOnSalesReturns.byteSize | int |   |   | X |
| resQtyOnPurchReturns | float |   |   | X |
| resQtyOnPurchReturns.id | guid | X | X |   |
| resQtyOnPurchReturns.fileName | string |   |   | X |
| resQtyOnPurchReturns.byteSize | int |   |   | X |
| stockoutWarning | string |   |   | X |
| stockoutWarning.id | guid | X | X |   |
| stockoutWarning.fileName | string |   |   | X |
| stockoutWarning.byteSize | int |   |   | X |
| preventNegativeInventory | string |   |   | X |
| preventNegativeInventory.id | guid | X | X |   |
| preventNegativeInventory.fileName | string |   |   | X |
| preventNegativeInventory.byteSize | int |   |   | X |
| costOfOpenProductionOrders | float |   |   | X |
| costOfOpenProductionOrders.id | guid | X | X |   |
| costOfOpenProductionOrders.fileName | string |   |   | X |
| costOfOpenProductionOrders.byteSize | int |   |   | X |
| applicationWkshUserId | string |   |   | X |
| applicationWkshUserId.id | guid | X | X |   |
| applicationWkshUserId.fileName | string |   |   | X |
| applicationWkshUserId.byteSize | int |   |   | X |
| assemblyPolicy | string |   |   | X |
| assemblyPolicy.id | guid | X | X |   |
| assemblyPolicy.fileName | string |   |   | X |
| assemblyPolicy.byteSize | int |   |   | X |
| resQtyOnAssemblyOrder | float |   |   | X |
| resQtyOnAssemblyOrder.id | guid | X | X |   |
| resQtyOnAssemblyOrder.fileName | string |   |   | X |
| resQtyOnAssemblyOrder.byteSize | int |   |   | X |
| resQtyOnAsmComp | float |   |   | X |
| resQtyOnAsmComp.id | guid | X | X |   |
| resQtyOnAsmComp.fileName | string |   |   | X |
| resQtyOnAsmComp.byteSize | int |   |   | X |
| qtyOnAssemblyOrder | float |   |   | X |
| qtyOnAssemblyOrder.id | guid | X | X |   |
| qtyOnAssemblyOrder.fileName | string |   |   | X |
| qtyOnAssemblyOrder.byteSize | int |   |   | X |
| qtyOnAsmComponent | float |   |   | X |
| qtyOnAsmComponent.id | guid | X | X |   |
| qtyOnAsmComponent.fileName | string |   |   | X |
| qtyOnAsmComponent.byteSize | int |   |   | X |
| qtyOnJobOrder | float |   |   | X |
| qtyOnJobOrder.id | guid | X | X |   |
| qtyOnJobOrder.fileName | string |   |   | X |
| qtyOnJobOrder.byteSize | int |   |   | X |
| resQtyOnJobOrder | float |   |   | X |
| resQtyOnJobOrder.id | guid | X | X |   |
| resQtyOnJobOrder.fileName | string |   |   | X |
| resQtyOnJobOrder.byteSize | int |   |   | X |
| gtin | string |   |   | X |
| gtin.id | guid | X | X |   |
| gtin.fileName | string |   |   | X |
| gtin.byteSize | int |   |   | X |
| defaultDeferralTemplateCode | string |   |   | X |
| defaultDeferralTemplateCode.id | guid | X | X |   |
| defaultDeferralTemplateCode.fileName | string |   |   | X |
| defaultDeferralTemplateCode.byteSize | int |   |   | X |
| lowLevelCode | int |   |   | X |
| lowLevelCode.id | guid | X | X |   |
| lowLevelCode.fileName | string |   |   | X |
| lowLevelCode.byteSize | int |   |   | X |
| lotSize | float |   |   | X |
| lotSize.id | guid | X | X |   |
| lotSize.fileName | string |   |   | X |
| lotSize.byteSize | int |   |   | X |
| serialNos | string |   |   | X |
| serialNos.id | guid | X | X |   |
| serialNos.fileName | string |   |   | X |
| serialNos.byteSize | int |   |   | X |
| lastUnitCostCalcDate | date |   |   | X |
| lastUnitCostCalcDate.id | guid | X | X |   |
| lastUnitCostCalcDate.fileName | string |   |   | X |
| lastUnitCostCalcDate.byteSize | int |   |   | X |
| rolledUpMaterialCost | float |   |   | X |
| rolledUpMaterialCost.id | guid | X | X |   |
| rolledUpMaterialCost.fileName | string |   |   | X |
| rolledUpMaterialCost.byteSize | int |   |   | X |
| rolledUpCapacityCost | float |   |   | X |
| rolledUpCapacityCost.id | guid | X | X |   |
| rolledUpCapacityCost.fileName | string |   |   | X |
| rolledUpCapacityCost.byteSize | int |   |   | X |
| scrapPercent | float |   |   | X |
| scrapPercent.id | guid | X | X |   |
| scrapPercent.fileName | string |   |   | X |
| scrapPercent.byteSize | int |   |   | X |
| inventoryValueZero | bool |   |   | X |
| inventoryValueZero.id | guid | X | X |   |
| inventoryValueZero.fileName | string |   |   | X |
| inventoryValueZero.byteSize | int |   |   | X |
| discreteOrderQuantity | int |   |   | X |
| discreteOrderQuantity.id | guid | X | X |   |
| discreteOrderQuantity.fileName | string |   |   | X |
| discreteOrderQuantity.byteSize | int |   |   | X |
| minimumOrderQuantity | float |   |   | X |
| minimumOrderQuantity.id | guid | X | X |   |
| minimumOrderQuantity.fileName | string |   |   | X |
| minimumOrderQuantity.byteSize | int |   |   | X |
| maximumOrderQuantity | float |   |   | X |
| maximumOrderQuantity.id | guid | X | X |   |
| maximumOrderQuantity.fileName | string |   |   | X |
| maximumOrderQuantity.byteSize | int |   |   | X |
| safetyStockQuantity | float |   |   | X |
| safetyStockQuantity.id | guid | X | X |   |
| safetyStockQuantity.fileName | string |   |   | X |
| safetyStockQuantity.byteSize | int |   |   | X |
| orderMultiple | float |   |   | X |
| orderMultiple.id | guid | X | X |   |
| orderMultiple.fileName | string |   |   | X |
| orderMultiple.byteSize | int |   |   | X |
| safetyLeadTime | string |   |   | X |
| safetyLeadTime.id | guid | X | X |   |
| safetyLeadTime.fileName | string |   |   | X |
| safetyLeadTime.byteSize | int |   |   | X |
| flushingMethod | string |   |   | X |
| flushingMethod.id | guid | X | X |   |
| flushingMethod.fileName | string |   |   | X |
| flushingMethod.byteSize | int |   |   | X |
| replenishmentSystem | string |   |   | X |
| replenishmentSystem.id | guid | X | X |   |
| replenishmentSystem.fileName | string |   |   | X |
| replenishmentSystem.byteSize | int |   |   | X |
| scheduledReceiptQty | float |   |   | X |
| scheduledReceiptQty.id | guid | X | X |   |
| scheduledReceiptQty.fileName | string |   |   | X |
| scheduledReceiptQty.byteSize | int |   |   | X |
| scheduledNeedQty | float |   |   | X |
| scheduledNeedQty.id | guid | X | X |   |
| scheduledNeedQty.fileName | string |   |   | X |
| scheduledNeedQty.byteSize | int |   |   | X |
| roundingPrecision | float |   |   | X |
| roundingPrecision.id | guid | X | X |   |
| roundingPrecision.fileName | string |   |   | X |
| roundingPrecision.byteSize | int |   |   | X |
| binFilter | string |   |   | X |
| binFilter.id | guid | X | X |   |
| binFilter.fileName | string |   |   | X |
| binFilter.byteSize | int |   |   | X |
| variantFilter | string |   |   | X |
| variantFilter.id | guid | X | X |   |
| variantFilter.fileName | string |   |   | X |
| variantFilter.byteSize | int |   |   | X |
| salesUnitOfMeasure | string |   |   | X |
| salesUnitOfMeasure.id | guid | X | X |   |
| salesUnitOfMeasure.fileName | string |   |   | X |
| salesUnitOfMeasure.byteSize | int |   |   | X |
| purchUnitOfMeasure | string |   |   | X |
| purchUnitOfMeasure.id | guid | X | X |   |
| purchUnitOfMeasure.fileName | string |   |   | X |
| purchUnitOfMeasure.byteSize | int |   |   | X |
| timeBucket | string |   |   | X |
| timeBucket.id | guid | X | X |   |
| timeBucket.fileName | string |   |   | X |
| timeBucket.byteSize | int |   |   | X |
| reservedQtyOnProdOrder | float |   |   | X |
| reservedQtyOnProdOrder.id | guid | X | X |   |
| reservedQtyOnProdOrder.fileName | string |   |   | X |
| reservedQtyOnProdOrder.byteSize | int |   |   | X |
| resQtyOnProdOrderComp | float |   |   | X |
| resQtyOnProdOrderComp.id | guid | X | X |   |
| resQtyOnProdOrderComp.fileName | string |   |   | X |
| resQtyOnProdOrderComp.byteSize | int |   |   | X |
| resQtyOnReqLine | float |   |   | X |
| resQtyOnReqLine.id | guid | X | X |   |
| resQtyOnReqLine.fileName | string |   |   | X |
| resQtyOnReqLine.byteSize | int |   |   | X |
| reorderingPolicy | string |   |   | X |
| reorderingPolicy.id | guid | X | X |   |
| reorderingPolicy.fileName | string |   |   | X |
| reorderingPolicy.byteSize | int |   |   | X |
| includeInventory | bool |   |   | X |
| includeInventory.id | guid | X | X |   |
| includeInventory.fileName | string |   |   | X |
| includeInventory.byteSize | int |   |   | X |
| manufacturingPolicy | string |   |   | X |
| manufacturingPolicy.id | guid | X | X |   |
| manufacturingPolicy.fileName | string |   |   | X |
| manufacturingPolicy.byteSize | int |   |   | X |
| reschedulingPeriod | string |   |   | X |
| reschedulingPeriod.id | guid | X | X |   |
| reschedulingPeriod.fileName | string |   |   | X |
| reschedulingPeriod.byteSize | int |   |   | X |
| lotAccumulationPeriod | string |   |   | X |
| lotAccumulationPeriod.id | guid | X | X |   |
| lotAccumulationPeriod.fileName | string |   |   | X |
| lotAccumulationPeriod.byteSize | int |   |   | X |
| dampenerPeriod | string |   |   | X |
| dampenerPeriod.id | guid | X | X |   |
| dampenerPeriod.fileName | string |   |   | X |
| dampenerPeriod.byteSize | int |   |   | X |
| dampenerQuantity | float |   |   | X |
| dampenerQuantity.id | guid | X | X |   |
| dampenerQuantity.fileName | string |   |   | X |
| dampenerQuantity.byteSize | int |   |   | X |
| overflowLevel | float |   |   | X |
| overflowLevel.id | guid | X | X |   |
| overflowLevel.fileName | string |   |   | X |
| overflowLevel.byteSize | int |   |   | X |
| planningTransferShipQty | float |   |   | X |
| planningTransferShipQty.id | guid | X | X |   |
| planningTransferShipQty.fileName | string |   |   | X |
| planningTransferShipQty.byteSize | int |   |   | X |
| planningWorksheetQty | float |   |   | X |
| planningWorksheetQty.id | guid | X | X |   |
| planningWorksheetQty.fileName | string |   |   | X |
| planningWorksheetQty.byteSize | int |   |   | X |
| stockkeepingUnitExists | bool |   |   | X |
| stockkeepingUnitExists.id | guid | X | X |   |
| stockkeepingUnitExists.fileName | string |   |   | X |
| stockkeepingUnitExists.byteSize | int |   |   | X |
| manufacturerCode | string |   |   | X |
| manufacturerCode.id | guid | X | X |   |
| manufacturerCode.fileName | string |   |   | X |
| manufacturerCode.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| createdFromNonstockItem | bool |   |   | X |
| createdFromNonstockItem.id | guid | X | X |   |
| createdFromNonstockItem.fileName | string |   |   | X |
| createdFromNonstockItem.byteSize | int |   |   | X |
| substitutesExist | bool |   |   | X |
| substitutesExist.id | guid | X | X |   |
| substitutesExist.fileName | string |   |   | X |
| substitutesExist.byteSize | int |   |   | X |
| qtyInTransit | float |   |   | X |
| qtyInTransit.id | guid | X | X |   |
| qtyInTransit.fileName | string |   |   | X |
| qtyInTransit.byteSize | int |   |   | X |
| transOrdReceiptQty | float |   |   | X |
| transOrdReceiptQty.id | guid | X | X |   |
| transOrdReceiptQty.fileName | string |   |   | X |
| transOrdReceiptQty.byteSize | int |   |   | X |
| transOrdShipmentQty | float |   |   | X |
| transOrdShipmentQty.id | guid | X | X |   |
| transOrdShipmentQty.fileName | string |   |   | X |
| transOrdShipmentQty.byteSize | int |   |   | X |
| qtyAssignedToShip | float |   |   | X |
| qtyAssignedToShip.id | guid | X | X |   |
| qtyAssignedToShip.fileName | string |   |   | X |
| qtyAssignedToShip.byteSize | int |   |   | X |
| qtyPicked | float |   |   | X |
| qtyPicked.id | guid | X | X |   |
| qtyPicked.fileName | string |   |   | X |
| qtyPicked.byteSize | int |   |   | X |
| serviceItemGroup | string |   |   | X |
| serviceItemGroup.id | guid | X | X |   |
| serviceItemGroup.fileName | string |   |   | X |
| serviceItemGroup.byteSize | int |   |   | X |
| qtyOnServiceOrder | float |   |   | X |
| qtyOnServiceOrder.id | guid | X | X |   |
| qtyOnServiceOrder.fileName | string |   |   | X |
| qtyOnServiceOrder.byteSize | int |   |   | X |
| resQtyOnServiceOrders | float |   |   | X |
| resQtyOnServiceOrders.id | guid | X | X |   |
| resQtyOnServiceOrders.fileName | string |   |   | X |
| resQtyOnServiceOrders.byteSize | int |   |   | X |
| itemTrackingCode | string |   |   | X |
| itemTrackingCode.id | guid | X | X |   |
| itemTrackingCode.fileName | string |   |   | X |
| itemTrackingCode.byteSize | int |   |   | X |
| lotNos | string |   |   | X |
| lotNos.id | guid | X | X |   |
| lotNos.fileName | string |   |   | X |
| lotNos.byteSize | int |   |   | X |
| expirationCalculation | string |   |   | X |
| expirationCalculation.id | guid | X | X |   |
| expirationCalculation.fileName | string |   |   | X |
| expirationCalculation.byteSize | int |   |   | X |
| lotNumberFilter | string |   |   | X |
| lotNumberFilter.id | guid | X | X |   |
| lotNumberFilter.fileName | string |   |   | X |
| lotNumberFilter.byteSize | int |   |   | X |
| serialNumberFilter | string |   |   | X |
| serialNumberFilter.id | guid | X | X |   |
| serialNumberFilter.fileName | string |   |   | X |
| serialNumberFilter.byteSize | int |   |   | X |
| qtyOnPurchReturn | float |   |   | X |
| qtyOnPurchReturn.id | guid | X | X |   |
| qtyOnPurchReturn.fileName | string |   |   | X |
| qtyOnPurchReturn.byteSize | int |   |   | X |
| qtyOnSalesReturn | float |   |   | X |
| qtyOnSalesReturn.id | guid | X | X |   |
| qtyOnSalesReturn.fileName | string |   |   | X |
| qtyOnSalesReturn.byteSize | int |   |   | X |
| numberOfSubstitutes | int |   |   | X |
| numberOfSubstitutes.id | guid | X | X |   |
| numberOfSubstitutes.fileName | string |   |   | X |
| numberOfSubstitutes.byteSize | int |   |   | X |
| warehouseClassCode | string |   |   | X |
| warehouseClassCode.id | guid | X | X |   |
| warehouseClassCode.fileName | string |   |   | X |
| warehouseClassCode.byteSize | int |   |   | X |
| specialEquipmentCode | string |   |   | X |
| specialEquipmentCode.id | guid | X | X |   |
| specialEquipmentCode.fileName | string |   |   | X |
| specialEquipmentCode.byteSize | int |   |   | X |
| putAwayTemplateCode | string |   |   | X |
| putAwayTemplateCode.id | guid | X | X |   |
| putAwayTemplateCode.fileName | string |   |   | X |
| putAwayTemplateCode.byteSize | int |   |   | X |
| putAwayUnitOfMeasureCode | string |   |   | X |
| putAwayUnitOfMeasureCode.id | guid | X | X |   |
| putAwayUnitOfMeasureCode.fileName | string |   |   | X |
| putAwayUnitOfMeasureCode.byteSize | int |   |   | X |
| physInvtCountingPeriodCode | string |   |   | X |
| physInvtCountingPeriodCode.id | guid | X | X |   |
| physInvtCountingPeriodCode.fileName | string |   |   | X |
| physInvtCountingPeriodCode.byteSize | int |   |   | X |
| lastCountingPeriodUpdate | date |   |   | X |
| lastCountingPeriodUpdate.id | guid | X | X |   |
| lastCountingPeriodUpdate.fileName | string |   |   | X |
| lastCountingPeriodUpdate.byteSize | int |   |   | X |
| lastPhysInvtDate | date |   |   | X |
| lastPhysInvtDate.id | guid | X | X |   |
| lastPhysInvtDate.fileName | string |   |   | X |
| lastPhysInvtDate.byteSize | int |   |   | X |
| useCrossDocking | bool |   |   | X |
| useCrossDocking.id | guid | X | X |   |
| useCrossDocking.fileName | string |   |   | X |
| useCrossDocking.byteSize | int |   |   | X |
| nextCountingStartDate | date |   |   | X |
| nextCountingStartDate.id | guid | X | X |   |
| nextCountingStartDate.fileName | string |   |   | X |
| nextCountingStartDate.byteSize | int |   |   | X |
| nextCountingEndDate | date |   |   | X |
| nextCountingEndDate.id | guid | X | X |   |
| nextCountingEndDate.fileName | string |   |   | X |
| nextCountingEndDate.byteSize | int |   |   | X |
| identifierCode | string |   |   | X |
| identifierCode.id | guid | X | X |   |
| identifierCode.fileName | string |   |   | X |
| identifierCode.byteSize | int |   |   | X |
| unitOfMeasureId | guid |   |   | X |
| unitOfMeasureId.id | guid | X | X |   |
| unitOfMeasureId.fileName | string |   |   | X |
| unitOfMeasureId.byteSize | int |   |   | X |
| taxGroupId | guid |   |   | X |
| taxGroupId.id | guid | X | X |   |
| taxGroupId.fileName | string |   |   | X |
| taxGroupId.byteSize | int |   |   | X |
| routingNumber | string |   |   | X |
| routingNumber.id | guid | X | X |   |
| routingNumber.fileName | string |   |   | X |
| routingNumber.byteSize | int |   |   | X |
| productionBomNumber | string |   |   | X |
| productionBomNumber.id | guid | X | X |   |
| productionBomNumber.fileName | string |   |   | X |
| productionBomNumber.byteSize | int |   |   | X |
| singleLevelMaterialCost | float |   |   | X |
| singleLevelMaterialCost.id | guid | X | X |   |
| singleLevelMaterialCost.fileName | string |   |   | X |
| singleLevelMaterialCost.byteSize | int |   |   | X |
| singleLevelCapacityCost | float |   |   | X |
| singleLevelCapacityCost.id | guid | X | X |   |
| singleLevelCapacityCost.fileName | string |   |   | X |
| singleLevelCapacityCost.byteSize | int |   |   | X |
| singleLevelSubcontrdCost | float |   |   | X |
| singleLevelSubcontrdCost.id | guid | X | X |   |
| singleLevelSubcontrdCost.fileName | string |   |   | X |
| singleLevelSubcontrdCost.byteSize | int |   |   | X |
| singleLevelCapOvhdCost | float |   |   | X |
| singleLevelCapOvhdCost.id | guid | X | X |   |
| singleLevelCapOvhdCost.fileName | string |   |   | X |
| singleLevelCapOvhdCost.byteSize | int |   |   | X |
| singleLevelMfgOvhdCost | float |   |   | X |
| singleLevelMfgOvhdCost.id | guid | X | X |   |
| singleLevelMfgOvhdCost.fileName | string |   |   | X |
| singleLevelMfgOvhdCost.byteSize | int |   |   | X |
| overheadRate | float |   |   | X |
| overheadRate.id | guid | X | X |   |
| overheadRate.fileName | string |   |   | X |
| overheadRate.byteSize | int |   |   | X |
| rolledUpSubcontractedCost | float |   |   | X |
| rolledUpSubcontractedCost.id | guid | X | X |   |
| rolledUpSubcontractedCost.fileName | string |   |   | X |
| rolledUpSubcontractedCost.byteSize | int |   |   | X |
| rolledUpMfgOvhdCost | float |   |   | X |
| rolledUpMfgOvhdCost.id | guid | X | X |   |
| rolledUpMfgOvhdCost.fileName | string |   |   | X |
| rolledUpMfgOvhdCost.byteSize | int |   |   | X |
| rolledUpCapOverheadCost | float |   |   | X |
| rolledUpCapOverheadCost.id | guid | X | X |   |
| rolledUpCapOverheadCost.fileName | string |   |   | X |
| rolledUpCapOverheadCost.byteSize | int |   |   | X |
| planningIssuesQty | float |   |   | X |
| planningIssuesQty.id | guid | X | X |   |
| planningIssuesQty.fileName | string |   |   | X |
| planningIssuesQty.byteSize | int |   |   | X |
| planningReceiptQty | float |   |   | X |
| planningReceiptQty.id | guid | X | X |   |
| planningReceiptQty.fileName | string |   |   | X |
| planningReceiptQty.byteSize | int |   |   | X |
| plannedOrderReceiptQty | float |   |   | X |
| plannedOrderReceiptQty.id | guid | X | X |   |
| plannedOrderReceiptQty.fileName | string |   |   | X |
| plannedOrderReceiptQty.byteSize | int |   |   | X |
| fpOrderReceiptQty | float |   |   | X |
| fpOrderReceiptQty.id | guid | X | X |   |
| fpOrderReceiptQty.fileName | string |   |   | X |
| fpOrderReceiptQty.byteSize | int |   |   | X |
| relOrderReceiptQty | float |   |   | X |
| relOrderReceiptQty.id | guid | X | X |   |
| relOrderReceiptQty.fileName | string |   |   | X |
| relOrderReceiptQty.byteSize | int |   |   | X |
| planningReleaseQty | float |   |   | X |
| planningReleaseQty.id | guid | X | X |   |
| planningReleaseQty.fileName | string |   |   | X |
| planningReleaseQty.byteSize | int |   |   | X |
| plannedOrderReleaseQty | float |   |   | X |
| plannedOrderReleaseQty.id | guid | X | X |   |
| plannedOrderReleaseQty.fileName | string |   |   | X |
| plannedOrderReleaseQty.byteSize | int |   |   | X |
| purchReqReceiptQty | float |   |   | X |
| purchReqReceiptQty.id | guid | X | X |   |
| purchReqReceiptQty.fileName | string |   |   | X |
| purchReqReceiptQty.byteSize | int |   |   | X |
| purchReqReleaseQty | float |   |   | X |
| purchReqReleaseQty.id | guid | X | X |   |
| purchReqReleaseQty.fileName | string |   |   | X |
| purchReqReleaseQty.byteSize | int |   |   | X |
| orderTrackingPolicy | string |   |   | X |
| orderTrackingPolicy.id | guid | X | X |   |
| orderTrackingPolicy.fileName | string |   |   | X |
| orderTrackingPolicy.byteSize | int |   |   | X |
| prodForecastQuantityBase | float |   |   | X |
| prodForecastQuantityBase.id | guid | X | X |   |
| prodForecastQuantityBase.fileName | string |   |   | X |
| prodForecastQuantityBase.byteSize | int |   |   | X |
| productionForecastName | string |   |   | X |
| productionForecastName.id | guid | X | X |   |
| productionForecastName.fileName | string |   |   | X |
| productionForecastName.byteSize | int |   |   | X |
| componentForecast | string |   |   | X |
| componentForecast.id | guid | X | X |   |
| componentForecast.fileName | string |   |   | X |
| componentForecast.byteSize | int |   |   | X |
| qtyOnProdOrder | float |   |   | X |
| qtyOnProdOrder.id | guid | X | X |   |
| qtyOnProdOrder.fileName | string |   |   | X |
| qtyOnProdOrder.byteSize | int |   |   | X |
| qtyOnComponentLines | float |   |   | X |
| qtyOnComponentLines.id | guid | X | X |   |
| qtyOnComponentLines.fileName | string |   |   | X |
| qtyOnComponentLines.byteSize | int |   |   | X |
| critical | bool |   |   | X |
| critical.id | guid | X | X |   |
| critical.fileName | string |   |   | X |
| critical.byteSize | int |   |   | X |
| commonItemNumber | string |   |   | X |
| commonItemNumber.id | guid | X | X |   |
| commonItemNumber.fileName | string |   |   | X |
| commonItemNumber.byteSize | int |   |   | X |
| unitOfMeasureFilter | string |   |   | X |
| unitOfMeasureFilter.id | guid | X | X |   |
| unitOfMeasureFilter.fileName | string |   |   | X |
| unitOfMeasureFilter.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| pictures | [Media[]](#media) | Yes |
# WorkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| buyFromVendorNumber | string |   |   | X |
| buyFromVendorNumber.id | guid | X | X |   |
| buyFromVendorNumber.fileName | string |   |   | X |
| buyFromVendorNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| expectedReceiptDate | date |   |   | X |
| expectedReceiptDate.id | guid | X | X |   |
| expectedReceiptDate.fileName | string |   |   | X |
| expectedReceiptDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToReceive | float |   |   | X |
| qtyToReceive.id | guid | X | X |   |
| qtyToReceive.fileName | string |   |   | X |
| qtyToReceive.byteSize | int |   |   | X |
| directUnitCost | float |   |   | X |
| directUnitCost.id | guid | X | X |   |
| directUnitCost.fileName | string |   |   | X |
| directUnitCost.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| unitPriceLcy | float |   |   | X |
| unitPriceLcy.id | guid | X | X |   |
| unitPriceLcy.fileName | string |   |   | X |
| unitPriceLcy.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| indirectCostPercent | float |   |   | X |
| indirectCostPercent.id | guid | X | X |   |
| indirectCostPercent.fileName | string |   |   | X |
| indirectCostPercent.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyRcdNotInvoiced | float |   |   | X |
| qtyRcdNotInvoiced.id | guid | X | X |   |
| qtyRcdNotInvoiced.fileName | string |   |   | X |
| qtyRcdNotInvoiced.byteSize | int |   |   | X |
| amtRcdNotInvoiced | float |   |   | X |
| amtRcdNotInvoiced.id | guid | X | X |   |
| amtRcdNotInvoiced.fileName | string |   |   | X |
| amtRcdNotInvoiced.byteSize | int |   |   | X |
| quantityReceived | float |   |   | X |
| quantityReceived.id | guid | X | X |   |
| quantityReceived.fileName | string |   |   | X |
| quantityReceived.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| receiptNumber | string |   |   | X |
| receiptNumber.id | guid | X | X |   |
| receiptNumber.fileName | string |   |   | X |
| receiptNumber.byteSize | int |   |   | X |
| receiptLineNumber | int |   |   | X |
| receiptLineNumber.id | guid | X | X |   |
| receiptLineNumber.fileName | string |   |   | X |
| receiptLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| vendorItemNumber | string |   |   | X |
| vendorItemNumber.id | guid | X | X |   |
| vendorItemNumber.fileName | string |   |   | X |
| vendorItemNumber.byteSize | int |   |   | X |
| salesOrderNumber | string |   |   | X |
| salesOrderNumber.id | guid | X | X |   |
| salesOrderNumber.fileName | string |   |   | X |
| salesOrderNumber.byteSize | int |   |   | X |
| salesOrderLineNumber | int |   |   | X |
| salesOrderLineNumber.id | guid | X | X |   |
| salesOrderLineNumber.fileName | string |   |   | X |
| salesOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| entryPoint | string |   |   | X |
| entryPoint.id | guid | X | X |   |
| entryPoint.fileName | string |   |   | X |
| entryPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| useTax | bool |   |   | X |
| useTax.id | guid | X | X |   |
| useTax.fileName | string |   |   | X |
| useTax.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| outstandingAmtExVatLcy | float |   |   | X |
| outstandingAmtExVatLcy.id | guid | X | X |   |
| outstandingAmtExVatLcy.fileName | string |   |   | X |
| outstandingAmtExVatLcy.byteSize | int |   |   | X |
| aRcdNotInvExVatLcy | float |   |   | X |
| aRcdNotInvExVatLcy.id | guid | X | X |   |
| aRcdNotInvExVatLcy.fileName | string |   |   | X |
| aRcdNotInvExVatLcy.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobLineType | string |   |   | X |
| jobLineType.id | guid | X | X |   |
| jobLineType.fileName | string |   |   | X |
| jobLineType.byteSize | int |   |   | X |
| jobUnitPrice | float |   |   | X |
| jobUnitPrice.id | guid | X | X |   |
| jobUnitPrice.fileName | string |   |   | X |
| jobUnitPrice.byteSize | int |   |   | X |
| jobTotalPrice | float |   |   | X |
| jobTotalPrice.id | guid | X | X |   |
| jobTotalPrice.fileName | string |   |   | X |
| jobTotalPrice.byteSize | int |   |   | X |
| jobLineAmount | float |   |   | X |
| jobLineAmount.id | guid | X | X |   |
| jobLineAmount.fileName | string |   |   | X |
| jobLineAmount.byteSize | int |   |   | X |
| jobLineDiscountAmount | float |   |   | X |
| jobLineDiscountAmount.id | guid | X | X |   |
| jobLineDiscountAmount.fileName | string |   |   | X |
| jobLineDiscountAmount.byteSize | int |   |   | X |
| jobLineDiscountPercent | float |   |   | X |
| jobLineDiscountPercent.id | guid | X | X |   |
| jobLineDiscountPercent.fileName | string |   |   | X |
| jobLineDiscountPercent.byteSize | int |   |   | X |
| jobUnitPriceLcy | float |   |   | X |
| jobUnitPriceLcy.id | guid | X | X |   |
| jobUnitPriceLcy.fileName | string |   |   | X |
| jobUnitPriceLcy.byteSize | int |   |   | X |
| jobTotalPriceLcy | float |   |   | X |
| jobTotalPriceLcy.id | guid | X | X |   |
| jobTotalPriceLcy.fileName | string |   |   | X |
| jobTotalPriceLcy.byteSize | int |   |   | X |
| jobLineAmountLcy | float |   |   | X |
| jobLineAmountLcy.id | guid | X | X |   |
| jobLineAmountLcy.fileName | string |   |   | X |
| jobLineAmountLcy.byteSize | int |   |   | X |
| jobLineDiscAmountLcy | float |   |   | X |
| jobLineDiscAmountLcy.id | guid | X | X |   |
| jobLineDiscAmountLcy.fileName | string |   |   | X |
| jobLineDiscAmountLcy.byteSize | int |   |   | X |
| jobCurrencyFactor | float |   |   | X |
| jobCurrencyFactor.id | guid | X | X |   |
| jobCurrencyFactor.fileName | string |   |   | X |
| jobCurrencyFactor.byteSize | int |   |   | X |
| jobCurrencyCode | string |   |   | X |
| jobCurrencyCode.id | guid | X | X |   |
| jobCurrencyCode.fileName | string |   |   | X |
| jobCurrencyCode.byteSize | int |   |   | X |
| jobPlanningLineNumber | int |   |   | X |
| jobPlanningLineNumber.id | guid | X | X |   |
| jobPlanningLineNumber.fileName | string |   |   | X |
| jobPlanningLineNumber.byteSize | int |   |   | X |
| jobRemainingQty | float |   |   | X |
| jobRemainingQty.id | guid | X | X |   |
| jobRemainingQty.fileName | string |   |   | X |
| jobRemainingQty.byteSize | int |   |   | X |
| jobRemainingQtyBase | float |   |   | X |
| jobRemainingQtyBase.id | guid | X | X |   |
| jobRemainingQtyBase.fileName | string |   |   | X |
| jobRemainingQtyBase.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| prodOrderNumber | string |   |   | X |
| prodOrderNumber.id | guid | X | X |   |
| prodOrderNumber.fileName | string |   |   | X |
| prodOrderNumber.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToReceiveBase | float |   |   | X |
| qtyToReceiveBase.id | guid | X | X |   |
| qtyToReceiveBase.fileName | string |   |   | X |
| qtyToReceiveBase.byteSize | int |   |   | X |
| qtyRcdNotInvoicedBase | float |   |   | X |
| qtyRcdNotInvoicedBase.id | guid | X | X |   |
| qtyRcdNotInvoicedBase.fileName | string |   |   | X |
| qtyRcdNotInvoicedBase.byteSize | int |   |   | X |
| qtyReceivedBase | float |   |   | X |
| qtyReceivedBase.id | guid | X | X |   |
| qtyReceivedBase.fileName | string |   |   | X |
| qtyReceivedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| faPostingType | string |   |   | X |
| faPostingType.id | guid | X | X |   |
| faPostingType.fileName | string |   |   | X |
| faPostingType.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| salvageValue | float |   |   | X |
| salvageValue.id | guid | X | X |   |
| salvageValue.fileName | string |   |   | X |
| salvageValue.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| deprAcquisitionCost | bool |   |   | X |
| deprAcquisitionCost.id | guid | X | X |   |
| deprAcquisitionCost.fileName | string |   |   | X |
| deprAcquisitionCost.byteSize | int |   |   | X |
| maintenanceCode | string |   |   | X |
| maintenanceCode.id | guid | X | X |   |
| maintenanceCode.fileName | string |   |   | X |
| maintenanceCode.byteSize | int |   |   | X |
| insuranceNumber | string |   |   | X |
| insuranceNumber.id | guid | X | X |   |
| insuranceNumber.fileName | string |   |   | X |
| insuranceNumber.byteSize | int |   |   | X |
| budgetedFaNumber | string |   |   | X |
| budgetedFaNumber.id | guid | X | X |   |
| budgetedFaNumber.fileName | string |   |   | X |
| budgetedFaNumber.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderSalesNumber | string |   |   | X |
| specialOrderSalesNumber.id | guid | X | X |   |
| specialOrderSalesNumber.fileName | string |   |   | X |
| specialOrderSalesNumber.byteSize | int |   |   | X |
| specialOrderSalesLineNumber | int |   |   | X |
| specialOrderSalesLineNumber.id | guid | X | X |   |
| specialOrderSalesLineNumber.fileName | string |   |   | X |
| specialOrderSalesLineNumber.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyReceived | bool |   |   | X |
| completelyReceived.id | guid | X | X |   |
| completelyReceived.fileName | string |   |   | X |
| completelyReceived.byteSize | int |   |   | X |
| requestedReceiptDate | date |   |   | X |
| requestedReceiptDate.id | guid | X | X |   |
| requestedReceiptDate.fileName | string |   |   | X |
| requestedReceiptDate.byteSize | int |   |   | X |
| promisedReceiptDate | date |   |   | X |
| promisedReceiptDate.id | guid | X | X |   |
| promisedReceiptDate.fileName | string |   |   | X |
| promisedReceiptDate.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| inboundWhseHandlingTime | string |   |   | X |
| inboundWhseHandlingTime.id | guid | X | X |   |
| inboundWhseHandlingTime.fileName | string |   |   | X |
| inboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedReceiptDate | date |   |   | X |
| plannedReceiptDate.id | guid | X | X |   |
| plannedReceiptDate.fileName | string |   |   | X |
| plannedReceiptDate.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToShip | float |   |   | X |
| returnQtyToShip.id | guid | X | X |   |
| returnQtyToShip.fileName | string |   |   | X |
| returnQtyToShip.byteSize | int |   |   | X |
| returnQtyToShipBase | float |   |   | X |
| returnQtyToShipBase.id | guid | X | X |   |
| returnQtyToShipBase.fileName | string |   |   | X |
| returnQtyToShipBase.byteSize | int |   |   | X |
| returnQtyShippedNotInvd | float |   |   | X |
| returnQtyShippedNotInvd.id | guid | X | X |   |
| returnQtyShippedNotInvd.fileName | string |   |   | X |
| returnQtyShippedNotInvd.byteSize | int |   |   | X |
| retQtyShpdNotInvdBase | float |   |   | X |
| retQtyShpdNotInvdBase.id | guid | X | X |   |
| retQtyShpdNotInvdBase.fileName | string |   |   | X |
| retQtyShpdNotInvdBase.byteSize | int |   |   | X |
| returnShpdNotInvd | float |   |   | X |
| returnShpdNotInvd.id | guid | X | X |   |
| returnShpdNotInvd.fileName | string |   |   | X |
| returnShpdNotInvd.byteSize | int |   |   | X |
| returnShpdNotInvdLcy | float |   |   | X |
| returnShpdNotInvdLcy.id | guid | X | X |   |
| returnShpdNotInvdLcy.fileName | string |   |   | X |
| returnShpdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyShipped | float |   |   | X |
| returnQtyShipped.id | guid | X | X |   |
| returnQtyShipped.fileName | string |   |   | X |
| returnQtyShipped.byteSize | int |   |   | X |
| returnQtyShippedBase | float |   |   | X |
| returnQtyShippedBase.id | guid | X | X |   |
| returnQtyShippedBase.fileName | string |   |   | X |
| returnQtyShippedBase.byteSize | int |   |   | X |
| returnShipmentNumber | string |   |   | X |
| returnShipmentNumber.id | guid | X | X |   |
| returnShipmentNumber.fileName | string |   |   | X |
| returnShipmentNumber.byteSize | int |   |   | X |
| returnShipmentLineNumber | int |   |   | X |
| returnShipmentLineNumber.id | guid | X | X |   |
| returnShipmentLineNumber.fileName | string |   |   | X |
| returnShipmentLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| routingNumber | string |   |   | X |
| routingNumber.id | guid | X | X |   |
| routingNumber.fileName | string |   |   | X |
| routingNumber.byteSize | int |   |   | X |
| operationNumber | string |   |   | X |
| operationNumber.id | guid | X | X |   |
| operationNumber.fileName | string |   |   | X |
| operationNumber.byteSize | int |   |   | X |
| workCenterNumber | string |   |   | X |
| workCenterNumber.id | guid | X | X |   |
| workCenterNumber.fileName | string |   |   | X |
| workCenterNumber.byteSize | int |   |   | X |
| finished | bool |   |   | X |
| finished.id | guid | X | X |   |
| finished.fileName | string |   |   | X |
| finished.byteSize | int |   |   | X |
| prodOrderLineNumber | int |   |   | X |
| prodOrderLineNumber.id | guid | X | X |   |
| prodOrderLineNumber.fileName | string |   |   | X |
| prodOrderLineNumber.byteSize | int |   |   | X |
| overheadRate | float |   |   | X |
| overheadRate.id | guid | X | X |   |
| overheadRate.fileName | string |   |   | X |
| overheadRate.byteSize | int |   |   | X |
| mpsOrder | bool |   |   | X |
| mpsOrder.id | guid | X | X |   |
| mpsOrder.fileName | string |   |   | X |
| mpsOrder.byteSize | int |   |   | X |
| planningFlexibility | string |   |   | X |
| planningFlexibility.id | guid | X | X |   |
| planningFlexibility.fileName | string |   |   | X |
| planningFlexibility.byteSize | int |   |   | X |
| safetyLeadTime | string |   |   | X |
| safetyLeadTime.id | guid | X | X |   |
| safetyLeadTime.fileName | string |   |   | X |
| safetyLeadTime.byteSize | int |   |   | X |
| routingReferenceNumber | int |   |   | X |
| routingReferenceNumber.id | guid | X | X |   |
| routingReferenceNumber.fileName | string |   |   | X |
| routingReferenceNumber.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowPurchaseDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| buyFromVendorNumber | string |   |   | X |
| buyFromVendorNumber.id | guid | X | X |   |
| buyFromVendorNumber.fileName | string |   |   | X |
| buyFromVendorNumber.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| payToName | string |   |   | X |
| payToName.id | guid | X | X |   |
| payToName.fileName | string |   |   | X |
| payToName.byteSize | int |   |   | X |
| payToName2 | string |   |   | X |
| payToName2.id | guid | X | X |   |
| payToName2.fileName | string |   |   | X |
| payToName2.byteSize | int |   |   | X |
| payToAddress | string |   |   | X |
| payToAddress.id | guid | X | X |   |
| payToAddress.fileName | string |   |   | X |
| payToAddress.byteSize | int |   |   | X |
| payToAddress2 | string |   |   | X |
| payToAddress2.id | guid | X | X |   |
| payToAddress2.fileName | string |   |   | X |
| payToAddress2.byteSize | int |   |   | X |
| payToCity | string |   |   | X |
| payToCity.id | guid | X | X |   |
| payToCity.fileName | string |   |   | X |
| payToCity.byteSize | int |   |   | X |
| payToContact | string |   |   | X |
| payToContact.id | guid | X | X |   |
| payToContact.fileName | string |   |   | X |
| payToContact.byteSize | int |   |   | X |
| yourReference | string |   |   | X |
| yourReference.id | guid | X | X |   |
| yourReference.fileName | string |   |   | X |
| yourReference.byteSize | int |   |   | X |
| shipToCode | string |   |   | X |
| shipToCode.id | guid | X | X |   |
| shipToCode.fileName | string |   |   | X |
| shipToCode.byteSize | int |   |   | X |
| shipToName | string |   |   | X |
| shipToName.id | guid | X | X |   |
| shipToName.fileName | string |   |   | X |
| shipToName.byteSize | int |   |   | X |
| shipToName2 | string |   |   | X |
| shipToName2.id | guid | X | X |   |
| shipToName2.fileName | string |   |   | X |
| shipToName2.byteSize | int |   |   | X |
| shipToAddress | string |   |   | X |
| shipToAddress.id | guid | X | X |   |
| shipToAddress.fileName | string |   |   | X |
| shipToAddress.byteSize | int |   |   | X |
| shipToAddress2 | string |   |   | X |
| shipToAddress2.id | guid | X | X |   |
| shipToAddress2.fileName | string |   |   | X |
| shipToAddress2.byteSize | int |   |   | X |
| shipToCity | string |   |   | X |
| shipToCity.id | guid | X | X |   |
| shipToCity.fileName | string |   |   | X |
| shipToCity.byteSize | int |   |   | X |
| shipToContact | string |   |   | X |
| shipToContact.id | guid | X | X |   |
| shipToContact.fileName | string |   |   | X |
| shipToContact.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| expectedReceiptDate | date |   |   | X |
| expectedReceiptDate.id | guid | X | X |   |
| expectedReceiptDate.fileName | string |   |   | X |
| expectedReceiptDate.byteSize | int |   |   | X |
| postingDescription | string |   |   | X |
| postingDescription.id | guid | X | X |   |
| postingDescription.fileName | string |   |   | X |
| postingDescription.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| dueDate | date |   |   | X |
| dueDate.id | guid | X | X |   |
| dueDate.fileName | string |   |   | X |
| dueDate.byteSize | int |   |   | X |
| paymentDiscountPercent | float |   |   | X |
| paymentDiscountPercent.id | guid | X | X |   |
| paymentDiscountPercent.fileName | string |   |   | X |
| paymentDiscountPercent.byteSize | int |   |   | X |
| pmtDiscountDate | date |   |   | X |
| pmtDiscountDate.id | guid | X | X |   |
| pmtDiscountDate.fileName | string |   |   | X |
| pmtDiscountDate.byteSize | int |   |   | X |
| shipmentMethodCode | string |   |   | X |
| shipmentMethodCode.id | guid | X | X |   |
| shipmentMethodCode.fileName | string |   |   | X |
| shipmentMethodCode.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| vendorPostingGroup | string |   |   | X |
| vendorPostingGroup.id | guid | X | X |   |
| vendorPostingGroup.fileName | string |   |   | X |
| vendorPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| currencyFactor | float |   |   | X |
| currencyFactor.id | guid | X | X |   |
| currencyFactor.fileName | string |   |   | X |
| currencyFactor.byteSize | int |   |   | X |
| pricesIncludingVat | bool |   |   | X |
| pricesIncludingVat.id | guid | X | X |   |
| pricesIncludingVat.fileName | string |   |   | X |
| pricesIncludingVat.byteSize | int |   |   | X |
| invoiceDiscCode | string |   |   | X |
| invoiceDiscCode.id | guid | X | X |   |
| invoiceDiscCode.fileName | string |   |   | X |
| invoiceDiscCode.byteSize | int |   |   | X |
| languageCode | string |   |   | X |
| languageCode.id | guid | X | X |   |
| languageCode.fileName | string |   |   | X |
| languageCode.byteSize | int |   |   | X |
| purchaserCode | string |   |   | X |
| purchaserCode.id | guid | X | X |   |
| purchaserCode.fileName | string |   |   | X |
| purchaserCode.byteSize | int |   |   | X |
| orderClass | string |   |   | X |
| orderClass.id | guid | X | X |   |
| orderClass.fileName | string |   |   | X |
| orderClass.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| numberPrinted | int |   |   | X |
| numberPrinted.id | guid | X | X |   |
| numberPrinted.fileName | string |   |   | X |
| numberPrinted.byteSize | int |   |   | X |
| onHold | string |   |   | X |
| onHold.id | guid | X | X |   |
| onHold.fileName | string |   |   | X |
| onHold.byteSize | int |   |   | X |
| appliesToDocType | string |   |   | X |
| appliesToDocType.id | guid | X | X |   |
| appliesToDocType.fileName | string |   |   | X |
| appliesToDocType.byteSize | int |   |   | X |
| appliesToDocNumber | string |   |   | X |
| appliesToDocNumber.id | guid | X | X |   |
| appliesToDocNumber.fileName | string |   |   | X |
| appliesToDocNumber.byteSize | int |   |   | X |
| balAccountNumber | string |   |   | X |
| balAccountNumber.id | guid | X | X |   |
| balAccountNumber.fileName | string |   |   | X |
| balAccountNumber.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| receive | bool |   |   | X |
| receive.id | guid | X | X |   |
| receive.fileName | string |   |   | X |
| receive.byteSize | int |   |   | X |
| invoice | bool |   |   | X |
| invoice.id | guid | X | X |   |
| invoice.fileName | string |   |   | X |
| invoice.byteSize | int |   |   | X |
| printPostedDocuments | bool |   |   | X |
| printPostedDocuments.id | guid | X | X |   |
| printPostedDocuments.fileName | string |   |   | X |
| printPostedDocuments.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| receivingNumber | string |   |   | X |
| receivingNumber.id | guid | X | X |   |
| receivingNumber.fileName | string |   |   | X |
| receivingNumber.byteSize | int |   |   | X |
| postingNumber | string |   |   | X |
| postingNumber.id | guid | X | X |   |
| postingNumber.fileName | string |   |   | X |
| postingNumber.byteSize | int |   |   | X |
| lastReceivingNumber | string |   |   | X |
| lastReceivingNumber.id | guid | X | X |   |
| lastReceivingNumber.fileName | string |   |   | X |
| lastReceivingNumber.byteSize | int |   |   | X |
| lastPostingNumber | string |   |   | X |
| lastPostingNumber.id | guid | X | X |   |
| lastPostingNumber.fileName | string |   |   | X |
| lastPostingNumber.byteSize | int |   |   | X |
| vendorOrderNumber | string |   |   | X |
| vendorOrderNumber.id | guid | X | X |   |
| vendorOrderNumber.fileName | string |   |   | X |
| vendorOrderNumber.byteSize | int |   |   | X |
| vendorShipmentNumber | string |   |   | X |
| vendorShipmentNumber.id | guid | X | X |   |
| vendorShipmentNumber.fileName | string |   |   | X |
| vendorShipmentNumber.byteSize | int |   |   | X |
| vendorInvoiceNumber | string |   |   | X |
| vendorInvoiceNumber.id | guid | X | X |   |
| vendorInvoiceNumber.fileName | string |   |   | X |
| vendorInvoiceNumber.byteSize | int |   |   | X |
| vendorCrMemoNumber | string |   |   | X |
| vendorCrMemoNumber.id | guid | X | X |   |
| vendorCrMemoNumber.fileName | string |   |   | X |
| vendorCrMemoNumber.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| reasonCode | string |   |   | X |
| reasonCode.id | guid | X | X |   |
| reasonCode.fileName | string |   |   | X |
| reasonCode.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| vatCountryRegionCode | string |   |   | X |
| vatCountryRegionCode.id | guid | X | X |   |
| vatCountryRegionCode.fileName | string |   |   | X |
| vatCountryRegionCode.byteSize | int |   |   | X |
| buyFromVendorName | string |   |   | X |
| buyFromVendorName.id | guid | X | X |   |
| buyFromVendorName.fileName | string |   |   | X |
| buyFromVendorName.byteSize | int |   |   | X |
| buyFromVendorName2 | string |   |   | X |
| buyFromVendorName2.id | guid | X | X |   |
| buyFromVendorName2.fileName | string |   |   | X |
| buyFromVendorName2.byteSize | int |   |   | X |
| buyFromAddress | string |   |   | X |
| buyFromAddress.id | guid | X | X |   |
| buyFromAddress.fileName | string |   |   | X |
| buyFromAddress.byteSize | int |   |   | X |
| buyFromAddress2 | string |   |   | X |
| buyFromAddress2.id | guid | X | X |   |
| buyFromAddress2.fileName | string |   |   | X |
| buyFromAddress2.byteSize | int |   |   | X |
| buyFromCity | string |   |   | X |
| buyFromCity.id | guid | X | X |   |
| buyFromCity.fileName | string |   |   | X |
| buyFromCity.byteSize | int |   |   | X |
| buyFromContact | string |   |   | X |
| buyFromContact.id | guid | X | X |   |
| buyFromContact.fileName | string |   |   | X |
| buyFromContact.byteSize | int |   |   | X |
| payToPostCode | string |   |   | X |
| payToPostCode.id | guid | X | X |   |
| payToPostCode.fileName | string |   |   | X |
| payToPostCode.byteSize | int |   |   | X |
| payToCounty | string |   |   | X |
| payToCounty.id | guid | X | X |   |
| payToCounty.fileName | string |   |   | X |
| payToCounty.byteSize | int |   |   | X |
| payToCountryRegionCode | string |   |   | X |
| payToCountryRegionCode.id | guid | X | X |   |
| payToCountryRegionCode.fileName | string |   |   | X |
| payToCountryRegionCode.byteSize | int |   |   | X |
| buyFromPostCode | string |   |   | X |
| buyFromPostCode.id | guid | X | X |   |
| buyFromPostCode.fileName | string |   |   | X |
| buyFromPostCode.byteSize | int |   |   | X |
| buyFromCounty | string |   |   | X |
| buyFromCounty.id | guid | X | X |   |
| buyFromCounty.fileName | string |   |   | X |
| buyFromCounty.byteSize | int |   |   | X |
| buyFromCountryRegionCode | string |   |   | X |
| buyFromCountryRegionCode.id | guid | X | X |   |
| buyFromCountryRegionCode.fileName | string |   |   | X |
| buyFromCountryRegionCode.byteSize | int |   |   | X |
| shipToPostCode | string |   |   | X |
| shipToPostCode.id | guid | X | X |   |
| shipToPostCode.fileName | string |   |   | X |
| shipToPostCode.byteSize | int |   |   | X |
| shipToCounty | string |   |   | X |
| shipToCounty.id | guid | X | X |   |
| shipToCounty.fileName | string |   |   | X |
| shipToCounty.byteSize | int |   |   | X |
| shipToCountryRegionCode | string |   |   | X |
| shipToCountryRegionCode.id | guid | X | X |   |
| shipToCountryRegionCode.fileName | string |   |   | X |
| shipToCountryRegionCode.byteSize | int |   |   | X |
| balAccountType | string |   |   | X |
| balAccountType.id | guid | X | X |   |
| balAccountType.fileName | string |   |   | X |
| balAccountType.byteSize | int |   |   | X |
| orderAddressCode | string |   |   | X |
| orderAddressCode.id | guid | X | X |   |
| orderAddressCode.fileName | string |   |   | X |
| orderAddressCode.byteSize | int |   |   | X |
| entryPoint | string |   |   | X |
| entryPoint.id | guid | X | X |   |
| entryPoint.fileName | string |   |   | X |
| entryPoint.byteSize | int |   |   | X |
| correction | bool |   |   | X |
| correction.id | guid | X | X |   |
| correction.fileName | string |   |   | X |
| correction.byteSize | int |   |   | X |
| documentDate | date |   |   | X |
| documentDate.id | guid | X | X |   |
| documentDate.fileName | string |   |   | X |
| documentDate.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| postingNumberSeries | string |   |   | X |
| postingNumberSeries.id | guid | X | X |   |
| postingNumberSeries.fileName | string |   |   | X |
| postingNumberSeries.byteSize | int |   |   | X |
| receivingNumberSeries | string |   |   | X |
| receivingNumberSeries.id | guid | X | X |   |
| receivingNumberSeries.fileName | string |   |   | X |
| receivingNumberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| appliesToId | string |   |   | X |
| appliesToId.id | guid | X | X |   |
| appliesToId.fileName | string |   |   | X |
| appliesToId.byteSize | int |   |   | X |
| vatBaseDiscountPercent | float |   |   | X |
| vatBaseDiscountPercent.id | guid | X | X |   |
| vatBaseDiscountPercent.fileName | string |   |   | X |
| vatBaseDiscountPercent.byteSize | int |   |   | X |
| status | string |   |   | X |
| status.id | guid | X | X |   |
| status.fileName | string |   |   | X |
| status.byteSize | int |   |   | X |
| invoiceDiscountCalculation | string |   |   | X |
| invoiceDiscountCalculation.id | guid | X | X |   |
| invoiceDiscountCalculation.fileName | string |   |   | X |
| invoiceDiscountCalculation.byteSize | int |   |   | X |
| invoiceDiscountValue | float |   |   | X |
| invoiceDiscountValue.id | guid | X | X |   |
| invoiceDiscountValue.fileName | string |   |   | X |
| invoiceDiscountValue.byteSize | int |   |   | X |
| sendIcDocument | bool |   |   | X |
| sendIcDocument.id | guid | X | X |   |
| sendIcDocument.fileName | string |   |   | X |
| sendIcDocument.byteSize | int |   |   | X |
| icStatus | string |   |   | X |
| icStatus.id | guid | X | X |   |
| icStatus.fileName | string |   |   | X |
| icStatus.byteSize | int |   |   | X |
| buyFromIcPartnerCode | string |   |   | X |
| buyFromIcPartnerCode.id | guid | X | X |   |
| buyFromIcPartnerCode.fileName | string |   |   | X |
| buyFromIcPartnerCode.byteSize | int |   |   | X |
| payToIcPartnerCode | string |   |   | X |
| payToIcPartnerCode.id | guid | X | X |   |
| payToIcPartnerCode.fileName | string |   |   | X |
| payToIcPartnerCode.byteSize | int |   |   | X |
| icDirection | string |   |   | X |
| icDirection.id | guid | X | X |   |
| icDirection.fileName | string |   |   | X |
| icDirection.byteSize | int |   |   | X |
| prepaymentNumber | string |   |   | X |
| prepaymentNumber.id | guid | X | X |   |
| prepaymentNumber.fileName | string |   |   | X |
| prepaymentNumber.byteSize | int |   |   | X |
| lastPrepaymentNumber | string |   |   | X |
| lastPrepaymentNumber.id | guid | X | X |   |
| lastPrepaymentNumber.fileName | string |   |   | X |
| lastPrepaymentNumber.byteSize | int |   |   | X |
| prepmtCrMemoNumber | string |   |   | X |
| prepmtCrMemoNumber.id | guid | X | X |   |
| prepmtCrMemoNumber.fileName | string |   |   | X |
| prepmtCrMemoNumber.byteSize | int |   |   | X |
| lastPrepmtCrMemoNumber | string |   |   | X |
| lastPrepmtCrMemoNumber.id | guid | X | X |   |
| lastPrepmtCrMemoNumber.fileName | string |   |   | X |
| lastPrepmtCrMemoNumber.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepaymentNumberSeries | string |   |   | X |
| prepaymentNumberSeries.id | guid | X | X |   |
| prepaymentNumberSeries.fileName | string |   |   | X |
| prepaymentNumberSeries.byteSize | int |   |   | X |
| compressPrepayment | bool |   |   | X |
| compressPrepayment.id | guid | X | X |   |
| compressPrepayment.fileName | string |   |   | X |
| compressPrepayment.byteSize | int |   |   | X |
| prepaymentDueDate | date |   |   | X |
| prepaymentDueDate.id | guid | X | X |   |
| prepaymentDueDate.fileName | string |   |   | X |
| prepaymentDueDate.byteSize | int |   |   | X |
| prepmtCrMemoNumberSeries | string |   |   | X |
| prepmtCrMemoNumberSeries.id | guid | X | X |   |
| prepmtCrMemoNumberSeries.fileName | string |   |   | X |
| prepmtCrMemoNumberSeries.byteSize | int |   |   | X |
| prepmtPostingDescription | string |   |   | X |
| prepmtPostingDescription.id | guid | X | X |   |
| prepmtPostingDescription.fileName | string |   |   | X |
| prepmtPostingDescription.byteSize | int |   |   | X |
| prepmtPmtDiscountDate | date |   |   | X |
| prepmtPmtDiscountDate.id | guid | X | X |   |
| prepmtPmtDiscountDate.fileName | string |   |   | X |
| prepmtPmtDiscountDate.byteSize | int |   |   | X |
| prepmtPaymentTermsCode | string |   |   | X |
| prepmtPaymentTermsCode.id | guid | X | X |   |
| prepmtPaymentTermsCode.fileName | string |   |   | X |
| prepmtPaymentTermsCode.byteSize | int |   |   | X |
| prepmtPaymentDiscountPercent | float |   |   | X |
| prepmtPaymentDiscountPercent.id | guid | X | X |   |
| prepmtPaymentDiscountPercent.fileName | string |   |   | X |
| prepmtPaymentDiscountPercent.byteSize | int |   |   | X |
| quoteNumber | string |   |   | X |
| quoteNumber.id | guid | X | X |   |
| quoteNumber.fileName | string |   |   | X |
| quoteNumber.byteSize | int |   |   | X |
| jobQueueStatus | string |   |   | X |
| jobQueueStatus.id | guid | X | X |   |
| jobQueueStatus.fileName | string |   |   | X |
| jobQueueStatus.byteSize | int |   |   | X |
| jobQueueEntryId | guid |   |   | X |
| jobQueueEntryId.id | guid | X | X |   |
| jobQueueEntryId.fileName | string |   |   | X |
| jobQueueEntryId.byteSize | int |   |   | X |
| incomingDocumentEntryNumber | int |   |   | X |
| incomingDocumentEntryNumber.id | guid | X | X |   |
| incomingDocumentEntryNumber.fileName | string |   |   | X |
| incomingDocumentEntryNumber.byteSize | int |   |   | X |
| creditorNumber | string |   |   | X |
| creditorNumber.id | guid | X | X |   |
| creditorNumber.fileName | string |   |   | X |
| creditorNumber.byteSize | int |   |   | X |
| paymentReference | string |   |   | X |
| paymentReference.id | guid | X | X |   |
| paymentReference.fileName | string |   |   | X |
| paymentReference.byteSize | int |   |   | X |
| aRcdNotInvExVatLcy | float |   |   | X |
| aRcdNotInvExVatLcy.id | guid | X | X |   |
| aRcdNotInvExVatLcy.fileName | string |   |   | X |
| aRcdNotInvExVatLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| invoiceDiscountAmount | float |   |   | X |
| invoiceDiscountAmount.id | guid | X | X |   |
| invoiceDiscountAmount.fileName | string |   |   | X |
| invoiceDiscountAmount.byteSize | int |   |   | X |
| numberOfArchivedVersions | int |   |   | X |
| numberOfArchivedVersions.id | guid | X | X |   |
| numberOfArchivedVersions.fileName | string |   |   | X |
| numberOfArchivedVersions.byteSize | int |   |   | X |
| docNumberOccurrence | int |   |   | X |
| docNumberOccurrence.id | guid | X | X |   |
| docNumberOccurrence.fileName | string |   |   | X |
| docNumberOccurrence.byteSize | int |   |   | X |
| campaignNumber | string |   |   | X |
| campaignNumber.id | guid | X | X |   |
| campaignNumber.fileName | string |   |   | X |
| campaignNumber.byteSize | int |   |   | X |
| buyFromContactNumber | string |   |   | X |
| buyFromContactNumber.id | guid | X | X |   |
| buyFromContactNumber.fileName | string |   |   | X |
| buyFromContactNumber.byteSize | int |   |   | X |
| payToContactNumber | string |   |   | X |
| payToContactNumber.id | guid | X | X |   |
| payToContactNumber.fileName | string |   |   | X |
| payToContactNumber.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| completelyReceived | bool |   |   | X |
| completelyReceived.id | guid | X | X |   |
| completelyReceived.fileName | string |   |   | X |
| completelyReceived.byteSize | int |   |   | X |
| postingFromWhseRef | int |   |   | X |
| postingFromWhseRef.id | guid | X | X |   |
| postingFromWhseRef.fileName | string |   |   | X |
| postingFromWhseRef.byteSize | int |   |   | X |
| locationFilter | string |   |   | X |
| locationFilter.id | guid | X | X |   |
| locationFilter.fileName | string |   |   | X |
| locationFilter.byteSize | int |   |   | X |
| requestedReceiptDate | date |   |   | X |
| requestedReceiptDate.id | guid | X | X |   |
| requestedReceiptDate.fileName | string |   |   | X |
| requestedReceiptDate.byteSize | int |   |   | X |
| promisedReceiptDate | date |   |   | X |
| promisedReceiptDate.id | guid | X | X |   |
| promisedReceiptDate.fileName | string |   |   | X |
| promisedReceiptDate.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| inboundWhseHandlingTime | string |   |   | X |
| inboundWhseHandlingTime.id | guid | X | X |   |
| inboundWhseHandlingTime.fileName | string |   |   | X |
| inboundWhseHandlingTime.byteSize | int |   |   | X |
| vendorAuthorizationNumber | string |   |   | X |
| vendorAuthorizationNumber.id | guid | X | X |   |
| vendorAuthorizationNumber.fileName | string |   |   | X |
| vendorAuthorizationNumber.byteSize | int |   |   | X |
| returnShipmentNumber | string |   |   | X |
| returnShipmentNumber.id | guid | X | X |   |
| returnShipmentNumber.fileName | string |   |   | X |
| returnShipmentNumber.byteSize | int |   |   | X |
| returnShipmentNumberSeries | string |   |   | X |
| returnShipmentNumberSeries.id | guid | X | X |   |
| returnShipmentNumberSeries.fileName | string |   |   | X |
| returnShipmentNumberSeries.byteSize | int |   |   | X |
| ship | bool |   |   | X |
| ship.id | guid | X | X |   |
| ship.fileName | string |   |   | X |
| ship.byteSize | int |   |   | X |
| lastReturnShipmentNumber | string |   |   | X |
| lastReturnShipmentNumber.id | guid | X | X |   |
| lastReturnShipmentNumber.fileName | string |   |   | X |
| lastReturnShipmentNumber.byteSize | int |   |   | X |
| assignedUserId | string |   |   | X |
| assignedUserId.id | guid | X | X |   |
| assignedUserId.fileName | string |   |   | X |
| assignedUserId.byteSize | int |   |   | X |
| pendingApprovals | int |   |   | X |
| pendingApprovals.id | guid | X | X |   |
| pendingApprovals.fileName | string |   |   | X |
| pendingApprovals.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowPurchaseDocumentsworkflowPurchaseDocumentLines | [WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]](#workflowpurchasedocumentsworkflowpurchasedocumentlines) | Yes |
# WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| buyFromVendorNumber | string |   |   | X |
| buyFromVendorNumber.id | guid | X | X |   |
| buyFromVendorNumber.fileName | string |   |   | X |
| buyFromVendorNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| expectedReceiptDate | date |   |   | X |
| expectedReceiptDate.id | guid | X | X |   |
| expectedReceiptDate.fileName | string |   |   | X |
| expectedReceiptDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToReceive | float |   |   | X |
| qtyToReceive.id | guid | X | X |   |
| qtyToReceive.fileName | string |   |   | X |
| qtyToReceive.byteSize | int |   |   | X |
| directUnitCost | float |   |   | X |
| directUnitCost.id | guid | X | X |   |
| directUnitCost.fileName | string |   |   | X |
| directUnitCost.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| unitPriceLcy | float |   |   | X |
| unitPriceLcy.id | guid | X | X |   |
| unitPriceLcy.fileName | string |   |   | X |
| unitPriceLcy.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| indirectCostPercent | float |   |   | X |
| indirectCostPercent.id | guid | X | X |   |
| indirectCostPercent.fileName | string |   |   | X |
| indirectCostPercent.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyRcdNotInvoiced | float |   |   | X |
| qtyRcdNotInvoiced.id | guid | X | X |   |
| qtyRcdNotInvoiced.fileName | string |   |   | X |
| qtyRcdNotInvoiced.byteSize | int |   |   | X |
| amtRcdNotInvoiced | float |   |   | X |
| amtRcdNotInvoiced.id | guid | X | X |   |
| amtRcdNotInvoiced.fileName | string |   |   | X |
| amtRcdNotInvoiced.byteSize | int |   |   | X |
| quantityReceived | float |   |   | X |
| quantityReceived.id | guid | X | X |   |
| quantityReceived.fileName | string |   |   | X |
| quantityReceived.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| receiptNumber | string |   |   | X |
| receiptNumber.id | guid | X | X |   |
| receiptNumber.fileName | string |   |   | X |
| receiptNumber.byteSize | int |   |   | X |
| receiptLineNumber | int |   |   | X |
| receiptLineNumber.id | guid | X | X |   |
| receiptLineNumber.fileName | string |   |   | X |
| receiptLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| vendorItemNumber | string |   |   | X |
| vendorItemNumber.id | guid | X | X |   |
| vendorItemNumber.fileName | string |   |   | X |
| vendorItemNumber.byteSize | int |   |   | X |
| salesOrderNumber | string |   |   | X |
| salesOrderNumber.id | guid | X | X |   |
| salesOrderNumber.fileName | string |   |   | X |
| salesOrderNumber.byteSize | int |   |   | X |
| salesOrderLineNumber | int |   |   | X |
| salesOrderLineNumber.id | guid | X | X |   |
| salesOrderLineNumber.fileName | string |   |   | X |
| salesOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| entryPoint | string |   |   | X |
| entryPoint.id | guid | X | X |   |
| entryPoint.fileName | string |   |   | X |
| entryPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| useTax | bool |   |   | X |
| useTax.id | guid | X | X |   |
| useTax.fileName | string |   |   | X |
| useTax.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| outstandingAmtExVatLcy | float |   |   | X |
| outstandingAmtExVatLcy.id | guid | X | X |   |
| outstandingAmtExVatLcy.fileName | string |   |   | X |
| outstandingAmtExVatLcy.byteSize | int |   |   | X |
| aRcdNotInvExVatLcy | float |   |   | X |
| aRcdNotInvExVatLcy.id | guid | X | X |   |
| aRcdNotInvExVatLcy.fileName | string |   |   | X |
| aRcdNotInvExVatLcy.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobLineType | string |   |   | X |
| jobLineType.id | guid | X | X |   |
| jobLineType.fileName | string |   |   | X |
| jobLineType.byteSize | int |   |   | X |
| jobUnitPrice | float |   |   | X |
| jobUnitPrice.id | guid | X | X |   |
| jobUnitPrice.fileName | string |   |   | X |
| jobUnitPrice.byteSize | int |   |   | X |
| jobTotalPrice | float |   |   | X |
| jobTotalPrice.id | guid | X | X |   |
| jobTotalPrice.fileName | string |   |   | X |
| jobTotalPrice.byteSize | int |   |   | X |
| jobLineAmount | float |   |   | X |
| jobLineAmount.id | guid | X | X |   |
| jobLineAmount.fileName | string |   |   | X |
| jobLineAmount.byteSize | int |   |   | X |
| jobLineDiscountAmount | float |   |   | X |
| jobLineDiscountAmount.id | guid | X | X |   |
| jobLineDiscountAmount.fileName | string |   |   | X |
| jobLineDiscountAmount.byteSize | int |   |   | X |
| jobLineDiscountPercent | float |   |   | X |
| jobLineDiscountPercent.id | guid | X | X |   |
| jobLineDiscountPercent.fileName | string |   |   | X |
| jobLineDiscountPercent.byteSize | int |   |   | X |
| jobUnitPriceLcy | float |   |   | X |
| jobUnitPriceLcy.id | guid | X | X |   |
| jobUnitPriceLcy.fileName | string |   |   | X |
| jobUnitPriceLcy.byteSize | int |   |   | X |
| jobTotalPriceLcy | float |   |   | X |
| jobTotalPriceLcy.id | guid | X | X |   |
| jobTotalPriceLcy.fileName | string |   |   | X |
| jobTotalPriceLcy.byteSize | int |   |   | X |
| jobLineAmountLcy | float |   |   | X |
| jobLineAmountLcy.id | guid | X | X |   |
| jobLineAmountLcy.fileName | string |   |   | X |
| jobLineAmountLcy.byteSize | int |   |   | X |
| jobLineDiscAmountLcy | float |   |   | X |
| jobLineDiscAmountLcy.id | guid | X | X |   |
| jobLineDiscAmountLcy.fileName | string |   |   | X |
| jobLineDiscAmountLcy.byteSize | int |   |   | X |
| jobCurrencyFactor | float |   |   | X |
| jobCurrencyFactor.id | guid | X | X |   |
| jobCurrencyFactor.fileName | string |   |   | X |
| jobCurrencyFactor.byteSize | int |   |   | X |
| jobCurrencyCode | string |   |   | X |
| jobCurrencyCode.id | guid | X | X |   |
| jobCurrencyCode.fileName | string |   |   | X |
| jobCurrencyCode.byteSize | int |   |   | X |
| jobPlanningLineNumber | int |   |   | X |
| jobPlanningLineNumber.id | guid | X | X |   |
| jobPlanningLineNumber.fileName | string |   |   | X |
| jobPlanningLineNumber.byteSize | int |   |   | X |
| jobRemainingQty | float |   |   | X |
| jobRemainingQty.id | guid | X | X |   |
| jobRemainingQty.fileName | string |   |   | X |
| jobRemainingQty.byteSize | int |   |   | X |
| jobRemainingQtyBase | float |   |   | X |
| jobRemainingQtyBase.id | guid | X | X |   |
| jobRemainingQtyBase.fileName | string |   |   | X |
| jobRemainingQtyBase.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| prodOrderNumber | string |   |   | X |
| prodOrderNumber.id | guid | X | X |   |
| prodOrderNumber.fileName | string |   |   | X |
| prodOrderNumber.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToReceiveBase | float |   |   | X |
| qtyToReceiveBase.id | guid | X | X |   |
| qtyToReceiveBase.fileName | string |   |   | X |
| qtyToReceiveBase.byteSize | int |   |   | X |
| qtyRcdNotInvoicedBase | float |   |   | X |
| qtyRcdNotInvoicedBase.id | guid | X | X |   |
| qtyRcdNotInvoicedBase.fileName | string |   |   | X |
| qtyRcdNotInvoicedBase.byteSize | int |   |   | X |
| qtyReceivedBase | float |   |   | X |
| qtyReceivedBase.id | guid | X | X |   |
| qtyReceivedBase.fileName | string |   |   | X |
| qtyReceivedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| faPostingType | string |   |   | X |
| faPostingType.id | guid | X | X |   |
| faPostingType.fileName | string |   |   | X |
| faPostingType.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| salvageValue | float |   |   | X |
| salvageValue.id | guid | X | X |   |
| salvageValue.fileName | string |   |   | X |
| salvageValue.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| deprAcquisitionCost | bool |   |   | X |
| deprAcquisitionCost.id | guid | X | X |   |
| deprAcquisitionCost.fileName | string |   |   | X |
| deprAcquisitionCost.byteSize | int |   |   | X |
| maintenanceCode | string |   |   | X |
| maintenanceCode.id | guid | X | X |   |
| maintenanceCode.fileName | string |   |   | X |
| maintenanceCode.byteSize | int |   |   | X |
| insuranceNumber | string |   |   | X |
| insuranceNumber.id | guid | X | X |   |
| insuranceNumber.fileName | string |   |   | X |
| insuranceNumber.byteSize | int |   |   | X |
| budgetedFaNumber | string |   |   | X |
| budgetedFaNumber.id | guid | X | X |   |
| budgetedFaNumber.fileName | string |   |   | X |
| budgetedFaNumber.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderSalesNumber | string |   |   | X |
| specialOrderSalesNumber.id | guid | X | X |   |
| specialOrderSalesNumber.fileName | string |   |   | X |
| specialOrderSalesNumber.byteSize | int |   |   | X |
| specialOrderSalesLineNumber | int |   |   | X |
| specialOrderSalesLineNumber.id | guid | X | X |   |
| specialOrderSalesLineNumber.fileName | string |   |   | X |
| specialOrderSalesLineNumber.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyReceived | bool |   |   | X |
| completelyReceived.id | guid | X | X |   |
| completelyReceived.fileName | string |   |   | X |
| completelyReceived.byteSize | int |   |   | X |
| requestedReceiptDate | date |   |   | X |
| requestedReceiptDate.id | guid | X | X |   |
| requestedReceiptDate.fileName | string |   |   | X |
| requestedReceiptDate.byteSize | int |   |   | X |
| promisedReceiptDate | date |   |   | X |
| promisedReceiptDate.id | guid | X | X |   |
| promisedReceiptDate.fileName | string |   |   | X |
| promisedReceiptDate.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| inboundWhseHandlingTime | string |   |   | X |
| inboundWhseHandlingTime.id | guid | X | X |   |
| inboundWhseHandlingTime.fileName | string |   |   | X |
| inboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedReceiptDate | date |   |   | X |
| plannedReceiptDate.id | guid | X | X |   |
| plannedReceiptDate.fileName | string |   |   | X |
| plannedReceiptDate.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToShip | float |   |   | X |
| returnQtyToShip.id | guid | X | X |   |
| returnQtyToShip.fileName | string |   |   | X |
| returnQtyToShip.byteSize | int |   |   | X |
| returnQtyToShipBase | float |   |   | X |
| returnQtyToShipBase.id | guid | X | X |   |
| returnQtyToShipBase.fileName | string |   |   | X |
| returnQtyToShipBase.byteSize | int |   |   | X |
| returnQtyShippedNotInvd | float |   |   | X |
| returnQtyShippedNotInvd.id | guid | X | X |   |
| returnQtyShippedNotInvd.fileName | string |   |   | X |
| returnQtyShippedNotInvd.byteSize | int |   |   | X |
| retQtyShpdNotInvdBase | float |   |   | X |
| retQtyShpdNotInvdBase.id | guid | X | X |   |
| retQtyShpdNotInvdBase.fileName | string |   |   | X |
| retQtyShpdNotInvdBase.byteSize | int |   |   | X |
| returnShpdNotInvd | float |   |   | X |
| returnShpdNotInvd.id | guid | X | X |   |
| returnShpdNotInvd.fileName | string |   |   | X |
| returnShpdNotInvd.byteSize | int |   |   | X |
| returnShpdNotInvdLcy | float |   |   | X |
| returnShpdNotInvdLcy.id | guid | X | X |   |
| returnShpdNotInvdLcy.fileName | string |   |   | X |
| returnShpdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyShipped | float |   |   | X |
| returnQtyShipped.id | guid | X | X |   |
| returnQtyShipped.fileName | string |   |   | X |
| returnQtyShipped.byteSize | int |   |   | X |
| returnQtyShippedBase | float |   |   | X |
| returnQtyShippedBase.id | guid | X | X |   |
| returnQtyShippedBase.fileName | string |   |   | X |
| returnQtyShippedBase.byteSize | int |   |   | X |
| returnShipmentNumber | string |   |   | X |
| returnShipmentNumber.id | guid | X | X |   |
| returnShipmentNumber.fileName | string |   |   | X |
| returnShipmentNumber.byteSize | int |   |   | X |
| returnShipmentLineNumber | int |   |   | X |
| returnShipmentLineNumber.id | guid | X | X |   |
| returnShipmentLineNumber.fileName | string |   |   | X |
| returnShipmentLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| routingNumber | string |   |   | X |
| routingNumber.id | guid | X | X |   |
| routingNumber.fileName | string |   |   | X |
| routingNumber.byteSize | int |   |   | X |
| operationNumber | string |   |   | X |
| operationNumber.id | guid | X | X |   |
| operationNumber.fileName | string |   |   | X |
| operationNumber.byteSize | int |   |   | X |
| workCenterNumber | string |   |   | X |
| workCenterNumber.id | guid | X | X |   |
| workCenterNumber.fileName | string |   |   | X |
| workCenterNumber.byteSize | int |   |   | X |
| finished | bool |   |   | X |
| finished.id | guid | X | X |   |
| finished.fileName | string |   |   | X |
| finished.byteSize | int |   |   | X |
| prodOrderLineNumber | int |   |   | X |
| prodOrderLineNumber.id | guid | X | X |   |
| prodOrderLineNumber.fileName | string |   |   | X |
| prodOrderLineNumber.byteSize | int |   |   | X |
| overheadRate | float |   |   | X |
| overheadRate.id | guid | X | X |   |
| overheadRate.fileName | string |   |   | X |
| overheadRate.byteSize | int |   |   | X |
| mpsOrder | bool |   |   | X |
| mpsOrder.id | guid | X | X |   |
| mpsOrder.fileName | string |   |   | X |
| mpsOrder.byteSize | int |   |   | X |
| planningFlexibility | string |   |   | X |
| planningFlexibility.id | guid | X | X |   |
| planningFlexibility.fileName | string |   |   | X |
| planningFlexibility.byteSize | int |   |   | X |
| safetyLeadTime | string |   |   | X |
| safetyLeadTime.id | guid | X | X |   |
| safetyLeadTime.fileName | string |   |   | X |
| safetyLeadTime.byteSize | int |   |   | X |
| routingReferenceNumber | int |   |   | X |
| routingReferenceNumber.id | guid | X | X |   |
| routingReferenceNumber.fileName | string |   |   | X |
| routingReferenceNumber.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| shipmentDate | date |   |   | X |
| shipmentDate.id | guid | X | X |   |
| shipmentDate.fileName | string |   |   | X |
| shipmentDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToShip | float |   |   | X |
| qtyToShip.id | guid | X | X |   |
| qtyToShip.fileName | string |   |   | X |
| qtyToShip.byteSize | int |   |   | X |
| unitPrice | float |   |   | X |
| unitPrice.id | guid | X | X |   |
| unitPrice.fileName | string |   |   | X |
| unitPrice.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| workTypeCode | string |   |   | X |
| workTypeCode.id | guid | X | X |   |
| workTypeCode.fileName | string |   |   | X |
| workTypeCode.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyShippedNotInvoiced | float |   |   | X |
| qtyShippedNotInvoiced.id | guid | X | X |   |
| qtyShippedNotInvoiced.fileName | string |   |   | X |
| qtyShippedNotInvoiced.byteSize | int |   |   | X |
| shippedNotInvoiced | float |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| quantityShipped | float |   |   | X |
| quantityShipped.id | guid | X | X |   |
| quantityShipped.fileName | string |   |   | X |
| quantityShipped.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| shipmentNumber | string |   |   | X |
| shipmentNumber.id | guid | X | X |   |
| shipmentNumber.fileName | string |   |   | X |
| shipmentNumber.byteSize | int |   |   | X |
| shipmentLineNumber | int |   |   | X |
| shipmentLineNumber.id | guid | X | X |   |
| shipmentLineNumber.fileName | string |   |   | X |
| shipmentLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| purchaseOrderNumber | string |   |   | X |
| purchaseOrderNumber.id | guid | X | X |   |
| purchaseOrderNumber.fileName | string |   |   | X |
| purchaseOrderNumber.byteSize | int |   |   | X |
| purchOrderLineNumber | int |   |   | X |
| purchOrderLineNumber.id | guid | X | X |   |
| purchOrderLineNumber.fileName | string |   |   | X |
| purchOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| exitPoint | string |   |   | X |
| exitPoint.id | guid | X | X |   |
| exitPoint.fileName | string |   |   | X |
| exitPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxCategory | string |   |   | X |
| taxCategory.id | guid | X | X |   |
| taxCategory.fileName | string |   |   | X |
| taxCategory.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| vatClauseCode | string |   |   | X |
| vatClauseCode.id | guid | X | X |   |
| vatClauseCode.fileName | string |   |   | X |
| vatClauseCode.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| shippedNotInvoicedLcy | float |   |   | X |
| shippedNotInvoicedLcy.id | guid | X | X |   |
| shippedNotInvoicedLcy.fileName | string |   |   | X |
| shippedNotInvoicedLcy.byteSize | int |   |   | X |
| shippedNotInvLcyNoVat | float |   |   | X |
| shippedNotInvLcyNoVat.id | guid | X | X |   |
| shippedNotInvLcyNoVat.fileName | string |   |   | X |
| shippedNotInvLcyNoVat.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| qtyToAssembleToOrder | float |   |   | X |
| qtyToAssembleToOrder.id | guid | X | X |   |
| qtyToAssembleToOrder.fileName | string |   |   | X |
| qtyToAssembleToOrder.byteSize | int |   |   | X |
| qtyToAsmToOrderBase | float |   |   | X |
| qtyToAsmToOrderBase.id | guid | X | X |   |
| qtyToAsmToOrderBase.fileName | string |   |   | X |
| qtyToAsmToOrderBase.byteSize | int |   |   | X |
| atoWhseOutstandingQty | float |   |   | X |
| atoWhseOutstandingQty.id | guid | X | X |   |
| atoWhseOutstandingQty.fileName | string |   |   | X |
| atoWhseOutstandingQty.byteSize | int |   |   | X |
| atoWhseOutstdQtyBase | float |   |   | X |
| atoWhseOutstdQtyBase.id | guid | X | X |   |
| atoWhseOutstdQtyBase.fileName | string |   |   | X |
| atoWhseOutstdQtyBase.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobContractEntryNumber | int |   |   | X |
| jobContractEntryNumber.id | guid | X | X |   |
| jobContractEntryNumber.fileName | string |   |   | X |
| jobContractEntryNumber.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| planned | bool |   |   | X |
| planned.id | guid | X | X |   |
| planned.fileName | string |   |   | X |
| planned.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToShipBase | float |   |   | X |
| qtyToShipBase.id | guid | X | X |   |
| qtyToShipBase.fileName | string |   |   | X |
| qtyToShipBase.byteSize | int |   |   | X |
| qtyShippedNotInvdBase | float |   |   | X |
| qtyShippedNotInvdBase.id | guid | X | X |   |
| qtyShippedNotInvdBase.fileName | string |   |   | X |
| qtyShippedNotInvdBase.byteSize | int |   |   | X |
| qtyShippedBase | float |   |   | X |
| qtyShippedBase.id | guid | X | X |   |
| qtyShippedBase.fileName | string |   |   | X |
| qtyShippedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| outOfStockSubstitution | bool |   |   | X |
| outOfStockSubstitution.id | guid | X | X |   |
| outOfStockSubstitution.fileName | string |   |   | X |
| outOfStockSubstitution.byteSize | int |   |   | X |
| substitutionAvailable | bool |   |   | X |
| substitutionAvailable.id | guid | X | X |   |
| substitutionAvailable.fileName | string |   |   | X |
| substitutionAvailable.byteSize | int |   |   | X |
| originallyOrderedNumber | string |   |   | X |
| originallyOrderedNumber.id | guid | X | X |   |
| originallyOrderedNumber.fileName | string |   |   | X |
| originallyOrderedNumber.byteSize | int |   |   | X |
| originallyOrderedVarCode | string |   |   | X |
| originallyOrderedVarCode.id | guid | X | X |   |
| originallyOrderedVarCode.fileName | string |   |   | X |
| originallyOrderedVarCode.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderPurchaseNumber | string |   |   | X |
| specialOrderPurchaseNumber.id | guid | X | X |   |
| specialOrderPurchaseNumber.fileName | string |   |   | X |
| specialOrderPurchaseNumber.byteSize | int |   |   | X |
| specialOrderPurchLineNumber | int |   |   | X |
| specialOrderPurchLineNumber.id | guid | X | X |   |
| specialOrderPurchLineNumber.fileName | string |   |   | X |
| specialOrderPurchLineNumber.byteSize | int |   |   | X |
| whseOutstandingQty | float |   |   | X |
| whseOutstandingQty.id | guid | X | X |   |
| whseOutstandingQty.fileName | string |   |   | X |
| whseOutstandingQty.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyShipped | bool |   |   | X |
| completelyShipped.id | guid | X | X |   |
| completelyShipped.fileName | string |   |   | X |
| completelyShipped.byteSize | int |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| requestedDeliveryDate.id | guid | X | X |   |
| requestedDeliveryDate.fileName | string |   |   | X |
| requestedDeliveryDate.byteSize | int |   |   | X |
| promisedDeliveryDate | date |   |   | X |
| promisedDeliveryDate.id | guid | X | X |   |
| promisedDeliveryDate.fileName | string |   |   | X |
| promisedDeliveryDate.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| outboundWhseHandlingTime | string |   |   | X |
| outboundWhseHandlingTime.id | guid | X | X |   |
| outboundWhseHandlingTime.fileName | string |   |   | X |
| outboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedDeliveryDate | date |   |   | X |
| plannedDeliveryDate.id | guid | X | X |   |
| plannedDeliveryDate.fileName | string |   |   | X |
| plannedDeliveryDate.byteSize | int |   |   | X |
| plannedShipmentDate | date |   |   | X |
| plannedShipmentDate.id | guid | X | X |   |
| plannedShipmentDate.fileName | string |   |   | X |
| plannedShipmentDate.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToReceive | float |   |   | X |
| returnQtyToReceive.id | guid | X | X |   |
| returnQtyToReceive.fileName | string |   |   | X |
| returnQtyToReceive.byteSize | int |   |   | X |
| returnQtyToReceiveBase | float |   |   | X |
| returnQtyToReceiveBase.id | guid | X | X |   |
| returnQtyToReceiveBase.fileName | string |   |   | X |
| returnQtyToReceiveBase.byteSize | int |   |   | X |
| returnQtyRcdNotInvd | float |   |   | X |
| returnQtyRcdNotInvd.id | guid | X | X |   |
| returnQtyRcdNotInvd.fileName | string |   |   | X |
| returnQtyRcdNotInvd.byteSize | int |   |   | X |
| retQtyRcdNotInvdBase | float |   |   | X |
| retQtyRcdNotInvdBase.id | guid | X | X |   |
| retQtyRcdNotInvdBase.fileName | string |   |   | X |
| retQtyRcdNotInvdBase.byteSize | int |   |   | X |
| returnRcdNotInvd | float |   |   | X |
| returnRcdNotInvd.id | guid | X | X |   |
| returnRcdNotInvd.fileName | string |   |   | X |
| returnRcdNotInvd.byteSize | int |   |   | X |
| returnRcdNotInvdLcy | float |   |   | X |
| returnRcdNotInvdLcy.id | guid | X | X |   |
| returnRcdNotInvdLcy.fileName | string |   |   | X |
| returnRcdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyReceived | float |   |   | X |
| returnQtyReceived.id | guid | X | X |   |
| returnQtyReceived.fileName | string |   |   | X |
| returnQtyReceived.byteSize | int |   |   | X |
| returnQtyReceivedBase | float |   |   | X |
| returnQtyReceivedBase.id | guid | X | X |   |
| returnQtyReceivedBase.fileName | string |   |   | X |
| returnQtyReceivedBase.byteSize | int |   |   | X |
| applFromItemEntry | int |   |   | X |
| applFromItemEntry.id | guid | X | X |   |
| applFromItemEntry.fileName | string |   |   | X |
| applFromItemEntry.byteSize | int |   |   | X |
| bomItemNumber | string |   |   | X |
| bomItemNumber.id | guid | X | X |   |
| bomItemNumber.fileName | string |   |   | X |
| bomItemNumber.byteSize | int |   |   | X |
| returnReceiptNumber | string |   |   | X |
| returnReceiptNumber.id | guid | X | X |   |
| returnReceiptNumber.fileName | string |   |   | X |
| returnReceiptNumber.byteSize | int |   |   | X |
| returnReceiptLineNumber | int |   |   | X |
| returnReceiptLineNumber.id | guid | X | X |   |
| returnReceiptLineNumber.fileName | string |   |   | X |
| returnReceiptLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| priceDescription | string |   |   | X |
| priceDescription.id | guid | X | X |   |
| priceDescription.fileName | string |   |   | X |
| priceDescription.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| billToName | string |   |   | X |
| billToName.id | guid | X | X |   |
| billToName.fileName | string |   |   | X |
| billToName.byteSize | int |   |   | X |
| billToName2 | string |   |   | X |
| billToName2.id | guid | X | X |   |
| billToName2.fileName | string |   |   | X |
| billToName2.byteSize | int |   |   | X |
| billToAddress | string |   |   | X |
| billToAddress.id | guid | X | X |   |
| billToAddress.fileName | string |   |   | X |
| billToAddress.byteSize | int |   |   | X |
| billToAddress2 | string |   |   | X |
| billToAddress2.id | guid | X | X |   |
| billToAddress2.fileName | string |   |   | X |
| billToAddress2.byteSize | int |   |   | X |
| billToCity | string |   |   | X |
| billToCity.id | guid | X | X |   |
| billToCity.fileName | string |   |   | X |
| billToCity.byteSize | int |   |   | X |
| billToContact | string |   |   | X |
| billToContact.id | guid | X | X |   |
| billToContact.fileName | string |   |   | X |
| billToContact.byteSize | int |   |   | X |
| yourReference | string |   |   | X |
| yourReference.id | guid | X | X |   |
| yourReference.fileName | string |   |   | X |
| yourReference.byteSize | int |   |   | X |
| shipToCode | string |   |   | X |
| shipToCode.id | guid | X | X |   |
| shipToCode.fileName | string |   |   | X |
| shipToCode.byteSize | int |   |   | X |
| shipToName | string |   |   | X |
| shipToName.id | guid | X | X |   |
| shipToName.fileName | string |   |   | X |
| shipToName.byteSize | int |   |   | X |
| shipToName2 | string |   |   | X |
| shipToName2.id | guid | X | X |   |
| shipToName2.fileName | string |   |   | X |
| shipToName2.byteSize | int |   |   | X |
| shipToAddress | string |   |   | X |
| shipToAddress.id | guid | X | X |   |
| shipToAddress.fileName | string |   |   | X |
| shipToAddress.byteSize | int |   |   | X |
| shipToAddress2 | string |   |   | X |
| shipToAddress2.id | guid | X | X |   |
| shipToAddress2.fileName | string |   |   | X |
| shipToAddress2.byteSize | int |   |   | X |
| shipToCity | string |   |   | X |
| shipToCity.id | guid | X | X |   |
| shipToCity.fileName | string |   |   | X |
| shipToCity.byteSize | int |   |   | X |
| shipToContact | string |   |   | X |
| shipToContact.id | guid | X | X |   |
| shipToContact.fileName | string |   |   | X |
| shipToContact.byteSize | int |   |   | X |
| orderDate | date |   |   | X |
| orderDate.id | guid | X | X |   |
| orderDate.fileName | string |   |   | X |
| orderDate.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| shipmentDate | date |   |   | X |
| shipmentDate.id | guid | X | X |   |
| shipmentDate.fileName | string |   |   | X |
| shipmentDate.byteSize | int |   |   | X |
| postingDescription | string |   |   | X |
| postingDescription.id | guid | X | X |   |
| postingDescription.fileName | string |   |   | X |
| postingDescription.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| dueDate | date |   |   | X |
| dueDate.id | guid | X | X |   |
| dueDate.fileName | string |   |   | X |
| dueDate.byteSize | int |   |   | X |
| paymentDiscountPercent | float |   |   | X |
| paymentDiscountPercent.id | guid | X | X |   |
| paymentDiscountPercent.fileName | string |   |   | X |
| paymentDiscountPercent.byteSize | int |   |   | X |
| pmtDiscountDate | date |   |   | X |
| pmtDiscountDate.id | guid | X | X |   |
| pmtDiscountDate.fileName | string |   |   | X |
| pmtDiscountDate.byteSize | int |   |   | X |
| shipmentMethodCode | string |   |   | X |
| shipmentMethodCode.id | guid | X | X |   |
| shipmentMethodCode.fileName | string |   |   | X |
| shipmentMethodCode.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| customerPostingGroup | string |   |   | X |
| customerPostingGroup.id | guid | X | X |   |
| customerPostingGroup.fileName | string |   |   | X |
| customerPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| currencyFactor | float |   |   | X |
| currencyFactor.id | guid | X | X |   |
| currencyFactor.fileName | string |   |   | X |
| currencyFactor.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| pricesIncludingVat | bool |   |   | X |
| pricesIncludingVat.id | guid | X | X |   |
| pricesIncludingVat.fileName | string |   |   | X |
| pricesIncludingVat.byteSize | int |   |   | X |
| invoiceDiscCode | string |   |   | X |
| invoiceDiscCode.id | guid | X | X |   |
| invoiceDiscCode.fileName | string |   |   | X |
| invoiceDiscCode.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| languageCode | string |   |   | X |
| languageCode.id | guid | X | X |   |
| languageCode.fileName | string |   |   | X |
| languageCode.byteSize | int |   |   | X |
| salespersonCode | string |   |   | X |
| salespersonCode.id | guid | X | X |   |
| salespersonCode.fileName | string |   |   | X |
| salespersonCode.byteSize | int |   |   | X |
| orderClass | string |   |   | X |
| orderClass.id | guid | X | X |   |
| orderClass.fileName | string |   |   | X |
| orderClass.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| numberPrinted | int |   |   | X |
| numberPrinted.id | guid | X | X |   |
| numberPrinted.fileName | string |   |   | X |
| numberPrinted.byteSize | int |   |   | X |
| onHold | string |   |   | X |
| onHold.id | guid | X | X |   |
| onHold.fileName | string |   |   | X |
| onHold.byteSize | int |   |   | X |
| appliesToDocType | string |   |   | X |
| appliesToDocType.id | guid | X | X |   |
| appliesToDocType.fileName | string |   |   | X |
| appliesToDocType.byteSize | int |   |   | X |
| appliesToDocNumber | string |   |   | X |
| appliesToDocNumber.id | guid | X | X |   |
| appliesToDocNumber.fileName | string |   |   | X |
| appliesToDocNumber.byteSize | int |   |   | X |
| balAccountNumber | string |   |   | X |
| balAccountNumber.id | guid | X | X |   |
| balAccountNumber.fileName | string |   |   | X |
| balAccountNumber.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| ship | bool |   |   | X |
| ship.id | guid | X | X |   |
| ship.fileName | string |   |   | X |
| ship.byteSize | int |   |   | X |
| invoice | bool |   |   | X |
| invoice.id | guid | X | X |   |
| invoice.fileName | string |   |   | X |
| invoice.byteSize | int |   |   | X |
| printPostedDocuments | bool |   |   | X |
| printPostedDocuments.id | guid | X | X |   |
| printPostedDocuments.fileName | string |   |   | X |
| printPostedDocuments.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVAT | float |   |   | X |
| amountIncludingVAT.id | guid | X | X |   |
| amountIncludingVAT.fileName | string |   |   | X |
| amountIncludingVAT.byteSize | int |   |   | X |
| shippingNumber | string |   |   | X |
| shippingNumber.id | guid | X | X |   |
| shippingNumber.fileName | string |   |   | X |
| shippingNumber.byteSize | int |   |   | X |
| postingNumber | string |   |   | X |
| postingNumber.id | guid | X | X |   |
| postingNumber.fileName | string |   |   | X |
| postingNumber.byteSize | int |   |   | X |
| lastShippingNumber | string |   |   | X |
| lastShippingNumber.id | guid | X | X |   |
| lastShippingNumber.fileName | string |   |   | X |
| lastShippingNumber.byteSize | int |   |   | X |
| lastPostingNumber | string |   |   | X |
| lastPostingNumber.id | guid | X | X |   |
| lastPostingNumber.fileName | string |   |   | X |
| lastPostingNumber.byteSize | int |   |   | X |
| prepaymentNumber | string |   |   | X |
| prepaymentNumber.id | guid | X | X |   |
| prepaymentNumber.fileName | string |   |   | X |
| prepaymentNumber.byteSize | int |   |   | X |
| lastPrepaymentNumber | string |   |   | X |
| lastPrepaymentNumber.id | guid | X | X |   |
| lastPrepaymentNumber.fileName | string |   |   | X |
| lastPrepaymentNumber.byteSize | int |   |   | X |
| premptCrMemoNumber | string |   |   | X |
| premptCrMemoNumber.id | guid | X | X |   |
| premptCrMemoNumber.fileName | string |   |   | X |
| premptCrMemoNumber.byteSize | int |   |   | X |
| lastPremtCrMemoNumber | string |   |   | X |
| lastPremtCrMemoNumber.id | guid | X | X |   |
| lastPremtCrMemoNumber.fileName | string |   |   | X |
| lastPremtCrMemoNumber.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| combineShipments | bool |   |   | X |
| combineShipments.id | guid | X | X |   |
| combineShipments.fileName | string |   |   | X |
| combineShipments.byteSize | int |   |   | X |
| reasonCode | string |   |   | X |
| reasonCode.id | guid | X | X |   |
| reasonCode.fileName | string |   |   | X |
| reasonCode.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| eu3PartyTrade | bool |   |   | X |
| eu3PartyTrade.id | guid | X | X |   |
| eu3PartyTrade.fileName | string |   |   | X |
| eu3PartyTrade.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| vatCountryRegionCode | string |   |   | X |
| vatCountryRegionCode.id | guid | X | X |   |
| vatCountryRegionCode.fileName | string |   |   | X |
| vatCountryRegionCode.byteSize | int |   |   | X |
| sellToCustomerName | string |   |   | X |
| sellToCustomerName.id | guid | X | X |   |
| sellToCustomerName.fileName | string |   |   | X |
| sellToCustomerName.byteSize | int |   |   | X |
| sellToCustomerName2 | string |   |   | X |
| sellToCustomerName2.id | guid | X | X |   |
| sellToCustomerName2.fileName | string |   |   | X |
| sellToCustomerName2.byteSize | int |   |   | X |
| sellToAddress | string |   |   | X |
| sellToAddress.id | guid | X | X |   |
| sellToAddress.fileName | string |   |   | X |
| sellToAddress.byteSize | int |   |   | X |
| sellToAddress2 | string |   |   | X |
| sellToAddress2.id | guid | X | X |   |
| sellToAddress2.fileName | string |   |   | X |
| sellToAddress2.byteSize | int |   |   | X |
| sellToCity | string |   |   | X |
| sellToCity.id | guid | X | X |   |
| sellToCity.fileName | string |   |   | X |
| sellToCity.byteSize | int |   |   | X |
| sellToContact | string |   |   | X |
| sellToContact.id | guid | X | X |   |
| sellToContact.fileName | string |   |   | X |
| sellToContact.byteSize | int |   |   | X |
| billToPostCode | string |   |   | X |
| billToPostCode.id | guid | X | X |   |
| billToPostCode.fileName | string |   |   | X |
| billToPostCode.byteSize | int |   |   | X |
| billToCounty | string |   |   | X |
| billToCounty.id | guid | X | X |   |
| billToCounty.fileName | string |   |   | X |
| billToCounty.byteSize | int |   |   | X |
| billToCountryRegionCode | string |   |   | X |
| billToCountryRegionCode.id | guid | X | X |   |
| billToCountryRegionCode.fileName | string |   |   | X |
| billToCountryRegionCode.byteSize | int |   |   | X |
| sellToPostCode | string |   |   | X |
| sellToPostCode.id | guid | X | X |   |
| sellToPostCode.fileName | string |   |   | X |
| sellToPostCode.byteSize | int |   |   | X |
| sellToCounty | string |   |   | X |
| sellToCounty.id | guid | X | X |   |
| sellToCounty.fileName | string |   |   | X |
| sellToCounty.byteSize | int |   |   | X |
| sellToCountryRegionCode | string |   |   | X |
| sellToCountryRegionCode.id | guid | X | X |   |
| sellToCountryRegionCode.fileName | string |   |   | X |
| sellToCountryRegionCode.byteSize | int |   |   | X |
| shipToPostCode | string |   |   | X |
| shipToPostCode.id | guid | X | X |   |
| shipToPostCode.fileName | string |   |   | X |
| shipToPostCode.byteSize | int |   |   | X |
| shipToCounty | string |   |   | X |
| shipToCounty.id | guid | X | X |   |
| shipToCounty.fileName | string |   |   | X |
| shipToCounty.byteSize | int |   |   | X |
| shipToCountryRegionCode | string |   |   | X |
| shipToCountryRegionCode.id | guid | X | X |   |
| shipToCountryRegionCode.fileName | string |   |   | X |
| shipToCountryRegionCode.byteSize | int |   |   | X |
| balAccountType | string |   |   | X |
| balAccountType.id | guid | X | X |   |
| balAccountType.fileName | string |   |   | X |
| balAccountType.byteSize | int |   |   | X |
| exitPoint | string |   |   | X |
| exitPoint.id | guid | X | X |   |
| exitPoint.fileName | string |   |   | X |
| exitPoint.byteSize | int |   |   | X |
| correction | bool |   |   | X |
| correction.id | guid | X | X |   |
| correction.fileName | string |   |   | X |
| correction.byteSize | int |   |   | X |
| documentDate | date |   |   | X |
| documentDate.id | guid | X | X |   |
| documentDate.fileName | string |   |   | X |
| documentDate.byteSize | int |   |   | X |
| externalDocumentNumber | string |   |   | X |
| externalDocumentNumber.id | guid | X | X |   |
| externalDocumentNumber.fileName | string |   |   | X |
| externalDocumentNumber.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| packageTrackingNumber | string |   |   | X |
| packageTrackingNumber.id | guid | X | X |   |
| packageTrackingNumber.fileName | string |   |   | X |
| packageTrackingNumber.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| postingNumberSeries | string |   |   | X |
| postingNumberSeries.id | guid | X | X |   |
| postingNumberSeries.fileName | string |   |   | X |
| postingNumberSeries.byteSize | int |   |   | X |
| shippingNumberSeries | string |   |   | X |
| shippingNumberSeries.id | guid | X | X |   |
| shippingNumberSeries.fileName | string |   |   | X |
| shippingNumberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| appliesToId | string |   |   | X |
| appliesToId.id | guid | X | X |   |
| appliesToId.fileName | string |   |   | X |
| appliesToId.byteSize | int |   |   | X |
| vatBaseDiscountPercent | float |   |   | X |
| vatBaseDiscountPercent.id | guid | X | X |   |
| vatBaseDiscountPercent.fileName | string |   |   | X |
| vatBaseDiscountPercent.byteSize | int |   |   | X |
| status | string |   |   | X |
| status.id | guid | X | X |   |
| status.fileName | string |   |   | X |
| status.byteSize | int |   |   | X |
| invoiceDiscountCalculation | string |   |   | X |
| invoiceDiscountCalculation.id | guid | X | X |   |
| invoiceDiscountCalculation.fileName | string |   |   | X |
| invoiceDiscountCalculation.byteSize | int |   |   | X |
| invoiceDiscountValue | float |   |   | X |
| invoiceDiscountValue.id | guid | X | X |   |
| invoiceDiscountValue.fileName | string |   |   | X |
| invoiceDiscountValue.byteSize | int |   |   | X |
| sendIcDocument | bool |   |   | X |
| sendIcDocument.id | guid | X | X |   |
| sendIcDocument.fileName | string |   |   | X |
| sendIcDocument.byteSize | int |   |   | X |
| icStatus | string |   |   | X |
| icStatus.id | guid | X | X |   |
| icStatus.fileName | string |   |   | X |
| icStatus.byteSize | int |   |   | X |
| sellToIcPartnerCode | string |   |   | X |
| sellToIcPartnerCode.id | guid | X | X |   |
| sellToIcPartnerCode.fileName | string |   |   | X |
| sellToIcPartnerCode.byteSize | int |   |   | X |
| billToIcPartnerCode | string |   |   | X |
| billToIcPartnerCode.id | guid | X | X |   |
| billToIcPartnerCode.fileName | string |   |   | X |
| billToIcPartnerCode.byteSize | int |   |   | X |
| icDirection | string |   |   | X |
| icDirection.id | guid | X | X |   |
| icDirection.fileName | string |   |   | X |
| icDirection.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepaymentNumberSeries | string |   |   | X |
| prepaymentNumberSeries.id | guid | X | X |   |
| prepaymentNumberSeries.fileName | string |   |   | X |
| prepaymentNumberSeries.byteSize | int |   |   | X |
| compressPrepayment | bool |   |   | X |
| compressPrepayment.id | guid | X | X |   |
| compressPrepayment.fileName | string |   |   | X |
| compressPrepayment.byteSize | int |   |   | X |
| prepaymentDueDate | date |   |   | X |
| prepaymentDueDate.id | guid | X | X |   |
| prepaymentDueDate.fileName | string |   |   | X |
| prepaymentDueDate.byteSize | int |   |   | X |
| prepmtCrMemoNumberSeries | string |   |   | X |
| prepmtCrMemoNumberSeries.id | guid | X | X |   |
| prepmtCrMemoNumberSeries.fileName | string |   |   | X |
| prepmtCrMemoNumberSeries.byteSize | int |   |   | X |
| prepmtPostingDescription | string |   |   | X |
| prepmtPostingDescription.id | guid | X | X |   |
| prepmtPostingDescription.fileName | string |   |   | X |
| prepmtPostingDescription.byteSize | int |   |   | X |
| prepmtPmtDiscountDate | date |   |   | X |
| prepmtPmtDiscountDate.id | guid | X | X |   |
| prepmtPmtDiscountDate.fileName | string |   |   | X |
| prepmtPmtDiscountDate.byteSize | int |   |   | X |
| prepmtPaymentTermsCode | string |   |   | X |
| prepmtPaymentTermsCode.id | guid | X | X |   |
| prepmtPaymentTermsCode.fileName | string |   |   | X |
| prepmtPaymentTermsCode.byteSize | int |   |   | X |
| prepmtPaymentDiscountPercent | float |   |   | X |
| prepmtPaymentDiscountPercent.id | guid | X | X |   |
| prepmtPaymentDiscountPercent.fileName | string |   |   | X |
| prepmtPaymentDiscountPercent.byteSize | int |   |   | X |
| quoteNumber | string |   |   | X |
| quoteNumber.id | guid | X | X |   |
| quoteNumber.fileName | string |   |   | X |
| quoteNumber.byteSize | int |   |   | X |
| quoteValidUntilDate | date |   |   | X |
| quoteValidUntilDate.id | guid | X | X |   |
| quoteValidUntilDate.fileName | string |   |   | X |
| quoteValidUntilDate.byteSize | int |   |   | X |
| quoteSentToCustomer | date |   |   | X |
| quoteSentToCustomer.id | guid | X | X |   |
| quoteSentToCustomer.fileName | string |   |   | X |
| quoteSentToCustomer.byteSize | int |   |   | X |
| quoteAccepted | bool |   |   | X |
| quoteAccepted.id | guid | X | X |   |
| quoteAccepted.fileName | string |   |   | X |
| quoteAccepted.byteSize | int |   |   | X |
| quoteAcceptedDate | date |   |   | X |
| quoteAcceptedDate.id | guid | X | X |   |
| quoteAcceptedDate.fileName | string |   |   | X |
| quoteAcceptedDate.byteSize | int |   |   | X |
| jobQueueStatus | string |   |   | X |
| jobQueueStatus.id | guid | X | X |   |
| jobQueueStatus.fileName | string |   |   | X |
| jobQueueStatus.byteSize | int |   |   | X |
| jobQueueEntryId | guid |   |   | X |
| jobQueueEntryId.id | guid | X | X |   |
| jobQueueEntryId.fileName | string |   |   | X |
| jobQueueEntryId.byteSize | int |   |   | X |
| incomingDocumentEntryNumber | int |   |   | X |
| incomingDocumentEntryNumber.id | guid | X | X |   |
| incomingDocumentEntryNumber.fileName | string |   |   | X |
| incomingDocumentEntryNumber.byteSize | int |   |   | X |
| workDescription | string |   |   | X |
| workDescription.id | guid | X | X |   |
| workDescription.fileName | string |   |   | X |
| workDescription.byteSize | int |   |   | X |
| amountShippedNotInvoicedInclVat | float |   |   | X |
| amountShippedNotInvoicedInclVat.id | guid | X | X |   |
| amountShippedNotInvoicedInclVat.fileName | string |   |   | X |
| amountShippedNotInvoicedInclVat.byteSize | int |   |   | X |
| amountShippedNotInvoiced | float |   |   | X |
| amountShippedNotInvoiced.id | guid | X | X |   |
| amountShippedNotInvoiced.fileName | string |   |   | X |
| amountShippedNotInvoiced.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| paymentServiceSetId | int |   |   | X |
| paymentServiceSetId.id | guid | X | X |   |
| paymentServiceSetId.fileName | string |   |   | X |
| paymentServiceSetId.byteSize | int |   |   | X |
| directDebitMandateId | string |   |   | X |
| directDebitMandateId.id | guid | X | X |   |
| directDebitMandateId.fileName | string |   |   | X |
| directDebitMandateId.byteSize | int |   |   | X |
| invoiceDiscountAmount | float |   |   | X |
| invoiceDiscountAmount.id | guid | X | X |   |
| invoiceDiscountAmount.fileName | string |   |   | X |
| invoiceDiscountAmount.byteSize | int |   |   | X |
| numberOfArchivedVersions | int |   |   | X |
| numberOfArchivedVersions.id | guid | X | X |   |
| numberOfArchivedVersions.fileName | string |   |   | X |
| numberOfArchivedVersions.byteSize | int |   |   | X |
| docNumberOccurrence | int |   |   | X |
| docNumberOccurrence.id | guid | X | X |   |
| docNumberOccurrence.fileName | string |   |   | X |
| docNumberOccurrence.byteSize | int |   |   | X |
| campaignNumber | string |   |   | X |
| campaignNumber.id | guid | X | X |   |
| campaignNumber.fileName | string |   |   | X |
| campaignNumber.byteSize | int |   |   | X |
| sellToCustomerTemplateCode | string |   |   | X |
| sellToCustomerTemplateCode.id | guid | X | X |   |
| sellToCustomerTemplateCode.fileName | string |   |   | X |
| sellToCustomerTemplateCode.byteSize | int |   |   | X |
| sellToContactNumber | string |   |   | X |
| sellToContactNumber.id | guid | X | X |   |
| sellToContactNumber.fileName | string |   |   | X |
| sellToContactNumber.byteSize | int |   |   | X |
| billToContactNumber | string |   |   | X |
| billToContactNumber.id | guid | X | X |   |
| billToContactNumber.fileName | string |   |   | X |
| billToContactNumber.byteSize | int |   |   | X |
| billToCustomerTemplateCode | string |   |   | X |
| billToCustomerTemplateCode.id | guid | X | X |   |
| billToCustomerTemplateCode.fileName | string |   |   | X |
| billToCustomerTemplateCode.byteSize | int |   |   | X |
| opportunityNumber | string |   |   | X |
| opportunityNumber.id | guid | X | X |   |
| opportunityNumber.fileName | string |   |   | X |
| opportunityNumber.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| shippingAdvice | string |   |   | X |
| shippingAdvice.id | guid | X | X |   |
| shippingAdvice.fileName | string |   |   | X |
| shippingAdvice.byteSize | int |   |   | X |
| shippedNotInvoiced | bool |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| completelyShipped | bool |   |   | X |
| completelyShipped.id | guid | X | X |   |
| completelyShipped.fileName | string |   |   | X |
| completelyShipped.byteSize | int |   |   | X |
| postingFromWhseRef | int |   |   | X |
| postingFromWhseRef.id | guid | X | X |   |
| postingFromWhseRef.fileName | string |   |   | X |
| postingFromWhseRef.byteSize | int |   |   | X |
| locationFilter | string |   |   | X |
| locationFilter.id | guid | X | X |   |
| locationFilter.fileName | string |   |   | X |
| locationFilter.byteSize | int |   |   | X |
| shipped | bool |   |   | X |
| shipped.id | guid | X | X |   |
| shipped.fileName | string |   |   | X |
| shipped.byteSize | int |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| requestedDeliveryDate.id | guid | X | X |   |
| requestedDeliveryDate.fileName | string |   |   | X |
| requestedDeliveryDate.byteSize | int |   |   | X |
| promisedDeliveryDate | date |   |   | X |
| promisedDeliveryDate.id | guid | X | X |   |
| promisedDeliveryDate.fileName | string |   |   | X |
| promisedDeliveryDate.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| outboundWhseHandlingTime | string |   |   | X |
| outboundWhseHandlingTime.id | guid | X | X |   |
| outboundWhseHandlingTime.fileName | string |   |   | X |
| outboundWhseHandlingTime.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| lateOrderShipping | bool |   |   | X |
| lateOrderShipping.id | guid | X | X |   |
| lateOrderShipping.fileName | string |   |   | X |
| lateOrderShipping.byteSize | int |   |   | X |
| receive | bool |   |   | X |
| receive.id | guid | X | X |   |
| receive.fileName | string |   |   | X |
| receive.byteSize | int |   |   | X |
| returnReceiptNumber | string |   |   | X |
| returnReceiptNumber.id | guid | X | X |   |
| returnReceiptNumber.fileName | string |   |   | X |
| returnReceiptNumber.byteSize | int |   |   | X |
| returnReceiptNumberSeries | string |   |   | X |
| returnReceiptNumberSeries.id | guid | X | X |   |
| returnReceiptNumberSeries.fileName | string |   |   | X |
| returnReceiptNumberSeries.byteSize | int |   |   | X |
| lastReturnReceiptNumber | string |   |   | X |
| lastReturnReceiptNumber.id | guid | X | X |   |
| lastReturnReceiptNumber.fileName | string |   |   | X |
| lastReturnReceiptNumber.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| getShipmentUsed | bool |   |   | X |
| getShipmentUsed.id | guid | X | X |   |
| getShipmentUsed.fileName | string |   |   | X |
| getShipmentUsed.byteSize | int |   |   | X |
| assignedUserId | string |   |   | X |
| assignedUserId.id | guid | X | X |   |
| assignedUserId.fileName | string |   |   | X |
| assignedUserId.byteSize | int |   |   | X |
| dateFilter | string |   |   | X |
| dateFilter.id | guid | X | X |   |
| dateFilter.fileName | string |   |   | X |
| dateFilter.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowSalesDocumentsworkflowSalesDocumentLines | [WorkflowSalesDocumentsworkflowSalesDocumentLines[]](#workflowsalesdocumentsworkflowsalesdocumentlines) | Yes |
# WorkflowSalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   |   | X |
| documentType.id | guid | X | X |   |
| documentType.fileName | string |   |   | X |
| documentType.byteSize | int |   |   | X |
| documentNumber | string |   |   | X |
| documentNumber.id | guid | X | X |   |
| documentNumber.fileName | string |   |   | X |
| documentNumber.byteSize | int |   |   | X |
| lineNumber | int |   |   | X |
| lineNumber.id | guid | X | X |   |
| lineNumber.fileName | string |   |   | X |
| lineNumber.byteSize | int |   |   | X |
| sellToCustomerNumber | string |   |   | X |
| sellToCustomerNumber.id | guid | X | X |   |
| sellToCustomerNumber.fileName | string |   |   | X |
| sellToCustomerNumber.byteSize | int |   |   | X |
| type | string |   |   | X |
| type.id | guid | X | X |   |
| type.fileName | string |   |   | X |
| type.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| postingGroup | string |   |   | X |
| postingGroup.id | guid | X | X |   |
| postingGroup.fileName | string |   |   | X |
| postingGroup.byteSize | int |   |   | X |
| shipmentDate | date |   |   | X |
| shipmentDate.id | guid | X | X |   |
| shipmentDate.fileName | string |   |   | X |
| shipmentDate.byteSize | int |   |   | X |
| description | string |   |   | X |
| description.id | guid | X | X |   |
| description.fileName | string |   |   | X |
| description.byteSize | int |   |   | X |
| description2 | string |   |   | X |
| description2.id | guid | X | X |   |
| description2.fileName | string |   |   | X |
| description2.byteSize | int |   |   | X |
| unitOfMeasure | string |   |   | X |
| unitOfMeasure.id | guid | X | X |   |
| unitOfMeasure.fileName | string |   |   | X |
| unitOfMeasure.byteSize | int |   |   | X |
| quantity | float |   |   | X |
| quantity.id | guid | X | X |   |
| quantity.fileName | string |   |   | X |
| quantity.byteSize | int |   |   | X |
| outstandingQuantity | float |   |   | X |
| outstandingQuantity.id | guid | X | X |   |
| outstandingQuantity.fileName | string |   |   | X |
| outstandingQuantity.byteSize | int |   |   | X |
| qtyToInvoice | float |   |   | X |
| qtyToInvoice.id | guid | X | X |   |
| qtyToInvoice.fileName | string |   |   | X |
| qtyToInvoice.byteSize | int |   |   | X |
| qtyToShip | float |   |   | X |
| qtyToShip.id | guid | X | X |   |
| qtyToShip.fileName | string |   |   | X |
| qtyToShip.byteSize | int |   |   | X |
| unitPrice | float |   |   | X |
| unitPrice.id | guid | X | X |   |
| unitPrice.fileName | string |   |   | X |
| unitPrice.byteSize | int |   |   | X |
| unitCostLcy | float |   |   | X |
| unitCostLcy.id | guid | X | X |   |
| unitCostLcy.fileName | string |   |   | X |
| unitCostLcy.byteSize | int |   |   | X |
| vatPercent | float |   |   | X |
| vatPercent.id | guid | X | X |   |
| vatPercent.fileName | string |   |   | X |
| vatPercent.byteSize | int |   |   | X |
| lineDiscountPercent | float |   |   | X |
| lineDiscountPercent.id | guid | X | X |   |
| lineDiscountPercent.fileName | string |   |   | X |
| lineDiscountPercent.byteSize | int |   |   | X |
| lineDiscountAmount | float |   |   | X |
| lineDiscountAmount.id | guid | X | X |   |
| lineDiscountAmount.fileName | string |   |   | X |
| lineDiscountAmount.byteSize | int |   |   | X |
| amount | float |   |   | X |
| amount.id | guid | X | X |   |
| amount.fileName | string |   |   | X |
| amount.byteSize | int |   |   | X |
| amountIncludingVat | float |   |   | X |
| amountIncludingVat.id | guid | X | X |   |
| amountIncludingVat.fileName | string |   |   | X |
| amountIncludingVat.byteSize | int |   |   | X |
| allowInvoiceDisc | bool |   |   | X |
| allowInvoiceDisc.id | guid | X | X |   |
| allowInvoiceDisc.fileName | string |   |   | X |
| allowInvoiceDisc.byteSize | int |   |   | X |
| grossWeight | float |   |   | X |
| grossWeight.id | guid | X | X |   |
| grossWeight.fileName | string |   |   | X |
| grossWeight.byteSize | int |   |   | X |
| netWeight | float |   |   | X |
| netWeight.id | guid | X | X |   |
| netWeight.fileName | string |   |   | X |
| netWeight.byteSize | int |   |   | X |
| unitsPerParcel | float |   |   | X |
| unitsPerParcel.id | guid | X | X |   |
| unitsPerParcel.fileName | string |   |   | X |
| unitsPerParcel.byteSize | int |   |   | X |
| unitVolume | float |   |   | X |
| unitVolume.id | guid | X | X |   |
| unitVolume.fileName | string |   |   | X |
| unitVolume.byteSize | int |   |   | X |
| applToItemEntry | int |   |   | X |
| applToItemEntry.id | guid | X | X |   |
| applToItemEntry.fileName | string |   |   | X |
| applToItemEntry.byteSize | int |   |   | X |
| shortcutDimension1Code | string |   |   | X |
| shortcutDimension1Code.id | guid | X | X |   |
| shortcutDimension1Code.fileName | string |   |   | X |
| shortcutDimension1Code.byteSize | int |   |   | X |
| shortcutDimension2Code | string |   |   | X |
| shortcutDimension2Code.id | guid | X | X |   |
| shortcutDimension2Code.fileName | string |   |   | X |
| shortcutDimension2Code.byteSize | int |   |   | X |
| customerPriceGroup | string |   |   | X |
| customerPriceGroup.id | guid | X | X |   |
| customerPriceGroup.fileName | string |   |   | X |
| customerPriceGroup.byteSize | int |   |   | X |
| jobNumber | string |   |   | X |
| jobNumber.id | guid | X | X |   |
| jobNumber.fileName | string |   |   | X |
| jobNumber.byteSize | int |   |   | X |
| workTypeCode | string |   |   | X |
| workTypeCode.id | guid | X | X |   |
| workTypeCode.fileName | string |   |   | X |
| workTypeCode.byteSize | int |   |   | X |
| recalculateInvoiceDisc | bool |   |   | X |
| recalculateInvoiceDisc.id | guid | X | X |   |
| recalculateInvoiceDisc.fileName | string |   |   | X |
| recalculateInvoiceDisc.byteSize | int |   |   | X |
| outstandingAmount | float |   |   | X |
| outstandingAmount.id | guid | X | X |   |
| outstandingAmount.fileName | string |   |   | X |
| outstandingAmount.byteSize | int |   |   | X |
| qtyShippedNotInvoiced | float |   |   | X |
| qtyShippedNotInvoiced.id | guid | X | X |   |
| qtyShippedNotInvoiced.fileName | string |   |   | X |
| qtyShippedNotInvoiced.byteSize | int |   |   | X |
| shippedNotInvoiced | float |   |   | X |
| shippedNotInvoiced.id | guid | X | X |   |
| shippedNotInvoiced.fileName | string |   |   | X |
| shippedNotInvoiced.byteSize | int |   |   | X |
| quantityShipped | float |   |   | X |
| quantityShipped.id | guid | X | X |   |
| quantityShipped.fileName | string |   |   | X |
| quantityShipped.byteSize | int |   |   | X |
| quantityInvoiced | float |   |   | X |
| quantityInvoiced.id | guid | X | X |   |
| quantityInvoiced.fileName | string |   |   | X |
| quantityInvoiced.byteSize | int |   |   | X |
| shipmentNumber | string |   |   | X |
| shipmentNumber.id | guid | X | X |   |
| shipmentNumber.fileName | string |   |   | X |
| shipmentNumber.byteSize | int |   |   | X |
| shipmentLineNumber | int |   |   | X |
| shipmentLineNumber.id | guid | X | X |   |
| shipmentLineNumber.fileName | string |   |   | X |
| shipmentLineNumber.byteSize | int |   |   | X |
| profitPercent | float |   |   | X |
| profitPercent.id | guid | X | X |   |
| profitPercent.fileName | string |   |   | X |
| profitPercent.byteSize | int |   |   | X |
| billToCustomerNumber | string |   |   | X |
| billToCustomerNumber.id | guid | X | X |   |
| billToCustomerNumber.fileName | string |   |   | X |
| billToCustomerNumber.byteSize | int |   |   | X |
| invDiscountAmount | float |   |   | X |
| invDiscountAmount.id | guid | X | X |   |
| invDiscountAmount.fileName | string |   |   | X |
| invDiscountAmount.byteSize | int |   |   | X |
| purchaseOrderNumber | string |   |   | X |
| purchaseOrderNumber.id | guid | X | X |   |
| purchaseOrderNumber.fileName | string |   |   | X |
| purchaseOrderNumber.byteSize | int |   |   | X |
| purchOrderLineNumber | int |   |   | X |
| purchOrderLineNumber.id | guid | X | X |   |
| purchOrderLineNumber.fileName | string |   |   | X |
| purchOrderLineNumber.byteSize | int |   |   | X |
| dropShipment | bool |   |   | X |
| dropShipment.id | guid | X | X |   |
| dropShipment.fileName | string |   |   | X |
| dropShipment.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| genProdPostingGroup | string |   |   | X |
| genProdPostingGroup.id | guid | X | X |   |
| genProdPostingGroup.fileName | string |   |   | X |
| genProdPostingGroup.byteSize | int |   |   | X |
| vatCalculationType | string |   |   | X |
| vatCalculationType.id | guid | X | X |   |
| vatCalculationType.fileName | string |   |   | X |
| vatCalculationType.byteSize | int |   |   | X |
| transactionType | string |   |   | X |
| transactionType.id | guid | X | X |   |
| transactionType.fileName | string |   |   | X |
| transactionType.byteSize | int |   |   | X |
| transportMethod | string |   |   | X |
| transportMethod.id | guid | X | X |   |
| transportMethod.fileName | string |   |   | X |
| transportMethod.byteSize | int |   |   | X |
| attachedToLineNumber | int |   |   | X |
| attachedToLineNumber.id | guid | X | X |   |
| attachedToLineNumber.fileName | string |   |   | X |
| attachedToLineNumber.byteSize | int |   |   | X |
| exitPoint | string |   |   | X |
| exitPoint.id | guid | X | X |   |
| exitPoint.fileName | string |   |   | X |
| exitPoint.byteSize | int |   |   | X |
| area | string |   |   | X |
| area.id | guid | X | X |   |
| area.fileName | string |   |   | X |
| area.byteSize | int |   |   | X |
| transactionSpecification | string |   |   | X |
| transactionSpecification.id | guid | X | X |   |
| transactionSpecification.fileName | string |   |   | X |
| transactionSpecification.byteSize | int |   |   | X |
| taxCategory | string |   |   | X |
| taxCategory.id | guid | X | X |   |
| taxCategory.fileName | string |   |   | X |
| taxCategory.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| taxGroupCode | string |   |   | X |
| taxGroupCode.id | guid | X | X |   |
| taxGroupCode.fileName | string |   |   | X |
| taxGroupCode.byteSize | int |   |   | X |
| vatClauseCode | string |   |   | X |
| vatClauseCode.id | guid | X | X |   |
| vatClauseCode.fileName | string |   |   | X |
| vatClauseCode.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| vatProdPostingGroup | string |   |   | X |
| vatProdPostingGroup.id | guid | X | X |   |
| vatProdPostingGroup.fileName | string |   |   | X |
| vatProdPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| outstandingAmountLcy | float |   |   | X |
| outstandingAmountLcy.id | guid | X | X |   |
| outstandingAmountLcy.fileName | string |   |   | X |
| outstandingAmountLcy.byteSize | int |   |   | X |
| shippedNotInvoicedLcy | float |   |   | X |
| shippedNotInvoicedLcy.id | guid | X | X |   |
| shippedNotInvoicedLcy.fileName | string |   |   | X |
| shippedNotInvoicedLcy.byteSize | int |   |   | X |
| shippedNotInvLcyNoVat | float |   |   | X |
| shippedNotInvLcyNoVat.id | guid | X | X |   |
| shippedNotInvLcyNoVat.fileName | string |   |   | X |
| shippedNotInvLcyNoVat.byteSize | int |   |   | X |
| reservedQuantity | float |   |   | X |
| reservedQuantity.id | guid | X | X |   |
| reservedQuantity.fileName | string |   |   | X |
| reservedQuantity.byteSize | int |   |   | X |
| reserve | string |   |   | X |
| reserve.id | guid | X | X |   |
| reserve.fileName | string |   |   | X |
| reserve.byteSize | int |   |   | X |
| blanketOrderNumber | string |   |   | X |
| blanketOrderNumber.id | guid | X | X |   |
| blanketOrderNumber.fileName | string |   |   | X |
| blanketOrderNumber.byteSize | int |   |   | X |
| blanketOrderLineNumber | int |   |   | X |
| blanketOrderLineNumber.id | guid | X | X |   |
| blanketOrderLineNumber.fileName | string |   |   | X |
| blanketOrderLineNumber.byteSize | int |   |   | X |
| vatBaseAmount | float |   |   | X |
| vatBaseAmount.id | guid | X | X |   |
| vatBaseAmount.fileName | string |   |   | X |
| vatBaseAmount.byteSize | int |   |   | X |
| unitCost | float |   |   | X |
| unitCost.id | guid | X | X |   |
| unitCost.fileName | string |   |   | X |
| unitCost.byteSize | int |   |   | X |
| systemCreatedEntry | bool |   |   | X |
| systemCreatedEntry.id | guid | X | X |   |
| systemCreatedEntry.fileName | string |   |   | X |
| systemCreatedEntry.byteSize | int |   |   | X |
| lineAmount | float |   |   | X |
| lineAmount.id | guid | X | X |   |
| lineAmount.fileName | string |   |   | X |
| lineAmount.byteSize | int |   |   | X |
| vatDifference | float |   |   | X |
| vatDifference.id | guid | X | X |   |
| vatDifference.fileName | string |   |   | X |
| vatDifference.byteSize | int |   |   | X |
| invDiscAmountToInvoice | float |   |   | X |
| invDiscAmountToInvoice.id | guid | X | X |   |
| invDiscAmountToInvoice.fileName | string |   |   | X |
| invDiscAmountToInvoice.byteSize | int |   |   | X |
| vatIdentifier | string |   |   | X |
| vatIdentifier.id | guid | X | X |   |
| vatIdentifier.fileName | string |   |   | X |
| vatIdentifier.byteSize | int |   |   | X |
| icPartnerRefType | string |   |   | X |
| icPartnerRefType.id | guid | X | X |   |
| icPartnerRefType.fileName | string |   |   | X |
| icPartnerRefType.byteSize | int |   |   | X |
| icPartnerReference | string |   |   | X |
| icPartnerReference.id | guid | X | X |   |
| icPartnerReference.fileName | string |   |   | X |
| icPartnerReference.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| prepmtLineAmount | float |   |   | X |
| prepmtLineAmount.id | guid | X | X |   |
| prepmtLineAmount.fileName | string |   |   | X |
| prepmtLineAmount.byteSize | int |   |   | X |
| prepmtAmtInv | float |   |   | X |
| prepmtAmtInv.id | guid | X | X |   |
| prepmtAmtInv.fileName | string |   |   | X |
| prepmtAmtInv.byteSize | int |   |   | X |
| prepmtAmtInclVat | float |   |   | X |
| prepmtAmtInclVat.id | guid | X | X |   |
| prepmtAmtInclVat.fileName | string |   |   | X |
| prepmtAmtInclVat.byteSize | int |   |   | X |
| prepaymentAmount | float |   |   | X |
| prepaymentAmount.id | guid | X | X |   |
| prepaymentAmount.fileName | string |   |   | X |
| prepaymentAmount.byteSize | int |   |   | X |
| prepmtVatBaseAmt | float |   |   | X |
| prepmtVatBaseAmt.id | guid | X | X |   |
| prepmtVatBaseAmt.fileName | string |   |   | X |
| prepmtVatBaseAmt.byteSize | int |   |   | X |
| prepaymentVatPercent | float |   |   | X |
| prepaymentVatPercent.id | guid | X | X |   |
| prepaymentVatPercent.fileName | string |   |   | X |
| prepaymentVatPercent.byteSize | int |   |   | X |
| prepmtVatCalcType | string |   |   | X |
| prepmtVatCalcType.id | guid | X | X |   |
| prepmtVatCalcType.fileName | string |   |   | X |
| prepmtVatCalcType.byteSize | int |   |   | X |
| prepaymentVatIdentifier | string |   |   | X |
| prepaymentVatIdentifier.id | guid | X | X |   |
| prepaymentVatIdentifier.fileName | string |   |   | X |
| prepaymentVatIdentifier.byteSize | int |   |   | X |
| prepaymentTaxAreaCode | string |   |   | X |
| prepaymentTaxAreaCode.id | guid | X | X |   |
| prepaymentTaxAreaCode.fileName | string |   |   | X |
| prepaymentTaxAreaCode.byteSize | int |   |   | X |
| prepaymentTaxLiable | bool |   |   | X |
| prepaymentTaxLiable.id | guid | X | X |   |
| prepaymentTaxLiable.fileName | string |   |   | X |
| prepaymentTaxLiable.byteSize | int |   |   | X |
| prepaymentTaxGroupCode | string |   |   | X |
| prepaymentTaxGroupCode.id | guid | X | X |   |
| prepaymentTaxGroupCode.fileName | string |   |   | X |
| prepaymentTaxGroupCode.byteSize | int |   |   | X |
| prepmtAmtToDeduct | float |   |   | X |
| prepmtAmtToDeduct.id | guid | X | X |   |
| prepmtAmtToDeduct.fileName | string |   |   | X |
| prepmtAmtToDeduct.byteSize | int |   |   | X |
| prepmtAmtDeducted | float |   |   | X |
| prepmtAmtDeducted.id | guid | X | X |   |
| prepmtAmtDeducted.fileName | string |   |   | X |
| prepmtAmtDeducted.byteSize | int |   |   | X |
| prepaymentLine | bool |   |   | X |
| prepaymentLine.id | guid | X | X |   |
| prepaymentLine.fileName | string |   |   | X |
| prepaymentLine.byteSize | int |   |   | X |
| prepmtAmountInvInclVat | float |   |   | X |
| prepmtAmountInvInclVat.id | guid | X | X |   |
| prepmtAmountInvInclVat.fileName | string |   |   | X |
| prepmtAmountInvInclVat.byteSize | int |   |   | X |
| prepmtAmountInvLcy | float |   |   | X |
| prepmtAmountInvLcy.id | guid | X | X |   |
| prepmtAmountInvLcy.fileName | string |   |   | X |
| prepmtAmountInvLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| prepmtVatAmountInvLcy | float |   |   | X |
| prepmtVatAmountInvLcy.id | guid | X | X |   |
| prepmtVatAmountInvLcy.fileName | string |   |   | X |
| prepmtVatAmountInvLcy.byteSize | int |   |   | X |
| prepaymentVatDifference | float |   |   | X |
| prepaymentVatDifference.id | guid | X | X |   |
| prepaymentVatDifference.fileName | string |   |   | X |
| prepaymentVatDifference.byteSize | int |   |   | X |
| prepmtVatDiffToDeduct | float |   |   | X |
| prepmtVatDiffToDeduct.id | guid | X | X |   |
| prepmtVatDiffToDeduct.fileName | string |   |   | X |
| prepmtVatDiffToDeduct.byteSize | int |   |   | X |
| prepmtVatDiffDeducted | float |   |   | X |
| prepmtVatDiffDeducted.id | guid | X | X |   |
| prepmtVatDiffDeducted.fileName | string |   |   | X |
| prepmtVatDiffDeducted.byteSize | int |   |   | X |
| dimensionSetId | int |   |   | X |
| dimensionSetId.id | guid | X | X |   |
| dimensionSetId.fileName | string |   |   | X |
| dimensionSetId.byteSize | int |   |   | X |
| qtyToAssembleToOrder | float |   |   | X |
| qtyToAssembleToOrder.id | guid | X | X |   |
| qtyToAssembleToOrder.fileName | string |   |   | X |
| qtyToAssembleToOrder.byteSize | int |   |   | X |
| qtyToAsmToOrderBase | float |   |   | X |
| qtyToAsmToOrderBase.id | guid | X | X |   |
| qtyToAsmToOrderBase.fileName | string |   |   | X |
| qtyToAsmToOrderBase.byteSize | int |   |   | X |
| atoWhseOutstandingQty | float |   |   | X |
| atoWhseOutstandingQty.id | guid | X | X |   |
| atoWhseOutstandingQty.fileName | string |   |   | X |
| atoWhseOutstandingQty.byteSize | int |   |   | X |
| atoWhseOutstdQtyBase | float |   |   | X |
| atoWhseOutstdQtyBase.id | guid | X | X |   |
| atoWhseOutstdQtyBase.fileName | string |   |   | X |
| atoWhseOutstdQtyBase.byteSize | int |   |   | X |
| jobTaskNumber | string |   |   | X |
| jobTaskNumber.id | guid | X | X |   |
| jobTaskNumber.fileName | string |   |   | X |
| jobTaskNumber.byteSize | int |   |   | X |
| jobContractEntryNumber | int |   |   | X |
| jobContractEntryNumber.id | guid | X | X |   |
| jobContractEntryNumber.fileName | string |   |   | X |
| jobContractEntryNumber.byteSize | int |   |   | X |
| postingDate | date |   |   | X |
| postingDate.id | guid | X | X |   |
| postingDate.fileName | string |   |   | X |
| postingDate.byteSize | int |   |   | X |
| deferralCode | string |   |   | X |
| deferralCode.id | guid | X | X |   |
| deferralCode.fileName | string |   |   | X |
| deferralCode.byteSize | int |   |   | X |
| returnsDeferralStartDate | date |   |   | X |
| returnsDeferralStartDate.id | guid | X | X |   |
| returnsDeferralStartDate.fileName | string |   |   | X |
| returnsDeferralStartDate.byteSize | int |   |   | X |
| variantCode | string |   |   | X |
| variantCode.id | guid | X | X |   |
| variantCode.fileName | string |   |   | X |
| variantCode.byteSize | int |   |   | X |
| binCode | string |   |   | X |
| binCode.id | guid | X | X |   |
| binCode.fileName | string |   |   | X |
| binCode.byteSize | int |   |   | X |
| qtyPerUnitOfMeasure | float |   |   | X |
| qtyPerUnitOfMeasure.id | guid | X | X |   |
| qtyPerUnitOfMeasure.fileName | string |   |   | X |
| qtyPerUnitOfMeasure.byteSize | int |   |   | X |
| planned | bool |   |   | X |
| planned.id | guid | X | X |   |
| planned.fileName | string |   |   | X |
| planned.byteSize | int |   |   | X |
| unitOfMeasureCode | string |   |   | X |
| unitOfMeasureCode.id | guid | X | X |   |
| unitOfMeasureCode.fileName | string |   |   | X |
| unitOfMeasureCode.byteSize | int |   |   | X |
| quantityBase | float |   |   | X |
| quantityBase.id | guid | X | X |   |
| quantityBase.fileName | string |   |   | X |
| quantityBase.byteSize | int |   |   | X |
| outstandingQtyBase | float |   |   | X |
| outstandingQtyBase.id | guid | X | X |   |
| outstandingQtyBase.fileName | string |   |   | X |
| outstandingQtyBase.byteSize | int |   |   | X |
| qtyToInvoiceBase | float |   |   | X |
| qtyToInvoiceBase.id | guid | X | X |   |
| qtyToInvoiceBase.fileName | string |   |   | X |
| qtyToInvoiceBase.byteSize | int |   |   | X |
| qtyToShipBase | float |   |   | X |
| qtyToShipBase.id | guid | X | X |   |
| qtyToShipBase.fileName | string |   |   | X |
| qtyToShipBase.byteSize | int |   |   | X |
| qtyShippedNotInvdBase | float |   |   | X |
| qtyShippedNotInvdBase.id | guid | X | X |   |
| qtyShippedNotInvdBase.fileName | string |   |   | X |
| qtyShippedNotInvdBase.byteSize | int |   |   | X |
| qtyShippedBase | float |   |   | X |
| qtyShippedBase.id | guid | X | X |   |
| qtyShippedBase.fileName | string |   |   | X |
| qtyShippedBase.byteSize | int |   |   | X |
| qtyInvoicedBase | float |   |   | X |
| qtyInvoicedBase.id | guid | X | X |   |
| qtyInvoicedBase.fileName | string |   |   | X |
| qtyInvoicedBase.byteSize | int |   |   | X |
| reservedQtyBase | float |   |   | X |
| reservedQtyBase.id | guid | X | X |   |
| reservedQtyBase.fileName | string |   |   | X |
| reservedQtyBase.byteSize | int |   |   | X |
| faPostingDate | date |   |   | X |
| faPostingDate.id | guid | X | X |   |
| faPostingDate.fileName | string |   |   | X |
| faPostingDate.byteSize | int |   |   | X |
| depreciationBookCode | string |   |   | X |
| depreciationBookCode.id | guid | X | X |   |
| depreciationBookCode.fileName | string |   |   | X |
| depreciationBookCode.byteSize | int |   |   | X |
| deprUntilFaPostingDate | bool |   |   | X |
| deprUntilFaPostingDate.id | guid | X | X |   |
| deprUntilFaPostingDate.fileName | string |   |   | X |
| deprUntilFaPostingDate.byteSize | int |   |   | X |
| duplicateInDepreciationBook | string |   |   | X |
| duplicateInDepreciationBook.id | guid | X | X |   |
| duplicateInDepreciationBook.fileName | string |   |   | X |
| duplicateInDepreciationBook.byteSize | int |   |   | X |
| useDuplicationList | bool |   |   | X |
| useDuplicationList.id | guid | X | X |   |
| useDuplicationList.fileName | string |   |   | X |
| useDuplicationList.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| outOfStockSubstitution | bool |   |   | X |
| outOfStockSubstitution.id | guid | X | X |   |
| outOfStockSubstitution.fileName | string |   |   | X |
| outOfStockSubstitution.byteSize | int |   |   | X |
| substitutionAvailable | bool |   |   | X |
| substitutionAvailable.id | guid | X | X |   |
| substitutionAvailable.fileName | string |   |   | X |
| substitutionAvailable.byteSize | int |   |   | X |
| originallyOrderedNumber | string |   |   | X |
| originallyOrderedNumber.id | guid | X | X |   |
| originallyOrderedNumber.fileName | string |   |   | X |
| originallyOrderedNumber.byteSize | int |   |   | X |
| originallyOrderedVarCode | string |   |   | X |
| originallyOrderedVarCode.id | guid | X | X |   |
| originallyOrderedVarCode.fileName | string |   |   | X |
| originallyOrderedVarCode.byteSize | int |   |   | X |
| crossReferenceNumber | string |   |   | X |
| crossReferenceNumber.id | guid | X | X |   |
| crossReferenceNumber.fileName | string |   |   | X |
| crossReferenceNumber.byteSize | int |   |   | X |
| unitOfMeasureCrossRef | string |   |   | X |
| unitOfMeasureCrossRef.id | guid | X | X |   |
| unitOfMeasureCrossRef.fileName | string |   |   | X |
| unitOfMeasureCrossRef.byteSize | int |   |   | X |
| crossReferenceType | string |   |   | X |
| crossReferenceType.id | guid | X | X |   |
| crossReferenceType.fileName | string |   |   | X |
| crossReferenceType.byteSize | int |   |   | X |
| crossReferenceTypeNumber | string |   |   | X |
| crossReferenceTypeNumber.id | guid | X | X |   |
| crossReferenceTypeNumber.fileName | string |   |   | X |
| crossReferenceTypeNumber.byteSize | int |   |   | X |
| itemCategoryCode | string |   |   | X |
| itemCategoryCode.id | guid | X | X |   |
| itemCategoryCode.fileName | string |   |   | X |
| itemCategoryCode.byteSize | int |   |   | X |
| nonstock | bool |   |   | X |
| nonstock.id | guid | X | X |   |
| nonstock.fileName | string |   |   | X |
| nonstock.byteSize | int |   |   | X |
| purchasingCode | string |   |   | X |
| purchasingCode.id | guid | X | X |   |
| purchasingCode.fileName | string |   |   | X |
| purchasingCode.byteSize | int |   |   | X |
| specialOrder | bool |   |   | X |
| specialOrder.id | guid | X | X |   |
| specialOrder.fileName | string |   |   | X |
| specialOrder.byteSize | int |   |   | X |
| specialOrderPurchaseNumber | string |   |   | X |
| specialOrderPurchaseNumber.id | guid | X | X |   |
| specialOrderPurchaseNumber.fileName | string |   |   | X |
| specialOrderPurchaseNumber.byteSize | int |   |   | X |
| specialOrderPurchLineNumber | int |   |   | X |
| specialOrderPurchLineNumber.id | guid | X | X |   |
| specialOrderPurchLineNumber.fileName | string |   |   | X |
| specialOrderPurchLineNumber.byteSize | int |   |   | X |
| whseOutstandingQty | float |   |   | X |
| whseOutstandingQty.id | guid | X | X |   |
| whseOutstandingQty.fileName | string |   |   | X |
| whseOutstandingQty.byteSize | int |   |   | X |
| whseOutstandingQtyBase | float |   |   | X |
| whseOutstandingQtyBase.id | guid | X | X |   |
| whseOutstandingQtyBase.fileName | string |   |   | X |
| whseOutstandingQtyBase.byteSize | int |   |   | X |
| completelyShipped | bool |   |   | X |
| completelyShipped.id | guid | X | X |   |
| completelyShipped.fileName | string |   |   | X |
| completelyShipped.byteSize | int |   |   | X |
| requestedDeliveryDate | date |   |   | X |
| requestedDeliveryDate.id | guid | X | X |   |
| requestedDeliveryDate.fileName | string |   |   | X |
| requestedDeliveryDate.byteSize | int |   |   | X |
| promisedDeliveryDate | date |   |   | X |
| promisedDeliveryDate.id | guid | X | X |   |
| promisedDeliveryDate.fileName | string |   |   | X |
| promisedDeliveryDate.byteSize | int |   |   | X |
| shippingTime | string |   |   | X |
| shippingTime.id | guid | X | X |   |
| shippingTime.fileName | string |   |   | X |
| shippingTime.byteSize | int |   |   | X |
| outboundWhseHandlingTime | string |   |   | X |
| outboundWhseHandlingTime.id | guid | X | X |   |
| outboundWhseHandlingTime.fileName | string |   |   | X |
| outboundWhseHandlingTime.byteSize | int |   |   | X |
| plannedDeliveryDate | date |   |   | X |
| plannedDeliveryDate.id | guid | X | X |   |
| plannedDeliveryDate.fileName | string |   |   | X |
| plannedDeliveryDate.byteSize | int |   |   | X |
| plannedShipmentDate | date |   |   | X |
| plannedShipmentDate.id | guid | X | X |   |
| plannedShipmentDate.fileName | string |   |   | X |
| plannedShipmentDate.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| shippingAgentServiceCode | string |   |   | X |
| shippingAgentServiceCode.id | guid | X | X |   |
| shippingAgentServiceCode.fileName | string |   |   | X |
| shippingAgentServiceCode.byteSize | int |   |   | X |
| allowItemChargeAssignment | bool |   |   | X |
| allowItemChargeAssignment.id | guid | X | X |   |
| allowItemChargeAssignment.fileName | string |   |   | X |
| allowItemChargeAssignment.byteSize | int |   |   | X |
| qtyToAssign | float |   |   | X |
| qtyToAssign.id | guid | X | X |   |
| qtyToAssign.fileName | string |   |   | X |
| qtyToAssign.byteSize | int |   |   | X |
| qtyAssigned | float |   |   | X |
| qtyAssigned.id | guid | X | X |   |
| qtyAssigned.fileName | string |   |   | X |
| qtyAssigned.byteSize | int |   |   | X |
| returnQtyToReceive | float |   |   | X |
| returnQtyToReceive.id | guid | X | X |   |
| returnQtyToReceive.fileName | string |   |   | X |
| returnQtyToReceive.byteSize | int |   |   | X |
| returnQtyToReceiveBase | float |   |   | X |
| returnQtyToReceiveBase.id | guid | X | X |   |
| returnQtyToReceiveBase.fileName | string |   |   | X |
| returnQtyToReceiveBase.byteSize | int |   |   | X |
| returnQtyRcdNotInvd | float |   |   | X |
| returnQtyRcdNotInvd.id | guid | X | X |   |
| returnQtyRcdNotInvd.fileName | string |   |   | X |
| returnQtyRcdNotInvd.byteSize | int |   |   | X |
| retQtyRcdNotInvdBase | float |   |   | X |
| retQtyRcdNotInvdBase.id | guid | X | X |   |
| retQtyRcdNotInvdBase.fileName | string |   |   | X |
| retQtyRcdNotInvdBase.byteSize | int |   |   | X |
| returnRcdNotInvd | float |   |   | X |
| returnRcdNotInvd.id | guid | X | X |   |
| returnRcdNotInvd.fileName | string |   |   | X |
| returnRcdNotInvd.byteSize | int |   |   | X |
| returnRcdNotInvdLcy | float |   |   | X |
| returnRcdNotInvdLcy.id | guid | X | X |   |
| returnRcdNotInvdLcy.fileName | string |   |   | X |
| returnRcdNotInvdLcy.byteSize | int |   |   | X |
| returnQtyReceived | float |   |   | X |
| returnQtyReceived.id | guid | X | X |   |
| returnQtyReceived.fileName | string |   |   | X |
| returnQtyReceived.byteSize | int |   |   | X |
| returnQtyReceivedBase | float |   |   | X |
| returnQtyReceivedBase.id | guid | X | X |   |
| returnQtyReceivedBase.fileName | string |   |   | X |
| returnQtyReceivedBase.byteSize | int |   |   | X |
| applFromItemEntry | int |   |   | X |
| applFromItemEntry.id | guid | X | X |   |
| applFromItemEntry.fileName | string |   |   | X |
| applFromItemEntry.byteSize | int |   |   | X |
| bomItemNumber | string |   |   | X |
| bomItemNumber.id | guid | X | X |   |
| bomItemNumber.fileName | string |   |   | X |
| bomItemNumber.byteSize | int |   |   | X |
| returnReceiptNumber | string |   |   | X |
| returnReceiptNumber.id | guid | X | X |   |
| returnReceiptNumber.fileName | string |   |   | X |
| returnReceiptNumber.byteSize | int |   |   | X |
| returnReceiptLineNumber | int |   |   | X |
| returnReceiptLineNumber.id | guid | X | X |   |
| returnReceiptLineNumber.fileName | string |   |   | X |
| returnReceiptLineNumber.byteSize | int |   |   | X |
| returnReasonCode | string |   |   | X |
| returnReasonCode.id | guid | X | X |   |
| returnReasonCode.fileName | string |   |   | X |
| returnReasonCode.byteSize | int |   |   | X |
| allowLineDisc | bool |   |   | X |
| allowLineDisc.id | guid | X | X |   |
| allowLineDisc.fileName | string |   |   | X |
| allowLineDisc.byteSize | int |   |   | X |
| customerDiscGroup | string |   |   | X |
| customerDiscGroup.id | guid | X | X |   |
| customerDiscGroup.fileName | string |   |   | X |
| customerDiscGroup.byteSize | int |   |   | X |
| subtype | string |   |   | X |
| subtype.id | guid | X | X |   |
| subtype.fileName | string |   |   | X |
| subtype.byteSize | int |   |   | X |
| priceDescription | string |   |   | X |
| priceDescription.id | guid | X | X |   |
| priceDescription.fileName | string |   |   | X |
| priceDescription.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowVendors
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| number | string |   |   | X |
| number.id | guid | X | X |   |
| number.fileName | string |   |   | X |
| number.byteSize | int |   |   | X |
| name | string |   |   | X |
| name.id | guid | X | X |   |
| name.fileName | string |   |   | X |
| name.byteSize | int |   |   | X |
| searchName | string |   |   | X |
| searchName.id | guid | X | X |   |
| searchName.fileName | string |   |   | X |
| searchName.byteSize | int |   |   | X |
| name2 | string |   |   | X |
| name2.id | guid | X | X |   |
| name2.fileName | string |   |   | X |
| name2.byteSize | int |   |   | X |
| address | string |   |   | X |
| address.id | guid | X | X |   |
| address.fileName | string |   |   | X |
| address.byteSize | int |   |   | X |
| address2 | string |   |   | X |
| address2.id | guid | X | X |   |
| address2.fileName | string |   |   | X |
| address2.byteSize | int |   |   | X |
| city | string |   |   | X |
| city.id | guid | X | X |   |
| city.fileName | string |   |   | X |
| city.byteSize | int |   |   | X |
| contact | string |   |   | X |
| contact.id | guid | X | X |   |
| contact.fileName | string |   |   | X |
| contact.byteSize | int |   |   | X |
| phoneNumber | string |   |   | X |
| phoneNumber.id | guid | X | X |   |
| phoneNumber.fileName | string |   |   | X |
| phoneNumber.byteSize | int |   |   | X |
| telexNumber | string |   |   | X |
| telexNumber.id | guid | X | X |   |
| telexNumber.fileName | string |   |   | X |
| telexNumber.byteSize | int |   |   | X |
| ourAccountNumber | string |   |   | X |
| ourAccountNumber.id | guid | X | X |   |
| ourAccountNumber.fileName | string |   |   | X |
| ourAccountNumber.byteSize | int |   |   | X |
| territoryCode | string |   |   | X |
| territoryCode.id | guid | X | X |   |
| territoryCode.fileName | string |   |   | X |
| territoryCode.byteSize | int |   |   | X |
| globalDimension1Code | string |   |   | X |
| globalDimension1Code.id | guid | X | X |   |
| globalDimension1Code.fileName | string |   |   | X |
| globalDimension1Code.byteSize | int |   |   | X |
| globalDimension2Code | string |   |   | X |
| globalDimension2Code.id | guid | X | X |   |
| globalDimension2Code.fileName | string |   |   | X |
| globalDimension2Code.byteSize | int |   |   | X |
| budgetedAmount | float |   |   | X |
| budgetedAmount.id | guid | X | X |   |
| budgetedAmount.fileName | string |   |   | X |
| budgetedAmount.byteSize | int |   |   | X |
| vendorPostingGroup | string |   |   | X |
| vendorPostingGroup.id | guid | X | X |   |
| vendorPostingGroup.fileName | string |   |   | X |
| vendorPostingGroup.byteSize | int |   |   | X |
| currencyCode | string |   |   | X |
| currencyCode.id | guid | X | X |   |
| currencyCode.fileName | string |   |   | X |
| currencyCode.byteSize | int |   |   | X |
| languageCode | string |   |   | X |
| languageCode.id | guid | X | X |   |
| languageCode.fileName | string |   |   | X |
| languageCode.byteSize | int |   |   | X |
| statisticsGroup | int |   |   | X |
| statisticsGroup.id | guid | X | X |   |
| statisticsGroup.fileName | string |   |   | X |
| statisticsGroup.byteSize | int |   |   | X |
| paymentTermsCode | string |   |   | X |
| paymentTermsCode.id | guid | X | X |   |
| paymentTermsCode.fileName | string |   |   | X |
| paymentTermsCode.byteSize | int |   |   | X |
| finChargeTermsCode | string |   |   | X |
| finChargeTermsCode.id | guid | X | X |   |
| finChargeTermsCode.fileName | string |   |   | X |
| finChargeTermsCode.byteSize | int |   |   | X |
| purchaserCode | string |   |   | X |
| purchaserCode.id | guid | X | X |   |
| purchaserCode.fileName | string |   |   | X |
| purchaserCode.byteSize | int |   |   | X |
| shipmentMethodCode | string |   |   | X |
| shipmentMethodCode.id | guid | X | X |   |
| shipmentMethodCode.fileName | string |   |   | X |
| shipmentMethodCode.byteSize | int |   |   | X |
| shippingAgentCode | string |   |   | X |
| shippingAgentCode.id | guid | X | X |   |
| shippingAgentCode.fileName | string |   |   | X |
| shippingAgentCode.byteSize | int |   |   | X |
| invoiceDiscCode | string |   |   | X |
| invoiceDiscCode.id | guid | X | X |   |
| invoiceDiscCode.fileName | string |   |   | X |
| invoiceDiscCode.byteSize | int |   |   | X |
| countryRegionCode | string |   |   | X |
| countryRegionCode.id | guid | X | X |   |
| countryRegionCode.fileName | string |   |   | X |
| countryRegionCode.byteSize | int |   |   | X |
| comment | bool |   |   | X |
| comment.id | guid | X | X |   |
| comment.fileName | string |   |   | X |
| comment.byteSize | int |   |   | X |
| blocked | string |   |   | X |
| blocked.id | guid | X | X |   |
| blocked.fileName | string |   |   | X |
| blocked.byteSize | int |   |   | X |
| payToVendorNumber | string |   |   | X |
| payToVendorNumber.id | guid | X | X |   |
| payToVendorNumber.fileName | string |   |   | X |
| payToVendorNumber.byteSize | int |   |   | X |
| priority | int |   |   | X |
| priority.id | guid | X | X |   |
| priority.fileName | string |   |   | X |
| priority.byteSize | int |   |   | X |
| paymentMethodCode | string |   |   | X |
| paymentMethodCode.id | guid | X | X |   |
| paymentMethodCode.fileName | string |   |   | X |
| paymentMethodCode.byteSize | int |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| lastModifiedDateTime.id | guid | X | X |   |
| lastModifiedDateTime.fileName | string |   |   | X |
| lastModifiedDateTime.byteSize | int |   |   | X |
| lastDateModified | date |   |   | X |
| lastDateModified.id | guid | X | X |   |
| lastDateModified.fileName | string |   |   | X |
| lastDateModified.byteSize | int |   |   | X |
| dateFilter | string |   |   | X |
| dateFilter.id | guid | X | X |   |
| dateFilter.fileName | string |   |   | X |
| dateFilter.byteSize | int |   |   | X |
| globalDimension1Filter | string |   |   | X |
| globalDimension1Filter.id | guid | X | X |   |
| globalDimension1Filter.fileName | string |   |   | X |
| globalDimension1Filter.byteSize | int |   |   | X |
| globalDimension2Filter | string |   |   | X |
| globalDimension2Filter.id | guid | X | X |   |
| globalDimension2Filter.fileName | string |   |   | X |
| globalDimension2Filter.byteSize | int |   |   | X |
| balance | float |   |   | X |
| balance.id | guid | X | X |   |
| balance.fileName | string |   |   | X |
| balance.byteSize | int |   |   | X |
| balanceLcy | float |   |   | X |
| balanceLcy.id | guid | X | X |   |
| balanceLcy.fileName | string |   |   | X |
| balanceLcy.byteSize | int |   |   | X |
| netChange | float |   |   | X |
| netChange.id | guid | X | X |   |
| netChange.fileName | string |   |   | X |
| netChange.byteSize | int |   |   | X |
| netChangeLcy | float |   |   | X |
| netChangeLcy.id | guid | X | X |   |
| netChangeLcy.fileName | string |   |   | X |
| netChangeLcy.byteSize | int |   |   | X |
| purchasesLcy | float |   |   | X |
| purchasesLcy.id | guid | X | X |   |
| purchasesLcy.fileName | string |   |   | X |
| purchasesLcy.byteSize | int |   |   | X |
| invDiscountsLcy | float |   |   | X |
| invDiscountsLcy.id | guid | X | X |   |
| invDiscountsLcy.fileName | string |   |   | X |
| invDiscountsLcy.byteSize | int |   |   | X |
| pmtDiscountsLcy | float |   |   | X |
| pmtDiscountsLcy.id | guid | X | X |   |
| pmtDiscountsLcy.fileName | string |   |   | X |
| pmtDiscountsLcy.byteSize | int |   |   | X |
| balanceDue | float |   |   | X |
| balanceDue.id | guid | X | X |   |
| balanceDue.fileName | string |   |   | X |
| balanceDue.byteSize | int |   |   | X |
| balanceDueLcy | float |   |   | X |
| balanceDueLcy.id | guid | X | X |   |
| balanceDueLcy.fileName | string |   |   | X |
| balanceDueLcy.byteSize | int |   |   | X |
| payments | float |   |   | X |
| payments.id | guid | X | X |   |
| payments.fileName | string |   |   | X |
| payments.byteSize | int |   |   | X |
| invoiceAmounts | float |   |   | X |
| invoiceAmounts.id | guid | X | X |   |
| invoiceAmounts.fileName | string |   |   | X |
| invoiceAmounts.byteSize | int |   |   | X |
| crMemoAmounts | float |   |   | X |
| crMemoAmounts.id | guid | X | X |   |
| crMemoAmounts.fileName | string |   |   | X |
| crMemoAmounts.byteSize | int |   |   | X |
| financeChargeMemoAmounts | float |   |   | X |
| financeChargeMemoAmounts.id | guid | X | X |   |
| financeChargeMemoAmounts.fileName | string |   |   | X |
| financeChargeMemoAmounts.byteSize | int |   |   | X |
| paymentsLcy | float |   |   | X |
| paymentsLcy.id | guid | X | X |   |
| paymentsLcy.fileName | string |   |   | X |
| paymentsLcy.byteSize | int |   |   | X |
| invAmountsLcy | float |   |   | X |
| invAmountsLcy.id | guid | X | X |   |
| invAmountsLcy.fileName | string |   |   | X |
| invAmountsLcy.byteSize | int |   |   | X |
| crMemoAmountsLcy | float |   |   | X |
| crMemoAmountsLcy.id | guid | X | X |   |
| crMemoAmountsLcy.fileName | string |   |   | X |
| crMemoAmountsLcy.byteSize | int |   |   | X |
| finChargeMemoAmountsLcy | float |   |   | X |
| finChargeMemoAmountsLcy.id | guid | X | X |   |
| finChargeMemoAmountsLcy.fileName | string |   |   | X |
| finChargeMemoAmountsLcy.byteSize | int |   |   | X |
| outstandingOrders | float |   |   | X |
| outstandingOrders.id | guid | X | X |   |
| outstandingOrders.fileName | string |   |   | X |
| outstandingOrders.byteSize | int |   |   | X |
| amtRcdNotInvoiced | float |   |   | X |
| amtRcdNotInvoiced.id | guid | X | X |   |
| amtRcdNotInvoiced.fileName | string |   |   | X |
| amtRcdNotInvoiced.byteSize | int |   |   | X |
| applicationMethod | string |   |   | X |
| applicationMethod.id | guid | X | X |   |
| applicationMethod.fileName | string |   |   | X |
| applicationMethod.byteSize | int |   |   | X |
| pricesIncludingVat | bool |   |   | X |
| pricesIncludingVat.id | guid | X | X |   |
| pricesIncludingVat.fileName | string |   |   | X |
| pricesIncludingVat.byteSize | int |   |   | X |
| faxNumber | string |   |   | X |
| faxNumber.id | guid | X | X |   |
| faxNumber.fileName | string |   |   | X |
| faxNumber.byteSize | int |   |   | X |
| telexAnswerBack | string |   |   | X |
| telexAnswerBack.id | guid | X | X |   |
| telexAnswerBack.fileName | string |   |   | X |
| telexAnswerBack.byteSize | int |   |   | X |
| vatRegistrationNumber | string |   |   | X |
| vatRegistrationNumber.id | guid | X | X |   |
| vatRegistrationNumber.fileName | string |   |   | X |
| vatRegistrationNumber.byteSize | int |   |   | X |
| genBusPostingGroup | string |   |   | X |
| genBusPostingGroup.id | guid | X | X |   |
| genBusPostingGroup.fileName | string |   |   | X |
| genBusPostingGroup.byteSize | int |   |   | X |
| gln | string |   |   | X |
| gln.id | guid | X | X |   |
| gln.fileName | string |   |   | X |
| gln.byteSize | int |   |   | X |
| postCode | string |   |   | X |
| postCode.id | guid | X | X |   |
| postCode.fileName | string |   |   | X |
| postCode.byteSize | int |   |   | X |
| county | string |   |   | X |
| county.id | guid | X | X |   |
| county.fileName | string |   |   | X |
| county.byteSize | int |   |   | X |
| debitAmount | float |   |   | X |
| debitAmount.id | guid | X | X |   |
| debitAmount.fileName | string |   |   | X |
| debitAmount.byteSize | int |   |   | X |
| creditAmount | float |   |   | X |
| creditAmount.id | guid | X | X |   |
| creditAmount.fileName | string |   |   | X |
| creditAmount.byteSize | int |   |   | X |
| debitAmountLcy | float |   |   | X |
| debitAmountLcy.id | guid | X | X |   |
| debitAmountLcy.fileName | string |   |   | X |
| debitAmountLcy.byteSize | int |   |   | X |
| creditAmountLcy | float |   |   | X |
| creditAmountLcy.id | guid | X | X |   |
| creditAmountLcy.fileName | string |   |   | X |
| creditAmountLcy.byteSize | int |   |   | X |
| eMail | string |   |   | X |
| eMail.id | guid | X | X |   |
| eMail.fileName | string |   |   | X |
| eMail.byteSize | int |   |   | X |
| homePage | string |   |   | X |
| homePage.id | guid | X | X |   |
| homePage.fileName | string |   |   | X |
| homePage.byteSize | int |   |   | X |
| reminderAmounts | float |   |   | X |
| reminderAmounts.id | guid | X | X |   |
| reminderAmounts.fileName | string |   |   | X |
| reminderAmounts.byteSize | int |   |   | X |
| reminderAmountsLcy | float |   |   | X |
| reminderAmountsLcy.id | guid | X | X |   |
| reminderAmountsLcy.fileName | string |   |   | X |
| reminderAmountsLcy.byteSize | int |   |   | X |
| numberSeries | string |   |   | X |
| numberSeries.id | guid | X | X |   |
| numberSeries.fileName | string |   |   | X |
| numberSeries.byteSize | int |   |   | X |
| taxAreaCode | string |   |   | X |
| taxAreaCode.id | guid | X | X |   |
| taxAreaCode.fileName | string |   |   | X |
| taxAreaCode.byteSize | int |   |   | X |
| taxLiable | bool |   |   | X |
| taxLiable.id | guid | X | X |   |
| taxLiable.fileName | string |   |   | X |
| taxLiable.byteSize | int |   |   | X |
| vatBusPostingGroup | string |   |   | X |
| vatBusPostingGroup.id | guid | X | X |   |
| vatBusPostingGroup.fileName | string |   |   | X |
| vatBusPostingGroup.byteSize | int |   |   | X |
| currencyFilter | string |   |   | X |
| currencyFilter.id | guid | X | X |   |
| currencyFilter.fileName | string |   |   | X |
| currencyFilter.byteSize | int |   |   | X |
| outstandingOrdersLcy | float |   |   | X |
| outstandingOrdersLcy.id | guid | X | X |   |
| outstandingOrdersLcy.fileName | string |   |   | X |
| outstandingOrdersLcy.byteSize | int |   |   | X |
| amtRcdNotInvoicedLcy | float |   |   | X |
| amtRcdNotInvoicedLcy.id | guid | X | X |   |
| amtRcdNotInvoicedLcy.fileName | string |   |   | X |
| amtRcdNotInvoicedLcy.byteSize | int |   |   | X |
| blockPaymentTolerance | bool |   |   | X |
| blockPaymentTolerance.id | guid | X | X |   |
| blockPaymentTolerance.fileName | string |   |   | X |
| blockPaymentTolerance.byteSize | int |   |   | X |
| pmtDiscToleranceLcy | float |   |   | X |
| pmtDiscToleranceLcy.id | guid | X | X |   |
| pmtDiscToleranceLcy.fileName | string |   |   | X |
| pmtDiscToleranceLcy.byteSize | int |   |   | X |
| pmtToleranceLcy | float |   |   | X |
| pmtToleranceLcy.id | guid | X | X |   |
| pmtToleranceLcy.fileName | string |   |   | X |
| pmtToleranceLcy.byteSize | int |   |   | X |
| icPartnerCode | string |   |   | X |
| icPartnerCode.id | guid | X | X |   |
| icPartnerCode.fileName | string |   |   | X |
| icPartnerCode.byteSize | int |   |   | X |
| refunds | float |   |   | X |
| refunds.id | guid | X | X |   |
| refunds.fileName | string |   |   | X |
| refunds.byteSize | int |   |   | X |
| refundsLcy | float |   |   | X |
| refundsLcy.id | guid | X | X |   |
| refundsLcy.fileName | string |   |   | X |
| refundsLcy.byteSize | int |   |   | X |
| otherAmounts | float |   |   | X |
| otherAmounts.id | guid | X | X |   |
| otherAmounts.fileName | string |   |   | X |
| otherAmounts.byteSize | int |   |   | X |
| otherAmountsLcy | float |   |   | X |
| otherAmountsLcy.id | guid | X | X |   |
| otherAmountsLcy.fileName | string |   |   | X |
| otherAmountsLcy.byteSize | int |   |   | X |
| prepaymentPercent | float |   |   | X |
| prepaymentPercent.id | guid | X | X |   |
| prepaymentPercent.fileName | string |   |   | X |
| prepaymentPercent.byteSize | int |   |   | X |
| outstandingInvoices | float |   |   | X |
| outstandingInvoices.id | guid | X | X |   |
| outstandingInvoices.fileName | string |   |   | X |
| outstandingInvoices.byteSize | int |   |   | X |
| outstandingInvoicesLcy | float |   |   | X |
| outstandingInvoicesLcy.id | guid | X | X |   |
| outstandingInvoicesLcy.fileName | string |   |   | X |
| outstandingInvoicesLcy.byteSize | int |   |   | X |
| payToNumberOfArchivedDoc | int |   |   | X |
| payToNumberOfArchivedDoc.id | guid | X | X |   |
| payToNumberOfArchivedDoc.fileName | string |   |   | X |
| payToNumberOfArchivedDoc.byteSize | int |   |   | X |
| buyFromNumberOfArchivedDoc | int |   |   | X |
| buyFromNumberOfArchivedDoc.id | guid | X | X |   |
| buyFromNumberOfArchivedDoc.fileName | string |   |   | X |
| buyFromNumberOfArchivedDoc.byteSize | int |   |   | X |
| partnerType | string |   |   | X |
| partnerType.id | guid | X | X |   |
| partnerType.fileName | string |   |   | X |
| partnerType.byteSize | int |   |   | X |
| creditorNumber | string |   |   | X |
| creditorNumber.id | guid | X | X |   |
| creditorNumber.fileName | string |   |   | X |
| creditorNumber.byteSize | int |   |   | X |
| preferredBankAccountCode | string |   |   | X |
| preferredBankAccountCode.id | guid | X | X |   |
| preferredBankAccountCode.fileName | string |   |   | X |
| preferredBankAccountCode.byteSize | int |   |   | X |
| cashFlowPaymentTermsCode | string |   |   | X |
| cashFlowPaymentTermsCode.id | guid | X | X |   |
| cashFlowPaymentTermsCode.fileName | string |   |   | X |
| cashFlowPaymentTermsCode.byteSize | int |   |   | X |
| primaryContactNumber | string |   |   | X |
| primaryContactNumber.id | guid | X | X |   |
| primaryContactNumber.fileName | string |   |   | X |
| primaryContactNumber.byteSize | int |   |   | X |
| responsibilityCenter | string |   |   | X |
| responsibilityCenter.id | guid | X | X |   |
| responsibilityCenter.fileName | string |   |   | X |
| responsibilityCenter.byteSize | int |   |   | X |
| locationCode | string |   |   | X |
| locationCode.id | guid | X | X |   |
| locationCode.fileName | string |   |   | X |
| locationCode.byteSize | int |   |   | X |
| leadTimeCalculation | string |   |   | X |
| leadTimeCalculation.id | guid | X | X |   |
| leadTimeCalculation.fileName | string |   |   | X |
| leadTimeCalculation.byteSize | int |   |   | X |
| numberOfPstdReceipts | int |   |   | X |
| numberOfPstdReceipts.id | guid | X | X |   |
| numberOfPstdReceipts.fileName | string |   |   | X |
| numberOfPstdReceipts.byteSize | int |   |   | X |
| numberOfPstdInvoices | int |   |   | X |
| numberOfPstdInvoices.id | guid | X | X |   |
| numberOfPstdInvoices.fileName | string |   |   | X |
| numberOfPstdInvoices.byteSize | int |   |   | X |
| numberOfPstdReturnShipments | int |   |   | X |
| numberOfPstdReturnShipments.id | guid | X | X |   |
| numberOfPstdReturnShipments.fileName | string |   |   | X |
| numberOfPstdReturnShipments.byteSize | int |   |   | X |
| numberOfPstdCreditMemos | int |   |   | X |
| numberOfPstdCreditMemos.id | guid | X | X |   |
| numberOfPstdCreditMemos.fileName | string |   |   | X |
| numberOfPstdCreditMemos.byteSize | int |   |   | X |
| payToNumberOfOrders | int |   |   | X |
| payToNumberOfOrders.id | guid | X | X |   |
| payToNumberOfOrders.fileName | string |   |   | X |
| payToNumberOfOrders.byteSize | int |   |   | X |
| payToNumberOfInvoices | int |   |   | X |
| payToNumberOfInvoices.id | guid | X | X |   |
| payToNumberOfInvoices.fileName | string |   |   | X |
| payToNumberOfInvoices.byteSize | int |   |   | X |
| payToNumberOfReturnOrders | int |   |   | X |
| payToNumberOfReturnOrders.id | guid | X | X |   |
| payToNumberOfReturnOrders.fileName | string |   |   | X |
| payToNumberOfReturnOrders.byteSize | int |   |   | X |
| payToNumberOfCreditMemos | int |   |   | X |
| payToNumberOfCreditMemos.id | guid | X | X |   |
| payToNumberOfCreditMemos.fileName | string |   |   | X |
| payToNumberOfCreditMemos.byteSize | int |   |   | X |
| payToNumberOfPstdReceipts | int |   |   | X |
| payToNumberOfPstdReceipts.id | guid | X | X |   |
| payToNumberOfPstdReceipts.fileName | string |   |   | X |
| payToNumberOfPstdReceipts.byteSize | int |   |   | X |
| payToNumberOfPstdInvoices | int |   |   | X |
| payToNumberOfPstdInvoices.id | guid | X | X |   |
| payToNumberOfPstdInvoices.fileName | string |   |   | X |
| payToNumberOfPstdInvoices.byteSize | int |   |   | X |
| payToNumberOfPstdReturnS | int |   |   | X |
| payToNumberOfPstdReturnS.id | guid | X | X |   |
| payToNumberOfPstdReturnS.fileName | string |   |   | X |
| payToNumberOfPstdReturnS.byteSize | int |   |   | X |
| payToNumberOfPstdCrMemos | int |   |   | X |
| payToNumberOfPstdCrMemos.id | guid | X | X |   |
| payToNumberOfPstdCrMemos.fileName | string |   |   | X |
| payToNumberOfPstdCrMemos.byteSize | int |   |   | X |
| numberOfQuotes | int |   |   | X |
| numberOfQuotes.id | guid | X | X |   |
| numberOfQuotes.fileName | string |   |   | X |
| numberOfQuotes.byteSize | int |   |   | X |
| numberOfBlanketOrders | int |   |   | X |
| numberOfBlanketOrders.id | guid | X | X |   |
| numberOfBlanketOrders.fileName | string |   |   | X |
| numberOfBlanketOrders.byteSize | int |   |   | X |
| numberOfOrders | int |   |   | X |
| numberOfOrders.id | guid | X | X |   |
| numberOfOrders.fileName | string |   |   | X |
| numberOfOrders.byteSize | int |   |   | X |
| numberOfInvoices | int |   |   | X |
| numberOfInvoices.id | guid | X | X |   |
| numberOfInvoices.fileName | string |   |   | X |
| numberOfInvoices.byteSize | int |   |   | X |
| numberOfReturnOrders | int |   |   | X |
| numberOfReturnOrders.id | guid | X | X |   |
| numberOfReturnOrders.fileName | string |   |   | X |
| numberOfReturnOrders.byteSize | int |   |   | X |
| numberOfCreditMemos | int |   |   | X |
| numberOfCreditMemos.id | guid | X | X |   |
| numberOfCreditMemos.fileName | string |   |   | X |
| numberOfCreditMemos.byteSize | int |   |   | X |
| numberOfOrderAddresses | int |   |   | X |
| numberOfOrderAddresses.id | guid | X | X |   |
| numberOfOrderAddresses.fileName | string |   |   | X |
| numberOfOrderAddresses.byteSize | int |   |   | X |
| payToNumberOfQuotes | int |   |   | X |
| payToNumberOfQuotes.id | guid | X | X |   |
| payToNumberOfQuotes.fileName | string |   |   | X |
| payToNumberOfQuotes.byteSize | int |   |   | X |
| payToNumberOfBlanketOrders | int |   |   | X |
| payToNumberOfBlanketOrders.id | guid | X | X |   |
| payToNumberOfBlanketOrders.fileName | string |   |   | X |
| payToNumberOfBlanketOrders.byteSize | int |   |   | X |
| numberOfIncomingDocuments | int |   |   | X |
| numberOfIncomingDocuments.id | guid | X | X |   |
| numberOfIncomingDocuments.fileName | string |   |   | X |
| numberOfIncomingDocuments.byteSize | int |   |   | X |
| baseCalendarCode | string |   |   | X |
| baseCalendarCode.id | guid | X | X |   |
| baseCalendarCode.fileName | string |   |   | X |
| baseCalendarCode.byteSize | int |   |   | X |
| documentSendingProfile | string |   |   | X |
| documentSendingProfile.id | guid | X | X |   |
| documentSendingProfile.fileName | string |   |   | X |
| documentSendingProfile.byteSize | int |   |   | X |
| validateEuVatRegNumber | bool |   |   | X |
| validateEuVatRegNumber.id | guid | X | X |   |
| validateEuVatRegNumber.fileName | string |   |   | X |
| validateEuVatRegNumber.byteSize | int |   |   | X |
| currencyId | guid |   |   | X |
| currencyId.id | guid | X | X |   |
| currencyId.fileName | string |   |   | X |
| currencyId.byteSize | int |   |   | X |
| paymentTermsId | guid |   |   | X |
| paymentTermsId.id | guid | X | X |   |
| paymentTermsId.fileName | string |   |   | X |
| paymentTermsId.byteSize | int |   |   | X |
| paymentMethodId | guid |   |   | X |
| paymentMethodId.id | guid | X | X |   |
| paymentMethodId.fileName | string |   |   | X |
| paymentMethodId.byteSize | int |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowWebhookSubscriptions
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| id.id | guid | X | X |   |
| id.fileName | string |   |   | X |
| id.byteSize | int |   |   | X |
| notificationUrl | string |   |   | X |
| notificationUrl.id | guid | X | X |   |
| notificationUrl.fileName | string |   |   | X |
| notificationUrl.byteSize | int |   |   | X |
| conditions | string |   |   | X |
| conditions.id | guid | X | X |   |
| conditions.fileName | string |   |   | X |
| conditions.byteSize | int |   |   | X |
| eventCode | string |   |   | X |
| eventCode.id | guid | X | X |   |
| eventCode.fileName | string |   |   | X |
| eventCode.byteSize | int |   |   | X |
| clientType | string |   |   | X |
| clientType.id | guid | X | X |   |
| clientType.fileName | string |   |   | X |
| clientType.byteSize | int |   |   | X |
| clientId | guid |   |   | X |
| clientId.id | guid | X | X |   |
| clientId.fileName | string |   |   | X |
| clientId.byteSize | int |   |   | X |
| enabled | bool |   |   | X |
| enabled.id | guid | X | X |   |
| enabled.fileName | string |   |   | X |
| enabled.byteSize | int |   |   | X |

