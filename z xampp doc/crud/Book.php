<?php

        class Book{



            private $id;
            private $title;
            private $author;
            private $description;

            function __construct($title,$author="",$description=""){


                $this->title =$title;
                $this->author=$author;
                $this->description=$description;
            }


        static function connection(){
            return new PDO(
                "mysql:host=localhost;
                dbname=books;
                charset=utf8",
                "root","");
        }

        function getId(){
            return $this->id;
        }

        function getTitle(){
            return $this->title;
        }
        function setTitle($title){
            $this->title=$title;
            return $this; // devolver propio libro;
        }
         function setDescription($description){
            $this->description=$description;
            return $this; // devolver propio libro;
        }

        //$el_hereje= new Book('el hereje');

       static function getAll(){

        return self::connection()
            ->query('select * from books')
            ->fetchAll();


        }

        static function find($id){

            $res= self::connection()
                ->query("Select * from books where id='{$id}'")
                ->fetch();

            $book= new Book($res['title'],$res['author'],$res['description']);
            $book->id=$res['id'];
            return $book;
        }
        function getHTMlRow(){
            return '<tr><td>'.
        }

        static function getHTMLTable(){
            $res="<table>";

            foreach(self::getAll() as $book){
                $res.=$book->getHTMLTRow();
            }
            $res.="</table>"
        }
    }


        $books= Book::getAll();
        var_dump($books) ;
        $book=Book::find(1);
        var_dump($book);

        echo $book->getTitle();
        $book->setTitle('El Quijote')->setDescription('blabla');
         echo $book->getTitle();



 ?>