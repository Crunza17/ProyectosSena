<!DOCTYPE html>
<html>
	<head>
		<title>Vision Global</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../Assets/Styles/menu.css"/>
		<link rel="stylesheet" href="../Assets/Styles/formprueba.css"/>
		<link rel="icon" type="imagen/png" href="../Assets/Imagenes/icon.png"/>
	</head>
	<body id="menubody">
		<div class="subtitulo">
			<div id="divimg">
				<img id="imagen_menu" src="../Assets/Imagenes/icono.png" width="180" height="150"/>
			</div>
				<input class="btnsmenu" onClick="parent.frame.location='empleados.php'" type='button' value='Empleados' id="btnempleados" style='background:url("../Assets/Imagenes/empleados.png") left center no-repeat;'/>

				<input class="btnsmenu" onClick="parent.frame.location='cliente.php'" type='button' value='Cliente' id="btncliente" style='background:url("../Assets/Imagenes/cliente.png") left center no-repeat;'/><br>

				<input class="btnsmenu" onClick="parent.frame.location='pagos.php'" type='button' value='Pagos' id="btnpagos" style='background:url("../Assets/Imagenes/dar-dinero.png") left center no-repeat;'/><br>

				<div class="desplegable">
					<input class="btnsmenu" onClick="parent.frame.location='ventas.php'" type='button' value='Ventas' id="btnventas" style='background:url("../Assets/Imagenes/bolsa-de-la-compra.png") left center no-repeat;'/><br>
					<div id="sub_menu">
						<input class="sub_dato" onClick="parent.frame.location='det_ventas.php'" type='button' value='Detalles de venta'/><br>
					</div>
				</div>

				<div class="desplegable">
					<input class="btnsmenu" onClick="parent.frame.location='compras.php'" type='button' value='Compras' id="btnservicios" style='background:url("../Assets/Imagenes/servicio-al-cliente.png") left center no-repeat;'/><br>
					<div id="sub_menu">
						<input class="sub_dato" onClick="parent.frame.location='det_compras.php'" type='button' value='Detalles de compra'/><br>
					</div>
				</div>

				<input class="btnsmenu" onClick="parent.frame.location='productos.php'" type='button' value='Productos' id="btnproductos" style='background:url("../Assets/Imagenes/lentes.png") left center no-repeat;'/><br> 

				<input class="btnsmenu" onClick="parent.frame.location='proveedor.php'" type='button' value='Proveedor' id="btnproductos" style='background:url("../Assets/Imagenes/empleados.png") left center no-repeat;'/><br> 

				<input class="btnsmenu" onClick="parent.frame.location='cargo.php'" type='button' value='Cargo' id="btnconsultar" style='background:url("../Assets/Imagenes/informacion.png") left center no-repeat;'/> <br>

				<input class="btnsmenu" onClick="parent.frame.location='formapago.php'" type='button' value='Forma pago' id="btnreportes" style='background:url("../Assets/Imagenes/deuda.png") left center no-repeat;'/><br>
			</div>
		<div id="iframe">
			<iframe src="bienvenida.php" name="frame" frameborder="0" height="100%" width="100%"></iframe>
		</div>
	</body>
</html>