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
    protected $bonusAtaque = 1;
    protected $bonusDefesa = 0;
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