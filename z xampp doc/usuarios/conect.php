<?php


    try{
        $pdo = new PDO('mysql:host=localhost;dbname=users;charset=UTF8' ,'root',"");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){

        " no se puede conectar al base de datos".$e->getMessage();
    }


    $stmt=$pdo->prepare('Select id,name,email from users');
    $stmt->execute();
    $usuarios=$stmt->fetchAll();




 ?>