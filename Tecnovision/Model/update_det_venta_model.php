<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update DETALLE_VENTA set CANT_DETALLE_VENTA='$_REQUEST[txtcantidad]', SUBTOTAL_DETALLE_VENTA='$_REQUEST[txtsubtotal]', VALOR_UNIDAD_DETALLE_VENTA='$_REQUEST[txtvalor]', ID_PRODUCTO_DETALLE_VENTA_FK='$_REQUEST[txtidprod]' where ID_FRA_VENTA_FK='$_REQUEST[txtidfact]' AND ID_PRODUCTO_DETALLE_VENTA_FK='$_REQUEST[txtidprod]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/det_ventas.php');
?>