<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Personas</title>
		<link rel="stylesheet" type="text/css" href="../../Assets/Styles/tablas.css">
	</head>
	<body>
		<center>
			<table id="tabla" border="1"><th>Id.</th><th>Saldo</th><th>Abono</th><th>Iva</th><th>Fecha</th><th>Valor</th><th>Id.Empleado</th><th>Id.Proveedor</th>
				<?php
					foreach($datos as $dato)
					{
						echo '<tr> 
						<td>'.$dato["ID_FRA_COMPRA"].'</br>'.'</td>
						<td>'.$dato["SALDO_FRA_COMPRA"].'</br>'.'</td> 
						<td>'.$dato["ABONO_FRA_COMPRA"].'</br>'.'</td> 
						<td>'.$dato["IVA_FRA_COMPRA"].'</br>'.'</td> 
						<td>'.$dato["FECHA_FRA_COMPRA"].'</br>'.'</td>
						<td>'.$dato["VALOR_FRA_COMPRA"].'</br>'.'</td>
						<td>'.$dato["ID_EMPLEADO_FRA_COMPRA_FK"].'</br>'.'</td>
						<td>'.$dato["ID_PROVEEDOR_FRA_COMPRA_FK"].'</br>'.'</td>
						</tr>';
					}
				?>
			</table>
		</center>
	</body>
</html>