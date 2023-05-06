<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from PROVEEDOR where ID_PROVEEDOR='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/proveedor.php');
?>