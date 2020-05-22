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

| Name |
| --- | --- | :-: |
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

| Name |
| --- | --- | :-: |
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

| Name |
| --- | --- | :-: |
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
| phoneNumber | string |   |   | X |
| email | string |   |   | X |
| website | string |   |   | X |
| pricesIncludeTax | bool |   |   | X |
| taxLiable | bool |   |   | X |
| taxAreaId | guid |   |   | X |
| taxAreaDisplayName | string |   |   | X |
| taxRegistrationNumber | string |   |   | X |
| paymentTermsId | guid |   |   | X |
| shipmentMethodId | guid |   |   | X |
| paymentMethodId | guid |   |   | X |
| balance | float |   |   | X |
| overdueAmount | float |   |   | X |
| totalSalesExcludingTax | float |   |   | X |
| lastModifiedDateTime | date |   |   | X |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| invoicingCustomersCoupons | [InvoicingCustomersCoupon[]](#invoicingcustomerscoupon) | Yes |
# InvoicingCustomersCoupon
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| claimId | string |   |   | X |
| graphContactId | string |   |   | X |
| customerId | guid |   |   | X |
| usage | string |   |   | X |
| offer | string |   |   | X |
| terms | string |   |   | X |
| code | string |   |   | X |
| expiration | date |   |   | X |
| discountValue | float |   |   | X |
| discountType | string |   |   | X |
| createdDateTime | date |   |   | X |
| isValid | bool |   |   | X |
| status | string |   |   | X |
| amount | string |   |   | X |
| isApplied | bool |   |   | X |

# InvoicingEmailPreview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentId | guid |   |   | X |
| email | string |   |   | X |
| subject | string |   |   | X |
| body | string |   |   | X |
| bodyText | string |   |   | X |

# InvoicingEmailSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| recipientType | string |   |   | X |
| eMail | string |   |   | X |

# InvoicingExportInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   |   | X |
| startDate | date |   |   | X |
| endDate | date |   |   | X |
| email | string |   |   | X |

# InvoicingGeneralSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| currencySymbol | string |   |   | X |
| paypalEmailAddress | string |   |   | X |
| countryRegionCode | string |   |   | X |
| languageId | int |   |   | X |
| languageCode | string |   |   | X |
| languageDisplayName | string |   |   | X |
| defaultTaxId | guid |   |   | X |
| defaultTaxDisplayName | string |   |   | X |
| defaultPaymentTermsId | guid |   |   | X |
| defaultPaymentTermsDisplayName | string |   |   | X |
| defaultPaymentMethodId | guid |   |   | X |
| defaultPaymentMethodDisplayName | string |   |   | X |
| amountRoundingPrecision | float |   |   | X |
| unitAmountRoundingPrecision | float |   |   | X |
| quantityRoundingPrecision | float |   |   | X |
| taxRoundingPrecision | float |   |   | X |
| draftInvoiceFileName | string |   |   | X |
| postedInvoiceFileName | string |   |   | X |
| quoteFileName | string |   |   | X |
| taxableGroupId | guid |   |   | X |
| nonTaxableGroupId | guid |   |   | X |
| enableSynchronization | bool |   |   | X |
| enableSyncCoupons | bool |   |   | X |
| updateVersion | string |   |   | X |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingItem
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| number | string |   |   | X |
| displayName | string |   |   | X |
| type | string |   |   | X |
| blocked | bool |   |   | X |
| baseUnitOfMeasureId | guid |   |   | X |
| baseUnitOfMeasureIntStdCode | string |   |   | X |
| baseUnitOfMeasureDescription | string |   |   | X |
| gtin | string |   |   | X |
| inventory | float |   |   | X |
| unitPrice | float |   |   | X |
| priceIncludesTax | bool |   |   | X |
| unitCost | float |   |   | X |
| taxGroupId | guid |   |   | X |
| taxGroupCode | string |   |   | X |
| taxable | bool |   |   | X |
| lastModifiedDateTime | date |   |   | X |

# InvoicingKPI
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| invoicedYearToDate | float |   |   | X |
| numberOfInvoicesYearToDate | int |   |   | X |
| invoicedCurrentMonth | float |   |   | X |
| salesInvoicesOutsdanding | float |   |   | X |
| salesInvoicesOverdue | float |   |   | X |
| numberOfQuotes | int |   |   | X |
| numberOfDraftInvoices | int |   |   | X |
| requestedDateTime | date |   |   | X |
| yTDDateFilter | string |   |   | X |

# InvoicingLanguage
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| languageId | int |   |   | X |
| languageCode | string |   |   | X |
| displayName | string |   |   | X |
| default | bool |   |   | X |

# InvoicingPDF
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentId | guid |   |   | X |
| fileName | string |   |   | X |
| content | string |   |   | X |

# InvoicingPaymentMethod
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| code | string |   |   | X |
| displayName | string |   |   | X |
| default | bool |   |   | X |
| lastModifiedDateTime | date |   |   | X |

# InvoicingPaymentTerm
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| code | string |   |   | X |
| displayName | string |   |   | X |
| dueDateCalculation | string |   |   | X |
| discountDateCalculation | string |   |   | X |
| discountPercent | float |   |   | X |
| calculateDiscountOnCreditMemos | bool |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| default | bool |   |   | X |

# InvoicingQBOSyncAuth
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| key | int |   |   | X |
| authorizationUrl | string |   |   | X |

# InvoicingSMTPMailSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| primaryKey | string |   |   | X |
| sMTPServer | string |   |   | X |
| authentication | string |   |   | X |
| userName | string |   |   | X |
| sMTPServerPort | int |   |   | X |
| secureConnection | bool |   |   | X |
| passWord | string |   |   | X |

# InvoicingSalesInvoiceOverview
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| number | string |   |   | X |
| customerNumber | string |   |   | X |
| customerName | string |   |   | X |
| invoiceDate | date |   |   | X |
| dueDate | date |   |   | X |
| currencyCode | string |   |   | X |
| subtotalAmount | float |   |   | X |
| totalAmountExcludingTax | float |   |   | X |
| totalTaxAmount | float |   |   | X |
| totalAmountIncludingTax | float |   |   | X |
| status | string |   |   | X |
| lastModifiedDateTime | date |   |   | X |
| isTest | bool |   |   | X |
| lastEmailSentStatus | string |   |   | X |

# InvoicingSalesInvoice
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   |   | X |
| number | string |   |   | X |
| customerId | guid |   |   | X |
| graphContactId | string |   |   | X |
| customerNumber | string |   |   | X |
| taxLiable | bool |   |   | X |
| taxAreaId | guid |   |   | X |
| taxAreaDisplayName | string |   |   | X |
| taxRegistrationNumber | string |   |   | X |
| customerName | string |   |   | X |
| customerEmail | string |   |   | X |
| invoiceDate | date |   |   | X |
| dueDate | date |   |   | X |
| billingPostalAddress | postalAddressType |   |   | X |
| pricesIncludeTax | bool |   |   | X |
| currencyCode | string |   |   | X |
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
| totalAmountExcludingTax | float |   | X |   |
| totalTaxAmount | float |   | X |   |
| totalAmountIncludingTax | float |   | X |   |
| noteForCustomer | string |   | X |   |
| status | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |
| attachments | array |   | X |   |
| invoiceDiscountCalculation | string |   | X |   |
| invoiceDiscountValue | float |   | X |   |
| remainingAmount | float |   | X |   |
| lastEmailSentStatus | string |   | X |   |
| lastEmailSentTime | date |   | X |   |
| isTest | bool |   | X |   |
| isCustomerBlocked | bool |   | X |   |

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
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| appliesToInvoiceId | guid |   | X |   |
| paymentNo | int |   | X |   |
| customerId | guid |   | X |   |
| paymentDate | date |   | X |   |
| amount | float |   | X |   |
| paymentMethodId | guid |   | X |   |

# InvoicingSalesQuote
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| number | string |   | X |   |
| quoteDate | date |   | X |   |
| dueDate | date |   | X |   |
| validUntilDate | date |   | X |   |
| status | string |   | X |   |
| accepted | bool |   | X |   |
| acceptedDate | date |   | X |   |
| customerId | guid |   | X |   |
| graphContactId | string |   | X |   |
| customerNumber | string |   | X |   |
| customerName | string |   | X |   |
| customerEmail | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxAreaId | guid |   | X |   |
| taxAreaDisplayName | string |   | X |   |
| taxRegistrationNumber | string |   | X |   |
| billingPostalAddress | postalAddressType |   | X |   |
| pricesIncludeTax | bool |   | X |   |
| shipmentMethod | string |   | X |   |
| salesperson | string |   | X |   |
| currencyCode | string |   | X |   |
| lines | array |   | X |   |
| subtotalAmount | float |   | X |   |
| discountAmount | float |   | X |   |
| discountAppliedBeforeTax | bool |   | X |   |
| coupons | array |   | X |   |
| totalAmountExcludingTax | float |   | X |   |
| totalTaxAmount | float |   | X |   |
| totalAmountIncludingTax | float |   | X |   |
| noteForCustomer | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |
| attachments | array |   | X |   |
| invoiceDiscountCalculation | string |   | X |   |
| invoiceDiscountValue | float |   | X |   |
| lastEmailSentStatus | string |   | X |   |
| lastEmailSentTime | date |   | X |   |
| isCustomerBlocked | bool |   | X |   |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingSalesTaxSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| displayName | string |   | X |   |
| default | bool |   | X |   |
| city | string |   | X |   |
| cityRate | float |   | X |   |
| state | string |   | X |   |
| stateRate | float |   | X |   |
| canadaGstHstDescription | string |   | X |   |
| canadaGstHstRate | float |   | X |   |
| canadaPstDescription | string |   | X |   |
| canadaPstRate | float |   | X |   |
| lastModifiedDateTime | date |   | X |   |

# InvoicingSyncServicesSetting
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| key | int |   | X |   |
| qboSyncTitle | string |   | X |   |
| qboSyncDescription | string |   | X |   |
| qboSyncEnabled | bool |   | X |   |
| qbdSyncTitle | string |   | X |   |
| qbdSyncDescription | string |   | X |   |
| qbdSyncEnabled | bool |   | X |   |
| qbdSyncSendToEmail | string |   | X |   |

## Actions

| Name |
| --- | --- | :-: |
# InvoicingTaxArea
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| code | string |   | X |   |
| displayName | string |   | X |   |
| taxType | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |

# InvoicingTaxGroup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| code | string |   | X |   |
| displayName | string |   | X |   |
| taxType | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |

# InvoicingTaxRate
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| taxAreaId | guid |   | X |   |
| taxGroupId | guid |   | X |   |
| taxRate | float |   | X |   |

# InvoicingTestMail
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| code | string |   | X |   |
| email | string |   | X |   |

# InvoicingUnitsOfMeasure
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| code | string |   | X |   |
| displayName | string |   | X |   |
| internationalStandardCode | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |

# InvoicingVATSetup
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| default | bool |   | X |   |
| displayName | string |   | X |   |
| vatPercentage | float |   | X |   |
| vatRegulationDescription | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |

# Powerbifinance
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| no | int |   | X |   |
| date | date |   | X |   |
| closedPeriod | bool |   | X |   |
| accountScheduleName | string |   | X |   |
| kPICode | string |   | X |   |
| kPIName | string |   | X |   |
| netChangeActual | float |   | X |   |
| balanceAtDateActual | float |   | X |   |
| netChangeBudget | float |   | X |   |
| balanceAtDateBudget | float |   | X |   |
| netChangeActualLastYear | float |   | X |   |
| balanceAtDateActualLastYear | float |   | X |   |
| netChangeBudgetLastYear | float |   | X |   |
| balanceAtDateBudgetLastYear | float |   | X |   |
| netChangeForecast | float |   | X |   |
| balanceAtDateForecast | float |   | X |   |

# PurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| buyFromVendorNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| expectedReceiptDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToReceive | float |   | X |   |
| directUnitCost | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| unitPriceLcy | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| jobNumber | string |   | X |   |
| indirectCostPercent | float |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyRcdNotInvoiced | float |   | X |   |
| amtRcdNotInvoiced | float |   | X |   |
| quantityReceived | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| receiptNumber | string |   | X |   |
| receiptLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| payToVendorNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| vendorItemNumber | string |   | X |   |
| salesOrderNumber | string |   | X |   |
| salesOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| entryPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| useTax | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| reservedQuantity | float |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| outstandingAmtExVatLcy | float |   | X |   |
| aRcdNotInvExVatLcy | float |   | X |   |
| dimensionSetId | int |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobLineType | string |   | X |   |
| jobUnitPrice | float |   | X |   |
| jobTotalPrice | float |   | X |   |
| jobLineAmount | float |   | X |   |
| jobLineDiscountAmount | float |   | X |   |
| jobLineDiscountPercent | float |   | X |   |
| jobUnitPriceLcy | float |   | X |   |
| jobTotalPriceLcy | float |   | X |   |
| jobLineAmountLcy | float |   | X |   |
| jobLineDiscAmountLcy | float |   | X |   |
| jobCurrencyFactor | float |   | X |   |
| jobCurrencyCode | string |   | X |   |
| jobPlanningLineNumber | int |   | X |   |
| jobRemainingQty | float |   | X |   |
| jobRemainingQtyBase | float |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| prodOrderNumber | string |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToReceiveBase | float |   | X |   |
| qtyRcdNotInvoicedBase | float |   | X |   |
| qtyReceivedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| faPostingType | string |   | X |   |
| depreciationBookCode | string |   | X |   |
| salvageValue | float |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| deprAcquisitionCost | bool |   | X |   |
| maintenanceCode | string |   | X |   |
| insuranceNumber | string |   | X |   |
| budgetedFaNumber | string |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderSalesNumber | string |   | X |   |
| specialOrderSalesLineNumber | int |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyReceived | bool |   | X |   |
| requestedReceiptDate | date |   | X |   |
| promisedReceiptDate | date |   | X |   |
| leadTimeCalculation | string |   | X |   |
| inboundWhseHandlingTime | string |   | X |   |
| plannedReceiptDate | date |   | X |   |
| orderDate | date |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToShip | float |   | X |   |
| returnQtyToShipBase | float |   | X |   |
| returnQtyShippedNotInvd | float |   | X |   |
| retQtyShpdNotInvdBase | float |   | X |   |
| returnShpdNotInvd | float |   | X |   |
| returnShpdNotInvdLcy | float |   | X |   |
| returnQtyShipped | float |   | X |   |
| returnQtyShippedBase | float |   | X |   |
| returnShipmentNumber | string |   | X |   |
| returnShipmentLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| subtype | string |   | X |   |
| routingNumber | string |   | X |   |
| operationNumber | string |   | X |   |
| workCenterNumber | string |   | X |   |
| finished | bool |   | X |   |
| prodOrderLineNumber | int |   | X |   |
| overheadRate | float |   | X |   |
| mpsOrder | bool |   | X |   |
| planningFlexibility | string |   | X |   |
| safetyLeadTime | string |   | X |   |
| routingReferenceNumber | int |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# PurchaseDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| documentType | string |   | X |   |
| buyFromVendorNumber | string |   | X |   |
| number | string |   | X |   |
| payToVendorNumber | string |   | X |   |
| payToName | string |   | X |   |
| payToName2 | string |   | X |   |
| payToAddress | string |   | X |   |
| payToAddress2 | string |   | X |   |
| payToCity | string |   | X |   |
| payToContact | string |   | X |   |
| yourReference | string |   | X |   |
| shipToCode | string |   | X |   |
| shipToName | string |   | X |   |
| shipToName2 | string |   | X |   |
| shipToAddress | string |   | X |   |
| shipToAddress2 | string |   | X |   |
| shipToCity | string |   | X |   |
| shipToContact | string |   | X |   |
| orderDate | date |   | X |   |
| postingDate | date |   | X |   |
| expectedReceiptDate | date |   | X |   |
| postingDescription | string |   | X |   |
| paymentTermsCode | string |   | X |   |
| dueDate | date |   | X |   |
| paymentDiscountPercent | float |   | X |   |
| pmtDiscountDate | date |   | X |   |
| shipmentMethodCode | string |   | X |   |
| locationCode | string |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| vendorPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| currencyFactor | float |   | X |   |
| pricesIncludingVat | bool |   | X |   |
| invoiceDiscCode | string |   | X |   |
| languageCode | string |   | X |   |
| purchaserCode | string |   | X |   |
| orderClass | string |   | X |   |
| comment | bool |   | X |   |
| numberPrinted | int |   | X |   |
| onHold | string |   | X |   |
| appliesToDocType | string |   | X |   |
| appliesToDocNumber | string |   | X |   |
| balAccountNumber | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| receive | bool |   | X |   |
| invoice | bool |   | X |   |
| printPostedDocuments | bool |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| receivingNumber | string |   | X |   |
| postingNumber | string |   | X |   |
| lastReceivingNumber | string |   | X |   |
| lastPostingNumber | string |   | X |   |
| vendorOrderNumber | string |   | X |   |
| vendorShipmentNumber | string |   | X |   |
| vendorInvoiceNumber | string |   | X |   |
| vendorCrMemoNumber | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| reasonCode | string |   | X |   |
| genBusPostingGroup | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| vatCountryRegionCode | string |   | X |   |
| buyFromVendorName | string |   | X |   |
| buyFromVendorName2 | string |   | X |   |
| buyFromAddress | string |   | X |   |
| buyFromAddress2 | string |   | X |   |
| buyFromCity | string |   | X |   |
| buyFromContact | string |   | X |   |
| payToPostCode | string |   | X |   |
| payToCounty | string |   | X |   |
| payToCountryRegionCode | string |   | X |   |
| buyFromPostCode | string |   | X |   |
| buyFromCounty | string |   | X |   |
| buyFromCountryRegionCode | string |   | X |   |
| shipToPostCode | string |   | X |   |
| shipToCounty | string |   | X |   |
| shipToCountryRegionCode | string |   | X |   |
| balAccountType | string |   | X |   |
| orderAddressCode | string |   | X |   |
| entryPoint | string |   | X |   |
| correction | bool |   | X |   |
| documentDate | date |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| paymentMethodCode | string |   | X |   |
| numberSeries | string |   | X |   |
| postingNumberSeries | string |   | X |   |
| receivingNumberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| appliesToId | string |   | X |   |
| vatBaseDiscountPercent | float |   | X |   |
| status | string |   | X |   |
| invoiceDiscountCalculation | string |   | X |   |
| invoiceDiscountValue | float |   | X |   |
| sendIcDocument | bool |   | X |   |
| icStatus | string |   | X |   |
| buyFromIcPartnerCode | string |   | X |   |
| payToIcPartnerCode | string |   | X |   |
| icDirection | string |   | X |   |
| prepaymentNumber | string |   | X |   |
| lastPrepaymentNumber | string |   | X |   |
| prepmtCrMemoNumber | string |   | X |   |
| lastPrepmtCrMemoNumber | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepaymentNumberSeries | string |   | X |   |
| compressPrepayment | bool |   | X |   |
| prepaymentDueDate | date |   | X |   |
| prepmtCrMemoNumberSeries | string |   | X |   |
| prepmtPostingDescription | string |   | X |   |
| prepmtPmtDiscountDate | date |   | X |   |
| prepmtPaymentTermsCode | string |   | X |   |
| prepmtPaymentDiscountPercent | float |   | X |   |
| quoteNumber | string |   | X |   |
| jobQueueStatus | string |   | X |   |
| jobQueueEntryId | guid |   | X |   |
| incomingDocumentEntryNumber | int |   | X |   |
| creditorNumber | string |   | X |   |
| paymentReference | string |   | X |   |
| aRcdNotInvExVatLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| dimensionSetId | int |   | X |   |
| invoiceDiscountAmount | float |   | X |   |
| numberOfArchivedVersions | int |   | X |   |
| docNumberOccurrence | int |   | X |   |
| campaignNumber | string |   | X |   |
| buyFromContactNumber | string |   | X |   |
| payToContactNumber | string |   | X |   |
| responsibilityCenter | string |   | X |   |
| completelyReceived | bool |   | X |   |
| postingFromWhseRef | int |   | X |   |
| locationFilter | string |   | X |   |
| requestedReceiptDate | date |   | X |   |
| promisedReceiptDate | date |   | X |   |
| leadTimeCalculation | string |   | X |   |
| inboundWhseHandlingTime | string |   | X |   |
| vendorAuthorizationNumber | string |   | X |   |
| returnShipmentNumber | string |   | X |   |
| returnShipmentNumberSeries | string |   | X |   |
| ship | bool |   | X |   |
| lastReturnShipmentNumber | string |   | X |   |
| assignedUserId | string |   | X |   |
| pendingApprovals | int |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| purchaseDocumentsworkflowPurchaseDocumentLines | [PurchaseDocumentsworkflowPurchaseDocumentLines[]](#purchasedocumentsworkflowpurchasedocumentlines) | Yes |
# PurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| buyFromVendorNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| expectedReceiptDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToReceive | float |   | X |   |
| directUnitCost | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| unitPriceLcy | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| jobNumber | string |   | X |   |
| indirectCostPercent | float |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyRcdNotInvoiced | float |   | X |   |
| amtRcdNotInvoiced | float |   | X |   |
| quantityReceived | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| receiptNumber | string |   | X |   |
| receiptLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| payToVendorNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| vendorItemNumber | string |   | X |   |
| salesOrderNumber | string |   | X |   |
| salesOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| entryPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| useTax | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| reservedQuantity | float |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| outstandingAmtExVatLcy | float |   | X |   |
| aRcdNotInvExVatLcy | float |   | X |   |
| dimensionSetId | int |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobLineType | string |   | X |   |
| jobUnitPrice | float |   | X |   |
| jobTotalPrice | float |   | X |   |
| jobLineAmount | float |   | X |   |
| jobLineDiscountAmount | float |   | X |   |
| jobLineDiscountPercent | float |   | X |   |
| jobUnitPriceLcy | float |   | X |   |
| jobTotalPriceLcy | float |   | X |   |
| jobLineAmountLcy | float |   | X |   |
| jobLineDiscAmountLcy | float |   | X |   |
| jobCurrencyFactor | float |   | X |   |
| jobCurrencyCode | string |   | X |   |
| jobPlanningLineNumber | int |   | X |   |
| jobRemainingQty | float |   | X |   |
| jobRemainingQtyBase | float |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| prodOrderNumber | string |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToReceiveBase | float |   | X |   |
| qtyRcdNotInvoicedBase | float |   | X |   |
| qtyReceivedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| faPostingType | string |   | X |   |
| depreciationBookCode | string |   | X |   |
| salvageValue | float |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| deprAcquisitionCost | bool |   | X |   |
| maintenanceCode | string |   | X |   |
| insuranceNumber | string |   | X |   |
| budgetedFaNumber | string |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderSalesNumber | string |   | X |   |
| specialOrderSalesLineNumber | int |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyReceived | bool |   | X |   |
| requestedReceiptDate | date |   | X |   |
| promisedReceiptDate | date |   | X |   |
| leadTimeCalculation | string |   | X |   |
| inboundWhseHandlingTime | string |   | X |   |
| plannedReceiptDate | date |   | X |   |
| orderDate | date |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToShip | float |   | X |   |
| returnQtyToShipBase | float |   | X |   |
| returnQtyShippedNotInvd | float |   | X |   |
| retQtyShpdNotInvdBase | float |   | X |   |
| returnShpdNotInvd | float |   | X |   |
| returnShpdNotInvdLcy | float |   | X |   |
| returnQtyShipped | float |   | X |   |
| returnQtyShippedBase | float |   | X |   |
| returnShipmentNumber | string |   | X |   |
| returnShipmentLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| subtype | string |   | X |   |
| routingNumber | string |   | X |   |
| operationNumber | string |   | X |   |
| workCenterNumber | string |   | X |   |
| finished | bool |   | X |   |
| prodOrderLineNumber | int |   | X |   |
| overheadRate | float |   | X |   |
| mpsOrder | bool |   | X |   |
| planningFlexibility | string |   | X |   |
| safetyLeadTime | string |   | X |   |
| routingReferenceNumber | int |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| shipmentDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToShip | float |   | X |   |
| unitPrice | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| customerPriceGroup | string |   | X |   |
| jobNumber | string |   | X |   |
| workTypeCode | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyShippedNotInvoiced | float |   | X |   |
| shippedNotInvoiced | float |   | X |   |
| quantityShipped | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| shipmentNumber | string |   | X |   |
| shipmentLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| billToCustomerNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| purchaseOrderNumber | string |   | X |   |
| purchOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| exitPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxCategory | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| vatClauseCode | string |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| shippedNotInvoicedLcy | float |   | X |   |
| shippedNotInvLcyNoVat | float |   | X |   |
| reservedQuantity | float |   | X |   |
| reserve | string |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| dimensionSetId | int |   | X |   |
| qtyToAssembleToOrder | float |   | X |   |
| qtyToAsmToOrderBase | float |   | X |   |
| atoWhseOutstandingQty | float |   | X |   |
| atoWhseOutstdQtyBase | float |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobContractEntryNumber | int |   | X |   |
| postingDate | date |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| planned | bool |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToShipBase | float |   | X |   |
| qtyShippedNotInvdBase | float |   | X |   |
| qtyShippedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| depreciationBookCode | string |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| outOfStockSubstitution | bool |   | X |   |
| substitutionAvailable | bool |   | X |   |
| originallyOrderedNumber | string |   | X |   |
| originallyOrderedVarCode | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderPurchaseNumber | string |   | X |   |
| specialOrderPurchLineNumber | int |   | X |   |
| whseOutstandingQty | float |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyShipped | bool |   | X |   |
| requestedDeliveryDate | date |   | X |   |
| promisedDeliveryDate | date |   | X |   |
| shippingTime | string |   | X |   |
| outboundWhseHandlingTime | string |   | X |   |
| plannedDeliveryDate | date |   | X |   |
| plannedShipmentDate | date |   | X |   |
| shippingAgentCode | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToReceive | float |   | X |   |
| returnQtyToReceiveBase | float |   | X |   |
| returnQtyRcdNotInvd | float |   | X |   |
| retQtyRcdNotInvdBase | float |   | X |   |
| returnRcdNotInvd | float |   | X |   |
| returnRcdNotInvdLcy | float |   | X |   |
| returnQtyReceived | float |   | X |   |
| returnQtyReceivedBase | float |   | X |   |
| applFromItemEntry | int |   | X |   |
| bomItemNumber | string |   | X |   |
| returnReceiptNumber | string |   | X |   |
| returnReceiptLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| allowLineDisc | bool |   | X |   |
| customerDiscGroup | string |   | X |   |
| subtype | string |   | X |   |
| priceDescription | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# SalesDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| documentType | string |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| number | string |   | X |   |
| billToCustomerNumber | string |   | X |   |
| billToName | string |   | X |   |
| billToName2 | string |   | X |   |
| billToAddress | string |   | X |   |
| billToAddress2 | string |   | X |   |
| billToCity | string |   | X |   |
| billToContact | string |   | X |   |
| yourReference | string |   | X |   |
| shipToCode | string |   | X |   |
| shipToName | string |   | X |   |
| shipToName2 | string |   | X |   |
| shipToAddress | string |   | X |   |
| shipToAddress2 | string |   | X |   |
| shipToCity | string |   | X |   |
| shipToContact | string |   | X |   |
| orderDate | date |   | X |   |
| postingDate | date |   | X |   |
| shipmentDate | date |   | X |   |
| postingDescription | string |   | X |   |
| paymentTermsCode | string |   | X |   |
| dueDate | date |   | X |   |
| paymentDiscountPercent | float |   | X |   |
| pmtDiscountDate | date |   | X |   |
| shipmentMethodCode | string |   | X |   |
| locationCode | string |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| customerPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| currencyFactor | float |   | X |   |
| customerPriceGroup | string |   | X |   |
| pricesIncludingVat | bool |   | X |   |
| invoiceDiscCode | string |   | X |   |
| customerDiscGroup | string |   | X |   |
| languageCode | string |   | X |   |
| salespersonCode | string |   | X |   |
| orderClass | string |   | X |   |
| comment | bool |   | X |   |
| numberPrinted | int |   | X |   |
| onHold | string |   | X |   |
| appliesToDocType | string |   | X |   |
| appliesToDocNumber | string |   | X |   |
| balAccountNumber | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| ship | bool |   | X |   |
| invoice | bool |   | X |   |
| printPostedDocuments | bool |   | X |   |
| amount | float |   | X |   |
| amountIncludingVAT | float |   | X |   |
| shippingNumber | string |   | X |   |
| postingNumber | string |   | X |   |
| lastShippingNumber | string |   | X |   |
| lastPostingNumber | string |   | X |   |
| prepaymentNumber | string |   | X |   |
| lastPrepaymentNumber | string |   | X |   |
| premptCrMemoNumber | string |   | X |   |
| lastPremtCrMemoNumber | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| combineShipments | bool |   | X |   |
| reasonCode | string |   | X |   |
| genBusPostingGroup | string |   | X |   |
| eu3PartyTrade | bool |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| vatCountryRegionCode | string |   | X |   |
| sellToCustomerName | string |   | X |   |
| sellToCustomerName2 | string |   | X |   |
| sellToAddress | string |   | X |   |
| sellToAddress2 | string |   | X |   |
| sellToCity | string |   | X |   |
| sellToContact | string |   | X |   |
| billToPostCode | string |   | X |   |
| billToCounty | string |   | X |   |
| billToCountryRegionCode | string |   | X |   |
| sellToPostCode | string |   | X |   |
| sellToCounty | string |   | X |   |
| sellToCountryRegionCode | string |   | X |   |
| shipToPostCode | string |   | X |   |
| shipToCounty | string |   | X |   |
| shipToCountryRegionCode | string |   | X |   |
| balAccountType | string |   | X |   |
| exitPoint | string |   | X |   |
| correction | bool |   | X |   |
| documentDate | date |   | X |   |
| externalDocumentNumber | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| paymentMethodCode | string |   | X |   |
| shippingAgentCode | string |   | X |   |
| packageTrackingNumber | string |   | X |   |
| numberSeries | string |   | X |   |
| postingNumberSeries | string |   | X |   |
| shippingNumberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| reserve | string |   | X |   |
| appliesToId | string |   | X |   |
| vatBaseDiscountPercent | float |   | X |   |
| status | string |   | X |   |
| invoiceDiscountCalculation | string |   | X |   |
| invoiceDiscountValue | float |   | X |   |
| sendIcDocument | bool |   | X |   |
| icStatus | string |   | X |   |
| sellToIcPartnerCode | string |   | X |   |
| billToIcPartnerCode | string |   | X |   |
| icDirection | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepaymentNumberSeries | string |   | X |   |
| compressPrepayment | bool |   | X |   |
| prepaymentDueDate | date |   | X |   |
| prepmtCrMemoNumberSeries | string |   | X |   |
| prepmtPostingDescription | string |   | X |   |
| prepmtPmtDiscountDate | date |   | X |   |
| prepmtPaymentTermsCode | string |   | X |   |
| prepmtPaymentDiscountPercent | float |   | X |   |
| quoteNumber | string |   | X |   |
| quoteValidUntilDate | date |   | X |   |
| quoteSentToCustomer | date |   | X |   |
| quoteAccepted | bool |   | X |   |
| quoteAcceptedDate | date |   | X |   |
| jobQueueStatus | string |   | X |   |
| jobQueueEntryId | guid |   | X |   |
| incomingDocumentEntryNumber | int |   | X |   |
| workDescription | string |   | X |   |
| amountShippedNotInvoicedInclVat | float |   | X |   |
| amountShippedNotInvoiced | float |   | X |   |
| dimensionSetId | int |   | X |   |
| paymentServiceSetId | int |   | X |   |
| directDebitMandateId | string |   | X |   |
| invoiceDiscountAmount | float |   | X |   |
| numberOfArchivedVersions | int |   | X |   |
| docNumberOccurrence | int |   | X |   |
| campaignNumber | string |   | X |   |
| sellToCustomerTemplateCode | string |   | X |   |
| sellToContactNumber | string |   | X |   |
| billToContactNumber | string |   | X |   |
| billToCustomerTemplateCode | string |   | X |   |
| opportunityNumber | string |   | X |   |
| responsibilityCenter | string |   | X |   |
| shippingAdvice | string |   | X |   |
| shippedNotInvoiced | bool |   | X |   |
| completelyShipped | bool |   | X |   |
| postingFromWhseRef | int |   | X |   |
| locationFilter | string |   | X |   |
| shipped | bool |   | X |   |
| requestedDeliveryDate | date |   | X |   |
| promisedDeliveryDate | date |   | X |   |
| shippingTime | string |   | X |   |
| outboundWhseHandlingTime | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| lateOrderShipping | bool |   | X |   |
| receive | bool |   | X |   |
| returnReceiptNumber | string |   | X |   |
| returnReceiptNumberSeries | string |   | X |   |
| lastReturnReceiptNumber | string |   | X |   |
| allowLineDisc | bool |   | X |   |
| getShipmentUsed | bool |   | X |   |
| assignedUserId | string |   | X |   |
| dateFilter | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| salesDocumentsworkflowSalesDocumentLines | [SalesDocumentsworkflowSalesDocumentLines[]](#salesdocumentsworkflowsalesdocumentlines) | Yes |
# SalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| shipmentDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToShip | float |   | X |   |
| unitPrice | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| customerPriceGroup | string |   | X |   |
| jobNumber | string |   | X |   |
| workTypeCode | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyShippedNotInvoiced | float |   | X |   |
| shippedNotInvoiced | float |   | X |   |
| quantityShipped | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| shipmentNumber | string |   | X |   |
| shipmentLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| billToCustomerNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| purchaseOrderNumber | string |   | X |   |
| purchOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| exitPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxCategory | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| vatClauseCode | string |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| shippedNotInvoicedLcy | float |   | X |   |
| shippedNotInvLcyNoVat | float |   | X |   |
| reservedQuantity | float |   | X |   |
| reserve | string |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| dimensionSetId | int |   | X |   |
| qtyToAssembleToOrder | float |   | X |   |
| qtyToAsmToOrderBase | float |   | X |   |
| atoWhseOutstandingQty | float |   | X |   |
| atoWhseOutstdQtyBase | float |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobContractEntryNumber | int |   | X |   |
| postingDate | date |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| planned | bool |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToShipBase | float |   | X |   |
| qtyShippedNotInvdBase | float |   | X |   |
| qtyShippedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| depreciationBookCode | string |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| outOfStockSubstitution | bool |   | X |   |
| substitutionAvailable | bool |   | X |   |
| originallyOrderedNumber | string |   | X |   |
| originallyOrderedVarCode | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderPurchaseNumber | string |   | X |   |
| specialOrderPurchLineNumber | int |   | X |   |
| whseOutstandingQty | float |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyShipped | bool |   | X |   |
| requestedDeliveryDate | date |   | X |   |
| promisedDeliveryDate | date |   | X |   |
| shippingTime | string |   | X |   |
| outboundWhseHandlingTime | string |   | X |   |
| plannedDeliveryDate | date |   | X |   |
| plannedShipmentDate | date |   | X |   |
| shippingAgentCode | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToReceive | float |   | X |   |
| returnQtyToReceiveBase | float |   | X |   |
| returnQtyRcdNotInvd | float |   | X |   |
| retQtyRcdNotInvdBase | float |   | X |   |
| returnRcdNotInvd | float |   | X |   |
| returnRcdNotInvdLcy | float |   | X |   |
| returnQtyReceived | float |   | X |   |
| returnQtyReceivedBase | float |   | X |   |
| applFromItemEntry | int |   | X |   |
| bomItemNumber | string |   | X |   |
| returnReceiptNumber | string |   | X |   |
| returnReceiptLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| allowLineDisc | bool |   | X |   |
| customerDiscGroup | string |   | X |   |
| subtype | string |   | X |   |
| priceDescription | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowCustomers
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| number | string |   | X |   |
| name | string |   | X |   |
| searchName | string |   | X |   |
| name2 | string |   | X |   |
| address | string |   | X |   |
| address2 | string |   | X |   |
| city | string |   | X |   |
| contact | string |   | X |   |
| phoneNumber | string |   | X |   |
| telexNumber | string |   | X |   |
| documentSendingProfile | string |   | X |   |
| ourAccountNumber | string |   | X |   |
| territoryCode | string |   | X |   |
| globalDimension1Code | string |   | X |   |
| globalDimension2Code | string |   | X |   |
| chainName | string |   | X |   |
| budgetedAmount | float |   | X |   |
| creditLimitLcy | float |   | X |   |
| customerPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| customerPriceGroup | string |   | X |   |
| languageCode | string |   | X |   |
| statisticsGroup | int |   | X |   |
| paymentTermsCode | string |   | X |   |
| finChargeTermsCode | string |   | X |   |
| salespersonCode | string |   | X |   |
| shipmentMethodCode | string |   | X |   |
| shippingAgentCode | string |   | X |   |
| placeOfExport | string |   | X |   |
| invoiceDiscCode | string |   | X |   |
| customerDiscGroup | string |   | X |   |
| countryRegionCode | string |   | X |   |
| collectionMethod | string |   | X |   |
| amount | float |   | X |   |
| comment | bool |   | X |   |
| blocked | string |   | X |   |
| invoiceCopies | int |   | X |   |
| lastStatementNumber | int |   | X |   |
| printStatements | bool |   | X |   |
| billToCustomerNumber | string |   | X |   |
| priority | int |   | X |   |
| paymentMethodCode | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |
| lastDateModified | date |   | X |   |
| dateFilter | string |   | X |   |
| globalDimension1Filter | string |   | X |   |
| globalDimension2Filter | string |   | X |   |
| balance | float |   | X |   |
| balanceLcy | float |   | X |   |
| netChange | float |   | X |   |
| netChangeLcy | float |   | X |   |
| salesLcy | float |   | X |   |
| profitLcy | float |   | X |   |
| invDiscountsLcy | float |   | X |   |
| pmtDiscountsLcy | float |   | X |   |
| balanceDue | float |   | X |   |
| balanceDueLcy | float |   | X |   |
| payments | float |   | X |   |
| invoiceAmounts | float |   | X |   |
| crMemoAmounts | float |   | X |   |
| financeChargeMemoAmounts | float |   | X |   |
| paymentsLcy | float |   | X |   |
| invAmountsLcy | float |   | X |   |
| crMemoAmountsLcy | float |   | X |   |
| finChargeMemoAmountsLcy | float |   | X |   |
| outstandingOrders | float |   | X |   |
| shippedNotInvoiced | float |   | X |   |
| applicationMethod | string |   | X |   |
| pricesIncludingVat | bool |   | X |   |
| locationCode | string |   | X |   |
| faxNumber | string |   | X |   |
| telexAnswerBack | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| combineShipments | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| gln | string |   | X |   |
| postCode | string |   | X |   |
| county | string |   | X |   |
| debitAmount | float |   | X |   |
| creditAmount | float |   | X |   |
| debitAmountLcy | float |   | X |   |
| creditAmountLcy | float |   | X |   |
| eMail | string |   | X |   |
| homePage | string |   | X |   |
| reminderTermsCode | string |   | X |   |
| reminderAmounts | float |   | X |   |
| reminderAmountsLcy | float |   | X |   |
| numberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| currencyFilter | string |   | X |   |
| outstandingOrdersLcy | float |   | X |   |
| shippedNotInvoicedLcy | float |   | X |   |
| reserve | string |   | X |   |
| blockPaymentTolerance | bool |   | X |   |
| pmtDiscToleranceLcy | float |   | X |   |
| pmtToleranceLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| refunds | float |   | X |   |
| refundsLcy | float |   | X |   |
| otherAmounts | float |   | X |   |
| otherAmountsLcy | float |   | X |   |
| prepaymentPercent | float |   | X |   |
| outstandingInvoicesLcy | float |   | X |   |
| outstandingInvoices | float |   | X |   |
| billToNumberOfArchivedDoc | int |   | X |   |
| sellToNumberOfArchivedDoc | int |   | X |   |
| partnerType | string |   | X |   |
| preferredBankAccountCode | string |   | X |   |
| cashFlowPaymentTermsCode | string |   | X |   |
| primaryContactNumber | string |   | X |   |
| contactType | string |   | X |   |
| responsibilityCenter | string |   | X |   |
| shippingAdvice | string |   | X |   |
| shippingTime | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| serviceZoneCode | string |   | X |   |
| contractGainLossAmount | float |   | X |   |
| shipToFilter | string |   | X |   |
| outstandingServOrdersLcy | float |   | X |   |
| servShippedNotInvoicedLcy | float |   | X |   |
| outstandingServInvoicesLcy | float |   | X |   |
| allowLineDisc | bool |   | X |   |
| numberOfQuotes | int |   | X |   |
| numberOfBlanketOrders | int |   | X |   |
| numberOfOrders | int |   | X |   |
| numberOfInvoices | int |   | X |   |
| numberOfReturnOrders | int |   | X |   |
| numberOfCreditMemos | int |   | X |   |
| numberOfPstdShipments | int |   | X |   |
| numberOfPstdInvoices | int |   | X |   |
| numberOfPstdReturnReceipts | int |   | X |   |
| numberOfPstdCreditMemos | int |   | X |   |
| numberOfShipToAddresses | int |   | X |   |
| billToNumberOfQuotes | int |   | X |   |
| billToNumberOfBlanketOrders | int |   | X |   |
| billToNumberOfOrders | int |   | X |   |
| billToNumberOfInvoices | int |   | X |   |
| billToNumberOfReturnOrders | int |   | X |   |
| billToNumberOfCreditMemos | int |   | X |   |
| billToNumberOfPstdShipments | int |   | X |   |
| billToNumberOfPstdInvoices | int |   | X |   |
| billToNumberOfPstdReturnR | int |   | X |   |
| billToNumberOfPstdCrMemos | int |   | X |   |
| baseCalendarCode | string |   | X |   |
| copySellToAddrToQteFrom | string |   | X |   |
| validateEuVatRegNumber | bool |   | X |   |
| currencyId | guid |   | X |   |
| paymentTermsId | guid |   | X |   |
| shipmentMethodId | guid |   | X |   |
| paymentMethodId | guid |   | X |   |
| taxAreaId | guid |   | X |   |
| contactId | guid |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowGenJournalBatches
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| journalTemplateName | string |   | X |   |
| name | string |   | X |   |
| description | string |   | X |   |
| reasonCode | string |   | X |   |
| balAccountType | string |   | X |   |
| balAccountNumber | string |   | X |   |
| numberSeries | string |   | X |   |
| postingNumberSeries | string |   | X |   |
| copyVatSetupToJnlLines | bool |   | X |   |
| allowVatDifference | bool |   | X |   |
| allowPaymentExport | bool |   | X |   |
| bankStatementImportFormat | string |   | X |   |
| templateType | string |   | X |   |
| recurring | bool |   | X |   |
| suggestBalancingAmount | bool |   | X |   |
| lastModifiedDatetime | date |   | X |   |

# WorkflowGenJournalLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| journalTemplateName | string |   | X |   |
| journalBatchName | string |   | X |   |
| lineNumber | int |   | X |   |
| accountType | string |   | X |   |
| accountNumber | string |   | X |   |
| postingDate | date |   | X |   |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| description | string |   | X |   |
| vatPercent | float |   | X |   |
| balAccountNumber | string |   | X |   |
| currencyCode | string |   | X |   |
| amount | float |   | X |   |
| debitAmount | float |   | X |   |
| creditAmount | float |   | X |   |
| amountLcy | float |   | X |   |
| balanceLcy | float |   | X |   |
| currencyFactor | float |   | X |   |
| salesPurchLcy | float |   | X |   |
| profitLcy | float |   | X |   |
| invDiscountLcy | float |   | X |   |
| billToPayToNumber | string |   | X |   |
| postingGroup | string |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| salespersPurchCode | string |   | X |   |
| sourceCode | string |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| onHold | string |   | X |   |
| appliesToDocType | string |   | X |   |
| appliesToDocNumber | string |   | X |   |
| dueDate | date |   | X |   |
| pmtDiscountDate | date |   | X |   |
| paymentDiscountPercent | float |   | X |   |
| jobNumber | string |   | X |   |
| quantity | float |   | X |   |
| vatAmount | float |   | X |   |
| vatPosting | string |   | X |   |
| paymentTermsCode | string |   | X |   |
| appliesToId | string |   | X |   |
| businessUnitCode | string |   | X |   |
| reasonCode | string |   | X |   |
| recurringMethod | string |   | X |   |
| expirationDate | date |   | X |   |
| recurringFrequency | string |   | X |   |
| allocatedAmtLcy | float |   | X |   |
| genPostingType | string |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| eu3PartyTrade | bool |   | X |   |
| allowApplication | bool |   | X |   |
| balAccountType | string |   | X |   |
| balGenPostingType | string |   | X |   |
| balGenBusPostingGroup | string |   | X |   |
| balGenProdPostingGroup | string |   | X |   |
| balVatCalculationType | string |   | X |   |
| balVatPercent | float |   | X |   |
| balVatAmount | float |   | X |   |
| bankPaymentType | string |   | X |   |
| vatBaseAmount | float |   | X |   |
| balVatBaseAmount | float |   | X |   |
| correction | bool |   | X |   |
| checkPrinted | bool |   | X |   |
| documentDate | date |   | X |   |
| externalDocumentNumber | string |   | X |   |
| sourceType | string |   | X |   |
| sourceNumber | string |   | X |   |
| postingNumberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| useTax | bool |   | X |   |
| balTaxAreaCode | string |   | X |   |
| balTaxLiable | bool |   | X |   |
| balTaxGroupCode | string |   | X |   |
| balUseTax | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| balVatBusPostingGroup | string |   | X |   |
| balVatProdPostingGroup | string |   | X |   |
| additionalCurrencyPosting | string |   | X |   |
| faAddCurrencyFactor | float |   | X |   |
| sourceCurrencyCode | string |   | X |   |
| sourceCurrencyAmount | float |   | X |   |
| sourceCurrVatBaseAmount | float |   | X |   |
| sourceCurrVatAmount | float |   | X |   |
| vatBaseDiscountPercent | float |   | X |   |
| vatAmountLcy | float |   | X |   |
| vatBaseAmountLcy | float |   | X |   |
| balVatAmountLcy | float |   | X |   |
| balVatBaseAmountLcy | float |   | X |   |
| reversingEntry | bool |   | X |   |
| allowZeroAmountPosting | bool |   | X |   |
| shipToOrderAddressCode | string |   | X |   |
| vatDifference | float |   | X |   |
| balVatDifference | float |   | X |   |
| icPartnerCode | string |   | X |   |
| icDirection | string |   | X |   |
| icPartnerGLAccNumber | string |   | X |   |
| icPartnerTransactionNumber | int |   | X |   |
| sellToBuyFromNumber | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| countryRegionCode | string |   | X |   |
| prepayment | bool |   | X |   |
| financialVoid | bool |   | X |   |
| incomingDocumentEntryNumber | int |   | X |   |
| creditorNumber | string |   | X |   |
| paymentReference | string |   | X |   |
| paymentMethodCode | string |   | X |   |
| appliesToExtDocNumber | string |   | X |   |
| recipientBankAccount | string |   | X |   |
| messageToRecipient | string |   | X |   |
| exportedToPaymentFile | bool |   | X |   |
| hasPaymentExportError | bool |   | X |   |
| dimensionSetId | int |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobUnitPriceLcy | float |   | X |   |
| jobTotalPriceLcy | float |   | X |   |
| jobQuantity | float |   | X |   |
| jobUnitCostLcy | float |   | X |   |
| jobLineDiscountPercent | float |   | X |   |
| jobLineDiscAmountLcy | float |   | X |   |
| jobUnitOfMeasureCode | string |   | X |   |
| jobLineType | string |   | X |   |
| jobUnitPrice | float |   | X |   |
| jobTotalPrice | float |   | X |   |
| jobUnitCost | float |   | X |   |
| jobTotalCost | float |   | X |   |
| jobLineDiscountAmount | float |   | X |   |
| jobLineAmount | float |   | X |   |
| jobTotalCostLcy | float |   | X |   |
| jobLineAmountLcy | float |   | X |   |
| jobCurrencyFactor | float |   | X |   |
| jobCurrencyCode | string |   | X |   |
| jobPlanningLineNumber | int |   | X |   |
| jobRemainingQty | float |   | X |   |
| directDebitMandateId | string |   | X |   |
| dataExchEntryNumber | int |   | X |   |
| payerInformation | string |   | X |   |
| transactionInformation | string |   | X |   |
| dataExchLineNumber | int |   | X |   |
| appliedAutomatically | bool |   | X |   |
| deferralCode | string |   | X |   |
| deferralLineNumber | int |   | X |   |
| campaignNumber | string |   | X |   |
| prodOrderNumber | string |   | X |   |
| faPostingDate | date |   | X |   |
| faPostingType | string |   | X |   |
| depreciationBookCode | string |   | X |   |
| salvageValue | float |   | X |   |
| numberOfDepreciationDays | int |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| deprAcquisitionCost | bool |   | X |   |
| maintenanceCode | string |   | X |   |
| insuranceNumber | string |   | X |   |
| budgetedFaNumber | string |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| faReclassificationEntry | bool |   | X |   |
| faErrorEntryNumber | int |   | X |   |
| indexEntry | bool |   | X |   |
| sourceLineNumber | int |   | X |   |
| comment | string |   | X |   |
| checkExported | bool |   | X |   |
| checkTransmitted | bool |   | X |   |
| id | guid |   | X |   |
| accountId | guid |   | X |   |
| customerId | guid |   | X |   |
| appliesToInvoiceId | guid |   | X |   |
| contactGraphId | string |   | X |   |
| lastModifiedDatetime | date |   | X |   |
| journalBatchId | guid |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowItems
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| number | string |   | X |   |
| number2 | string |   | X |   |
| description | string |   | X |   |
| searchDescription | string |   | X |   |
| description2 | string |   | X |   |
| assemblyBom | bool |   | X |   |
| baseUnitOfMeasure | string |   | X |   |
| priceUnitConversion | int |   | X |   |
| type | string |   | X |   |
| inventoryPostingGroup | string |   | X |   |
| shelfNumber | string |   | X |   |
| itemDiscGroup | string |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| statisticsGroup | int |   | X |   |
| commissionGroup | int |   | X |   |
| unitPrice | float |   | X |   |
| priceProfitCalculation | string |   | X |   |
| profitPercent | float |   | X |   |
| costingMethod | string |   | X |   |
| unitCost | float |   | X |   |
| standardCost | float |   | X |   |
| lastDirectCost | float |   | X |   |
| indirectCostPercent | float |   | X |   |
| costIsAdjusted | bool |   | X |   |
| allowOnlineAdjustment | bool |   | X |   |
| vendorNumber | string |   | X |   |
| vendorItemNumber | string |   | X |   |
| leadTimeCalculation | string |   | X |   |
| reorderPoint | float |   | X |   |
| maximumInventory | float |   | X |   |
| reorderQuantity | float |   | X |   |
| alternativeItemNumber | string |   | X |   |
| unitListPrice | float |   | X |   |
| dutyDuePercent | float |   | X |   |
| dutyCode | string |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| durability | string |   | X |   |
| freightType | string |   | X |   |
| tariffNumber | string |   | X |   |
| dutyUnitConversion | float |   | X |   |
| countryRegionPurchasedCode | string |   | X |   |
| budgetQuantity | float |   | X |   |
| budgetedAmount | float |   | X |   |
| budgetProfit | float |   | X |   |
| comment | bool |   | X |   |
| blocked | bool |   | X |   |
| costIsPostedToGL | bool |   | X |   |
| blockReason | string |   | X |   |
| lastDatetimeModified | date |   | X |   |
| lastDateModified | date |   | X |   |
| lastTimeModified | string |   | X |   |
| dateFilter | string |   | X |   |
| globalDimension1Filter | string |   | X |   |
| globalDimension2Filter | string |   | X |   |
| locationFilter | string |   | X |   |
| inventory | float |   | X |   |
| netInvoicedQty | float |   | X |   |
| netChange | float |   | X |   |
| purchasesQty | float |   | X |   |
| salesQty | float |   | X |   |
| positiveAdjmtQty | float |   | X |   |
| negativeAdjmtQty | float |   | X |   |
| purchasesLcy | float |   | X |   |
| salesLcy | float |   | X |   |
| positiveAdjmtLcy | float |   | X |   |
| negativeAdjmtLcy | float |   | X |   |
| cogsLcy | float |   | X |   |
| qtyOnPurchOrder | float |   | X |   |
| qtyOnSalesOrder | float |   | X |   |
| priceIncludesVat | bool |   | X |   |
| dropShipmentFilter | string |   | X |   |
| vatBusPostingGrPrice | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| transferredQty | float |   | X |   |
| transferredLcy | float |   | X |   |
| countryRegionOfOriginCode | string |   | X |   |
| automaticExtTexts | bool |   | X |   |
| numberSeries | string |   | X |   |
| taxGroupCode | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| reserve | string |   | X |   |
| reservedQtyOnInventory | float |   | X |   |
| reservedQtyOnPurchOrders | float |   | X |   |
| reservedQtyOnSalesOrders | float |   | X |   |
| globalDimension1Code | string |   | X |   |
| globalDimension2Code | string |   | X |   |
| resQtyOnOutboundTransfer | float |   | X |   |
| resQtyOnInboundTransfer | float |   | X |   |
| resQtyOnSalesReturns | float |   | X |   |
| resQtyOnPurchReturns | float |   | X |   |
| stockoutWarning | string |   | X |   |
| preventNegativeInventory | string |   | X |   |
| costOfOpenProductionOrders | float |   | X |   |
| applicationWkshUserId | string |   | X |   |
| assemblyPolicy | string |   | X |   |
| resQtyOnAssemblyOrder | float |   | X |   |
| resQtyOnAsmComp | float |   | X |   |
| qtyOnAssemblyOrder | float |   | X |   |
| qtyOnAsmComponent | float |   | X |   |
| qtyOnJobOrder | float |   | X |   |
| resQtyOnJobOrder | float |   | X |   |
| gtin | string |   | X |   |
| defaultDeferralTemplateCode | string |   | X |   |
| lowLevelCode | int |   | X |   |
| lotSize | float |   | X |   |
| serialNos | string |   | X |   |
| lastUnitCostCalcDate | date |   | X |   |
| rolledUpMaterialCost | float |   | X |   |
| rolledUpCapacityCost | float |   | X |   |
| scrapPercent | float |   | X |   |
| inventoryValueZero | bool |   | X |   |
| discreteOrderQuantity | int |   | X |   |
| minimumOrderQuantity | float |   | X |   |
| maximumOrderQuantity | float |   | X |   |
| safetyStockQuantity | float |   | X |   |
| orderMultiple | float |   | X |   |
| safetyLeadTime | string |   | X |   |
| flushingMethod | string |   | X |   |
| replenishmentSystem | string |   | X |   |
| scheduledReceiptQty | float |   | X |   |
| scheduledNeedQty | float |   | X |   |
| roundingPrecision | float |   | X |   |
| binFilter | string |   | X |   |
| variantFilter | string |   | X |   |
| salesUnitOfMeasure | string |   | X |   |
| purchUnitOfMeasure | string |   | X |   |
| timeBucket | string |   | X |   |
| reservedQtyOnProdOrder | float |   | X |   |
| resQtyOnProdOrderComp | float |   | X |   |
| resQtyOnReqLine | float |   | X |   |
| reorderingPolicy | string |   | X |   |
| includeInventory | bool |   | X |   |
| manufacturingPolicy | string |   | X |   |
| reschedulingPeriod | string |   | X |   |
| lotAccumulationPeriod | string |   | X |   |
| dampenerPeriod | string |   | X |   |
| dampenerQuantity | float |   | X |   |
| overflowLevel | float |   | X |   |
| planningTransferShipQty | float |   | X |   |
| planningWorksheetQty | float |   | X |   |
| stockkeepingUnitExists | bool |   | X |   |
| manufacturerCode | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| createdFromNonstockItem | bool |   | X |   |
| substitutesExist | bool |   | X |   |
| qtyInTransit | float |   | X |   |
| transOrdReceiptQty | float |   | X |   |
| transOrdShipmentQty | float |   | X |   |
| qtyAssignedToShip | float |   | X |   |
| qtyPicked | float |   | X |   |
| serviceItemGroup | string |   | X |   |
| qtyOnServiceOrder | float |   | X |   |
| resQtyOnServiceOrders | float |   | X |   |
| itemTrackingCode | string |   | X |   |
| lotNos | string |   | X |   |
| expirationCalculation | string |   | X |   |
| lotNumberFilter | string |   | X |   |
| serialNumberFilter | string |   | X |   |
| qtyOnPurchReturn | float |   | X |   |
| qtyOnSalesReturn | float |   | X |   |
| numberOfSubstitutes | int |   | X |   |
| warehouseClassCode | string |   | X |   |
| specialEquipmentCode | string |   | X |   |
| putAwayTemplateCode | string |   | X |   |
| putAwayUnitOfMeasureCode | string |   | X |   |
| physInvtCountingPeriodCode | string |   | X |   |
| lastCountingPeriodUpdate | date |   | X |   |
| lastPhysInvtDate | date |   | X |   |
| useCrossDocking | bool |   | X |   |
| nextCountingStartDate | date |   | X |   |
| nextCountingEndDate | date |   | X |   |
| identifierCode | string |   | X |   |
| unitOfMeasureId | guid |   | X |   |
| taxGroupId | guid |   | X |   |
| routingNumber | string |   | X |   |
| productionBomNumber | string |   | X |   |
| singleLevelMaterialCost | float |   | X |   |
| singleLevelCapacityCost | float |   | X |   |
| singleLevelSubcontrdCost | float |   | X |   |
| singleLevelCapOvhdCost | float |   | X |   |
| singleLevelMfgOvhdCost | float |   | X |   |
| overheadRate | float |   | X |   |
| rolledUpSubcontractedCost | float |   | X |   |
| rolledUpMfgOvhdCost | float |   | X |   |
| rolledUpCapOverheadCost | float |   | X |   |
| planningIssuesQty | float |   | X |   |
| planningReceiptQty | float |   | X |   |
| plannedOrderReceiptQty | float |   | X |   |
| fpOrderReceiptQty | float |   | X |   |
| relOrderReceiptQty | float |   | X |   |
| planningReleaseQty | float |   | X |   |
| plannedOrderReleaseQty | float |   | X |   |
| purchReqReceiptQty | float |   | X |   |
| purchReqReleaseQty | float |   | X |   |
| orderTrackingPolicy | string |   | X |   |
| prodForecastQuantityBase | float |   | X |   |
| productionForecastName | string |   | X |   |
| componentForecast | string |   | X |   |
| qtyOnProdOrder | float |   | X |   |
| qtyOnComponentLines | float |   | X |   |
| critical | bool |   | X |   |
| commonItemNumber | string |   | X |   |
| unitOfMeasureFilter | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| pictures | [Media[]](#media) | Yes |
# WorkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| buyFromVendorNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| expectedReceiptDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToReceive | float |   | X |   |
| directUnitCost | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| unitPriceLcy | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| jobNumber | string |   | X |   |
| indirectCostPercent | float |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyRcdNotInvoiced | float |   | X |   |
| amtRcdNotInvoiced | float |   | X |   |
| quantityReceived | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| receiptNumber | string |   | X |   |
| receiptLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| payToVendorNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| vendorItemNumber | string |   | X |   |
| salesOrderNumber | string |   | X |   |
| salesOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| entryPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| useTax | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| reservedQuantity | float |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| outstandingAmtExVatLcy | float |   | X |   |
| aRcdNotInvExVatLcy | float |   | X |   |
| dimensionSetId | int |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobLineType | string |   | X |   |
| jobUnitPrice | float |   | X |   |
| jobTotalPrice | float |   | X |   |
| jobLineAmount | float |   | X |   |
| jobLineDiscountAmount | float |   | X |   |
| jobLineDiscountPercent | float |   | X |   |
| jobUnitPriceLcy | float |   | X |   |
| jobTotalPriceLcy | float |   | X |   |
| jobLineAmountLcy | float |   | X |   |
| jobLineDiscAmountLcy | float |   | X |   |
| jobCurrencyFactor | float |   | X |   |
| jobCurrencyCode | string |   | X |   |
| jobPlanningLineNumber | int |   | X |   |
| jobRemainingQty | float |   | X |   |
| jobRemainingQtyBase | float |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| prodOrderNumber | string |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToReceiveBase | float |   | X |   |
| qtyRcdNotInvoicedBase | float |   | X |   |
| qtyReceivedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| faPostingType | string |   | X |   |
| depreciationBookCode | string |   | X |   |
| salvageValue | float |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| deprAcquisitionCost | bool |   | X |   |
| maintenanceCode | string |   | X |   |
| insuranceNumber | string |   | X |   |
| budgetedFaNumber | string |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderSalesNumber | string |   | X |   |
| specialOrderSalesLineNumber | int |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyReceived | bool |   | X |   |
| requestedReceiptDate | date |   | X |   |
| promisedReceiptDate | date |   | X |   |
| leadTimeCalculation | string |   | X |   |
| inboundWhseHandlingTime | string |   | X |   |
| plannedReceiptDate | date |   | X |   |
| orderDate | date |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToShip | float |   | X |   |
| returnQtyToShipBase | float |   | X |   |
| returnQtyShippedNotInvd | float |   | X |   |
| retQtyShpdNotInvdBase | float |   | X |   |
| returnShpdNotInvd | float |   | X |   |
| returnShpdNotInvdLcy | float |   | X |   |
| returnQtyShipped | float |   | X |   |
| returnQtyShippedBase | float |   | X |   |
| returnShipmentNumber | string |   | X |   |
| returnShipmentLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| subtype | string |   | X |   |
| routingNumber | string |   | X |   |
| operationNumber | string |   | X |   |
| workCenterNumber | string |   | X |   |
| finished | bool |   | X |   |
| prodOrderLineNumber | int |   | X |   |
| overheadRate | float |   | X |   |
| mpsOrder | bool |   | X |   |
| planningFlexibility | string |   | X |   |
| safetyLeadTime | string |   | X |   |
| routingReferenceNumber | int |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowPurchaseDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| documentType | string |   | X |   |
| buyFromVendorNumber | string |   | X |   |
| number | string |   | X |   |
| payToVendorNumber | string |   | X |   |
| payToName | string |   | X |   |
| payToName2 | string |   | X |   |
| payToAddress | string |   | X |   |
| payToAddress2 | string |   | X |   |
| payToCity | string |   | X |   |
| payToContact | string |   | X |   |
| yourReference | string |   | X |   |
| shipToCode | string |   | X |   |
| shipToName | string |   | X |   |
| shipToName2 | string |   | X |   |
| shipToAddress | string |   | X |   |
| shipToAddress2 | string |   | X |   |
| shipToCity | string |   | X |   |
| shipToContact | string |   | X |   |
| orderDate | date |   | X |   |
| postingDate | date |   | X |   |
| expectedReceiptDate | date |   | X |   |
| postingDescription | string |   | X |   |
| paymentTermsCode | string |   | X |   |
| dueDate | date |   | X |   |
| paymentDiscountPercent | float |   | X |   |
| pmtDiscountDate | date |   | X |   |
| shipmentMethodCode | string |   | X |   |
| locationCode | string |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| vendorPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| currencyFactor | float |   | X |   |
| pricesIncludingVat | bool |   | X |   |
| invoiceDiscCode | string |   | X |   |
| languageCode | string |   | X |   |
| purchaserCode | string |   | X |   |
| orderClass | string |   | X |   |
| comment | bool |   | X |   |
| numberPrinted | int |   | X |   |
| onHold | string |   | X |   |
| appliesToDocType | string |   | X |   |
| appliesToDocNumber | string |   | X |   |
| balAccountNumber | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| receive | bool |   | X |   |
| invoice | bool |   | X |   |
| printPostedDocuments | bool |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| receivingNumber | string |   | X |   |
| postingNumber | string |   | X |   |
| lastReceivingNumber | string |   | X |   |
| lastPostingNumber | string |   | X |   |
| vendorOrderNumber | string |   | X |   |
| vendorShipmentNumber | string |   | X |   |
| vendorInvoiceNumber | string |   | X |   |
| vendorCrMemoNumber | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| reasonCode | string |   | X |   |
| genBusPostingGroup | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| vatCountryRegionCode | string |   | X |   |
| buyFromVendorName | string |   | X |   |
| buyFromVendorName2 | string |   | X |   |
| buyFromAddress | string |   | X |   |
| buyFromAddress2 | string |   | X |   |
| buyFromCity | string |   | X |   |
| buyFromContact | string |   | X |   |
| payToPostCode | string |   | X |   |
| payToCounty | string |   | X |   |
| payToCountryRegionCode | string |   | X |   |
| buyFromPostCode | string |   | X |   |
| buyFromCounty | string |   | X |   |
| buyFromCountryRegionCode | string |   | X |   |
| shipToPostCode | string |   | X |   |
| shipToCounty | string |   | X |   |
| shipToCountryRegionCode | string |   | X |   |
| balAccountType | string |   | X |   |
| orderAddressCode | string |   | X |   |
| entryPoint | string |   | X |   |
| correction | bool |   | X |   |
| documentDate | date |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| paymentMethodCode | string |   | X |   |
| numberSeries | string |   | X |   |
| postingNumberSeries | string |   | X |   |
| receivingNumberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| appliesToId | string |   | X |   |
| vatBaseDiscountPercent | float |   | X |   |
| status | string |   | X |   |
| invoiceDiscountCalculation | string |   | X |   |
| invoiceDiscountValue | float |   | X |   |
| sendIcDocument | bool |   | X |   |
| icStatus | string |   | X |   |
| buyFromIcPartnerCode | string |   | X |   |
| payToIcPartnerCode | string |   | X |   |
| icDirection | string |   | X |   |
| prepaymentNumber | string |   | X |   |
| lastPrepaymentNumber | string |   | X |   |
| prepmtCrMemoNumber | string |   | X |   |
| lastPrepmtCrMemoNumber | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepaymentNumberSeries | string |   | X |   |
| compressPrepayment | bool |   | X |   |
| prepaymentDueDate | date |   | X |   |
| prepmtCrMemoNumberSeries | string |   | X |   |
| prepmtPostingDescription | string |   | X |   |
| prepmtPmtDiscountDate | date |   | X |   |
| prepmtPaymentTermsCode | string |   | X |   |
| prepmtPaymentDiscountPercent | float |   | X |   |
| quoteNumber | string |   | X |   |
| jobQueueStatus | string |   | X |   |
| jobQueueEntryId | guid |   | X |   |
| incomingDocumentEntryNumber | int |   | X |   |
| creditorNumber | string |   | X |   |
| paymentReference | string |   | X |   |
| aRcdNotInvExVatLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| dimensionSetId | int |   | X |   |
| invoiceDiscountAmount | float |   | X |   |
| numberOfArchivedVersions | int |   | X |   |
| docNumberOccurrence | int |   | X |   |
| campaignNumber | string |   | X |   |
| buyFromContactNumber | string |   | X |   |
| payToContactNumber | string |   | X |   |
| responsibilityCenter | string |   | X |   |
| completelyReceived | bool |   | X |   |
| postingFromWhseRef | int |   | X |   |
| locationFilter | string |   | X |   |
| requestedReceiptDate | date |   | X |   |
| promisedReceiptDate | date |   | X |   |
| leadTimeCalculation | string |   | X |   |
| inboundWhseHandlingTime | string |   | X |   |
| vendorAuthorizationNumber | string |   | X |   |
| returnShipmentNumber | string |   | X |   |
| returnShipmentNumberSeries | string |   | X |   |
| ship | bool |   | X |   |
| lastReturnShipmentNumber | string |   | X |   |
| assignedUserId | string |   | X |   |
| pendingApprovals | int |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowPurchaseDocumentsworkflowPurchaseDocumentLines | [WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]](#workflowpurchasedocumentsworkflowpurchasedocumentlines) | Yes |
# WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| buyFromVendorNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| expectedReceiptDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToReceive | float |   | X |   |
| directUnitCost | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| unitPriceLcy | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| jobNumber | string |   | X |   |
| indirectCostPercent | float |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyRcdNotInvoiced | float |   | X |   |
| amtRcdNotInvoiced | float |   | X |   |
| quantityReceived | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| receiptNumber | string |   | X |   |
| receiptLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| payToVendorNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| vendorItemNumber | string |   | X |   |
| salesOrderNumber | string |   | X |   |
| salesOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| entryPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| useTax | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| reservedQuantity | float |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| outstandingAmtExVatLcy | float |   | X |   |
| aRcdNotInvExVatLcy | float |   | X |   |
| dimensionSetId | int |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobLineType | string |   | X |   |
| jobUnitPrice | float |   | X |   |
| jobTotalPrice | float |   | X |   |
| jobLineAmount | float |   | X |   |
| jobLineDiscountAmount | float |   | X |   |
| jobLineDiscountPercent | float |   | X |   |
| jobUnitPriceLcy | float |   | X |   |
| jobTotalPriceLcy | float |   | X |   |
| jobLineAmountLcy | float |   | X |   |
| jobLineDiscAmountLcy | float |   | X |   |
| jobCurrencyFactor | float |   | X |   |
| jobCurrencyCode | string |   | X |   |
| jobPlanningLineNumber | int |   | X |   |
| jobRemainingQty | float |   | X |   |
| jobRemainingQtyBase | float |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| prodOrderNumber | string |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToReceiveBase | float |   | X |   |
| qtyRcdNotInvoicedBase | float |   | X |   |
| qtyReceivedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| faPostingType | string |   | X |   |
| depreciationBookCode | string |   | X |   |
| salvageValue | float |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| deprAcquisitionCost | bool |   | X |   |
| maintenanceCode | string |   | X |   |
| insuranceNumber | string |   | X |   |
| budgetedFaNumber | string |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderSalesNumber | string |   | X |   |
| specialOrderSalesLineNumber | int |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyReceived | bool |   | X |   |
| requestedReceiptDate | date |   | X |   |
| promisedReceiptDate | date |   | X |   |
| leadTimeCalculation | string |   | X |   |
| inboundWhseHandlingTime | string |   | X |   |
| plannedReceiptDate | date |   | X |   |
| orderDate | date |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToShip | float |   | X |   |
| returnQtyToShipBase | float |   | X |   |
| returnQtyShippedNotInvd | float |   | X |   |
| retQtyShpdNotInvdBase | float |   | X |   |
| returnShpdNotInvd | float |   | X |   |
| returnShpdNotInvdLcy | float |   | X |   |
| returnQtyShipped | float |   | X |   |
| returnQtyShippedBase | float |   | X |   |
| returnShipmentNumber | string |   | X |   |
| returnShipmentLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| subtype | string |   | X |   |
| routingNumber | string |   | X |   |
| operationNumber | string |   | X |   |
| workCenterNumber | string |   | X |   |
| finished | bool |   | X |   |
| prodOrderLineNumber | int |   | X |   |
| overheadRate | float |   | X |   |
| mpsOrder | bool |   | X |   |
| planningFlexibility | string |   | X |   |
| safetyLeadTime | string |   | X |   |
| routingReferenceNumber | int |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| shipmentDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToShip | float |   | X |   |
| unitPrice | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| customerPriceGroup | string |   | X |   |
| jobNumber | string |   | X |   |
| workTypeCode | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyShippedNotInvoiced | float |   | X |   |
| shippedNotInvoiced | float |   | X |   |
| quantityShipped | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| shipmentNumber | string |   | X |   |
| shipmentLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| billToCustomerNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| purchaseOrderNumber | string |   | X |   |
| purchOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| exitPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxCategory | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| vatClauseCode | string |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| shippedNotInvoicedLcy | float |   | X |   |
| shippedNotInvLcyNoVat | float |   | X |   |
| reservedQuantity | float |   | X |   |
| reserve | string |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| dimensionSetId | int |   | X |   |
| qtyToAssembleToOrder | float |   | X |   |
| qtyToAsmToOrderBase | float |   | X |   |
| atoWhseOutstandingQty | float |   | X |   |
| atoWhseOutstdQtyBase | float |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobContractEntryNumber | int |   | X |   |
| postingDate | date |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| planned | bool |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToShipBase | float |   | X |   |
| qtyShippedNotInvdBase | float |   | X |   |
| qtyShippedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| depreciationBookCode | string |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| outOfStockSubstitution | bool |   | X |   |
| substitutionAvailable | bool |   | X |   |
| originallyOrderedNumber | string |   | X |   |
| originallyOrderedVarCode | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderPurchaseNumber | string |   | X |   |
| specialOrderPurchLineNumber | int |   | X |   |
| whseOutstandingQty | float |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyShipped | bool |   | X |   |
| requestedDeliveryDate | date |   | X |   |
| promisedDeliveryDate | date |   | X |   |
| shippingTime | string |   | X |   |
| outboundWhseHandlingTime | string |   | X |   |
| plannedDeliveryDate | date |   | X |   |
| plannedShipmentDate | date |   | X |   |
| shippingAgentCode | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToReceive | float |   | X |   |
| returnQtyToReceiveBase | float |   | X |   |
| returnQtyRcdNotInvd | float |   | X |   |
| retQtyRcdNotInvdBase | float |   | X |   |
| returnRcdNotInvd | float |   | X |   |
| returnRcdNotInvdLcy | float |   | X |   |
| returnQtyReceived | float |   | X |   |
| returnQtyReceivedBase | float |   | X |   |
| applFromItemEntry | int |   | X |   |
| bomItemNumber | string |   | X |   |
| returnReceiptNumber | string |   | X |   |
| returnReceiptLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| allowLineDisc | bool |   | X |   |
| customerDiscGroup | string |   | X |   |
| subtype | string |   | X |   |
| priceDescription | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowSalesDocuments
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| documentType | string |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| number | string |   | X |   |
| billToCustomerNumber | string |   | X |   |
| billToName | string |   | X |   |
| billToName2 | string |   | X |   |
| billToAddress | string |   | X |   |
| billToAddress2 | string |   | X |   |
| billToCity | string |   | X |   |
| billToContact | string |   | X |   |
| yourReference | string |   | X |   |
| shipToCode | string |   | X |   |
| shipToName | string |   | X |   |
| shipToName2 | string |   | X |   |
| shipToAddress | string |   | X |   |
| shipToAddress2 | string |   | X |   |
| shipToCity | string |   | X |   |
| shipToContact | string |   | X |   |
| orderDate | date |   | X |   |
| postingDate | date |   | X |   |
| shipmentDate | date |   | X |   |
| postingDescription | string |   | X |   |
| paymentTermsCode | string |   | X |   |
| dueDate | date |   | X |   |
| paymentDiscountPercent | float |   | X |   |
| pmtDiscountDate | date |   | X |   |
| shipmentMethodCode | string |   | X |   |
| locationCode | string |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| customerPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| currencyFactor | float |   | X |   |
| customerPriceGroup | string |   | X |   |
| pricesIncludingVat | bool |   | X |   |
| invoiceDiscCode | string |   | X |   |
| customerDiscGroup | string |   | X |   |
| languageCode | string |   | X |   |
| salespersonCode | string |   | X |   |
| orderClass | string |   | X |   |
| comment | bool |   | X |   |
| numberPrinted | int |   | X |   |
| onHold | string |   | X |   |
| appliesToDocType | string |   | X |   |
| appliesToDocNumber | string |   | X |   |
| balAccountNumber | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| ship | bool |   | X |   |
| invoice | bool |   | X |   |
| printPostedDocuments | bool |   | X |   |
| amount | float |   | X |   |
| amountIncludingVAT | float |   | X |   |
| shippingNumber | string |   | X |   |
| postingNumber | string |   | X |   |
| lastShippingNumber | string |   | X |   |
| lastPostingNumber | string |   | X |   |
| prepaymentNumber | string |   | X |   |
| lastPrepaymentNumber | string |   | X |   |
| premptCrMemoNumber | string |   | X |   |
| lastPremtCrMemoNumber | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| combineShipments | bool |   | X |   |
| reasonCode | string |   | X |   |
| genBusPostingGroup | string |   | X |   |
| eu3PartyTrade | bool |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| vatCountryRegionCode | string |   | X |   |
| sellToCustomerName | string |   | X |   |
| sellToCustomerName2 | string |   | X |   |
| sellToAddress | string |   | X |   |
| sellToAddress2 | string |   | X |   |
| sellToCity | string |   | X |   |
| sellToContact | string |   | X |   |
| billToPostCode | string |   | X |   |
| billToCounty | string |   | X |   |
| billToCountryRegionCode | string |   | X |   |
| sellToPostCode | string |   | X |   |
| sellToCounty | string |   | X |   |
| sellToCountryRegionCode | string |   | X |   |
| shipToPostCode | string |   | X |   |
| shipToCounty | string |   | X |   |
| shipToCountryRegionCode | string |   | X |   |
| balAccountType | string |   | X |   |
| exitPoint | string |   | X |   |
| correction | bool |   | X |   |
| documentDate | date |   | X |   |
| externalDocumentNumber | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| paymentMethodCode | string |   | X |   |
| shippingAgentCode | string |   | X |   |
| packageTrackingNumber | string |   | X |   |
| numberSeries | string |   | X |   |
| postingNumberSeries | string |   | X |   |
| shippingNumberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| reserve | string |   | X |   |
| appliesToId | string |   | X |   |
| vatBaseDiscountPercent | float |   | X |   |
| status | string |   | X |   |
| invoiceDiscountCalculation | string |   | X |   |
| invoiceDiscountValue | float |   | X |   |
| sendIcDocument | bool |   | X |   |
| icStatus | string |   | X |   |
| sellToIcPartnerCode | string |   | X |   |
| billToIcPartnerCode | string |   | X |   |
| icDirection | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepaymentNumberSeries | string |   | X |   |
| compressPrepayment | bool |   | X |   |
| prepaymentDueDate | date |   | X |   |
| prepmtCrMemoNumberSeries | string |   | X |   |
| prepmtPostingDescription | string |   | X |   |
| prepmtPmtDiscountDate | date |   | X |   |
| prepmtPaymentTermsCode | string |   | X |   |
| prepmtPaymentDiscountPercent | float |   | X |   |
| quoteNumber | string |   | X |   |
| quoteValidUntilDate | date |   | X |   |
| quoteSentToCustomer | date |   | X |   |
| quoteAccepted | bool |   | X |   |
| quoteAcceptedDate | date |   | X |   |
| jobQueueStatus | string |   | X |   |
| jobQueueEntryId | guid |   | X |   |
| incomingDocumentEntryNumber | int |   | X |   |
| workDescription | string |   | X |   |
| amountShippedNotInvoicedInclVat | float |   | X |   |
| amountShippedNotInvoiced | float |   | X |   |
| dimensionSetId | int |   | X |   |
| paymentServiceSetId | int |   | X |   |
| directDebitMandateId | string |   | X |   |
| invoiceDiscountAmount | float |   | X |   |
| numberOfArchivedVersions | int |   | X |   |
| docNumberOccurrence | int |   | X |   |
| campaignNumber | string |   | X |   |
| sellToCustomerTemplateCode | string |   | X |   |
| sellToContactNumber | string |   | X |   |
| billToContactNumber | string |   | X |   |
| billToCustomerTemplateCode | string |   | X |   |
| opportunityNumber | string |   | X |   |
| responsibilityCenter | string |   | X |   |
| shippingAdvice | string |   | X |   |
| shippedNotInvoiced | bool |   | X |   |
| completelyShipped | bool |   | X |   |
| postingFromWhseRef | int |   | X |   |
| locationFilter | string |   | X |   |
| shipped | bool |   | X |   |
| requestedDeliveryDate | date |   | X |   |
| promisedDeliveryDate | date |   | X |   |
| shippingTime | string |   | X |   |
| outboundWhseHandlingTime | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| lateOrderShipping | bool |   | X |   |
| receive | bool |   | X |   |
| returnReceiptNumber | string |   | X |   |
| returnReceiptNumberSeries | string |   | X |   |
| lastReturnReceiptNumber | string |   | X |   |
| allowLineDisc | bool |   | X |   |
| getShipmentUsed | bool |   | X |   |
| assignedUserId | string |   | X |   |
| dateFilter | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| workflowSalesDocumentsworkflowSalesDocumentLines | [WorkflowSalesDocumentsworkflowSalesDocumentLines[]](#workflowsalesdocumentsworkflowsalesdocumentlines) | Yes |
# WorkflowSalesDocumentsworkflowSalesDocumentLines
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| documentType | string |   | X |   |
| documentNumber | string |   | X |   |
| lineNumber | int |   | X |   |
| sellToCustomerNumber | string |   | X |   |
| type | string |   | X |   |
| number | string |   | X |   |
| locationCode | string |   | X |   |
| postingGroup | string |   | X |   |
| shipmentDate | date |   | X |   |
| description | string |   | X |   |
| description2 | string |   | X |   |
| unitOfMeasure | string |   | X |   |
| quantity | float |   | X |   |
| outstandingQuantity | float |   | X |   |
| qtyToInvoice | float |   | X |   |
| qtyToShip | float |   | X |   |
| unitPrice | float |   | X |   |
| unitCostLcy | float |   | X |   |
| vatPercent | float |   | X |   |
| lineDiscountPercent | float |   | X |   |
| lineDiscountAmount | float |   | X |   |
| amount | float |   | X |   |
| amountIncludingVat | float |   | X |   |
| allowInvoiceDisc | bool |   | X |   |
| grossWeight | float |   | X |   |
| netWeight | float |   | X |   |
| unitsPerParcel | float |   | X |   |
| unitVolume | float |   | X |   |
| applToItemEntry | int |   | X |   |
| shortcutDimension1Code | string |   | X |   |
| shortcutDimension2Code | string |   | X |   |
| customerPriceGroup | string |   | X |   |
| jobNumber | string |   | X |   |
| workTypeCode | string |   | X |   |
| recalculateInvoiceDisc | bool |   | X |   |
| outstandingAmount | float |   | X |   |
| qtyShippedNotInvoiced | float |   | X |   |
| shippedNotInvoiced | float |   | X |   |
| quantityShipped | float |   | X |   |
| quantityInvoiced | float |   | X |   |
| shipmentNumber | string |   | X |   |
| shipmentLineNumber | int |   | X |   |
| profitPercent | float |   | X |   |
| billToCustomerNumber | string |   | X |   |
| invDiscountAmount | float |   | X |   |
| purchaseOrderNumber | string |   | X |   |
| purchOrderLineNumber | int |   | X |   |
| dropShipment | bool |   | X |   |
| genBusPostingGroup | string |   | X |   |
| genProdPostingGroup | string |   | X |   |
| vatCalculationType | string |   | X |   |
| transactionType | string |   | X |   |
| transportMethod | string |   | X |   |
| attachedToLineNumber | int |   | X |   |
| exitPoint | string |   | X |   |
| area | string |   | X |   |
| transactionSpecification | string |   | X |   |
| taxCategory | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| taxGroupCode | string |   | X |   |
| vatClauseCode | string |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| vatProdPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| outstandingAmountLcy | float |   | X |   |
| shippedNotInvoicedLcy | float |   | X |   |
| shippedNotInvLcyNoVat | float |   | X |   |
| reservedQuantity | float |   | X |   |
| reserve | string |   | X |   |
| blanketOrderNumber | string |   | X |   |
| blanketOrderLineNumber | int |   | X |   |
| vatBaseAmount | float |   | X |   |
| unitCost | float |   | X |   |
| systemCreatedEntry | bool |   | X |   |
| lineAmount | float |   | X |   |
| vatDifference | float |   | X |   |
| invDiscAmountToInvoice | float |   | X |   |
| vatIdentifier | string |   | X |   |
| icPartnerRefType | string |   | X |   |
| icPartnerReference | string |   | X |   |
| prepaymentPercent | float |   | X |   |
| prepmtLineAmount | float |   | X |   |
| prepmtAmtInv | float |   | X |   |
| prepmtAmtInclVat | float |   | X |   |
| prepaymentAmount | float |   | X |   |
| prepmtVatBaseAmt | float |   | X |   |
| prepaymentVatPercent | float |   | X |   |
| prepmtVatCalcType | string |   | X |   |
| prepaymentVatIdentifier | string |   | X |   |
| prepaymentTaxAreaCode | string |   | X |   |
| prepaymentTaxLiable | bool |   | X |   |
| prepaymentTaxGroupCode | string |   | X |   |
| prepmtAmtToDeduct | float |   | X |   |
| prepmtAmtDeducted | float |   | X |   |
| prepaymentLine | bool |   | X |   |
| prepmtAmountInvInclVat | float |   | X |   |
| prepmtAmountInvLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| prepmtVatAmountInvLcy | float |   | X |   |
| prepaymentVatDifference | float |   | X |   |
| prepmtVatDiffToDeduct | float |   | X |   |
| prepmtVatDiffDeducted | float |   | X |   |
| dimensionSetId | int |   | X |   |
| qtyToAssembleToOrder | float |   | X |   |
| qtyToAsmToOrderBase | float |   | X |   |
| atoWhseOutstandingQty | float |   | X |   |
| atoWhseOutstdQtyBase | float |   | X |   |
| jobTaskNumber | string |   | X |   |
| jobContractEntryNumber | int |   | X |   |
| postingDate | date |   | X |   |
| deferralCode | string |   | X |   |
| returnsDeferralStartDate | date |   | X |   |
| variantCode | string |   | X |   |
| binCode | string |   | X |   |
| qtyPerUnitOfMeasure | float |   | X |   |
| planned | bool |   | X |   |
| unitOfMeasureCode | string |   | X |   |
| quantityBase | float |   | X |   |
| outstandingQtyBase | float |   | X |   |
| qtyToInvoiceBase | float |   | X |   |
| qtyToShipBase | float |   | X |   |
| qtyShippedNotInvdBase | float |   | X |   |
| qtyShippedBase | float |   | X |   |
| qtyInvoicedBase | float |   | X |   |
| reservedQtyBase | float |   | X |   |
| faPostingDate | date |   | X |   |
| depreciationBookCode | string |   | X |   |
| deprUntilFaPostingDate | bool |   | X |   |
| duplicateInDepreciationBook | string |   | X |   |
| useDuplicationList | bool |   | X |   |
| responsibilityCenter | string |   | X |   |
| outOfStockSubstitution | bool |   | X |   |
| substitutionAvailable | bool |   | X |   |
| originallyOrderedNumber | string |   | X |   |
| originallyOrderedVarCode | string |   | X |   |
| crossReferenceNumber | string |   | X |   |
| unitOfMeasureCrossRef | string |   | X |   |
| crossReferenceType | string |   | X |   |
| crossReferenceTypeNumber | string |   | X |   |
| itemCategoryCode | string |   | X |   |
| nonstock | bool |   | X |   |
| purchasingCode | string |   | X |   |
| specialOrder | bool |   | X |   |
| specialOrderPurchaseNumber | string |   | X |   |
| specialOrderPurchLineNumber | int |   | X |   |
| whseOutstandingQty | float |   | X |   |
| whseOutstandingQtyBase | float |   | X |   |
| completelyShipped | bool |   | X |   |
| requestedDeliveryDate | date |   | X |   |
| promisedDeliveryDate | date |   | X |   |
| shippingTime | string |   | X |   |
| outboundWhseHandlingTime | string |   | X |   |
| plannedDeliveryDate | date |   | X |   |
| plannedShipmentDate | date |   | X |   |
| shippingAgentCode | string |   | X |   |
| shippingAgentServiceCode | string |   | X |   |
| allowItemChargeAssignment | bool |   | X |   |
| qtyToAssign | float |   | X |   |
| qtyAssigned | float |   | X |   |
| returnQtyToReceive | float |   | X |   |
| returnQtyToReceiveBase | float |   | X |   |
| returnQtyRcdNotInvd | float |   | X |   |
| retQtyRcdNotInvdBase | float |   | X |   |
| returnRcdNotInvd | float |   | X |   |
| returnRcdNotInvdLcy | float |   | X |   |
| returnQtyReceived | float |   | X |   |
| returnQtyReceivedBase | float |   | X |   |
| applFromItemEntry | int |   | X |   |
| bomItemNumber | string |   | X |   |
| returnReceiptNumber | string |   | X |   |
| returnReceiptLineNumber | int |   | X |   |
| returnReasonCode | string |   | X |   |
| allowLineDisc | bool |   | X |   |
| customerDiscGroup | string |   | X |   |
| subtype | string |   | X |   |
| priceDescription | string |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| jobNumberLinks | [JobList[]](#joblist) | Yes |
| jobTaskNumberLinks | [JobTaskLines[]](#jobtasklines) | Yes |
# WorkflowVendors
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| number | string |   | X |   |
| name | string |   | X |   |
| searchName | string |   | X |   |
| name2 | string |   | X |   |
| address | string |   | X |   |
| address2 | string |   | X |   |
| city | string |   | X |   |
| contact | string |   | X |   |
| phoneNumber | string |   | X |   |
| telexNumber | string |   | X |   |
| ourAccountNumber | string |   | X |   |
| territoryCode | string |   | X |   |
| globalDimension1Code | string |   | X |   |
| globalDimension2Code | string |   | X |   |
| budgetedAmount | float |   | X |   |
| vendorPostingGroup | string |   | X |   |
| currencyCode | string |   | X |   |
| languageCode | string |   | X |   |
| statisticsGroup | int |   | X |   |
| paymentTermsCode | string |   | X |   |
| finChargeTermsCode | string |   | X |   |
| purchaserCode | string |   | X |   |
| shipmentMethodCode | string |   | X |   |
| shippingAgentCode | string |   | X |   |
| invoiceDiscCode | string |   | X |   |
| countryRegionCode | string |   | X |   |
| comment | bool |   | X |   |
| blocked | string |   | X |   |
| payToVendorNumber | string |   | X |   |
| priority | int |   | X |   |
| paymentMethodCode | string |   | X |   |
| lastModifiedDateTime | date |   | X |   |
| lastDateModified | date |   | X |   |
| dateFilter | string |   | X |   |
| globalDimension1Filter | string |   | X |   |
| globalDimension2Filter | string |   | X |   |
| balance | float |   | X |   |
| balanceLcy | float |   | X |   |
| netChange | float |   | X |   |
| netChangeLcy | float |   | X |   |
| purchasesLcy | float |   | X |   |
| invDiscountsLcy | float |   | X |   |
| pmtDiscountsLcy | float |   | X |   |
| balanceDue | float |   | X |   |
| balanceDueLcy | float |   | X |   |
| payments | float |   | X |   |
| invoiceAmounts | float |   | X |   |
| crMemoAmounts | float |   | X |   |
| financeChargeMemoAmounts | float |   | X |   |
| paymentsLcy | float |   | X |   |
| invAmountsLcy | float |   | X |   |
| crMemoAmountsLcy | float |   | X |   |
| finChargeMemoAmountsLcy | float |   | X |   |
| outstandingOrders | float |   | X |   |
| amtRcdNotInvoiced | float |   | X |   |
| applicationMethod | string |   | X |   |
| pricesIncludingVat | bool |   | X |   |
| faxNumber | string |   | X |   |
| telexAnswerBack | string |   | X |   |
| vatRegistrationNumber | string |   | X |   |
| genBusPostingGroup | string |   | X |   |
| gln | string |   | X |   |
| postCode | string |   | X |   |
| county | string |   | X |   |
| debitAmount | float |   | X |   |
| creditAmount | float |   | X |   |
| debitAmountLcy | float |   | X |   |
| creditAmountLcy | float |   | X |   |
| eMail | string |   | X |   |
| homePage | string |   | X |   |
| reminderAmounts | float |   | X |   |
| reminderAmountsLcy | float |   | X |   |
| numberSeries | string |   | X |   |
| taxAreaCode | string |   | X |   |
| taxLiable | bool |   | X |   |
| vatBusPostingGroup | string |   | X |   |
| currencyFilter | string |   | X |   |
| outstandingOrdersLcy | float |   | X |   |
| amtRcdNotInvoicedLcy | float |   | X |   |
| blockPaymentTolerance | bool |   | X |   |
| pmtDiscToleranceLcy | float |   | X |   |
| pmtToleranceLcy | float |   | X |   |
| icPartnerCode | string |   | X |   |
| refunds | float |   | X |   |
| refundsLcy | float |   | X |   |
| otherAmounts | float |   | X |   |
| otherAmountsLcy | float |   | X |   |
| prepaymentPercent | float |   | X |   |
| outstandingInvoices | float |   | X |   |
| outstandingInvoicesLcy | float |   | X |   |
| payToNumberOfArchivedDoc | int |   | X |   |
| buyFromNumberOfArchivedDoc | int |   | X |   |
| partnerType | string |   | X |   |
| creditorNumber | string |   | X |   |
| preferredBankAccountCode | string |   | X |   |
| cashFlowPaymentTermsCode | string |   | X |   |
| primaryContactNumber | string |   | X |   |
| responsibilityCenter | string |   | X |   |
| locationCode | string |   | X |   |
| leadTimeCalculation | string |   | X |   |
| numberOfPstdReceipts | int |   | X |   |
| numberOfPstdInvoices | int |   | X |   |
| numberOfPstdReturnShipments | int |   | X |   |
| numberOfPstdCreditMemos | int |   | X |   |
| payToNumberOfOrders | int |   | X |   |
| payToNumberOfInvoices | int |   | X |   |
| payToNumberOfReturnOrders | int |   | X |   |
| payToNumberOfCreditMemos | int |   | X |   |
| payToNumberOfPstdReceipts | int |   | X |   |
| payToNumberOfPstdInvoices | int |   | X |   |
| payToNumberOfPstdReturnS | int |   | X |   |
| payToNumberOfPstdCrMemos | int |   | X |   |
| numberOfQuotes | int |   | X |   |
| numberOfBlanketOrders | int |   | X |   |
| numberOfOrders | int |   | X |   |
| numberOfInvoices | int |   | X |   |
| numberOfReturnOrders | int |   | X |   |
| numberOfCreditMemos | int |   | X |   |
| numberOfOrderAddresses | int |   | X |   |
| payToNumberOfQuotes | int |   | X |   |
| payToNumberOfBlanketOrders | int |   | X |   |
| numberOfIncomingDocuments | int |   | X |   |
| baseCalendarCode | string |   | X |   |
| documentSendingProfile | string |   | X |   |
| validateEuVatRegNumber | bool |   | X |   |
| currencyId | guid |   | X |   |
| paymentTermsId | guid |   | X |   |
| paymentMethodId | guid |   | X |   |

## Relations
| Name | Type | Collection |
| --- | --- | :-: |
| image | [Media](#media) | No |
# WorkflowWebhookSubscriptions
## Properties
| Name | Type | Read Only | Required | Nullable |
| --- | --- | :-: | :-: | :-: |
| id | guid |   | X |   |
| notificationUrl | string |   | X |   |
| conditions | string |   | X |   |
| eventCode | string |   | X |   |
| clientType | string |   | X |   |
| clientId | guid |   | X |   |
| enabled | bool |   | X |   |

