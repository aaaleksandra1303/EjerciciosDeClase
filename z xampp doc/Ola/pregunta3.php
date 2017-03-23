<!DOCTYPE html>
<html>
<head>
    <title>Pregunta 3.1</title>
</head>
<body>
    <?php
    $people = [
                ['name'=>'Juan','age'=>15],
                ['name'=>'Paco','age'=>16]
    ];

    $diferencia=$people[0]['age']-$people[1]['age'];

    if($people[0]['age']==$people[1]['age']){
         echo "{$people[0]['name']} tiene la misma edad que {$people[1]['name']}  ";

        }else if($people[0]['age'] > $people[1]['age']){

            echo "{$people[0]['name']} es mayor {$people[1]['name']} diferencia entre edad es {$diferencia} ";
        }else
        {
            echo "{$people[0]['name']} es menor que {$people[1]['name']} diferencia entre edad es {$diferencia}";
        }



    ?>


</body>
</html>