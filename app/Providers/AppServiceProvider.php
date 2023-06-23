<?php

namespace App\Providers;

use App\Services\ContactService;
use App\Services\PageService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
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

    /**
     * Bootstrap any application services.
     */
    public function boot(PageService $pService, ContactService $cService): void
    {
        // URL::forceScheme('https');

        if (!str_contains(url()->current(), 'admin')) {
            View::composer('*', function ($view) use ($pService, $cService) {
                $view->with([
                    'pages' => $pService->getPages(),
                    'contacts' => $cService->getContacts()
                ]);
            });
        }
    }
}
