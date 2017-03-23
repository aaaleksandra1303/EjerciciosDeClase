<!DOCTYPE html>
<html>
<head>
    <title>99 botteles</title>
</head>
<body>

    <?php
        $bottelas=99;
        while($bottelas>=1)
        {
            echo $bottelas." botellas de cerveza en la pared"."<br>";
            echo $bottelas." bottelas de la cerveza."."<br>"."Coge una y pasala"."<br>";
            $bottelas--;

          //  echo ($bottelas--)." bottelas de cerveza en la pared"."<br>";

        }

        echo <<<botela
        1 botella de cerveza en la pared,.<br>
        1 botella de cerveza.<br>
        Coge una y pásala,.<br>
        0 botellas de cerveza en la pared..<br>
        No quedan botellas de cerveza en la pared..<br>
        No quedan botellas de cerveza..<br>
        Ir a la tienda y comprar alguna más.....<br>
botela;


        echo $bottelas."de cerveza";


     ?>

</body>
</html>