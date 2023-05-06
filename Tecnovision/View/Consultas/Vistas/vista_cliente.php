<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Estado</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr>
						<td>'.$dato["ID_CLIENTE"].'</br>'.'</td>
						<td>'.$dato["NOM_CLIENTE"].'</br>'.'</td> 
						<td>'.$dato["APELLIDOS_CLIENTE"].'</br>'.'</td> 
						<td>'.$dato["TEL_CLIENTE"].'</br>'.'</td>
						<td>'.$dato["ESTADO_CLIENTE"].'</br>'.'</td> 
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>

