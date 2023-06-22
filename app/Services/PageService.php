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

        !$page && throw new Error('messages.errorGetPage');

        return $page;
    }

    public final function getPageById(int $id): object
    {
        $page = Page::find($id);

        !$page && throw new Error('messages.errorGetPage');

        return $page;
    }

    public function createPage(array $validated, ?string $imagePath): void
    {
        Page::create([
            'lt' => [
                'name' => $validated['name_lt'],
                'title' => $validated['title_lt'],
                'text' => $validated['text_lt'] ?? NULL,
            ],
            'en' => [
                'name' => $validated['name_en'],
                'title' => $validated['title_en'],
                'text' => $validated['text_en'] ?? NULL,
            ],
            'route' => $validated['route'],
            'image' => $imagePath ? $imagePath : NULL,
            'show_experience' => $validated['show_experience'],
            'experience_years' => $validated['experience_years'] ?? 0,
            'created_at' => now()
        ]);
    }

    public final function updatePage(object $page, array $validated, ?string $imagePath): void
    {
        foreach (config('translatable.locales') as $locale) {
            $page->translate($locale)->name = $validated["name_$locale"];
            $page->translate($locale)->title = $validated["title_$locale"];
            $page->translate($locale)->text = $validated["text_$locale"] ?? NULL;
        }
        $page->route = $validated['route'];
        $imagePath && $page->image = $imagePath;
        $page->show_experience = $validated['show_experience'];
        $page->experience_years = $validated['experience_years'];
        $page->updated_at = now();
        $page->save();
    }
}
