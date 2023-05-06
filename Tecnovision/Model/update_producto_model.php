<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update PRODUCTOS set NOMBRE_PRODUCTO='$_REQUEST[txtnom]', CANT_PRODUCTO='$_REQUEST[txtcant]',
		PRECIO_PRODUCTO='$_REQUEST[txtprecio]', FECHA_PRODUCTO='$_REQUEST[txtfecha]'  where ID_PRODUCTO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/productos.php');
?>