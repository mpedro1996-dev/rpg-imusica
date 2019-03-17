<?php

use Illuminate\Database\Seeder;

class ArmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dSeis = \RPGImusica\Entity\Dado::where('nome','D6')->first();
        $dOito = \RPGImusica\Entity\Dado::where('nome','D8')->first();
        $espada = new \RPGImusica\Entity\Espada([],$dSeis);
        $clava = new \RPGImusica\Entity\Clava([],$dOito);
        $espada->save();
        $clava->save();
    }
}
