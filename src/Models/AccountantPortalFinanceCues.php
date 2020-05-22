<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AccountantPortalFinanceCues
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $primaryKey
 * @property string $overduePurchaseDocumentsAmount
 * @property string $overduePurchaseDocumentsStyle
 * @property string $purchaseDiscountsNextWeekAmount
 * @property string $purchaseDiscountsNextWeekStyle
 * @property string $overdueSalesDocumentsAmount
 * @property string $overdueSalesDocumentsStyle
 * @property string $purchaseDocumentsDueTodayAmount
 * @property string $purchaseDocumentsDueTodayStyle
 * @property string $vendorsPaymentsOnHoldAmount
 * @property string $vendorsPaymentsOnHoldStyle
 * @property string $pOsPendingApprovalAmount
 * @property string $pOsPendingApprovalStyle
 * @property string $sOsPendingApprovalAmount
 * @property string $sOsPendingApprovalStyle
 * @property string $approvedSalesOrdersAmount
 * @property string $approvedSalesOrdersStyle
 * @property string $approvedPurchaseOrdersAmount
 * @property string $approvedPurchaseOrdersStyle
 * @property string $purchaseReturnOrdersAmount
 * @property string $purchaseReturnOrdersStyle
 * @property string $salesReturnOrdersAllAmount
 * @property string $salesReturnOrdersAllStyle
 * @property string $customersBlockedAmount
 * @property string $customersBlockedStyle
 * @property string $newIncomingDocumentsAmount
 * @property string $newIncomingDocumentsStyle
 * @property string $approvedIncomingDocumentsAmount
 * @property string $approvedIncomingDocumentsStyle
 * @property string $oCRPendingAmount
 * @property string $oCRPendingStyle
 * @property string $oCRCompletedAmount
 * @property string $oCRCompletedStyle
 * @property string $requestsToApproveAmount
 * @property string $requestsToApproveStyle
 * @property string $requestsSentForApprovalAmount
 * @property string $requestsSentForApprovalStyle
 * @property string $cashAccountsBalanceAmount
 * @property string $cashAccountsBalanceStyle
 * @property string $lastDepreciatedPostedDateAmount
 * @property string $lastDepreciatedPostedDateStyle
 * @property string $lastLoginDateAmount
 * @property string $lastLoginDateStyle
 *
 */
class AccountantPortalFinanceCues extends Entity
{
    protected static $schema_type = 'AccountantPortalFinanceCues';

    protected $fillable = [
        'primaryKey',
        'overduePurchaseDocumentsAmount',
        'overduePurchaseDocumentsStyle',
        'purchaseDiscountsNextWeekAmount',
        'purchaseDiscountsNextWeekStyle',
        'overdueSalesDocumentsAmount',
        'overdueSalesDocumentsStyle',
        'purchaseDocumentsDueTodayAmount',
        'purchaseDocumentsDueTodayStyle',
        'vendorsPaymentsOnHoldAmount',
        'vendorsPaymentsOnHoldStyle',
        'pOsPendingApprovalAmount',
        'pOsPendingApprovalStyle',
        'sOsPendingApprovalAmount',
        'sOsPendingApprovalStyle',
        'approvedSalesOrdersAmount',
        'approvedSalesOrdersStyle',
        'approvedPurchaseOrdersAmount',
        'approvedPurchaseOrdersStyle',
        'purchaseReturnOrdersAmount',
        'purchaseReturnOrdersStyle',
        'salesReturnOrdersAllAmount',
        'salesReturnOrdersAllStyle',
        'customersBlockedAmount',
        'customersBlockedStyle',
        'newIncomingDocumentsAmount',
        'newIncomingDocumentsStyle',
        'approvedIncomingDocumentsAmount',
        'approvedIncomingDocumentsStyle',
        'oCRPendingAmount',
        'oCRPendingStyle',
        'oCRCompletedAmount',
        'oCRCompletedStyle',
        'requestsToApproveAmount',
        'requestsToApproveStyle',
        'requestsSentForApprovalAmount',
        'requestsSentForApprovalStyle',
        'cashAccountsBalanceAmount',
        'cashAccountsBalanceStyle',
        'lastDepreciatedPostedDateAmount',
        'lastDepreciatedPostedDateStyle',
        'lastLoginDateAmount',
        'lastLoginDateStyle',
    ];

    protected $guarded  = [

    ];
}