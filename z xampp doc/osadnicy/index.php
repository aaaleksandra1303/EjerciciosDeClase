<?php
    session_start();


    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: gra.php');
        exit();
    }


 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Osadnicy - gra przegladarkowa</title>
    <meta charset="utf-8">
</head>
<body>
    Tylko martwi ujrzeli koniec wojny - Platon <br><br>
    <form action="zaloguj.php" method="POST">

        Login: <input type="text" name="login"><br>
        Haslo: <input type="password" name="haslo"><br>
        <input type="submit" name="" value="Zaloguj sie">

    </form>

    <?php

    if(isset($_SESSION['blad'])) {//sprawdza czy taka zmienna jest ustawiona w sesji;

        echo $_SESSION['blad'];

    }
     ?>

</body>
</html>