<?php
	//Declaramos usuario asignandole la cadena "Edson"
	$usuario="Edson";
	if($usuario=="Edson")
		//Si usuario es igual a "Edson" muestra mensaje de bienvenida
		echo "<h2>Welcome ".$usuario."</h2>";
	else
		//Si no muestra que no tiene acceso al sistema
		echo "<h2>El usuario $usuario no tiene acceso al sistema</h2>";
	
	//Validando si el usuario es mayor de edad
	$edad=18;
	if($edad>=18)
		//Si la edad es mayor o igual a 18 muestra bienvenida
		echo "<h2>Cumple con el requisito de edad</h2>";
	else
		//Si no cumple con la mayoría de edad
		echo "<h2>El usuario ".$usuario."NO cumple con la edad apropiada</h2>";
	
	//Usando el operador AND
	if($usuario=="Edson" && $edad>=18)
		echo "<h2>El usuario es correcto y cumple con la edad apropiada</h2>";
	else
		echo "<h2>El usuario es incorrecto o no cumple con la mayoría de edad</h2>";
?>