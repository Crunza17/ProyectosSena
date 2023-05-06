<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="RECURSOS/style.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>NOMBRES</th><th>CELULAR</th><th>DIRECCION</th><th>CORREO</th><th colspan="	2"><a href="VISTA/personas_insert.php">AGREGAR</a></th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["NOMBRES"].'</br>'.'</td> 
						<td>'.$dato["CELULAR"].'</br>'.'</td> 
						<td>'.$dato["DIRECCION"].'</br>'.'</td> 
						<td>'.$dato["CORREO"].'</br>'.'</td> 
						<td><a class="link" href="VISTA/personas_update_view.php?ide='.$dato['NOMBRES'].'">Editar</a></td>
						<td><a class="link" href="MODELO/personas_delete_model.php?ide='.$dato['NOMBRES'].'">Eliminar</a></td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>