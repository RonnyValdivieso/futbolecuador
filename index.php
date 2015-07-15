<hmtl>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Futbol Ecuador</title>
</head>
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

