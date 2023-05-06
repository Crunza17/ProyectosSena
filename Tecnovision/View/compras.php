<!DOCTYPE html>
<html>
	<head>
		<title>Compras</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
		<link rel="icon" type="imagen/png" href="../Assets/Imagenes/servicio-al-cliente.png"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Compras</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_compra.php" height="100%" width="100%"></iframe>
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
				<input type="text" name="txtiva" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Fecha:         
				<input type="date" name="txtfecha" required=""><br><br>
				Valor:      
				<input type="text" name="txtvalor" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Empleado:      
				<input type="text" name="txtidempleado" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Id.Proveedor:      
				<input type="text" name="txtidproveedor" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				<br><br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_compra_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_compra_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_compra_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>