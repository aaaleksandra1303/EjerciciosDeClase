<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>

<?php

    session_start();
    session_destroy();
    header("Location:index.php");


 ?>

</body>
</html>

