<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/03/19
 * Time: 12:41
 */

namespace RPGImusica\Http\Services\Iniciativa;


use RPGImusica\Entity\DVinte;
use RPGImusica\Entity\Personagem;
use Symfony\Component\VarDumper\VarDumper;

class IniciativaCarregador
{
    private $ids = [];
    private $personagens = [];
    private $response = [];
    private $dVinte;
    /** @var Personagem  */
    private $personagemRepository;

    public function __construct(Personagem $personagem, DVinte $dVinte)
    {
        $this->personagemRepository = $personagem;
        $this->dVinte = $dVinte;
    }

    public function setPersonagens(){

        foreach ($this->ids as $id){
            $personagem = $this->personagemRepository->find($id);

            array_push($this->personagens,$personagem);
        }
    }

    public function sortearIniciativa(){
        foreach ($this->personagens as $p){
            $valorRolado = $this->dVinte->rolarDado();
            $obj = [
                "id"=>$p->id,
                "valor-rolado"=>$valorRolado,
                "iniciativa"=>$valorRolado+$p->raca->agilidade
            ];

            array_push($this->response,$obj);
        }

    }

    public function rolarIniciativa(){
        $this->setPersonagens();
        $this->sortearIniciativa();
        return $this->response;
    }


    /**
     * @return array
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     * @param array $ids
     * @return IniciativaCarregador
     */
    public function setIds(array $ids): IniciativaCarregador
    {
        $this->ids = $ids;
        return $this;
    }



}