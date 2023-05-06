<?php
	require_once("../../Model/consulta_cargo_model.php");
	$per = new personas_mod();
	$datos = $per -> get_personas();

	require_once("Vistas/vista_cargo.php");
?>