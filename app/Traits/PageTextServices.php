<?php

namespace App\Traits;

use App\Models\PageText;

trait PageTextServices
{
    /*
     * Gets page texts by page id.
     */
    public static function getPageTextByPageId(int $pageId): object
    {
        return PageText::where('page_id', $pageId)->first();
    }

    /*
     * Decodes page texts to readable html code for blade files.
     */
    public static function decodePageText(object $pageText): object
    {
        $pageText->html_text = html_entity_decode($pageText->html_text, ENT_QUOTES);

        return $pageText;
    }

    /*
     * Gets all pages.
     */
    public static function getPageTexts(): object
    {
        return PageText::all();
    }

    /*
     * Gets specific page by id.
     */
    public static function getPageTextById(int $id): object
    {
        $page = PageText::find($id);

        if (empty($page)) {
            throw new \Error(__('Puslapis nerastas'));
        }

        return $page;
    }
}
