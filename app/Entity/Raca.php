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
    protected $fillable = ['tipo','vida','forca','agilidade','arma_id'];


    public function __construct(array $attributes = [], Arma $arma)
    {
        parent::__construct($attributes);
        $this->arma_id = $arma->id;
    }


}