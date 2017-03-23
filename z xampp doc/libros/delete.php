<?php

require_once 'conexion.php';

if(!isset($_POST['id'])){

header("Location: index.php"); // Redireccion

}
$id=$_GET['id'];
$pdo->query("delete from libros where id='$id'"); //Para borrar el id selecionado.
?>