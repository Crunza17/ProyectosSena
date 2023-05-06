<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update DETALLE_COMPRA set CANT_DETALLE_COMPRA='$_REQUEST[txtcantidad]', SUBTOTAL_DETALLE_COMPRA='$_REQUEST[txtsubtotal]', VALOR_UNIDAD_DETALLE_COMPRA='$_REQUEST[txtvalor]', ID_PRODUCTO_DETALLE_COMPRA_FK='$_REQUEST[txtidprod]' where ID_FRA_COMPRA_FK='$_REQUEST[txtidfact]' AND ID_PRODUCTO_DETALLE_COMPRA_FK='$_REQUEST[txtidprod]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/det_compras.php');
?>