<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'personagem'],function (){
    Route::get('/',function (){
        $personagem = new \RPGImusica\Entity\Personagem(new \RPGImusica\Entity\Humano(new \RPGImusica\Entity\Espada(new \RPGImusica\Entity\DSeis())));
        \Symfony\Component\VarDumper\VarDumper::dump($personagem);
        exit;
    });
});

Route::group(['prefix'=>'iniciativa'],function (){
    Route::get('/',function (){
        return "iniciativa";
    });
});

Route::group(['prefix'=>'batalha'],function (){
    Route::get('/',function (){
        return "batalha";
    });
});
