<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from CLIENTE where ID_CLIENTE='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/cliente.php');
?>