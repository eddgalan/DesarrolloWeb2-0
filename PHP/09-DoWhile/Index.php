<?php
	header("Content-type: text/html;charset=\"UTF-8\"");
	$i=0;			//Declaramos i=0.
	//Declaramos el arreglo y le asignamos los datos
	$arregloVideojuegos=Array("Left 4 Dead","Resident Evil","Tomb Raider","PayDay","Crash");
	do{
		echo "<p>".$arregloVideojuegos[$i]."</p>";	//Mostramos el dato del arreglo con el indice i.
		$i++;										//Incrementamos i.
	}while($i<sizeof($arregloVideojuegos));
	
	
?>