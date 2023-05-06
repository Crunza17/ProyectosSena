<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("delete from CARGO where ID_CARGO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/cargo.php');
?>