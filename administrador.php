<?php
try {
		$conexion = new PDO('mysql:host=localhost; dbname=asistenciadb', 'root', '');
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	$statement0 = $conexion->prepare('SELECT nombre FROM asistenciadb.usuario');
	$statement0->execute();
	$resultado0 = $statement0->fetch();

	$statement = $conexion->prepare('select count(estadoasistencia_idestadoasistencia) from asistenciadb.asistencia where estadoasistencia_idestadoasistencia = 2');
	$statement->execute();
	$resultado1 = $statement->fetch();

	$statement1 = $conexion->prepare('select count(estadoasistencia_idestadoasistencia) from asistenciadb.asistencia where estadoasistencia_idestadoasistencia = 1');
	$statement1->execute();
	$resultado = $statement1->fetch();

require 'views/administrador_view.php';
?>   