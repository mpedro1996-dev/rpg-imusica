<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:52
 */

namespace RPGImusica\Entity;


use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    protected $table ='armas';
    protected $fillable = ['nome','bonus_ataque','bonus_defesa','dado_id'];

    public function __construct(array $attributes = [],$dado = null)
    {
        parent::__construct($attributes);

        if($dado instanceof Dado) {
            $this->dado_id = $dado->id;
        }
    }

    public function pegarArma($nome = null){
        if($nome != null){
            $this->where('nome',$nome)->first();
        }
        return null;
    }

}