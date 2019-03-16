<?php
namespace RPGImusica\Entity;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    protected $table = "dados";
    protected $fillable = ['nome','valor'];


}