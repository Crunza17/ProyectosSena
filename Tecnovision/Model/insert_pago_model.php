<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into PAGOS values (null, '$_REQUEST[txtvalor]','$_REQUEST[txtid]','$_REQUEST[txtidfact]');") or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/pagos.php');
?>