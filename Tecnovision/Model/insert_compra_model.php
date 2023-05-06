<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into FRA_COMPRA values ('$_REQUEST[txtid]','$_REQUEST[txtsaldo]','$_REQUEST[txtabono]','$_REQUEST[txtiva]','$_REQUEST[txtfecha]','$_REQUEST[txtvalor]','$_REQUEST[txtidempleado]','$_REQUEST[txtidproveedor]');") or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/compras.php');
?>