<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:48
 */

namespace RPGImusica\Entity;


class Humano extends Raca
{

    public function __construct(array $attributes = [], $arma = null)
    {
        parent::__construct($attributes, $arma);
        $this->vida = 12;
        $this->forca = 1;
        $this->agilidade = 2;
        $this->tipo = 'humano';

    }


}