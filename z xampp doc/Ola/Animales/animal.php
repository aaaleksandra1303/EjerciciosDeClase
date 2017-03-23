<?php

namespace Animales;
    class Animal{

        public $nombre;
        public $edad;
        public $color;
        public $tipo;
        public $comidaFavorita;


        public function __construct($nombre,$edad,$color,$tipo,$comidaFavorita=null){
             $this->nombre=$nombre;
             $this->edad=$edad;
             $this->color=$color;
             $this->tipo=$tipo;
             $this->comidaFavorita=$comidaFavorita;

        }
    }

   /* $animal1= new Animal("Kita",3,"blanco-negro","gato","pescado");
    $animal2 = new Animal("Jetta",2,"maron","perro","carne");

    var_dump($animal1);
    var_dump($animal2);
 */



 ?>