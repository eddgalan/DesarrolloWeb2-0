<?php
	//Crea un arreglo
	$arreglo=array("Edson","Betzy","Oswaldo","Daniel","Josue","Alan","Dato");
	echo "<p>Mostrando un dato del arreglo: </p>";
	echo $arreglo[1];			//Muestra el valor del indice 1 del arreglo
	
	echo "<p>Mostrando el arreglo completo (print_r): </p>";
	print_r($arreglo);					//Muestra el arreglo
	echo "<p>La longitud del arreglo es: ".sizeof($arreglo)."</p>";	//Muestra la longitud del arreglo
	
	echo "<p>Mostrando el arreglo completo (var_dump): </p>";
	var_dump($arreglo);					//Muestra el arreglo
	
	//Asociado elementos en un array
	$arrayFecha["dia"]=15;
	$arrayFecha["mes"]="Enero";
	$arrayFecha["año"]=2019;
	echo "<p>arrayFecha con datos asociados: </p>";
	var_dump($arrayFecha);
	
	//Eliminando un elemento del array
	unset($arreglo[6]);
	echo "<p>Se elimino el indice 6 del arreglo: </p>";
	var_dump($arreglo);
	
	//Inserta un elemento en el Array
	echo "<p>Se agregó un elemento al arreglo: </p>";
	array_push($arreglo,"Abraham");		//Inserta un elemento en el arreglo
	var_dump($arreglo);					//Muestra el arreglo completo
	
	//Ordenando inversamente el arreglo
	$arregloInverso=array_reverse($arreglo);
	echo "<p>El arreglo ordenando inversamente: </p>";
	var_dump($arregloInverso);
	
	/*
	Otras funciones con arreglos:
	array_pop() - Extrae el último elemento del final del array
	array_shift() - Quita un elemento del principio del array
	array_unshift() - Añadir al inicio de un array uno a más elementos
	*/
	
?>