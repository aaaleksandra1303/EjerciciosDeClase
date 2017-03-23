<?php

require_once 'conexion.php';

if(!isset($_GET['id'])){

  header("Location: index.php"); // Redireccion
}

    $id=$_GET['id'];
    if(isset($_POST['titulo'])){
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $descripcion=$_POST['descripcion'];

        // OPC 1
        //$pdo->query("update libros set titulo='$titulo',autor='$autor',descripcion='$descripcion' where id='$id'");
        // OPC 2
         $stmt = $pdo->prepare("update libros set titulo = :titulo, autor = :autor, descripcion = :descripcion where id = :id" );
        $stmt->execute([':titulo'=>$titulo, ':autor'=>$autor, ':descripcion'=>$descripcion, ':id'=>$id]);
        header("Location: index.php");
    }

    $stmt=$pdo->prepare('select * from libros where id=:id');
    $stmt->execute([ ':id' => $_GET['id'] ]);
    $libro=$stmt->fetch();
?>

  <form  action="" method="POST">

    <table>
    FORMULARIO:
    <tr>

       <td> Titulo:<input type="text" name="titulo" value="<?=$libro['titulo']?>"></td>
    </tr>
     <tr>

       <td> Autor:<input type="text" name="autor" value="<?=$libro['autor']?>"></td>
    </tr>
    <tr>

       <td> Descripcion:<input type="text" name="descripcion" value="<?=$libro['descripcion']?>"></td>
    </tr>
     <tr>


       <td> <input type="submit" name="cambia" value="Guarda!"></td>
    </tr>




    </table>



</form>


