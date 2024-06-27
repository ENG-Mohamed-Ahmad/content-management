<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CalculateProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CalculatorService::class, function($app){
            return new CalculatorService;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
