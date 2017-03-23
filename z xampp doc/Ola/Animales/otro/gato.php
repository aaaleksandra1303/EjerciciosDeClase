<?php
namespace Otro;

require_once "animal.php";

class Gato extends \Animales\Animal{

    public $tipoGato;
    public $leGustaLeche;

    function __construct($tipoGato,$leGustaLeche,$nombre,$edad,$color,$comidaFavorita=null)
    {
        $this->tipoGato=$tipoGato;
        $this->leGustaLeche=$leGustaLeche;

        parent:: __construct($nombre,$edad,$color,"gato",$comidaFavorita);


    }



}



 ?>