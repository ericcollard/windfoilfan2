<?php

namespace App\Providers;

use App\Models\Category;
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

        Paginator::useBootstrap();

        View::composer('layouts.shared.left-sidebar', function ($view) {

            $postcategories = Cache::rememberForever('postcategories', function() {
                return PostCategory::all();
            });
            $devicecategories = Cache::rememberForever('devicecategories', function() {
                return Category::all();
            });
            $view->with('postcategories', $postcategories)
                ->with('devicecategories', $devicecategories);
        });
    }
}
