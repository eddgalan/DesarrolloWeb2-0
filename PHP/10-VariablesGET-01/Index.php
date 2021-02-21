<?php
	header ("Content-type: text/html;charset=\"UTF-8\"");
	/*
		Obtiene las variables indicadas en la URL
		En la URL deben estar indicadas las variables separadas por un &
		Ejemplo: http://localhost/Udemy/PHP/10-VariablesGET-01/?variable1=var1&variable2=3.1416
	*/
	var_dump($_GET);
	
	//Si el arreglo GET tiene valores, escribe el mensaje
	if($_GET)
		echo "<p>Hola ".$_GET['nombre']." tu edad es ".$_GET['edad']."años</p>";
	
?>

<form>
	Nombre: <input name="nombre" type="text">
	Edad: <input name="edad" type="text">
	<input type="submit" value="Enviar Datos">
</form>