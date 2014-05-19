<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 5/19/14
 * Time: 12:15 PM
 */

namespace Plugin\TranslationsExample;


class SiteController
{
    public function justTextPage()
    {
        return __('Simple string', 'TranslationsExample');
    }
}
