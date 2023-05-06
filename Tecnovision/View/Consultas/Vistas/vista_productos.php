<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Nombre</th><th>Cantidad</th><th>Costo</th><th>Fecha de registro</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr>
						<td>'.$dato["ID_PRODUCTO"].'</br>'.'</td>
						<td>'.$dato["NOMBRE_PRODUCTO"].'</br>'.'</td> 
						<td>'.$dato["CANT_PRODUCTO"].'</br>'.'</td> 
						<td>'.$dato["PRECIO_PRODUCTO"].'</br>'.'</td>
						<td>'.$dato["FECHA_PRODUCTO"].'</br>'.'</td>  
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>
