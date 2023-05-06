<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into PRODUCTOS values ('$_REQUEST[txtid]','$_REQUEST[txtnom]','$_REQUEST[txtcant]','$_REQUEST[txtprecio]','$_REQUEST[txtfecha]');")
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/productos.php');
?>