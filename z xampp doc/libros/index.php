<!DOCTYPE html>
<html>
<head>
    <title>Mostara tabla con libros</title>
</head>
<body>

      <h4>  Titulo - Autor</h1>
<?php
require_once 'conexion.php';


 foreach($libros as $l):?>

    <li>
        <?=$l['titulo'].'-'.$l['autor']?>

        <a href='show.php?id=<?= $l["id"]?>'>Show</a>
        <a href='edit.php?id=<?= $l["id"]?>'>Edit </a>
        <a href='delete.php?id=<?= $l["id"]?>'>Delete </a>

    </li>


<?php endforeach ?>
 <a href="new.php" > Anadir nuevo libro </a>








</body>
</html>