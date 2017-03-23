<!DOCTYPE html>
<html>
<head>
	<title>pagina php</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>

</head>
<body>
	<?php
 	//phpinfo();
 		const APP_NAME="Mi primera web php";
 		echo APP_NAME;
 	?>
 	</br>

 	<?php

		echo date("d-m-Y");
	?>
	</br>
	<?php
		$name = 'Aleksandra';
		echo $name;
		//$unset($name);
		echo $name;

	 ?>
	 </br>
	 <?php
	 	var_dump('hola');
	 	var_dump(42);
	 	$a =true;
	 	var_dump($a);
	 	$b=gettype('hola');



	   ?>

	   <?php

	   echo 'Esto es un \'string\' o cadena de texto';
	   echo "esto es una cadena
	   partida en varias lineas";

	   $my_name="Aleksandra";
	   echo " hola $my_name";

	   echo 'esto se imprimiria en \n 2lineas';

    echo <<<HOLA
    Hola $my_name
    este ejemplo es cedena
    expresada mediante la sintaxis
HOLA;

echo <<<EOD
Hola $my_name
este es un ejemplo de cadena
expresada mediante la sintaxis heredoc.
EOD;

$a ="hola";


	    ?>






</body>
</html>