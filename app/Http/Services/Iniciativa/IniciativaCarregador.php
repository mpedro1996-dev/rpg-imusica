<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 18/03/19
 * Time: 12:41
 */

namespace RPGImusica\Http\Services\Iniciativa;


use RPGImusica\Entity\Personagem;
use Symfony\Component\VarDumper\VarDumper;

class IniciativaCarregador
{
    private $ids = [];
    private $personagens = [];
    /** @var Personagem  */
    private $personagemRepository;

    public function __construct(Personagem $personagem)
    {
        $this->personagemRepository = $personagem;
    }

    public function setPersonagens(){

        foreach ($this->ids as $id){
            $personagem = $this->personagemRepository->find($id);

            array_push($this->personagens,$personagem);
        }

        VarDumper::dump($this->personagens);
        exit;
    }

    public function rolarIniciativa(){
        $this->setPersonagens();
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