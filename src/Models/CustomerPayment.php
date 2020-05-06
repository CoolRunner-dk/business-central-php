<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CustomerPayment
 * Auto-generated on: 2020-05-06 09:08:24
 *
 * @property-read string $id
 * @property string $journalDisplayName
 * @property int $lineNumber
 * @property string $customerId
 * @property string $customerNumber
 * @property string $contactId
 * @property string $postingDate
 * @property string $documentNumber
 * @property string $externalDocumentNumber
 * @property float $amount
 * @property string $appliesToInvoiceId
 * @property string $appliesToInvoiceNumber
 * @property string $description
 * @property string $comment
 * @property array|string[] $dimensions
 * @property-read string $lastModifiedDateTime
 * @property-read \BusinessCentral\Models\Customer $customer
 *
 */
class CustomerPayment extends Entity
{
    protected static $schema_type = 'customerPayment';
}