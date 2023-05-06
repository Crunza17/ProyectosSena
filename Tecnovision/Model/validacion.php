<?php
session_start();
$_SESION['error']='';
	$conexion = mysqli_connect("localhost","root","","TECNOVISION") or die ("Problemas con la conexión");

	$registros = mysqli_query($conexion,"select ID_USUARIO, NOMBRE_USUARIO, CONTRA_USUARIO from USUARIO where NOMBRE_USUARIO='$_REQUEST[usuario]' AND CONTRA_USUARIO='$_REQUEST[pass]'") or
	die("Problemas en el select:".mysqli_error($conexion));

	if($reg = mysqli_fetch_array($registros))
	{
		header("location: ../View/menu.php");
	}
	else
	{
		$_SESSION['error']='Error prueba';
		header("location: ../index.php");
	}
?>