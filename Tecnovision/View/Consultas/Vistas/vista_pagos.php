<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla_pequeña" border="1"><th>Id.Pago</th><th>Valor</th><th>Id.Cliente</th><th>Id.Factura</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["ID_PAGO"].'</br>'.'</td>
						<td>'.$dato["VALOR_PAGO"].'</br>'.'</td> 
						<td>'.$dato["ID_CLIENTE_PAGO_FK"].'</br>'.'</td> 
						<td>'.$dato["ID_FACTURA_PAGO_FK"].'</br>'.'</td> 
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>