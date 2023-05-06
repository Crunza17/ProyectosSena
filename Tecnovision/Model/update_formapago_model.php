<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update FORMA_PAGO set NOM_FORMA_PAGO='$_REQUEST[txtnom]' WHERE ID_FORMA_PAGO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/formapago.php');
?>