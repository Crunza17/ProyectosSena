<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into PROVEEDOR values ('$_REQUEST[txtid]','$_REQUEST[txtnom]','$_REQUEST[txttel]','$_REQUEST[txtdirec]');")
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/proveedor.php');
?>