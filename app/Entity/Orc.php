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
    protected $vida = 20;
    private $arma;

    public function __construct( Arma $arma)
    {
        $this->arma = $arma;
    }



}