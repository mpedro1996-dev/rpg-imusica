<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/03/19
 * Time: 18:53
 */

namespace RPGImusica\Http\Services\Batalha;


use RPGImusica\Entity\DVinte;
use RPGImusica\Entity\Personagem;
use Symfony\Component\VarDumper\VarDumper;

class ResolvedorBatalha implements InterfaceBatalha
{
    private $personagemRepository;

    /** @var Personagem */
    private $personagemAtacante;
    /** @var Personagem */
    private $personagemDefensor;

    private $resultadoAtaque;
    private $resultadoDefesa;

    public function __construct(Personagem $personagem)
    {
        $this->personagemRepository = $personagem;
    }

    public function setPersonagens(array $personagens){
        foreach ($personagens as $p){
            if($p['iniciativa']==1){
                $this->personagemAtacante = $this->personagemRepository->find($p['id']);
            }else{
                $this->personagemDefensor = $this->personagemRepository->find($p['id']);

            }
        }

    }
    public function atacar(DVinte $dado)
    {
        // TODO: Implement atacar() method.
    }
    public function defender(DVinte $dado)
    {
        // TODO: Implement defender() method.
    }

    public function fazerCalculoDano(){
        $resultado = $this->personagemAtacante->calcularDanoCausado();

        return $resultado;
    }




}