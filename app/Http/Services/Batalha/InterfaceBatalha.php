<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/03/19
 * Time: 18:40
 */

namespace RPGImusica\Http\Services\Batalha;

use RPGImusica\Entity\DVinte;

interface InterfaceBatalha
{
    public function atacar();
    public function defender();

}