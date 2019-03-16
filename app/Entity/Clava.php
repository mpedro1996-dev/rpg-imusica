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

    public function __construct(array $attributes = [], Dado $dado)
    {
        parent::__construct($attributes, $dado);
        $this->bonus_ataque = 1;
        $this->bonus_defesa = 0;
    }

}