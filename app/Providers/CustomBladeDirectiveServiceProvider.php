<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CustomBladeDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('ifNavbarLinkIsActive', function ($navbarRoute) {
            return "<?php if ($navbarRoute === " . '$currentRoute' . ") echo 'active' ?>";
        });
    }
}
