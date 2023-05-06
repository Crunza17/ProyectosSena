<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Nombre</th><th>Dirección</th><th>Teléfono</th><th>Salario</th><th>Fecha de ingreso</th><th>Cargo</th><th>Usuario</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["ID_EMPLEADO"].'</br>'.'</td>
						<td>'.$dato["NOMBRE_EMPLEADO"].'</br>'.'</td> 
						<td>'.$dato["DIRECCION_EMPLEADO"].'</br>'.'</td> 
						<td>'.$dato["TEL_EMPLEADO"].'</br>'.'</td> 
						<td>'.$dato["SALARIO_EMPLEADO"].'</br>'.'</td>
						<td>'.$dato["FECHA_INGRESO_EMPLEADO"].'</br>'.'</td>
						<td>'.$dato["ID_CARGO_EMPLEADO_FK"].'</br>'.'</td>
						<td>'.$dato["ID_USUARIO_EMPLEADO_FK"].'</br>'.'</td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>