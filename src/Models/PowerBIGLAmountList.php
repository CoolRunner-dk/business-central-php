<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIGLAmountList
 *
 * @property string $gLAccountNo
 * @property string $name
 * @property string $accountType
 * @property string $debitCredit
 * @property string $postingDate
 * @property float $amount
 * @property int $entryNo
 *
 */
class PowerBIGLAmountList extends Entity
{
    protected static $schema_type = 'Power_BI_GL_Amount_List';

    protected $fillable = [
        'gLAccountNo',
        'name',
        'accountType',
        'debitCredit',
        'postingDate',
        'amount',
        'entryNo',
    ];

    protected $guarded  = [

    ];
}