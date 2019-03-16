<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:49
 */

namespace RPGImusica\Entity;


class Raca
{
    protected $vida;
    protected $forca;
    protected $agilidade;

    /**
     * @return mixed
     */
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * @return mixed
     */
    public function getForca()
    {
        return $this->forca;
    }

    /**
     * @return mixed
     */
    public function getAgilidade()
    {
        return $this->agilidade;
    }


}