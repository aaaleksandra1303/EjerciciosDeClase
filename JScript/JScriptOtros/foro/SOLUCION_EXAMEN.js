/////////////////////////////////////////////////
//PRUEBA 09 - 01 - 2017 /////MÓDULO 0
/////////////////////////////////////////////////

//CREAR UN PROGRAMA QUE LEA 10 NÚMEROS Y LOS VAYA INTRODUCIÉNDO EN UN ARRAY.

//***EL PROGRAMA COMPROBARÁ QUE EL DATO INTRODUCIDO SEA NUMÉRICO. EN CASO CONTRARIO SE RECHAZARÁ ESE DATO 
//***VOLVIÉNDOLO A SOLICITAR.
//***LOS NÚMEROS LOS IRÁ PIDIENDO DE ESTA FORMA: "INTRODUCE EL 1º NÚMERO", "INTRODUCE EL 2º NÚMERO", ETC.

//CREAR UN MENÚ PARA QUE EL PROGRAMA REALICE LAS SIGUIENTES OPERACIONES CON LOS DATOS DEL ARRAY Y NOS 
//MUESTRE LOS RESULTADOS:

//1)NOS DEVUELVA EL MAYOR.
//2)NOS DEVUELVA LA SUMA DE TODOS.
//3)NOS DEVUELVA LA MEDIA.
//4)NOS DEVUELVA CUÁNTOS SON PARES Y CUÁNTOS IMPARES.
//5)***NOS DEVUELVA LA SUMA DE LOS PARES Y LA SUMA DE LOS IMPARES.
//6)***QUÉ NÚMEROS SON MAYORES QUE LA MEDIA.

//***EN EL CASO QUE NO SE ELIJA EN EL MENÚ UNA OPCIÓN VÁLIDA NOS MOSTRARÁ EL MENSAJE DE "EL NÚMERO INTRODUCIDO NO ES VÁLIDO" Y NOS VOLVERÁ A MOSTRAR EL MENÚ

//ESTAS OPERACIONES DEBERÁN PROGRAMARSE MEDIANTE FUNCIONES POR SEPARADO.
//UNAS FUNCIONES PUEDEN LLAMARSE A OTRAS...

//***UNA VEZ EFECTUADA UNA OPERACIÓN NOS VOLVERÁ A MOSTRAR EL MENÚ HASTA QUE PULSEMOS UNA OPCIÓN 
 //***"SALIR"(INCLUÍDA EN EL MENÚ) QUE DARÁ FIN AL PROGRAMA.


 var aMisNumeros = new Array();
 var numeroMayor;
 var suma = 0;
 var media;
 var nPares = 0;
 var nImpares = 0;
 var sumaPares = 0;
 var sumaImpares = 0;
 var aNumerosMayoresMedia = new Array();
 var nOpcionElegida;
 var resultado;

 
 for (var i=0 ; i<10 ; i++){
 
		var miNumero = i+1;
		
		do{
		aMisNumeros[i] = prompt("Introduce el " + miNumero + "º número");
		aMisNumeros[i] = Number(aMisNumeros[i]);
		
		}while (isNaN(aMisNumeros[i]) == true)
	

 }
 
 elegirOpcion();
 
function elegirOpcion(){

	nOpcionElegida = prompt("1)Número mayor - 2)Suma de todos los números - 3)Media - 4)Cuántos son pares y cuántos impares - 5) Suma de pares e impares - 6)Listado de números superiores a la media - 7)Salir");

	 switch (nOpcionElegida){
	 
	  case "1":
		resultado = mayorNumero();
		alert ("El número mayor es el: " + resultado);
		elegirOpcion();
		break;
	  case "2":
		resultado = sumaDeTodosLosNumeros();
		alert ("La suma de todos los números es de: "+ resultado);
		elegirOpcion();
		break;
	  case "3":
		resultado = mediaDeTodosLosNumeros();
		alert ("La media de todos los números es de: "+ resultado);
		elegirOpcion();
		break;
	  case "4":
		paresEImpares();
		alert ("Hay " + nPares + " números pares y " + nImpares + " números impares");
		elegirOpcion();
		break;
	  case "5":
		sumaParesEImpares();
		alert ("La suma de los números pares es de: " + sumaPares + " y la suma de los números impares es de: " + sumaImpares);
		elegirOpcion();
		break;
	  case "6":
		resultado = numerosMayoresMedia();
		alert ("Los números mayores que la media son: " + resultado);
		elegirOpcion();
		break;
	  case "7":
		salirPrograma();
		break;
	  default:
		alert ("La elección realizada es incorrecta");
		elegirOpcion();
		break;
	 
	 }
 
 }
 
 function mayorNumero(){
 
	for (var i=0 ; i < aMisNumeros.length; i++){
	
			if (i==0){
				
				numeroMayor = aMisNumeros[0];
			}else{
			
				if(aMisNumeros[i] > numeroMayor){
				
					numeroMayor = aMisNumeros[i];
				
				}
			
			}
	
	}
	
	return numeroMayor;
	
 }
 
 
 
 function sumaDeTodosLosNumeros(){
 
 
	for (var i=0 ;  i< aMisNumeros.length ; i++){
	
		suma = suma + aMisNumeros[i];
	
	}

	return suma;
 }
 
 

 
 function mediaDeTodosLosNumeros(){
 
    var sumaAux = sumaDeTodosLosNumeros();

	var mediaAux = sumaAux / aMisNumeros.length;
	
	return mediaAux;
		
 }
 
 
 function paresEImpares(){
 
 
	for (var i=0 ;  i < aMisNumeros.length ; i++){
	
	
		 if (aMisNumeros[i]%2 == 0){
		 
			nPares++;
			
		 } else {
		 
			nImpares++;
		 }
	
	}
	
 }

 
 
 function sumaParesEImpares(){
 
	for (var i=0 ; i < aMisNumeros.length ;  i++){
	
		if (aMisNumeros[i]%2 == 0){
		
			sumaPares = sumaPares + aMisNumeros[i];
		
		}else {
		
			sumaImpares = sumaImpares + aMisNumeros[i];
		
		}
		
	}
 
 }
 

 function numerosMayoresMedia(){
 
	var mediaAux = mediaDeTodosLosNumeros();
	
 
	for (var i = 0 ; i < aMisNumeros.length ; i++){
	
		if (aMisNumeros[i] > mediaAux){
		
			aNumerosMayoresMedia.push(aMisNumeros[i]);
		
		}
	
	}
	

 
	return aNumerosMayoresMedia;
 
 }
 
 
function salirPrograma(){

  alert ("Fin Programa");

}
