<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:48
 */

namespace RPGImusica\Entity;


class Personagem
{
    private $nome;

    private $raca;

    public function __construct(Raca $raca)
    {
        $this->raca = $raca;

    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Personagem
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }





}