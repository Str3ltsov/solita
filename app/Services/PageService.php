<?php

namespace App\Services;

use App\Models\Page;
use Error;

class PageService
{
    public final function getPages(): object
    {
        return Page::all();
    }

    public final function getPageByRoute(string $route): object
    {
        $page = Page::where('route', $route)->get();

        !$page && throw new Error('Failed to get page');
        
        return $page;
    }
}