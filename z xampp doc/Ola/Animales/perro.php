<?php

namespace Animales;
require_once "animal.php";



    class Perro extends Animal{

        public $tipoPerro;
        public $lesGustaCarne;
        public $character;

        function __construct($tipoPerro,$lesGustaCarne,$character,$nombre,$edad,$color,$comidaFavorita){

            $this->tipoPerro=$tipoPerro;
            $this->lesGustaCarne=$lesGustaCarne;
            $this->character=$character;

            parent::  __construct($nombre,$edad,$color,"perro",$comidaFavorita);
        }






    }

 ?>