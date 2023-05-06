<!DOCTYPE html>
<html>
	<head>
		<title>Productos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../Assets/Styles/formprueba.css"/>
	</head>
	<body>
		<div class="panel1">
			<h1>Productos</h1>
			<div class='subpanel1'>
				<iframe src="Consultas/consulta_productos.php" height="100%" width="100%"></iframe>
			</div>
		</div>
		<div class="panel">
			<form id="form" method="POST" >
				<br><br><br><br>
				Identificación:
				<input type="text" name="txtid" autofocus="" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Nombre:       
				<input type="text" name="txtnom" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" 
         title="Solo se permite escribir letras" required=""><br><br>
				Cantidad:     
				<input type="text" name="txtcant" pattern="\d*" title="Solo se permite escribir numeros" required=""><br><br>
				Precio:      
				<input type="text" name="txtprecio" pattern="[0-9,.]+" title="Solo se permite escribir numeros" required=""><br><br>
				Fecha:         
				<input type="date" name="txtfecha"><br><br>
				<br><br><br><br>
				<input class="btns" type="submit" name="btninsertar" value="Insertar" onclick="this.form.action = '../Controller/insert_producto_controller.php'"><br><br>
				<input class="btns" type="submit" name="btnmodificar" value="Modificar" onclick="this.form.action = '../Controller/update_producto_controller.php'"><br><br>
				<input class="btns" type="submit" name="btneliminar" value="Eliminar" onclick="this.form.action = '../Controller/delete_producto_controller.php'"><br><br>
			</form>
		</div>
	</body>
</html>