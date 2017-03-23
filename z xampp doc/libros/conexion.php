<?php

try{

        $pdo=new PDO('mysql:host=localhost;dbname=libros;charset=UTF8','root','');
       // echo "me conectado a base de datos!!!";

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }catch(Exception $e){
        die("No se puede conectar:".$e->getMessage());

    }


    $stmt=$pdo->prepare('Select id,autor,titulo from libros');
    $stmt->execute();
    $libros=$stmt->fetchAll();





 ?>


