<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update EMPLEADO set NOMBRE_EMPLEADO='$_REQUEST[txtnom]', DIRECCION_EMPLEADO='$_REQUEST[txtdirec]', TEL_EMPLEADO='$_REQUEST[txttel]', SALARIO_EMPLEADO='$_REQUEST[txtsalario]', FECHA_INGRESO_EMPLEADO='$_REQUEST[txtfecha]', ID_CARGO_EMPLEADO_FK='$_REQUEST[txtcargo]',  ID_USUARIO_EMPLEADO_FK='$_REQUEST[txtidusuario]' where ID_EMPLEADO='$_REQUEST[txtid]';")
	or die("Error");
	$conexion -> close();

	header('Location: ../View/empleados.php');
?>