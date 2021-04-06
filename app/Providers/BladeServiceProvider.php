<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('role', function ($role) 
        {
            return "<?php if( Auth::check() && Auth::user()->hasRole($role) ): ?>";
        });
        Blade::directive('endrole', function ($role) 
        {
            return "<?php endif ?>";
        });
    }
}
