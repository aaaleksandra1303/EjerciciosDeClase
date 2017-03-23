<?php
namespace Animales;

require_once "animal.php";

 class Gato extends Animal{

    public $tipoGato;
    public $leGustaLeche;

    function __construct($tipoGato,$leGustaLeche,$nombre,$edad,$color,$comidaFavorita=null)
    {
        $this->tipoGato=$tipoGato;
        $this->leGustaLeche=$leGustaLeche;

        parent:: __construct($nombre,$edad,$color,"gato",$comidaFavorita);


    }



 }

/* $gato1= new Gato("persian",true,"Kitka","3","blanco","pescado");


 var_dump($gato1);
*/

 ?>