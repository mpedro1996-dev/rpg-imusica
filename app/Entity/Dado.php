<?php
namespace RPGImusica\Entity;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    protected $table = "dados";
    protected $fillable = ['nome','valor'];

    public function pegarDado($nome = null){

        if($nome!=null){
            return $this->where('nome',$nome)->first();
        }
        return null;
    }

    public function rolarDado(){
        return rand(1,$this->valor);
    }

}