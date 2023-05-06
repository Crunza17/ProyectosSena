<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from EMPLEADO where ID_EMPLEADO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/empleados.php');
?>