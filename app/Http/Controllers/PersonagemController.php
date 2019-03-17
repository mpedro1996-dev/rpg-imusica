<?php

namespace RPGImusica\Http\Controllers;

use Illuminate\Http\Request;
use RPGImusica\Entity\Arma;
use RPGImusica\Entity\Clava;
use RPGImusica\Entity\Dado;
use RPGImusica\Entity\DOito;
use RPGImusica\Entity\Espada;
use RPGImusica\Entity\Humano;
use RPGImusica\Entity\Personagem;
use RPGImusica\Entity\Raca;
use Symfony\Component\VarDumper\VarDumper;

class PersonagemController extends Controller
{
    private $arma;
    public function __construct()
    {
        $this->arma = new Clava([], new DOito());

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
        dd($this->arma->pegarArma());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
