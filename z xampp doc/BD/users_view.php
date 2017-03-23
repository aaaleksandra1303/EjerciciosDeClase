<!DOCTYPE html>
<html>
<head>
    <title>Conexion a base de datos</title>
</head>
<body>
<ul>
<?php
//include_once 'users.php';
foreach ($users as $user):?>

    <li><?=$user['name'].'-'.$user['email']?></li>

<?php endforeach;

$stmt=$pdo->prepare('SELECT * from users');
$stmt->execute();
$users=$stmt->fetchAll();
?>
</ul>


</body>
</html>

