<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("insert into EMPLEADO values ('$_REQUEST[txtid]','$_REQUEST[txtnom]','$_REQUEST[txtdirec]','$_REQUEST[txttel]','$_REQUEST[txtsalario]','$_REQUEST[txtfecha]','$_REQUEST[txtcargo]','$_REQUEST[txtidusuario]');") 
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/empleados.php');
?>

