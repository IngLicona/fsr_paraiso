<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        // Force HTTPS for Cloudflared tunnels and proxies
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP']) || 
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ||
            $this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
