<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingLanguage
 * Auto-generated on: 2020-05-22 07:30:30
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