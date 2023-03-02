<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( // registrando el repositorio y la interfaz de este en el contenedor de servicios de la aplicación
            'App\Repositories\InvoicesRepositoryInterface',
            'App\Repositories\InvoicesRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
