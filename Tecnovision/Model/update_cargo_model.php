<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update CARGO set NOM_CARGO='$_REQUEST[txtnom]' WHERE ID_CARGO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/cargo.php');
?>