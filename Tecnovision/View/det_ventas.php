<!DOCTYPE html>
<html>
	<head>
		<title>Ventas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
		<link rel="icon" type="imagen/png" href="../Assets/Imagenes/bolsa-de-la-compra.png"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Detalles de venta</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_det_venta.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form">
				<br><br><br>
				Cantidad:
				<input type="text" name="txtcantidad" autofocus="" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Subtotal:       
				<input type="text" name="txtsubtotal" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Valor unitario:     
				<input type="text" name="txtvalor" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Id. producto:      
				<input type="text" name="txtidprod" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Id. Factura:         
				<input type="text" name="txtidfact" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				<br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_det_venta_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_det_venta_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_det_venta_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>