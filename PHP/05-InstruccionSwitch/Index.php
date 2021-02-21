<?php
	//Establecemos los caracteres UTF-8
	header("Content-type: text/html;charset=\"UTF-8\"");
	//Declaramos opcion como entera asignandole 1
	$opcion=5;
	switch($opcion){
		case 1:
			echo "<p>Ha seleccionado la opcion 1</p>";
			break;
		case 2:
			echo "<p>Ha seleccionado la opcion 2</p>";
			break;
		case 3:
			echo "<p>Ha seleccionado la opcion 3</p>";
			break;
		default:
			echo "<p>Opcion no válida</p>";
	}
	
	//Evaluando con cadena de texto
	$opcionTexto="Daniel";
	switch($opcionTexto){
		case "Edson":
			echo "<p>El usuario es Administrador</p>";
			break;
		case "Betzy":
			echo "<p>El usuario es Gerente</p>";
			break;
		case "Oswaldo":
			echo "<p>El usuario es Vendedor</p>";
			break;
		default:
			echo "<p>Usuario no ha sido dado de alta</p>";
	}
	
?>