<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        //Builder::defaultStringLength(191);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
