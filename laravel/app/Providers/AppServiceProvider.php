<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        // En producción todas las URLs generadas (rutas, sitemap, canonical) van con https.
        if ($this->app->isProduction()) {
            URL::forceScheme('https');
        }
    }
}
