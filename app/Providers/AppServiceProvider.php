<?php

namespace App\Providers;

use Cookie;
use App\Model\Heading;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        $headings = Heading::orderBy('id', 'ASC')->get();

        // Share with all views
        View::share('headings', $headings);
    }
}
