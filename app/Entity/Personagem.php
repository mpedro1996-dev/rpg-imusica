<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:48
 */

namespace RPGImusica\Entity;


use Illuminate\Database\Eloquent\Model;

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


}