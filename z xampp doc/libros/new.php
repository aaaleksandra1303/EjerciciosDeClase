<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>

<?php
require_once 'conexion.php';

 if(!empty($_POST)){

        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $descripcion=$_POST['descripcion'];

        $stmt=$pdo->prepare("insert into libros(titulo,autor,descripcion) values (:titulo, :autor,:descripcion)");
        $stmt->execute([':titulo'=>$titulo,':autor'=>$autor,':descripcion'=>$descripcion]);


        header("Location: index.php"); // Redireccion
    }



 ?>

<form  action="" method="POST">

    <table>
    FORMULARIO:
    <tr>

       <td> Titulo:<input type="text" name="titulo"></td>
    </tr>
     <tr>

       <td> Autor:<input type="text" name="autor"></td>
    </tr>
    <tr>

       <td> Descripcion:<input type="text" name="descripcion"></td>
    </tr>
     <tr>


       <td> <input type="submit" name="new" value="Añadir libro"></td>
    </tr>


    </table>



</form>




</body>
</html>


