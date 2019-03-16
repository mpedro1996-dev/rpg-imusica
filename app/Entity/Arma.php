<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 16/03/19
 * Time: 00:52
 */

namespace RPGImusica\Entity;


use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    protected $table ='armas';
    protected $fillable = ['nome','bonus_ataque','bonus_defesa','dado_id'];

    public function __construct(array $attributes = [],Dado $dado)
    {
        parent::__construct($attributes);
        $this->dado_id = $dado->id;
    }

}