<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update FRA_COMPRA set SALDO_FRA_COMPRA='$_REQUEST[txtsaldo]', ABONO_FRA_COMPRA='$_REQUEST[txtabono]', IVA_FRA_COMPRA='$_REQUEST[txtiva]', FECHA_FRA_COMPRA='$_REQUEST[txtfecha]', VALOR_FRA_COMPRA='$_REQUEST[txtvalor]', ID_EMPLEADO_FRA_COMPRA_FK='$_REQUEST[txtidempleado]', ID_PROVEEDOR_FRA_COMPRA_FK='$_REQUEST[txtidproveedor]' where ID_FRA_COMPRA='$_REQUEST[txtid]';")
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/compras.php');
?>