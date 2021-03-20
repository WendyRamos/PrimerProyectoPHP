<?php
try {
    $conexion = new PDO('mysql:host=localhost; dbname=cramer', 'root', '');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$statement = $conexion->prepare("SELECT * FROM cramer.estadoasistencia");
$statement->execute();
$rows = $statement->fetchAll(\PDO::FETCH_OBJ);
var_dump($rows);
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo_barras = $_POST['codigo_barras'];
    $estado = $_POST['estado'];

    $statement = $conexion->prepare('SELECT * FROM cramer.alumno, cramer.grado, cramer.grupo WHERE codigo_barras = :codigo_barras');
    $statement->execute(array(':codigo_barras' => $codigo_barras));
     $resultado = $statement->fetch();

     $statement1 = $conexion->prepare('SELECT idestadoasistencia, idalumno FROM cramer.asistencia, cramer.alumno');
     $statement1->execute();
     $resultado1 = $statement1->fetchAll();

     if($resultado == false) {
        header('Location: error.php');
     }

}*/

require 'views/lectorCodigo_view.php';

?>   