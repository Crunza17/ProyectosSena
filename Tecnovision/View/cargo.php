<!DOCTYPE html>
<html>
	<head>
		<title>Cargo</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
		<link rel="icon" type="imagen/png" href="../Assets/Imagenes/dar-dinero.png"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Cargo</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_cargo.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form" method="POST">
				<br><br><br><br>
				Código:
				<input type="text" name="txtid" autofocus="" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Nombre:      
				<input type="text" name="txtnom" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" 
         title="Solo se permite escribir letras" required=""><br><br>
				<br><br><br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action ='../Controller/insert_cargo_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action ='../Controller/update_cargo_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action ='../Controller/delete_cargo_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>