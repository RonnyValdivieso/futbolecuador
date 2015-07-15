<?php
	
	include_once("conexion.php");
	
	$nombre = $_REQUEST['nombre'];

	$guardar = mysql_query("INSERT INTO equipo VALUES (NULL, '".$nombre."')", $conexion);

	if ($guardar) {
		echo "Equipo creado!";
	} else {
		echo "Error al guardar!";
	}

	mysql_close();
?>