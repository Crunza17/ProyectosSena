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
			<h1>Ventas</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_venta.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form">
				<br><br><br>
				Código:
				<input type="text" name="txtid" autofocus="" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Saldo:       
				<input type="text" name="txtsaldo" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Abono:     
				<input type="text" name="txtabono" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Iva:      
				<input type="text" name="txtiva" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Fecha:         
				<input type="date" name="txtfecha"><br><br>
				Valor:      
				<input type="text" name="txtvalor" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Cliente:      
				<input type="text" name="txtidcliente" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Empleado:      
				<input type="text" name="txtidempleado" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Forma de pago:      
				<input type="text" name="txtidformadepago" pattern="\d*" title="Solo se permite escribir numeros" required=""><br>
				<br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_ventas_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_ventas_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_ventas_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>