<?php
namespace web;

    class User{

        public $name;
        public $surname;
        public $age;
        public $gender;

        public function __construct($name,$surname,$age=null,$gender=null){

            $this->name=$name;
            $this->surname=$surname;
            $this->age=$surname;
            $this->gender=$gender;

        }
    }


    $pepa=new User('Pepa','Pig');
    var_dump($pepa);

    $jorge = new User('Jorge','Bla','','h');
    var_dump($jorge);


 ?>