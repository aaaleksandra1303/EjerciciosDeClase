<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba formulario</title>
</head>
<body>

<?php
    function validateForm()
    {
     $errors = [];
         if (strlen(trim($_POST['username'])) < 6)
            {
                $errors[] = 'El nombre de usuario debe tener, al menos, 6 caracteres.';
            }

        if (strlen(trim($_POST['password'])) < 6)
            {
                 $errors[] = 'La clave de usuario debe tener, al menos, 6 caracteres.';
            }

        return $errors;
    }

        if (!empty($_POST))
        {
            $errors = validateForm();

            if (!empty($errors))
            {
                foreach ($errors as $error)
                {
                echo "$error <br>";
                }
            }
        }

    session_start();
    function tryLogin($user, $pass)
        {
            $register_username = 'olaola';
            $register_password = 'olaola';

        if($user===$register_username&& password_verify($password,$register_password){
            $_SESSION['username']=$user;
        });

        if(!empty($_SESSION['username'])){
            include 'welcome.php';

        }else(!empty($_POST){
            $errors[]='Nombre de usuario o clave incorrecta';

        }

        include 'form.php';

            return ($user === $register_username && $pass === $register_password) ? true : false;
        }





         /*if (true === $userIsRegister)
         {
            echo 'Bienvenido.';
        }else{
            echo 'Nombre de usuario o clave incorrecta';
        }
        */
?>



        <form action="" method="POST">
            <label for="username">Nombre:</label>
            <input type="text" name="username"
             required value="<?php
             if($_POST['username'])
             {

                echo $_POST['username'];
             }
            ?>">
            <label for="password">Clave:</label>
            <input type="password" name="password" required value="<?php echo $_POST['password'] ? $_POST['password'] : ''; ?>">
            <input type="submit" value="Enviar">
        </form>




</body>
</html>