<?php

namespace App\Providers;

use App\Models\PostCategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();

        View::composer('*', function ($view) {

            $categories = Cache::rememberForever('postcategories', function() {
                return PostCategory::all();
            });
            $view->with('postcategories', $categories);
        });
    }
}
