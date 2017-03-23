<!DOCTYPE html>
<html>
<head>
    <title>


    </title>
</head>
<body>


<?php


    try{

        $pdo=new PDO('mysql:host=localhost;dbname=examen;charset=UTF8','root','');
        echo "me conectado a base de datos!!!";



    }catch(Exception $e){
        die("No se puede conectar:".$e->getMessage());

    }


    $cliente=$pdo->query('SELECT nombre,direccion,telefono FROM cliente')->fetchAll(); /// fetchAll pobiera wszystkie


    var_dump($cliente);



    echo '<table>
            <tr>
                <th>nombre</th>
                <th>direccion</th>
                <th>telefono</th>
            </tr>';


    foreach ($cliente as $c ) {

        echo "<tr>
                <td>{$c[0]}</td>
                <td>{$c[1]}</td>
                <td>{$c[2]}</td>
            </tr>";


    }




    echo '</table>';
?>


</body>
</html>



