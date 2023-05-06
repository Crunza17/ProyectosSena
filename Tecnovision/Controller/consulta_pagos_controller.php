<?php
	require_once("../../Model/consulta_pagos_model.php");
	$per = new personas_mod();
	$datos = $per -> get_personas();

	require_once("Vistas/vista_pagos.php");
?>