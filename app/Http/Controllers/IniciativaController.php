<?php

namespace RPGImusica\Http\Controllers;

use Illuminate\Http\Request;
use RPGImusica\Http\Requests\MinimoDoisRequest;
use RPGImusica\Http\Services\Iniciativa\IniciativaCarregador;

class IniciativaController extends Controller
{


    private function rolarIniciativa(array $ids){
        /** @var IniciativaCarregador $service */
        $service = app('iniciativa.iniciativa_carregador');

        $service->setIds($ids);

        return $service->rolarIniciativa();

    }

    public function pegarIniciativa(MinimoDoisRequest $request){
        $ids = $request->get('ids');

        $response = $this->rolarIniciativa($ids);

        return response()->json($response,200);

    }
}
