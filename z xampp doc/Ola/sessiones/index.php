<!DOCTYPE html>
<html>
<head>
    <title>Sesiones</title>
</head>
<body>
    <?php

    session_start();

    function tryLogin($user,$password)
    {
        if($user===$register_username&& password_verify($password,$register_password){
            $_SESSION['username']=$user;
        });

        if(!empty($_SESSION['username'])){
            include 'welcome.php';

        }else(!empty($_POST){
            $errors[]='Nombre de usuario o clave incorrecta';

        }

        include 'form.php';
    }


      ?>

</body>
</html>