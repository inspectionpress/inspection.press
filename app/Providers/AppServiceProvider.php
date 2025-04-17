<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

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
    public function boot(): void
    {
        // Force HTTPS when not in local environment
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        // Fix Specified Key Too Long Error
        Schema::defaultStringLength(191);
    }
}
