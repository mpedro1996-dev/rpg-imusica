<?php

namespace RPGImusica\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use RPGImusica\Entity\Arma;
use RPGImusica\Entity\Clava;
use RPGImusica\Entity\Dado;
use RPGImusica\Entity\DOito;
use RPGImusica\Entity\Espada;
use RPGImusica\Entity\Humano;
use RPGImusica\Entity\Orc;
use RPGImusica\Entity\Personagem;
use RPGImusica\Entity\Raca;
use Symfony\Component\VarDumper\VarDumper;

class PersonagemController extends Controller
{
    private $personagem;

    private $humano;

    private $orc;

    public function __construct(Personagem $personagem, Humano $humano, Orc $orc)
    {
        $this->personagem = $personagem;
        $this->humano = $humano;
        $this->orc = $orc;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $personagemHumano = $request->get('humano');
            $personagemOrc = $request->get('orc');


            /** @var Orc $orc */
            $orc = $this->orc->pegarRaca();
            /** @var Humano $humano */
            $humano = $this->humano->pegarRaca();

            $modelHuman = $this->personagem->criarPersonagem($personagemHumano,$humano);
            $modelOrc = $this->personagem->criarPersonagem($personagemOrc,$orc);




            return response()->json(["humano"=>$modelHuman->id,"orc"=>$modelOrc->id],200);
        }catch (\Exception $e){
            return response()->json(['message'=>"Erro ao cadastrar: ".$e->getMessage()],500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personagem = $this->personagem->getPersonagemJson($id);

        return response()->json($personagem,200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
