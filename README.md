# Incognito Field v. 1.0.1 for Craft CMS ![Craft 2.5](https://img.shields.io/badge/craft-2.5-red.svg?style=flat-square)

**PlainText drop-in replacement, with the ability to be set as `disabled`, `hidden` or `readonly`**

Looking for the Craft 3 version? [You're in luck, friend](https://github.com/mmikkel/IncognitoField-Craft3)

## What?

Incognito Field adds a custom FieldType to Craft CMS, called _Incognito_. Incognito fields work exactly like regular PlainText fields, except that they can be configured to be disabled, readonly or hidden for element editor forms.

An example use case for Incognito fields is whenever you need a field that shouldn't be editable via the CP – e.g. if you want to save some data from a feed or external API on your element model.

Incognito Field works both standalone and inside Matrix blocks.

## Installation

* Download and unzip
* Move the `/incognitofield` folder to your `/craft/plugins` folder
* Install from the Control Panel (`/admin/settings/plugins`)

## Usage

Incognito Field works exactly like the vanilla PlainText field, but has an additional setting – _mode_. Set to "disabled" for a disabled `text` input or `textarea`, "readonly" if you want a more legible readonly field where you can still select the text, or "hidden" to completely hide the field.

Please see the official docs for the [PlainText FieldType](https://craftcms.com/docs/plain-text-fields) for more information.

## Disclaimer, bugs, feature request, support etc.

This plugin is provided free of charge and you can do whatever you want with it. Incognito Field is unlikely to mess up your stuff, but just to be clear: the author is not responsible for data loss or any other problems resulting from the use of this plugin.

Please report any bugs, feature requests or other issues [here](https://github.com/mmikkel/IncognitoField-Craft/issues). Note that this is a hobby project and no promises are made regarding response time, feature implementations or bug fixes.

**Pull requests are extremely welcome**

### Changelog

#### 1.0.1 (05.13.2016)

* Added readonly option

#### 1.0.0 (03.11.2016)

* Initial public release
