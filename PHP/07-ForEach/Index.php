<?php
	//Declaramos un arreglo con los valores especificados entre comillas
	$amigos=Array("Betzy","Oswaldo","Daniel","Abraham");
	//Mostrando los datos usando foreach
	foreach($amigos as $nombre)
		echo "<p>".$nombre."</p>";
	var_dump($amigos);
	
	//Otra forma de mostrar los datos con el foreach
	foreach($amigos as $clave=>$valor)
		echo "<p>".$amigos[$clave]."=".$valor."</p>";
	
?>