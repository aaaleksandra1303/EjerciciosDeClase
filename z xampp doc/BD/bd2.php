<?php
 try{

        $pdo=new PDO('mysql:host=localhost;dbname=examen;charset=UTF8','root','');
        echo "me conectado a base de datos!!!";



    }catch(Exception $e){
        die("No se puede conectar:".$e->getMessage());

    }


    $stmt=$pdo->prepare('Select nombre,direccion,telefono from cliente');
    $stmt->execute();


    echo '<table>
            <tr>
                <th>nombre</th>
                <th>direccion</th>
                <th>telefono</th>
            </tr>';


    while($cliente=$stmt->fetch()){

         echo "<tr>
                <td>{$cliente['nombre']}</td>
                <td>{$cliente['direccion']}</td>
                <td>{$cliente['telefono']}</td>
            </tr>";


    }

    echo '</table>';






?>