<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update PROVEEDOR set NOM_PROVEEDOR='$_REQUEST[txtnom]', TEL_PROVEEDOR='$_REQUEST[txttel]',
		DIRECCION_PROVEEDOR='$_REQUEST[txtdirec]' where ID_PROVEEDOR='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/proveedor.php');
?>