<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Saldo</th><th>Abono</th><th>Iva</th><th>Fecha</th><th>Valor</th><th>Id.Cliente</th><th>Id.Empleado</th><th>Id.Forma de pago</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["ID_FRA_VENTA"].'</br>'.'</td>
						<td>'.$dato["SALDO_FRA_VENTA"].'</br>'.'</td> 
						<td>'.$dato["ABONO_FRA_VENTA"].'</br>'.'</td> 
						<td>'.$dato["IVA_FRA_VENTA"].'</br>'.'</td> 
						<td>'.$dato["FECHA_FRA_VENTA"].'</br>'.'</td>
						<td>'.$dato["VALOR_FRA_VENTA"].'</br>'.'</td>
						<td>'.$dato["ID_CLIENTE_FRA_VENTA_FK"].'</br>'.'</td>
						<td>'.$dato["ID_EMPLEADO_FRA_VENTA_FK"].'</br>'.'</td>
						<td>'.$dato["ID_FORMA_PAGO_FRA_VENTA"].'</br>'.'</td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>