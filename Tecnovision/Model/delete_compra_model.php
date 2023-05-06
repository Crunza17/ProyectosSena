<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from FRA_COMPRA where ID_FRA_COMPRA='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/compras.php');
?>