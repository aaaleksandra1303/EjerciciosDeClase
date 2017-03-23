<!DOCTYPE html>
<html>
<head>
    <title>Pregunta 4.5</title>
</head>
<body>
<?php


$open = [
 'l' => [
    [10.00, 14.00],
    [16.00, 20.00]
    ],

 'm' => [[10.00, 14.00], [16.00, 20.00]],
 'x' => [[10.00, 14.00], [16.00, 20.00]],
 'j' => [[10.00, 14.00], [16.00, 20.00]],
 'v' => [[10.00, 14.00], [16.00, 20.00]],
 's' => [[10.00, 20.00]],
 'd' => []
];

$day = 'm';
$time = 15.00;
$mensaje="esta cerrado";



        // $open[$day] -> [[10.00, 14.00], [16.00, 20.00]]
        foreach ($open[$day] as $horario) {
                // horario -> [10.00, 14.00] en 1a vuelta
            if(($time >= $horario[0])&&($time<=$horario[1]))
            {
                $mensaje="esta abierto";


            }

        };
        echo $mensaje;











 ?>
</body>
</html>