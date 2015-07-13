<?php
	class DBConnection {
		function obtenerDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "1992beto25";
			$db = "torneo ecuatoriano 2015";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
			mysql_select_db($db, $con) or die ("No se encontró la base de datos");
			$query = "SELECT * FROM posicionesprimeraetapa";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)){
				echo "<tr>";
				echo " <td> $fila[Equipos] </td> <td> $fila[PartidosJugados] </td> $fila[GolesFavor] <td> $fila[GolesContra] </td> <td> $fila[GolDiferencia] </td> <td> $fila[Puntos] </td> <td>  $fila[Racha]  </td> <td> $fila[Rendimiento] </td> <br> ";
				echo "<tr>";
			}
		}

	}
?>