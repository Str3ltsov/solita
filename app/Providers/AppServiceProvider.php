<?php

namespace App\Providers;

use App\Enums\PageEnum;
use App\Models\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /*
     * Gets an array of page names.
     */
    private function getPageNames(): array
    {
        $pageNames = [];

        $pages = Page::select('name')->get();

        foreach ($pages as $key => $page) {
            $pageNames[$key + 1] = $page->name;
        }

        return $pageNames;
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!str_contains(url()->current(), 'admin')) {
            View::composer('*', fn($view) => $view->with('pages', $this->getPageNames()));
        }
    }
}
