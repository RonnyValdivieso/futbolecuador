<?php
	class conexion {
		function obtenerDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "pruebita";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
			mysql_select_db($db, $con) or die ("No se encontró la base de datos");
			$query = "SELECT * FROM posiciones primera etapa";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)){
				echo "$fila[Equipos] <br>";
				echo "$fila[Partidos Jugados] <br>";
				echo "$fila[Goles a favor] <br>";
				echo "$fila[Goles en contra] <br>";
				echo "$fila[Gol diferencia] <br>";
				echo "$fila[Puntos] <br>";
				echo "$fila[Racha] <br>";
				echo "$fila[Rendimiento] <br>";
			}
		}

	}


?>