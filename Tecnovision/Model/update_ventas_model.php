<?php
	include ('../Conexion/conexion.php');
	$conexion -> query("update FRA_VENTA set SALDO_FRA_VENTA='$_REQUEST[txtsaldo]', ABONO_FRA_VENTA='$_REQUEST[txtabono]', IVA_FRA_VENTA='$_REQUEST[txtiva]', FECHA_FRA_VENTA='$_REQUEST[txtfecha]', VALOR_FRA_VENTA='$_REQUEST[txtvalor]', ID_CLIENTE_FRA_VENTA_FK='$_REQUEST[txtidcliente]', ID_EMPLEADO_FRA_VENTA_FK='$_REQUEST[txtidempleado]', ID_FORMA_PAGO_FRA_VENTA='$_REQUEST[txtidformadepago]' where ID_FRA_VENTA='$_REQUEST[txtid]';")
	or die($mysql -> error);
	$conexion -> close();

	header('Location: ../View/ventas.php');
?>