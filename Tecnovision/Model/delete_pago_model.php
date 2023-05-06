<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from PAGOS where ID_PAGO='$_REQUEST[txtidpago]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/pagos.php');
?>