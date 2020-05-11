<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Employee
 * Auto-generated on: 2020-05-11 13:51:49
 *
 * @property-read string $id
 * @property string $number
 * @property string $displayName
 * @property string $givenName
 * @property string $middleName
 * @property string $surname
 * @property string $jobTitle
 * @property array|string[] $address
 * @property string $phoneNumber
 * @property string $mobilePhone
 * @property string $email
 * @property string $personalEmail
 * @property string $employmentDate
 * @property string $terminationDate
 * @property string $status
 * @property string $birthDate
 * @property string $statisticsGroupCode
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\Picture[]|\BusinessCentral\EntityCollection $picture
 * @property-read \BusinessCentral\Models\DefaultDimensions[]|\BusinessCentral\EntityCollection $defaultDimensions
 * @property-read \BusinessCentral\Models\TimeRegistrationEntry[]|\BusinessCentral\EntityCollection $timeRegistrationEntries
 * @method \BusinessCentral\Query\Builder picture()
 * @method \BusinessCentral\Query\Builder defaultDimensions()
 * @method \BusinessCentral\Query\Builder timeRegistrationEntries()
 *
 */
class Employee extends Entity
{
    protected static $schema_type = 'employee';

    protected $fillable = [
        'number',
        'displayName',
        'givenName',
        'middleName',
        'surname',
        'jobTitle',
        'address',
        'phoneNumber',
        'mobilePhone',
        'email',
        'personalEmail',
        'employmentDate',
        'terminationDate',
        'status',
        'birthDate',
        'statisticsGroupCode',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}