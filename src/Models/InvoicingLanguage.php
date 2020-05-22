<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingLanguage
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicinglanguage
 *
 * @property int $languageId
 * @property string $languageCode
 * @property string $displayName
 * @property bool $default
 *
 */
class InvoicingLanguage extends Entity
{
    protected static $schema_type = 'nativeInvoicingLanguages';

    protected $fillable = [
        'languageId',
        'languageCode',
        'displayName',
        'default',
    ];

    protected $guarded  = [

    ];
}