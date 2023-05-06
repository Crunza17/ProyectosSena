<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingresar</title>	 

	<link rel="stylesheet" href="Assets/Styles/SingUp.css">
	<link rel="icon" type="imagen/png" href="Assets/Imagenes/icon.png"/>
</head>
<body>
	<div class="Register-Box">
		<form class="FormRegister" id="FormLogin" method="POST" action="Model/validacion.php">
	    	<h4>INGRESAR</h4>
			<div class="form-input">
			    <input type="username"  class="form-control" name="usuario" autofocus=""  required="">
			    <label class="label-box" for="">Usuario</label>
			</div>
			<div class="form-input">
			    <input type="password"  class="form-control" name="pass" required="">
			    <label class="label-box" for="">Contraseña</label>
			</div>        
			<button type="submit"  class="btn-enviar">Ingresar</button> 
			<a id="registro" href="View/registro.php">¿No tienes un usuario? ¡Regístrate!</a>
			<br>
			</div>
		</form>
    </div>
</body>
</html>