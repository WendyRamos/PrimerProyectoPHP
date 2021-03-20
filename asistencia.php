<?php
try {
		$conexion = new PDO('mysql:host=localhost; dbname=asistenciadb', 'root', '');
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}


$statement0 = $conexion->prepare('SELECT nombre FROM asistenciadb.usuario');
$statement0->execute();
$resultado0 = $statement0->fetch();

$statement = $conexion->prepare('SELECT alumno_idalumno, estadoasistencia_idestadoasistencia FROM asistenciadb.asistencia WHERE estadoasistencia_idestadoasistencia = 1');
$statement->execute();
$resultado = $statement->fetchAll();

$statement1 = $conexion->prepare('SELECT idalumno FROM asistenciadb.alumno');
$statement1->execute();
$resultado1 = $statement1->fetchAll();

if($resultado[0] == $resultado1[0]){
	$statement2 = $conexion->prepare('SELECT nombres, paterno, materno FROM asistenciadb.alumno');
$statement2->execute();
$resultado2 = $statement2->fetchAll();
var_dump($resultado2);
}
var_dump($resultado);


require 'views/asistencia_view.php';
?> 