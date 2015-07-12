<?php
	$nombre = $_REQUEST['nombre'];

	$conexion = mysql_connect("localhost", "root", "root") or die("FALLÓ LA CONEXIÓN CON EL SERVIDOR");

	mysql_select_db("futbolec", $conexion) or die("NO SE PUDO CONECTAR CON LA BASE DE DATOS");

	$guardar = mysql_query("INSERT INTO equipo VALUES (NULL, '".$nombre."')", $conexion);

	function consultar() {
		$result = array();
		$consultar = mysql_query("SELECT * FROM equipo where nombre = '".$nombre."'", $conexion);
		
		while($fila = mysql_fetch_array($consultar)) {
			array_push($consultar, array('nombre' => $fila[1]));
		}

		echo json_encode(array("result" => $consultar));
	}

	if ($guardar) {
		echo "Equipo creado!";
	} else {
		echo "Error al guardar!";
	}

	mysql_close();
?>