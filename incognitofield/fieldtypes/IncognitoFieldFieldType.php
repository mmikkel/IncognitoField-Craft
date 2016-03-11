<?php
/**
 * Incognito Field plugin for Craft CMS
 *
 * IncognitoField FieldType
 *
 * --snip--
 * Whenever someone creates a new field in Craft, they must specify what type of field it is. The system comes with
 * a handful of field types baked in, and we’ve made it extremely easy for plugins to add new ones.
 *
 * https://craftcms.com/docs/plugins/field-types
 * --snip--
 *
 * @author    Mats Mikkel Rummelhoff
 * @copyright Copyright (c) 2016 Mats Mikkel Rummelhoff
 * @link      http://mmikkel.no
 * @package   IncognitoField
 * @since     1.0.0
 */

namespace Craft;

class IncognitoFieldFieldType extends PlainTextFieldType
{
    /**
     * Returns the name of the fieldtype.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Incognito Field');
    }

    /**
     * @inheritDoc IFieldType::getInputHtml()
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return string
     */
    public function getInputHtml($name, $value)
    {
        $inputId = craft()->templates->formatInputId($name);
        $namespaceInputId = craft()->templates->namespaceInputId($inputId);
        return craft()->templates->render('incognitofield/input', array(
            'id'        => $namespaceInputId,
            'name'      => $name,
            'value'     => $value,
            'settings'  => $this->getSettings(),
        ));
    }

    /**
     * @inheritDoc ISavableComponentType::getSettingsHtml()
     *
     * @return string|null
     */
    public function getSettingsHtml()
    {
        return craft()->templates->render('incognitofield/settings', array(
            'settings' => $this->getSettings()
        ));
    }

    // Protected Methods
    // =========================================================================
    /**
     * @inheritDoc BaseSavableComponentType::defineSettings()
     *
     * @return array
     */
    protected function defineSettings()
    {
        return array_merge(parent::defineSettings(), array(
            'mode' => array(AttributeType::String, 'default' => 'plain'),
        ));
    }

}