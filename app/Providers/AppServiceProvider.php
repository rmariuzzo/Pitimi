<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Contracts\CongregationService', 'App\Services\CongregationService');
        $this->app->bind('App\Services\Contracts\AdminService', 'App\Services\AdminService');
        $this->app->bind('App\Services\Contracts\DateService', 'App\Services\DateService');
    }
}
