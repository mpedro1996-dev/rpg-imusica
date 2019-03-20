<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/03/19
 * Time: 18:53
 */

namespace RPGImusica\Http\Services\Batalha;


use RPGImusica\Entity\Dado;
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

    private $dado;


    private $resultadoAtaque;
    private $resultadoDefesa;

    public function __construct(Personagem $personagem, Dado $dado)
    {
        $this->personagemRepository = $personagem;
        $this->dado = $dado;
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
    public function atacar()
    {
        $this->resultadoAtaque = $this->personagemAtacante->calcularFatorAtaque($this->dado);
    }
    public function defender()
    {
        $this->resultadoDefesa = $this->personagemDefensor->calcularFatorDefesa($this->dado);
    }

    public function fazerCalculoDano(){
        $this->atacar();
        $this->defender();

        $response = [
            "resultado-ataque"=>$this->resultadoAtaque,
            "resultado-defesa"=>$this->resultadoDefesa,
        ];

        if($this->resultadoAtaque['fator'] >  $this->resultadoDefesa['fator']) {
            $response['dano'] = $this->personagemAtacante->calcularDanoCausado();

        }else{
            $response['dano'] = [
                "resultado-dado"=>0,
                "dano"=>0
            ];

        }
        return $response;
    }




}