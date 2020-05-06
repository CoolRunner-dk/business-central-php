<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CustomerPaymentJournal
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property-read string $lastModifiedDateTime
 * @property string $balancingAccountId
 * @property string $balancingAccountNumber
 * @property-read \BusinessCentral\Models\CustomerPayment[]|\BusinessCentral\EntityCollection $customerPayments
 * @property-read \BusinessCentral\Models\Account $account
 *
 */
class CustomerPaymentJournal extends Entity
{
    protected static $schema_type = 'customerPaymentJournal';
}