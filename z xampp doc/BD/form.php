<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>

<form  action="users_view.php" method="POST">

    <table>
    FORMULARIO:
    <tr>

       <td> Nombre:<input type="text" name="name"></td>
    </tr>
     <tr>

       <td> email<input type="email" name="email"></td>
    </tr>
     <tr>


       <td> <input type="submit" name="" value="Envia datos"></td>
    </tr>


    </table>



</form>



<?php
require "user.php";
require


    $name=$_POST['nombre'];
    $email=$_POST['email'];




    $stmt=$pdo->prepare("insert into users(name,email) values (:name, :email)");
    $pdo->execute([':name'=>$nombre,':email'=>$email]);

 ?>
</body>
</html>


