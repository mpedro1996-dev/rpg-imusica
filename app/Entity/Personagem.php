<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:48
 */

namespace RPGImusica\Entity;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class Personagem extends Model
{
    protected $table = "personagens";
    protected $fillable = ['nome','raca_id'];

    public function __construct(array $attributes = [], $raca = null)
    {
        parent::__construct($attributes);
        if($raca instanceof Raca){
            $this->raca_id = $raca->id;
        }


    }

    public function raca(){
        return $this->belongsTo(Raca::class,'raca_id','id');
    }



    public function criarPersonagem(array $obj = [], Raca $raca){
        $personagem = new Personagem($obj,$raca);
        DB::transaction(function () use ($personagem){
            $personagem->save();
        });
        return $personagem;
    }

    public function getPersonagemJson($id){
        return $this->with(['raca','raca.arma','raca.arma.dado'])->where('id',$id)->first();
    }

    public function calcularFatorAtaque(Dado $dVinte){
        $resultadoDado = $dVinte->rolarDado();
        return [
            "resultado-dado"=>$resultadoDado,
            "fator"=>$resultadoDado+$this->raca->arma->bonus_ataque+$this->raca->agilidade
        ];
    }

    public function calcularFatorDefesa(Dado $dVinte){
        $resultadoDado = $dVinte->rolarDado();
        return [
            "resultado-dado"=>$resultadoDado,
            "fator"=>$resultadoDado+$this->raca->arma->bonus_defesa+$this->raca->agilidade
        ];
    }

    public function calcularDanoCausado(){
        $resultadoDado = $this->raca->arma->dado->rolarDado();
        return [
            "resultado-dado"=>$resultadoDado,
            "dano"=>$resultadoDado+$this->raca->forca
        ];
    }



}