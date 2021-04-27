<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Traits;


use Illuminate\Support\Str;

trait HasAnnotations
{
    protected $annotations = [];

    public function fillAnnotations(array $object)
    {
        if (isset($object['Annotation']) && !isset($object['Annotation'][0])) {
            $object['Annotation'] = [$object['Annotation']];
        } elseif (!isset($object['Annotation'])) {
            $object['Annotation'] = [];
        }

        $annotations = $object['Annotation'];

        foreach ($annotations as $annotation) {
            $attributes = $annotation['@attributes'];
            switch ($type = preg_replace('/^NAV\./', '', $attributes['Term'])) {
                case 'LabelId':
                    $this->annotations[$type] = $attributes['String'];
                    break;
                case 'AllowEditOnCreate':
                case 'AllowEdit':
                case 'IsReadOnly':
                    $this->annotations[$type] = filter_var($attributes['Bool'], FILTER_VALIDATE_BOOLEAN);
                    break;
                case 'NavType':
                    $this->annotations[$type] = $annotation['EnumMember'];
                    break;
                case 'OData.Community.Keys.V1.AlternateKeys':
                    // Ignored
                    break;
                case 'Org.OData.Capabilities.V1.ChangeTracking':
                case 'Org.OData.Capabilities.V1.DeleteRestrictions':
                case 'Org.OData.Capabilities.V1.InsertRestrictions':
                case 'Org.OData.Capabilities.V1.UpdateRestrictions':
                    $term = collect(explode('.', $type))->last();

                    $this->annotations[$term] = filter_var($annotation['Record']['PropertyValue']['@attributes']['Bool'], FILTER_VALIDATE_BOOLEAN);
                    break;
                default:
                    $this->annotations[$type] = $attributes;
            }
        }

        return $this->annotations;
    }
}