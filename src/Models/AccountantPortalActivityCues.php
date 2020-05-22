<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class AccountantPortalActivityCues
 *
 * @property string $primaryKey
 * @property string $overduePurchInvoiceAmount
 * @property string $overduePurchInvoiceStyle
 * @property string $overdueSalesInvoiceAmount
 * @property string $overdueSalesInvoiceStyle
 * @property string $nonAppliedPaymentsAmount
 * @property string $nonAppliedPaymentsStyle
 * @property string $purchInvoicesDueNextWeekAmount
 * @property string $purchInvoicesDueNextWeekStyle
 * @property string $salesInvoicesDueNextWeekAmount
 * @property string $salesInvoicesDueNextWeekStyle
 * @property string $ongoingPurchaseInvoicesAmount
 * @property string $ongoingPurchaseInvoicesStyle
 * @property string $ongoingSalesInvoicesAmount
 * @property string $ongoingSalesInvoicesStyle
 * @property string $salesThisMonthAmount
 * @property string $salesThisMonthStyle
 * @property string $top10CustomerSalesYTDAmount
 * @property string $top10CustomerSalesYTDStyle
 * @property string $averageCollectionDaysAmount
 * @property string $averageCollectionDaysStyle
 * @property string $ongoingSalesQuotesAmount
 * @property string $ongoingSalesQuotesStyle
 * @property string $ongoingSalesOrdersAmount
 * @property string $ongoingSalesOrdersStyle
 * @property string $requeststoApproveAmount
 * @property string $requeststoApproveStyle
 * @property string $purchaseOrdersAmount
 * @property string $purchaseOrdersStyle
 * @property string $salesInvPendDocExchangeAmount
 * @property string $salesInvPendDocExchangeStyle
 * @property string $salesCrMPendDocExchangeAmount
 * @property string $salesCrMPendDocExchangeStyle
 * @property string $myIncomingDocumentsAmount
 * @property string $myIncomingDocumentsStyle
 * @property string $incDocAwaitingVerifAmount
 * @property string $incDocAwaitingVerifStyle
 * @property string $contactNameAmount
 * @property string $contactNameStyle
 *
 */
class AccountantPortalActivityCues extends Entity
{
    protected static $schema_type = 'AccountantPortalActivityCues';

    protected $fillable = [
        'primaryKey',
        'overduePurchInvoiceAmount',
        'overduePurchInvoiceStyle',
        'overdueSalesInvoiceAmount',
        'overdueSalesInvoiceStyle',
        'nonAppliedPaymentsAmount',
        'nonAppliedPaymentsStyle',
        'purchInvoicesDueNextWeekAmount',
        'purchInvoicesDueNextWeekStyle',
        'salesInvoicesDueNextWeekAmount',
        'salesInvoicesDueNextWeekStyle',
        'ongoingPurchaseInvoicesAmount',
        'ongoingPurchaseInvoicesStyle',
        'ongoingSalesInvoicesAmount',
        'ongoingSalesInvoicesStyle',
        'salesThisMonthAmount',
        'salesThisMonthStyle',
        'top10CustomerSalesYTDAmount',
        'top10CustomerSalesYTDStyle',
        'averageCollectionDaysAmount',
        'averageCollectionDaysStyle',
        'ongoingSalesQuotesAmount',
        'ongoingSalesQuotesStyle',
        'ongoingSalesOrdersAmount',
        'ongoingSalesOrdersStyle',
        'requeststoApproveAmount',
        'requeststoApproveStyle',
        'purchaseOrdersAmount',
        'purchaseOrdersStyle',
        'salesInvPendDocExchangeAmount',
        'salesInvPendDocExchangeStyle',
        'salesCrMPendDocExchangeAmount',
        'salesCrMPendDocExchangeStyle',
        'myIncomingDocumentsAmount',
        'myIncomingDocumentsStyle',
        'incDocAwaitingVerifAmount',
        'incDocAwaitingVerifStyle',
        'contactNameAmount',
        'contactNameStyle',
    ];

    protected $guarded  = [

    ];
}