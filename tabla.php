<?php

	include_once("conexion.php");

	$query = "SELECT * FROM posicionesprimeraetapa";
	$res = mysql_query($query);
	$result = array();

	while ($row = mysql_fetch_array($res)){
		array_push($result, array('Equipos' => $row[0], 'PartidosJugados' => $row[1], 'GolesFavor' => $row[2], 'GolesContra' => $row[3], 'GolDiferencia' => $row[4],
									'Puntos' => $row[5], 'Racha' => $row[6], 'Rendimiento' => $row[7]));
	}

	echo json_encode(array("result" => $result));

	mysql_close();
?>