<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ViewController@criarPersonagens')->name("criar_personagem");
Route::get('/batalha/{idHumano}/{idOrc}', 'ViewController@batalha')->name("iniciar_batalha");
