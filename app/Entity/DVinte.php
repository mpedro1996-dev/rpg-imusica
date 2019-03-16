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
        $this->valor = 20;
    }

}