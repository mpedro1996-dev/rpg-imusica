<?php

namespace RPGImusica\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use RPGImusica\Entity\DVinte;
use RPGImusica\Entity\Personagem;
use RPGImusica\Http\Services\Batalha\ResolvedorBatalha;
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
        /*============================================ BATALHA ============================================*/
        $this->app->bind('batalha.batalha_resolvedor',function (){
            return new ResolvedorBatalha(new Personagem(), new DVinte());
        });
        /*=================================================================================================*/

        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }





    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        if(env('REDIRECT_HTTPS')) {
            $url->formatScheme('https');
        }
    }
}
