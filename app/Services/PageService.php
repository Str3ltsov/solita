<?php

namespace App\Services;

use App\Models\Page;
use Error;

class PageService extends ImageService
{
    public final function getPages(): object
    {
        return Page::all();
    }

    public final function getPageByRoute(string $route): object
    {
        $page = Page::where('route', $route)->first();

        !$page && throw new Error('Failed to get page');

        return $page;
    }

    public final function getPageById(int $id): object
    {
        $page = Page::find($id);

        !$page && throw new Error('Failed to get page');

        return $page;
    }

    public final function updatePage(object $page, array $validated, ?string $imagePath): void
    {
        $page->name = $validated['name'];
        $page->route = $validated['route'];
        $page->title = $validated['title'];
        $page->text = $validated['text'];
        $imagePath && $page->image = $imagePath;
        $page->show_experience = $validated['show_experience'];
        $page->experience_years = $validated['experience_years'];
        $page->updated_at = now();
        $page->save();
    }
}
