<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD
=======

>>>>>>> master
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
<<<<<<< HEAD
         Schema::defaultStringLength(191);
=======
        Schema::defaultStringLength(191);
>>>>>>> master
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
