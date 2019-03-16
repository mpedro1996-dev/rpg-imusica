<?php

use Illuminate\Database\Seeder;

class DadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \RPGImusica\Entity\DVinte::create([]);
        \RPGImusica\Entity\DOito::create([]);
        \RPGImusica\Entity\DSeis::create([]);
    }
}
