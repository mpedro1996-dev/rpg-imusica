<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:52
 */

namespace RPGImusica\Entity;


class Espada extends Arma{

    public function __construct(array $attributes = [], Dado $dado)
    {
        parent::__construct($attributes, $dado);
        $this->nome = "Espada";
        $this->bonus_ataque = 2;
        $this->bonus_defesa = 1;
    }





}