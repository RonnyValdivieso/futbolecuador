<hmtl>
	<head>Recuperando datos de MySql desde PHP </head>
	<body>
		<fieldset>
		<legend>Tabla de Posiciones</legend>
		<td>  Equipos </td> 
		<td>  Partidos jugados</td> 
		<td>  Goles a favor </td> 
	<div>
		<?php
		include("conexion.php");
		$Con = new DBConnection();
		$Con -> obtenerDatos();

				?>
	</div>
	</fieldset>
	</body>
</html>

