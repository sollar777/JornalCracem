<?php

namespace App\Providers;

use App\Models\Anuncio;
use App\Models\Imagem;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('user.layout.*', function($view){
            $anuncios = Anuncio::all();

            $view->with('anuncios', $anuncios);
        });
    }
}
