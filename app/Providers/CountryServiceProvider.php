<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {//
        require_once  app_path('\Helpers\Country\Country.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
