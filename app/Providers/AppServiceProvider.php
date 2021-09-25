<?php

namespace App\Providers;

use App\Models\Good;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::share('article', Article::all()->count());
        View::share('category', Category::all()->count());
        View::share('goods', Good::all()->count());
        View::share('categories', Category::all());
    }
}
