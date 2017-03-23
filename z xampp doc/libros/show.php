<?php

require_once 'conexion.php';



    $stmt=$pdo->prepare("select * from libros where id=:id");
    $stmt->execute([ ':id' => $_GET['id'] ]);
    $libro=$stmt->fetch();

 ?>

   titulo : <?= $libro['titulo']; ?>
   autor : <?= $libro['autor']; ?>
   descripcion : <?= $libro['descripcion']; ?>