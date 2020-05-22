<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingGeneralSetting
 *
 * @property string $primaryKey
 * @property string $currencySymbol
 * @property string $paypalEmailAddress
 * @property string $countryRegionCode
 * @property int $languageId
 * @property string $languageCode
 * @property string $languageDisplayName
 * @property string $defaultTaxId
 * @property string $defaultTaxDisplayName
 * @property string $defaultPaymentTermsId
 * @property string $defaultPaymentTermsDisplayName
 * @property string $defaultPaymentMethodId
 * @property string $defaultPaymentMethodDisplayName
 * @property float $amountRoundingPrecision
 * @property float $unitAmountRoundingPrecision
 * @property float $quantityRoundingPrecision
 * @property float $taxRoundingPrecision
 * @property string $draftInvoiceFileName
 * @property string $postedInvoiceFileName
 * @property string $quoteFileName
 * @property string $taxableGroupId
 * @property string $nonTaxableGroupId
 * @property bool $enableSynchronization
 * @property bool $enableSyncCoupons
 * @property string $updateVersion
 * @method bool|true|false FixIntegrationRecordIDs()
 * @method bool|true|false FixTemplates()
 * @method bool|true|false SyncBizProfile()
 *
 */
class InvoicingGeneralSetting extends Entity
{
    protected static $schema_type = 'nativeInvoicingGeneralSettings';

    protected $fillable = [
        'primaryKey',
        'currencySymbol',
        'paypalEmailAddress',
        'countryRegionCode',
        'languageId',
        'languageCode',
        'languageDisplayName',
        'defaultTaxId',
        'defaultTaxDisplayName',
        'defaultPaymentTermsId',
        'defaultPaymentTermsDisplayName',
        'defaultPaymentMethodId',
        'defaultPaymentMethodDisplayName',
        'amountRoundingPrecision',
        'unitAmountRoundingPrecision',
        'quantityRoundingPrecision',
        'taxRoundingPrecision',
        'draftInvoiceFileName',
        'postedInvoiceFileName',
        'quoteFileName',
        'taxableGroupId',
        'nonTaxableGroupId',
        'enableSynchronization',
        'enableSyncCoupons',
        'updateVersion',
    ];

    protected $guarded  = [

    ];
}