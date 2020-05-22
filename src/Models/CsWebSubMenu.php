<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebSubMenu
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $webMenuCode
 * @property string $code
 * @property string $description
 * @property string $approvalCodeFilter
 * @property string $tableIDFilter
 * @property string $documentTypeFilter
 * @property int $sorting
 *
 */
class CsWebSubMenu extends Entity
{
    protected static $schema_type = 'CS_WebSubMenu';

    protected $fillable = [
        'webMenuCode',
        'code',
        'description',
        'approvalCodeFilter',
        'tableIDFilter',
        'documentTypeFilter',
        'sorting',
    ];

    protected $guarded  = [

    ];
}