<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebSetup
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cswebsetup
 *
 * @property string $primaryKey
 * @property string $companyGuid
 * @property string $companyName
 * @property bool $enableWebApproval
 * @property string $lCYCode
 * @property int $showLCYAmounts
 * @property bool $showType
 * @property bool $showPostingAccountName
 * @property bool $showJobNo
 * @property bool $showJobTaskNo
 * @property bool $showProdPostingGroup
 * @property bool $showVATProdGroup
 * @property bool $showDescription2
 * @property bool $showLineDiscPct
 * @property bool $showUOM
 * @property bool $showFAPostingType
 * @property bool $showLocationCode
 * @property bool $showDeferralCode
 * @property int $dimJobFieldPlacement
 * @property string $defSearchFromDate
 * @property string $defSearchToDate
 * @property string $defTimeZoneId
 * @property string $defNumberAndUnitsName
 * @property string $defLanguageName
 * @property bool $webHelpActive
 * @property bool $advApprovalInvoice
 * @property bool $advApprovalCrMemo
 * @property int $maxLineDescLength
 * @property bool $allowForwardAndApprove
 * @property bool $allowForwardWOApproval
 * @property bool $allowForwardAndReturn
 * @property string $dim1Code
 * @property string $dim2Code
 * @property string $dim3Code
 * @property string $dim4Code
 * @property string $dim5Code
 * @property string $dim6Code
 * @property string $dim7Code
 * @property string $dim8Code
 * @property string $dim1Name
 * @property string $dim2Name
 * @property string $dim3Name
 * @property string $dim4Name
 * @property string $dim5Name
 * @property string $dim6Name
 * @property string $dim7Name
 * @property string $dim8Name
 * @property string $lineDim1Code
 * @property string $lineDim2Code
 * @property string $lineDim3Code
 * @property string $lineDim4Code
 * @property string $lineDim5Code
 * @property string $lineDim6Code
 * @property string $lineDim7Code
 * @property string $lineDim8Code
 * @property string $lineDim1Name
 * @property string $lineDim2Name
 * @property string $lineDim3Name
 * @property string $lineDim4Name
 * @property string $lineDim5Name
 * @property string $lineDim6Name
 * @property string $lineDim7Name
 * @property string $lineDim8Name
 * @property bool $cEMEnabled
 * @property bool $cDCEnabled
 *
 */
class CsWebSetup extends Entity
{
    protected static $schema_type = 'CS_WebSetup';

    protected $fillable = [
        'primaryKey',
        'companyGuid',
        'companyName',
        'enableWebApproval',
        'lCYCode',
        'showLCYAmounts',
        'showType',
        'showPostingAccountName',
        'showJobNo',
        'showJobTaskNo',
        'showProdPostingGroup',
        'showVATProdGroup',
        'showDescription2',
        'showLineDiscPct',
        'showUOM',
        'showFAPostingType',
        'showLocationCode',
        'showDeferralCode',
        'dimJobFieldPlacement',
        'defSearchFromDate',
        'defSearchToDate',
        'defTimeZoneId',
        'defNumberAndUnitsName',
        'defLanguageName',
        'webHelpActive',
        'advApprovalInvoice',
        'advApprovalCrMemo',
        'maxLineDescLength',
        'allowForwardAndApprove',
        'allowForwardWOApproval',
        'allowForwardAndReturn',
        'dim1Code',
        'dim2Code',
        'dim3Code',
        'dim4Code',
        'dim5Code',
        'dim6Code',
        'dim7Code',
        'dim8Code',
        'dim1Name',
        'dim2Name',
        'dim3Name',
        'dim4Name',
        'dim5Name',
        'dim6Name',
        'dim7Name',
        'dim8Name',
        'lineDim1Code',
        'lineDim2Code',
        'lineDim3Code',
        'lineDim4Code',
        'lineDim5Code',
        'lineDim6Code',
        'lineDim7Code',
        'lineDim8Code',
        'lineDim1Name',
        'lineDim2Name',
        'lineDim3Name',
        'lineDim4Name',
        'lineDim5Name',
        'lineDim6Name',
        'lineDim7Name',
        'lineDim8Name',
        'cEMEnabled',
        'cDCEnabled',
    ];

    protected $guarded  = [

    ];
}