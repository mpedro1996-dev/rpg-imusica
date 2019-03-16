<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:52
 */

namespace RPGImusica\Entity;


class Espada extends Arma
{
    protected $bonusAtaque = 2;
    protected $bonusDefesa = 1;
    protected $dado;

    public function __construct( Dado $dado)
    {
        $this->dado = $dado;
    }

    /**
     * @return int
     */
    public function getBonusAtaque(): int
    {
        return $this->bonusAtaque;
    }

    /**
     * @return int
     */
    public function getBonusDefesa(): int
    {
        return $this->bonusDefesa;
    }

    /**
     * @return Dado
     */
    public function getDado(): Dado
    {
        return $this->dado;
    }





}