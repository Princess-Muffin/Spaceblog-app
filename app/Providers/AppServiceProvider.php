<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
    public function boot()
    {
        Blade::component('Layout.masterLayout', 'master-layout');
        Blade::component('Layout.appLayout', 'app-layout');
    
        Blade::component('components.footer', 'footer');
        Blade::component('components.heading', 'heading');
        Blade::component('components.navigation', 'navigation');
    }
}
