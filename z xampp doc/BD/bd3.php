<?php

 try{

        $pdo=new PDO('mysql:host=localhost;dbname=examen;charset=UTF8','root','');
        echo "me conectado a base de datos!!!";

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }catch(Exception $e){
        die("No se puede conectar:".$e->getMessage());

    }


    try{
        $pdo->beginTransaction();
        $pdo->exec("insert into cliente(nombre,direccion,telefono,nif, cuenta_bancaria_idcuenta_bancaria) values ('Pedro','pedro@pedro.pl','3213213','231rf4231', 1)");

        $pdo->exec("insert into cliente(nombre,direccion,telefono,nif,cuenta_bancaria_idcuenta_bancaria) values ('Pedro','pedro@pedro.pl','321321553','231r323f4231','2')");
        $pdo->commit();


    }catch(Exception $e){

        $pdo->rollBack();
        echo "Ocurrio un fallo".$e->getMessage();
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