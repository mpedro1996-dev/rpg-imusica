<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:48
 */

namespace RPGImusica\Entity;


class Orc extends Raca
{
    public function __construct(array $attributes = [], Arma $arma)
    {
        parent::__construct($attributes, $arma);
        $this->vida = 20;
        $this->forca = 2;
        $this->agilidade = 0;
        $this->tipo = 'orc';
    }


}