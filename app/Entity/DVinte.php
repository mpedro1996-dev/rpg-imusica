<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:47
 */

namespace RPGImusica\Entity;


class DVinte extends Dado
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->nome = "D20";
        $this->valor = 20;
    }

    public function pegarDado($nome = null)
    {
        return $this->where('nome','D20')->first();
    }

}