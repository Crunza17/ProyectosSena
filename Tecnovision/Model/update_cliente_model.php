<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update CLIENTE set NOM_CLIENTE='$_REQUEST[txtnom]', APELLIDOS_CLIENTE='$_REQUEST[txtapell]',
		TEL_CLIENTE='$_REQUEST[txttel]', ESTADO_CLIENTE='$_REQUEST[cmbestado]' where ID_CLIENTE='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/cliente.php');
?>