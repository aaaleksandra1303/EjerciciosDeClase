<!DOCTYPE html>
<html>
<head>
    <title>Wyswietlenie uzytwkonikow</title>
</head>
<body>
<?php require_once 'conect.php' ?>


<table>
    <thead>
        <th>Nombre </th>
        <th>Email </th>

    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario)?>
            <tr>
                <td>
                    <?=$usuario['name']?>
                </td>
            </tr>
             <tr>
                <td>
                    <?=$usuario['email']?>
                </td>
            </tr>

    </tbody>




</table>


</body>
</html>