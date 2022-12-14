<?php

namespace App\Providers;

use App\Repositories\CartRepository;
use App\Traits\CartItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    use CartItems;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Change public path to htdocs
        //$this->app->bind('path.public', function() {
        //   return base_path('htdocs');
        //});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(CartRepository $cartRepository, Request $request)
    {
        //Force app to use https
        //URL::forceScheme('https');

        Schema::defaultStringLength(191);

        View::composer('*', function($view) use($request)
        {
            if (Auth::check())
                $view->with('prefix', $request->prefix ?? strtolower(auth()->user()->role->name) ?? 'client');
            else
                $view->with('prefix', 'client');
        });
    }
}
