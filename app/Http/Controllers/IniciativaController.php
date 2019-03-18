<?php

namespace RPGImusica\Http\Controllers;

use Illuminate\Http\Request;
use RPGImusica\Http\Services\Iniciativa\IniciativaCarregador;

class IniciativaController extends Controller
{


    private function rolarIniciativa(array $ids){
        /** @var IniciativaCarregador $service */
        $service = app('iniciativa.iniciativa_carregador');

        $service->setIds($ids);

        $service->rolarIniciativa();

    }

    public function pegarIniciativa(Request $request){
        $ids = $request->get('ids');

        $this->rolarIniciativa($ids);


    }
}
