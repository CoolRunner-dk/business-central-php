<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsVendorInfoComments
 *
 * @property string $tableName
 * @property string $no
 * @property int $lineNo
 * @property string $date
 * @property string $code
 * @property string $comment
 *
 */
class CsVendorInfoComments extends Entity
{
    protected static $schema_type = 'CS_VendorInfoComments';

    protected $fillable = [
        'tableName',
        'no',
        'lineNo',
        'date',
        'code',
        'comment',
    ];

    protected $guarded  = [

    ];
}