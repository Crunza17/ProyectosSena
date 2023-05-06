<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla_pequeña" border="1"><th>Id.</th><th>Nombre</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["ID_CARGO"].'</br>'.'</td>
						<td>'.$dato["NOM_CARGO"].'</br>'.'</td> 
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>