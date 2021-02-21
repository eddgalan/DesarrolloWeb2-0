<?php
	header("Content-type: text/html;charset=\"UTF-8\"");
	
	$i=0;		//Declaramos i=0.
	while($i<10){
		echo "<p>".$i."</p>";		//Instrucción que se va a repetir
		$i++;						//Incrementamos el contador
	}
	
	//Recorriendo un array con while
	//Declaramos el arreglo insertando los datos
	$arrayComputadoras=Array("Lenovo","Apple","HP","Toshiba","LG");
	$i=0;											//Iniciamos el contador en i=0.
	while(sizeof($arrayComputadoras)!=0){			//Mientras el tamaño del arreglo sea diferente a 0 hacemos el ciclo
		echo "<p>".$arrayComputadoras[$i]."</p>";	//Muestra el dato.
		unset($arrayComputadoras[$i]);				//Remueve el dato del arreglo con el inice i.
		$i++;										//Incrementamos el contador para hacer lo mismo con el siguinte dato del arreglos
	}
	
?>
