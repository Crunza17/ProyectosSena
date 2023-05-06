<!DOCTYPE html>
<html>
	<head>
		<title>Empleados</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Empleados</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_empleados.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form" method="POST">
				<br><br><br><br>
				<label>Identificación:</label>
				<input type="text" name="txtid" autofocus="" required=""><br><br>
				<label class="izquierda">Nombres:</label>
				<input type="text" name="txtnom" required=""><br><br>
				<label class="izquierda">Direccion:</label>
				<input type="text" name="txtdirec" required=""><br><br>
				<label class="izquierda">Teléfono:</label>
				<input type="text" name="txttel" required=""><br><br>
				<label class="izquierda">Cargo:</label>      
				<input type="text" name="txtcargo" required=""><br><br>
				<label class="izquierda">Salario:</label>
				<input type="text" name="txtsalario" required=""><br><br>
				<label class="izquierda">Fecha:</label>
				<input type="date" name="txtfecha" required=""><br><br>
				<label class="izquierda">Id.Usuario:</label>
				<input type="text" name="txtidusuario" required=""><br><br><br>
				<!--<label class="izquierda">Id.Usuario:</label>
				<input type="text" name="txtusuario"><br><br><br><br>-->
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_empleados_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_empleados_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_empleados_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>