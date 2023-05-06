<!DOCTYPE html>
<html>
	<head>
		<title>Cliente</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
		<link rel="icon" type="imagen/png" href="../Assets/Imagenes/cliente.png"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Cliente</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_cliente.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form" method="POST">
				<br><br><br><br>
				Identificación:
				<input type="text" name="txtid" autofocus="" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Nombres:       
				<input type="text" name="txtnom" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" 
         title="Solo se permite escribir letras" required=""><br><br>
				Apellidos:     
				<input type="text" name="txtapell" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" 
         title="Solo se permite escribir letras" required=""><br><br>
				Teléfono:      
				<input type="text" name="txttel" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Estado:
				<select name="cmbestado" class="select">
					<option value="Activo" selected>Activo</option>
					<option value="Inactivo">Inactivo</option>
				</select><br><br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_cliente_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_cliente_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_cliente_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>
</html>
