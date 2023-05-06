<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from DETALLE_VENTA where ID_FRA_VENTA_FK='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/det_ventas.php');
?>