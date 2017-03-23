    <!DOCTYPE html>
    <html>
    <head>
        <title>FORM</title>
    </head>
    <body>

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


