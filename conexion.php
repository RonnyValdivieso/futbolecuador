<?php
	$conn = mysql_connect('localhost', 'root', 'root')or die("No se pudo conectar a la base de datos");
	$db = mysql_select_db('futbolecuador') or die ("No se encontró la base de datos");
?>