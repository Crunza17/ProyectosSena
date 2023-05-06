<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into DETALLE_VENTA values ('$_REQUEST[txtcantidad]','$_REQUEST[txtsubtotal]','$_REQUEST[txtvalor]','$_REQUEST[txtidprod]','$_REQUEST[txtidfact]');") 
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/det_ventas.php');
?>
