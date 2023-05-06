<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from FRA_VENTA where ID_FRA_VENTA='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/ventas.php');
?>