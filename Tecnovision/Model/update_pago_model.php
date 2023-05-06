<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update PAGOS set VALOR_PAGO='$_REQUEST[txtvalor]' WHERE ID_PAGO='$_REQUEST[txtidpago]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/pagos.php');
	/*, ID_CLIENTE_PAGO_FK='$_REQUEST[txtid]'*/
?>