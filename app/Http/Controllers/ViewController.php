<?php

namespace RPGImusica\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class ViewController extends Controller
{
    public function criarPersonagens(){
        return view('criar_personagem');
    }

    public function batalha($idHumano,$idOrc){
        return view('batalha')->with(['idHumano'=>$idHumano,'idOrc'=>$idOrc]);
    }
}
