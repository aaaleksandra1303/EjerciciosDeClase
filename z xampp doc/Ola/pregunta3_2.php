<!DOCTYPE html>
<html>
<head>
    <title>pregunta3 ejemplo2</title>
</head>
<body>
   <?php

    $people = [
                ['name'=>'Juan','age'=>15],
                ['name'=>'Paco','age'=>16]
    ];


$diff = $people[0]['age']- $people[1]['age'];
// si negativo: *-1 para hallar el absoluto
if ($diff < 0){
    $diff = $diff * -1;
}
$pos = ($people[0]['age'] <=> $people[1]['age']);

     echo "la diferencia es de $diff. ";

     switch($pos){
            case '-1':
                echo "{$people[0]['name']} es menor que {$people[1]['name']}";
                break;
            case '1':
                echo "{$people[0]['name']} es mayor {$people[1]['name']}";
                break;
            case '0':
                echo "{$people[0]['name']} tiene la misma edad que {$people[1]['name']}  ";
                break;
            default:
            echo " error!";

     }



      ?>

</body>
</html>