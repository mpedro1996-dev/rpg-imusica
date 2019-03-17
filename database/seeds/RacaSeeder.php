<?php

use Illuminate\Database\Seeder;

class RacaSeeder extends Seeder
{
    private $espada;

    private $clava;

    public function __construct()
    {
        $this->espada = new \RPGImusica\Entity\Espada();
        $this->clava = new \RPGImusica\Entity\Clava();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $espada = $this->espada->pegarArma();
        $clava = $this->clava->pegarArma();

        $orc =  new \RPGImusica\Entity\Orc([],$clava);
        $humano = new \RPGImusica\Entity\Humano([],$espada);

        $orc->save();
        $humano->save();



    }
}
