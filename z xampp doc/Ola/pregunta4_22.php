<!DOCTYPE html>
<html>
<head>
    <title>
        pregunta 4.2 ejemplo 2
    </title>
</head>
<body>
    <?php

    $numero =2;
    $inicio=1;
    $fin=10;



   // while ($inicio<=$fin) {

       //echo $numero."*".$inicio."=".$numero*$inicio++."<br>";
// }

       for($i=$inicio;$i<=$fin;$i++)
       {
        $res=$numero*$i;
        echo "$numero*$i=$res <br>";

       }




     ?>

</body>
</html>