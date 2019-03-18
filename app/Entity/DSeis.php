<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:46
 */

namespace RPGImusica\Entity;


class DSeis extends Dado
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->nome = "D6";
        $this->valor = 6;
    }

    public function pegarDado($nome = null)
    {
        return parent::pegarDado('D6');
    }

    public function rolarDado()
    {
        return parent::rolarDado();
    }

}