<?php
	$errores = [];
	$id_empleado = $_POST['txtid'];
	$nombre_empleado = $_POST['txtnom'];
	$direccion_empleado = $_POST['txtdirec'];
	$telefono_empleado = $_POST['txttel'];
	$cargo_empleado = $_POST['txtcargo'];
	$salario_empleado = $_POST['txtsalario'];
	$fecha_empleado = $_POST['txtfecha'];
	$usuario_empleado = $_POST['txtidusuario'];


	if(empty($nombre_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese un nombre *</p><br>";
		$errores[] = 'error';
	}
	else if(strlen($nombre_empleado) > 15) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El nombre es muy largo *</p><br>";
		$errores[] = 'error';
	}
	else if (!preg_match("/^[a-zA-ZñÑ-áéíóúÁÉÍÓÚ ]*$/", $nombre_empleado)) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El nombre solo puede contener letras *</p><br>";
		$errores[] = 'error';
	}

	if(empty($telefono_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese un teléfono *</p><br>";
		$errores[] = 'error';
	}
	else if(!is_numeric($telefono_empleado) ) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El teléfono debe ser un número *</p><br>";
		$errores[] = 'error';
	}

	if(empty($id_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese un Id *</p><br>";
		$errores[] = 'error';
	}
	else if(!is_numeric($id_empleado) ) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El Id debe ser un número *</p><br>";
		$errores[] = 'error';
	}

	if(empty($cargo_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese un cargo *</p><br>";
		$errores[] = 'error';
	}
	else if(!is_numeric($cargo_empleado) ) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El id. de cargo debe ser un número *</p><br>";
		$errores[] = 'error';
	}

	if(empty($usuario_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese un usuario *</p><br>";
		$errores[] = 'error';
	}
	else if(!is_numeric($usuario_empleado) ) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El id. de usuario debe ser un número *</p><br>";
		$errores[] = 'error';
	}

	if(empty($salario_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese un salario *</p><br>";
		$errores[] = 'error';
	}
	else if(!is_numeric($salario_empleado) ) {
		require_once('../View/empleados.php');
		echo "<p class='error'>* El salario debe ser un número *</p><br>";
		$errores[] = 'error';
	}

	if(empty($direccion_empleado)){
		require_once('../View/empleados.php');
		echo "<p class='error'>* Ingrese una dirección*</p><br>";
		$errores[] = 'error';
	}

	if (!$errores){
		require_once ('../Model/insert_empleados_model.php');
	}
?>