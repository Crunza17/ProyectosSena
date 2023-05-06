<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Cantidad</th><th>Subtotal</th><th>Valor Unitario</th><th>Id.Producto</th><th>Id.Factura</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["CANT_DETALLE_COMPRA"].'</br>'.'</td>
						<td>'.$dato["SUBTOTAL_DETALLE_COMPRA"].'</br>'.'</td> 
						<td>'.$dato["VALOR_UNIDAD_DETALLE_COMPRA"].'</br>'.'</td> 
						<td>'.$dato["ID_PRODUCTO_DETALLE_COMPRA_FK"].'</br>'.'</td> 
						<td>'.$dato["ID_FRA_COMPRA_FK"].'</br>'.'</td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>