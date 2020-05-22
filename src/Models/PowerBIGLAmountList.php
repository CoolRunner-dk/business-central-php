<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIGLAmountList
 * Auto-generated on: 2020-05-22 07:30:30
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