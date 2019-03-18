<?php

namespace RPGImusica\Providers;

use Illuminate\Support\ServiceProvider;
use RPGImusica\Entity\DVinte;
use RPGImusica\Entity\Personagem;
use RPGImusica\Http\Services\Iniciativa\IniciativaCarregador;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*=========================================== INICIATIVA ==========================================*/
        $this->app->bind('iniciativa.iniciativa_carregador',function (){
           return new IniciativaCarregador(new Personagem(),new DVinte());
        });
        /*=================================================================================================*/



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
