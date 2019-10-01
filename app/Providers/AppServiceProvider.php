<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;


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
        // 1071 error code
        Schema::defaultStringLength(191);

        // custom direction
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->user_role == 1;
        });
        
        
        //  custom blade dirction for agent
        Blade::if('agent', function () {
            return auth()->check() && auth()->user()->user_role == 2;
        });
        //  custom blade dirction for user
        Blade::if('user', function () {
            return auth()->check() && auth()->user()->user_role == 3;
        });
    }
}
