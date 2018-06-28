<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; // esta linea se inserto para hacer uso de ella en boot()
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
        //se agrega esta linea para evitar el error al ejecuttar la instruccion 
        //php artisan migrate (problema con los emoticones en la bd)
        Schema::defaultStringLength(191);
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
