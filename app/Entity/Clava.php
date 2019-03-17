<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:53
 */

namespace RPGImusica\Entity;


class Clava extends Arma
{

    public function __construct(array $attributes = [], $dado = null)
    {
        parent::__construct($attributes, $dado);
        $this->nome = 'Clava';
        $this->bonus_ataque = 1;
        $this->bonus_defesa = 0;
    }

    public function pegarArma()
    {
        return $this->where('nome','Clava')->first();
    }

}