<?php

namespace App\Traits;

use App\Models\PageText;

trait PageTextServices
{
    /*
     * Gets page texts by page id
     */
    public static function getPageTextsByPageId(int $pageId): object
    {
        return PageText::where('page_id', $pageId)->get();
    }

    /*
     * Decodes page texts to readable html code for blade files.
     */
    public static function decodePageTexts(object $pageTexts): object
    {
        foreach ($pageTexts as $pageText) {
            $pageText->html_text = html_entity_decode($pageText->html_text, ENT_QUOTES);
        }

        return $pageTexts;
    }
}
