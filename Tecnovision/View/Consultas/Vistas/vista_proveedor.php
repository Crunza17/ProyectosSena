<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Nombre</th><th>Teléfono</th><th>Dirección</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr>
						<td>'.$dato["ID_PROVEEDOR"].'</br>'.'</td>
						<td>'.$dato["NOM_PROVEEDOR"].'</br>'.'</td> 
						<td>'.$dato["TEL_PROVEEDOR"].'</br>'.'</td> 
						<td>'.$dato["DIRECCION_PROVEEDOR"].'</br>'.'</td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>
