# Translations example

Form, file upload and custom validator example for ImpressPages.

## Features

Illustrates how to organize translations in your plugin.

## Install

1. Upload `TranslationsExample` directory to your website's `Plugin` directory.
2. Login to the administration area.
3. Go to `Plugins` panel, locate `Translations example` plugin and click `activate` button.

## Usage

1. Navigate your browser to http://www.example.com/?sa=TranslationsExample.justTextPage
2. Browser displays text `Translated simple string`. This means that the text `Simple string` from site controller is overridden by the text provided in translations/TranslationsExample-en.json file.
3. Add Spanish language using administration panel, by clicking `Menu`, `Languages` menu and clicking `Add` button.
4. Switch to Spanish language by clicking ES on a language bar.
5. Navigate to http://www.example.com/?sa=TranslationsExample.justTextPage
6. Browser displays Spanish translation of `Translated simple string`.
