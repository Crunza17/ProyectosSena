<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into FRA_VENTA values ('$_REQUEST[txtid]','$_REQUEST[txtsaldo]','$_REQUEST[txtabono]','$_REQUEST[txtiva]','$_REQUEST[txtfecha]','$_REQUEST[txtvalor]','$_REQUEST[txtidcliente]','$_REQUEST[txtidempleado]','$_REQUEST[txtidformadepago]');") or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/ventas.php');
?>