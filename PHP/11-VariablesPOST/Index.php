<?php
	header("Content-type:text/html;charset=\"UTF-8\"");
	var_dump($_POST);
	if($_POST)
		echo "<br><p>Hola ".$_POST['nombre']." tu edad es ".$_POST['edad']."</p>";
?>

<form method="POST">
	<br>
	Inserte su nombre: <input type="text" name="nombre"><br>
	Inserte su edad: <input type="text" name="edad">
	<input type="submit" value="Enviar Datos">
	
	
</form>