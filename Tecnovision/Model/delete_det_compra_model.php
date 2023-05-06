<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from DETALLE_COMPRA where ID_FRA_COMPRA_FK='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/det_compras.php');
?>