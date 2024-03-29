<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use ConsoleTVs\Charts\Registrar as Charts;

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

    /**
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    */
    
    /**
    public function boot(Charts $charts)
    {
        $charts->register([
            \App\Charts\SampleChart::class,
            \App\Charts\Samplechart2::class
        ]);
    }
    */
    
}
