<?php
	//Definimos el formato de caracteres en UTF-8
	header("Content-type: text/html; charset=\"UTF-8\"");
	//Mostrando el valor de i hasta el 10
	for($i=0;$i<=10;$i++)
		echo $i."<br>";
	//Mostrando las tablas de multiplicar de un numero:
	$num=7;
	echo "<p>Tablas de multiplicar del numero: ".$num."<br>";
	for($i=0;$i<=10;$i++)
		echo $num."x".$i."=".$num*$i."<br>";
		
?>