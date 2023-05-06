<!DOCTYPE html>
<html>
	<head>
		<title>Pagos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
		<link rel="icon" type="imagen/png" href="../Assets/Imagenes/dar-dinero.png"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Pagos</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_pagos.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form">
				<br><br><br><br>
				Valor:
				<input type="text" name="txtvalor" autofocus="" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Cliente:
				<input type="text" name="txtid" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Factura:
				<input type="text" name="txtidfact" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_pago_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_pago_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_pago_controller.php'"><br><br><br><br>
				Id.Pago:
				<input type="text" name="txtidpago"><br><br>
			</form>
		</div>
	</body>
</html>