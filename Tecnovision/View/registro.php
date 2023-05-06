<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>	 
	<link rel="stylesheet" href="../Assets/Styles/registro.css">
</head>
<body>
	<div class="Register-Box">
		<form class="FormRegister" id="FormLogin" method="POST" action="Model/insertar_registro.php">
	    	<h4>REGISTRARSE</h4>
			<div class="form-input">
			    <input type="username"  class="form-control" name="usuarioreg" autofocus=""  required="">
			    <label class="label-box" for="">Usuario</label>
			</div>
			<div class="form-input">
			    <input type="password"  class="form-control" name="passreg" required="">
			    <label class="label-box" for="">Contraseña</label>
			</div>        
			<button type="submit"  class="btn-enviar">Registrar</button> 
			<a id="registro" href="../index.php">¿Ya tienes un usuario? ¡Inicia sesión!</a>
		</form>
    </div>
</body>
</html>