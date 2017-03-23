<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parrafos</title>
</head>
<body>
	<p>1-parrafo</p>

	<p>2-parrafo</p>

	<p>3-parrafo</p>

	<p>4-parrafo</p>
	
	<script type="text/javascript">
		var parrafos = document.getElementsByTagName('p');
	
		for(i=0; i<parrafos.length; i++){
			var contenido = alert(parrafos[i].innerHTML)
		}
		do{
		var new_parrafo = document.createElement("p");
		var new_contenido = document.createTextNode(prompt('Añada un nuevo texto')); // No me funciona con new_parrafo.innerHTML , no me escribe el parrafo ¿?
		new_parrafo.appendChild(new_contenido);
		document.body.appendChild(new_parrafo);	
		}while (new_contenido.length != 0); // No me funciona con (new_contenido != ("")) ¿?
	</script>
</body>
</html>