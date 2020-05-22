<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebHelp
 * Auto-generated on: 2020-05-22 07:30:30
 *
 * @property string $section
 * @property int $lineNo
 * @property bool $heading
 * @property string $text
 * @property bool $bold
 * @property bool $italic
 * @property bool $underline
 * @property string $link
 * @property string $linkType
 * @property bool $newWindow
 *
 */
class CsWebHelp extends Entity
{
    protected static $schema_type = 'CS_WebHelp';

    protected $fillable = [
        'section',
        'lineNo',
        'heading',
        'text',
        'bold',
        'italic',
        'underline',
        'link',
        'linkType',
        'newWindow',
    ];

    protected $guarded  = [

    ];
}