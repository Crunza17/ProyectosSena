<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into CARGO values ('$_REQUEST[txtid]','$_REQUEST[txtnom]');") or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/cargo.php');
?>