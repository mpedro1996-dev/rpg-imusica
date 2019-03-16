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
    protected $vida = 12;
    private $arma;

    public function __construct( Arma $arma)
    {
        $this->arma = $arma;
    }

}