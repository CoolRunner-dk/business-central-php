<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsVendorInfo
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $no
 * @property string $name
 * @property string $name2
 * @property string $address
 * @property string $address2
 * @property string $postCodeCity
 * @property string $phoneNo
 * @property string $countryRegion
 * @property bool $comment
 * @property string $blocked
 * @property float $balanceLCY
 * @property float $balanceDueLCY
 * @property string $vATRegistrationNo
 * @property string $county
 * @property string $eMail
 * @property string $homePage
 * @property string $globalDimension1Filter
 * @property string $globalDimension2Filter
 * @property string $currencyFilter
 * @property string $dateFilter
 * @property-read \BusinessCentral\Models\CsVendorInfoComments[]|\BusinessCentral\EntityCollection $csVendorInfoComments
 * @property-read \BusinessCentral\Models\CsVendorInfoContacts[]|\BusinessCentral\EntityCollection $csVendorInfoContacts
 * @property-read \BusinessCentral\Models\CsVendorInfoDocuments[]|\BusinessCentral\EntityCollection $csVendorInfoDocuments
 * @method \BusinessCentral\Query\Builder csVendorInfoComments()
 * @method \BusinessCentral\Query\Builder csVendorInfoContacts()
 * @method \BusinessCentral\Query\Builder csVendorInfoDocuments()
 *
 */
class CsVendorInfo extends Entity
{
    protected static $schema_type = 'CS_VendorInfo';

    protected $fillable = [
        'no',
        'name',
        'name2',
        'address',
        'address2',
        'postCodeCity',
        'phoneNo',
        'countryRegion',
        'comment',
        'blocked',
        'balanceLCY',
        'balanceDueLCY',
        'vATRegistrationNo',
        'county',
        'eMail',
        'homePage',
        'globalDimension1Filter',
        'globalDimension2Filter',
        'currencyFilter',
        'dateFilter',
    ];

    protected $guarded  = [

    ];
}