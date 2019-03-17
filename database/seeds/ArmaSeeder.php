<?php

use Illuminate\Database\Seeder;

class ArmaSeeder extends Seeder
{
    /** @var \RPGImusica\Entity\DSeis */
    private $dSeis;
    /** @var \RPGImusica\Entity\DOito */
    private $dOito;
    public function __construct()
    {
        $this->dSeis = new \RPGImusica\Entity\DSeis;
        $this->dOito= new \RPGImusica\Entity\DOito();

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dSeis = $this->dSeis->pegarDado();
        $dOito = $this->dOito->pegarDado();
        $espada = new \RPGImusica\Entity\Espada([],$dSeis);
        $clava = new \RPGImusica\Entity\Clava([],$dOito);
        $espada->save();
        $clava->save();
    }
}
