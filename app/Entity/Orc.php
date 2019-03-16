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
    protected $forca = 2;
    protected $agilidade = 0;
    private $arma;

    public function __construct( Arma $arma)
    {
        $this->arma = $arma;
    }



}