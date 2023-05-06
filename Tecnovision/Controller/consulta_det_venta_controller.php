<?php
	require_once("../../Model/consulta_det_venta_model.php");
	$per = new personas_mod();
	$datos = $per -> get_personas();

	require_once("Vistas/vista_det_venta.php");
?>