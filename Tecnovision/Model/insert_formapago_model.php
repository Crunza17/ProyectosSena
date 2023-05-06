<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into FORMA_PAGO values ('$_REQUEST[txtid]','$_REQUEST[txtnom]');") or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/formapago.php');
?>