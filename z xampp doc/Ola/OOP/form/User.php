<?php

namespace form;

class User extends Person{


    public $userName;
    public $email;
    public $name;
    public $surname;

    public function __contruct($userName,$email){

        $this->userName= $userName;

        $this->email =$email;

        parent::__contruct($name,$surname);
          }
}

$pepe= new User('Pepe','pepe@pepe.pl');
var_dump($pepe);
echo $pepe->$name;

echo $user->person->surname;

 ?>