<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CompanyInformation
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $displayName
 * @property array|string[] $address
 * @property string $phoneNumber
 * @property string $faxNumber
 * @property string $email
 * @property string $website
 * @property string $taxRegistrationNumber
 * @property string $currencyCode
 * @property string $currentFiscalYearStartDate
 * @property string $industry
 * @property string $picture
 * @property-read string $lastModifiedDateTime
 *
 */
class CompanyInformation extends Entity
{
    protected static $schema_type = 'companyInformation';
}