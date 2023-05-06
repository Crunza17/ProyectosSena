<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from PRODUCTOS where ID_PRODUCTO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/productos.php');
?>