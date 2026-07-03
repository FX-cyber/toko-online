<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // ← TAMBAHKAN INI!

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
        Vite::prefetch(concurrency: 3);

        // ==========================================
        // TAMBAHKAN INI UNTUK FORCE HTTPS!
        // ==========================================
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}