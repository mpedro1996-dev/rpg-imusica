<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:49
 */

namespace RPGImusica\Entity;


use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    protected $table = 'racas';
    protected $fillable = ['tipo','vida','forca','agilidade','arma_id'];


    public function __construct(array $attributes = [], $arma = null)
    {
        parent::__construct($attributes);
        if($arma instanceof Arma){
            $this->arma_id = $arma->id;
        }
    }

    public function arma(){
        return $this->belongsTo(Arma::class,'arma_id','id');
    }

    public function pegarRaca($tipo = null){

        if($tipo!=null){
            return $this->where('tipo',$tipo)->first();
        }

        return null;

    }


}