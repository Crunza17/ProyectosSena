<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into CLIENTE values ('$_REQUEST[txtid]','$_REQUEST[txtnom]','$_REQUEST[txtapell]','$_REQUEST[txttel]', '$_REQUEST[cmbestado]');") or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/cliente.php');
?>