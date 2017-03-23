<?php

class Bike{

    const WHEELS_COUNT =2;
    private $gears ;
    private $active_gear ;
    private $colour;
    private $type;
    private $wheels_size;

    function __construct($gears=[1], $colour="rojo"){
        $this->gearss = $gears;
        $this->active_gear = $this->gears[0];
        $this->colour=$colour;

    }

/*
    function __destruct(){
        echo "<h3> bicicleta {$this->colour} eliminada</h3>";
    }
*/


   /* function __get($property){
        retun
    } */

    function __toStrig(){

        return "$bicicleta de color $this->colour".count($this->gears)." marchas";
    }
    function setGear($gear)
    {
        if(in_array($gear,$this->gears))
        {
            $this->active_gear=$gear;
        }

    }



    function getGear(){
        return $this->active_gear;
    }

    function setColour($colour="red"){
        $this->colour=$colour;
    }

    function getColour(){
        return $this->colour;
    }


}
 $sombra = new Bike([1,2],'naranja');
 $bicicleta=new Bike([1,2,3],"rosa");
 $azul = new Bike([1,2,3],"azul");
 $roja= new Bike([1,2],"rojo");

echo "Creamos nueva bicicleta<br>";

//$var_dump($sombra->$gears);


//$var_dump($bicicleta->$gears);

echo "Ver marcha activa<br>";

$sombra->setGear(2);
echo $sombra->getGear();;

if($sombra->getGear()==1){
    echo "primera marcha<br>";
}else{
    echo "segunda marcha<br>";
}
echo $sombra->getColour();

// destruir
 echo "he creado $bicicleta";
 echo "he creado $sombra";








 ?>