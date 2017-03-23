<?php
    session_start();

    if(!isset($_SESSION['zalogowany'])){

        header('Location:index.php');
        exit();
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>

<?php

echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';


echo "<p><b>Drewno</b>:".$_SESSION['drewno'];
echo "|<b>Kamien</b>:".$_SESSION['kamien'];
echo "|<b>Zboze</b>:".$_SESSION['zboze'];
echo "<br><br><b>E-mail</b>:".$_SESSION['email'];
echo "<br><b>Dni premium</b>:".$_SESSION['dnipremium']."</p>";



 ?>

</body>
</html>