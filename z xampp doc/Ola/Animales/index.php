<?php

namespace Animales;

require "animal.php";
require "gato.php";
require "otro\gato.php";
require 'perro.php';

use Otro\Gato as otroGato;

    $animal1= new Animal("Kita",3,"blanco-negro","gato","pescado");
    $animal2 = new Animal("Jetta",2,"maron","perro","carne");

    var_dump($animal1);
    var_dump($animal2);


    $gato1= new Gato("persian",true,"Kitka","3","blanco","pescado");

    $gato2 = new otroGato("otro",false,"kicia","2","negro");
    var_dump($gato1);
    var_dump($gato2);

    $perro1= new Perro("york",false,"tranquilo","yorki",2,"gris","sushi");










 ?>