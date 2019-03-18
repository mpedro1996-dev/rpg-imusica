<?php

namespace RPGImusica\Http\Controllers;

use Illuminate\Http\Request;
use RPGImusica\Http\Services\Batalha\ResolvedorBatalha;
use Symfony\Component\VarDumper\VarDumper;

class BatalhaController extends Controller
{
    private function pegarResultadoBatalha(array $personagens){
        /** @var ResolvedorBatalha $service */
        $service = app('batalha.batalha_resolvedor');

        $service->setPersonagens($personagens);

        return $service->fazerCalculoDano();

    }
    public function batalhar(Request $request){
        $personagens = $request->get("personagens");

        $dano = $this->pegarResultadoBatalha($personagens);

        return response()->json($dano,200);
    }
}
