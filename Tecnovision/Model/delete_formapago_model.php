<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from FORMA_PAGO where ID_FORMA_PAGO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/formapago.php');
?>